@extends('layouts.app')

@section('content')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{ asset('/storage/img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>{{ $post['title'] }}</h1>
            <span class="subheading">{{ $post->user['name'] }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="col-lg-8 col-md-10 mx-auto">
    <div class="row">

        <p>
           {!! $post['content']!!}
          {{--  {!! getShorterString( $post['content'], 100 )!!} --}}
        </p>
      
          </div>
         </div>
        </div>
          <hr>

        
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    

    
    
    
    
    </div>
  </div>

  </div>
 
  <hr>


  @endsection