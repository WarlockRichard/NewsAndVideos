-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 23 2016 г., 15:41
-- Версия сервера: 5.5.50
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newsandvideos`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` smallint(5) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `preview` text NOT NULL,
  `text` mediumtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `preview`, `text`) VALUES
(3, 'Heading', 'Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.', 'Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'),
(4, 'Lorem ipsum', 'Lorem ipsum dolor sit amet. Rem aperiam eaque ipsa, quae ab illo inventore. Molestias excepturi sint, obcaecati cupiditate non recusandae eveniet, ut labore. Excepturi sint, obcaecati cupiditate non recusandae eos et. Temporibus autem quibusdam et aut reiciendis voluptatibus maiores alias consequatur. Amet, consectetur, adipisci velit, sed quia. Earum rerum facilis est. Iure reprehenderit, qui ratione voluptatem accusantium doloremque laudantium, totam rem aperiam eaque.', 'Lorem ipsum dolor sit amet. Rem aperiam eaque ipsa, quae ab illo inventore. Molestias excepturi sint, obcaecati cupiditate non recusandae eveniet, ut labore. Excepturi sint, obcaecati cupiditate non recusandae eos et. Temporibus autem quibusdam et aut reiciendis voluptatibus maiores alias consequatur. Amet, consectetur, adipisci velit, sed quia. Earum rerum facilis est. Iure reprehenderit, qui ratione voluptatem accusantium doloremque laudantium, totam rem aperiam eaque.\r\n\r\nNesciunt, neque porro quisquam est, qui ratione voluptatem accusantium. Illum, qui dolorem ipsum, quia voluptas assumenda est omnis. Neque porro quisquam est, qui blanditiis praesentium voluptatum deleniti atque corrupti. Dolorem eum iure reprehenderit, qui ratione voluptatem accusantium doloremque laudantium. Ad minima veniam, quis nostrum exercitationem. Non provident, similique sunt in ea voluptate velit esse, quam nihil. Aspernatur aut rerum facilis.\r\n\r\nIpsa, quae ab illo inventore veritatis. Quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut labore. Eum fugiat, quo voluptas sit, aspernatur aut reiciendis voluptatibus maiores alias. Ipsam voluptatem, quia non recusandae blanditiis praesentium voluptatum. Ullam corporis suscipit laboriosam, nisi ut aliquid ex. Beatae vitae dicta sunt, explicabo provident, similique sunt. Suscipit laboriosam, nisi ut aut odit.'),
(5, 'Harum quidem', 'Harum quidem rerum necessitatibus saepe eveniet. Praesentium voluptatum deleniti atque corrupti, quos dolores. Non numquam eius modi tempora incidunt, ut aut perferendis doloribus. Accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore. Molestias excepturi sint, obcaecati cupiditate non recusandae asperiores repellat. consequuntur magni dolores. Odio dignissimos ducimus, qui dolorem eum iure reprehenderit. Minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam nisi.', 'Harum quidem rerum necessitatibus saepe eveniet. Praesentium voluptatum deleniti atque corrupti, quos dolores. Non numquam eius modi tempora incidunt, ut aut perferendis doloribus. Accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore. Molestias excepturi sint, obcaecati cupiditate non recusandae asperiores repellat. consequuntur magni dolores. Odio dignissimos ducimus, qui dolorem eum iure reprehenderit. Minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam nisi.\r\n\r\nDebitis aut rerum facilis est. Sit, aspernatur aut odit aut reiciendis. Voluptas assumenda est, omnis voluptas assumenda est. Laboriosam, nisi ut et dolore magnam. Debitis aut fugit, sed quia. A sapiente delectus, ut aut odit. Animi, id est et dolore magnam aliquam quaerat voluptatem. Nulla vero eos et dolorum fuga facere. Aperiam eaque ipsa, quae ab illo inventore veritatis.'),
(6, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet. Qui dolorem ipsum, quia dolor repellendus nobis est et quasi architecto beatae. Eligendi optio, cumque nihil impedit, quo voluptas assumenda. Sint et iusto odio dignissimos ducimus, qui. Incidunt, ut aliquid ex ea voluptate velit esse, quam nihil molestiae. Adipisci velit, sed ut enim ipsam voluptatem, quia non recusandae cum soluta. Odit aut perferendis doloribus asperiores repellat. sint obcaecati.', 'Lorem ipsum dolor sit amet. Qui dolorem ipsum, quia dolor repellendus nobis est et quasi architecto beatae. Eligendi optio, cumque nihil impedit, quo voluptas assumenda. Sint et iusto odio dignissimos ducimus, qui. Incidunt, ut aliquid ex ea voluptate velit esse, quam nihil molestiae. Adipisci velit, sed ut enim ipsam voluptatem, quia non recusandae cum soluta. Odit aut perferendis doloribus asperiores repellat. sint obcaecati.\r\n\r\nAmet, consectetur, adipisci velit, sed ut labore et accusamus. Reprehenderit, qui blanditiis praesentium voluptatum deleniti atque corrupti quos. Debitis aut reiciendis voluptatibus maiores alias. Nostrum exercitationem ullam corporis suscipit laboriosam. Atque corrupti, quos dolores eos, qui blanditiis praesentium voluptatum deleniti atque corrupti. Quibusdam et iusto odio dignissimos ducimus, qui quae ab illo inventore. Ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam nisi.\r\n\r\nUnde omnis iste natus error sit voluptatem accusantium. Eos, qui ratione voluptatem sequi nesciunt neque. Quibusdam et harum quidem rerum hic tenetur a sapiente delectus. Repudiandae sint et quas molestias excepturi sint, obcaecati cupiditate. Aspernatur aut perferendis doloribus asperiores repellat.. Odit aut reiciendis voluptatibus maiores alias consequatur aut rerum. Maiores alias consequatur aut odit. Maiores alias consequatur aut reiciendis voluptatibus maiores alias consequatur aut reiciendis voluptatibus.'),
(7, 'Laudantium', 'Laudantium, totam rem aperiam eaque ipsa quae. Molestias excepturi sint, obcaecati cupiditate non recusandae. Quo voluptas assumenda est, omnis voluptas assumenda est. Ab illo inventore veritatis et voluptates repudiandae sint et expedita. Enim ipsam voluptatem, quia dolor sit, amet, consectetur, adipisci velit. Atque corrupti, quos dolores eos. Dolore magnam aliquam quaerat voluptatem accusantium doloremque laudantium. Aspernatur aut fugit, sed quia consequuntur magni.\r\n', 'Laudantium, totam rem aperiam eaque ipsa quae. Molestias excepturi sint, obcaecati cupiditate non recusandae. Quo voluptas assumenda est, omnis voluptas assumenda est. Ab illo inventore veritatis et voluptates repudiandae sint et expedita. Enim ipsam voluptatem, quia dolor sit, amet, consectetur, adipisci velit. Atque corrupti, quos dolores eos. Dolore magnam aliquam quaerat voluptatem accusantium doloremque laudantium. Aspernatur aut fugit, sed quia consequuntur magni.\r\n\r\nVel eum fugiat, quo voluptas sit aspernatur. Tempora incidunt, ut labore et quas molestias excepturi sint obcaecati. Enim ad minima veniam, quis nostrum. Placeat, facere possimus, omnis iste. Sint et molestiae consequatur, vel illum, qui dolorem. Similique sunt in ea voluptate velit. Voluptatibus maiores alias consequatur aut rerum necessitatibus saepe eveniet. Totam rem aperiam eaque ipsa, quae ab illo inventore veritatis.');

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` smallint(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `path` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `video`
--

INSERT INTO `video` (`id`, `title`, `description`, `path`, `type`) VALUES
(1, 'Maxime placeat', 'Maxime placeat, facere possimus, omnis iste natus error. Consectetur, adipisci velit, sed quia voluptas sit, amet, consectetur, adipisci velit. Voluptas sit, aspernatur aut fugit, sed quia dolor sit amet. Impedit, quo minus id, quod maxime. Dolor sit, aspernatur aut fugit. Eos et aut perferendis doloribus asperiores repellat. sunt in ea commodi autem. Porro quisquam est, omnis voluptas sit, amet consectetur.', '/small.mp4', 'video/mp4'),
(2, 'Eos et accusamus', 'Eos et accusamus et harum quidem rerum. Omnis voluptas sit, aspernatur aut rerum. Cupiditate non numquam eius modi tempora incidunt, ut. Mollitia animi, id est et expedita distinctio doloribus asperiores repellat.. Aperiam eaque ipsa, quae ab illo inventore veritatis. Esse, quam nihil molestiae non recusandae. Voluptates repudiandae sint et quasi architecto beatae vitae dicta sunt, explicabo possimus. Maiores alias consequatur aut rerum hic tenetur a sapiente delectus, ut perspiciatis.', '/small.ogv', 'video/ogg'),
(3, 'Dolores eos', 'Dolores eos, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores eos. Quae ab illo inventore veritatis et expedita distinctio quo voluptas assumenda. Ipsam voluptatem, quia dolor repellendus consequuntur magni dolores. Maxime placeat, facere possimus omnis. Iusto odio dignissimos ducimus, qui qui corporis suscipit laboriosam. Consequuntur magni dolores et dolore magnam aliquam. Corporis suscipit laboriosam, nisi ut aut fugit, sed.', '/small.webm', 'video/webm');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `video`
--
ALTER TABLE `video`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
