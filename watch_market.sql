-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:8889
-- Время создания: Июн 13 2021 г., 23:34
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `watch_market`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id_basket` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id_brand`, `name`) VALUES
(1, 'Orient'),
(2, 'Fossil'),
(3, 'Rolex'),
(4, 'Apple');

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `first_n` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `last_n` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id_client`, `phone`, `first_n`, `email`, `address`, `last_n`, `password`) VALUES
(1, '+375290000000', 'Sasha', 'Sashalol@mail.com', 'st.Angarskaya', 'Hilman', '1234567890'),
(2, '+375250000000', 'Zlata', 'Zlatalol@mail.com', 'st.Nemiga', 'Shpuntova', '0987654321'),
(3, '+375330000000', 'Vlad', 'Vladlol@mail.com', 'st.Kolesnikova', 'Prophet', 'qwertyuiop');

-- --------------------------------------------------------

--
-- Структура таблицы `mechanism`
--

CREATE TABLE `mechanism` (
  `id_mechanism` int(11) NOT NULL,
  `mechanism` set('Кварцевые','Механические','Электронные') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mechanism`
--

INSERT INTO `mechanism` (`id_mechanism`, `mechanism`) VALUES
(1, 'Кварцевые'),
(2, 'Механические'),
(3, 'Электронные');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `article` varchar(4) NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `model` varchar(35) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `id_mechanism` int(11) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `info` varchar(500) NOT NULL,
  `sex` set('Мужские','Женские','Унисекс') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id_product`, `article`, `price`, `model`, `id_brand`, `id_mechanism`, `photo`, `icon`, `info`, `sex`) VALUES
(1, '0001', '351.00', 'RA-AB0F09L', 1, 2, 'images/orient/orient-1.jpeg', 'images/orient/orient-2.jpg', 'Японский производитель часов. Компания, основанная в Токио в 1950 году Сёгоро Ёсидой, ведёт свою историю от 1901 года - времени вхождения в часовой бизнес её основателя. В середине XX века входила в большую тройку японских производителей часов, однако, в отличие от конкурентов, не перешла в 1970-х годах на массовое производство кварцевых часов, сконцентрировавшись на совершенствовании механических.', 'Мужские'),
(2, '0002', '283.00', 'ES4368', 2, 1, 'images/fossil/fossil-1.jpg', 'images/fossil/fossil-2.jpg', 'Американский модельер и производитель, основанный в 1984 году Томом Карцотисом и базирующийся в Ричардсоне, штат Техас.', 'Женские'),
(3, '0003', '48695.00', 'Submariner Data pre-owned', 3, 2, 'images/rolex/rolex-1.jpg', 'images/rolex/rolex-2.jpg', 'Швейцарская часовая компания, выпускающая наручные часы и аксессуары под торговой маркой Ролекс. В год Rolex выпускает от полумиллиона часов.', 'Мужские'),
(4, '0004', '1099.00', 'Watch 6', 4, 3, 'images/apple/apple-1.jpg', 'images/apple/apple-2.jpg', 'Американская корпорация, производитель персональных и планшетных компьютеров, аудиоплееров, смартфонов, программного обеспечения. Один из пионеров в области персональных компьютеров и современных многозадачных операционных систем с графическим интерфейсом. Штаб-квартира - в Купертино, штат Калифорния. Благодаря инновационным технологиям и эстетичному дизайну, корпорация Apple создала в индустрии потребительской электроники уникальную репутацию, сравнимую с культом.', 'Унисекс');

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `service` set('5.00 BYN','Бесплатно') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`id_service`, `service`) VALUES
(1, '5.00 BYN'),
(2, 'Бесплатно');

-- --------------------------------------------------------

--
-- Структура таблицы `type_product`
--

CREATE TABLE `type_product` (
  `id_type` int(11) NOT NULL,
  `type` set('Hand','Wall','Table','Pocket') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type_product`
--

INSERT INTO `type_product` (`id_type`, `type`) VALUES
(1, 'Hand'),
(2, 'Wall'),
(3, 'Table'),
(4, 'Pocket');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id_basket`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_service` (`id_service`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Индексы таблицы `mechanism`
--
ALTER TABLE `mechanism`
  ADD PRIMARY KEY (`id_mechanism`),
  ADD KEY `id_mechanism` (`id_mechanism`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_brand` (`id_brand`),
  ADD KEY `id_mechanism` (`id_mechanism`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Индексы таблицы `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id_basket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `mechanism`
--
ALTER TABLE `mechanism`
  MODIFY `id_mechanism` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `type_product`
--
ALTER TABLE `type_product`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON UPDATE CASCADE,
  ADD CONSTRAINT `basket_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id_brand`) ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_mechanism`) REFERENCES `mechanism` (`id_mechanism`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
