<h1>Edit Data</h1>
<form action="/warga/{{$warga->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="name" placeholder="name" value="{{$warga->name}}"><br>
    <input type="text" name="user_name" placeholder="user_name" value="{{$warga->user_name}}"><br>
    <input type="submit" name="submit" value="save">
</form>