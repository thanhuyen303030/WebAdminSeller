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
            padding: 10px;
            border-radius: 8px;
        }

        .inline-label {
            display: inline-block;
            margin-right: 20px;
        }

        #search-bar {
            align-items: center;
            margin-left: 700px;
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

        #edit-icon {
            width: 60px;
        }

        #sorting-icon {
            width: 30px;
        }

        #delete-icon {
            width: 20px;
        }

        .table-icon {
            text-align: center;
        }
        #them-hoa-don{
            width: 70%;
            margin: auto;
        }
        .label {
        display: grid;
        grid-template-rows: auto auto;
        grid-template-columns: auto auto;
        gap: 10px; 
        padding: 10px;
        background-color: #F4F7FE;
    }
    #in-hoa-don{
        align-items: end;
        margin-left: 90%;
        margin-top: 50px;
    }
    #them-hoa-don{
        background-color: #b8c9e3;
        padding: 15px;
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
                        <a href="#" class="list-group-item list-group-item-action">
                            Trang chủ
                        </a>
                        <a href="homeAdmin.php" class="list-group-item list-group-item-action" aria-current="true">Sản
                            Phẩm</a>
                        <a href="khachHangAdmin.php" class="list-group-item list-group-item-action">Khách Hàng</a>
                        <a href="nhanVien.php" class="list-group-item list-group-item-action">Nhân Viên</a>
                        <a href="hoaDonAdmin.php" class="list-group-item list-group-item-action active">Hóa Đơn</a>
                        <a href="baoCaoAdmin.php" class="list-group-item list-group-item-action">Báo Cáo</a>
                        <a href="#" class="list-group-item list-group-item-action">Cài Đặt</a>

                    </div>

                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h1 class="h2">Hóa Đơn</h1>
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

                    <div id="second-drop" class="inline-label">
                        

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
                    <table>
                        <colgroup>
                            <col style="width: 20%;">
                            <col style="width: 30%;">
                            <col style="width: 50%;">
                           
                        </colgroup>
                        <tr class="table-head">
                            <th>Mã Hóa Đơn</th>
                            <th>Tên Khách Hàng</th>
                            <th>Tổng tiền</th>
                            
                        </tr>
                        <!-- <tr>
                            <td class="table-icon"><img src="icon/letterx_83737.png" alt="" id="delete-icon"></td>
                            <td>DT01</td>
                            <td>Iphone 15</td>
                            <td>50</td>
                            <td>20.000.000</td>
                            <td>25.000.000</td>

                            <td class="table-icon"><img src="icon/edit_icon.png" alt="" id="edit-icon"></td>


                        </tr> -->
                        
                    </table>
                </div>
                <!-- Add your dashboard widgets starting here -->
            </main>
        </div>
    </div>
    <div id="them-hoa-don">
        <h3>Thêm Hóa Đơn </h3>
        <div class="border p-2 mb-2">
            <p><strong>Tên khách hàng:</strong> </p>
            
        </div>
        <div class="border p-2 mb-2">
            <p><strong>Số điện thoại:</strong></p>
        </div>
        <div class="border p-2 mb-2">
            <p><strong>Địa chỉ:</strong></p>
        </div>
        <div>
            <h4>Danh sách sản phẩm</h4>
            <button class="btn btn-primary"><i class=""></i> Thêm</button>
            <table>
                <tr class="table-head">
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Chiết khấu</th>
                    <th>Tổng tiền</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                
            </table>
        </div>
        <div class="label">
            <div><strong>Tổng số sản phẩm:</strong> Content</div>
            <div><strong>Tổng tiền hóa đơn:</strong> Content</div>
            
            <div><strong>Tiền khách đưa:</strong> Content</div>
            <div><strong>Tiền thối lại:</strong> Content</div>
        </div>
        

        <div id="drop" class="inline-label">
            <br>
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Phương thức thanh toán
            </a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Tiền mặt</a></li>
                <li><a class="dropdown-item" href="#">Chuyển khoản</a></li>
            </ul>
        </div>
        <br>
        <button class="btn btn-primary" id="in-hoa-don"><i class=""></i> In hóa đơn</button>
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