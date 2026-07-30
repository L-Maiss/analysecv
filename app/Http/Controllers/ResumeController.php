<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GeminiService;
use App\Services\ResumeParser;

class ResumeController extends Controller
{
public function comparison(
    Request $request,
    ResumeParser $parser,
    GeminiService $gemini
) {
    $request->validate([
        'resume2' => 'required|mimes:pdf,doc,docx|max:5120',
        'job_description' => 'required|string|min:20',
    ]);

    $resumeText = $parser->extract(
        $request->file('resume2')
    );

    if (empty(trim($resumeText))) {
        return back()
            ->withInput()
            ->withErrors([
                'resume' => 'Unable to extract text from the uploaded resume.'
            ]);
    }

    try {
        $result = $gemini->analyze(
            $resumeText,
            $request->job_description
        );
        

        // return view('response', compact('result'));
        return redirect()->route('comparison.response')->with('result', $result);

    } catch (\Throwable $e) {

        return back()
            ->withInput()
            ->withErrors([
                'ai' => 'Failed to analyze the resume. Please try again.'
            ]);
    }
}
}
