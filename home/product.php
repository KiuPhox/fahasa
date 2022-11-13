<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team12hasa | Chi tiết</title>
    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../icon/fontawesome/css/all.css">
    <link rel="stylesheet" href="../CSS/style.css">

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
            width: 60%;
            padding-right: 15px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
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
            width: 80%;
            margin: auto;
        }

        #product-view-info {
            width: 80%;
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
            border-bottom: 1px solid #c1c1c1;
        }

        .product-tab-description {
            line-height: 25px;
            margin-top: 20px;
            font-size: 1.1em;
        }
    </style>
</head>

<body>
    <?php include('layouts/header.php') ?>
    <form class="product-form" action="" method="post">
        <div class="product-view">
            <div class="product-essential">
                <div class="product-essential-media">
                    <div class="product-view-image">
                        <img src="https://cdn0.fahasa.com/media/catalog/product/z/3/z3097453775918_7ea22457f168a4de92d0ba8178a2257b.jpg" alt="">
                    </div>
                    <div class="product-view-add-box">
                        <button class="btn-add-to-cart">Thêm vào giỏ hàng</button>
                        <button class="btn-buy-now">Mua ngay</button>
                    </div>
                </div>
                <div class="product-essential-detail">
                    <h1>Giải Thích Ngữ Pháp Tiếng Anh (Tái Bản 2022)</h1>
                    <div class="product-view-sa">
                        <div class="product-view-sa-supplier">Nhà cung cấp: ZenBooks</div>
                        <div class="product-view-sa-supplier">Tác giả: Mai Lan Hương</div>
                    </div>
                    <div class="product-view-sa">
                        <div class="product-view-sa-supplier">Nhà xuất bản: NXB Đà Nẵng</div>
                        <div class="product-view-sa-supplier">Hình thức bìa: Bìa Mềm</div>
                    </div>
                    <div class="view-rate"></div>
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
    <div id="product-view-info">
        <div class="product-view-content-title">Thông tin sản phẩm</div>
        <div class="product-view-tab-content">
            <table>
                <tbody>
                    <tr>
                        <th>Mã hàng</th>
                        <td>8794069303524</td>
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
                        <td>560</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="product-tab-description">
            Ngữ pháp Tiếng Anh tổng hợp các chủ điểm ngữ pháp trọng yếu mà học sinh cần nắm vững. Các chủ điểm ngữ pháp được trình bày rõ ràng, chi tiết. Sau mỗi chủ điểm ngữ pháp là phần bài tập & đáp án nhằm giúp các em củng cố kiến thức đã học, đồng thời tự kiểm tra kết quả.<br>
            Sách Giải Thích Ngữ Pháp Tiếng Anh, tác Mai Lan Hương – Hà Thanh Uyên, là cuốn sách ngữ pháp đã được phát hành và tái bản rất nhiều lần trong những năm qua.<br>
            Giải Thích Ngữ Pháp Tiếng Anh được biên soạn thành 9 chương, đề cập đến những vấn đề ngữ pháp từ cơ bản đến nâng cao, phù hợp với mọi trình độ. Các chủ điểm ngữ pháp trong từng chương được biên soạn chi tiết, giải thích cặn kẽ các cách dùng và quy luật mà người học cần nắm vững. Sau mỗi chủ điểm ngữ pháp là phần bài tập đa dạng nhằm giúp người học củng cố lý thuyết.<br>
            Hy vọng Giải Thích Ngữ Pháp Tiếng Anh sẽ là một quyển sách thiết thực, đáp ứng yêu cầu học, ôn tập và nâng cao trình độ ngữ pháp cho người học và là quyển sách tham khảo bổ ích dành cho giáo viên.
        </div>
    </div>
    <div id="product-view-review">
        <div class="product-view-content-title"></div>
    </div>
    <?php include('layouts/footer.php') ?>
</body>

</html>