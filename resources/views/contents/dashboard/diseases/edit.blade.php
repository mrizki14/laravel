@extends('templates.pages')
   
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Data Penyakit</h2>
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
      
        <form action="{{ route('diseases.update',$disease->id) }}" method="POST">
            @csrf
            @method('PUT')
       
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Nama Penyakit</strong>
                        <input type="text" name="nama" class="form-control" value="{{ $disease->nama }}" placeholder="Masukan Nama Penyakit">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Kualifikasi</strong>
                        <input type="text" name="kualifikasi" class="form-control" value="{{ $disease->kualifikasi }}" placeholder="Masukan Kualifikasi Penyakit">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <strong>Tingkat Bahaya</strong>
                    <select class="form-select" name="tingkat_bahaya" required="required">
                        <option selected>Pilih Tingkat Bahaya</option>
                        <option value="menengah" >Menengah</option>
                        <option value="berbahaya" >Berbahaya</option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Penyebab</strong>
                        <input type="text" name="penyebab" class="form-control" value="{{ $disease->penyebab }}" placeholder="Masukan Penyebab dari Penyakit">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Obat</strong>
                        <input type="text" name="obat" class="form-control" value="{{ $disease->obat }}" placeholder="Masukan Obat untunk menyembuhkan Penyakit">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pengertian</strong>
                        <textarea class="form-control" style="height:150px" name="pengertian" placeholder="Penjelasan Mengenai Penyakit">{{ $disease->pengertian }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-primary" href="{{ route('diseases.index') }}"> Back</a>
                </div>
            </div>
       
        </form>
    </div>
@endsection