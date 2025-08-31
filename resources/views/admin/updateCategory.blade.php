@extends('admin.maindesign')
<base href="/public">

@section('updateCategory')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>

@endif
<div class="container-fluid">
    <h2>Add Category</h2>
    <form method="POST" action="{{ route('admin.updateCategory' , $category->id) }}">
        @csrf

      <input type="text" name="category" id="" value="{{ $category->category }}" >
        <input type="submit" value="Update Category">
 
</div>

@endsection