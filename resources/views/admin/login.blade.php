@if(!isset(Auth::guard('admin')->user()->email))
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In | Administrator</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-login.css') }}">
</head>
<body>
    <div class="main">
        <div class="container">
            <center>
                <div class="middle">
                    <div id="login">
                        @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <form action="{{ url('admin/check-login') }}" method="POST">
                            @csrf
                            <fieldset class="clearfix">  
                                <!-- Email Address -->
                                <span class="fa fa-user"></span>
                                <input type="text" placeholder="Email Address" name="email" required>

                                <!-- Password -->
                                <span class="fa fa-lock"></span>
                                <input type="password" placeholder="Password" name="password" required>    

                                <button type="submit" class="btn btn-md btn-dark btn-block">Sign In <i class="fas fa-sign-in-alt"></i></button>
                            </fieldset>
                            <div class="clearfix"></div>
                        </form>
                        <div class="clearfix"></div>
                    </div> 
                    <div class="logo">
                        SIGN IN
                        <div class="clearfix"></div>
                    </div>  
                </div>
            </center>
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/5c12e9bac7.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
@else
  <script>
    location.replace("{{ url('admin/dashboard') }}");
  </script>
@endif