@extends('admin.layout.master')
@section('content')
    <div class="container">
        <a href="{{ route('add_author') }}" class="btn btn-success">Thêm Mới</a>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($author as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->status ? 'Hiện' : 'Ẩn'}}</td>
                    <td>
                        <a href="{{ route('update_author',$value->id) }}" class="btn btn-primary">Sửa</a>
                        <a href="{{ route('delete',$value->id) }}" class="btn btn-danger" onclick="return confirm ('Bạn Chắc Chắn Xóa Chứ???')">Xóa</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        {{$author->links()}}
    </div>
@stop