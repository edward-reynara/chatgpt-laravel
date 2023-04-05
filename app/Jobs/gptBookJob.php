<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Smalot\PdfParser\Parser;

class gptBookJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 1;

    protected int $gptBookId;

    /**
     * Create a new job instance.
     */
    public function __construct($gptBookId)
    {
        $this->gptBookId = $gptBookId;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $gptBookId = $this->gptBookId;

        //TODO
        //$pdf = GptBook::where(id,$gptBookId)->first()->path;

        $pdfParser = new Parser();
        $path = public_path();
        $pdf = $pdfParser->parseFile($path. '/' . 'novel.pdf');
        $pages = $pdf->getPages();
        $batch = 1;

        foreach($pages as $page) {
            $pageText = $page->getText();
            if (str_word_count($pageText) >= 1000) {
                $firstWords = str_word_count($pageText, 0, 500);
                $theRest = str_word_count($pageText, 500);
                dispatch(new summaryJob($gptBookId, ($batch+1), $firstWords));
                dispatch(new summaryJob($gptBookId, ($batch+1), $theRest));
            } else{
                dispatch(new summaryJob($gptBookId, $batch, $pageText));
            }
        }

        // dispatch(new batchJob($gptBookId, $batch));
    }
}
