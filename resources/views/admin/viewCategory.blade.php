@extends('admin.maindesign')

@section('viewCategory')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container-fluid">
    <h2>View Categories</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->category }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
                <td><a href="{{ route('admin.deleteCategory' ,$category->id ) }}" onclick="return confirm('Are U Sure ')" class="btn btn-danger">Delete</a></td>
                <td><a href="" class="btn btn-primary">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection