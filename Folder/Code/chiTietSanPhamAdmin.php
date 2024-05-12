<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style/index1.css">
    <title>Admin Dashboard</title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            border-radius: 12px;
        }

        th {
            text-align: center;

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
            background-color: #0D66D0;
            vertical-align: middle;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        h3 {
            vertical-align: middle;
            text-align: center;
            padding: 5px;
            background-color: #0D66D0;
            font-size: large;
            font-weight: bold;
            color: white;
        }

        
        .detail-information{
            width: 80%;
            margin: auto;
        }
        #btnEdit{
            
            margin-left: 90%;
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



    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <div class="list-group">
                        <a href="homeAdmin.php" class="list-group-item list-group-item-action " aria-current="true">
                            Trang chủ
                        </a>
                        <a href="sanPhamAdmin.php" class="list-group-item list-group-item-action active">Sản Phẩm</a>
                        <a href="khachHangAdmin.php" class="list-group-item list-group-item-action">Khách Hàng</a>
                        <a href="nhanVien.php" class="list-group-item list-group-item-action">Nhân Viên</a>
                        <a href="hoaDonAdmin.php" class="list-group-item list-group-item-action">Hóa Đơn</a>
                        <a href="baoCaoAdmin.php" class="list-group-item list-group-item-action">Báo Cáo</a>
                        <a href="#" class="list-group-item list-group-item-action">Cài Đặt</a>

                    </div>

                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <br>
                <hr>
                <h1 class="h2">Chi Tiết Sản Phẩm</h1>
                <hr>

                <div class="detail-information">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/900x400.png" class="d-block w-100" alt="...">

                            </div>
                            <div class="carousel-item">
                                <img src="./img/900x400.png" class="d-block w-100" alt="...">

                            </div>
                            <div class="carousel-item">
                                <img src="./img/900x400.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <br>

                    

                    <div class="product-table">
                        <table>
                            <h3>Tên sản phẩm</h3>
                            <hr>
                            <tr>
                                <td>Mã sản phẩm:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Tên sản phẩm:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Hãng:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Thời điểm ra mắt:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Số lượng:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Giá bán:</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div class="pt-3 pb-2 mb-3 border-bottom" id="btnEdit">
                        <!-- Content goes here -->
                        <button type="button" class="btn btn-primary">Chỉnh Sửa</button>
                    </div>
                </div>


                
                <!-- Add your dashboard widgets starting here -->
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