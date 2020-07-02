@extends('template.base')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <form action="{{url('pertanyaan')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="" class="control-label">Judul</label>
                        <input type="text" name="title" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection