<?php

namespace App\Services;

use Smalot\PdfParser\Parser;
use Illuminate\Http\UploadedFile;
// use Smalot\PdfParser\Exception\MissingPdfHeaderException;
use PhpOffice\PhpWord\IOFactory;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Str;

class ResumeParser
{
    // public function extract(UploadedFile $file): string
    // {
    //     $parser = new Parser();

    //     $pdf = $parser->parseFile($file->getRealPath());

    //     return $pdf->getText();
    // }


    public function extract(UploadedFile $file): string
    {
        // try {
            return match ($file->getClientOriginalExtension()) {
                'pdf' => $this->extractPdf($file),
                'docx' => $this->extractDocx($file),
                default => throw new \Exception('Unsupported file type.'),
            };

        // } catch (MissingPdfHeaderException $e) {

        //     throw new \RuntimeException(
        //         'The uploaded file is not a valid PDF.'
        //     );
        // }
    }

    // protected function extractPdf(UploadedFile $file): string
    // {
    //     $parser = new Parser();

    //     return $parser
    //         ->parseFile($file->getRealPath())
    //         ->getText();
    // }

    protected function extractPdf(UploadedFile $file): string
    {
        $parser = new Parser();

        $text = trim(
            $parser
                ->parseFile($file->getRealPath())
                ->getText()
        );

        if (mb_strlen($text) >= 50) {
            return $text;
        }

        return $this->extractPdfUsingOCR($file);
    }

    protected function extractDocx(UploadedFile $file): string
    {
        $phpWord = IOFactory::load($file->getRealPath());

        $text = '';

        foreach ($phpWord->getSections() as $section) {

            foreach ($section->getElements() as $element) {

                if (method_exists($element, 'getText')) {
                    $text .= $element->getText() . PHP_EOL;
                }

            }

        }

        return trim($text);
    }

    protected function extractPdfUsingOCR(UploadedFile $file): string
    {
        $tempDir = storage_path('app/temp/' . Str::uuid());

        if (!is_dir($tempDir)) {
            mkdir($tempDir, 0777, true);
        }

        $result = Process::run([
            'pdftoppm',
            '-png',
            $file->getRealPath(),
            $tempDir . DIRECTORY_SEPARATOR . 'page',
        ]);

        if (!$result->successful()) {
            throw new \RuntimeException(
                'Unable to convert PDF pages into images. ' . $result->errorOutput()
            );
        }

        $text = '';

        foreach (glob($tempDir . DIRECTORY_SEPARATOR . '*.png') as $image) {

            $text .= (new TesseractOCR($image))
                ->lang('eng')
                ->run();

            $text .= PHP_EOL . PHP_EOL;

            @unlink($image);
        }

        @rmdir($tempDir);

        return trim($text);
    }
}


// <?php

// namespace App\Services;

// use Illuminate\Http\UploadedFile;
// use PhpOffice\PhpWord\IOFactory;
// use Smalot\PdfParser\Parser;
// use thiagoalessio\TesseractOCR\TesseractOCR;

// class ResumeParser
// {
//     public function extract(UploadedFile $file): string
//     {
//         return match (strtolower($file->getClientOriginalExtension())) {
//             'pdf'  => $this->extractPdf($file),
//             'docx' => $this->extractDocx($file),
//             default => throw new \Exception('Unsupported file type.'),
//         };
//     }

//     protected function extractPdf(UploadedFile $file): string
//     {
//         $parser = new Parser();

//         $text = trim(
//             $parser
//                 ->parseFile($file->getRealPath())
//                 ->getText()
//         );

//         // Searchable PDF
//         if (!empty($text)) {
//             return $text;
//         }

//         // Image/scanned PDF
//         return $this->extractPdfUsingOCR($file);
//     }

//     protected function extractPdfUsingOCR(UploadedFile $file): string
//     {
//         $tempDir = storage_path('app/ocr/' . uniqid());

//         if (!is_dir($tempDir)) {
//             mkdir($tempDir, 0777, true);
//         }

//         $prefix = $tempDir . '/page';

//         // Convert PDF -> PNG images
//         $command = sprintf(
//             'pdftoppm -png %s %s',
//             escapeshellarg($file->getRealPath()),
//             escapeshellarg($prefix)
//         );

//         exec($command, $output, $result);

//         if ($result !== 0) {
//             throw new \Exception('Unable to convert PDF to images.');
//         }

//         $text = '';

//         foreach (glob($tempDir . '/*.png') as $image) {

//             $text .= PHP_EOL;

//             $text .= (new TesseractOCR($image))
//                 ->lang('eng')
//                 ->run();
//         }

//         // Cleanup

//         foreach (glob($tempDir . '/*.png') as $image) {
//             unlink($image);
//         }

//         rmdir($tempDir);

//         return trim($text);
//     }

//     protected function extractDocx(UploadedFile $file): string
//     {
//         $phpWord = IOFactory::load($file->getRealPath());

//         $text = '';

//         foreach ($phpWord->getSections() as $section) {

//             foreach ($section->getElements() as $element) {

//                 if (method_exists($element, 'getText')) {
//                     $text .= $element->getText() . PHP_EOL;
//                 }
//             }
//         }

//         return trim($text);
//     }
// }