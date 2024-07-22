@extends('dashboard.layout')

@section('contents')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h1>Products</h1>

@if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('editor'))
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Photo</th>
            <th>Price</th>
            <th>Category</th>
            @if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('supervisor') || auth()->user()->hasRole('editor'))
                <th>Actions</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    @if($product->photo)
                        <img src="{{ asset('storage/photos/' . $product->photo) }}" alt="{{ $product->name }}" width="100">
                    @else
                        No image
                    @endif
                </td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->category->categoryName }}</td>
                <td>
                    @if(auth()->user()->hasRole('admin') || (auth()->user()->hasRole('editor') && auth()->user()->id == $product->user_id))
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endif
                    
                    @if(auth()->user()->hasRole('supervisor') && !$product->approved)
                        <a href="{{ route('supervisor.products.approve', ['product' => $product->id]) }}" class="btn btn-success">Approve</a>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
