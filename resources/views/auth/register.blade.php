<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/signinandsignup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <title>Snax Logistics</title>
</head>
<body>
    <section class="siv">
        <div class="head-logo">
            <img src="{{ asset('assets/img/Rectangle 12.svg') }}" alt="">
        </div>
        <!-- <div class="auth-buttons">
            <button class="auth-login"><img src="{{ asset('assets/img/bx_bxl-facebook-circle.svg') }}" alt=""></button>
            <button class="auth-login"><img src="{{ asset('assets/img/flat-color-icons_google.svg') }}" alt=""></button>
        </div>
        <hr> -->
        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
        @csrf
            <div class="form-group">
                <label class="siv-label" for="exampleFormControlInput2">Name</label>
                <input type="text" placeholder="Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} siv-form" id="exampleFormControlInput2" name="name" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label class="siv-label" for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} siv-form" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label class="siv-label" for="exampleFormControlInput5">Password</label>
                <input type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} siv-form" id="exampleFormControlInput5" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label class="siv-label" for="exampleFormControlInput5">Password Again</label>
                <input type="password" placeholder="Confirm Password" class="form-control siv-form" id="exampleFormControlInput5" name="password_confirmation" required>
            </div>
            <div class="fotm-button">
                <button type="submit" class="siv-submit">Sign Up</button>
            </div>
            <p class="foot">Already have an account? <a class="foot-link" href="{{ url('/login') }}">Log In</a></p>
        </form>
    </section>    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>