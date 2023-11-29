<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập & Đăng ký</title>
    <link rel="stylesheet" href="{{ asset('Admin/') }}/css/styles.min.css" />
    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat:400,800");

        * {
            box-sizing: border-box;
        }

        body {
            background: #f6f5f7;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: "Montserrat", sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 20px;
            border: 1px solid #ff4b2b;
            background-color: #ff4b2b;
            color: #ffffff;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #ffffff;
        }

        form {
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background: #ff416c;
            background: -webkit-linear-gradient(to right, #ff4b2b, #ff416c);
            background: linear-gradient(to right, #ff4b2b, #ff416c);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #ffffff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid #dddddd;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }

        footer {
            background-color: #222;
            color: #fff;
            font-size: 14px;
            bottom: 0;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 999;
        }

        footer p {
            margin: 10px 0;
        }

        footer i {
            color: red;
        }

        footer a {
            color: #3c97bf;
            text-decoration: none;
        }
    </style>
</head>

<body>
    {{-- @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
            <span type="button" class="X-close float-end" data-dismiss="alert" aria-label="Close">
                <i class="ti ti-x"></i>
            </span>
        </div>
    @endif --}}
    @if (session('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
            <span type="button" class="X-close float-end" data-dismiss="alert" aria-label="Close">
               <i class="ti ti-x"></i>
            </span>
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger" id="error-alert">
            {{ session('error') }}
            <span type="button" class="X-close float-end" data-dismiss="alert" aria-label="Close">
                <i class="ti ti-x"></i>
            </span>
        </div>
    @endif
    <div class="container" id="container">
        <div class="form-container sign-up-container">

            <form action="{{ route('register_User') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1>Tạo tài khoản</h1>
                <span>hoặc sử dụng email của bạn để đăng ký</span>
                <input type="text" name="name" placeholder="Tên của bạn*" />
                @if ($errors->has('name'))
                    <span class="text-danger" role="alert">{{ $errors->first('name') }}</span>
                @endif
                <input type="number" name="number_phone" placeholder="Số điện thoại*" />
                @if ($errors->has('number_phone'))
                    <span class="text-danger" role="alert">{{ $errors->first('number_phone') }}</span>
                @endif
                <input type="text" name="adress" placeholder="Địa chỉ*" />
                @if ($errors->has('adress'))
                    <span class="text-danger" role="alert">{{ $errors->first('adress') }}</span>
                @endif
                <input type="email" name="email" id="signUpEmail" placeholder="Email*" />
                @if ($errors->has('email'))
                    <span class="text-danger" role="alert">{{ $errors->first('email') }}</span>
                @endif
                <input type="password" name="password" placeholder="Password*" />
                @if ($errors->has('password'))
                    <span class="text-danger" role="alert">{{ $errors->first('password') }}</span>
                @endif
                <button type="submit">Đăng ký</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            {{-- <form onSubmit={this.handleSubmitLogin}> --}}
            <form action="{{ route('login_User') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1>Đăng nhập</h1>
                <span>hoặc sử dụng tài khoản của bạn</span>
                <input type="email" name="email" id="signInEmail" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit">Đăng nhập</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Chào mừng trở lại!</h1>
                    <p>Để duy trì kết nối với chúng tôi vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
                    <button class="ghost" id="signIn" onClick="openSignIn()">Đăng nhập</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Chào bạn!</h1>
                    <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
                    <button class="ghost" id="signUp" onClick="openSignUp()">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="{{ asset('Admin/') }}/js/main.js"></script>
<script>
    const container = document.getElementById('container');
    const signInEmail = document.getElementById('signInEmail');
    const signUpEmail = document.getElementById('signUpEmail');

    function openSignIn() {
        container.classList.remove("right-panel-active");
        if (signUpEmail.value !== "") {
            signInEmail.value = signUpEmail.value;
        }
    }

    function openSignUp() {
        container.classList.add("right-panel-active");
        if (signInEmail.value !== "") {
            signUpEmail.value = signInEmail.value;
        }
    }
</script>
<script>
    //bắt điều kiện nhập 10 số
    document.getElementById('number_phone').addEventListener('input', function(e) {
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10);
        }
    });
</script>
</html>
