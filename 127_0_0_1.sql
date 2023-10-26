-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3336
-- Время создания: Окт 26 2023 г., 11:48
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `HACATOON`
--
CREATE DATABASE IF NOT EXISTS `HACATOON` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `HACATOON`;

-- --------------------------------------------------------

--
-- Структура таблицы `TASK`
--

CREATE TABLE `TASK` (
  `id_task` int NOT NULL,
  `name_task` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cel_task` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_task` date NOT NULL,
  `time_task` time NOT NULL,
  `numbers_task` int NOT NULL,
  `priority_task` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `TASK`
--

INSERT INTO `TASK` (`id_task`, `name_task`, `cel_task`, `data_task`, `time_task`, `numbers_task`, `priority_task`) VALUES
(9, 'BIMBAM', 'GYM', '2023-11-01', '13:53:00', 666, 0),
(10, 'jh', 'hj', '2023-10-27', '09:21:00', 666, 5),
(11, 'das', 'das', '2023-09-28', '09:51:00', 666, 2),
(12, 'das', 'das', '2023-09-28', '09:51:00', 666, 2),
(13, 'df', 'fd', '2023-10-27', '13:09:00', 777, 77),
(14, 'df', 'fd', '2023-10-27', '13:09:00', 777, 77),
(15, '2', '2', '2023-10-04', '10:08:00', 2, 2),
(16, '5', '5', '2023-10-27', '10:12:00', 6, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `USER_CREATE`
--

CREATE TABLE `USER_CREATE` (
  `id_user` int NOT NULL,
  `login` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `password` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `USER_CREATE`
--

INSERT INTO `USER_CREATE` (`id_user`, `login`, `password`) VALUES
(1, 'BIMBAM', 123),
(2, 'ofofofofo', 546565656);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `TASK`
--
ALTER TABLE `TASK`
  ADD PRIMARY KEY (`id_task`);

--
-- Индексы таблицы `USER_CREATE`
--
ALTER TABLE `USER_CREATE`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `TASK`
--
ALTER TABLE `TASK`
  MODIFY `id_task` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `USER_CREATE`
--
ALTER TABLE `USER_CREATE`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- База данных: `TEST`
--
CREATE DATABASE IF NOT EXISTS `TEST` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `TEST`;

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id_user` int NOT NULL COMMENT 'ID',
  `login` varchar(60) NOT NULL COMMENT 'логин',
  `password` varchar(25) NOT NULL COMMENT 'пароль',
  `asdw` multipoint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id_user`, `login`, `password`, `asdw`) VALUES
(44, 'gg', 'gg', NULL),
(45, 'gg', 'ggg', NULL),
(46, 'das', 'dsa', NULL),
(47, 'dsa', 'das', NULL),
(48, 'gg', 'zz', NULL),
(49, 'xzc', 'zxc', NULL),
(50, 'zxc', 'zxc', NULL),
(51, 'zxc', 'xzc', NULL),
(52, 'zxc', 'zxcccxzv', NULL),
(53, 'dsaw', 'dasdw', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
