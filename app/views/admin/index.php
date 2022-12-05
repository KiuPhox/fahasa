<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../public/js/select.dataTables.min.css">
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="public/css/vertical-layout-light/style.css">
    <!-- endinject -->
</head>

<body>
    <div class="container-scroller">
        <?php include(dirname(__FILE__) . '/' . '../layouts/_navbar.php'); ?>
        <div class="container-fluid page-body-wrapper">

            <?php include(dirname(__FILE__) . '/' . '../layouts/_sidebar.php'); ?>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Welcome <?php echo $_SESSION['name'] ?> !</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin transparent">
                            <div class="row">
                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <div class="card card-tale">
                                        <div class="card-body">
                                            <p class="mb-4">Tổng số đơn</p>
                                            <p class="fs-30 mb-2"><?php echo $orders->num_rows ?></p>
                                            <p><?php echo $new_orders ?> đơn mới hôm nay</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <div class="card card-dark-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Tổng số khách hàng</p>
                                            <p class="fs-30 mb-2"><?php echo $users->num_rows ?></p>
                                            <p><?php echo $new_users ?> khách hàng mới hôm nay</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-4 stretch-card transparent">
                                    <div class="card card-light-danger">
                                        <div class="card-body">
                                            <p class="mb-4">Total Bookings</p>
                                            <p class="fs-30 mb-2">61344</p>
                                            <p>22.00% (30 days)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-title">Chi tiết đơn</p>
                                        <div class="d-flex flex-wrap mb-5">
                                            <div class="mr-5 mt-3">
                                                <p class="text-muted">Tổng giá trị đơn</p>
                                                <h3 class="text-primary fs-30 font-weight-medium"><?php echo number_format($total_orders, 0, ".", ".")  ?>đ</h3>
                                            </div>
                                            <div class="mr-5 mt-3">
                                                <p class="text-muted">Số đơn</p>
                                                <h3 class="text-primary fs-30 font-weight-medium"><?php echo $orders->num_rows ?></h3>
                                            </div>
                                        </div>
                                        <canvas id="order-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <p class="card-title">Đánh giá gần đây</p>
                                            <a href="/Fahasa/dashboard/ratings" class="text-info">Xem tất cả</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="myTable" class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sách</th>
                                                        <th>Khách hàng</th>
                                                        <th>Đánh giá</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 0; ?>
                                                    <?php foreach ($ratings as $rating) {
                                                        if ($i < 5) { ?>

                                                            <tr>
                                                                <?php $book = Book::getByID($rating['book_id']) ?>
                                                                <td><img class="mr-2" src="<?php echo $book['image'] ?>">
                                                                    <a href="/Fahasa/product/<?php echo $rating['book_id'] ?>"><?php echo $book['title'] ?></a>
                                                                </td>
                                                                <td><?php echo User::getByID($rating['user_id'])['name'] ?></td>
                                                                <td><?php for ($r = 0; $r < 5; $r++) {
                                                                        if ($r < $rating['rating']) { ?>
                                                                            <i class="mdi mdi-star" style="color: #F7941E;"></i>
                                                                        <?php } else { ?>
                                                                            <i class="mdi mdi-star" style="color: gray;"></i>
                                                                    <?php }
                                                                    } ?>
                                                                </td>
                                                            </tr>
                                                    <?php $i++;
                                                        }
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <?php include(dirname(__FILE__) . '/' . '../layouts/_footer.php'); ?>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="vendors/chart.js/Chart.min.js"></script>
        <script src="vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="public/js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="public/js/off-canvas.js"></script>
        <script src="public/js/hoverable-collapse.js"></script>
        <script src="public/js/template.js"></script>
        <script src="public/js/settings.js"></script>
        <script src="public/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="public/js/dashboard.js"></script>
        <script src="public/js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
</body>

</html>