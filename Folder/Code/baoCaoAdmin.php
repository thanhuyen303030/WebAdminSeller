<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style/table.css">

    <link rel="stylesheet" href="style/index1.css">
    <title>Admin Dashboard</title>
    <style>
        .task-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .task-bar .inline-label {
            margin-right: 20px;
        }

        .task-bar .input-group {
            margin-bottom: 0;
        }

        #chi-tiet-bao-cao {
            width: 60%;
            margin: auto;
            display: none;
        }

        h3 {
            text-align: center;
            padding: 5px;
            background-color: #2676D5;
            color: white;
        }
        .btn{
            padding: 10px;
            padding-right: 10px;
            padding-left: 10px;
        }
    </style>
</head>

<body>
    <header>
        <img src="img/logo_mini.png" alt="Logo" class="logo">
        <div class="avatar-container">
            <img src="img/3line.png" alt="" class="menuLine">
            <img src="img/garnacho-mu-488.jpg" alt="Avatar" class="avatar">
            <div class="name">
                <span>John Doe</span>
            </div>
        </div>
    </header>

    <div>
        <br>
    </div>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <div class="list-group">
                        <a href="homeAdmin.php" class="list-group-item list-group-item-action " aria-current="true">
                            Trang chủ
                        </a>
                        <a href="sanPhamAdmin.php" class="list-group-item list-group-item-action">Sản Phẩm</a>
                        <a href="khachHangAdmin.php" class="list-group-item list-group-item-action">Khách Hàng</a>
                        <a href="nhanVien.php" class="list-group-item list-group-item-action">Nhân Viên</a>
                        <a href="hoaDonAdmin.php" class="list-group-item list-group-item-action">Hóa Đơn</a>
                        <a href="baoCaoAdmin.php" class="list-group-item list-group-item-action active">Báo Cáo</a>
                        <a href="#" class="list-group-item list-group-item-action">Cài Đặt</a>
                    </div>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h1 class="h2">Báo Cáo</h1>
                <div class="pt-3 pb-2 mb-3 border-bottom">

                </div>

                <div class="task-bar">
                    <div class="inline-label">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tháng
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Năm</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Sử dụng Bootstrap grid classes để tạo 1 hàng với 2 cột-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text" style="min-width: 40px;">Từ</span>
                                <input type="date" class="form-control form-control-sm" id="startDatePicker">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text" style="min-width: 40px;">đến</span>
                                <input type="date" class="form-control form-control-sm" id="endDatePicker">
                            </div>
                        </div>
                    </div>



                </div>
                <hr>
            </main>
        </div>
    </div>


    <div id="chi-tiet-bao-cao">
        <h3>Báo cáo </h3>
        <div class="border p-2 mb-2">
            <p><strong>Tổng sản phẩm đã bán:</strong> </p>
            
        </div>
        <div class="border p-2 mb-2">
            <p><strong>Số lượng đơn hàng:</strong></p>
        </div>
        <div class="border p-2 mb-2">
            <p><strong>Tổng doanh thu:</strong></p>
        </div>

        <br>
        <div id="danh-sach-hoa-don">
            <h4>Danh sách hóa đơn</h4>
            <table>
                <tr class="table-head">
                    <th>Ngày Tạo</th>
                    <th>Tổng Tiền</th>
                    <th>Tiền Khách Đưa</th>
                    <th>Tiền thối lại</th>
                    <th>Số lượng</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                
            </table>
            <div class="align-items-end">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary"><i class=""></i> Tải file</button>
                    </div>
                    <div class="col text-end">
                        <button class="btn btn-primary"><i class=""></i> Gửi</button>
                        <button class="btn btn-primary"><i class=""></i> Hủy</button>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <hr>

    </div>

    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container">
            <span class="text-muted">Admin Dashboard Template © 2024</span>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>