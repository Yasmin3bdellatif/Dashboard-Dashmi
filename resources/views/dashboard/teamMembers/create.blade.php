<!-- resources/views/dashboard/teamMember/create.blade.php -->
@extends('dashboard.layout')

@section('contents')
    <h1>Add New Team Member</h1>

    <form action="{{ route('team_members.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" class="form-control" id="position" required>
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" class="form-control" id="photo" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="url" name="facebook" class="form-control" id="facebook">
        </div>
        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="url" name="twitter" class="form-control" id="twitter">
        </div>
        <div class="form-group">
            <label for="google_plus">Google+</label>
            <input type="url" name="google_plus" class="form-control" id="google_plus">
        </div>
        <div class="form-group">
            <label for="linkedin">LinkedIn</label>
            <input type="url" name="linkedin" class="form-control" id="linkedin">
        </div>
        <button type="submit" class="btn btn-primary">Add Member</button>
    </form>
@endsection
