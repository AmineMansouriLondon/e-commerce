-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2016 at 07:37 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  `last_log_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `last_log_date`) VALUES
(1, 'Amine', '1234', '2016-03-20'),
(2, 'Test', '123', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `position` varchar(120) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img_path` varchar(120) NOT NULL,
  `details` varchar(120) NOT NULL,
  `category` varchar(16) NOT NULL,
  `subcategory` varchar(16) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `position`, `title`, `img_path`, `details`, `category`, `subcategory`, `date_added`) VALUES
(1, 'bottom', 'Xbox Live Sale Now On!', 'products/product_images/xbox one/console.jpg', '', 'Xbox One', 'Consoles', '2016-03-28'),
(2, 'bottom', 'PSN Sale!', 'products/product_images/ps4/console.jpg', '', 'PS4', 'Consoles', '2016-04-04'),
(3, 'bottom', 'Brand New PS Vita!', 'products/product_images/psp/console.jpg', '', 'PSP', 'Consoles', '2016-04-04'),
(4, 'bottom', '3DS XL Bigger and Better!', 'products/product_images/nintendo ds/console.jpg', '', 'Nintendo DS', 'Consoles', '2016-04-04'),
(5, 'bottom', 'Brand New PC Systems!', 'products/product_images/PC/pc.png', '', 'PC', 'Consoles', '2016-04-04'),
(6, 'bottom', 'Brand New Wii U', 'products/product_images/nintendo wii/console.jpg', '', 'PC', 'Consoles', '2016-04-04'),
(7, 'top', 'Xbox Live Sale', 'products/product_images/xbox one/xbox_one_logo_home.png', 'All New Accessories', 'Xbox One', 'Accessories', '2016-04-06'),
(8, 'top', 'PS4 Games', 'products/product_images/ps4/ps4_logo_home.png', 'All The Top PlayStation 4 Games', 'PS4', 'Games', '2016-04-06'),
(9, 'top', 'All the best PC games', 'products/product_images/pc/pc_logo_home.png', 'Only The Top Titles', 'PC', 'Accessories', '2016-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(16) NOT NULL,
  `img_path` varchar(120) NOT NULL,
  `details` text NOT NULL,
  `category` varchar(16) NOT NULL,
  `subcategory` varchar(16) NOT NULL,
  `trailer` varchar(120) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `stock`, `product_name`, `price`, `img_path`, `details`, `category`, `subcategory`, `trailer`, `date_added`) VALUES
(1, 5, 'Rise of the Tomb Raider (Xbox One)', '39.99', 'product_images/xbox one/TR.jpg', 'Featuring epic, high-octane action moments set in the most beautiful hostile environments on earth, Rise of the Tomb Raider delivers a cinematic survival action adventure where you will join Lara Croft on her first tomb raiding expedition as she seeks to discover the secret of immortality.', 'Xbox One', 'Games', 'https://www.youtube.com/embed/Nd6evo2X5fw', '2016-03-28'),
(2, 5, 'Fifa 16 (Xbox One)', '39.99', 'product_images/xbox one/fifa.jpg', 'FIFA 16 innovates across the entire pitch to deliver a balanced, authentic, and exciting football experience that lets you play your way, in your favourite modes. With innovative gameplay features, FIFA 16 brings Confidence in Defending, Control in Midfield, and gives you the tools to create more Moments of Magic than ever before', 'Xbox One', 'Games', 'https://www.youtube.com/embed/AfeDwkIaHNY', '2016-03-28'),
(3, 5, 'GTA V (Xbox One)', '44.99', 'product_images/xbox one/gta.jpg', 'When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody, least of all each other.', 'Xbox One', 'Games', 'https://www.youtube.com/embed/-2WRyKQMUEk', '2016-03-28'),
(4, 5, 'Call of Duty: Black OPS 3 (Xbox One)', '39.99', 'product_images/xbox one/bo3.jpg', 'Call of Duty: Black Ops 3 is the first title for next-gen hardware in the critically acclaimed Black Ops series. Developed by Treyarch, the award-winning creator of the two most-played games in Call of Duty history. Call of Duty: Black Ops 3 deploys players into a dark, twisted future where a new breed of Black Ops soldiers emerges and the lines are blurred between our own humanity and the technology we created to stay ahead, in a world where cutting-edge military robotics define warfare. With three unique game modes: Campaign, Multiplayer, and Zombies, providing fans with the deepest and most ambitious Call of Duty ever.', 'Xbox One', 'Games', 'https://www.youtube.com/embed/vIg5dAeudvQ', '2016-04-05'),
(6, 5, 'Rise of the Tomb Raider (PS4)', '39.99', 'product_images/ps4/TR.jpg', 'Featuring epic, high-octane action moments set in the most beautiful hostile environments on earth, Rise of the Tomb Raider delivers a cinematic survival action adventure where you will join Lara Croft on her first tomb raiding expedition as she seeks to discover the secret of immortality.', 'PS4', 'Games', 'https://www.youtube.com/embed/Nd6evo2X5fw', '2016-03-28'),
(7, 5, 'GTA V (PS4)', '44.99', 'product_images/ps4/gta.jpg', 'When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody, least of all each other.', 'PS4', 'Games', 'https://www.youtube.com/embed/-2WRyKQMUEk', '2016-03-28'),
(8, 5, 'Fifa 16 (PS4)', '39.99', 'product_images/ps4/fifa.jpg', 'FIFA 16 innovates across the entire pitch to deliver a balanced, authentic, and exciting football experience that lets you play your way, in your favourite modes. With innovative gameplay features, FIFA 16 brings Confidence in Defending, Control in Midfield, and gives you the tools to create more Moments of Magic than ever before', 'PS4', 'Games', 'https://www.youtube.com/embed/AfeDwkIaHNY', '2016-03-28'),
(9, 5, 'Call of Duty: Black OPS 3 (PS4)', '39.99', 'product_images/ps4/bo3.jpg', 'Call of Duty: Black Ops 3 is the first title for next-gen hardware in the critically acclaimed Black Ops series. Developed by Treyarch, the award-winning creator of the two most-played games in Call of Duty history. Call of Duty: Black Ops 3 deploys players into a dark, twisted future where a new breed of Black Ops soldiers emerges and the lines are blurred between our own humanity and the technology we created to stay ahead, in a world where cutting-edge military robotics define warfare. With three unique game modes: Campaign, Multiplayer, and Zombies, providing fans with the deepest and most ambitious Call of Duty ever.', 'PS4', 'Games', 'https://www.youtube.com/embed/vIg5dAeudvQ', '2016-04-05'),
(11, 5, 'Xbox One Bundle with Rise Of The Tomb Raider', '249.99', 'product_images/xbox one/xbox one bundle.jpg', 'The Microsoft Xbox One system combines a gaming console with the ability to watch television and movie content as well as listen to music or chat with others via Skype. The Xbox One will also provide integrated support for Microsoft''s Kinect, which enables users to control games and entertainment content with physical motion or voice commands instead of with a joystick or similar input device, and Xbox LIVE, which makes it possible for users to play their Xbox One games online with other users.', 'Xbox One', 'Consoles', 'https://www.youtube.com/embed/a76EGaEtLfA', '2016-04-06'),
(12, 5, 'Xbox One Bundle with Official Controller', '219.99', 'product_images/xbox one/console.jpg', 'The one where you can pause your game and instantly resume where you left off. The only one where you can stream your Xbox One games to a Windows 10 PC or tablet in your home. Get new features and enhancements all the time, with more than one hundred added since launch. The one with the industry leading controller and revolutionary Kinect technology.', 'Xbox One', 'Consoles', 'https://www.youtube.com/embed/LIYeHCFttMc', '2016-04-06'),
(13, 5, 'Xbox One Headset', '39.99', 'product_images/xbox one/headset.png', 'Immerse yourself in rich stereo sound with the Xbox One Stereo Headset. Easily adjust audio levels without taking your hands off the controller. You can even control the balance of game sounds and chat audio to focus on what you want to hear.', 'Xbox One', 'Accessories', 'https://www.youtube.com/embed/hbZPySWVuu0', '2016-04-06'),
(14, 5, 'Xbox One  Official Wireless Controller', '35.99', 'product_images/xbox one/controller.png', 'Experience the action like never before with the Xbox One Wireless Controller. New Impulse Triggers deliver fingertip vibration feedback, so you can feel every jolt and crash in high definition. Redesigned thumbsticks and an all new D-pad provide greater precision. And the entire controller fits more comfortably in your hands. With over 40 innovations, it''s simply the best controller Xbox has ever made.', 'Xbox One', 'Accessories', 'https://www.youtube.com/embed/KDvNEPPDOnw', '2016-04-06'),
(15, 5, 'PS4 Headset', '24.99', 'product_images/ps4/headset.jpg', 'Sennheiser is a well-known brand for audiophiles, and PlayStation gamers should get to know them, too. The G4ME ZERO boasts a comfortable design that boosts the headset’s audio clarity. The extra large ear cups are padded with memory foam for a comfortable fit, and seal around the ear to block outside noise, and prevent your gaming noise from disturbing others. The high quality of design extends to the noise cancelling mic, which automatically mutes itself when raised. When not in use, the entire headset can be collapsed down for easy storage.', 'PS4', 'Accessories', 'https://www.youtube.com/embed/WT6Rprj6WRA', '2016-04-06'),
(16, 5, 'PS4 Official Wireless Controller', '39.99', 'product_images/ps4/controller.jpg', 'The DualShock®4 Wireless Controller for PlayStation 4 defines the next generation of play, combining revolutionary new features with intuitive, precision controls. Improved analog sticks and trigger buttons allow for unparalleled accuracy with every move while innovative new technologies such as the multi-touch, clickable touch pad, integrated light bar, and internal speaker offer exciting new ways to experience and interact with your games. And with the addition of the Share button, celebrate and upload your greatest gaming moments on PlayStation 4 with the touch of a button. ', 'PS4', 'Accessories', 'https://www.youtube.com/embed/Ktp9iRUYaQ4', '2016-04-06'),
(17, 5, 'PS4 Console with Official Controller', '219.99', 'product_images/ps4/console.jpg', 'PlayStation 4 has revolutionised gaming. From the hottest games featuring unforgettable experiences to letting a friend join in your play session even if they don''t own the game, life is simply better with PS4.', 'PS4', 'Consoles', 'https://www.youtube.com/embed/Jw8HCFZkBds', '2016-04-06'),
(18, 5, 'PS4 Bundle with The Last Of Us', '234.99', 'product_images/ps4/ps4 bundle.jpg', 'PlayStation 4 is The Best Place to Play, with the fastest graphics processor and system memory of any gaming system, the next age of PlayStation gaming is going to be better than ever.', 'PS4', 'Consoles', 'https://www.youtube.com/embed/x7QhUL8NUK4', '2016-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(16) NOT NULL,
  `img_path` varchar(120) NOT NULL,
  `details` text NOT NULL,
  `category` varchar(16) NOT NULL,
  `subcategory` varchar(16) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `product_name`, `price`, `img_path`, `details`, `category`, `subcategory`, `date_added`) VALUES
(1, 'Xbox One Bundle', '249.99', 'product_images/xbox one/xbox one bundle.jpg', 'Xbox One Console with Tomb Raider!', 'Xbox One', 'Consoles', '2016-03-28'),
(2, 'PS4 Bundle', '249.99', 'product_images/ps4/ps4 bundle.jpg', 'PlayStation 4 with The Last Of Us!', 'PS4', 'Consoles', '2016-04-04'),
(3, 'PS Vita Bundle', '149.99', 'product_images/psp/psp bundle.jpg', 'PS VITA Console with COD: Black Ops!', 'PSP', 'Consoles', '2016-04-04'),
(4, '3DS XL Bundle ', '149.99', 'product_images/nintendo ds/ds bundle.jpg', 'Nintendo 3DS XL with Animal Crossing!', 'Nintendo DS', 'Consoles', '2016-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `lname` varchar(120) NOT NULL,
  `uname` varchar(120) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(120) NOT NULL,
  `pass` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `uname`, `address`, `email`, `pass`) VALUES
(7, 'Johnny', 'Smith', 'Test', '36 Arandora Crescent RM6 4SS', 'test@email.com', '202cb962ac59075b964b07152d234b70'),
(24, 'Amine', 'Mansouri', 'Amine', '36 Arandora Crescent RM6 4SS', 'mynameisamine@hotmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_name` (`title`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_name` (`product_name`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_name` (`product_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
