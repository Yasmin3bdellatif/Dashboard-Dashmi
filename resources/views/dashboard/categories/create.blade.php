@extends('dashboard/layout')

@section('contents')
<h1>Add New Category</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="categoryName">Category Name</label>
        <input type="text" name="categoryName" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="details">Details</label>
        <textarea name="details" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add Category</button>
</form>
@endsection
