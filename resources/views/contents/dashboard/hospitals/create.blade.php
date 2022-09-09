@extends('templates.pages')
  
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah Data Penyakit</h2>
            </div>
        </div>
    </div>
       
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
       
    <form action="{{ route('hospitals.store') }}" method="POST">
        @csrf
      
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nama Rumah Sakit</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Rumah Sakit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Lokasi Rumah Sakit</strong>
                    <input type="text" name="lokasi" class="form-control" placeholder="Masukan Lokasi Rumah Sakit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-primary" href="{{ route('hospitals.index') }}"> Back</a>
            </div>
        </div>
       
    </form>
</div>
@endsection