<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
        <h2></h2>
        <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#" method="POST">
            <h1>Đăng Ký</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span></span>
            <input type="text" placeholder="Họ tên" name="LastName" />
            <input type="email" placeholder="Email" name="Email"/>
            <input type="password" placeholder="Mật khẩu" name="Password"/>
            <button type="sumbit" name="sumbit">Đăng Ký</button>
            <a href="index.php">Quay lại</a>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login.php" method="POST">
            <h1>Đăng Nhập</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span></span>
            <input type="email" placeholder="Email" name="Email"/>
            <input type="password" placeholder="Mật khẩu" name="Password" />
            <a href="#">Forgot your password?</a>
            <button type="sumbit" name= "sumbit">Đăng Nhập</button>
            <a href="index.php">Quay lại</a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Đăng Nhập</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Đăng Ký</button>
            </div>
            </div>
        </div>
        </div>

        <footer>
        <p>
            Created with <i class="fa fa-heart"></i> by
            <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
            - Read how I created this and how you can join the challenge
            <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
        </p>
        </footer>
        <script src="../js/login.js"></script>
</body>
</html>