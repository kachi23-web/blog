@extends('admin.layouts.dashboard')

@section('content')
    <h1>Create New Role</h1>

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

<form method="POST" action="/roles" enctype="multipart/form-data" >
    {{ csrf_field() }}
    
    <div class="form-group">
        <label for="role_name">Role role_name</label>
        <input type="text" name="role_name" class="form-control"  id="role_name" placeholder="Role Name..." value="{{ old('role_name') }}">
    </div>
    <div class="form-group">
        <label for="role_slug">Role Slug</label>
        <input type="role_slug" name="role_slug" tag="role_slug" class="form-control" id="role_slug" value="{{ old('role_slug') }}">
    </div>
    <div class="form-group">
        <label for="roles_permission">Add Permissions</label>
        <input type="text" data-role="tagsinput" name="roles_permissions" class="form-control" id="roles_permissions" value="{{ old('role_permissions')}}" required>
    </div>
    
    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="submit">
    </div>
</form>
@section('css_role_page')
<link rel="stylesheet" href="/css/admin/bootstrap-tagsinput.css">
@endsection

@section('js_role_page')
    <script src="/js/admin/bootstrap-tagsinput.js">
    </script>

    <script>
          
          $(document).ready(function(){
             $('#role_name').keyup(function(e){
                 var str = $('#role_name').val();
                 str = str.replace(/\W+(?!$)/g, '-').toLowerCase();// replace spaces with dash
                 $('#role_slug').val(str);
                 $('role_slug').attr('placeholder', str);   
                });

          });

    </script>

@endsection

@endsection