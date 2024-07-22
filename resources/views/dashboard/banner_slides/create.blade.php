@extends('dashboard.layout')

@section('contents')
<h1>Add New Banner Slide</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('banner_slides.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" name="photo" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="details">Details</label>
        <textarea name="details" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="link">Link</label>
        <input type="text" name="link" class="form-control">
    </div>
    <div class="form-group">
        <label for="isShown">Show</label>
        <input type="checkbox" name="isShown" value="1" checked>
    </div>
    <div class="form-group">
        <label for="slideOrder">Order</label>
        <input type="number" name="slideOrder" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Banner Slide</button>
</form>

@endsection
