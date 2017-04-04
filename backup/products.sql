-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2015 at 09:04 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paypal`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `priceH` decimal(10,2) NOT NULL,
  `prod_cate` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=128 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`, `priceH`, `prod_cate`) VALUES
(1, 'PD0101', 'Tandoori Murgh', 'Chicken marinated in youghurt and spices and slow cooked in a hot cla oven give cripsy texture.', 'cf.jpg', '277.00', '147.00', 1),
(2, 'PD0102', 'Murgh Afgani', 'Chicken marinated in yoghurt, cream and spices and slow cooked in a hot clay oven to get give juicyand soft texture.', 'cf.jpg', '257.00', '147.00', 1),
(3, 'PD0103', 'Mutton seekh Kebab', 'A mixture of minced meat, garlic and spices thinly wrapped around a skewer and grilled in a tandoor.', 'cf.jpg', '187.00', '0.00', 1),
(4, 'PD0104', 'Chicken seekh Kebab', 'A mixture of minced chicken, garlic and spices thinly wrapped around a skewer and grilled in a tandoor.', 'cf.jpg', '177.00', '0.00', 1),
(5, 'PD0105', 'Stuff Tangari Kebab(3pcs)', 'Stuff Chicken thighs marinated in yoghurt and spices and cooked in a tandoor.', 'cf.jpg', '197.00', '0.00', 1),
(6, 'PD0106', 'Chicken Reshmi Kebab', 'Boneless chicken kebab, marinated with coriander, lemon juice, gingerand spices.', 'cf.jpg', '197.00', '0.00', 1),
(7, 'PD0107', 'Chicken Tikka ', 'Soft Boneless chicken bits marinated in spicy, creamy and tangy marinade and till smoky and tender.', 'cf.jpg', '177.00', '0.00', 1),
(8, 'PD0108', 'Chicken Achari Tikka', 'A mouth-watering chicken recipe with an authentic Indian pickle flavour.', 'cf.jpg', '197.00', '0.00', 1),
(9, 'PD0109', 'Chicken Malai Tikka', 'Pieces of chicken are marinated in thick yoghurt,crea/malai, cheese, safron herbs and spices frilled to perfection.', 'cf.jpg', '197.00', '0.00', 1),
(10, 'PD0110', 'Tandoori Platter(Non-Veg)', 'Assortment of Kebabs and Tikkas', 'cf.jpg', '287.00', '0.00', 1),
(11, 'PD0111', 'Vegetable Seekh Kebab', 'Vegetable Kebab blended with spices and roasted in clay oven.', 'cf.jpg', '127.00', '0.00', 1),
(12, 'PD0112', 'Paneer Tikka', 'Marinated Paneer cubes with spices and roasted in clay oven.', 'cf.jpg', '147.00', '0.00', 1),
(13, 'PD0113', 'Paneer Malai Tikka ', 'Soft Paneer cubes marinated with cream and spices.', 'cf.jpg', '157.00', '0.00', 1),
(14, 'PD0114', 'Achari Paneer Tikka', 'Paneer cubes flavoured with achari masala and spices cooked for perfection in clay oven.', 'cf.jpg', '157.00', '0.00', 1),
(15, 'PD0115', 'Paneer Harimirch Tikka', 'Spicy paneer tikka for the extra effect.', 'cf.jpg', '147.00', '0.00', 1),
(16, 'PD0116', 'Achari Mushroom Tikka', 'Achari flavoured mushroom cooked in clay oven.', 'cf.jpg', '137.00', '0.00', 1),
(17, 'PD0117', 'Tandoori Gobi', 'Marinated cauliflowers cooked to perfection in tandoor', 'cf.jpg', '107.00', '0.00', 1),
(18, 'PD0118', 'Tandoori Platter(Veg)', 'Assortment of veg Tikkas and Kebabs.', 'cf.jpg', '217.00', '0.00', 1),
(19, 'PD0201', 'Chicken Tikka Wrap', 'Served with mint chutney and Lachha onions.', 'cf.jpg', '87.00', '0.00', 2),
(20, 'PD0202', 'Achari Tikka Wrap', 'Served with mint chutney and Lachha onions.', 'cf.jpg', '97.00', '0.00', 2),
(21, 'PD0203', 'Chicken Seekh Kebab Wrap', 'Served with mint chutney and Lachha onions.', 'cf.jpg', '87.00', '0.00', 2),
(22, 'PD0204', 'Mutton Seekh Kebab Wrap', 'Served with mint chutney and Lachha onions.', 'cf.jpg', '97.00', '0.00', 2),
(23, 'PD0205', 'Paneer Tikka Wrap', 'Served with mint chutney and Lachha onions.', 'cf.jpg', '77.00', '0.00', 2),
(24, 'PD0206', 'Mushroom Tikka Wrap', 'Served with mint chutney and Lachha onions.', 'cf.jpg', '87.00', '0.00', 2),
(25, 'PD0207', 'Chaapate Aloo Wrap', 'Served with mint chutney and Lachha onions.', 'cf.jpg', '77.00', '0.00', 2),
(26, 'PD0208', 'Vegetable Wrap', 'Served with mint chutney and Lachha onions.', 'cf.jpg', '77.00', '0.00', 2),
(27, 'PD0209', 'Paneer Pakora', 'Served with mint chutney and Lachha onions.', 'cf.jpg', '97.00', '0.00', 2),
(28, 'PD0210', 'Veg Onion Pakora', 'Served with mint chutney and Lachha onions.', 'cf.jpg', '77.00', '0.00', 2),
(29, 'PD0301', 'Mutton Rogan Josh', 'A fine delicacy form kashmir which derives its name from red kashmiri chillies', 'cf.jpg', '197.00', '0.00', 3),
(30, 'PD0302', 'Keema Mutton', 'Minched Meat cooked with green peas and spices.', 'cf.jpg', '197.00', '0.00', 3),
(31, 'PD0303', 'Saag Gosht', 'A delicious and nutrititus dish in which mutton is cooked in palak with spices added to enhance the taste.', 'cf.jpg', '197.00', '0.00', 3),
(32, 'PD0304', 'Mutton Curry', 'A mouth-Watering delicacy with perfect blend of spices.', 'cf.jpg', '187.00', '0.00', 3),
(33, 'PD0305', 'Rasoi Spl Butter Chicken', 'A Chef''s special for pampering your taste buds.', 'cf.jpg', '197.00', '0.00', 3),
(34, 'PD0306', 'Kadhai Chicken', 'This dish takes its real color and flavor by cooking in a iron utensil-a spicy chicken dish that is a little dry in nature with a rich aroma of spices.', 'cf.jpg', '197.00', '0.00', 3),
(35, 'PD0307', 'Butter Chicken', 'A all time favourite delicacy from Punjab with mild spicy and silky combination of Butter & tomato gravy.', 'cf.jpg', '197.00', '0.00', 3),
(36, 'PD0308', 'Murgh Lababdar', 'Grilled Chicken prepared in tomato and onion gravy with a hint or coriander.', 'cf.jpg', '187.00', '0.00', 3),
(37, 'PD0309', 'Chicken Tikka Masala', 'Roasted chicken chunks served in a rich-tasting creamy.', 'cf.jpg', '160.00', '0.00', 3),
(38, 'PD0310', 'Saag Chicken', 'Chicken cooked in Palak Gravy.', 'cf.jpg', '160.00', '0.00', 3),
(39, 'PD0311', 'Chicken Kali Mirch', 'Chicken cooked in white gravy with distinctive flavours of black pepper corns.', 'cf.jpg', '187.00', '0.00', 3),
(40, 'PD0312', 'Chicken Do Pyaza', 'Chicken cooked with sauted onions to give a peculiar sweet and spicy taste.', 'cf.jpg', '187.00', '0.00', 3),
(41, 'PD0313', 'Chicken Curry', 'An aromatic and spicy combination of chicken pieces cooked in a tomato based stew.', 'cf.jpg', '187.00', '0.00', 3),
(42, 'PD0314', 'Egg Curry', '2 Pcs of boiled eggs cooked in tomato gravy for tangy flavour.', 'cf.jpg', '157.00', '0.00', 3),
(43, 'PD0401', 'Aloo Jeera', 'A simple yet irresistible dish of potatoes spiced with cumin seeds.', 'cf.jpg', '77.00', '0.00', 4),
(44, 'PD0402', 'Punjabi Aloo Dum', 'Potatoes simmered in tomato gravy along with Indian spices', 'cf.jpg', '107.00', '0.00', 4),
(45, 'PD0403', 'Aloo Palak', 'Prepared with pureed spinach and potatoes that are simmered in spices.', 'cf.jpg', '97.00', '0.00', 4),
(46, 'PD0404', 'Dal Makhani', 'A treasured staple food from Punjab-lab cooked on low flame of charcoal, which gives it a rich creamy texture.', 'cf.jpg', '97.00', '0.00', 4),
(47, 'PD0405', 'Daal Maharani', 'A Chef''s special dal Fry.', 'cf.jpg', '87.00', '0.00', 4),
(48, 'PD0406', 'Paneer Butter Masala', 'Paneer Tikka cooked in butter and tomato gravy with mild spices.', 'cf.jpg', '127.00', '0.00', 4),
(49, 'PD0407', 'Paneer Tikka Masala', 'Paneer Tikka cooked in spicy tomato gravy.', 'cf.jpg', '147.00', '0.00', 4),
(50, 'PD0408', 'Paneer Lababdar', 'Paneer chunks cooked in tomato and onion gravy with a hint of coriander.', 'cf.jpg', '137.00', '0.00', 4),
(51, 'PD0409', 'Palak Paneer', 'Paneer chunks cooked in palak paste with mild spices for a distictive taste.', 'cf.jpg', '127.00', '0.00', 4),
(52, 'PD0410', 'Mutter Paneer', 'All time favourite-paneer is cooked with green peas.', 'cf.jpg', '127.00', '0.00', 4),
(53, 'PD0411', 'Paneer Do Pyaja', '', 'cf.jpg', '137.00', '0.00', 4),
(54, 'PD0412', 'Shahi Paneer', '', 'cf.jpg', '137.00', '0.00', 4),
(55, 'PD0413', 'Palak Corn', 'A special combination of palak paste and corns.', 'cf.jpg', '127.00', '0.00', 4),
(56, 'PD0414', 'Malai Kofta', 'A creamy rich tomato gravy with cottage cheese dumpling.', 'cf.jpg', '137.00', '0.00', 4),
(57, 'PD0415', 'Vegetable Kofta', '', 'cf.jpg', '147.00', '0.00', 4),
(58, 'PD0416', 'Navratan Kofta', 'Delicious Mughlai curry with nine ingredients including vegetables, nuts and paneer/ cottage cheese.', 'cf.jpg', '147.00', '0.00', 4),
(59, 'PD0417', 'Kadhahi Paneer', 'Paneer cooked with capsicum in a spicy tomato gravy.', 'cf.jpg', '147.00', '0.00', 4),
(60, 'PD0418', 'Mixed Vegetable', 'A delicious recipe of mixed vegetables enrolled in a detectable creamy sauce..', 'cf.jpg', '100.00', '0.00', 4),
(61, 'PD0419', 'Methi Mutter Malai', 'Methi of fenugreek leaves and green peas cooked in a rich creamy gravy.', 'cf.jpg', '127.00', '0.00', 4),
(62, 'PD0420', 'Gobhi Masala', 'Mild but tasty cauliflower dish from Punjab.', 'cf.jpg', '115.00', '0.00', 4),
(63, 'PD0501', 'Veg Sizzler', '', 'cf.jpg', '187.00', '0.00', 5),
(64, 'PD0502', 'Egg Sizzler', '', 'cf.jpg', '197.00', '0.00', 5),
(65, 'PD0503', 'Paneer Sizzler', '', 'cf.jpg', '217.00', '0.00', 5),
(66, 'PD0504', 'Chicken Sizzler', '', 'cf.jpg', '237.00', '0.00', 5),
(67, 'PD0601', 'Veg Dum Biryani', 'Aromatic & Spice flavoured Rice preparation served with Raita & Pickle.', 'cf.jpg', '137.00', '0.00', 6),
(68, 'PD0602', 'Chicken Dum Biryani', 'Aromatic & Spice flavoured Rice preparation served with Raita & Pickle.', 'cf.jpg', '157.00', '0.00', 6),
(69, 'PD0603', 'Mutton Dum Biryani', 'Aromatic & Spice flavoured Rice preparation served with Raita & Pickle.', 'cf.jpg', '177.00', '0.00', 6),
(70, 'PD0604', 'Hyderabadi Dum Biryani (Veg)', 'Aromatic & Spice flavoured Rice preparation served with Raita & Pickle.', 'cf.jpg', '167.00', '0.00', 6),
(71, 'PD0605', 'Hyderabadi Dum Biryani (Non-Veg)', 'Aromatic & Spice flavoured Rice preparation served with Raita & Pickle.', 'cf.jpg', '207.00', '0.00', 6),
(72, 'PD0701', 'Tandoori Roti', 'Per Piece', 'cf.jpg', '10.00', '0.00', 7),
(73, 'PD0702', 'Tandoori Butter Roti', '', 'cf.jpg', '15.00', '0.00', 7),
(74, 'PD0703', 'Lachha Paratha', '', 'cf.jpg', '20.00', '0.00', 7),
(75, 'PD0704', 'Pudina Parantha', '', 'cf.jpg', '22.00', '0.00', 7),
(76, 'PD0705', 'Plain Naan', '', 'cf.jpg', '20.00', '0.00', 7),
(77, 'PD0706', 'Butter Naan', '', 'cf.jpg', '25.00', '0.00', 7),
(78, 'PD0707', 'Garlic Naam', '', 'cf.jpg', '27.00', '0.00', 7),
(79, 'PD0708', 'Stuff Naam', '', 'cf.jpg', '30.00', '0.00', 7),
(80, 'PD0709', 'Plain Kulcha', '', 'cf.jpg', '20.00', '0.00', 7),
(81, 'PD0710', 'Onion Kulcha', '', 'cf.jpg', '27.00', '0.00', 7),
(82, 'PD0711', 'Alaloo Kulcha', '', 'cf.jpg', '27.00', '0.00', 7),
(83, 'PD0712', 'Paneer Kulcha', '', 'cf.jpg', '30.00', '0.00', 7),
(84, 'PD0713', 'Keema Kulcha', '', 'cf.jpg', '40.00', '0.00', 7),
(85, 'PD0714', 'Vegetable Pulao', '', 'cf.jpg', '70.00', '0.00', 7),
(86, 'PD0715', 'Navratan Pulao', '', 'cf.jpg', '97.00', '0.00', 7),
(87, 'PD0716', 'Jeera Rice', '', 'cf.jpg', '60.00', '0.00', 7),
(88, 'PD0717', 'Plain Rice', '', 'cf.jpg', '60.00', '0.00', 7),
(89, 'PD0718', 'Mixed Raita', '', 'cf.jpg', '50.00', '0.00', 7),
(90, 'PD0719', 'Boondi Raita', '', 'cf.jpg', '35.00', '0.00', 7),
(91, 'PD0720', 'Green Salad', '', 'cf.jpg', '50.00', '0.00', 7),
(92, 'PD0721', 'Plain Dahi', '', 'cf.jpg', '30.00', '0.00', 7),
(93, 'PD0722', 'Papad', '', 'cf.jpg', '10.00', '0.00', 7),
(94, 'PD0723', 'Masala Papad', '', 'cf.jpg', '20.00', '0.00', 7),
(95, 'PD0801', 'Hot Sour Soup', ' (Veg/Non-Veg)', 'cf.jpg', '67.00', '87.00', 8),
(96, 'PD0802', 'Sweet Corn Soup ', ' (Veg/Non-Veg)', 'cf.jpg', '67.00', '87.00', 8),
(97, 'PD0803', 'Manchow Soup', '', 'cf.jpg', '67.00', '87.00', 8),
(98, 'PD0804', 'Chicken Manchurian', '(Dry/Gravy)', 'cf.jpg', '157.00', '177.00', 8),
(99, 'PD0805', 'Noodles', '(Veg/Non-Veg)', 'cf.jpg', '70.00', '90.00', 8),
(100, 'PD0806', 'American Choupsey', '(Veg/Non-Veg)', 'cf.jpg', '97.00', '107.00', 8),
(101, 'PD0807', 'Chicken Lollipop', '(6 pcs)', 'cf.jpg', '157.00', '0.00', 8),
(102, 'PD0808', 'Chilli Mushroom', '', 'cf.jpg', '147.00', '0.00', 8),
(103, 'PD0809', 'Chilli Baby Corn', '', 'cf.jpg', '157.00', '0.00', 8),
(104, 'PD0810', 'Spring Roll', '(Veg/Non-Veg)', 'cf.jpg', '87.00', '107.00', 8),
(105, 'PD0811', 'Veg Manchurian', '(Dry/Gravy)', 'cf.jpg', '117.00', '137.00', 8),
(106, 'PD0812', 'Chilli Paneer', '(Dry/Gravy)', 'cf.jpg', '127.00', '147.00', 8),
(107, 'PD0813', 'Potato Chilli Honey', '', 'cf.jpg', '97.00', '0.00', 8),
(108, 'PD0814', 'Chilli Chicken', '(Dry/Gravy)', 'cf.jpg', '157.00', '177.00', 8),
(109, 'PD0815', 'Hakka Noodles', '(Veg/Non-Veg)', 'cf.jpg', '77.00', '97.00', 8),
(110, 'PD0816', 'Chilli Garlic Voodles', '(Veg/Non-Veg)', 'cf.jpg', '87.00', '107.00', 8),
(111, 'PD0817', 'Fried Rice ', '(Veg/Non-Veg)', 'cf.jpg', '87.00', '107.00', 8),
(112, 'PD0818', 'Rasoi Spl Fried Rice', '(Veg/Non-Veg)', 'cf.jpg', '87.00', '107.00', 8),
(113, 'PD0819', 'Chilli Garlic Fried Rice', '(Veg/Non-Veg)', 'cf.jpg', '87.00', '107.00', 8),
(114, 'PD0820', 'Rasoi Spl Fried Rice', '(Veg/Non-Veg)', 'cf.jpg', '87.00', '107.00', 8),
(115, 'PD0821', 'Chilli Garlic Fried Rice', '(Veg/Non-Veg)', 'cf.jpg', '87.00', '107.00', 8),
(116, 'PD0901', 'Lime Soda', '', 'cf.jpg', '90.00', '0.00', 9),
(117, 'PD0902', 'Aerated Beverage', '', 'cf.jpg', '30.00', '0.00', 9),
(118, 'PD0903', 'Mineral Water', '', 'cf.jpg', '25.00', '0.00', 9),
(119, 'PD0904', 'Lassi', '(Sweet / Salted)', 'cf.jpg', '35.00', '0.00', 9),
(120, 'PD0905', 'Ice Cream', '', 'cf.jpg', '45.00', '0.00', 9),
(121, 'PD0906', 'Maza', '', 'cf.jpg', '30.00', '0.00', 9),
(122, 'PD0907', 'Mocktail', '', 'cf.jpg', '35.00', '0.00', 9),
(123, 'PD0908', 'Hot Coffee', '', 'cf.jpg', '35.00', '0.00', 9),
(124, 'PD0909', 'Cold Coffee', '', 'cf.jpg', '60.00', '0.00', 9),
(125, 'PD0910', 'Sweet', '', 'cf.jpg', '25.00', '0.00', 9),
(126, 'PD1001', 'CITY FOOD Thali (Veg)', 'Served with Paneer dish, Mixed Raita, Dal, Rice,Salad, Pickle,2 Roti.', 'cf.jpg', '137.00', '0.00', 10),
(127, 'PD1002', 'CITY FOOD Thali (Non-Veg)', 'Served with Chicken Curry dish, Dal Makhani, Rice, Mixed Raita, Pickle, 2 Parantha/Naan/Roti.', 'cf.jpg', '157.00', '0.00', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
