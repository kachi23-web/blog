@extends('admin.layouts.dashboard')

@section('content')
<div class="row py-lg-2">
  <div class="col-md-6">
<h1>This is the post index</h1>
</div>

@if (auth::check())
<div class="col-md-6">
  <a href="/posts/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true"> Create New Post</a>
</div>
@endif

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Data Table Example</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Content</th>
              <th>Image'</th>
              <th>User</th>
              <th>Tools</th>
            </tr>
          </thead>
          {{-- <tfoot>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </tfoot> --}}


          @if (session()->has('message'))
              <div class="w-4/5 m-auto mt-20 pl-2">
                 <p class="w-1/6 mb-4 text-gray-50 bg-green-500 rounded-x2l py-4">
                    {{ session()->get('message') }}

                </p>

              </div>
              
          @endif

          <tbody>
            @foreach ($posts as $post)
            <tr>
              <td>{{ $post['id'] }}</td>
              <td>{{ $post['title'] }}</td>
              <td>{!!getShorterString($post['content'], 50) !!}</td>
              <td><img src="{{ asset('images/posts_images/'.$post['image_url']) }}" alt="{{ $post['image_url'] }}" width="250"></td>
              <td>{{ $post->user->name}}</td> 
              <td><a href="/posts/{{ $post['id']}}/edit"><i class="fa fa-edit"></i></a>
                <a href="#" data-toggle="modal" data-target="#deleteModal" data-postid="{{ $post['id'] }}" ><i class="fa fa-trash-alt"></i></a>
              </td>

              {{-- display only image on the admin dashboard
                   <td>{{ $post['image_url'] }}</td>
             {{--  <td>{{ $post->user->name}}</td>--}}
              
              
            </tr>
            @endforeach
            
            {{--  --}}
          </tbody>
        </table>
      </div>
    </div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> 
  </div>

   <!--delete Modal -->

  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="example">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this post?</h5>  
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">x</span>
            </button>
          </div>

          <div class="modal-body">Select "delete" if you really want to delete this post.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <form method="POST" action="/posts/{{$post->id}}">
              @method('DELETE ')
              @csrf
              <input type="hidden" id="post_id" name="post_id" value="">
              <a class="btn btn-primary" onclick="$(this).closest('form').submit();">Delete</a>
            </form>
          </div>
        </div>
      </div>
  </div> 

 
    @endsection
 
    @section('js_post_page')

        <script>
              $('#deleteModal').on('show.bs.modal', function (event) {
                  var button = $(event.relatedTarget) // Button that triggered the modal
                  var post_id = button.data('postid') 

                  var modal = $(this)
                   /* modal.find('.modal-title').text('New message to ' + recipient) */
                   modal.find('.modal-footer #post_id').val(post_id)
            })
        </script>

    @endsection