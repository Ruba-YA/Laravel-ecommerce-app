@extends('admin.maindesign')


@section('addCategory')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>

@endif
<div class="container-fluid">
    <h2>Add Category</h2>
    <form method="POST" action="{{ route('admin.postaddCategory') }}">
        @csrf
      <input type="text" name="category" id="" placeholder="Enter Category Name">
        <input type="submit" value="Add Category">
 
</div>

@endsection