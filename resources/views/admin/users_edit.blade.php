@extends('admin.app')

@section('content')

<h3>Edit User</h3>

<form action="/admin/users/update/{{ $user->id }}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Enter user name">
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control" value="{{ $user->email }}" placeholder="Enter user email">
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Enter user password">
    </div>
    <div class="form-group">
        <select name="role" class="form-control">
            <option value="" selected disabled>Choose Role</option>
            <option value="admin" {{ $user->role != 'admin' ?: 'selected' }}>Admin</option>
            <option value="editor" {{ $user->role != 'editor' ?: 'selected' }}>Editor</option>
        </select>
    </div>
    <div class="form-group">
        <button class="form-button">Update User</button>
    </div>
</form>

@endsection
