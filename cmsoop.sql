-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 08 mei 2014 om 14:29
-- Serverversie: 5.5.34
-- PHP-versie: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `cmsoop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Gegevens worden uitgevoerd voor tabel `message`
--

INSERT INTO `message` (`id`, `title`, `content`) VALUES
(35, 'Allerlaatste paasje testJE', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Allerlaatste paasbericht......</p>\r\n<p><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/t1.0-1/c63.17.216.216/s160x160/23991_101467239893090_2750714_n.jpg" alt="sjoerd" width="130" height="130" /></p>\r\n</body>\r\n</html>'),
(36, 'Extra berichtje...', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style="color: #ff0000; background-color: #ffff99;">Hier komt </span></p>\r\n<p><span style="color: #ff0000; background-color: #ffff99;">een extra berichtje.</span></p>\r\n</body>\r\n</html>'),
(41, 'Test4', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style="font-size: 18pt; color: #ff0000;">Test4</span></p>\r\n</body>\r\n</html>'),
(43, 'Meer tekst', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><span style="color: #ff0000;">Lorem ipsum</span> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n</body>\r\n</html>');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Gegevens worden uitgevoerd voor tabel `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `admin`) VALUES
(9, 'egbert', 'Hulsman', 'egbert@hulsman.nl', 'geheim', 2),
(10, 'peter', 'van der Post', 'peter@post.nl', 'geheim', 1),
(11, 'jessica', 'Rijnboutt', 'jessica@rijnboutt.nl', 'geheim', 1),
(12, 'sjoerd', 'de vos', 'sjvos@xs4all.nl', 'geheim', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
