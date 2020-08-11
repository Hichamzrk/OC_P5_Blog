-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 11, 2020 at 05:14 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_comment`
--

CREATE TABLE `b_comment` (
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_pseudo` varchar(255) NOT NULL,
  `c_added_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `c_content` text NOT NULL,
  `c_validation` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `b_comment`
--

INSERT INTO `b_comment` (`c_id`, `p_id`, `c_pseudo`, `c_added_datetime`, `c_content`, `c_validation`) VALUES
(121, 114, 'Julien ', '2020-08-11 19:11:16', 'Super article', 0),
(122, 114, 'MarcZ', '2020-08-11 19:11:31', 'J&#039;ai ador&eacute; !\r\n', 1),
(123, 114, 'Lucie', '2020-08-11 19:11:43', 'J&#039;adore la nature', 1),
(124, 115, 'Juliette', '2020-08-11 19:13:15', 'J&#039;aime beaucoup l&#039;argent ', 0),
(125, 115, 'Eric', '2020-08-11 19:13:26', 'L&#039;argent ne fait pas le bonheur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `b_post`
--

CREATE TABLE `b_post` (
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_author` varchar(255) NOT NULL DEFAULT 'Hicham Zrk',
  `p_title` varchar(255) NOT NULL,
  `p_chapo` text NOT NULL,
  `p_content` longtext NOT NULL,
  `p_added_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `p_update_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `b_post`
--

INSERT INTO `b_post` (`p_id`, `u_id`, `p_author`, `p_title`, `p_chapo`, `p_content`, `p_added_datetime`, `p_update_datetime`) VALUES
(114, 3, 'Hicham zrk', 'Les dauphins ', 'Les esp&egrave;ces de dauphin  ', '<p><strong>Lorem ipsum dolor sit amet,</strong> consectetur adipiscing elit. Pellentesque pharetra diam ac sapien laoreet, tempus sagittis purus bibendum. Phasellus ipsum odio, imperdiet non molestie non, tristique vitae nulla. Susp<strong>endisse</strong> ac condimentum leo. Donec condimentum vitae neque a vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel massa metus. Integer ullamcorper leo in urna feugiat, dapibus pharetra diam rutrum.</p>\r\n<p>Morbi volutpat justo at purus po<strong>suere aliquet scelerisque euismod </strong>turpis. Nunc dignissim nisl eu consequat elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec congue vulputate ante in dictum. Nulla eleifend vitae quam sit amet tristique. Pellentesque lacinia ornare justo eu congue. Pellentesque habit<span style=\"color: #e03e2d;\"><strong>ant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras efficitur ipsum quis convallis euismod. Mauris venenatis nec sapien vitae suscipit. Vivamus et ipsum quam. Praesent commodo elementum tincidunt. Suspendisse dapibus mollis nunc, a placerat nunc porta in. Viva</strong></span>mus blandit urna nec dui aliquet accumsan eget ac ligula. Suspendisse pulvinar consectetur metus nec viverra.</p>\r\n<p>Proin vel efficitur risus. Sed ligula tortor, iaculis eu magna in, imperdiet bibendum quam. Duis vestibulum iaculis neque, facilisis lacinia enim tempor sit amet. In suscipit enim a nisi elementum commodo. Donec ac pretium lorem. Ut aliquam sed arcu maximus malesuada. Pellentesque posuere, arcu id ultrices convallis, mi elit mollis dui, ac porttitor quam diam vel neque. Quisque porta nec felis non iaculis. Curabitur porttitor orci massa, nec tincidunt leo sollicitudin sed. Orci varius natoque penatibus et magnis dis p<strong>arturient montes, nascetur </strong>ridiculus mus. Morbi lectus neque, tristique eget ultrices at, dignissim vel mi. Vestibulum facilisis neque laoreet dui sollicitudin dignissim.</p>\r\n<p>Donec scelerisque varius ipsum, quis laoreet enim scelerisque ac. Phasellus sit amet pulvinar mi. Cras ut nulla neque. Nullam vel elementum ex, at pretium nisl. Curabitur massa risus, scelerisque eu lacus in, lobortis interdum turpis. Mauris porttitor odio vel lorem pellentesque, nec semper sapien tempus. Nullam sagittis nisi vitae nisl rutrum luctus. Donec nisl magna, luctus et lobortis eget, efficitur vitae ligula. Donec congue lorem condimentum, tempor sem dignissim, dictum velit. Fusce vitae a<strong>ugue pulvinar, euismod aug</strong>ue id, porta tortor.</p>\r\n<p>Etiam elit dolor, pulvinar sed pulvinar non, laoreet non ante. Ut eget neque tempus tellus placerat aliquet. Quisque at laoreet massa, in finibus diam. Integer et purus orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc bibendum lectus rutrum cursus accumsan. Etiam purus nunc, consectetur a varius eu, interdum quis sem. Suspendisse at rhoncus velit, vitae malesuada libero. Nam risus massa, elementum non fermentum vitae, faucibus eu ex.</p>', '2020-08-11 19:10:58', NULL),
(115, 3, 'Hicham zrk', 'L&#039;argent', 'Qui sont les personnes qui aiment le plus l&#039;argent ?', '<p style=\"font-family: eurostile, sans-serif; font-size: 1.2em;\"><strong>Lorem ipsum dolor sit amet,</strong>&nbsp;consectetur adipiscing elit. Pellentesque pharetra diam ac sapien laoreet, tempus sagittis purus bibendum. Phasellus ipsum odio, imperdiet non molestie non, tristique vitae nulla. Susp<strong>endisse</strong>&nbsp;ac condimentum leo. Donec condimentum vitae neque a vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel massa metus. Integer ullamcorper leo in urna feugiat, dapibus pharetra diam rutrum.</p>\r\n<p style=\"font-family: eurostile, sans-serif; font-size: 1.2em;\">Morbi volutpat justo at purus po<strong>suere aliquet scelerisque euismod&nbsp;</strong>turpis. Nunc dignissim nisl eu consequat elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec congue vulputate ante in dictum. Nulla eleifend vitae quam sit amet tristique. Pellentesque lacinia ornare justo eu congue. Pellentesque habit<span style=\"color: #e03e2d;\"><strong>ant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras efficitur ipsum quis convallis euismod. Mauris venenatis nec sapien vitae suscipit. Vivamus et ipsum quam. Praesent commodo elementum tincidunt. Suspendisse dapibus mollis nunc, a placerat nunc porta in. Viva</strong></span>mus blandit urna nec dui aliquet accumsan eget ac ligula. Suspendisse pulvinar consectetur metus nec viverra.</p>\r\n<p style=\"font-family: eurostile, sans-serif; font-size: 1.2em;\">Proin vel efficitur risus. Sed ligula tortor, iaculis eu magna in, imperdiet bibendum quam. Duis vestibulum iaculis neque, facilisis lacinia enim tempor sit amet. In suscipit enim a nisi elementum commodo. Donec ac pretium lorem. Ut aliquam sed arcu maximus malesuada. Pellentesque posuere, arcu id ultrices convallis, mi elit mollis dui, ac porttitor quam diam vel neque. Quisque porta nec felis non iaculis. Curabitur porttitor orci massa, nec tincidunt leo sollicitudin sed. Orci varius natoque penatibus et magnis dis p<strong>arturient montes, nascetur&nbsp;</strong>ridiculus mus. Morbi lectus neque, tristique eget ultrices at, dignissim vel mi. Vestibulum facilisis neque laoreet dui sollicitudin dignissim.</p>\r\n<p style=\"font-family: eurostile, sans-serif; font-size: 1.2em;\">Donec scelerisque varius ipsum, quis laoreet enim scelerisque ac. Phasellus sit amet pulvinar mi. Cras ut nulla neque. Nullam vel elementum ex, at pretium nisl. Curabitur massa risus, scelerisque eu lacus in, lobortis interdum turpis. Mauris porttitor odio vel lorem pellentesque, nec semper sapien tempus. Nullam sagittis nisi vitae nisl rutrum luctus. Donec nisl magna, luctus et lobortis eget, efficitur vitae ligula. Donec congue lorem condimentum, tempor sem dignissim, dictum velit. Fusce vitae a<strong>ugue pulvinar, euismod aug</strong>ue id, porta tortor.</p>\r\n<p style=\"font-family: eurostile, sans-serif; font-size: 1.2em;\">Etiam elit dolor, pulvinar sed pulvinar non, laoreet non ante. Ut eget neque tempus tellus placerat aliquet. Quisque at laoreet massa, in finibus diam. Integer et purus orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc bibendum lectus rutrum cursus accumsan. Etiam purus nunc, consectetur a varius eu, interdum quis sem. Suspendisse at rhoncus velit, vitae malesuada libero. Nam risus massa, elementum non fermentum vitae, faucibus eu ex.</p>', '2020-08-11 19:12:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `b_user`
--

CREATE TABLE `b_user` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `b_user`
--

INSERT INTO `b_user` (`u_id`, `u_email`, `u_password`) VALUES
(3, 'exemple@test.com', '$2y$10$MdjLq5K8BgEGtObixcG57uaF6PAZ5uzrsxQOcRpTCgbEU6kahRZv6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_comment`
--
ALTER TABLE `b_comment`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `b_post`
--
ALTER TABLE `b_post`
  ADD PRIMARY KEY (`p_id`) USING BTREE,
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `b_user`
--
ALTER TABLE `b_user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_comment`
--
ALTER TABLE `b_comment`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `b_post`
--
ALTER TABLE `b_post`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `b_user`
--
ALTER TABLE `b_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `b_comment`
--
ALTER TABLE `b_comment`
  ADD CONSTRAINT `b_comment_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `b_post` (`p_id`) ON DELETE CASCADE;

--
-- Constraints for table `b_post`
--
ALTER TABLE `b_post`
  ADD CONSTRAINT `b_post_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `b_user` (`u_id`) ON DELETE CASCADE;