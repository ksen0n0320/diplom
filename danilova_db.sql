-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июн 23 2024 г., 18:07
-- Версия сервера: 10.11.6-MariaDB-1:10.11.6+maria~ubu2004
-- Версия PHP: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `danilova_animal.help`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id_category`, `name`) VALUES
(1, 'кошки'),
(2, 'собаки');

-- --------------------------------------------------------

--
-- Структура таблицы `pet`
--

CREATE TABLE `pet` (
  `id_pet` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `data_reg` date NOT NULL,
  `age` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `pet`
--

INSERT INTO `pet` (`id_pet`, `category_id`, `photo`, `nickname`, `data_reg`, `age`, `description`) VALUES
(10, 1, '1.jpg', 'Муся', '2024-05-15', '2', 'Ласковая и ручная'),
(11, 2, '10.jpg', 'Лаки', '2022-12-02', '1', 'Добрая и пугливая'),
(12, 2, '14.jpg', 'Джесси', '2021-03-23', '5', 'Ласковая и послушная '),
(13, 1, '2.jpg', 'Дикси', '2021-06-20', '4', 'Спокойная и очень любвеобильная'),
(14, 1, '4.jpeg', 'Саймон', '2022-09-18', '2', 'Игривый и очень активный'),
(15, 1, '5.jpg', 'Мила', '2024-07-23', '2', 'Ласковая и игривая'),
(16, 1, '6.png', 'Макс', '2020-04-01', '5', 'Спокойный и ласковый'),
(17, 2, '7.jpg', 'Юкки', '2023-05-20', '1', 'Ласковая и пугливая'),
(18, 2, '12.jpg', 'Веня', '2022-10-03', '3', 'Спокойный и добрый'),
(19, 2, '9.jpg', 'Габи', '2023-04-16', '1', 'Ласковая и добрая'),
(23, 1, '8.jpg', 'Борис', '2023-03-20', '5', 'Спокойный и добрый'),
(24, 2, '15.jpg', 'Челси', '2020-09-11', '4', 'Добрая и ласковая');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id_status`, `name`) VALUES
(1, 'новая'),
(2, 'отклонено'),
(3, 'подтверждено');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(100) NOT NULL,
  `phone` varchar(17) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nickname_pet` varchar(50) NOT NULL,
  `why` varchar(1000) NOT NULL,
  `kids` varchar(100) NOT NULL,
  `other_pet` varchar(100) NOT NULL,
  `vet_help` varchar(100) NOT NULL,
  `agreement` varchar(100) NOT NULL,
  `adaptation` varchar(100) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT 1,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `name`, `age`, `phone`, `email`, `password`, `nickname_pet`, `why`, `kids`, `other_pet`, `vet_help`, `agreement`, `adaptation`, `status_id`, `admin`) VALUES
(1, 'Ксения', '19', '89533693695', 'admin@gmail.com', 'admin', 'Джесси', 'проверка', 'проверка', 'проверка', 'проверка', 'проверка', 'проверка', 1, 1),
(16, 'Саша', '25', '+79803454545', 'sergeeva@mail.com', 'alex', 'Джесси', 'на день рождения', 'нет', 'нету', 'да', 'без проблем', 'да', 3, 0),
(17, 'Анна', '18', '+79111555024', '123@gmail.com', 'qwerty', 'Дикси', 'на день рождения', 'нет', 'нету', 'да', 'без проблем', 'да', 2, 0),
(21, 'Анна', '18', '+79533693695', 'ksenon02012005@gmail.com', 'qwerty', 'Дикси', 'на день рождения', 'нет', 'нету', 'да', 'без проблем', 'да', 1, 0),
(22, 'Вероника', '25', '+79803454545', '123@gmail.com', 'qwerty', 'Лаки', 'на день рождения', 'нет', 'нету', 'да', 'без проблем', 'да', 1, 0),
(24, 'Влад', '47', '89320987328', 'vladimir@mail.ru', 'vlad1977', 'Саймон', 'для себя', 'есть, уже совсем взрослые', 'нет, поэтому и хочу взять из приюта кота', 'да', 'с радостью', 'да, я готов', 1, 0),
(25, 'Ирина', '35', '+79111555024', 'irishka@mail.ru', 'danilovairina', 'Юкки', 'для мужа', 'дочь, 16 лет', 'нету', 'да, мы в состоянии позаботиться о животном', 'без проблем', 'да, я готова', 1, 0),
(26, 'Арсений', '21', '89537845692', 'smirnov@gmail.com', 'smirnov2003', 'Веня', 'для себя и девушки', 'нет', 'нету', 'да, проблем с деньгами нет', 'если будет необходимость то отправим ', 'готов', 1, 0),
(28, 'Борис', '38', '+79112345678', 'boriska@gmail.com', 'boris38', 'Веня', 'жене', 'да, живут отдельно', 'нету', 'да', 'да', 'да', 1, 0),
(30, 'Наталья', '35', '8912367894', 'natali@mail.com', 'natali123', 'Джесси', 'друг для своей собаки', 'нет', '1 собака девочка', 'да', 'да', 'да', 1, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id_pet`),
  ADD KEY `category` (`category_id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `status` (`status_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `pet`
--
ALTER TABLE `pet`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id_category`);

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `status` FOREIGN KEY (`status_id`) REFERENCES `status` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
