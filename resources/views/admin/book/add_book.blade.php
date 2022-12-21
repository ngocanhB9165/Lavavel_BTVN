@extends('admin.layout.master')
@section('content')
@if (session('error'))
<div class="alert alert-danger" role="alert">
  <strong>{{ session('error') }}</strong>
</div>
@endif
<div class="container">
  <h1 class="text-center">Add Book</h1>
  <form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name=" name" id="" class="form-control @error('name') border-danger @enderror" value="{{ old('name') }}">
      @error('name')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="">Price</label>
      <input type="text" name="price" id="" class="form-control @error('price') border-danger @enderror" value="{{ old('price') }}">
      @error('price')
      <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="">Image</label>
      <input type="file" name="file" id="" class="form-control @error('file') border-danger @enderror" value="{{ old('file') }}">
      @error('file')
      <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
        <label for="">Tác Giả</label>
      <select name="author_id" id="" class="form-control">
        @foreach ($author as $value)
            <option value="{{ $value->id }}">{{ $value->name }}</option>
        @endforeach
      </select>
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