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
    public function show(Pertanyaan $pertanyaan)
    {
        return view('pertanyaan.show', compact('pertanyaan'));   
    }
    public function edit(Pertanyaan $pertanyaan)
    {
        return view('pertanyaan.edit', compact('pertanyaan'));
    }
    public function update(Pertanyaan $pertanyaan)
    {
        $pertanyaan->update(request()->except('_token'));
        return redirect('pertanyaan')->with('success', 'Pertanyaan Berhasil Diubah');
    }
    public function delete(Pertanyaan $pertanyaan)
    {
        $pertanyaan->jawaban->each(function($item){
            $item->delete();
        });
        $pertanyaan->delete();
        return redirect('pertanyaan')->with('success', 'Pertanyaan Berhasil Dihapus');
    }
}
