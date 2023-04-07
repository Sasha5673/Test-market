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
                <div class="sidebar-brand-text mx-3"><?php echo $pageData['titles']; ?> <sup>2</sup></div>
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
                <form  method="get" action=""
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" name="q" placeholder="Поиск товаров по названию"
                    aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit">
                            <i class="fas fa-window-close  fa-sm"></i>
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

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Товары</h1>
        <button class="show-modal btn btn-outline-primary" data-modal="modal-0">Добавить продукт</button>
    </div>


    <div class="card shadow mb-3">
        <div class="card-header he-3">
            <h6 class="m-0 font-weight-bold text-primary">Информация о товара</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Картинка</th>
                            <th>Название</th>
                            <th>Бренд</th>
                            <th>Вес (кг.)</th>
                            <th>Категория Собаки / Кошки</th>
                            <th>Цена</th>
                            <th>Колличество товаров</th>
                            <th>Описание</th>
                            <th>Изменить</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pageData['products'] as $key => $item) {
                            echo "<tr>";
                            echo "<td>" . $item['id']  . "</td>";
                            echo "<td><img src='" . $item['img'] . "' width='100px' align='center'></td>";
                            echo "<td>" . $item['name']  . "</td>";
                            echo "<td>" . $item['brand']  . "</td>";
                            echo "<td>" . $item['weight']  . "</td>";
                            echo "<td>" . $item['animal']  . "</td>";
                            echo "<td>" . $item['price']  . "</td>";
                            echo "<td>" . $item['count_product']  . "</td>";
                            echo "<td>" . $item['description']  . "</td>";
                            ?>
                            <td>
                                <button class="show-modal btn btn-outline-primary" data-modal="modal-<?php echo $item['id'] ?>">Изминить</button>
                            </td>
                            <?php
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
    <!-- Content Row -->

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

<!-- Модальное содержание изменения товара-->
<?php foreach ($pageData['products'] as $key => $value) : ?>

    <div id="modal-<?php echo $value['id'] ?>" class="modal">
      <div class="modal-content" >
        <div class="container" style="text-align: center;">
            <span class="close-modal" data-modal="modal-<?php echo $value['id'] ?>">&times;</span>
            <h2>Редактирование товара</h2>
            <form method="post" action="cabinet/product/saveProduct" enctype="multipart/form-data">
                <p>Номер товара - <?php echo $value['id'] ?></p>
                <p>Название товара:
                    <input class="form-control bg-light border-0 small" style="text-align: center" type="text" name="name" value="<?php echo $value['name'] ?>" placeholder="<?php echo $value['name'] ?>"></p>
                    <p>Название бренда товара:
                        <input class="form-control bg-light border-0 small" style="text-align: center" type="text" name="brand" value="<?php echo $value['brand'] ?>" placeholder="<?php echo $value['brand'] ?>"></p>
                        <p>Изменить картинку: </p>
                        <input type="file" name="img" value="" placeholder="Добавление картинки">
                        <br/>
                        <br/>
                        <p>Вес товара (кг.):
                            <input class="form-control bg-light border-0 small" style="text-align: center" type="text" name="weight" value="<?php echo $value['weight'] ?>" placeholder="<?php echo $value['weight'] ?>"></p>
                            <p>Категория Собаки/Кошки:
                                <input class="form-control bg-light border-0 small" style="text-align: center" type="text" name="animal" value="<?php echo $value['animal'] ?>" placeholder="<?php echo $value['animal'] ?>"></p>
                                <p>Цена товара:
                                    <input class="form-control bg-light border-0 small" style="text-align: center" type="text" name="price" value="<?php echo $value['price'] ?>" placeholder="<?php echo $value['price'] ?>"></p>
                                    <p>Колличество товара:
                                        <input class="form-control bg-light border-0 small" style="text-align: center" type="text" name="count_product" value="<?php echo $value['count_product'] ?>" placeholder="<?php echo $value['count_product'] ?>"></p>
                                        <p>Описание товара:</p>
                                        <textarea class="form-control bg-light border-0 small" style="text-align: center" name="description" rows="4" cols="50"><?php echo $value['description'] ?></textarea>
                                        <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                                        <br/>
                                        <button type="submit" class="btn btn-warning">Изменить</button>
                                    </form>
                                    <br/>
                                    <form method="post" action="/cabinet/product/deleteProducts">
                                        <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                                        <button type="submit" class=" btn btn-danger">Удалить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <!-- Модальное содержание добавление товара-->
                    <div id="modal-0" class="modal">
                      <div class="modal-content">
                        <div class="container" style="text-align: center;">
                            <span class="close-modal" data-modal="modal-0">&times;</span>
                            <h2>Добавление товара</h2>
                            <form method="post" action="cabinet/product/addProducts" enctype="multipart/form-data">
                                <p>Название товара:
                                    <input class="form-control bg-light border-0 small" style="text-align: center" type="text" name="name" value="" placeholder="Название тоавра"></p>
                                    <p>Название бренда товара:
                                        <input class="form-control bg-light border-0 small" style="text-align: center" type="text" name="brand" value="" placeholder="Название тоавра"></p>
                                        <p>Добавить картинку:</p>
                                        <input  style="text-align: center" type="file" name="img" value="" placeholder="Добавление картинки">
                                        <br/>
                                        <br/>
                                        <p>Вес товара (кг.):
                                            <input class="form-control bg-light border-0 small" style="text-align: center"  type="text" name="weight" value="" placeholder="Вес товара"></p>
                                            <p>Категория Собаки/Кошки:
                                                <input class="form-control bg-light border-0 small" style="text-align: center" type="text" name="animal" value="" placeholder="Категория товара"></p>
                                                <p>Цена товара:
                                                    <input class="form-control bg-light border-0 small" style="text-align: center" type="text" name="price" value="" placeholder="Цена товара"></p>
                                                    <p>Колличество товара:
                                                        <input class="form-control bg-light border-0 small" style="text-align: center" type="text" name="count_product" value="" placeholder="Колличество товаров"></p>
                                                        <p>Описание товара:</p>
                                                        <textarea class="form-control bg-light border-0 small" style="text-align: center" name="description" rows="4" cols="50" placeholder="Опишите товар"></textarea>
                                                        <br/>
                                                        <button type="submit" class=" btn btn-success">Добавить</button>
                                                    </form>
                                                </div>
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