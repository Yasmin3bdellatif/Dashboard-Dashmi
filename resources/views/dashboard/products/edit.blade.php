@extends('dashboard.layout')

@section('contents')
<h1>Edit Product</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(auth()->user()->hasRole('editor') && auth()->user()->id == $product->user_id)
<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
    </div>
    
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" required>{{ $product->description }}</textarea>
    </div>
    
    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" name="photo" class="form-control">
        @if($product->photo)
            <div class="mt-2">
                <img src="{{ asset('storage/photos/' . $product->photo) }}" alt="{{ $product->name }}" width="100">
            </div>
        @endif
    </div>
    
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
    </div>
    
    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-control" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->categoryName }}</option>
            @endforeach
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Update Product</button>
</form>
@else
    <p>You do not have permission to edit this product.</p>
@endif
@endsection
