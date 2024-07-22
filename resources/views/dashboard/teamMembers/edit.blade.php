<!-- resources/views/dashboard/teamMember/edit.blade.php -->
@extends('dashboard.layout')

@section('contents')
    <h1>Edit Team Member</h1>

    <form action="{{ route('team_members.update', $team_member->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $team_member->name }}" required>
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" class="form-control" id="position" value="{{ $team_member->position }}" required>
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" class="form-control" id="photo">
            <img src="{{ asset('storage/' . $team_member->photo) }}" alt="{{ $team_member->name }}" width="100">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" required>{{ $team_member->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="url" name="facebook" class="form-control" id="facebook" value="{{ $team_member->facebook }}">
        </div>
        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="url" name="twitter" class="form-control" id="twitter" value="{{ $team_member->twitter }}">
        </div>
        <div class="form-group">
            <label for="google_plus">Google+</label>
            <input type="url" name="google_plus" class="form-control" id="google_plus" value="{{ $team_member->google_plus }}">
        </div>
        <div class="form-group">
            <label for="linkedin">LinkedIn</label>
            <input type="url" name="linkedin" class="form-control" id="linkedin" value="{{ $team_member->linkedin }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Member</button>
    </form>
@endsection
