<form method="post" action="/create" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <input type="file" name="image" value=''>
    <input type="submit">
</form>
