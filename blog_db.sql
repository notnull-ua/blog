-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 30 2015 г., 01:38
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `text`, `date`, `img_src`, `category`) VALUES
(1, 'Первая статья', 'Описание первой статьи', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam luctus nec leo non cursus. Phasellus non enim aliquet, rhoncus ligula at, faucibus quam. Sed ultricies eros sit amet ante iaculis varius placerat sed dolor. Quisque ac ipsum condimentum, eleifend eros mattis, tempus tellus. Pellentesque euismod nibh arcu, sed scelerisque neque luctus quis. Vivamus non mi purus. Quisque finibus eros vitae placerat rhoncus. Nulla aliquam leo augue, et bibendum velit faucibus vitae. Aliquam placerat nisi quis sagittis dictum. Sed vestibulum est sit amet volutpat suscipit. Aliquam erat volutpat.</p>\r\n\r\n<p>Mauris consequat suscipit suscipit. Pellentesque luctus venenatis lacus, quis faucibus tellus vehicula vel. Proin ante neque, varius vitae neque quis, ornare ultrices ante. Proin at lobortis lacus. Vivamus vestibulum ut ex in convallis. Sed non ultrices magna. In hac habitasse platea dictumst. Phasellus eu varius sem. Morbi aliquam neque nec mauris lobortis, sed volutpat justo laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Cras sed fermentum odio. Proin nec enim efficitur, finibus dolor a, mollis ipsum. Vivamus sollicitudin viverra cursus. Donec vitae interdum urna. <p>Aliquam dolor nunc, cursus eget purus quis, hendrerit tincidunt odio. Fusce elementum velit at est molestie rhoncus ut eget nisl. Sed tincidunt luctus dui. Ut pulvinar turpis in consequat molestie. Sed eu blandit leo. Aliquam erat volutpat. Sed sed dui tincidunt, tincidunt libero eu, aliquam justo. Aliquam justo quam, posuere a sodales nec, vestibulum luctus velit. Vivamus porta dapibus mi, ut vulputate mi finibus vel. Sed in pretium erat. Maecenas in ante luctus, tincidunt neque vitae, posuere dolor. Sed a interdum dolor.</p>', '2015-11-18', 'images/blog.jpg', 1),
(2, 'Вторая статья', 'Описание второй статьи', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam luctus nec leo non cursus. Phasellus non enim aliquet, rhoncus ligula at, faucibus quam. Sed ultricies eros sit amet ante iaculis varius placerat sed dolor. Quisque ac ipsum condimentum, eleifend eros mattis, tempus tellus. Pellentesque euismod nibh arcu, sed scelerisque neque luctus quis. Vivamus non mi purus. Quisque finibus eros vitae placerat rhoncus. Nulla aliquam leo augue, et bibendum velit faucibus vitae. Aliquam placerat nisi quis sagittis dictum. Sed vestibulum est sit amet volutpat suscipit. Aliquam erat volutpat.</p>\r\n\r\n<p>Mauris consequat suscipit suscipit. Pellentesque luctus venenatis lacus, quis faucibus tellus vehicula vel. Proin ante neque, varius vitae neque quis, ornare ultrices ante. Proin at lobortis lacus. Vivamus vestibulum ut ex in convallis. Sed non ultrices magna. In hac habitasse platea dictumst. Phasellus eu varius sem. Morbi aliquam neque nec mauris lobortis, sed volutpat justo laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Cras sed fermentum odio. Proin nec enim efficitur, finibus dolor a, mollis ipsum. Vivamus sollicitudin viverra cursus. Donec vitae interdum urna. <p>Aliquam dolor nunc, cursus eget purus quis, hendrerit tincidunt odio. Fusce elementum velit at est molestie rhoncus ut eget nisl. Sed tincidunt luctus dui. Ut pulvinar turpis in consequat molestie. Sed eu blandit leo. Aliquam erat volutpat. Sed sed dui tincidunt, tincidunt libero eu, aliquam justo. Aliquam justo quam, posuere a sodales nec, vestibulum luctus velit. Vivamus porta dapibus mi, ut vulputate mi finibus vel. Sed in pretium erat. Maecenas in ante luctus, tincidunt neque vitae, posuere dolor. Sed a interdum dolor.</p>', '2015-11-18', 'images/new-google-logo.jpg', 2),
(3, 'AMD выпускает бизнес-ориентированные APU, а HP — ноутбуки на них', 'AMD представила свою совершенно новую серию APU для настольных ПК и ноутбуков бизнес-класса машин под названием AMD PRO. Эти чипы предлагают высокую производительность и стабильность. И одновременно с этим компания HP представила несколько продуктов на этих APU.', '<p>AMD представила свою совершенно новую серию APU для настольных ПК и ноутбуков бизнес-класса машин под названием AMD PRO. Эти чипы предлагают высокую производительность и стабильность. И одновременно с этим компания HP представила несколько продуктов на этих APU.</p>\r\n\r\n<p>Топовым представителем новой линейки AMD является процессор с наименованием PRO A12. Это четырехъядерный чип, совместимый с HSA (гетерогенной системной архитектурой) спецификации 1.0, в связке с 512-ядерным графическим Radeon R7. Имея тактовую частоту 3,4 ГГц  этот чип должен очень хорошо служить множеству деловых целей.</p>\r\n\r\n<p>Самое интересное — это конечно одновременный запуск процессоров и продуктов на нем. Правда аж в Мексике. Но тем не менее — HP  EliteBook 705 это самый тонкий и легкий ноутбук в данной категории в мире. AMD так же отметила, что также самый быстрый, но это мы еще проверим.<p>', '2015-11-18', 'images/hp.jpg', 1),
(4, 'В Украине официально больше нет милиции: сегодня ей не смену пришла Национальная полиция', 'С 7 ноября 2015 года в Украине закончилась многолетняя история милиции. На смену ей пришла Национальная полиция Украины.', '<p>С 7 ноября 2015 года в Украине закончилась многолетняя история милиции. На смену ей пришла Национальная полиция Украины.</p>\r\n\r\n<p>По словам главы МВД Украины Арсена Авакова при реформировании полиции необходимую помощь и поддержку оказали иностранные партнеры из США, Канады, Японии, Европейского Союза. Есть также и поддержка главы государства Петра Порошенко, передает Joinfo.ua.</p>\r\n\r\n<p>Как сообщил министр, до конца года планируется направить еще около 140 млн грн.</p>\r\n<p>"На конец года в Украине будет 6-7 тыс. полицейских, всего работников около 152 тыс., то есть вы должны понимать уровень работы, который надо проходить", -  подчеркнул Аваков.</p>\r\n\r\n<p>Он заявил, что главное в полиции Украины перезагрузка смыслов. Но это вовсе не означает что будут уволены достойные сотрудники, работа котрых пришлась на ранний период.</p>\r\n\r\n<p>"Оцениваются не только квалификация работников, но и моральные качества", - заявила первый заместитель министра Эка Згуладзе.</p>\r\n\r\n<p>Согласно Закона в составе полиции функционируют такие подразделения, как криминальная полиция, патрульная полиция, органы досудебного расследования, полиция охраны, специальная полиция и полиция особого назначения.</p>\r\n\r\n<p>Как сообщал Joinfo.ua. полицейские, которые с 7 ноября заменят милицию, будут использовать удостоверения, печати, логотипы и эмблемы милиции и Министерства внутренних дел Украины аж до 31 декабря 2016 года. Соответствующая норма закреплена в Законе Украины "О Национальной полиции".</p>', '2015-11-18', 'images/police.jpg', 7),
(5, 'Названа самая популярная мобильная ОС среди разработчиков', 'iOS остается приоритетной мобильной операционной системой у разработчиков софта, обходя основного конкурента в лице Android, свидетельствует отчет компании Forrester.', '<p>iOS остается приоритетной мобильной операционной системой у разработчиков софта, обходя основного конкурента в лице Android, свидетельствует отчет компании Forrester.\r\nВ документе изложены результаты опроса порядка 1600 респондентов, занимающихся созданием мобильных приложений в Северной Америке и Европе.</p>\r\n\r\n\r\n<p>Так, более трети (35%) респондентов назвали iPhone наиболее приоритетным устройством для разработки мобильных приложений. Соответствующая доля для Android составила 27%. Примечательно, что, если сравнивать эти данные с прошлогодними цифрами другой исследовательской компании, Flurry, можно сделать вывод, что приоритет среды Android постепенно растет на фоне большей доли Android-девайсов в мире, которая, по сведениям IDC, приближается к 80% на мировом рынке смартфонов. </p>\r\n\r\n<p>Такую твердость позиций iOS исследователи объясняют удобной и выгодной моделью монетизации. Разработка на Android также обычно более трудоемкая ввиду разнообразия экосистем и устройств, множества текущих версий ОС и размеров экрана.</p>\r\n\r\n<p>В сегменте разработок для планшетов, iPad от Apple также оказался предпочтительнее планшетов на Android. 27% респондентов определили iPad как второе по приоритету устройство. <p>Операционку Windows RT от Microsoft опрошенные разработчики приложений вовсе игнорируют.</p>\r\n\r\n<p>Также исследователи рассмотрели технологию строительства приложений. Как оказалось, 41% времени разработчики тратят на написание нативных приложений, 46% - на мобильные веб-приложения или приложения с веб-компонентами (22%) на HTML5.</p>\r\n \r\n<p>Ранее сообщалось, что вредоносные программы чаще атакуют телефоны на Android.</p>', '2015-11-18', 'images/apple.jpg', 5),
(6, 'Автопилот Тесла разрешен к активации по всему миру', 'Кто знает, может быть 23 октября войдет в историю как точная дата начала эпохи широкого использования автономных автомобилей?', '<p>Это происходит прямо на наших глазах — появление на рынке более независимых, более автономных автомобилей является уже не фактом, но скорее, лавиной фактов и событий. Один из самых важных из них, несомненно, является разрешение на использование во всем мире (в настоящий момент —  за пределами Японии) разработанного Tesla автопилота.</p>\r\n<p><img class="img-responsive" src="http://www.chip.ua/wp-content/uploads/2015/10/unnamed1.gif" alt="TEsla"/></p>\r\n <small><center>Автопилот в действии</center></small>\r\n<p>Нет, это пока не полностью автономное движение. Автопилот Тесла это программно — аппаратное решение, которое есть на борту модели Tesla S, и которое теперь пользователь может активировать по всему миру. Но это не полный автопилот, которому можно сказать, куда ехать, и он довезет вас сам. Автопилот тут как в самолете — помогает долго и нудно ехать не напрягаясь и не уставая. Но при сложной обстановке автомобиль попросить вас взять руль в руки. </p>\r\n\r\n ', '2015-11-24', 'images/unnamed59.jpg', 1),
(7, 'Как много потребляет квантовый компьютер?', 'Компания Google в своей лаборатории Quantum AI Lab установила новую модель квантового компьютера D-Wave Systems, которій позиционируется как первый в мире коммерческий  продукт такого рода.', '<p>Компания Google в своей лаборатории Quantum AI Lab установила новую модель квантового компьютера D-Wave Systems, которій позиционируется как первый в мире коммерческий  продукт такого рода. Квантовые вычисления потенциально могут решить множество проблем в развитии вычислительной техники, обеспечив вычислительные мощности на порядки большие, чем мы имеем сегодня. Но будет ли это реализовано на практике — до сих пор загадка.</p>\r\n\r\n<p>На сегодняшний день компьютеры D-Wave стремительно увеличивают количество рабочих кубитов без увеличения потребляемой мощности. Звучит заманчиво, но нужно вспомнить, что работают они при температуре около 15 миникельвинов (-273°  C), которые обеспечивают мощная система охлаждения, которая потребляет на сегодня 25 КВт. Так что микроваты потребления самого процессора — это интересная, но пока не важная цифра. Но если с нынешних 1000 кубитов можно будет перейти к миллионам кубитов, то при сохранении неизменной системы охлаждения уже можно будет говорить об какой то энергоэффективности. Как быстро это произойдет? Закон Мура работает и здесь, так что лет через 10.</p>', '2015-11-24', 'images/unnamed7.jpg', 1);

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
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id_comment` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(30) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `id_article` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id_comment`, `author`, `text`, `date`, `id_article`) VALUES
(1, 'Admin', 'The first comment by Admin', '2015-11-24 00:00:00', 3),
(2, 'Admin', 'The second comment by Admin', '2015-11-24 00:00:00', 3),
(3, 'Vlad', 'Hello world', '2015-11-24 00:00:00', 3),
(4, 'Zhenja', 'How are you?', '2015-11-24 00:00:00', 3),
(5, 'Stive', 'Nice job', '2015-11-24 00:00:00', 3),
(6, 'Garry', 'I have some money', '2015-11-23 00:00:00', 3),
(7, 'drerdf', 'dfdfd', '2015-11-28 00:00:00', 0),
(8, 'dffgf', 'dgfhg', '2015-11-28 00:00:00', 0),
(9, 'dffgf', 'dgfhg', '2015-11-28 00:00:00', 0),
(10, 'dfdf', 'sfdfdg\r\n\r\n', '2015-11-28 00:00:00', 0),
(11, 'dfdf', 'dfdfdf', '2015-11-28 00:00:00', 0),
(12, 'dfdf', 'dfdfdf', '2015-11-28 00:00:00', 0),
(13, 'dfdf', 'dfdfdf', '2015-11-28 00:00:00', 0),
(14, 'dfdf', 'dfdfdf', '2015-11-28 00:00:00', 0),
(15, 'dfdf', 'dfdfdf', '2015-11-28 00:00:00', 0),
(16, 'dfdf', 'dfdfdf', '2015-11-28 00:00:00', 3),
(17, '5454`45', '54654\r\n', '2015-11-28 00:00:00', 3),
(18, 'comment', 'dfkjnfjgnflm;l,lkmoklm\r\n', '2015-11-29 00:00:00', 5),
(19, 'вта', 'вошаалп', '2015-11-29 00:00:00', 7),
(20, 'вта', 'вошаалп', '2015-11-29 00:00:00', 7),
(21, '125', 'ksdnklfgjnfk', '2015-11-29 00:00:00', 7),
(22, '125', 'ksdnklfgjnfk', '2015-11-29 00:00:00', 7),
(23, 'dfdfd', 'dfggf', '2015-11-29 00:00:00', 7),
(24, 'dfdfd', 'dfggf', '2015-11-29 00:00:00', 7),
(25, 'dfgf', 'djfbgjhf', '2015-11-29 00:00:00', 7),
(26, 'dfgf', 'djfbgjhf', '2015-11-29 00:00:00', 7),
(27, 'dfgf', 'djfbgjhf', '2015-11-29 00:00:00', 7),
(28, 'zzzz', 'zzz', '2015-11-29 00:00:00', 7),
(29, 'zzzz', 'zzz', '2015-11-29 00:00:00', 7),
(30, 'zzzz', 'zzz', '2015-11-29 00:00:00', 7),
(31, 'влад', 'хочу теслу', '2015-11-29 00:00:00', 6),
(32, 'влад', 'хочу теслу', '2015-11-29 00:00:00', 6),
(33, 'влад', 'хочу теслу', '2015-11-29 00:00:00', 6),
(34, 'dff', 'dfdf', '2015-11-29 00:00:00', 6),
(35, '77777', '77777', '2015-11-29 00:00:00', 6),
(36, '77777', '77777', '2015-11-29 00:00:00', 6),
(37, '77777', '77777', '2015-11-29 00:00:00', 6),
(38, '77777', '77777', '2015-11-29 00:00:00', 6),
(39, 'dkjfbjdb', 'kdbfjhdbfh', '2015-11-29 00:00:00', 1),
(40, 'dkjfbjdb', 'kdbfjhdbfh', '2015-11-29 00:00:00', 1),
(41, 'oooo', 'ppppppp', '2015-11-29 00:00:00', 3),
(42, 'tttt', 'iijooin', '2015-11-29 00:00:00', 1),
(43, '4454', '45r454', '2015-11-29 12:11:29', 6),
(44, 'sdfdfd', 'dkfjdnjkfn', '2015-11-29 01:11:39', 6),
(45, '[[[[', '[[]][', '2015-11-29 01:11:33', 6);

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
(1, 'О нас', 'Сайт посвящен порно'),
(2, 'Полезно знать', 'Важно пробовать все '),
(3, 'Контакты', 'Тут должны быть разные контакты =)');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
