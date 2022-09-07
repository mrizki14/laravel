<a href="/warga/create">add warga</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>name</th>
        <th>username</th>
        <th>Aksi</th>
    </tr>

    
        @foreach ($warga as $w)
        <tr>
            <td>{{$w->id}}</td>
            <td>{{$w->name}}</td>
            <td>{{$w->user_name}}</td>
            <td><a href="/warga/{{$w->id}}/edit">Edit</td>
                <td>
                    <a href="/warga{{$w->id}}/edit"></a>
                    <form action="/warga/{{$w->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
        </tr>
        @endforeach
    
</table>