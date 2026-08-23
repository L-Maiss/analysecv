<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Prompts\CVAnalyserFreePrompt;
use App\Prompts\CVAnalyserPremiumPrompt;

class CVAnalyserService
{
    protected string $apiKey;
    protected string $model;

    public function __construct()
    {
        $this->apiKey = config('services.gemini.api_key');
        $this->model = config('services.gemini.model');
    }

    public function analyze(string $resumeText, bool $isPremium): array
    {
        
        $prompt = $isPremium
            ? CVAnalyserPremiumPrompt::premiumPrompt($resumeText)
            : CVAnalyserFreePrompt::freePrompt($resumeText);

        $response = Http::post(
            "https://generativelanguage.googleapis.com/v1/models/{$this->model}:generateContent?key={$this->apiKey}",
            [
                "contents" => [
                    [
                        "parts" => [
                            [
                                "text" => $prompt
                            ]
                        ]
                    ]
                ]
            ]
        );

        if (!$response->successful()) {
            throw new \Exception("Gemini request failed.");
        }

        $text = data_get(
            $response->json(),
            'candidates.0.content.parts.0.text'
        );

        $text = preg_replace(
            '/^```json\s*|\s*```$/m',
            '',
            trim($text)
        );

        $result = json_decode($text, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception("Gemini returned invalid JSON.");
        }

        return $result;
    }
}