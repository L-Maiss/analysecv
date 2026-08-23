<?php

namespace App\Http\Controllers;

use App\Services\CVAnalyserService;
use App\Services\ResumeParser;
use Illuminate\Http\Request;

class CVAnalyserController extends Controller
{
    public function analyze(Request $request, ResumeParser $parser, CVAnalyserService $analyser) 
    {
        $request->validate([
            'resume' => 'required|mimes:pdf,doc,docx|max:5120',
        ]);

        try {

            $resumeText = $parser->extract(
                $request->file('resume')
            );

        } catch (\RuntimeException $e) {

            return back()
                ->withInput()
                ->withErrors([
                    'resume' => $e->getMessage(),
                ]);
        }

        if (empty(trim($resumeText))) {
            return back()
                ->withInput()
                ->withErrors([
                    'resume' => 'Unable to extract text from the uploaded resume.',
                ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Determine analysis level
        |--------------------------------------------------------------------------
        */

        $user = $request->user();

        $hasPremiumSubscription = $user?->hasActivePremiumSubscription() ?? false;

        $hasPremiumCredits = ($user?->availablePremiumCredits() ?? 0) > 0;

        $isPremium = $hasPremiumSubscription || $hasPremiumCredits;

        try {
            $result = $analyser->analyze(
                $resumeText,
                $isPremium
            );

            if (
                $user &&
                !$hasPremiumSubscription &&
                $hasPremiumCredits
            ) {
                $user->consumePremiumCredit();
            }

            return redirect()
                ->route('CVAnalyzer.response')
                ->with([
                    'result' => $result,
                    'isPremium' => $isPremium,
                ]);

        } catch (\Throwable $e) {

            report($e);

            return back()
                ->withInput()
                ->withErrors([
                    'ai' => 'Failed to analyze your resume. Please try again.',
                ]);
        }
    }
}
