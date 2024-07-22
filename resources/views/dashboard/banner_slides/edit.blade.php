@extends('dashboard.layout')

@section('contents')
<h1>Edit Banner Slide</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('banner_slides.update', $bannerSlide->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" name="photo" class="form-control">
        @if($bannerSlide->photo)
            <img src="{{ asset('storage/' . $bannerSlide->photo) }}" width="100" alt="Photo">
        @endif
    </div>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $bannerSlide->title) }}" required>
    </div>

    <div class="form-group">
        <label for="details">Details</label>
        <textarea name="details" class="form-control" required>{{ old('details', $bannerSlide->details) }}</textarea>
    </div>

    <div class="form-group">
        <label for="link">Link</label>
        <input type="text" name="link" class="form-control" value="{{ old('link', $bannerSlide->link) }}">
    </div>

    <div class="form-group">
        <label for="isShown">Show</label>
        <input type="checkbox" name="isShown" value="1" {{ old('isShown', $bannerSlide->isShown) ? 'checked' : '' }}>
    </div>

    <div class="form-group">
        <label for="slideOrder">Order</label>
        <input type="number" name="slideOrder" class="form-control" value="{{ old('slideOrder', $bannerSlide->slideOrder) }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Banner Slide</button>
</form>

@endsection
