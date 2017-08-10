-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Сер 10 2017 р., 15:52
-- Версія сервера: 5.7.19
-- Версія PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `smarty`
--

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'qwerty@mail.ua', 1111),
(2, 'test@mail.ua', 2222),
(3, 'test1@mail.ua', 3333),
(4, 'test2@mail.ua', 4444),
(5, 'test1@mail.ua', 1111),
(6, 'test4@mail.ua', 1234),
(7, 'test1@mail.ua', 1),
(8, 'test6@mail.ua', 1111),
(9, 'test7@mail.ua', 1111),
(10, 'test7@mail.ua', 1234),
(11, 'test1@mail.ua', 1111),
(12, 'test10@mail.ua', 111),
(13, 'test1@mail.ua', 11),
(14, 'test1@mail.ua', 11),
(15, 'test6@mail.ua', 124),
(16, 'test6@mail.ua', 124),
(17, 'test1@mail.ua', 123),
(18, 'test1@mail.ua', 111111),
(19, 'test1@mail.ua', 34),
(20, 'test1@mail.ua', 1111);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
