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


$reviews = [0, 0, 0, 0, 0];

foreach ($ratings as $rating) {
    $reviews[$rating['rating'] - 1]++;
}

$total_reviews = array_sum($reviews);
$rating_value = 0;
for ($i = 1; $i <= 5; $i++) {
    $rating_value += $i * $reviews[$i - 1] / $total_reviews;
}

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

        .product-view-add-box button,
        #review-write-btn {
            cursor: pointer;
            user-select: none;
            height: 44px;
            width: 200px;
            font-weight: 600;
            font-size: 1.2em;
            border-radius: 8px;
        }

        #review-write-btn {
            margin: auto !important;
        }

        .btn-add-to-cart,
        #review-write-btn {
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

        #product-view-review {
            padding: 2rem;
            border-radius: 10px;
        }

        .product-view-content-title {
            font-size: 1.4em;
            font-weight: 700;
        }

        .product-view-tab-content {
            padding-bottom: 20px;
            border-bottom: 1px solid #c1c1c1;
        }

        .product-view-tab-content-rating {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 2.5rem;
        }

        .product-tab-description {
            line-height: 25px;
            margin-top: 20px;
            font-size: 1.1em;
        }

        .reviews-number {
            color: #F6A500;
        }

        .chart {
            /* width: 500px; */
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            height: 100%;
        }

        .chart .rate-box {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .chart .rate-box>* {
            height: 100%;
            display: flex;
            color: #444;
        }

        .rate-box .value {
            display: flex;
            align-items: center;
        }


        .chart .value,
        .count {
            font-size: 1.3em;
            font-weight: 400;
        }

        .rate-box .progress-bar {
            border-width: 1px;
            position: relative;
            background-color: #cfd8dc91;
            height: 5px;
            width: 225px;
        }

        .rate-box .progress-bar .progress {
            background-color: #f6a500;
            height: 100%;
            border-radius: 100px;
            transition: 300ms ease-in-out;
        }

        .global {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 8px;
            margin-right: 50px;
        }

        .one .fas {
            color: #cfd8dc;
        }

        .two {
            background: linear-gradient(to right, #f6a500 0%, transparent 0%);
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent;
            transition: 0.5s ease-in-out all;
        }

        .global-value {
            font-size: 4em;
            font-weight: 600;
            line-height: 1.1em;
            font-family: Arial, Helvetica, sans-serif;
        }

        .rating-icons {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            height: 10%;
        }

        .rating-icons span {
            position: absolute;
            display: flex;
            font-size: 14px;
            left: 50%;
            transform: translateX(-50%);
            margin-bottom: 5px;
        }


        .total-reviews {
            font-size: 14px;
            color: #7A7E7F;
            font-weight: 400;
        }

        .comment-list li {
            display: flex;
            margin-bottom: 3rem;
        }

        .comment-list li p {
            font-size: 1.1em;
            font-weight: 600;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin: 0;
        }

        .comment-left {
            width: 15%;
            margin-right: 8px;
            display: flex;
            flex-direction: column;
        }

        .comment-right {
            flex-basis: 85%;
            display: flex;
            flex-direction: column;
            margin-top: 12px;
        }

        .comment-right-content {
            font-size: 1.1em;
            color: black;
            margin-top: 1rem;
        }

        .comment-right .rating-icons {
            align-self: flex-start;
            justify-self: flex-start;
        }

        .comment-right .rating-icons span {
            transform: none;
        }

        .comment-list li span {}
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
                        <p class="special-price"><?php echo number_format($book_infos['price'] * (1 - $book_infos['discount'] / 100), 0, '.', '.') ?> đ</p>
                        <p class="old-price"><?php echo number_format($book_infos['price'], 0, '.', '.'); ?> đ</p>
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
    <div id="product-view-review" class="container">
        <div class="product-view-content-title mb-3">Đánh giá sản phẩm</div>
        <div class="product-view-tab-content-review">
            <div class="product-view-tab-content-rating">
                <div class="global">
                    <span class="global-value">0.0</span>
                    <div class="rating-icons">
                        <span class="one"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span class="two" style="background: linear-gradient(to right, #f6a500 <?php echo $rating_value / 5 * 100 ?>%, transparent 0%)"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                    </div>
                    <span class="total-reviews">(0 đánh giá)</span>
                </div>
                <div class="chart">
                    <div class="rate-box">
                        <span class="value">5 sao</span>
                        <div class="progress-bar">
                            <span class="progress"></span>
                        </div>
                        <span class="count">0%</span>
                    </div>
                    <div class="rate-box">
                        <span class="value">4 sao</span>
                        <div class="progress-bar"><span class="progress"></span></div>
                        <span class="count">0%</span>
                    </div>
                    <div class="rate-box">
                        <span class="value">3 sao</span>
                        <div class="progress-bar"><span class="progress"></span></div>
                        <span class="count">0%</span>
                    </div>
                    <div class="rate-box">
                        <span class="value">2 sao</span>
                        <div class="progress-bar"><span class="progress"></span></div>
                        <span class="count">0%</span>
                    </div>
                    <div class="rate-box">
                        <span class="value">1 sao</span>
                        <div class="progress-bar"><span class="progress"></span></div>
                        <span class="count">0%</span>
                    </div>
                </div>
                <button id="review-write-btn">Viết đánh giá</button>
            </div>
            <div class="product-view-tab-content-comment">
                <div class="comment-content">
                    <ul class="comment-list">
                        <?php foreach ($ratings as $rating) { ?>
                            <li>
                                <div class="comment-left">
                                    <p class="user-name"><?php $user_id = $rating['user_id'];
                                                            echo mysqli_fetch_array(mysqli_query($conn, "SELECT * from users WHERE id = $user_id"))['name'] ?></p>
                                    <span class="comment-date">16/05/2021</span>
                                </div>
                                <div class="comment-right">
                                    <div class="rating-icons">
                                        <span class="one"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                        <span class="two" style="background: linear-gradient(to right, #f6a500 <?php echo $rating['rating'] / 5 * 100 ?>%, transparent 0%)"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                    </div>
                                    <span class="comment-right-content"><?php echo $rating['comment'] ?></span>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include('../layouts/footer.php') ?>

    <script>
        let rateBox = Array.from(document.querySelectorAll(".rate-box"));
        let globalValue = document.querySelector(".global-value");
        let two = document.querySelector(".two");
        let totalReviews = document.querySelector(".total-reviews");

        let reviews = {
            5: <?php echo $reviews[4] ?>,
            4: <?php echo $reviews[3] ?>,
            3: <?php echo $reviews[2] ?>,
            2: <?php echo $reviews[1] ?>,
            1: <?php echo $reviews[0] ?>,
        };

        updateValues();

        function updateValues() {
            rateBox.forEach((box) => {
                let valueBox = rateBox[rateBox.indexOf(box)].querySelector(".value");
                let countBox = rateBox[rateBox.indexOf(box)].querySelector(".count");
                let progress = rateBox[rateBox.indexOf(box)].querySelector(".progress");


                let progressValue = Math.round(
                    (reviews[valueBox.innerHTML[0]] / getTotal(reviews)) * 100
                );

                if (getTotal(reviews) == 0) {
                    progressValue = 0;
                }

                progress.style.width = `${progressValue}%`;
                countBox.innerHTML = progressValue + '%';
            });
            totalReviews.innerHTML = '(' + getTotal(reviews) + ' đánh giá)';
            finalRating();
        }

        function getTotal(reviews) {
            return Object.values(reviews).reduce((a, b) => a + b);
        }

        document.querySelectorAll(".value").forEach((element) => {
            element.addEventListener("click", () => {
                let target = element.innerHTML;
                reviews[target] += 1;
                updateValues();
            });
        });

        function finalRating() {
            let final = Object.entries(reviews)
                .map((val) => val[0] * val[1])
                .reduce((a, b) => a + b);
            let ratingValue = nFormat(parseFloat(final / getTotal(reviews)).toFixed(1));
            globalValue.innerHTML = ratingValue;
            //             two.style.background = `linear-gradient(to right, #f6a500 ${
            //     (ratingValue / 5) * 100
            //   }%, transparent 0%)`;
        }

        function nFormat(number) {
            if (number >= 1000 && number < 1000000) {
                return `${number.toString().slice(0, -3)}k`;
            } else if (number >= 1000000 && number < 1000000000) {
                return `${number.toString().slice(0, -6)}m`;
            } else if (number >= 1000000000) {
                return `${number.toString().slice(0, -9)}md`;
            } else if (number === "NaN") {
                return `0.0`;
            } else {
                return number;
            }
        }
    </script>
</body>

</html>