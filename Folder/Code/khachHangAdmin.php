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
    <link rel="stylesheet" href="style/floatingButton.css">
    <link rel="stylesheet" href="style/table.css">
    <title>Admin Dashboard</title>
    <style>
        :root {
            --theme-color: #95B5E4;
            --menu-color: #2876D4;
        }

        .h2 {
            margin-top: 10px;
            padding-top: 20px;
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
        #them-khach-hang{
            width: 60%;
            margin: auto;
            display: none;
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
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">Khách
                            Hàng</a>
                        <a href="nhanVien.php" class="list-group-item list-group-item-action ">Nhân Viên</a>
                        <a href="hoaDonAdmin.php" class="list-group-item list-group-item-action">Hóa Đơn</a>
                        <a href="baoCaoAdmin.php" class="list-group-item list-group-item-action">Báo Cáo</a>
                        <a href="#" class="list-group-item list-group-item-action">Cài Đặt</a>

                    </div>

                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h1 class="h2">Khách hàng </h1>
                <br>
                <div class="dropdown" id="main-head">
                    <div id="first-drop" class="inline-label">
                        <br>
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Bộ lọc
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>



                    <div id="search-bar" class="inline-label">

                        <input oninput="suggest(this.value)" type="text" class="form-control" placeholder="Tìm kiếm">
                        <ul id="suggestions" class="list-group my-2">
                            <!-- Suggestions will be dynamically added here -->
                        </ul>
                    </div>

                </div>

                <div class="pt-3 pb-2 mb-3 border-bottom">
                    <!-- Content goes here -->
                    <p>This is your dashboard where you can manage users, view statistics, and customize settings.</p>
                    <table>
                        <tr class="table-head">
                            <th>Tên</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>

                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <!-- Add your dashboard widgets starting here -->
            </main>
        </div>
    </div>
    <div id="them-khach-hang">
        <div class="card">
            <div class="card-header bg-primary text-white" style="text-align: center;">Thông tin khách hàng</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="border p-2 mb-2 d-flex align-items-center">
                            <strong class="me-3 flex-shrink-0">Mã khách hàng:</strong>
                            <div class="flex-grow-1">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="border p-2 mb-2 d-flex align-items-center">
                            <strong class="me-3 flex-shrink-0">Tên khách hàng:</strong>
                            <div class="flex-grow-1">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="border p-2 mb-2 d-flex align-items-center">
                            <strong class="me-3 flex-shrink-0">Số Điện Thoại:</strong>
                            <div class="flex-grow-1">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="border p-2 mb-2 d-flex align-items-center">
                            <strong class="me-3 flex-shrink-0">Địa chỉ:</strong>
                            <div class="flex-grow-1">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div></div>
                            <div class="edit-button">
                                <button class="btn btn-primary"><i class=""></i> Quay lại</button>
                                <button class="btn btn-primary"><i class=""></i> Thêm khách hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="float">
        <i class="fa fa-plus my-float"></i>
    </a>

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