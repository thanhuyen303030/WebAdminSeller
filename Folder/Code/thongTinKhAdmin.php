<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="style/index1.css">
    <title>Admin Dashboard</title>
    <style>
        /* table */
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            border-radius: 12px;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: var(--menu-color);
            /* Background color of th */
            color: white;
            /* Text color of th */
        }



        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .card {
            font-size: 1.5rem;
            position: relative;
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
                        <a href="homeAdmin.php" class="list-group-item list-group-item-action">
                            Trang chủ
                        </a>
                        <a href="sanPhamAdmin.php" class="list-group-item list-group-item-action" aria-current="true">Sản
                            Phẩm</a>
                        <a href="khachHangAdmin.php" class="list-group-item list-group-item-action" aria-current="true">Khách Hàng</a>
                        <a href="nhanVien.php" class="list-group-item list-group-item-action" aria-current="true">Nhân Viên</a>
                        <a href="hoaDonAdmin.php" class="list-group-item list-group-item-action">Hóa Đơn</a>
                        <a href="baoCaoAdmin.php" class="list-group-item list-group-item-action">Báo Cáo</a>
                        <a href="#" class="list-group-item list-group-item-action">Cài Đặt</a>

                    </div>

                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="row row-cols-1 row-cols-md-1 g-4">
                    <div class="col">
                        <h1>Khách hàng Nguyễn Minh Trường</h1>
                        <div class="card">
                            <div class="card-header bg-primary text-white" style="text-align: center;">Thông tin khách hàng</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="border p-2 mb-2">
                                            <p><strong>Mã khách hàng:</strong> </p>
                                        </div>
                                        <div class="border p-2 mb-2">
                                            <p><strong>Tên khách hàng:</strong></p>
                                        </div>
                                        <div class="border p-2 mb-2">
                                            <p><strong>Số Điện Thoại:</strong></p>
                                        </div>
                                        <div class="border p-2 mb-2">
                                            <p><strong>Địa chỉ:</strong></p>
                                        </div>
                                        <div class="border p-2 mb-2">
                                            <p><strong>Danh sách hóa đơn</strong></p>
                                            <table class="table table-striped">
                                                <thead class="thead-blue">
                                                    <tr>
                                                        <th scope="col">Ngày tạo</th>
                                                        <th scope="col">Tổng tiền</th>
                                                        <th scope="col">Tiền khách đưa</th>
                                                        <th scope="col">Tiền thừa</th>
                                                        <th scope="col">Số lượng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
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
