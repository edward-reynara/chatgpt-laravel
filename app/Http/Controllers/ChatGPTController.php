<?php

namespace App\Http\Controllers;

use App\Jobs\gptBookJob;
use App\Jobs\batchJob;
use OpenAI\Laravel\Facades\OpenAI;
use App\Models\GptBookDetail;

class ChatGPTController extends Controller
{
    public function chatPDF()
    {
        $gptBookId = 4;

        dispatch(new gptBookJob($gptBookId));
        // dispatch(new batchJob($gptBookId, 1));

        return response()->json(['success' => true, 'message' => 'onprocess create summary pdf']);
    }

}
