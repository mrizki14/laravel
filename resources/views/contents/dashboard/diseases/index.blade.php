@extends('templates.pages')
 
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('diseases.create') }}"> Create New Product</a>
                </div>
            </div>
        </div>
       
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
       
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kualifikasi</th>
                <th>Tingkat Bahaya</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($diseases as $d)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->kualifikasi }}</td>
                <td>{{ $d->tingkat_bahaya }}</td>
                <td>
                    <form action="{{ route('diseases.destroy',$d->id) }}" method="POST">
       
                        <a class="btn btn-info" href="{{ route('diseases.show',$d->id) }}">Show</a>
        
                        <a class="btn btn-primary" href="{{ route('diseases.edit',$d->id) }}">Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
  
    {!! $diseases->links() !!}
      
@endsection