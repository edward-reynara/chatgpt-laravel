<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use OpenAI\Laravel\Facades\OpenAI;
use App\Models\GptBookDetail;

class batchJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 1;
    protected int $gptBookId;
    public int $batch = 1;

    /**
     * Create a new job instance.
     */
    public function __construct($gptBookId, $batch)
    {
        $this->gptBookId = $gptBookId;
        $this->batch = $batch;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $gptBookId = $this->gptBookId;
        $batch = $this->batch;
        $gptBookDetails = GptBookDetail::where('gpt_book_id', $gptBookId)->where('batch_no', $batch)->get();
        $lastId = $gptBookDetails->last()->id;

        $nextString = '';
        foreach ($gptBookDetails as $gptBookDetail) {
            if (str_word_count($gptBookDetail->result) >= 1000) {
                $firstWords = str_word_count($gptBookDetail->result, 0, 500);
                $theRest = str_word_count($gptBookDetail->result, 500);
                dispatch(new summaryJob($gptBookId, ($batch+1), $firstWords));
                dispatch(new summaryJob($gptBookId, ($batch+1), $theRest));
             
            } else if (str_word_count($nextString . $gptBookDetail->result) <= 1000) {
                $nextString .= $gptBookDetail->result;
                // continue;
                if($gptBookDetail->id == $lastId){
                    dispatch(new summaryJob($gptBookId, ($batch+1), $nextString));
                }
            } else{
                // $nextString already close to 3000

                // dispatch next batch job
                dispatch(new summaryJob($gptBookId, ($batch+1), $nextString));

                // reset the $nextString
                // $nextString = $gptBookDetail->result;
                $nextString = '';
            }
        }
  

    }
}
