<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập/Đăng Kí</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../icon/fontawesome/css/all.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <style>
        .login-form {
            width: 400px;
            height: 470px;
            margin: auto;
            margin-top: 100px;
        }

        input {
            width: 100%;
            height: 40px;
            padding-left: 10px;
            border-radius: 5px;
        }

        span {
            font-size: 14px;
        }

        .showpass {
            color: blueviolet;
            cursor: pointer;
            position: absolute;
            top: 280px;
            right: 595px;
        }

        .forgot-pass {
            margin-top: 5px;
        }

        .forgot-pass>span {
            color: red;
            cursor: pointer;
        }

        .group-button {
            text-align: center;
        }

        .login-button,
        .skip-button,
        .loginfb-button {
            border-radius: 7px;
            width: 80%;
        }

        .login-button-group {
            margin-top: 20px;
        }

        .OTP {
            color: blue;
            cursor: pointer;
            position: absolute;
            top: 200px;
            right: 595px;
        }

        .show-regis {
            position: absolute;
            color: blue;
            cursor: pointer;
            top: 364px;
            right: 595px;
        }

        body {

            background-size: cover
        }
    </style>
</head>

<body>
    <?php include('./layouts/header.php') ?>
    <div class="login-form">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item" style="width: 50%; text-align: center;">
                <a class="nav-link active" data-toggle="tab" href="#dangnhap">Đăng Nhập</a>
            </li>
            <li class="nav-item" style="width: 50%; text-align: center;">
                <a class="nav-link" data-toggle="tab" href="#dangki">Đăng Kí</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active container" id="dangnhap">
                <form action="" style="margin-top: 15px;">
                    <div>
                        <label for="sdt">Số điện thoại/Email</label>
                        <br>
                        <input type="text" id="sdt" placeholder="Nhập số điện thoại hoặc email">
                    </div>
                    <div style="margin-top: 10px;">
                        <label for="matkhau">Mật khẩu</label>
                        <br>
                        <input type="password" id="matkhau" placeholder="Nhập mật khẩu">
                        <span class="showpass">Hiện mật khẩu</span>
                    </div>
                </form>
                <div class="forgot-pass"><span>Quên mật khẩu ?</span></div>
                <div class="group-button">
                    <div class="login-button-group"><button type="button" class="btn btn-success login-button">Đăng Nhập</button></div>
                    <div class="login-button-group"><button type="button" class="btn btn-outline-danger skip-button">Bỏ qua</button></div>
                    <div class="login-button-group"><button type="button" class="btn btn-primary loginfb-button" style="white-space: nowrap;"><i class="fab fa-facebook"></i> Đăng nhập bằng Facebook</button></div>
                </div>
            </div>
            <div class="tab-pane container" id="dangki">
                <form action="">
                    <div style="margin-top: 15px;">
                        <label for="sdt-2">Số điện thoại/Email</label>
                        <br>
                        <input type="text" id="sdt-2" placeholder="Nhập số điện thoại hoặc email">
                        <span class="OTP">Gửi mã OTP</span>
                    </div>
                    <div style="margin-top: 10px;">
                        <label for="otp">Mã xác nhận OTP</label>
                        <br>
                        <input type="text" id="otp" placeholder="6 kí tự">
                    </div>
                    <div style="margin-top: 10px;">
                        <label for="matkhau">Mật khẩu</label>
                        <br>
                        <input type="password" id="matkhau" placeholder="Nhập mật khẩu">
                    </div>
                    <span class="show-regis">Hiện</span>
                </form>
                <div class="group-button">
                    <div class="login-button-group"><button type="button" class="btn btn-success login-button">Đăng Kí</button></div>
                    <div class="login-button-group"><button type="button" class="btn btn-outline-danger skip-button">Bỏ qua</button></div>
                    <div style="font-size: 12px; margin-top: 10px;">
                        <div>Bằng việc đăng ký, bạn đã đồng ý với Team12hasa.com về</div>
                        <div><a style="text-decoration: none;" href="">Điều khoản dịch vụ </a>&#38;<a style="text-decoration: none;" href=""> Chính sách bảo mật</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('./layouts/footer.php'); ?>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>