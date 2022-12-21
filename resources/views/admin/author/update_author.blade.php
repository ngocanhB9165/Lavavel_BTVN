@extends('admin.layout.master')
@section('content')
<div class="container">
    <h1 class="text-center">Update Author</h1>
    <form action="" method="post">
        @csrf
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name=" name" id="" class="form-control" value="{{ $author->name }}">
          @error('name')
              <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <label for="">Status</label>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="status" value="1" {{ ($author->status==1) ? 'checked' : '' }}> Hiện
            </label>
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="status" id="" value="0" {{ ($author->status==0) ? 'checked' : '' }}> Ẩn
            </label>
        </div><br>
        <button type="submit" class="btn btn-success">Sửa</button>
    </form>
</div>
   
@stop