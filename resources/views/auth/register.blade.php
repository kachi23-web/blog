<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Custom styles for this template -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/register.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card card-signin flex-row my-5">
            <div class="card-img-left d-none d-md-flex">
                <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Register</h5>
                <form class="form-signin" method="POST" action="{{ route('register') }}">
                    @csrf
                <div class="form-label-group">
                    <!-- <input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus> -->
                    <input id="inputUserame" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    
                    <label for="inputUserame">Username</label>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="form-label-group">
                    <!-- <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required> -->
                    <input id="inputEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    
                    <label for="inputEmail">Email address</label>

                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                
                <hr>

                <div class="form-label-group">
                    <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
                    <input id="inputPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                   
                    <label for="inputPassword">Password</label>
               
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               
                </div>
                
                <div class="form-label-group">
                    <!-- <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required> -->
                    <input id="inputConfirmPassword" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    <label for="inputConfirmPassword">Confirm password</label>
                </div>

                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                <a class="d-block text-center mt-2 small" href="#">Sign In</a>
                <hr class="my-4">
                <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Custom scripts for this template -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.8.2/css/all.css"></script>
</body>
</html>
