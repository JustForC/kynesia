<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/sign-container.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <title>Sign Up</title>
</head>
<body>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <div class="log__background">
        <div class="log__container">
            <div class="log__container__wrap">
                <div class="log__container__wrap__logo">
                    <img src="./assets/logo.png" alt="logo">
                </div>
                <div class="log__container__wrap__form">
                    <form id="submit-register-form" action="/register" method='post'>
                    {{ csrf_field() }}
                        <div class="email">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="email">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="email" name="name" placeholder="Email">
                        </div>
                        <div class="password">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="confirm">
                            <label for="confirm">Confirm Password</label>
                            <input type="password" id="confirm" name="password_confirmation" placeholder="Confirm Password">
                        </div>
                    </form>
                </div>
                <div class="log__container__wrap__button">
                    <button class="sign-up" type='submit' form="submit-register-form">Sign Up</button>
                    <p>Already Have Account ? <a href="/">Sign in</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>