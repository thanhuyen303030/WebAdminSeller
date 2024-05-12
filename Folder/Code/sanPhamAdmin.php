<?php
// Establish a connection to your database
require_once ('backend/db.php');
them_sp();

?>
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

        #them-san-pham {
            width: 60%;
            margin: auto;
            padding: 10px;
            background-color: #89b6ed;
            /* display: none; */
            position: fixed;
            top: 0;
            z-index: 1000;
            left: 20%;
            height: 700px;
            overflow: scroll;
            top: calc((100% - 700px)/2);
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
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">Sản
                            Phẩm</a>
                        <a href="khachHangAdmin.php" class="list-group-item list-group-item-action">Khách Hàng</a>
                        <a href="nhanVien.php" class="list-group-item list-group-item-action">Nhân Viên</a>
                        <a href="hoaDonAdmin.php" class="list-group-item list-group-item-action">Hóa Đơn</a>
                        <a href="baoCaoAdmin.php" class="list-group-item list-group-item-action">Báo Cáo</a>
                        <a href="#" class="list-group-item list-group-item-action">Cài Đặt</a>

                    </div>

                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h1 class="h2">Sản Phẩm</h1>
                <br>
                <div class="dropdown" id="main-head">
                    <div id="first-drop" class="inline-label">
                        <label for="" class="dropdown-button">Loại</label>
                        <br>
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Điện thoại
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>

                    <div id="second-drop" class="inline-label">
                        <label for="" class="dropdown-button">Hãng</label>
                        <br>
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Samsung
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
                        <colgroup>
                            <col style="width: 5%;">
                            <col style="width: 10%;">
                            <col style="width: 30%;">
                            <col style="width: 10%;">
                            <col style="width: 20%;">
                            <col style="width: 20%;">
                            <col style="width: 5%;">
                        </colgroup>
                        <tr class="table-head">
                            <th></th>
                            <th>Mã Sản Phẩm</th>
                            <th>Tên</th>
                            <th>Số Lượng</th>
                            <th>Giá Vốn</th>
                            <th>Giá Bán</th>
                            <th class="table-icon"><img src="icon/sorting.png" alt="" id="sorting-icon"></th>
                        </tr>
                        <?php
                        // Output data of each row
                        put_SP_admin();
                        ?>

                    </table>
                </div>
                <!-- Add your dashboard widgets starting here -->
            </main>
        </div>
    </div>

    <div id="them-san-pham">
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
            <button class="btn btn-primary"><i class=""></i>Thêm ảnh</button>
            <br>
            <br>



            
                <form method="post" id="them-san-pham-form" class="product-table" action="">
                    <table>
                        <tr>
                            <td><label for="barcode">Barcode:</label></td>
                            <td><input type="text" id="barcode" name="barcode" required></td>
                        </tr>
                        <tr>
                            <td><label for="name">Tên sản phẩm:</label></td>
                            <td><input type="text" id="name" name="name" required></td>
                        </tr>
                        <tr>
                            <td><label for="title">Tiêu đề:</label></td>
                            <td><input type="text" id="title" name="title" required></td>
                        </tr>
                        <tr>
                            <td><label for="avatar">Avatar:</label></td>
                            <td><input type="text" id="avatar" name="avatar" required></td>
                        </tr>
                        <tr>
                            <td><label for="import_price">Giá nhập:</label></td>
                            <td><input type="text" id="import_price" name="import_price" required></td>
                        </tr>
                        <tr>
                            <td><label for="retail_price">Giá bán:</label></td>
                            <td><input type="text" id="retail_price" name="retail_price" required></td>
                        </tr>
                        <tr>
                            <td><label for="description">Mô tả:</label></td>
                            <td><textarea id="description" name="description" required></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="category_id">Category Id:</label></td>
                            <td><input type="text" id="category_id" name="category_id" required></td>
                        </tr>
                        <tr>
                            <td><label for="quantity_in_stock">Số lượng trong kho:</label></td>
                            <td><input type="number" id="quantity_in_stock" name="quantity_in_stock" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" class="btn btn-primary" value="Thêm sản phẩm"></td>
                        </tr>
                    </table>
                </form>



            <div class="d-flex justify-content-between align-items-end">
                <div></div>
                <div class="edit-button">
                    <br>
                    <button class="btn btn-primary" id="quay-lai-button"><i class="quay-lai-button"></i> Quay
                        lại</button>
                    <!-- <button class="btn btn-primary"><i class=""></i> Thêm sản phẩm</button> -->
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            // Hide the "them-san-pham" initially
            $("#them-san-pham").hide();

            // When the "fa fa-plus my-float" button is clicked
            $(".float").click(function () {
                console.log("Clicked!");
                // Toggle the visibility of the "them-san-pham" element
                $("#them-san-pham").toggle();
            });
            $("#quay-lai-button").click(function () {
                // Hide the "them-san-pham" element
                $("#them-san-pham").hide();
            });
        });

    </script>

    <!-- <script>
        $(document).ready(function () {
            $('#them-sp').click(function () {
                // Gửi yêu cầu AJAX đến tệp PHP
                $.ajax({
                    type: "POST",
                    url: "backend/running.php",
                    data: { action: 'them_sp' },
                    success: function (response) {

                        // $('#').html(response);
                    },
                    error: function () {
                        alert("Nhập dữ liệu không thành công");
                    }
                });
               
            });
        });
    </script> -->

</body>

</html>