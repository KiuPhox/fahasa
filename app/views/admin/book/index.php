<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sách</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../public/js/select.dataTables.min.css">
    <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../public/css/vertical-layout-light/style.css">
    <!-- endinject -->
</head>

<body>
    <div class="container-scroller">
        <?php include(dirname(__FILE__) . '/' . '../../layouts/_navbar.php'); ?>
        <div class="container-fluid page-body-wrapper">
            <?php include(dirname(__FILE__) . '/' . '../../layouts/_sidebar.php'); ?>


            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Quản lý sách</h4>
                                    <div class="table-responsive">
                                        <table id="myTable" class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Mã sách</th>
                                                    <th>Tựa đề</th>
                                                    <th>Tác giả</th>
                                                    <th>Giá gốc</th>
                                                    <th>Số lượng</th>
                                                    <th>

                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($books as $book) { ?>
                                                    <tr>
                                                        <td><?php echo $book['book_code'] ?></td>
                                                        <td><a href="/Fahasa/product/<?php echo $book['id'] ?>"><?php echo $book['title'] ?></a></td>
                                                        <td><?php echo $book['author'] ?></td>
                                                        <td><?php echo $book['price'] ?></td>
                                                        <td><?php echo $book['quantity'] ?></td>
                                                        <td><button class="btn btn-primary mr-2">Sửa</button><button class="btn btn-danger">Xoá</button></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tạo sách</h4>
                                    <form id="book-form" method="get" class="forms-sample">
                                        <div class="form-group">
                                            <label for="title">Tựa đề</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Tựa đề">
                                        </div>
                                        <div class="form-group">
                                            <label for="author">Tác giả</label>
                                            <input type="text" class="form-control" id="author" name="author" placeholder="Tên tác giả">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="supplier">Nhà cung cấp</label>
                                                <select class="form-control" id="supplier" name="supplier_id">
                                                    <?php foreach ($suppliers as $supplier) { ?>
                                                        <option value="<?php echo $supplier['id'] ?>"><?php echo $supplier['name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col">
                                                <label for="publisher">Nhà xuất bản</label>
                                                <select class="form-control" id="publisher" name="publisher_id">
                                                    <?php foreach ($publishers as $publisher) { ?>
                                                        <option value="<?php echo $publisher['id'] ?>"><?php echo $publisher['name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col">
                                                <label for="publication_date">Ngày xuất bản</label>
                                                <input type="date" class="form-control" id="publication_date" name="publication_date">
                                            </div>
                                        </div>
                                        <div class=" form-group">
                                            <label>File upload</label>
                                            <input type="file" name="img[]" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="price">Giá</label>
                                                <input type="number" class="form-control" id="price" name="price" placeholder="12000">
                                            </div>
                                            <div class="form-group col">
                                                <label for="discount">Giảm giá</label>
                                                <input type="number" class="form-control" id="discount" name="discount" placeholder="50">
                                            </div>
                                            <div class="form-group col">
                                                <label for="quantity">Tồn kho</label>
                                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="200">
                                            </div>
                                            <div class="form-group col">
                                                <label for="quantity">Số trang</label>
                                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="200">
                                            </div>
                                            <div class="form-group col">
                                                <label for="quantity">Mã sách</label>
                                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="8935235226272">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleTextarea1">Mô tả</label>
                                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Thêm</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include(dirname(__FILE__) . '/' . '../../layouts/_footer.php'); ?>
            </div>
        </div>
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../vendors/chart.js/Chart.min.js"></script>
    <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="../public/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../public/js/off-canvas.js"></script>
    <script src="../public/js/hoverable-collapse.js"></script>
    <script src="../public/js/template.js"></script>
    <script src="../public/js/settings.js"></script>
    <script src="../public/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../public/js/dashboard.js"></script>
    <script src="../public/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        })
    </script>
</body>

</html>