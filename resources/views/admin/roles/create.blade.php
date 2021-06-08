@extends('admin.layouts.dashboard')

@section('content')
    <h1>Create New User</h1>

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

<form method="POST" action="/users" enctype="multipart/form-data" >
    {{ csrf_field() }}
    
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Name..." value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password"  placeholder="Password..." minlength="8">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Password Confirm</label>
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"  placeholder="Password..." minlength="8">
    </div>
    <div class="form-group">
        <label for="role">Select Role</label>
        ................
    </div>
    <div class="form-group">
        <label for="permission">Select Permission</label>
        ................
    </div>
    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="submit">
    </div>
</form>
{{-- <script>
    CKEDITOR.replace( 'user_content' );
</script> --}}
@endsection