Tambahkan datamu
<form action="/warga/store" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name"><br>
    <input type="text" name="user_name" placeholder="user_name"><br>
    <input type="submit" name="submit" value="save">
</form>