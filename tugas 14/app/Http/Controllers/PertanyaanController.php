<?php

namespace App\Http\Controllers;

use App\Model\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $data['list_pertanyaan'] = Pertanyaan::all();
        return view('pertanyaan.index', $data);
    }
    public function create()
    {
        return view('pertanyaan.create');
    }
    public function store()
    {
        $jawaban = Pertanyaan::create(request()->except('_token'));
        return redirect('pertanyaan')->with('success', 'Pertanyaan Berhasil Disimpan');
    }
}
