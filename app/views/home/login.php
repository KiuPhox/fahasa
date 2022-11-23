<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách hàng đăng nhập</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/icon/fontawesome/css/all.css">
    <style>
        .login-form {
            border-radius: 10px;
        }

        .login-form-content {
            width: 450px;
            max-width: calc(100vw - 20px);
            margin: auto;
            padding: 4.5rem 0rem;
        }

        .login-form-content input {
            width: 100%;
            height: 40px;
            padding-left: 10px;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }

        .login-form-content input:focus-visible {
            outline: none;
        }

        .login-form-content label {
            font-size: 1.1em;
        }

        .nav-tabs {
            border: none;
        }

        .nav-tabs .nav-link {
            border: none;
            transition: all 0.3s;
            font-size: 1.1em;
            font-weight: normal;
        }

        .nav-tabs .nav-link:focus {
            color: #c92127;
        }

        .nav-tabs .nav-link:hover {
            color: #c92127;
        }

        .nav-tabs .nav-link.active {
            color: #c92127;
        }

        span {
            font-size: 14px;
        }

        .input-group {
            align-items: center;
        }

        .showpass,
        .show-regis,
        .OTP {
            position: absolute;
            right: 12px;
            color: #2489F4;
            cursor: pointer;
            user-select: none;
        }

        .forgot-pass {
            margin-top: 5px;
            text-align: end;
        }

        .forgot-pass>span {
            color: red;
            cursor: pointer;
        }

        .group-button {
            text-align: center;
        }

        .login-button,
        .loginfb-button {
            width: 245px;
            border: none;
            padding: 8px 0;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: 700;
        }

        .login-button {
            background: linear-gradient(90deg, rgba(224, 224, 224, 1) 0%, rgba(224, 224, 224, 1) 100%);
            color: #636363;

        }

        .login-button:focus {
            outline: none;
        }

        .login-button:hover {
            cursor: default;
        }

        .loginfb-button {
            background-color: #2489F4;
            color: white;
            border: 1px solid #2489F4;
        }

        .login-button-group {
            margin-top: 20px;
        }

        .form-control {
            color: #495057;
        }

        .input-group>.form-control:focus {
            z-index: 0;
        }

        .log-container {
            padding: 0;
            margin: auto;
        }
    </style>
</head>

<body>
    <?php include(dirname(__FILE__) . '/' . '../layouts/header.php'); ?>
    <div class="login-form container">
        <div class="login-form-content">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item" style="width: 50%; text-align: center;">
                    <a class="nav-link active" data-toggle="tab" href="#dangnhap">Đăng Nhập</a>
                </li>
                <li class="nav-item" style="width: 50%; text-align: center;">
                    <a class="nav-link" data-toggle="tab" href="#dangki">Đăng Ký</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active log-container" id="dangnhap">
                    <form action="" style="margin-top: 15px;">
                        <div class="mb-3">
                            <label for="sdt">Email</label>
                            <br>
                            <input maxlength="200" class="form-control" type="email" name="email" placeholder="Nhập email">
                        </div>
                        <label for="matkhau">Mật khẩu</label>
                        <div class="input-group">
                            <input class="form-control" type="password" id="matkhau" placeholder="Nhập mật khẩu">
                            <span class="showpass">Hiện</span>
                        </div>
                    </form>
                    <div class="forgot-pass mt-3"><span>Quên mật khẩu ?</span></div>
                    <div class="group-button">
                        <div class="login-button-group"><button type="button" class="login-button">Đăng Nhập</button></div>
                        <div class="login-button-group"><button type="button" class="loginfb-button" style="white-space: nowrap;"><i class="fab fa-facebook"></i> Đăng nhập bằng Facebook</button></div>
                    </div>
                </div>
                <div class="tab-pane log-container" id="dangki">
                    <form action="">
                        <div style="margin-top: 15px;">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <input name="email" class="form-control" type="text" id="sdt-2" placeholder="Nhập số điện thoại hoặc email">
                                <span class="OTP">Gửi mã OTP</span>
                            </div>
                        </div>
                        <div style="margin-top: 10px;">
                            <label for="otp">Mã xác nhận OTP</label>
                            <br>
                            <input class="form-control" type="text" id="otp" placeholder="6 kí tự">
                        </div>
                        <label class="mt-3" for="matkhau">Mật khẩu</label>
                        <div class="input-group">
                            <input class="form-control" type="password" id="matkhau" placeholder="Nhập mật khẩu">
                            <span class="show-regis">Hiện</span>
                        </div>

                    </form>
                    <div class="group-button">
                        <div class="login-button-group"><button type="button" class="login-button">Đăng Kí</button></div>
                        <div style="font-size: 12px; margin-top: 10px;">
                            <div>Bằng việc đăng ký, bạn đã đồng ý với Fahasa.com về</div>
                            <div><a style="text-decoration: none;" href="">Điều khoản dịch vụ </a>&#38;<a style="text-decoration: none;" href=""> Chính sách bảo mật</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include(dirname(__FILE__) . '/' . '../layouts/footer.php'); ?>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>