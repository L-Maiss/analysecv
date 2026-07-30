<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeminiService
{
    protected string $apiKey;
    protected string $model;

    public function __construct()
    {
        $this->apiKey = config('services.gemini.api_key');
        $this->model = config('services.gemini.model');
    }

    public function analyze(string $resume, string $jobDescription): array
    {
        $prompt = <<<PROMPT
            You are an experienced technical recruiter.

            Analyze the following resume against the job description.

            Resume:
            $resume

            Job Description:
            $jobDescription

            Return ONLY valid JSON.

            Do not wrap the response in markdown.
            Do not use ```json.
            Do not add any explanation.

            The JSON must exactly match this structure:

            {
                "ats_score": 0,
                "summary": "",
                "strengths": [],
                "weaknesses": [],
                "missing_keywords": [],
                "resume_improvements": [],
                "cover_letter": "",
                "interview_questions": [
                    {
                        "question": "",
                        "ideal_answer": ""
                    }
                ]
            }
            PROMPT;

        $response = Http::post(
            // 'https://generativelanguage.googleapis.com/v1/models/' . env('GEMINI_MODEL') . ':generateContent?key=' . env('GEMINI_API_KEY'),
            "https://generativelanguage.googleapis.com/v1/models/{$this->model}:generateContent?key={$this->apiKey}",
            [
                'contents' => [
                    [
                        'parts' => [
                            [
                                'text' => $prompt
                            ]
                        ]
                    ]
                ]
            ]
        );

        $data = $response->json();

        $text = $data['candidates'][0]['content']['parts'][0]['text'] ?? '';

        $result = json_decode($text, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception(
                'Gemini returned invalid JSON: ' . json_last_error_msg()
            );
        }

        return $result;
    }
}