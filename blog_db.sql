-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 10 2015 г., 21:02
-- Версия сервера: 5.6.26
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `blog_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `category` tinyint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `text`, `date`, `img_src`, `category`) VALUES
(1, 'Первая статься', 'Описание первой статьи', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam luctus nec leo non cursus. Phasellus non enim aliquet, rhoncus ligula at, faucibus quam. Sed ultricies eros sit amet ante iaculis varius placerat sed dolor. Quisque ac ipsum condimentum, eleifend eros mattis, tempus tellus. Pellentesque euismod nibh arcu, sed scelerisque neque luctus quis. Vivamus non mi purus. Quisque finibus eros vitae placerat rhoncus. Nulla aliquam leo augue, et bibendum velit faucibus vitae. Aliquam placerat nisi quis sagittis dictum. Sed vestibulum est sit amet volutpat suscipit. Aliquam erat volutpat.</p>\r\n\r\n<p>Mauris consequat suscipit suscipit. Pellentesque luctus venenatis lacus, quis faucibus tellus vehicula vel. Proin ante neque, varius vitae neque quis, ornare ultrices ante. Proin at lobortis lacus. Vivamus vestibulum ut ex in convallis. Sed non ultrices magna. In hac habitasse platea dictumst. Phasellus eu varius sem. Morbi aliquam neque nec mauris lobortis, sed volutpat justo laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Cras sed fermentum odio. Proin nec enim efficitur, finibus dolor a, mollis ipsum. Vivamus sollicitudin viverra cursus. Donec vitae interdum urna. <p>Aliquam dolor nunc, cursus eget purus quis, hendrerit tincidunt odio. Fusce elementum velit at est molestie rhoncus ut eget nisl. Sed tincidunt luctus dui. Ut pulvinar turpis in consequat molestie. Sed eu blandit leo. Aliquam erat volutpat. Sed sed dui tincidunt, tincidunt libero eu, aliquam justo. Aliquam justo quam, posuere a sodales nec, vestibulum luctus velit. Vivamus porta dapibus mi, ut vulputate mi finibus vel. Sed in pretium erat. Maecenas in ante luctus, tincidunt neque vitae, posuere dolor. Sed a interdum dolor.</p>', '2015-11-07', 'images/blog.jpg', 1),
(2, 'Вторая статья', 'Описание второй статьи', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam luctus nec leo non cursus. Phasellus non enim aliquet, rhoncus ligula at, faucibus quam. Sed ultricies eros sit amet ante iaculis varius placerat sed dolor. Quisque ac ipsum condimentum, eleifend eros mattis, tempus tellus. Pellentesque euismod nibh arcu, sed scelerisque neque luctus quis. Vivamus non mi purus. Quisque finibus eros vitae placerat rhoncus. Nulla aliquam leo augue, et bibendum velit faucibus vitae. Aliquam placerat nisi quis sagittis dictum. Sed vestibulum est sit amet volutpat suscipit. Aliquam erat volutpat.</p>\r\n\r\n<p>Mauris consequat suscipit suscipit. Pellentesque luctus venenatis lacus, quis faucibus tellus vehicula vel. Proin ante neque, varius vitae neque quis, ornare ultrices ante. Proin at lobortis lacus. Vivamus vestibulum ut ex in convallis. Sed non ultrices magna. In hac habitasse platea dictumst. Phasellus eu varius sem. Morbi aliquam neque nec mauris lobortis, sed volutpat justo laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Cras sed fermentum odio. Proin nec enim efficitur, finibus dolor a, mollis ipsum. Vivamus sollicitudin viverra cursus. Donec vitae interdum urna. <p>Aliquam dolor nunc, cursus eget purus quis, hendrerit tincidunt odio. Fusce elementum velit at est molestie rhoncus ut eget nisl. Sed tincidunt luctus dui. Ut pulvinar turpis in consequat molestie. Sed eu blandit leo. Aliquam erat volutpat. Sed sed dui tincidunt, tincidunt libero eu, aliquam justo. Aliquam justo quam, posuere a sodales nec, vestibulum luctus velit. Vivamus porta dapibus mi, ut vulputate mi finibus vel. Sed in pretium erat. Maecenas in ante luctus, tincidunt neque vitae, posuere dolor. Sed a interdum dolor.</p>', '2015-11-07', 'images/new-google-logo.jpg', 2),
(3, 'AMD выпускает бизнес-ориентированные APU, а HP — ноутбуки на них', 'AMD представила свою совершенно новую серию APU для настольных ПК и ноутбуков бизнес-класса машин под названием AMD PRO. Эти чипы предлагают высокую производительность и стабильность. И одновременно с этим компания HP представила несколько продуктов на этих APU.', '<p>AMD представила свою совершенно новую серию APU для настольных ПК и ноутбуков бизнес-класса машин под названием AMD PRO. Эти чипы предлагают высокую производительность и стабильность. И одновременно с этим компания HP представила несколько продуктов на этих APU.</p>\r\n\r\n<p>Топовым представителем новой линейки AMD является процессор с наименованием PRO A12. Это четырехъядерный чип, совместимый с HSA (гетерогенной системной архитектурой) спецификации 1.0, в связке с 512-ядерным графическим Radeon R7. Имея тактовую частоту 3,4 ГГц  этот чип должен очень хорошо служить множеству деловых целей.</p>\r\n\r\n<p>Самое интересное — это конечно одновременный запуск процессоров и продуктов на нем. Правда аж в Мексике. Но тем не менее — HP  EliteBook 705 это самый тонкий и легкий ноутбук в данной категории в мире. AMD так же отметила, что также самый быстрый, но это мы еще проверим.<p>', '2015-11-07', 'images/hp.jpg', 1),
(4, 'В Украине официально больше нет милиции: сегодня ей не смену пришла Национальная полиция', 'С 7 ноября 2015 года в Украине закончилась многолетняя история милиции. На смену ей пришла Национальная полиция Украины.', '<p>С 7 ноября 2015 года в Украине закончилась многолетняя история милиции. На смену ей пришла Национальная полиция Украины.</p>\r\n\r\n<p>По словам главы МВД Украины Арсена Авакова при реформировании полиции необходимую помощь и поддержку оказали иностранные партнеры из США, Канады, Японии, Европейского Союза. Есть также и поддержка главы государства Петра Порошенко, передает Joinfo.ua.</p>\r\n\r\n<p>Как сообщил министр, до конца года планируется направить еще около 140 млн грн.</p>\r\n<p>"На конец года в Украине будет 6-7 тыс. полицейских, всего работников около 152 тыс., то есть вы должны понимать уровень работы, который надо проходить", -  подчеркнул Аваков.</p>\r\n\r\n<p>Он заявил, что главное в полиции Украины перезагрузка смыслов. Но это вовсе не означает что будут уволены достойные сотрудники, работа котрых пришлась на ранний период.</p>\r\n\r\n<p>"Оцениваются не только квалификация работников, но и моральные качества", - заявила первый заместитель министра Эка Згуладзе.</p>\r\n\r\n<p>Согласно Закона в составе полиции функционируют такие подразделения, как криминальная полиция, патрульная полиция, органы досудебного расследования, полиция охраны, специальная полиция и полиция особого назначения.</p>\r\n\r\n<p>Как сообщал Joinfo.ua. полицейские, которые с 7 ноября заменят милицию, будут использовать удостоверения, печати, логотипы и эмблемы милиции и Министерства внутренних дел Украины аж до 31 декабря 2016 года. Соответствующая норма закреплена в Законе Украины "О Национальной полиции".</p>', '2015-11-07', 'images/police.jpg', 7),
(5, 'Названа самая популярная мобильная ОС среди разработчиков', 'iOS остается приоритетной мобильной операционной системой у разработчиков софта, обходя основного конкурента в лице Android, свидетельствует отчет компании Forrester.', '<p>iOS остается приоритетной мобильной операционной системой у разработчиков софта, обходя основного конкурента в лице Android, свидетельствует отчет компании Forrester.\r\nВ документе изложены результаты опроса порядка 1600 респондентов, занимающихся созданием мобильных приложений в Северной Америке и Европе.</p>\r\n\r\n\r\n<p>Так, более трети (35%) респондентов назвали iPhone наиболее приоритетным устройством для разработки мобильных приложений. Соответствующая доля для Android составила 27%. Примечательно, что, если сравнивать эти данные с прошлогодними цифрами другой исследовательской компании, Flurry, можно сделать вывод, что приоритет среды Android постепенно растет на фоне большей доли Android-девайсов в мире, которая, по сведениям IDC, приближается к 80% на мировом рынке смартфонов. </p>\r\n\r\n<p>Такую твердость позиций iOS исследователи объясняют удобной и выгодной моделью монетизации. Разработка на Android также обычно более трудоемкая ввиду разнообразия экосистем и устройств, множества текущих версий ОС и размеров экрана.</p>\r\n\r\n<p>В сегменте разработок для планшетов, iPad от Apple также оказался предпочтительнее планшетов на Android. 27% респондентов определили iPad как второе по приоритету устройство. <p>Операционку Windows RT от Microsoft опрошенные разработчики приложений вовсе игнорируют.</p>\r\n\r\n<p>Также исследователи рассмотрели технологию строительства приложений. Как оказалось, 41% времени разработчики тратят на написание нативных приложений, 46% - на мобильные веб-приложения или приложения с веб-компонентами (22%) на HTML5.</p>\r\n \r\n<p>Ранее сообщалось, что вредоносные программы чаще атакуют телефоны на Android.</p>', '2015-11-07', 'images/apple.jpg', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name_category` varchar(255) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'IT'),
(2, 'Игры'),
(5, 'Программирование'),
(6, 'Спорт'),
(7, 'Другое');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `text_menu` text NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id_menu`, `name`, `text_menu`) VALUES
(1, 'О нас ', 'Сайт посвящен порно'),
(2, 'Полезно знать', 'Важно пробовать все '),
(3, 'Контакты', 'Тут должны быть разные контакты =)');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
