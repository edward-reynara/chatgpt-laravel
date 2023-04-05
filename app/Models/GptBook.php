<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GptBook extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $fillable = [
        'company_id',
        'title',
        'writer',
        'publication_year',
        'edition',
        'publisher',
        'created_at',
        'updated_at',
        'deleted_at'
    ];


    public function details()
    {
        return $this->hasMany(GptBook::class);
    }
}
