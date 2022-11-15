<?php

$conn = mysqli_connect("localhost", "root", "", "Fahasa");
mysqli_set_charset($conn, 'utf8');

$id = $_GET["id"];
$sql = "SELECT * from books
    WHERE books.id = $id";
$book = mysqli_query($conn, $sql);
$book_infos = mysqli_fetch_array($book);
$sql = "SELECT * from ratings WHERE ratings.book_id = $id";
$ratings = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $book_infos['title'] ?></title>
    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/icon/fontawesome/css/all.css">

    <style>
        .product-essential {
            display: flex;
        }

        .product-essential-media {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-basis: 40%;
        }

        .product-view-image>img {
            max-height: 392px;
            max-width: 100%;
            height: auto;
            width: auto;
        }

        .product-view-sa {
            display: flex;
        }

        .price-box {
            display: flex;
            margin: 2rem 0px;
        }

        .product-view-add-box {
            margin-top: 24px;
        }

        .product-view-add-box button {
            cursor: pointer;
            user-select: none;
            height: 44px;
            width: 200px;
            font-weight: 600;
            font-size: 1.2em;
            border-radius: 8px;
        }

        .btn-add-to-cart {
            margin-left: 0;
            color: #C92127;
            background: #fff;
            border: 2px solid #C92127;
        }

        .btn-buy-now {
            margin-left: 10px;
            color: #fff;
            background: #C92127;
            border: none;
        }

        .product-essential-detail h1 {
            font-size: 1.7em;
            font-weight: 600;
            color: #333;
            line-height: 1.5em;
            overflow-wrap: break-word;
            padding-bottom: 16px;
        }

        .product-view-sa-supplier {
            display: inline-block;
            font-size: 1.1em;
            padding-right: 15px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .product-view-sa-supplier:first-child {
            width: 400px;
        }

        .special-price {
            font-size: 32px;
            line-height: 32px;
            color: #C92127;
            font-family: 'Roboto', sans-serif !important;
            font-weight: 700;
        }

        .old-price {
            margin-left: 8px;
            font-size: 1.1em;
            font-weight: 300;
            text-decoration: line-through;
        }

        .product-view-quantity-box label {
            font-size: 1.4em;
            font-weight: 650;
            padding: 0 8px 0 0;
            margin-bottom: 0;
            text-align: left;
            max-width: 200px;
            min-width: 150px;
            color: #555555;
        }

        .product-form {
            width: 83%;
            margin: auto;
        }

        #product-view-info {
            width: 83%;
            margin: auto;
            margin-top: 30px;
        }

        #product-view-info table tr th,
        #product-view-info table tr td {
            width: 70%;
            font-size: 1.1em;
            font-weight: normal;

        }


        .product-view-content-title {
            font-size: 1.4em;
            font-weight: 700;
        }

        .product-view-tab-content {
            padding-bottom: 20px;
            border-bottom: 1px solid #c1c1c1;
        }

        .product-tab-description {
            line-height: 25px;
            margin-top: 20px;
            font-size: 1.1em;
        }

        .reviews-number {
            color: #F6A500;
        }
    </style>
</head>

<body>
    <?php include('../layouts/header.php'); ?>
    <form class="product-form bg-white mt-4" action="" method="post">
        <div class="product-view">
            <div class="product-essential p-4">
                <div class="product-essential-media">
                    <div class="product-view-image">
                        <img src="<?php echo $book_infos['image'] ?>" alt="">
                    </div>
                    <div class="product-view-add-box">
                        <button class="btn-add-to-cart">Thêm vào giỏ hàng</button>
                        <button class="btn-buy-now">Mua ngay</button>
                    </div>
                </div>
                <div class="product-essential-detail">
                    <h1><?php echo $book_infos['title'] ?></h1>
                    <div class="product-view-sa">
                        <div class="product-view-sa-supplier">Nhà cung cấp: <b>ZenBooks</b></div>
                        <div class="product-view-sa-supplier">Tác giả: <b><?php echo $book_infos['author'] ?></b> </div>
                    </div>
                    <div class="product-view-sa">
                        <div class="product-view-sa-supplier">Nhà xuất bản: <b>NXB Đà Nẵng</b></div>
                        <div class="product-view-sa-supplier">Hình thức bìa: <b>Bìa Mềm</b></div>
                    </div>
                    <div class="rating mt-2">
                        <div class="rating-stars"></div>
                        <div class="reviews-number">(0 đánh giá)</div>
                    </div>
                    <div class="price-box">
                        <p class="special-price">143.000 đ</p>
                        <p class="old-price">220.000 đ</p>
                    </div>
                    <div id="expected-delivery"></div>
                    <div class="product-view-quantity-box">
                        <label for="qty">Số lượng:</label>
                        <div class="product-view-quantity-box-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div id="product-view-info" class="bg-white p-4">
        <div class="product-view-content-title mb-3">Thông tin sản phẩm</div>
        <div class="product-view-tab-content">
            <table>
                <tbody>
                    <tr>
                        <th>Mã hàng</th>
                        <td><?php echo $book_infos['isbn'] ?></td>
                    </tr>
                    <tr>
                        <th>Tên Nhà Cung Cấp</th>
                        <td>ZenBooks</td>
                    </tr>
                    <tr>
                        <th>Tác giả</th>
                        <td>Mai Lan Hương, Hà Thanh Uyên</td>
                    </tr>
                    <tr>
                        <th>NXB</th>
                        <td>NXB Đà Nẵng</td>
                    </tr>
                    <tr>
                        <th>Năm XB</th>
                        <td>2022</td>
                    </tr>
                    <tr>
                        <th>Số trang</th>
                        <td><?php echo $book_infos['page_quantity'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="product-tab-description">
            <?php echo $book_infos['description'] ?>
        </div>
    </div>
    <div id="product-view-review">
        <div class="product-view-content-title"></div>
    </div>
    <?php include('../layouts/footer.php') ?>
</body>

</html>