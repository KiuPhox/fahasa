<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Step Checkout</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/icon/fontawesome/css/all.css">
    <style>
        .checkout-block {
            padding: 8px 16px;
            background-color: white;
            margin: 0 auto;
            margin-bottom: 16px;
            font-size: 14px;
            width: 83%;
            border-radius: 8px;
        }

        .checkout-block .checkout-block-title {
            padding: 8px 0;
            text-transform: uppercase;
            font-size: 1.1em;
            font-weight: 600;
            border-bottom: 1px solid #ced4da;
            display: flex;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            flex-direction: row;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-align-items: center;
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
        }

        .checkout-address-list {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .checkout-address-list .checkout-address-item {
            display: flex;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            flex-direction: row;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-align-items: center;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            margin: 0.4rem 0px;
        }

        .checkout-address-item span {
            padding: 4px 8px;
            color: #007bff;
            font-weight: 600;
            cursor: pointer;
            user-select: none;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
        }

        .radio {
            display: inline-table;
            position: relative;
            padding-right: 20px;
            padding-left: 30px !important;
            font-weight: normal !important;
            font-size: 1em !important;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .radio input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .radio input:checked~.radiomark {
            border: 2px solid #C92127;
        }

        .radio input:checked~.radiomark::after {
            display: block;
        }

        .radiomark {
            position: absolute;
            top: 50%;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            -moz-transform: translate(0, -50%);
            transform: translate(0, -50%);
            left: 0;
            height: 20px;
            width: 20px;
            border: 2px solid #e6e6e6;
            border-radius: 50%;
        }

        .radio .radiomark::after {
            display: none;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            height: 50%;
            border-radius: 50%;
            background: #C92127;
            content: "";
            position: absolute;
        }

        .checkout-books-item {
            padding: 8px 0;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: flex-start;
            border-top: 1px solid #ced4da;
        }

        .checkout-books-item-img {
            width: 145px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
        }

        .checkout-books-item-detail {
            width: calc(100% - 145px);
            padding: 0 4px;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .checkout-books-item-name {
            width: calc(100% - 345px);
        }

        .checkout-books-item-price {
            width: 100px;
        }

        .checkout-books-item-qty {
            width: 100px;
            text-align: center;
        }

        .checkout-books-item-total {
            width: 100px;
            color: #F39801;
            font-weight: 600;
        }

        .checkout-books-item-old-price {
            color: #BFBFBF;
            text-decoration: line-through;
        }
    </style>
</head>

<body>
    <?php include(dirname(__FILE__) . '/' . '../../layouts/header.php'); ?>

    <div class="checkout-block">
        <div class="checkout-block-title">Địa chỉ giao hàng</div>
        <div class="checkout-block-content">
            <ul class="checkout-address-list">
                <?php foreach ($addresses as $address) { ?>
                    <li class="checkout-address-item">
                        <div style="flex-basis: 70%">
                            <label class="radio" style="margin-top: 2px;"> <?php echo $address['name'] ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $address['address'] . ", " . $address['ward'] . ", " . $address['district'] . ", " . $address['city'] ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $address['phone_number'] ?>
                                <input type="radio" name="checkout-block-address-list-item-option" <?php if ($address['is_default']) echo "checked" ?>>
                                <span class="radiomark"></span>
                            </label>
                        </div>
                        <div>
                            <span> Sửa </span>
                            <span style="<?php if ($address['is_default']) echo "visibility: hidden" ?>"> Xoá
                            </span>
                        </div>
                    </li>
                <?php } ?>
                <li class="checkout-address-item">
                    <div style="flex-basis: 70%">
                        <span style="padding: 0;"><img width="20px" src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_add_circle_red.svg?q=101680"></span>
                        <span style="padding-left: 5px; font-weight: normal; color: black">Giao hàng đến địa chỉ khác</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="checkout-block">
        <div class="checkout-block-title">Kiểm tra lại đơn hàng</div>
        <div class="checkout-block-content">
            <div class="checkout-books">
                <?php foreach ($cart as $book) {
                    if ($book['checked'] == "true") { ?>
                        <div class="checkout-books-item">
                            <div class="checkout-books-item-img"><img style="max-width: 100%" src="<?php echo $book['image'] ?>"></div>
                            <div class="checkout-books-item-detail">
                                <div class="checkout-books-item-name">
                                    <div><?php echo $book['title'] ?></div>
                                </div>
                                <div class="checkout-books-item-price">
                                    <div><?php echo number_format($book['price'] * (1 - $book['discount'] / 100), 0, '.', '.') ?> đ</div>
                                    <div class="checkout-books-item-old-price"><?php echo number_format($book['price'], 0, '.', '.'); ?> đ</div>
                                </div>
                                <div class="checkout-books-item-qty"><?php echo $book['quantity'] ?></div>
                                <div class="checkout-books-item-total"><?php $subtotal =  $book['price'] * (1 - $book['discount'] / 100) * $book['quantity'];
                                                                        echo number_format($subtotal, 0, '.', '.') ?> đ</div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>

    <?php include(dirname(__FILE__) . '/' . '../../layouts/footer.php'); ?>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function toggleCheckBook(id) {
            $.ajax({
                url: "/Fahasa/cart/check",
                type: 'post',
                data: {
                    id: id,
                }
            }).done(function(respone) {
                location.reload();
            });
        }

        function addQuantity(id) {
            $.ajax({
                url: "/Fahasa/cart/add",
                type: 'post',
                data: {
                    id: id,
                }
            }).done(function(respone) {
                location.reload();
            });
        }

        function subtractQuantity(id) {
            $.ajax({
                url: "/Fahasa/cart/subtract",
                type: 'post',
                data: {
                    id: id,
                }
            }).done(function(respone) {
                location.reload();
            });
        }

        function checkAll() {
            $.ajax({
                url: "/Fahasa/cart/checkall",
                type: 'post',
                data: {
                    check: document.getElementById("checkbox-all-books").checked,
                }
            }).done(function(respone) {
                location.reload();
            });
        }

        function deleteItem(id) {
            $.ajax({
                url: "/Fahasa/cart/delete",
                type: 'post',
                data: {
                    id: id,
                }
            }).done(function(respone) {
                location.reload();
            });
        }
    </script>
</body>

</html>