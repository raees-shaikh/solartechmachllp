<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - {{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="backend/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="{{asset('frontend/assets/img/solar-logo.png')}}" type="image/png">
    <link rel="stylesheet" type="text/css" href="backend/css/cms.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .text-cl {
            color: #000000;
        }
        .text-black {
            color: #000000 !important;
        }

        .body-bg {

            background: linear-gradient(180deg, rgba(0, 175, 239, 0.0145) 0%,#fc9f32 100%);
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Set the height of the container */
        }

        .bg-pink-color {
            background-color: #f6584c;
            border-radius: 50px;
            color: white;
            border: 1px solid white;
            transition: none;
            padding: 12px 35px;
            width: 180px;
            margin: auto
            /* Remove default transition effect */

        }

        .bg-pink-color:hover {
            background-color: #145D94;
            color: #FFFFFF;
            border: 1px solid #FFFFFF;
        }

        input[data-custom-attribute="channels-login"] {
            background: #FFFFFF;
            box-shadow: 8.03325px 11.6847px 15.3362px 1.46059px rgba(0, 0, 0, 0.13);
            border-radius: 10.9544px;

        }
    </style>
</head>


<body class="auth-page-bg body-bg">
    <div class="container ">
        <div class="auth-form px-2 mx-auto" style="max-width:550px;">
        <a href="{{url('/')}}">    <img class="d-block mx-auto " style="max-width:36%;border-radius:10px" src="{{ asset('frontend/assets/img/solar-logo.png') }}"
            alt=""></a>
            <h1 class="text-center h2 my-4  auth-text-primary cubold text-cl">Login</h1>
            <form method="POST" action="{{ route('cms.login.submit') }}">
                @csrf
                <div class="auth-form-input mt-4">
                    <img class="icon" src="backend/images/icon-user.svg" draggable="false">
                    <input class="form-control input-style" placeholder="Username " id="email" name="email"
                        type="email" minlength="8" maxlength="30" required data-custom-attribute="channels-login">
                </div>
                @if ($errors->has('email'))
                    <div class="text-danger text-left mx-3" role="alert">{{ $errors->first('email') }}</div>
                @endif
                <div class="auth-form-input mt-4">
                    <img class="icon eye-show-pass" src="backend/images/icon-eye.svg" draggable="false">
                    <input class="form-control password" type="password" placeholder="Password" id="password"
                        name="password" minlength="8" maxlength="16" required data-custom-attribute="channels-login">
                </div>
                @if ($errors->has('password'))
                    <div class="text-danger text-left mx-3" role="alert">{{ $errors->first('password') }}</div>
                @endif

                @if ($errors->has('credentials'))
                    <div class="text-danger text-left mx-3" role="alert">{{ $errors->first('credentials') }}</div>
                @endif
                @if (session('status'))
                    <div class="text-success">
                        <li> {{ session('status') }} </li>
                    </div>
                @endif

                <div class="text-center mb-4 mt-4">

                    <a href="{{ route('cms.forgotPassword.index') }}" class="text-black text-muted ">
                        <small >
                            Forgot your password?
                        </small>
                    </a>
                </div>
                <button type="submit" class="form-control btn-lg h-auto bg-pink-color font-bold ">
                    Login
                </button>

            </form>
            <div class="text-center text-muted mt-3">
                <small class="p-0 text-black">
                    &copy;
                    {{ date('Y') }} All Rights Reserved | Powered by
                    <a href="http://acetrot.com" class="text-muted text-black text-underline" target="_blank">
                        Acetrot.com
                    </a>
                </small>
            </div>
        </div>
    </div>

    <script src="backend/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="backend/bootstrap/js/popper.min.js"></script>
    <script src="backend/bootstrap/js/bootstrap.min.js"></script>
    <script>
        var eyeIcon = document.querySelectorAll(".eye-show-pass");
        var passwordInput = document.querySelectorAll(".password");
        eyeIcon.forEach(icons => {
            icons.addEventListener('click', function(e) {
                passwordInput.forEach(inputs => {
                    if (inputs.type === "password") {
                        inputs.type = "tepasswordInputt";
                    } else {
                        inputs.type = "password";
                    }
                });
            })
        });
    </script>
</body>

</html>
