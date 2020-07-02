@extends('template.base')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-5">
            <a href="{{url('pertanyaan/create')}}" class="btn btn-dark float-right"> <i class="fa fa-plus"></i> Tambah Pertanyaan</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @foreach($list_pertanyaan->sortByDesc('created_at') as $pertanyaan)
            <div class="card card-default">
                <div class="card-header">
                    <a href="{{url('jawaban', $pertanyaan->id)}}" class="text-dark"><b>{{$pertanyaan->title}}</b></a>
                    <label for="" class="label label-default float-right">{{$pertanyaan->created_at->format('d M Y H:i')}}</label>
                </div>
                <div class="card-body">
                    {{nl2br($pertanyaan->content)}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection