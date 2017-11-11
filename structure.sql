-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 11 2017 г., 15:15
-- Версия сервера: 5.5.57-0+deb8u1
-- Версия PHP: 7.0.24-1~dotdeb+8.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `nvme-tester`
--

-- --------------------------------------------------------

--
-- Структура таблицы `values`
--

CREATE TABLE IF NOT EXISTS `values` (
`id` int(10) unsigned NOT NULL,
  `integer1` int(11) unsigned NOT NULL,
  `integer2` int(11) unsigned NOT NULL,
  `integer3` int(10) unsigned NOT NULL,
  `integer4` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `values`
--
ALTER TABLE `values`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `values`
--
ALTER TABLE `values`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;