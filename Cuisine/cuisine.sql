-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 09:31 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuisine`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_image` varchar(300) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES
(79, 11, '0.0.0.0', 2, 'Baby Shirt', 'babyshirt.JPG', 1, 500, 500),
(80, 2, '0.0.0.0', 2, 'iPhone 5s', 'iphonemobile.JPG', 1, 25000, 25000),
(81, 2, '0.0.0.0', 8, 'andazi', 'andazi.PNG', 1, 500, 500);

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `nameofchef` text NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(4, 'KARUTI JOY', 'MSKARUTI@GMAIL.COM', 'hey'),
(5, 'KARUTI JOY', 'MSKARUTI@GMAIL.COM', 'hey'),
(6, 'jane doe', 'janedoe@gmail.com', 'welll'),
(7, 'jane doe', 'janedoe@gmail.com', 'welll'),
(8, 'janette', 'juner@gmail.com', 'get in touch');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_qty` int(100) NOT NULL,
  `p_status` varchar(100) NOT NULL,
  `tr_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `uid`, `pid`, `p_name`, `p_price`, `p_qty`, `p_status`, `tr_id`) VALUES
(38, 7, 1, 'Pilau', 800, 1, 'CONFIRMED', '980156655'),
(39, 7, 3, 'chapati', 300, 1, 'CONFIRMED', '980156655'),
(40, 7, 2, 'andazi', 500, 1, 'CONFIRMED', '980156655'),
(41, 7, 1, 'Pilau', 800, 1, 'CONFIRMED', '1363831341'),
(42, 7, 2, 'andazi', 500, 1, 'CONFIRMED', '2047826207'),
(43, 7, 1, 'Pilau', 800, 1, 'CONFIRMED', '2047826207'),
(44, 8, 2, 'andazi', 500, 1, 'CONFIRMED', '1921083148'),
(45, 8, 1, 'Pilau', 800, 1, 'CONFIRMED', '1921083148'),
(46, 8, 2, 'andazi', 500, 1, 'CONFIRMED', '921522767'),
(47, 8, 2, 'andazi', 500, 1, 'CONFIRMED', '1158285392'),
(48, 8, 2, 'andazi', 500, 1, 'CONFIRMED', '1264679579'),
(49, 8, 1, 'Pilau', 800, 1, 'CONFIRMED', '471987941'),
(50, 8, 1, 'Pilau', 800, 1, 'CONFIRMED', '913447934'),
(51, 8, 2, 'andazi', 500, 1, 'CONFIRMED', '918047322');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` varchar(100) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, '1', '2', 'Pilau', 800, 'Method\r\n<br><br>\r\n1. Heat oil in a small pan, add chopped ginger and stir. Add in the meat (beef/chicken) and stir continuously, add some salt and cover the pan. Let the meat cook in its own juice under low heat to preserve the flavour. Add some little water and let it cook till it’s tender.</br><br>\r\n\r\n2. Take a larger cooking pan/sufuria and heat some oil (ensure it is sufficient to prevent sticking). Add your diced onions and fry until they seem transparent, add in your pounded ginger and garlic mixture and stir for a few minutes. Once your garlic begins to turn brown it’s good to go.<br><br>\r\n\r\n3. Stir in the diced green peppers. in the diced carrots and boiled green peas<br><br>\r\n\r\n4. Add the tomato paste into the mixture (use a teaspoon or two of water to dissolve the paste)\r\n<br><br>\r\n5. Add 3 tablespoons of pilau masala into the mixture\r\n<br><br>\r\n6. Add the meat, salt to taste and some little water and cover the pan. Let the meat cook for about 3 minutes.\r\n<br><br>\r\n7. Once you meat has absorbed all the spices, add in your 2 cups of rice(washed) and 4 cups of hot water.\r\n<br><br>\r\n8. Cover the pan and let your pilau cook under medium heat until all the water has evaporated. Ensure you stir it frequently to prevent the rice from sticking at the bottom of the pan, keep regulating the heat to ensure your pilau doesn’t burn.\r\n<br><br>\r\n9. Your pilau is now ready! Serve with kachumbari , pilipili ya kukaanga or any other stew as desired.', 'chick1.png', 'Required ingredients\r\n<br><br>\r\n-2 cups of Rice (long grain rice/Basmati/Pishori)\r\n<br><br>\r\n– 1 cup Green peas (optional)\r\n<br><br>\r\n– 1/4Kg of beef/chicken breast (cubed)\r\n<br><br>\r\n– 2 Carrots (cubed)\r\n<br><br>\r\n– 1 Large onion (diced)\r\n<br><br>\r\n– 1 Large Green pepper/ pilipili hoho (diced)\r\n<br><br>\r\n– 1 medium sized bulb of Garlic (pounded)\r\n<br><br>\r\n– 1 small piece of fresh ginger (pounded)\r\n<br><br>\r\n– Tomato paste (450g)\r\n<br><br>\r\n– Freshly ground Pilau Masala/ Whole spices\r\n<br><br>\r\n– Cooking oil as required\r\n<br><br>\r\n– Clean Water'),
(2, '1', '3', 'andazi', 500, '<br></br>\r\n<b>INGREDIENTS</b>\r\n<br><br>\r\n\r\n1.1/2 teaspoon salt<br><br>\r\n2.1/2 teaspoon ground cardamom<br><br>\r\n3 1/2 cups all-purpose flour<br> <br>\r\n4siftedvegetable oil for deep frying<br><br>\r\n\r\n', 'andazi.PNG', '<b>Directions</b>\r\n\r\n<br></br>\r\n<b>TIME</b>\r\n15 m\r\nCook<br></br>\r\n<b>1 PERSON SERVING</b>\r\n<br><br>\r\n1.Combine milk, 1/4 cup vegetable oil, sugar, egg, instant yeast, salt, and cardamom in a large bowl. <br><br>\r\n2.Mix in flour, 1 cup at a time, until dough comes together and is easily handled.<br><br>\r\n3. Knead dough on a flat work surface until no longer sticky.<br><br>\r\n4.\r\nPut dough back in the bowl, cover, and let rise in a warm area until doubled, about 1 hour.<br><br>\r\n5.Press dough down gently.<br><br>\r\n6. Knead it briefly and divide it into 4 portions.<br><br>\r\n7. Roll each portion into a ball; keep covered with a cloth to prevent them from drying out.<br><br>\r\n8.\r\nRoll 1 ball into a 1/3-inch-thick circle on a floured work surface.<br><br>\r\n9. Cut into 4 triangles using a pizza cutter.<br><br>\r\n10. Repeat with remaining balls of dough, keeping other dough covered.<br><br>\r\n10.Heat oil in a deep-fryer or large saucepan over medium heat.<br><br>\r\n11. Fry dough triangles 3 or 4 at a time, without overcrowding, until puffed like balloons, 1 to 2 minutes. Turn and continue frying until golden brown, 1 to 2 minutes more.<br><br>\r\n12. Drain on paper towels. Repeat with remaining dough.\r\n'),
(3, '1', '3', 'chapati', 300, '<br><br><b>INGREDIENTS</b><br><br>\r\n\r\n1. cup whole wheat flour1 cup all-purpose flour<br><br>\r\n2. 1 teaspoon salt\r\nGreat Value Salt, 26 oz<br><br>\r\n\r\n3. 2 tablespoons olive oil<br><br>\r\n4.3/4 cup hot water or as needed <br><br>\r\n', 'chapo1.png', '<br><br><b>\r\nDirections\r\n<br><br>\r\nTIME:15 m Cook\r\n<br><br>\r\nSERVING:2 PEOPLE\r\n<br><br></b>\r\n1.In a large bowl, stir together the whole wheat flour, all-purpose flour and salt.<br><br>\r\n2. Use a wooden spoon to stir in the olive oil and enough water to make a soft dough that is elastic but not sticky. <br><br>\r\n3.Knead the dough on a lightly floured surface until it is smooth.<br><br>\r\n4. Divide into 10 parts, or less if you want bigger breads.<br><br>\r\n5. Roll each piece into a ball. <br><br>\r\n6.Let rest for a few minutes. <br><br>\r\n7.Heat a skillet over medium heat until hot, and grease lightly. \r\n8.On a lightly floured surface, use a floured rolling pin to roll out the balls of dough until very thin like a tortilla.<br><br>\r\n9. When the pan starts smoking, put a chapati on it. <br><br>\r\n10.Cook until the underside has brown spots, about 30 seconds, then flip and cook on the other side. Continue with remaining dough. '),
(4, '1', '2', 'Fish', 10000, '<br><br><b>INGREDIENTS</b><br><br>\r\n\r\n1. 1 1/2 pounds salmon fillets\r\nResponsibly Farmed Atlantic Salmon Fillets<br><br>\r\n\r\n2.lemon pepper to taste<br><br>\r\n3.garlic powder to taste<br><br>\r\n4. salt to taste<br><br>\r\n5. 1/3 cup soy sauce<br><br>\r\n6. 1/3 cup brown sugar<br><br>\r\n7. 1/3 cup water<br><br>\r\n8. 1/4 cup vegetable oil<br><br>\r\n', 'fish.png', '<br><br><b>\r\nDirections\r\n<br><br>\r\nTIME:1HR 30MIN Cook\r\n<br><br></b>\r\n\r\n\r\n1. Season salmon fillets with lemon pepper, garlic powder, and salt.<br><br> \r\n2.In a small bowl, stir together soy sauce, brown sugar, water, and vegetable oil until sugar is dissolved.<br><br>\r\n 3.Place fish in a large resealable plastic bag with the soy sauce mixture, seal, and turn to coat.<br><br> \r\n4.Refrigerate for at least 2 hours.<br><br> \r\n5.Preheat grill for medium heat.<br><br>\r\n6.Lightly oil grill grate. <br><br>\r\n7.Place salmon on the preheated grill, and discard marinade.<br><br> 8.Cook salmon for 6 to 8 minutes per side, or until the fish flakes easily with a fork. '),
(5, '1', '4', 'meatballs', 1200, '<br><br><b>Ingredients</b><br><br>\r\n1. 1 lb ground beef<br><br>\r\n2. 1 lb ground pork<br><br>\r\n3. 1/2 cup Italian breadcrumbs<br><br>\r\n4. 1/3 cup milk<br><br>\r\n5. /4 cup onion, diced<br><br>\r\n6 .1/2 teaspoon garlic powder<br><br>\r\n7. 1 teaspoon Italian seasoning<br><br>\r\n8. 1 egg<br><br>\r\n9. 1/4 cup parsley chopped<br><br>\r\n10. 1/4 cup shredded parmesan<br><br>\r\n11. salt and pepper to taste<br><br>\r\n\r\n\r\n', 'meatball.png', '<br><br><b>Instructions<br><br>\r\n<br><br><b>SERVING:4</b></b><br><br>\r\n1.Preheat oven to 400 degrees F. \r\n<br><br>\r\n2.In a medium bowl, mix all ingredients until just combined.\r\n<br><br>\r\n3.Shape mixture into 48 meatballs, approximately 1 1/2 tablespoons each. \r\n<br><br>\r\n4.Bake 18-20 minutes or until cooked through.<br><br> '),
(6, '1', '5', 'pancakes', 1500, '<br><br><b>INGREDIENTS</b><br><br>\r\n 1. 1 1/2 cups all-purpose flour<br><br>\r\n2.3 1/2 teaspoons baking powder<br><br>\r\n3. 1 teaspoon salt<br><br>\r\n4. 1 tablespoon white sugar<br><br>\r\n5. 1 1/4 cups milk <br><br>\r\n6. 1 egg<br><br>\r\n7. 3 tablespoons butter, melted\r\n365 Everyday Value® Organic Butter\r\n<br><br>\r\n', 'pancakes.png', '<br><br>TIME:20 m<br><br>\r\n<b>SERVING:5</b><br><br>\r\n<b>DIRECTIONS:</b><br><br>\r\n\r\n1. In a large bowl, sift together the flour, baking powder, salt and sugar.<br><br> \r\n2. Make a well in the center and pour in the milk, egg and melted butter; mix until smooth.<br><br>\r\n3. \r\nHeat a lightly oiled griddle or frying pan over medium high heat.<br><br>\r\n4. Pour or scoop the batter onto the griddle<br><br>\r\n5.using approximately 1/4 cup for each pancake. Brown on both sides and serve hot.  <br><br>');

-- --------------------------------------------------------

--
-- Table structure for table `received_payment`
--

CREATE TABLE `received_payment` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `amt` int(100) NOT NULL,
  `tr_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`) VALUES
(8, 'KARUTI', 'JOY', 'acedmuffin@gmail.com', '6f84e85c404e78c70baf83f983634f4b', '0705999443', 'rongai'),
(9, 'KARUTI', 'JOY', 'MSKARUTI@GMAIL.COM', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '705999443', 'rongai'),
(11, 'kelvin', 'myself', 'kelvomyself2@gmail.com', '8ecaa909e5f72919645d15b2ef5cb76253c8c3b1', '0703999443', 'rongai'),
(12, 'jane', 'doe', 'janedoe@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '7035999443', 'rongai'),
(13, 'KARUTIge', 'JOY', 'MSKARRUTI@GMAIL.COM', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '705999443', 'rongai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `received_payment`
--
ALTER TABLE `received_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `chef`
--
ALTER TABLE `chef`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `received_payment`
--
ALTER TABLE `received_payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
