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
        :root {
            --theme-color: #95B5E4;
            --menu-color: #2876D4;
        }

        .h2 {
            margin-top: 10px;
            padding-top: 20px;
            text-align: center;
        }

        .dropdown-toggle {
            background-color: var(--menu-color);
        }

        .dropdown-button {
            color: whitesmoke;
            font-weight: bolder;
            font-size: 20px;
        }

        #main-head {
            background-color: var(--theme-color);
            padding: 3px;
            border-radius: 8px;
        }

        .inline-label {
            display: inline-block;
            margin-right: 20px;
        }

        #search-bar {
            align-items: center;
            margin-left: 850px;
            border-radius: 20px;
        }

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

        .table-head {
            background-color: var(--menu-color);
            color: white;
            padding: 10px;
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
                        <a href="nhanVien.php" class="list-group-item list-group-item-action active">Nhân Viên</a>
                        <a href="hoaDonAdmin.php" class="list-group-item list-group-item-action">Hóa Đơn</a>
                        <a href="baoCaoAdmin.php" class="list-group-item list-group-item-action">Báo Cáo</a>
                        <a href="#" class="list-group-item list-group-item-action">Cài Đặt</a>

                    </div>

                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="row row-cols-1 row-cols-md-1 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-primary text-white" style="text-align: center;">Thông tin nhân
                                viên</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="border p-2 mb-2">
                                            <p><strong>Mã Nhân Viên:</strong></p>
                                        </div>
                                        <div class="border p-2 mb-2">
                                            <p><strong>Tên nhân viên:</strong></p>
                                        </div>
                                        <div class="border p-2 mb-2">
                                            <p><strong>Vị trí:</strong></p>
                                        </div>
                                        <div class="border p-2 mb-2">
                                            <p><strong>Số Điện Thoại:</strong></p>
                                        </div>
                                        <div class="border p-2 mb-2">
                                            <p><strong>Email:</strong></p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <img src="" class="img-fluid" width="100%">
                                    </div>
                                    <div class="col-md-12">

                                        <div class="border p-2 mb-2">
                                            <p><strong>Địa chỉ:</strong></p>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="border p-2 mb-2">
                                            <p><strong>Ngày vào làm:</strong></p>
                                        </div>
                                        <div class="border p-2 mb-2">
                                            <p><strong>Dân tộc:</strong></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="border p-2 mb-2">
                                            <p><strong>Ngày sinh:</strong></p>
                                        </div>
                                        <div class="border p-2 mb-2">
                                            <p><strong>Giới tính:</strong></p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div></div>
                                        <div class="edit-button">
                                            <button class="btn btn-primary"><i class="fas fa-edit"></i> Chỉnh
                                                sửa</button>
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