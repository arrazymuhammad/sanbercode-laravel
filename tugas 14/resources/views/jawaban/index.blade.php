@extends('template.base')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <a href="{{url('jawaban', $pertanyaan->id)}}" class="text-dark"><b>{{$pertanyaan->title}}</b></a>
                    <label for="" class="label label-default float-right">{{$pertanyaan->created_at->format('d M Y H:i')}}</label>
                </div>
                <div class="card-body">
                    {{nl2br($pertanyaan->content)}}
                </div>
            </div>
            <form action="" method="post">
                @csrf
                <input type="hidden" name="id_question" value="{{$pertanyaan->id}}">
                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                <div class="form-group mt-2">
                    <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Jawab</button>
                </div>
            </form>

        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            {{$pertanyaan->jawaban->count()}} Jawaban Tersedia
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            @foreach($pertanyaan->jawaban as $jawaban)
                <div class="card">
                    <div class="card-header">
                        <label for="" class="label label-default float-right">{{$pertanyaan->created_at->format('d M Y H:i')}}</label>
                    </div>
                    <div class="card-body">
                        {{nl2br($jawaban->content)}}
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection