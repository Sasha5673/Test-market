<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $pageData['title']; ?></title>

    <!-- Custom fonts for this template-->

    <link href="/css/admin/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/admin/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/admin/modal.css" rel="stylesheet" type="text/css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/cabinet">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo $pageData['title']; ?> <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/cabinet">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Статистика</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Orders Collapse Menu -->

            <!-- Nav Item - User Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/cabinet/users" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Пользователи</span>
                </a>
            </li>

             <!-- Nav Item - User Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/cabinet/product" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-cart-plus"></i>
                    <span>Товары</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="/cabinet/logout" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="/images/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/cabinet/logout" data-toggle="modal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?php if(isset($_GET['orderId']) && $_GET['orderId'] != '' && !empty($pageData['orderInfo'])) { ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2><?php echo $pageData['title']; ?></h2>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Состав заказа</h2>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Название товара</th>
                                                <th>Цена товара</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($pageData['orderInfo'] as $key => $value) { ?>
                                            <tr>
                                                <td><?php echo $value['name']; ?></td>
                                                <td><?php echo $value['price']; ?></td>
                                            </tr>

                                        <?php } ?>
                                        </tbody>
                                        <thead>
                                            <tr>
                                                <th>Итоговая цена</th>
                                                <th>Метод доставки</th>
                                                <th>Регион доставки</th>
                                                <th>Город доставки</th>
                                                <th>Улица доставки</th>
                                                <th>Дом доставки</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><?php echo $pageData['orderInfo'][0]['amount']; ?></td>
                                            <td><?php echo $pageData['orderInfo'][0]['method']; ?></td>
                                            <td><?php echo $pageData['orderInfo'][0]['region']; ?></td>
                                            <td><?php echo $pageData['orderInfo'][0]['city']; ?></td>
                                            <td><?php echo $pageData['orderInfo'][0]['street']; ?></td>
                                            <td><?php echo $pageData['orderInfo'][0]['house']; ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <h3>Покупатель:</h3>
                                    <p>ФИО: <strong><?php echo $pageData['orderInfo'][0]['fullName'] ?></strong></p>
                                    <p>Email: <strong><?php echo $pageData['orderInfo'][0]['email'] ?></strong></p>
                            </div>
                        </div>
                    <?php } else { ?>

                        <div class="row">
                            <div class="col-md-6">
                                <h2>Заказ не найден</h2>
                            </div>
                        </div>
                   <?php } ?>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


<div id="modal-0" class="modal">
  <div class="modal-content">
    <span class="close-modal" data-modal="modal-0">&times;</span>
    <h2>Добавление товара</h2>
    <form method="post" action="cabinet/product/addProducts">
    <p>Название товара:
    <input type="text" name="name" value="" placeholder="Название тоавра"></p>
    <p>Цена товара:
    <input type="text" name="price" value="" placeholder="Цена товара"></p>
    <p>Колличество товара:
    <input type="text" name="count_product" value="" placeholder="Колличество товаров"></p>
    <p>Описание товара:</p>
    <textarea name="description" rows="4" cols="50" placeholder="Опишите товар"></textarea>
    <br/>
    <button type="submit">Добавить</button>
    </form>
    <span class="close-modal" data-modal="modal-0">Отмена</span>
  </div>
</div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="/js/admin/modal.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/admin/bootstrap.bundle.min.js"></script>


    <!-- Custom scripts for all pages-->
    <script src="/js/admin/sb-admin-2.min.js"></script>


</body>

</html>