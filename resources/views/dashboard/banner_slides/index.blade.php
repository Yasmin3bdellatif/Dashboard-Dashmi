@extends('dashboard.layout')

@section('contents')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h1>Banner Slides</h1>

<a href="{{ route('banner_slides.create') }}" class="btn btn-primary">Add New Banner Slide</a>

<table class="table">
    <thead>
        <tr>
            <th>Photo</th>
            <th>Title</th>
            <th>Details</th>
            <th>Link</th>
            <th>Order</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bannerSlides as $bannerSlide)
            <tr>
                <td><img src="{{ asset('storage/banner_images' . $bannerSlide->photo) }}" width="100" alt="Photo"></td>
                <td>{{ $bannerSlide->title }}</td>
                <td>{{ $bannerSlide->details }}</td>
                <td><a href="{{ $bannerSlide->link }}" target="_blank">{{ $bannerSlide->link }}</a></td>
                <td>{{ $bannerSlide->slideOrder }}</td>
                <td>
                    <a href="{{ route('banner_slides.edit', $bannerSlide->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('banner_slides.destroy', $bannerSlide->id) }}" method="POST" style="display:inline-block;">
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
