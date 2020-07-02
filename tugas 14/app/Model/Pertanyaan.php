<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'question';
    protected $guarded = [];

    public function jawaban()
    {
    	return $this->hasMany(Jawaban::class, 'id_question');
    }
}
