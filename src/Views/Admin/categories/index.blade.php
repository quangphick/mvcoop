@extends('layouts.master')
@section('content')
<h2 class="text-center">Danh sách danh mục</h2>
<table class="table table-bordered table-hover">
    <a href="{{ url('admin/categories/create') }}"><button class="btn btn-info">Thêm mới</button></a>
    <thead>
        <th>ID</th>     
        <th>Name</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($categories as $sp)
        <tr>
            <td>{{ $sp['id'] }}</td>
            <td>{{ $sp['name'] }}</td>          
            <td>
                                        <a href="{{ url("admin/categories/{$sp['id']}/show") }}"
                                            class="btn btn-info">Xem</a>
                                        <a href="{{ url("admin/categories/{$sp['id']}/edit") }}"
                                            class="btn btn-warning">Sửa</a>
                                        <a href="{{ url("admin/categories/{$sp['id']}/delete") }}"
                                            onclick="return confirm('Chắc chắn xóa không?');"
                                            class="btn btn-danger">Xóa</a>
                                    </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
    
@endsection