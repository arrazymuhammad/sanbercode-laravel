<?php

namespace App\Http\Controllers;

use App\Model\Jawaban;
use App\Model\Pertanyaan;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index(Pertanyaan $pertanyaan)
    {
        $data['pertanyaan'] = $pertanyaan;
        return view('jawaban.index', $data);
    }

    public function store(Pertanyaan $pertanyaan)
    {
    	$jawaban = Jawaban::create(request()->except('_token'));

    	return back()->with('success', 'Jawaban Berhasil Ditambahkan');
    }
}
