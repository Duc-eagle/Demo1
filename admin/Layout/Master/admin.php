<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"/>
    <title>MOBILE</title>
    <style>
        .col-2 {
            padding: 0 !important;
        }
        .nav-item {
            width: 100%;
        }
        .nav-item.active {
            background-color: dodgerblue;
        }
        .nav-item .nav-link {
            width: 100%;
            padding: 10px 15px;
        }
        .nav-item.active .nav-link {
            color: white !important;
        }
        .nav-link:hover {
            color: #fff;
            background-color: #b9bcbe;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<!--header-->
    <div class="container-fluid">
        <div class="row bg-dark">
            <div class="col-6">
                <div class="text-primary" style="margin-top: 6px">MOBILE <span class="text-light">SHOP</span></div>
            </div>

            <div class="d-flex flex-row-reverse  col-6">
                <div class="dropdown">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
                        Admin
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Sign up</a></li>
                        <li><a href="#" class="dropdown-item">Sign in</a></li>
                    </ul>

                </div>
                <span class="material-symbols-outlined" style="margin-top: 6px;color: white">person</span>
            </div>
        </div>
    </div>
<!--body-->
    <div class="container-fluid">
        <div class="row">
<!--            sidebar-->
            <div class="col-2" style="background-color: #ffffff; min-height: 100vh">
                <input type="text" placeholder="Search" style="width: 100%;margin-top: 10px">
                <hr>
                <nav class="navbar">
                    <div class="container-fluid p-0">
                        <ul class="navbar-nav w-100">
                            <li class="nav-item <?php if(!isset($_GET['page_layout'])){echo 'active';}?>">
                                <a href="index.php" class="nav-link text-primary d-flex align-items-center">
                                    <span class="material-symbols-outlined me-2">explore</span>Dashboard
                                </a>
                            </li>
                            <li class="nav-item <?php if(isset($_GET['page_layout']) && $_GET['page_layout'] == 'user'){echo 'active';}?>">
                                <a href="?page_layout=user" class="nav-link text-primary d-flex align-items-center">
                                    <span class="material-symbols-outlined me-2">person</span>Quản lý thành viên
                                </a>
                            </li>
                            <li class="nav-item <?php if(isset($_GET['page_layout']) && $_GET['page_layout'] == 'categories'){echo 'active';}?>">
                                <a href="?page_layout=categories" class="nav-link text-primary d-flex align-items-center">
                                    <span class="material-symbols-outlined me-2">storage</span>Quản lý danh mục
                                </a>
                            </li>
                            <li class="nav-item <?php if(isset($_GET['page_layout']) && $_GET['page_layout'] == 'product'){echo 'active';}?>">
                                <a href="?page_layout=product" class="nav-link text-primary d-flex align-items-center">
                                    <span class="material-symbols-outlined me-2">shopping_bag</span>Quản lý sản phẩm
                                </a>
                            </li>
                            <li class="nav-item <?php if(isset($_GET['page_layout']) && $_GET['page_layout'] == 'order'){echo 'active';}?>">
                                <a href="?page_layout=order" class="nav-link text-primary d-flex align-items-center">
                                    <span class="material-symbols-outlined me-2">shopping_cart</span>Quản lý đơn hàng
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-primary d-flex align-items-center">
                                    <span class="material-symbols-outlined me-2">forum</span>Quản lý bình luận
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-primary d-flex align-items-center">
                                    <span class="material-symbols-outlined me-2">widgets</span>Quản lý quảng cáo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-primary d-flex align-items-center">
                                    <span class="material-symbols-outlined me-2">settings</span>Cấu hình
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-10 p-0" style="background-color: #e3dcdc">
<!--masterlayout -->
                <?php
                if (isset($_GET['page_layout'])) {
                    switch ($_GET['page_layout']) {
                        case 'categories': include_once('Layout/Category/categories.php'); break;
                        case 'user': include_once('Layout/Users/user.php'); break;
                        case 'product': include_once('Layout/Product/product.php'); break;
                        case 'order': include_once('Layout/Order/order.php'); break;
                    }
                } else {
                    include_once('Layout/Master/dashboard.php');
                }
                ?>
            </div>

        </div>
    </div>

</body>
</html>
