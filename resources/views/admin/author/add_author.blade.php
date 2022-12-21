@extends('admin.layout.master')
@section('content')
<div class="container ">
    <h1 class="text-center">Add Author</h1>
    <form action="" method="post">
        @csrf
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
          @error('name')
              <small class="text-danger">{{ $message }}</small>
          @enderror
        </div>
        <label for="">Status</label>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="status" id="" value="1" checked> Hiện
            </label>
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="status" id="" value="0"> Ẩn
            </label>
        </div><br>
        <button type="submit" class="btn btn-success">Thêm Mới</button>
    </form>
</div>
    
@stop