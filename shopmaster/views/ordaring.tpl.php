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
<div class="container">
    <br/>
    <a href="/"><button type="submit" class="btn btn-primary">Вернутся на главную</button></a>
    <h1>Checkout</h1>

    <?php if (isset($message)): ?>
        <div class="alert alert-success">
            <?= $message ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($_SESSION['cart'])): ?>
        <?php foreach ($_SESSION['cart'] as $id => $item): ?>
            <div class="cart-img-content">
                <label for="amount">Название продукта:</label>
                <a href="#"><h4><?= $item['name'] ?></h4></a>
                <span>
                    <label for="amount">Количество продуктов:</label>
                    <strong class="text-right"><?= $item['qty'] ?>x</strong>
                    <br/>
                    <label for="amount">Цена продукта:</label>
                    <strong class="cart-price text-right"><?= $item['price'] ?></strong>
                    <br/>
                    <label for="amount">Описание продукта:</label>
                    <strong class="cart-price text-right"><?= $item['description'] ?></strong>
                </span>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Корзина пуста...</p>
    <?php endif; ?>

    <form action="/ordering" method="POST">
        <div class="form-group">
            <input type="text" name="user_id" id="user_id" value="<?php if(isset($_SESSION['userId']) && $_SESSION['userId'] != ''){ echo $_SESSION['userId']; } else { echo '2'; } ?>" hidden>
        </div>
        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="text" name="amount" id="amount" value="<?= $_SESSION['cart.sum'] ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="method">Method:</label>
            <select name="method" id="method" class="form-control">
                <option value="Новая почта">Новая почта</option>
                <option value="Укр почта">Укр почта</option>
            </select>
        </div>

        <div class="form-group">
            <label for="region">Region:</label>
            <select name="region" id="region" class="form-control">
                <option value="Вінницька область">Вінницька область</option>
                <option value="Волинська область">Волинська область</option>
                <option value="Дніпропетровська область">Дніпропетровська область</option>
                <option value="Донецька область">Донецька область</option>
                <option value="Житомирська область">Житомирська область</option>
                <option value="Закарпатська область">Закарпатська область</option>
                <option value="Запорізька область">Запорізька область</option>
                <option value="Івано-Франківська область">Івано-Франківська область</option>
                <option value="Київ">Київ</option>
                <option value="Київська область">Київська область</option>
                <option value="Кiровоградська область">Кiровоградська область</option>
                <option value="Луганська область">Луганська область</option>
                <option value="Львівська область">Львівська область</option>
                <option value="Миколаївська область">Миколаївська область</option>
                <option value="Одеська область">Одеська область</option>
                <option value="Полтавська область">Полтавська область</option>
                <option value="Рівненська область">Рівненська область</option>
                <option value="Сумська область">Сумська область</option>
                <option value="Тернопільська область">Тернопільська область</option>
                <option value="Харківська область">Харківська область</option>
                <option value="Херсонська область">Херсонська область</option>
                <option value="Хмельницька область">Хмельницька область</option>
                <option value="Черкаська область">Черкаська область</option>
                <option value="Чернігівська область">Чернігівська область</option>
                <option value="Чернівецька область">Чернівецька область</option>
            </select>
        </div>

        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" name="city" id="city" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="street">Street:</label>
            <input type="text" name="street" id="street" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="house">House:</label>
            <input type="text" name="house" id="house" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Заказать</button>
    </form>
    <br/>
    <a href="/cart/deleteCart"><button type="submit" class="btn btn-primary">Очистить корзину</button></a>
</div>
<br/><br/>
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/angular.min.js"></script>
	<script type="text/javascript" src="/js/script.js"></script>

</body>
</html>