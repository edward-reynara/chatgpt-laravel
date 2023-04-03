<?php

namespace App\Http\Controllers;

use OpenAI\Laravel\Facades\OpenAI;
use Smalot\PdfParser\Parser;

class ChatGPTController extends Controller
{
     public function chatPDF()
    {

        $pdfParser = new Parser();
        $path = public_path();
        $pdf = $pdfParser->parseFile($path. '/' . 'novel.pdf');
        $pages = $pdf->getPages();

        foreach($pages as $page) {
            $pageText = $page->getText();
        }

        $pdf_string = $pdf->getText();

        $command = "
        
        
        buat kesimpulan dari cerita diatas dalam bahasa indonesia";

        $prompt = $pdf_string . $command;

        // $response = OpenAI::completions()->create([
        //     'model' => 'text-davinci-003',
        //     'prompt' => $prompt,
        // ]);
        
        $response = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
                // ['role' => 'assistant', 'content' => $prompt2],
                // ['role' => 'user', 'content' => $prompt3],
            ],
        ]);
        
        // $result = $response->toArray();
        $result = $response['choices'][0]['message']['content'];
        
        // $result = $response['choices'][0]['text'];
        // $result = $response->choices[0]->text;

        return  $result;
    }
}
