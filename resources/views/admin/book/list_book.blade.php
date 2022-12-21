@extends('admin.layout.master')
@section('content')
@if (session('success'))
<div class="alert alert-success" role="alert">
    <strong>{{ session('success') }}</strong>
</div>
@endif
@if (session('update_success'))
<div class="alert alert-success" role="alert">
    <strong>{{ session('update_success') }}</strong>
</div>
@endif
    <div class="container">
        <h1 class="text-center">Book</h1>
        <a href="{{ route('add_book') }}" class="btn btn-success">Thêm Mới</a>
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên Sách</th>
                    <th>Giá</th>
                    <th>Ảnh</th>
                    <th>Tác Giả</th>
                    <th>Trạng Thái</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($book as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->price }}</td>
                    <td><img src="{{url('uploads')}}/{{$value->image}}" alt="" width="150px"></td>
                    <td>{{ $value->author->name }}</td>
                    <td>{{ $value->status ? 'Hiện' : 'Ẩn'}}</td>
                    <td>
                        <a href="{{ route('update_book',$value->id) }}" class="btn btn-primary">Sửa</a>
                        <a href="{{ route('delete_book',$value->id) }}" class="btn btn-danger" onclick="return confirm ('Bạn Chắc Chắn Xóa Chứ???')">Xóa</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        {{ $book->links() }}
    </div>
@stop