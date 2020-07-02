<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'answer';
    protected $guarded = [];

    public function pertanyaan()
    {
    	return $this->hasMany(Pertanyaan::class, 'id_question');
    }
}
