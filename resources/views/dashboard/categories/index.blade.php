@extends('dashboard/layout')

@section('contents')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h1>Categories</h1>

<a href="{{ route('categories.create') }}" class="btn btn-primary">Add New Category</a>

<table class="table">
    <thead>
        <tr>
            <th>Category Name</th>
            <th>Details</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
         @foreach($categories as $category)
            <tr>
                <td>{{ $category->categoryName }}</td>
                <td>{{ $category->details }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
