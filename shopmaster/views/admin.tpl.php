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
	<div id="content">
	<div class="container table-block">
    <div class="row table-cell-block">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Вход в кабинет</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" id="form-signin" method="post">
                	<?php if(!empty($pageData['error'])) : ?>
                		<p><?php echo $pageData['error']; ?></p>
                	<?php endif; ?>
                <input type="text" name="login" id="login" class="form-control" placeholder="Логин" required autofocus>
                <input type="password" name="password" id="password" class="form-control" placeholder="Пароль" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
	</div>
	<footer>

	</footer>

	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/angular.min.js"></script>
	<script type="text/javascript" src="/js/script.js"></script>

</body>
</html>