<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GptBookDetail extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $fillable = [
        'gpt_book_id',
        'batch_no',
        'status',
        'content',
        'command',
        'result',
        'created_at',
        'updated_at',
        'deleted_at'
    ];


    public function gptBook(): BelongsTo
    {
        return $this->belongsTo(GptBook::class, 'gpt_book_id');
    }
}
