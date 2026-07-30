<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CVAnalyserService
{
    protected string $apiKey;
    protected string $model;

    public function __construct()
    {
        $this->apiKey = config('services.gemini.api_key');
        $this->model = config('services.gemini.model');
    }

    public function analyze(string $resumeText): array
    {
        $prompt = <<<PROMPT
        You are an expert ATS resume reviewer.

        Analyze the following resume and return ONLY valid JSON.

        Do not wrap the response in markdown.
        Do not use ```json.

        Return the following structure:

        {
            "ats_score": 0,
            "summary": "",
            "strengths": [],
            "weaknesses": [],
            "missing_keywords": [],
            "resume_improvements": [],
            "recommended_job_roles": [],
            "overall_feedback": ""
        }

        Resume:

        $resumeText
        PROMPT;

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

        $text = preg_replace('/^```json\s*|\s*```$/m', '', trim($text));

        $result = json_decode($text, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception("Gemini returned invalid JSON.");
        }

        return $result;
    }
}