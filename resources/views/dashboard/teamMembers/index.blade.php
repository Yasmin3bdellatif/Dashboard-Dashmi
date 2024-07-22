<!-- resources/views/dashboard/teamMember/index.blade.php -->
@extends('dashboard.layout')

@section('contents')
    <h1>Team Members</h1>

    <a href="{{ route('team_members.create') }}" class="btn btn-primary">Add New Member</a>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Photo</th>
                <th>Description</th>
                <th>Facebook</th>
                <th>Twitter</th>
                <th>Google+</th>
                <th>LinkedIn</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($team_members as $team_member)
                <tr>
                    <td>{{ $team_member->name }}</td>
                    <td>{{ $team_member->position }}</td>
                    <td><img src="{{ asset('storage/' . $team_member->photo) }}" alt="{{ $team_member->name }}" width="100"></td>
                    <td>{{ $team_member->description }}</td>
                    <td><a href="{{ $team_member->facebook }}" target="_blank">Facebook</a></td>
                    <td><a href="{{ $team_member->twitter }}" target="_blank">Twitter</a></td>
                    <td><a href="{{ $team_member->google_plus }}" target="_blank">Google+</a></td>
                    <td><a href="{{ $team_member->linkedin }}" target="_blank">LinkedIn</a></td>
                    <td>
                        <a href="{{ route('team_members.edit', $team_member->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('team_members.destroy', $team_member->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
