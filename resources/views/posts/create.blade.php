@extends('layout')
 
@section('content')
  <form method="post" action="/create" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <div class="form-group">
      <label for="titleInput">タイトル</label>
      <input type="text" class="form-control" id="titleInput" name="title">
    </div>
    <div class="form-group">
      <label for="bodyInput">内容</label>
      <textarea class="form-control" id="bodyInput" rows="3" name="body"></textarea>
    </div>
    <div>
      <input type="file" name="image" value=''>
    </div>
    <!-- <div class="form-group">
      <label for="bodyInput">内容</label>
      <textarea class="form-control" id="bodyInput" rows="3" name="body"></textarea>
    </div> -->
  
  <button type="submit" class="btn btn-primary">新規追加</button>
  </form>
@endsection