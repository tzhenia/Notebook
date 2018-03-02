-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Час створення: Лют 26 2018 р., 22:30
-- Версія сервера: 10.2.12-MariaDB-10.2.12+maria~xenial-log
-- Версія PHP: 7.2.2-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `Notebook`
--

-- --------------------------------------------------------

--
-- Структура таблиці `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) NOT NULL,
  `title` varchar(75) NOT NULL,
  `text` varchar(500) NOT NULL,
  `status` tinyint(10) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `notes`
--

INSERT INTO `notes` (`id`, `title`, `text`, `status`, `dateTime`) VALUES
(1, 'Aenean nec purus arcu!', 'Vivamus id nisi sit amet magna vestibulum convallis quis nec risus. Duis suscipit nec ante accumsan blandit. Etiam eget lacus non nibh vehicula vehicula non ut magna. Maecenas eu nulla sapien. Nullam vel varius velit, sit amet eleifend est. Morbi ac magna ut elit vehicula venenatis in sed erat. Pellentesque ullamcorper accumsan dolor, ut pellentesque ante posuere non.', 1, '2018-02-27 10:16:05'),
(2, 'In vel risus imperdiet, molestie eros ac, cursus neque.', 'Maecenas cursus at est quis dapibus. Suspendisse quis nibh iaculis, iaculis massa facilisis, egestas ex. Pellentesque mollis, quam nec rutrum posuere, mi lorem rhoncus enim, in fermentum urna dolor sed quam. Donec nec sapien sapien. Pellentesque eu nulla ut tellus luctus mattis id hendrerit nisl. Cras vulputate finibus nulla, ut luctus purus finibus in. Nullam sagittis egestas sem ac rutrum. Morbi id erat scelerisque diam sollicitudin porttitor at a nibh.', 0, '2018-02-27 12:08:42'),
(3, 'Cras vulputate finibus nulla', 'Phasellus ultrices congue hendrerit. Sed pharetra rhoncus nulla tincidunt mollis. In ut bibendum lorem. Fusce dapibus ut lacus eget consectetur. Quisque posuere cursus dolor ut volutpat. Nam mollis neque quis sagittis condimentum. Nam sollicitudin tristique dui in volutpat. Vivamus eu mauris et nibh tristique interdum.', 1, '2018-02-27 14:18:10'),
(4, 'But who has any right to find', 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 1, '2018-02-27 14:12:15'),
(5, 'Nam libero tempore, cum soluta nobis est eligendi ', 'In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.', 0, '2018-02-27 14:38:23');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
