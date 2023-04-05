<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use OpenAI\Laravel\Facades\OpenAI;
use App\Models\GptBookDetail;

class summaryJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 1;
    protected int $gptBookId;
    public int $batch = 1;
    protected string $content;

    /**
     * Create a new job instance.
     */
    public function __construct($gptBookId, $batch, $content)
    {
        $this->gptBookId = $gptBookId;
        $this->batch = $batch;
        $this->content = $content;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $gptBookId = $this->gptBookId;
        $batch = $this->batch;
        $content = $this->content;
        $command = "
        
        
        buat ringkasan dari text di atas dalam bahasa indonesia";
        // todo add suggest max 1000 words

        $prompt = $content . $command;

        $gptDetail = GptBookDetail::create([
            'gpt_book_id' => $gptBookId,
            'batch_no' => $batch,
            'status' => 'pending',
            'content' => $content,
            'command' => $command,
        ]);
        
        $response = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
        ]);
        
        $result = $response['choices'][0]['message']['content'];
        // dd($response->toArray());
        if(isset($result) && $result != null && $result != ""){
            $gptDetail->update([
                'status' => 'success',
                'result' => $result
            ]);
        } else {
            $gptDetail->update([
                'status' => 'failure',
                'result' => $response->toArray()
            ]);
        }

    }
}
