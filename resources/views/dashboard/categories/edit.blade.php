@extends('dashboard/layout')

@section('contents')
<h1>Edit Category</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="categoryName">Category Name</label>
        <input type="text" name="categoryName" class="form-control" value="{{ $category->categoryName }}" required>
    </div>
    <div class="form-group">
        <label for="details">Details</label>
        <textarea name="details" class="form-control" required>{{ $category->details }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update Category</button>
</form>
@endsection
