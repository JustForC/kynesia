<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/sign-container.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="log__background">
        <div class="log__container">
            <div class="log__container__wrap">
                <div class="log__container__wrap__logo">
                    <img src="./assets/logo.png" alt="logo">
                </div>
                <div class="log__container__wrap__form">
                    <form id='submit-login' action="/login" method='post'>
                    @csrf
                        <div class="email">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="password">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password">
                        </div>
                    </form>
                </div>
                <div class="log__container__wrap__button">
                    <form action="/register"><button class="sign-up" >Sign Up</button></form>
                    <button class="sign-in" type='submit' form='submit-login'>Sign In</button>
                </div>
                <div class="log__container__wrap__forget">
                    <p>Forget Password ?</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>