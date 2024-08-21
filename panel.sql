-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 05:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `about_slug` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `about_content` text COLLATE utf8_turkish_ci NOT NULL,
  `about_order` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_title`, `about_slug`, `about_content`, `about_order`) VALUES
(2, 'Vizyon', 'vizyono', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam blandit tincidunt purus, ut facilisis lectus viverra ut. Morbi sed quam turpis. Nunc fermentum mollis massa quis bibendum. Sed in viverra risus. Cras a enim eget dui porta tincidunt sit amet vel augue. Phasellus volutpat, turpis vel hendrerit consequat, sapien metus venenatis ante, a vulputate risus nulla non felis. Nulla quis dui sed nunc tristique consequat.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam vitae libero at sem aliquam condimentum. Duis finibus vestibulum metus quis consequat. Nam commodo, purus sed convallis bibendum, dui nisl fermentum turpis, id iaculis dolor ante sit amet ligula. Aliquam vitae metus sollicitudin, luctus sapien non, ornare turpis. Morbi convallis egestas purus, in placerat purus finibus non. Suspendisse sit amet consequat nulla, ac tincidunt quam. Ut gravida nunc ac orci cursus placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam fermentum fringilla convallis. Vestibulum elementum justo quis lorem vulputate, in pulvinar massa gravida.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Maecenas a tincidunt erat. Nunc lacus purus, placerat sit amet tortor eget, sollicitudin molestie risus. In nec cursus urna. Vestibulum sollicitudin vestibulum urna. Donec finibus rhoncus dolor suscipit posuere. Donec neque dolor, ultrices sollicitudin ipsum vel, scelerisque iaculis magna. Nam tempor sem risus, nec posuere ligula ultrices quis. Praesent aliquet et neque sit amet pulvinar. Maecenas sit amet arcu eleifend, vestibulum arcu ac, dapibus nisi. Mauris auctor ligula nulla, feugiat egestas libero luctus quis. Pellentesque vitae massa nulla. Vivamus eget consequat velit. Praesent vel auctor nisi, eget fermentum urna. Donec tincidunt, mauris a lobortis sagittis, nibh ligula dapibus sapien, sed vestibulum arcu elit ac orci. Praesent a lacus ut tellus gravida volutpat sit amet vitae nisi. Phasellus blandit tincidunt eros non ultricies.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Vivamus sed orci et quam ultricies pretium vitae quis leo. Fusce aliquam ac tortor in luctus. Sed erat nisl, blandit quis eros et, interdum mattis lorem. Vestibulum vel vehicula orci. Vivamus eu turpis ex. Mauris est turpis, aliquam ac congue in, iaculis ac neque. Donec in nunc feugiat, iaculis lacus a, tincidunt risus.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Vestibulum nec sollicitudin odio. Curabitur pharetra efficitur nisl. Nullam in scelerisque orci, eget pharetra eros. Aenean sit amet velit laoreet neque dignissim faucibus sed at enim. Duis sagittis viverra vulputate. Proin dignissim et ante hendrerit lacinia. Proin eu eros vulputate, euismod neque sit amet, viverra libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;</p>', 1),
(3, 'Misyon', 'misyon', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam blandit tincidunt purus, ut facilisis lectus viverra ut. Morbi sed quam turpis. Nunc fermentum mollis massa quis bibendum. Sed in viverra risus. Cras a enim eget dui porta tincidunt sit amet vel augue. Phasellus volutpat, turpis vel hendrerit consequat, sapien metus venenatis ante, a vulputate risus nulla non felis. Nulla quis dui sed nunc tristique consequat.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam vitae libero at sem aliquam condimentum. Duis finibus vestibulum metus quis consequat. Nam commodo, purus sed convallis bibendum, dui nisl fermentum turpis, id iaculis dolor ante sit amet ligula. Aliquam vitae metus sollicitudin, luctus sapien non, ornare turpis. Morbi convallis egestas purus, in placerat purus finibus non. Suspendisse sit amet consequat nulla, ac tincidunt quam. Ut gravida nunc ac orci cursus placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam fermentum fringilla convallis. Vestibulum elementum justo quis lorem vulputate, in pulvinar massa gravida.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Maecenas a tincidunt erat. Nunc lacus purus, placerat sit amet tortor eget, sollicitudin molestie risus. In nec cursus urna. Vestibulum sollicitudin vestibulum urna. Donec finibus rhoncus dolor suscipit posuere. Donec neque dolor, ultrices sollicitudin ipsum vel, scelerisque iaculis magna. Nam tempor sem risus, nec posuere ligula ultrices quis. Praesent aliquet et neque sit amet pulvinar. Maecenas sit amet arcu eleifend, vestibulum arcu ac, dapibus nisi. Mauris auctor ligula nulla, feugiat egestas libero luctus quis. Pellentesque vitae massa nulla. Vivamus eget consequat velit. Praesent vel auctor nisi, eget fermentum urna. Donec tincidunt, mauris a lobortis sagittis, nibh ligula dapibus sapien, sed vestibulum arcu elit ac orci. Praesent a lacus ut tellus gravida volutpat sit amet vitae nisi. Phasellus blandit tincidunt eros non ultricies.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Vivamus sed orci et quam ultricies pretium vitae quis leo. Fusce aliquam ac tortor in luctus. Sed erat nisl, blandit quis eros et, interdum mattis lorem. Vestibulum vel vehicula orci. Vivamus eu turpis ex. Mauris est turpis, aliquam ac congue in, iaculis ac neque. Donec in nunc feugiat, iaculis lacus a, tincidunt risus.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\">Vestibulum nec sollicitudin odio. Curabitur pharetra efficitur nisl. Nullam in scelerisque orci, eget pharetra eros. Aenean sit amet velit laoreet neque dignissim faucibus sed at enim. Duis sagittis viverra vulputate. Proin dignissim et ante hendrerit lacinia. Proin eu eros vulputate, euismod neque sit amet, viverra libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;</p>', 2),
(4, 'Hakkımızda', 'hakkimizda', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis lectus pulvinar sem pellentesque, eget malesuada orci posuere. Etiam in ultricies urna, at aliquam tellus. Pellentesque nisl nulla, faucibus sed euismod fermentum, lacinia a tortor. Aenean ullamcorper ullamcorper felis id eleifend. Mauris ut magna tincidunt, consequat neque in, vehicula enim. Curabitur at tellus sed nunc auctor scelerisque. Mauris vel mauris erat. Sed volutpat, velit nec vestibulum tempor, lacus mi viverra turpis, sit amet rutrum elit sem eu metus. Pellentesque posuere turpis sit amet dignissim vehicula. Curabitur imperdiet sem vel accumsan lacinia. Vivamus ullamcorper, quam eget eleifend efficitur, urna nunc commodo sapien, sit amet fringilla nisi elit vitae quam. Duis nec pharetra libero, malesuada hendrerit odio. Nullam quis risus vel metus tempus iaculis. Suspendisse nulla erat, iaculis at congue sit amet, semper eget arcu.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum pulvinar posuere metus, nec rutrum diam sollicitudin ut. Mauris tellus diam, lobortis et molestie quis, eleifend vitae libero. Maecenas vel ligula eu dui imperdiet consequat. Ut aliquet dui eu tristique posuere. Vestibulum a tortor leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu tincidunt ligula. Aenean porttitor nisi enim, sit amet ornare metus accumsan in. Sed aliquam efficitur nisi, eu malesuada leo dictum non. Maecenas posuere nunc pulvinar, volutpat velit in, fringilla purus. Praesent mollis ipsum non tristique scelerisque. Vivamus tempus neque eu lectus faucibus, id blandit lorem pharetra. Maecenas sed auctor enim. Donec tincidunt odio et auctor dapibus.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Ut posuere justo massa, vel tempus ligula placerat et. Praesent nisl arcu, aliquet vitae dui vitae, volutpat sodales ex. Vestibulum non urna accumsan, fermentum neque ut, ullamcorper tellus. Proin euismod justo sed erat malesuada, sit amet viverra leo dignissim. Mauris fermentum pulvinar turpis, eu ultricies nibh aliquam quis. Cras varius ante vel nibh accumsan, eget eleifend felis iaculis. Sed aliquam leo eu elementum condimentum. Donec sodales aliquet orci, eu mattis quam facilisis sit amet. Fusce eu dictum tellus, nec tempor nulla. Fusce at euismod tortor. Sed eget ipsum urna. Praesent condimentum quis elit a elementum. Aliquam convallis eget turpis et congue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Suspendisse nec hendrerit augue. Morbi lobortis nec justo id aliquam. Etiam at iaculis nisl. Fusce sagittis commodo nunc vel efficitur. Sed auctor ornare tempor. Sed eu urna sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi a nulla tortor. Suspendisse venenatis ante sit amet placerat ullamcorper. Ut cursus augue ante, sed viverra magna egestas quis. Proin fermentum mattis neque, in maximus tortor condimentum sit amet.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Phasellus vel vehicula turpis. Mauris hendrerit et neque sed elementum. Donec tempus nibh risus, sit amet consequat sem pellentesque quis. Quisque venenatis dignissim orci, ut venenatis risus facilisis a. Vivamus ullamcorper tincidunt nulla sed volutpat. Morbi nec est convallis, luctus metus quis, porta lorem. Quisque pharetra ligula viverra dapibus varius. Cras finibus tellus placerat libero accumsan mattis. Praesent sit amet venenatis lectus. Pellentesque vitae mattis tortor, in dictum justo. Morbi rhoncus, lacus nec facilisis tincidunt, lorem lorem dapibus lectus, at hendrerit justo erat vitae lacus.</p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_file` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `admin_username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_pass` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_status` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `admin_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_file`, `admin_username`, `admin_pass`, `admin_status`, `admin_order`) VALUES
(1, 'Test', '62703c65a025d.jpg', 'admin', '202cb962ac59075b964b07152d234b70', '1', 0),
(22, 'Test2', '6271a0cd2b2ee.png', 'admin', '202cb962ac59075b964b07152d234b70', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `blog_slug` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `blog_file` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `blog_content` text COLLATE utf8_turkish_ci NOT NULL,
  `blog_time` datetime NOT NULL DEFAULT current_timestamp(),
  `blog_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_slug`, `blog_file`, `blog_content`, `blog_time`, `blog_order`) VALUES
(2, 'Blog1', 'blogbir', '62703fd902a3a.png', '<p>Lorem lorem lorelm lorem lorem lorem.&nbsp;<span style=\"font-size: 1rem;\">Lorem lorem lorelm lorem lorem lorem.&nbsp;</span><span style=\"font-size: 1rem;\">Lorem lorem lorelm lorem lorem lorem.&nbsp;</span><span style=\"font-size: 1rem;\">Lorem lorem lorelm lorem lorem lorem.&nbsp;</span><span style=\"font-size: 1rem;\">Lorem lorem lorelm lorem lorem lorem.&nbsp;</span><span style=\"font-size: 1rem;\">Lorem lorem lorelm lorem lorem lorem.</span></p>', '2022-05-02 23:32:25', 0),
(4, 'Blog 2', 'blogiki', '62704328756a6.png', '<p>sgdfgdfgdbdb</p>', '2022-05-02 23:46:32', 1),
(5, 'örnek', 'ornek', '6272f6c68bc0d.png', '<p>fdg</p>', '2022-05-05 00:57:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `settings_description` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `settings_key` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `settings_value` text COLLATE utf8_turkish_ci NOT NULL,
  `settings_type` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `settings_must` int(3) NOT NULL,
  `settings_delete` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `settings_status` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `settings_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `settings_description`, `settings_key`, `settings_value`, `settings_type`, `settings_must`, `settings_delete`, `settings_status`, `settings_order`) VALUES
(1, 'Site başlığı', 'title', 'Örnek admin panel OOP ile geliştirilmiştir', 'text', 0, '0', '1', 6),
(2, 'Site açıklama', 'description', 'Örnek admin panel OOP ile geliştirilmiştir açıklama alanı', 'textarea', 0, '0', '1', 5),
(3, 'Site logo', 'logo', '62718fd16bb73.png', 'file', 0, '0', '1', 7),
(5, 'Anahtar Kelimeler', 'keywords', 'alışveris vs', 'text', 0, '0', '1', 0),
(6, 'Telefon numarası', 'phone', '555', 'text', 0, '0', '1', 7),
(7, 'Mail adresi', 'email', 'test@gmail.com', 'text', 0, '0', '1', 4),
(10, 'Açık adres', 'address', 'istanbul.', 'editor', 0, '0', '1', 1),
(11, 'Facebook hesabı', 'facebook', 'www.facebook.com/test', 'text', 0, '0', '1', 3),
(13, 'Çalışma saatleri', 'wordking hours', 'hafta içi 9-17', 'text', 0, '0', '1', 8),
(17, 'Site sahibi', 'author', 'admin site sahibi', 'text', 0, '0', '1', 8),
(18, 'Copyright', 'copyright', 'Tüm Hakları Saklıdır 2022', 'text', 0, '0', '1', 2),
(19, 'Slogan Link', 'slogan_url', 'htts://test.com', 'textarea', 0, '0', '1', 4),
(20, 'Slogan ', 'slogan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'textarea', 0, '0', '1', 4),
(21, 'Site icon', 'icon', '62718e292ef86.png', 'file', 0, '0', '1', 9),
(22, 'Site logo', 'logotext', 'test', 'text', 0, '0', '1', 7),
(23, 'Ana Sayfa Reklam Alanı', 'home1', '<h2 style=\"font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; color: rgb(33, 37, 41);\">Modern Business Features</h2><p style=\"font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">The Modern Business template by Start Bootstrap includes:</p><ul style=\"font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><li><span style=\"font-weight: bolder;\">Bootstrap v4</span></li><li>jQuery</li><li>Font Awesome</li><li>Working contact form with validation</li><li>Unstyled page elements for easy customization</li></ul><p style=\"font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>', 'editor', 0, '0', '1', 1),
(24, 'Home reklam alanı görsel', 'gorsel', '627192809a868.png', 'file', 0, '0', '1', 7);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `slider_file` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `slider_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_file`, `slider_order`) VALUES
(3, 'Slider 1', '62703c708d40a.png', 0),
(4, 'slider 2', '62704e8e2fdee.png', 1),
(5, 'slider 3', '6271981222dea.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_name` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_file` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `user_mail` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_pass` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_status` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  `user_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_name`, `user_file`, `user_mail`, `user_pass`, `user_status`, `user_order`) VALUES
(1, 'isim', 'soyisim', '6273b1b9201bd.png', 'test@mail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1', 1),
(9, 'ornekisim', 'orneksoyisim', '', 'muhammet@gmail.com', '202cb962ac59075b964b07152d234b70', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
