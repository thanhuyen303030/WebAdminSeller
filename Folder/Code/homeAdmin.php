<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/index1.css">
    <title>Admin Dashboard</title>
    
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
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            Trang chủ
                        </a>
                        <a href="sanPhamAdmin.php" class="list-group-item list-group-item-action">Sản Phẩm</a>
                        <a href="khachHangAdmin.php" class="list-group-item list-group-item-action">Khách Hàng</a>
                        <a href="nhanVien.php" class="list-group-item list-group-item-action">Nhân Viên</a>
                        <a href="hoaDonAdmin.php" class="list-group-item list-group-item-action">Hóa Đơn</a>
                        <a href="baoCaoAdmin.php" class="list-group-item list-group-item-action">Báo Cáo</a>
                        <a href="#" class="list-group-item list-group-item-action">Cài Đặt</a>

                    </div>

                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h1 class="h2">Welcome Admin!</h1>
                <div class="pt-3 pb-2 mb-3 border-bottom">
                    <!-- Content goes here -->
                    <p>This is your dashboard where you can manage users, view statistics, and customize settings.</p>
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