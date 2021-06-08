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

<form method="POST" action="/users/{{ $user->id }}" enctype="multipart/form-data" >
    @method('PATCH')
    @csrf()
    {{ csrf_field() }}
    
    <div class="form-group">
        <label for="name">User name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Name..." value="{{ $user->name }}" required>
    </div>
    <div class="form-group">
        <label for="name">Email</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="Email..." value="{{ $user->email }}">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" value="{{$user->password }}" placeholder="Password." minlength="8">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Password Confirm</label>
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" value="{{$user->password_confirmation }}" placeholder="Password..." minlength="8">
    </div>
    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="submit">
    </div>
@endsection