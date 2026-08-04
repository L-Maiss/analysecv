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
        You are a professional ATS (Applicant Tracking System) resume evaluator.

        Your task is to evaluate the resume using ONLY the scoring rubric below.

        IMPORTANT RULES:

        - Always use the exact rubric below.
        - Never guess or invent information.
        - If something is missing, assign 0 points for that section.
        - Be strict and objective.
        - The same resume should always receive the same score.
        - Return ONLY valid JSON.
        - Do NOT wrap the response in markdown.
        - Do NOT include explanations outside the JSON.

        SCORING RUBRIC (100 points total):

        1. Contact Information (5)
        - Name
        - Email
        - Phone
        - Location
        - LinkedIn or Portfolio (optional)

        2. Professional Summary (10)
        - Clear
        - Relevant
        - Concise

        3. Work Experience (30)
        Evaluate:
        - Relevant experience
        - Clear job titles
        - Bullet points
        - Action verbs
        - Quantifiable achievements
        - Reverse chronological order

        4. Skills (15)
        Evaluate:
        - Technical skills
        - Soft skills
        - Relevant technologies

        5. Education (10)

        6. Formatting & ATS Compatibility (10)
        Evaluate:
        - Simple formatting
        - No tables
        - No graphics
        - Readable headings

        7. Achievements & Impact (10)
        Evaluate:
        - Numbers
        - Metrics
        - Business impact

        8. Overall Completeness (10)
        Evaluate:
        - Missing sections
        - Professional appearance

        Calculate:

        ATS Score =
        Contact +
        Summary +
        Experience +
        Skills +
        Education +
        Formatting +
        Achievements +
        Completeness

        Return EXACTLY this JSON structure:

        {
        "ats_score": 0,
        "section_scores": {
            "contact_information": 0,
            "professional_summary": 0,
            "work_experience": 0,
            "skills": 0,
            "education": 0,
            "formatting": 0,
            "achievements": 0,
            "completeness": 0
        },
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