<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<title><?php echo $pageData['title']; ?></title>
</head>
<body>
	<header></header>
    <div id="page-wrapper">
        <div class="form-group" style="text-align: right;">
            <div class="col-md-offset-4 col-md-8">
                <form method="post" action="/profile/logout">
                    <button class="btn btn-success">Выйти из личного кабинета</button>
                </form>
            </div>
        </div>
        <br/>
        <br/>
        <div class="form-group" style="text-align: right;">
            <div class="col-md-offset-4 col-md-8">
                <a href="/"><button class="btn btn-success">Вернутся на главную</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 align="center"><?php echo $pageData['title']; ?></h2>
                <div style="text-align: center;">
                    <?php
                    if (!empty($_SESSION['message'])) {
                        echo '<button type="submit" class="btn-success msg" style="border-radius: 5px;" disabled> ' . $_SESSION['message'] . ' </button>';
                    }
                    unset($_SESSION['message']);
                    ?>
                </div>
                <br/>
                <form class="form-horizontal" method="post" action="/profile/updateProfile">
                    <input type="hidden" name="id" id="userId" value="<?php echo $pageData['userInfo']['id']; ?>">
                    <fieldset>
                        <div class="form-group">
                            <label for="login" class="col-md-4 control-label">Логин</label>
                            <div class="col-md-4">
                                <input class="form-control input-md" required="true" type="text" id="login" name="login" value="<?php echo $pageData['userInfo']['login']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="login" class="col-md-4 control-label">ФИО</label>
                            <div class="col-md-4">
                                <input class="form-control input-md" required="true" type="text" id="fullName" name="fullName" value="<?php echo $pageData['userInfo']['fullName']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-4">
                                <input class="form-control input-md" required="true" type="email" id="email" name="email" value="<?php echo $pageData['userInfo']['email']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-8">
                                <button id="save" name="save" class="btn btn-success">Сохранить</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">Сменить пароль</h2>
                <form class="form-horizontal" method="post" action="/profile/updatePassword">
                    <input type="hidden" name="userId" id="userId" value="<?php echo $pageData['userInfo']['id']; ?>">
                    <fieldset>
                        <div class="form-group">
                            <label for="newpass" class="col-md-4 control-label">Новый пароль</label>
                            <div class="col-md-4">
                                <input class="form-control input-md" required="true" type="password" id="newpass" name="newpass" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-8">
                                <button id="update" name="update" class="btn btn-success">Обновить</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- /#page-wrapper -->
        <footer>

        </footer>

        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/angular.min.js"></script>
        <script type="text/javascript" src="/js/script.js"></script>

    </body>
    </html>