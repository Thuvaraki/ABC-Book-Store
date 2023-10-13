-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 02:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'Aisha & the White Angel', '1500', 'Aisha & the White Angel.jpg', '\"Aisha & the White Angel\" is a captivating novel that weaves a tale of magic, friendship, and discovery. Aisha, a young girl with a vivid imagination, embarks on a magical adventure when she encounters the mysterious White Angel. Together, they navigate a fantastical world filled with enchanting creatures and unexpected challenges. This heartwarming story explores the power of belief, the importance of friendship, and the wonders of the unknown.'),
(2, 'David Copperfield', '1500', 'david-copperfield.jpg', '\"David Copperfield\" is a classic novel by Charles Dickens, depicting the life of its titular character, David, from childhood to adulthood. Through various trials and tribulations, David faces poverty, betrayal, and heartbreak but also finds love, success, and personal growth. The novel explores themes of resilience, social injustice, and the human spirit\'s capacity to overcome adversity. It offers a vivid portrayal of 19th-century Victorian society while charting David\'s journey towards self-discovery and fulfillment.'),
(3, 'My First Love', '1650', 'My-Frist-Love.jpg', ' \"My First Love\" is a poignant and nostalgic story of a young person\'s first experience of love. The book beautifully captures the innocence and sweetness of first love, along with the challenges and heartaches that come with it. Readers will relate to the universal themes of passion, vulnerability, and growth as they follow the protagonist\'s journey through the highs and lows of this unforgettable experience.'),
(4, 'Osmosis A Play', '2500', 'Osmosis.jpg', '\"Osmosis\" is a thought-provoking play that delves into the complexities of human relationships and connections. Set in a world where emotions and ideas flow like a chemical reaction, this play explores the interconnectedness of individuals and the consequences of their choices. With sharp dialogue and compelling characters, \"Osmosis\" challenges the audience to reflect on the nature of human connection and the impact of our actions on others.'),
(5, 'SYBIL', '3200', 'SYBIL.jpg', '\"SYBIL\" is a gripping psychological thriller that will keep you on the edge of your seat. Follow the enigmatic Sybil as she navigates a world of secrets, deception, and hidden motives. As the layers of intrigue unravel, readers will be drawn into a web of suspense and intrigue. This novel is a rollercoaster ride of suspense and mystery that will leave you guessing until the very end.'),
(6, 'The Fall of Darkness', '4000', 'The Fall of Darkness.jpg', '\"The Fall of Darkness\" is an epic fantasy novel that transports readers to a mythical realm filled with magic, adventure, and unforgettable characters. Join the heroes on their quest to save their world from the encroaching darkness that threatens to engulf it. With vivid world-building and a richly developed mythology, this book is a must-read for fans of epic fantasy.'),
(7, 'The Hidden Truth', '1200', 'The_hidden_truth.jpg', ' \"The Hidden Truth\" is a gripping mystery novel that unravels the secrets buried beneath the surface of a seemingly ordinary town. As a series of inexplicable events unfolds, the protagonist becomes entangled in a web of intrigue and danger. This book will keep you guessing as you follow the clues and uncover the hidden truth.'),
(8, 'The Moonstone', '2300', 'THE-MOONSTONE.jpg', '\"The Moonstone\" is a classic detective novel by Wilkie Collins, often considered one of the earliest examples of the genre. Set around the theft of a valuable diamond, this novel features a diverse cast of characters and a cleverly constructed plot filled with twists and turns. Join the investigation as the characters seek to unravel the mystery of the stolen Moonstone and its curse.'),
(9, 'Vanity Fair', '2700', 'Vanity_Fair.jpg', '\"Vanity Fair\" is a satirical novel by William Makepeace Thackeray that offers a sharp critique of society, ambition, and morality. Set against the backdrop of the Napoleonic Wars, it follows the lives and fortunes of two contrasting women, Becky Sharp and Amelia Sedley. This novel is a witty and incisive commentary on the values and aspirations of its time, making it a classic of English literature.'),
(10, 'Victim Of Evil System', '1800', 'victim-of-evil-system.jpg', '\"Victim Of Evil System\" is a gripping thriller that explores the dark underbelly of a corrupt and oppressive society. Follow the protagonist as they navigate a world filled with injustice, danger, and moral dilemmas. This thought-provoking novel raises questions about power, ethics, and the lengths one must go to in the pursuit of justice.'),
(11, 'The Mirror', '2370', 'The_mirror.jpg', '\"The Mirror\" is a mesmerizing tale of reflection and transformation. When a mysterious antique mirror comes into the possession of the protagonist, their life takes an unexpected turn. This novel explores themes of identity, self-discovery, and the blurred line between reality and illusion. As the mirror reveals its secrets, readers will be drawn into a world of enchantment and intrigue.'),
(12, 'The Vendor of Sweets', '1300', 'The_Vendor_of_Sweets.jpg', '\"The Vendor of Sweets\" by R.K. Narayan is a poignant novel that follows the life of Jagan, a modest sweet vendor in the fictional town of Malgudi. Jagan\'s simple existence is disrupted when his Westernized son challenges traditional values. This story explores the clash between generations and cultures, highlighting the struggle to find a balance between tradition and modernity. Narayan\'s masterful storytelling and wit make this a thought-provoking exploration of identity and change in a rapidly evolving world.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'User',
  `number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `number`) VALUES
(1, 'SuperAdmin', 'superAdmin@gmail.com', 'SAdmin', 'Super_Admin', '0771112233'),
(2, 'Admin01', 'admin01@gmail.com', 'admin01', 'Admin', '0772223344'),
(3, 'User01', 'user01@gmail.com', 'user01', 'User', '0774445566'),
(4, 'User02', 'user02@gmail.com', 'user02', 'User', '0775556677'),
(5, 'User03', 'user03@gmail.com', 'user03', 'User', '0776667788'),
(6, 'Admin02', 'admin02@gmail.com', 'admin02', 'Admin', '0773334455');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
