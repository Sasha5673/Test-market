-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 07 2023 г., 19:53
-- Версия сервера: 5.6.47-log
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `method` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `amount`, `method`, `region`, `branch`, `email`) VALUES
(1, 2, 8818, 'Новая почта', 'Харьков', 'Отделение_№18_Харьков, просп. Гагарина, 181 (ТЦ \"Sun Mall\")', 'sasha.mirniy02@gmail.com'),
(2, 25, 10592, 'Укр почта', 'Харьков', 'Отделение_№20_Харьков, ул. Клочковская, 197д', 'sasha.mirniy02@gmail.com'),
(3, 2, 5144, 'Новая почта', 'Киев', 'Отделение_№18_Киев, ул. Молодогвардейская, 22 (Чоколовка)', 'sasha.mirniy02@gmail.com'),
(4, 2, 4949, 'Новая почта', 'Харьков', 'Отделение_№43_Харьков, просп. Юбилейный, 1а', 'sasha.mirniy02@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `count_product` int(11) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `weight` float NOT NULL,
  `animal` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `count_product`, `description`, `img`, `weight`, `animal`, `brand`) VALUES
(1, 'Royal Canin Xsmall Adult', 200, 6, 'Полнорационный сухой корм для собак миниатюрных размеров от 10 месяцев до 8 лет.\r\nВ возрасте с 10 месяцев до 8 лет собаки миниатюрных размеров проживают долгий период чрезвычайно активной жизни. Они полны энергии! Для поддержания здоровья, а также для сохранения красоты и блеска шерсти собаке необходимо ежедневное правильное питание.', '/images/product/mediam/Royal Canin Xsmall Adult.jpg', 0.5, 'Собаки', 'Royal Canin'),
(2, 'Hill\'s SP Canine Adult Small & Miniature Lamb & Ri', 230, 5, 'Полнорационный сухой корм с ягненком и рисом для взрослых собак малых и миниатюрных пород весом до 10 кг и возрастом от 1 до 6 лет. Представляет собой комплексное сбалансированное питание, обеспечивающее питомца необходимыми витаминами и микроэлементами.', '/images/product/mediam/Hills6.jpg', 0.5, 'Собаки', 'Hill\'s'),
(3, '1st Choice Adult Toy and Small Breeds', 247, 3, 'Корм на основе мяса курицы для собак миниатюрных и малых пород весом до 9,5 кг в возрасте от 10 месяцев до 8 лет. Лучшие достижения диетологии помогают собакам декоративных и малых пород поддерживать свою жизненную энергию, вес и превосходную физическую форму.', '/images/product/mediam/1st Choice Adult Toy and Small Breeds.jpg', 0.5, 'Собаки', '1st Choice'),
(4, 'Royal Canin Hair & Skin Care', 215, 1, 'Royal Canin Hair & Skin Care - тщательно сбалансированная формула, помогающая поддерживать здоровье кожи и шерсти у взрослых кошек.', '/images/product/mediam/Royal Canin Hair & Skin Care.jpg', 0.5, 'Кошки', 'Royal Canin'),
(5, 'Hill\'s SP Feline Adult Chicken', 230, 3, 'Полнорационный сухой корм с курицей для взрослых кошек возрастом от 1 до 6 лет. Представляет собой комплексное сбалансированное питание, обеспечивающее питомца необходимыми витаминами и микроэлементами.', '/images/product/mediam/Hills1.jpg', 0.5, 'Кошки', 'Hill\'s'),
(6, '1st Choice Cat Adult Finicky', 263, 3, '1st Choice Finicky - это полноценное и сбалансированное питание на основе мяса курицы для привередливых кошек, ведущих активный образ жизни.', '/images/product/mediam/1st Choice Cat Adult Finicky.jpg', 0.5, 'Кошки', '1st Choice'),
(7, 'Royal Canin Mini Adult', 645, 3, 'Корм для взрослых собак малых пород (от 1 до 10 кг) в возрасте с 10 месяцев до 8 лет', '/images/product/mediam/Royal Canin Mini Adult.jpg', 2, 'Собаки', 'Royal Canin'),
(8, 'Hill\'s SP Canine Adult Medium Breed Perfect Weight', 939, 4, 'Полнорационный сухой корм с курицей для поддержания идеального веса у взрослых собак средних пород возрастом старше 1 года и весом от 11 до 25 кг. Представляет собой комплексное сбалансированное питание, обеспечивающее питомца необходимыми витаминами и микроэлементами.', '/images/product/mediam/Hills7.jpg', 2, 'Собаки', 'Hill\'s'),
(9, '1st Choice Senior Toy & Small Breeds', 556, 7, 'Корм на основе мяса курицы для пожилых миниатюрных и малых собак в возрасте от 8 лет или для взрослых собак, склонных к полноте.', '/images/product/mediam/1st Choice Senior Toy & Small Breeds.jpg', 2, 'Собаки', '1st Choice'),
(10, 'Royal Canin Exigent Savour Sensation', 770, 3, 'Продукт Royal Canin Exigent Savoure – это полнорационный корм для привередливых кошек с двумя типами крокет, различных по форме, текстуре и составу, обладающих взаимодополняющими свойствами.', '/images/product/mediam/Royal Canin Exigent Savour Sensation.jpg', 2, 'Кошки', 'Royal Canin'),
(11, 'Hill\'s SP Feline Adult Hairball Indoor Cat', 1340, 3, 'Полнорационный сухой корм с курицей для предупреждения образования волосяных комков в желудке у взрослых кошек возрастом от 1 до 6 лет, живущих исключительно в помещении. Представляет собой комплексное сбалансированное питание, обеспечивающее питомца необходимыми витаминами и микроэлементами.', '/images/product/mediam/Hills2.jpg', 2, 'Кошки', 'Hill\'s'),
(12, '1st Choice Cat Adult Hypoallergenic Duck', 1471, 3, 'Корм для кошек супер-премиум класса 1st Choice Hypoallergic Duck  – это специально разработанная формула для взрослых кошек, страдающих от пищевой аллергии.', '/images/product/mediam/1st Choice Cat Adult Hypoallergenic Duck.jpg', 2, 'Кошки', '1st Choice'),
(13, 'Royal Canin Medium Adult', 1000, 5, 'Корм для взрослых собак средних пород (чей взрослый вес составляет от 11 до 25 кг) в возрасте от 12 месяцев до 7 лет', '/images/product/mediam/Royal Canin Medium Adult.jpg', 4, 'Собаки', 'Royal Canin'),
(14, 'Hill\'s SP Canine Mature Adult 7+ Small & Miniature', 1380, 3, 'Полнорационный сухой корм с курицей для зрелых и пожилых собак мелких и миниатюрных пород весом до 10 кг и возрастом старше 7 лет. Представляет собой комплексное сбалансированное питание, обеспечивающее питомца необходимыми витаминами и микроэлементами.', '/images/product/mediam/Hills8.jpg', 4, 'Собаки', 'Hill\'s'),
(15, '1st Choice Hypoallergenic для собак', 1565, 4, 'Корм на основе мяса утки и батата для собак всех пород возрастом от 12 месяцев, страдающих от пищевой аллергии.', '/images/product/mediam/1st Choice Hypoallergenic для собак.jpg', 4, 'Собаки', '1st Choice'),
(16, 'Royal Canin Appetite Control', 1400, 4, 'Полнорационный сухой корм для взрослых кошек, в том числе стерилизованных, которые имеют склонность к повышенному потреблению корма и выпрашиванию пищи в промежутках между основными кормлениями. ', '/images/product/mediam/Royal Canin Appetite Control.jpg', 4, 'Кошки', 'Royal Canin'),
(17, 'Hill\'s SP Feline Adult Light Chicken', 2700, 6, 'Полнорационный сухой корм с курицей для взрослых кошек возрастом от 1 до 6 лет со сниженным уровнем активности и склонностью к набору лишнего веса. Представляет собой комплексное сбалансированное питание, обеспечивающее питомца необходимыми витаминами и микроэлементами.', '/images/product/mediam/Hills3.jpg', 4, 'Кошки', 'Hill\'s'),
(18, '1st Choice Cat Adult Weight Control (Light)', 2134, 2, '1st Choice Weight Control (Light) - полноценное питание для взрослых кошек, склонных к избыточному весу, а также кастрированных/стерилизованных котов и кошек.', '/images/product/mediam/1st Choice Cat Adult Weight Control (Light).jpg', 4, 'Кошки', '1st Choice'),
(19, 'Royal Canin Maxi Adult', 2700, 2, 'Корм для собак крупных размеров Полнорационный сухой корм для взрослых собак крупных размеров (вес собаки от 26 до 44 кг) в возрасте от 15 месяцев до 5 лет Здоровье пищеварительной системы.', '/images/product/mediam/Royal Canin Maxi Adult.jpg', 8, 'Собаки', 'Royal Canin'),
(20, 'Hill\'s SP Canine Mature Adult 7+ Medium Breed Lamb', 3240, 7, 'Корм для собак на основе мяса ягненка и риса разработан для удовлетворения всех питательных потребностей организма собаки старше 7 лет. (Собаки гигантских пород могут быть переведены на Science PlanScience Plan Mature Adult в возрасте 5 лет). Регулярное употребление корма помогает избежать избыточного потребления тех веществ, которые могут вызвать характерные для этого возраста заболевания, и помочь в поддержании нормального уровня активности.', '/images/product/mediam/Hills9.jpg', 8, 'Собаки', 'Hill\'s'),
(21, '1st Choice Puppy Sensitive Skin & Coat All Breeds', 2358, 3, 'Корм на основе мяса ягненка и океанической рыбы для щенков всех пород в возрасте от 2 до 12 месяцев.', '/images/product/mediam/1st Choice Puppy Sensitive Skin & Coat All Breeds.jpg', 8, 'Собаки', '1st Choice'),
(22, 'Hill\'s SP Feline Adult Sensitive Stomach & Skin', 3560, 5, 'Полнорационный сухой корм для взрослых кошек с чувствительным пищеварением и кожей. Представляет собой сбалансированное питание, необходимое питомцу для поддержания отменного здоровья и хорошего самочувствия.', '/images/product/mediam/Hills4.jpg', 8, 'Кошки', 'Hill\'s'),
(23, 'Royal Canin Oral Care', 3440, 2, 'Royal Canin Oral Care – тщательно сбалансированная формула, помогающая снизить интенсивность образования зубного камня и сохранить здоровье ротовой полости у взрослых кошек.', '/images/product/mediam/Royal Canin Oral Care.jpg', 8, 'Кошки', 'Royal Canin'),
(24, '1st Choice Cat Sterilized', 3422, 1, '1st Choice Sterilized - специальный рацион, который позволяет значительно снизить риск появления лишнего веса у кошек и котов, а также профилактирует появления мочекаменной болезни.', '/images/product/mediam/1st Choice Cat Sterilized.jpg', 8, 'Кошки', '1st Choice'),
(25, 'Royal Canin Giant Adult', 3100, 3, 'К группе GIANT относятся собаки, чей взрослый вес превышает 45 кг', '/images/product/mediam/Royal Canin Giant Adult.jpg', 10, 'Собаки', 'Royal Canin'),
(26, 'Hill\'s SP Canine Adult Large Breed Healthy Mobilit', 3580, 9, 'Полнорационный сухой корм с курицей и хондропротекторами для поддержания здоровья суставов у взрослых собак крупных пород весом свыше 25 кг и возрастом старше 1 года. Представляет собой комплексное сбалансированное питание, обеспечивающее питомца необходимыми витаминами и микроэлементами.', '/images/product/mediam/Hills10.jpg', 10, 'Собаки', 'Hill\'s'),
(27, '1st Choice Adult Medium and Large Breeds Weight Co', 2473, 3, 'Полнорационный корм на основе курицы, ячменя и риса для взрослых собак средних и крупных пород с избыточным весом и проблемой ожирения. Сбалансированное, обогащенное пребиотиками, клетчаткой, витаминами, минералами и полезными экстрактами питание, разработанное для собак средних и крупных размеров для снижения веса и улучшения метаболизма в их организме.', '/images/product/mediam/1st Choice Adult Medium and Large Breeds Weight Control.jpg', 10, 'Собаки', '1st Choice'),
(28, 'Royal Canin Sterilised', 3500, 2, 'Royal Canin Sterilised – полнорационный сухой корм для стерилизованных/кастрированных кошек/котов в возрасте от 1 до 7 лет.', '/images/product/mediam/Royal Canin Sterilised.jpg', 10, 'Кошки', 'Royal Canin'),
(29, 'Hill\'s SP Feline Adult Sterilised Cat With Tuna', 4450, 2, 'Полнорационный сухой корм с тунцом для стерилизованных кошек возрастом от 1 до 6 лет. Представляет собой комплексное сбалансированное питание, обеспечивающее питомца необходимыми витаминами и микроэлементами при особых потребностях его организма после процедуры кастрации или стерилизации.', '/images/product/mediam/Hills5.jpg', 10, 'Кошки', 'Hill\'s'),
(30, '1st Choice Cat Adult Healthy Skin & Coat', 3631, 9, 'Корм 1st Choice Healthy Skin & Coat обеспечит Вашей кошке отличный внешний вид шерсти и здоровье кожи.', '/images/product/mediam/1st Choice Cat Adult Healthy Skin & Coat.jpg', 10, 'Кошки', '1st Choice');

-- --------------------------------------------------------

--
-- Структура таблицы `productinorders`
--

CREATE TABLE `productinorders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `count_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `productinorders`
--

INSERT INTO `productinorders` (`order_id`, `product_id`, `count_qty`) VALUES
(1, 1, 1),
(1, 19, 1),
(1, 22, 1),
(1, 21, 1),
(2, 2, 1),
(2, 25, 1),
(2, 30, 2),
(3, 2, 1),
(3, 14, 1),
(3, 16, 1),
(3, 18, 1),
(4, 8, 1),
(4, 10, 1),
(4, 20, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'buyer'),
(3, 'visitor');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(30) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `fullName`, `email`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin@emal.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'Гость', 'Гость', '', 'ec6a6536ca304edf844d1d248a4f08dc', 3),
(5, 'mads', 'Maximus', 'maxim@email.com', '4297f44b13955235245b2497399d7a93', 2),
(22, 'ivanchik', 'Ivanov Ivanovich', 'der@email.com', '4297f44b13955235245b2497399d7a93', 2),
(25, 'sasha', 'Sasha', 'sanchez@gmail.com', '701207b8c01abd574231c1a35ba24601', 2),
(27, 'dsds', 'Ivanov Ivanovich', 'artem@emal.com', '4297f44b13955235245b2497399d7a93', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `productinorders`
--
ALTER TABLE `productinorders`
  ADD KEY `order_id` (`order_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `productinorders`
--
ALTER TABLE `productinorders`
  ADD CONSTRAINT `productinorders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productinorders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
