<form method="post" action="/profile" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <input type="file" name="image" value=''>
    <input type="submit">
</form>
