<form method="POST" action="/profile" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <input type="file" name="photo">
    <input type="submit">
</form>