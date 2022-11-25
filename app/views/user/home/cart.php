<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/icon/fontawesome/css/all.css">
    <style>
        .cart-container {
            display: flex;
            flex-direction: column;
            margin: auto;
            width: 83%;
        }

        .cart-container .page-title h1 {
            margin: 0px 0 0;
            font-weight: 600;
            color: #333333 !important;
            line-height: 20px;
        }

        .cart-container .page-title {
            display: flex;
            margin: 16px 0 6px;
            align-items: center;
        }

        .page-title h1 {
            text-transform: uppercase;
            font-size: 20px;
        }

        .cart-title-num-items {
            margin-left: 5px;
            font-weight: 600;
            font-size: 16px;
        }

        .cart-ui-content {
            box-shadow: 0px 0px 2px rgb(0 0 0 / 10%);
            padding: 2rem;
            background-color: #fff;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .shopping-btn {
            cursor: pointer;
            user-select: none;
            height: 44px;
            width: 200px;
            font-weight: 600;
            font-size: 1.2em;
            border-radius: 8px;
            color: #fff;
            background: #C92127;
            border: none;
        }
    </style>
</head>

<body>
    <?php include(dirname(__FILE__) . '/' . '../../layouts/header.php'); ?>
    <div class="cart-container">
        <div style="margin-bottom: 12px;" class="page-title">
            <h1>Giỏ hàng</h1>
            <span class="cart-title-num-items">(0 sản phẩm)</span>
        </div>
        <div class="cart-ui-content">
            <img src="https://cdn0.fahasa.com/skin//frontend/ma_vanese/fahasa/images/checkout_cart/ico_emptycart.svg">
            <p style="font-size: 14px; margin: 20px 0;">Chưa có sản phẩm trong giỏ hàng của bạn.</p>
            <a href="/Fahasa/category"><button class="shopping-btn" type="button">Mua sắm ngay</button></a>
        </div>
    </div>


    <?php include(dirname(__FILE__) . '/' . '../../layouts/footer.php'); ?>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>