@extends('templates.pages')
 
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('hospitals.create') }}"> Create New Product</a>
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
                <th>Lokasi</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($hospitals as $d)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->lokasi }}</td>
                <td>
                    <form action="{{ route('hospitals.destroy',$d->id) }}" method="POST">
       
        
                        <a class="btn btn-primary" href="{{ route('hospitals.edit',$d->id) }}">Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
  
    {!! $hospitals->links() !!}
      
@endsection