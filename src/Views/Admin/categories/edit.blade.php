@extends('layouts.master')
@section('content')
<h2 class="text-center">Cập nhật danh mục</h2>
@if (!empty($_SESSION['errors']))
<div class="alert alert-warning">
    <ul>
        @foreach ($_SESSION['errors'] as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@php
    unset($_SESSION['errors']);
@endphp
@endif
<form action="{{ url("admin/categories/{$categories['id']}/update")}}">
   
    <div class="mb-3">
      <label for="name" class="form-label">Tên danh mục</label>
      <input type="text" class="form-control"  name="name" value="{{ $categories['name']}}">
    </div>
    
    <button type="submit" class="btn btn-primary">Cập nhật</button>
  </form>
    
@endsection