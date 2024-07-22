@extends('dashboard.layout')

@section('contents')
<h2>Register</h2>
<form method="POST" action="{{ route('dashboard.register.post') }}" style="max-width: 600px; margin: auto; background: #f7f7f7; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    @csrf

    <div style="margin-bottom: 15px;">
        <label for="name" style="display: block; margin-bottom: 5px;">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        @error('name')
            <div style="color: red; margin-top: 5px;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label for="email" style="display: block; margin-bottom: 5px;">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        @error('email')
            <div style="color: red; margin-top: 5px;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label for="password" style="display: block; margin-bottom: 5px;">Password:</label>
        <input type="password" id="password" name="password" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
        @error('password')
            <div style="color: red; margin-top: 5px;">{{ $message }}</div>
        @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label for="password_confirmation" style="display: block; margin-bottom: 5px;">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
    </div>

    <div style="margin-bottom: 15px;">
        <label for="role" style="display: block; margin-bottom: 5px;">Role:</label>
        <select id="role" name="role" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            <option value="admin">Admin</option>
            <option value="supervisor">Supervisor</option>
            <option value="editor">Editor</option>
        </select>
    </div>

    <div>
        <button type="submit" style="width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer;">Register</button>
    </div>
</form>
@endsection
