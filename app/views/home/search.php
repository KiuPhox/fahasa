<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tổng hợp sản phẩm</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/icon/fontawesome/css/all.css">
    <style>
        .container-inner {
            display: flex;
            flex-direction: row;
        }

        .col-left-content {
            padding: 20px 10px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 8px;
            padding: 0;
        }

        .products-grid>li {
            position: relative;
            font-size: 0.8em;
        }

        .products-grid li:hover {
            box-shadow: 0px 0px 4px 2px rgb(0 0 0 / 10%);
        }

        .product-inner {
            position: relative;
        }

        .product-sale-label {
            background-color: #F7941E;
            width: 44px;
            height: 44px;
            border-radius: 22px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 1;
            font-size: 18px;
            font-weight: bold;
            color: white;
        }

        .product-content {
            padding: 0.8em;
        }

        .product-image {
            margin: 0 0 10px;
            text-align: center;
        }

        .product-image img {
            max-height: 190px;
            max-width: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
        }

        .product-content h2 {
            font-size: 14px;
            font-family: sans-serif;
            font-weight: normal;
        }

        .product-price {
            height: 3.5rem;
        }

        .product-content .special-price {
            font-size: 1.1rem;
            color: #C92127;
            font-weight: 700;
            margin: 0;
        }

        .product-content .old-price {
            text-decoration: line-through;
            font-size: 1rem;
            font-weight: 400;
            color: #999999;
            margin: 0;
        }

        .col-left {
            margin: 0;
            margin-right: 15px;
            background: none;
            padding: 0;
        }

        .col-left-inner {
            background-color: white;
            padding: 0 15px;
            border: 1px solid #e6e6e6;
        }

        .col-main {
            background-color: white;
            padding: 2rem 0;
        }

        .col-left-inner,
        .col-main {
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <?php include('../layouts/header.php');
    $conn = mysqli_connect("localhost", "root", "", "Fahasa");
    mysqli_set_charset($conn, 'utf8');

    $sql = "SELECT * from categories";
    $categories = mysqli_query($conn, $sql);
    $books = mysqli_query($conn, "SELECT * from books");
    ?>
    <div class="container" style="background: none;">
        <div class="container-inner">
            <div class="col-left col-lg-3 col-md-3 col-sm-12 col-xs-12 container">
                <div class="col-left-inner">
                    <div class="col-left-content">
                        <div class="col-left-block">
                            <p>Thể loại</p>
                            <?php
                            foreach ($categories as $category) { ?>
                                <a>
                                    <li><?php echo $category['name']; ?></li>
                                </a>
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-main col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="col-main-content">
                    <div class="toolbar-top">
                        <div class="toolbar col-sm-12 col-xs-12 col-md-12">
                            <div class="sorter col-sm-4 col-xs-6 col-md-4">
                                <div class="select-box select-box-order"></div>
                            </div>
                            <div class="pager col-sm-8 col-xs-5 col-md-8">
                                <div class="select-box select-box-limit"></div>
                            </div>
                        </div>
                    </div>
                    <div class="products-grid">
                        <?php foreach ($books as $book) { ?>
                            <li>
                                <div class="product-inner">
                                    <?php if ($book['discount'] > 0) { ?>
                                        <div class="product-sale-label">
                                            <span><?php echo $book['discount']; ?>%</span>
                                        </div>
                                    <?php } ?>

                                    <div class="product-content">
                                        <div class="product-image">
                                            <a href="product.php?id=<?php echo $book['id'] ?>"><img src="<?php echo $book['image'] ?>"></a>
                                        </div>
                                        <a href="product.php?id=<?php echo $book['id'] ?>">
                                            <h2 class="product-name"><?php echo $book['title'] ?></h2>
                                        </a>
                                        <div class="price-label">
                                            <div class="product-price">
                                                <?php if ($book['discount'] > 0) { ?>
                                                    <p class="special-price"><?php echo number_format($book['price'] * (1 - $book['discount'] / 100), 0, '.', '.') ?> đ</p>
                                                    <p class="old-price"><?php echo number_format($book['price'], 0, '.', '.'); ?> đ</p>
                                                <?php } else { ?>
                                                    <p class="special-price"><?php echo $book['price'] ?>.000đ</p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box"></div>
                                            <div class="amount">(0)</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('../layouts/footer.php'); ?>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>