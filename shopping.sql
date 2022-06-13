-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 13 2022 г., 13:08
-- Версия сервера: 5.7.38-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shopping`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', 'test123', '2017-01-24 16:21:18', '21-06-2018 08:27:55 PM');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoryDescription` longtext COLLATE utf8mb4_unicode_ci,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(11, 'Bioteka ', 'Натуральные и органические продукты питания, напитки и пищевые добавки.', '2022-06-12 04:59:23', '12-06-2022 11:16:49 AM'),
(12, 'Botavikos', 'Косметика Botavikos – растительный уход, который помогает восстановить естественные защитные силы, гармонизировать физиологические процессы, помочь коже и волосам стать здоровыми.', '2022-06-12 05:00:02', NULL),
(13, 'Doctor-Oil', 'Уникальный в своем роде производитель Doctor Oil . Производство расположено на Крымском побережье Черного моря, в городе — курорте Ялта. В ассортименте производителя только натуральные и органические нативные средства.', '2022-06-12 05:02:11', '12-06-2022 08:02:30 AM'),
(14, 'Ecocraft', 'Создана по уникальным рецептам мастеров из Грасса – мировой столицы французской парфюмерии.\r\nКаждый аромат из серии ECOCRAFT рассказывает отдельную историю, открывает новый мир.', '2022-06-12 05:03:16', NULL),
(15, 'Elisia', 'Отечественный бренд растительной косметики для ухода за кожей с гармоничным сочетанием активных и натуральных компонентов, эффективность которых подтверждена исследованиями и проверена временем', '2022-06-12 05:04:31', NULL),
(16, 'Freshbubble', 'Средства из растительных ингредиентов для уборки дома. Эко-средства Freshbubble безопасны для здоровья и окружающей среды', '2022-06-12 05:04:52', NULL),
(17, 'INNATURE', 'Продукция марки Innature производится в России и использует местные и экзотические природные компоненты для создания натуральных средств по уходу за кожей, лицом и волосами', '2022-06-12 05:05:45', NULL),
(18, 'Jurassic Spa', '', '2022-06-12 05:07:21', NULL),
(19, 'Kleona', '', '2022-06-12 05:07:34', NULL),
(20, 'Kristall Minerals', '', '2022-06-12 05:07:54', NULL),
(21, 'Laboratorium', '', '2022-06-12 05:08:03', NULL),
(22, 'Levrana', '', '2022-06-12 05:08:09', NULL),
(23, 'Мануфактура \"Дом природы\"', '', '2022-06-12 05:08:24', NULL),
(24, 'MiKo', '', '2022-06-12 05:08:55', NULL),
(25, 'Мастерская Олеси Мустаевой', '', '2022-06-12 05:09:05', NULL),
(26, 'Nano Organic', '', '2022-06-12 05:09:14', NULL),
(27, 'Натуральная Крымская коллекция', '', '2022-06-12 05:09:32', NULL),
(28, 'Organic Zone!', '', '2022-06-12 05:09:43', NULL),
(29, 'ПАNTIKA', '', '2022-06-12 05:10:01', NULL),
(30, 'Полиада-Крым', '', '2022-06-12 05:10:14', NULL),
(31, 'Крымская роза', '', '2022-06-12 05:10:22', NULL),
(32, 'Сакские грязи', '', '2022-06-12 05:10:35', NULL),
(33, 'Shokonat', '', '2022-06-12 05:10:45', NULL),
(34, 'SmoRodina', '', '2022-06-12 05:10:59', NULL),
(35, 'TintBerry', '', '2022-06-12 05:11:11', NULL),
(36, 'True Alchemy', '', '2022-06-12 05:11:24', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paymentMethod` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderStatus` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`) VALUES
(7, 1, '21', 1, '2020-11-26 16:05:13', 'Internet Banking', NULL),
(8, 5, '21', 1, '2022-06-09 11:00:53', 'Debit / Credit card', NULL),
(9, 1, '21', 1, '2022-06-09 11:02:37', NULL, NULL),
(10, 1, '21', 1, '2022-06-09 11:39:07', NULL, NULL),
(11, 1, '21', 1, '2022-06-09 12:35:23', NULL, NULL),
(12, 1, '21', 1, '2022-06-09 12:47:24', NULL, NULL),
(13, 5, '21', 5, '2022-06-11 16:26:10', NULL, 'in Process'),
(14, 5, '21', 7, '2022-06-12 03:52:09', NULL, NULL),
(15, 5, '22', 1, '2022-06-12 14:17:36', NULL, NULL),
(16, 5, '26', 1, '2022-06-12 14:17:36', NULL, NULL),
(17, 5, '29', 1, '2022-06-12 14:17:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`) VALUES
(1, 13, 'in Process', 'Заказ доставлен до пункта выдачи', '2022-06-11 16:27:40');

-- --------------------------------------------------------

--
-- Структура таблицы `productreviews`
--

CREATE TABLE `productreviews` (
  `id` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` longtext COLLATE utf8mb4_unicode_ci,
  `reviewDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productCompany` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext COLLATE utf8mb4_unicode_ci,
  `productImage1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productImage2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productImage3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(21, 7, 13, 'шамп', 'Uniqlo', 20, 50, '<span style=\"color: rgb(0, 0, 0); font-family: Helvetica, sans-serif; font-size: 16px;\">Uniqlo and the artist KAWS are teaming up again for a unique capsule collection. This exceptional collaboration revealed on social networks includes several t-shirts and totebags. After several other partnerships, this one highlights the characters of the capsule collection.&nbsp;</span><strong style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-family: Helvetica, sans-serif; font-size: 16px;\">COMPANION</strong><span style=\"color: rgb(0, 0, 0); font-family: Helvetica, sans-serif; font-size: 16px;\">and&nbsp;</span><strong style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-family: Helvetica, sans-serif; font-size: 16px;\">BFF</strong><span style=\"color: rgb(0, 0, 0); font-family: Helvetica, sans-serif; font-size: 16px;\">&nbsp;invented by KAWS.</span><br>', '1.jpg', '1.jpg', '1.jpg', 2, 'In Stock', '2020-11-26 15:44:51', NULL),
(22, 15, 14, 'Анти-акне, пакет 25 гр', 'Elisia', 214, 214, '<br>', '2.jpg', '2.1.jpg', '', 20, 'In Stock', '2022-06-12 09:36:48', NULL),
(25, 15, 14, 'Против купероза, пакет 25 гр', 'Elisia', 214, 214, '<br>', '4.jpg', '4.1.jpg', '', 20, 'In Stock', '2022-06-12 09:41:54', NULL),
(26, 15, 15, 'Увлажнение 24 часа, ампулы 2 мл*10 шт', 'Elisia', 637, 637, '<br>', '5.jpg', '5.1.jpg', '', 20, 'In Stock', '2022-06-12 09:43:19', NULL),
(27, 15, 15, 'Восточный эликсир, ампулы 2 мл * 10 шт', 'Elisia', 637, 637, '<br>', '6.jpg', '6.1.jpg', '6.2.jpg', 20, 'Out of Stock', '2022-06-12 09:44:38', NULL),
(28, 15, 14, 'Отбеливающая маска для лица, пакет 25 гр', 'Elisia', 214, 214, '<br>', '3.jpg', '3.1.jpg', '', 20, 'In Stock', '2022-06-12 09:47:04', NULL),
(29, 16, 21, 'Мыло жидкое \"Сладкий апельсин\", 300 мл', 'Freshbuble', 176, 220, '<br>', '7.jpg', '7.jpg', '', 20, 'Out of Stock', '2022-06-12 09:49:21', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(13, 7, 'Kaos', '2020-11-26 15:36:56', NULL),
(14, 15, 'Альгинатные маски для лица', '2022-06-12 08:44:28', NULL),
(15, 15, 'Ампульные комплексы для лица', '2022-06-12 08:44:57', NULL),
(16, 11, 'Гарниры', '2022-06-12 08:46:10', NULL),
(17, 11, 'Сладости', '2022-06-12 08:49:38', NULL),
(18, 11, 'Масла, соусы, уксусы', '2022-06-12 08:49:51', NULL),
(19, 11, 'Напитки', '2022-06-12 08:50:21', NULL),
(20, 11, 'Суперфуды', '2022-06-12 08:50:30', NULL),
(21, 16, 'Косметика', '2022-06-12 08:51:38', NULL),
(22, 16, 'Для дома', '2022-06-12 08:51:48', NULL),
(23, 16, 'Для детей', '2022-06-12 08:52:01', NULL),
(24, 16, 'Пробники', '2022-06-12 08:52:53', NULL),
(25, 20, 'Декоративная косметика', '2022-06-12 08:54:59', NULL),
(26, 20, 'Подарки и подарочные наборы', '2022-06-12 09:00:45', NULL),
(27, 20, 'Пробники', '2022-06-12 09:01:02', NULL),
(28, 21, 'Для тела', '2022-06-12 09:01:27', NULL),
(29, 21, 'Для тела', '2022-06-12 09:03:17', NULL),
(30, 21, 'Для тела', '2022-06-12 09:03:27', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(24, 'coba@gmail.com', 0x3a3a3100000000000000000000000000, '2020-11-26 15:59:14', '26-11-2020 09:31:00 PM', 1),
(25, 'coba@gmail.com', 0x3a3a3100000000000000000000000000, '2020-11-26 16:01:39', NULL, 0),
(26, 'kedua@gmail.com', 0x3a3a3100000000000000000000000000, '2020-11-26 16:02:02', '26-11-2020 09:33:06 PM', 1),
(27, 'coba@gmail.com', 0x3a3a3100000000000000000000000000, '2020-11-26 16:03:25', '26-11-2020 09:33:32 PM', 1),
(28, 'coba@gmail.com', 0x3a3a3100000000000000000000000000, '2020-11-26 16:03:52', '26-11-2020 09:35:57 PM', 1),
(29, 'almaopt.1@yandex.ru', 0x3132372e302e302e3100000000000000, '2022-06-09 11:00:50', NULL, 1),
(30, 'almaopt.1@yandex.ru', 0x3132372e302e302e3100000000000000, '2022-06-11 16:24:57', '11-06-2022 07:36:38 PM', 1),
(31, 'almaopt.1@yandex.ru', 0x3132372e302e302e3100000000000000, '2022-06-12 03:52:06', NULL, 1),
(32, 'almaopt.1@yandex.ru', 0x3132372e302e302e3100000000000000, '2022-06-12 13:49:11', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shippingAddress` longtext COLLATE utf8mb4_unicode_ci,
  `shippingState` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shippingCity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shippingPincode` int(11) DEFAULT NULL,
  `billingAddress` longtext COLLATE utf8mb4_unicode_ci,
  `billingState` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billingCity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billingPincode` int(11) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `regDate`, `updationDate`) VALUES
(1, 'Coba', 'coba@gmail.com', 9009857868, 'f925916e2754e5e03f75dd58a5733251', 'Semarang', 'Jawa Tengah', 'Semarang', 110001, 'Semarang', 'Jawa Tengah', 'Semarang', 110092, '2017-02-04 19:30:50', ''),
(4, 'Kedua', 'kedua@gmail.com', 123, '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-26 16:01:27', NULL),
(5, 'trizna m e', 'almaopt.1@yandex.ru', 9209008591, 'db65d19502494c9e75c264082c12ab3a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-09 11:00:40', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `wishlist`
--

INSERT INTO `wishlist` (`id`, `userId`, `productId`, `postingDate`) VALUES
(1, 1, 0, '2017-02-27 18:53:17'),
(2, 1, 21, '2020-11-26 16:00:22');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
