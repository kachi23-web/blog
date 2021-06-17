@extends('admin.layouts.dashboard')

@section('content')

@if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                 <li class="w-2/5 text-gray-50 bg-red-700">
                    {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
        @endif

<form method="POST" action="/roles/{{ $role->id }}" enctype="multipart/form-data" >
    @method('PATCH')
    @csrf()
    {{ csrf_field() }}
    <h1>Update Role</h1>
    <div class="form-group">
        <label for="role_name">Role name</label>
        <input type="text" name="role_name" class="form-control" id="name" placeholder="Name..." value="{{ $role->name }}" required>
    </div>
    <div class="form-group">
        <label for="role_slug">Role Slug</label>
        <input type="text" name="role_slug" class="form-control" id="slug" placeholder="Slug..." value="{{ $role->slug }}">
    </div>
    <div class="form-group">
        <label for="roles_permission">Add Permissions</label>
        <input type="text" data-role="tagsinput" name="roles_permission" class="form-control" id="roles_permission" value="" required>
    </div>
    
    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="submit">
    </div>
@endsection
{{-- {{$role->roles_permission }} --}}