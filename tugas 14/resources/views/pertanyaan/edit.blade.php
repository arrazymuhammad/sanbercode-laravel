@extends('template.base')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <form action="{{url('pertanyaan', $pertanyaan->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="" class="control-label">Judul</label>
                        <input type="text" name="title" id="" class="form-control" value="{{$pertanyaan->title}}">
                    </div>
                    <div class="form-group">
                        <textarea name="content" cols="30" rows="10" class="form-control">{{nl2br($pertanyaan->content)}}</textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection