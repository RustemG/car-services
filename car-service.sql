-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 14 2021 г., 09:28
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `car-service`
--

-- --------------------------------------------------------

--
-- Структура таблицы `advantages`
--

CREATE TABLE `advantages` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `advantages`
--

INSERT INTO `advantages` (`id`, `image`, `name`, `description`) VALUES
(1, '', 'БОЛЕЕ 10 ЛЕТ ОПЫТА РАБОТЫ', 'Вот уже более 10 лет наша компания занимается сервисным обслуживанием и ремонтом автомобилей'),
(2, '', 'БЕСПЛАТНОЕ УСТРАНЕНИЕ НЕИСПРАВНОСТИ', 'Бесплатное устранение одной неисправности при записи на компьютерную диагностику'),
(3, '', 'НЕМЕЦКОЕ ОБОРУДОВАНИЕ WAGENZ PAIR', 'В своей работе мы использую новейшее немецкое оборудование, подъемники и инструменты');

-- --------------------------------------------------------

--
-- Структура таблицы `request`
--

CREATE TABLE `request` (
  `id` int NOT NULL,
  `user` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `request`
--

INSERT INTO `request` (`id`, `user`, `phone`) VALUES
(5, 'ddfgdfg', 'dfgdfgdfg');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(255) NOT NULL,
  `popular` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `image`, `name`, `description`, `price`, `popular`) VALUES
(1, '', 'Починка кузова', 'Мы не стремимся делать самый дешевый кузовной ремонт. Наша цель - безупречное качество работы. Мы точно знаем, что детали, окрашенные в нашем техцентре, невозможно отличить от покрашенных на заводе, а краска не облупится через пару месяцев. Если вам нужен действительно качественный кузовной ремонт с ГАРАНТИЕЙ КАЧЕСТВА - тогда вам к нам!', '990', 'popular'),
(2, '', 'Шиномонтаж', 'Шиномонтаж — это работы по снятию шины с диска и установке ее на диск, с последующей балансировкой. Сюда входят такие операции, как снятие (установка) колес с автомобиля, мойка колес, монтаж (демонтаж) шин с дисков, балансировка колеса в сборе, ремонт шин.', '990', 'no'),
(3, '', 'Слесарный ремонт', 'Слесарный ремонт – это обязательная и важная процедура для каждого автомобиля, выполняемая с определенной периодичностью. Данная услуга включает в себя перечень работ, выполняемых по необходимости с целью выявления и устранения неисправностей автомобиля, а также для поддержания его работоспособности.', '3 990', 'no'),
(4, '', 'Техническое обслуживание', 'Техническое обслуживание и ремонт — комплекс технологических операций и организационных действий по поддержанию работоспособности или исправности объекта при его использовании по назначению, ожидании, хранении и транспортировании. ТОиР могут быть как плановыми, так и неплановыми. Гарантия качества - наш талон!', '1 190', 'popular'),
(5, '', 'Установка сигнализации', 'Установка сигнализации - непростое дело, требующее предельной внимательности и аккуратности. Большинство установщиков подходят к этому пренебрежительно, забывая о исходной цели их работы. Мы всегда помним о том, что наша задача - надежно защитить Ваш автомобиль от угона, поэтому мы так внимательно подходим к установке автосигнализаций. Наши мастера - пример компетенции и внимания к деталям.', '990', 'no'),
(6, '', 'Сход-развал', 'Регулировка углов установки колес, иногда называемая торможением, или трекинг - это часть стандартного технического обслуживания автомобиля, которое заключается в регулировке углов колес в соответствии со спецификациями производителя автомобиля.', '1 190', 'no');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `advantages`
--
ALTER TABLE `advantages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `advantages`
--
ALTER TABLE `advantages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `request`
--
ALTER TABLE `request`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
