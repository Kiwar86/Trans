-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 15 2019 г., 15:12
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `TransReil`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, '123', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `zacaz`
--

CREATE TABLE `zacaz` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zacaz`
--

INSERT INTO `zacaz` (`id`, `name`, `email`, `phone`, `text`, `date`) VALUES
(1, 'chcjkv', 'oiuhyghjkvlb;', '0', 'hgghjjhbhcjkfjhhjjn', '2019-04-05'),
(2, 'ip;lokjh', 'hjvklb;.,m', '7542868', 'uyghjklkjhgfgfigh', '2019-04-05'),
(3, 'ip;lokjh', 'hjvklb;.,m', '7542868', 'uyghjklkjhgfgfigh', '2019-04-05'),
(4, 'xhjfk', 'gdhjfkgl', '11111111', '98tsydufigohpphkijhjghjkv', '2019-04-05'),
(5, 'fhfuik', 'ghjkl;', '222222', 'kijuhgvxc', '2019-04-05'),
(6, 'Вася', '.loiuhg', '123456789', 'iuytdufigkjhjkvlob,kmjnjkvlb;.,.n/.,khlkiolkm\r\nzgyufigohpj\'', '2019-04-05'),
(7, '1', '1', '1', '1', '0000-00-00'),
(8, '2', '2', '2', '2', '2019-04-09'),
(9, '777', '777', '777', '7777', '2019-04-09');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zacaz`
--
ALTER TABLE `zacaz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `zacaz`
--
ALTER TABLE `zacaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
