<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{ asset('adminmart/src/dist/css/customcssdanjs/loginpage/login.css') }}">

    <title>LOGIN PAGE</title>

</head>
<body>

    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="input-field">
                        <input type="text" name="UNAME" placeholder="Enter your username" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name="UPASS" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>

                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" name="LOGIN" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('adminmart/src/dist/css/customcssdanjs/loginpage/login.js') }}"></script>
</body>
</html>
