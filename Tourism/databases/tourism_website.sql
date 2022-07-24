-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 05:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `overall_rating` varchar(6) NOT NULL,
  `location_description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `name`, `overall_rating`, `location_description`) VALUES
(16, 'Kek Lok Si Temple', '4.5', 'The Kek Lok Si Temple is a Buddhist temple situated in Air Itam, Penang, Malaysia. It is the largest Buddhist temple in Malaysia, and is also an important pilgrimage centre for Buddhists from all around Southeast Asia. In 2002, a 30.2-metre (99 ft) bronze statue of Guanyin, the Goddess of Mercy, was completed and opened to the public. It replaced the previous white plaster Kuan Yin statue which was damaged due to a fire a few years earlier. The bronze statue is located on the hillside above the pagoda. The statue is complemented with a 60.9 metre (200 ft) three-tiered roof pavilion (with 16 columns made of bronze supporting the pavilion), which was completed in 2009. It is the tallest Guanyin statue in the world.'),
(17, 'Penang National Park', '3.0', 'Penang National Park might be one of the smallest in the world at just 23 square kilometers, but it still contains five very distinct habitats with over 400 different plant species. In addition to forests and mangroves, there is also a long stretch of seacoast here with timber trees lining up the white powdery sand and coastal habitat.\r\n\r\nThe park is famous for its many trails, which zigzag into the jungle and along the coastline towards landmarks such as the Muka Head lighthouse, which can only be reached by a steep trek up a hill at the end of Monkey Beach. All trails in the park have been left in their original condition, except for the addition of concrete steps and ropes in certain areas to help climbers continue on their way when the terrain gets too demanding.'),
(18, 'Penang Botanic Gardens', '', 'Although the 30-hectare botanical garden is often referred to as \"Waterfall Gardens,\" there\'s no actual waterfall within the park–the Penang waterfall is nearby but on private property and the only way to visit it is by joining a special monthly tour by a local non-governmental organization.\r\n\r\nThe park participates in research and conservation programs, but also offers a recreation environment where visitors can take to the trails for jungle trekking or jogging, explore the extensive tropical rainforest, or discover the many rare species of ferns, the herb garden, and the orchidarium housed here. Some of the hiking trails reach all the way up to Penang Hill, over an hour away.\r\n\r\nLong-tailed macaques and black giant squirrels, as well as many species of butterflies, call the gardens home.'),
(19, 'Penang War Museum', '4.0', 'This 20-acre outdoor living war museum in Penang sits on the former site of a 1930s British fort and gun armory. The fort failed to stop the invading Japanese army in WWII and suffered significant damage to its structure. It was later reconstructed and is now home to Southeast Asia\'s largest war museum and a memorial to the many men who suffered and died under occupation.\r\n\r\nThe museum\'s main attractions are all at least partially underground–some as deep as 10 meters under the Earth–and include ammunition bunkers, pillboxes (concrete posts or small fortifications used to hide when firing at the enemy), a communications center, and escape tunnels leading right to where the submarines once stood in wait.\r\n\r\nOn the surface, cannons, barrack blocks, and a number of photographs and testimonials bring the history of the place back to life. Visitors are welcome to explore the large fort on their own, experiencing the area as they see fit and discovering unexpected corners along the way'),
(20, 'Cheong Fatt Tze Mansion', '2.0', 'Occupying a 19th-century mansion mixing Hakka and Teochew architectural styles, this quaint boutique hotel is 5 minutes\' walk from Penang State Museum and Art Gallery, and a 14-minute walk\r\nfrom both Fort Cornwallis and the Khoo Kongsi temple.\r\n\r\nAiry, understated rooms feature high-ceilings and antique furnishings. All have Wi-Fi, satellite TV and iPod docks, as well as minifridges, rainfall showers, and tea and coffeemaking facilities. Suites add living rooms and/or plunge pools; 1 features 1950s-style decor.\r\n\r\nThere\'s a cafe, a bar, and a fusion restaurant with retro decor, and breakfast is served in an open-air courtyard. Parking is available.'),
(21, 'Escape Theme Park', '', 'This is the first theme park launched in Penang that is entertaining people with thrilling adventures and a water park. The natural environment around that sway with the wind in the area uplifts the theme park experience, especially when you go bungee jumping.\r\n\r\nApart from a lazy pool and water slides like other theme parks, this premises also conducts other adventures like flying fox, Go Ape, Gecko Tower, and Monkey Business which are all fancy names for activities like rock climbing, crossing suspension bridges and climbing uphill on a seat.'),
(22, 'Kapitan Keling Mosque', '', 'The Kapitan Keling Mosque in George Town Penang, is a good example of Indian Muslim architecture, with the original building dating back to the 19th century, when early Indian Muslim traders to the island, built the first small single storey brick mosque here.\r\n\r\nOver the years the original mosque has been expanded many times into what is seen here today, the largest mosque in George Town Penang.\r\n\r\nIf you would like to visit the mosque, it is open to the public and non Muslims, although the worship hall is out of bounds to non Muslims.'),
(23, 'Snake Temple', '4.0', 'The Snake Temple is a Chinese temple situated in Bayan Lepas, Southwest Penang Island District, Penang, Malaysia. It was built in 1805 for Master Qingshui or Chor Soo Kong, a deified Buddhist monk. Devotees from as far away as Singapore, Taiwan and China come to pray in the temple on the monk\'s birthday.'),
(24, 'Penang Hill', '3.0', 'Penang Hill or Bukit Bendera is an excellent vantage point with lush greenery and quaint British bungalows; the perfect location for afternoon tea amid cooler climes. The funicular train takes passengers to the top in seven minutes, while the fitter and more adventurous can opt for a jungle hike. The Habitat is the latest attraction on Penang Hill which is home to thousands of plants, ferns, animals, insects and reptiles. Indulge in a genuine rainforest experience, and return to the magical simplicity of nature.\r\n'),
(25, 'Tropical Spice Garden', '4.0', 'Spanning over eight acres of secondary jungle and dotted with more than 500 species of tropical flora and fauna. Leave the garden with heaps of tropical facts and knowledge by experiencing its 45-minute audio tour. The audio tour covers Tropical Spice Garden\'s water garden, spices terraces, bamboo garden, beverages of the world and more. Having earned the Malaysia Book of Records for the first tropical climate spice garden, a trip to Tropical Spice Garden is not to be missed when in Penang.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `location_id` int(10) NOT NULL,
  `page_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `submit_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `location_id`, `page_id`, `name`, `content`, `rating`, `submit_date`) VALUES
(5, 16, 1, 'Daniel', 'Test Review', 4, '2022-07-20 01:52:35'),
(6, 17, 1, 'Daniel', 'Great Place!', 3, '2022-07-20 16:13:18'),
(7, 20, 1, 'John', 'Underwhelming', 2, '2022-07-20 16:13:33'),
(8, 19, 1, 'Bob', 'Wonderful for history lovers', 4, '2022-07-20 16:13:57'),
(9, 25, 1, 'James', 'Spicy', 4, '2022-07-20 16:16:24'),
(10, 24, 1, 'Daniel', 'Queues for the ride to the top were very long.', 3, '2022-07-20 16:16:42'),
(11, 23, 1, 'Danny', 'A great experience', 4, '2022-07-20 16:17:11'),
(12, 16, 1, 'Daniel', 'Great attraction! Will visit again.', 5, '2022-07-20 19:44:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `reviews_fk` (`location_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
