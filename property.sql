-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 25, 2021 at 08:18 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adminid`, `adminname`, `password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`) VALUES
(1, 'Residential'),
(2, 'Commercial'),
(3, 'Sites');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `author_email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `title`, `content`, `author_name`, `author_email`, `created_at`) VALUES
(1, 'Enquiry regarding a residential house', 'I would like to know the age and condition of the residential house (address: BERKLEY LODGE, 4 Abbeyville)', 'Mary Gardner', 'maryGard@hotmail.com', '2021-05-24 14:51:19'),
(2, 'Enquiry about a residential property', 'I would like to book an appointment to view the house(17 Oakleigh Wood).', 'John Finnan', 'JohnF@hotmail.com', '2021-05-24 14:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `propertyid` int(11) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `town` varchar(50) NOT NULL,
  `county` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `bedrooms` int(2) DEFAULT NULL,
  `shortdescription` text NOT NULL,
  `longdescription` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `vendorid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`propertyid`, `address1`, `town`, `county`, `price`, `bedrooms`, `shortdescription`, `longdescription`, `image`, `categoryid`, `vendorid`) VALUES
(1, 'BERKLEY LODGE, 4 Abbeyville', ' Adare', 'Co. Limerick', 585000, 7, 'A fantastic opportunity to acquire Berkerley Lodge Guest House, a 7bed 7bath detached residence c. 2,350sq.ft.', 'The property may suit those considering a profession in the hospitality sector or indeed renovating back to a family residence. The property measures to an impressive 2,350sq.ft and has ample parking to the front of the property and a small landscaped garden to the rear.\r\n\r\nBerkeley Lodge is an award-winning guesthouse located in the heart of Adare, a famously picturesque village in County Limerick. Berkeley Lodge offers guests a range of comfortable rooms each with its own character. There is a quaint lounge area for guests to use and a bright dining room.', 'images/residentialProperty.jpeg', 1, 3),
(2, '17 Oakleigh Wood', 'Dooradoyle', 'Limerick', 245000, 3, 'Oakleigh Wood is possibly one of Dooradoyles most popular neighbourhoods, given its fantastic location which is in close proximity of a host of amenities such as The University Hospital. ', 'Entrance hall - Bright and inviting entrance hall with storage under stairs\r\nLiving room - To the left of the entrance hall, one will find the well-presented living room which comes with an attractive gas fireplace and wood floors.\r\nKitchen/dining -The spacious kitchen/ dining is open plan and has a buttermilk fully fitted kitchen with gas hob, is plumbed for a dishwasher and washing machine. The floor and splash-back are tiled. Patio doors lead to the rear garden.\r\nBed 1 - Located to the rear of the property, the master bedroom is a spacious double room with built in wardrobes and en suite off\r\nEn suite -Tastefully tiled, electric shower, whb and wc\r\nBed 2 - A double room with built in wardrobes\r\nBed 3 - This is also a large double room with built in wardrobes\r\n\r\nGarden - The rear garden has a Westerly aspect and mature trees offering great privacy. It has a patio area and garden shed. To the front of the property parking.', 'images/residential2.jpeg', 1, 4),
(3, '30 Cluain Dubh, Father Russell Road', 'Raheen', 'Limerick', 255000, 3, 'Semi-detached house.\r\nLocated off the ever-popular Father Russell Road, this attractive and well-proportioned 3-bedroom semi-detached home comes to the market in excellent condition throughout.', 'Presented in excellent condition throughout.\r\nEnjoys a highly sought-after location off the Fr Russell Road and is within strolling distance of a host of amenities.\r\nPVC double glazed windows.\r\nGFCH.\r\nOff street parking.\r\nSunny South facing aspect to the rear and is not overlooked.', 'images/residentialHouse.jpeg', 1, 1),
(4, '10 The Meadows, Briarfield', 'Castletroy ', 'Co. Limeri', 155000, 2, 'Nestled at the end of a quiet cul de sac in Briarfield, 10 The Meadows comes to the market in fair condition throughout and is ideally suited for first time buyers hoping to step onto the property market or buy to let investors alike. ', 'Then property boasts a fantastic location in the heart of Castletroy and is within strolling distance of a host of amenities including, The university of Limerick, Castletroy Shopping Centre and local Schools and shops. The living accommodation is ample in size with open plan living/ dining space with separate kitchen and two double bedroom upstairs. There is a spacious South facing garden and off street parking to the front Living accom - Entrance hall Kitchen - Ample size Open plan living room/ dining area - patio doors lead to the rear garden. ', 'images/residentialProperty2.jpeg', 1, 1),
(5, '33 Bayview Drive', 'Killiney', 'County Dublin', 545000, 9, ' are delighted to present 33 Bayview Drive, Killiney, a superb commercial / residential opportunity to the market. Ideally located on this corner site, 33 Bayview Drive is a generously proportioned semi-detached property', 'semi-detached property most recently used as a Doctors surgery, with a large 2 double bedroom apartment on the first floor.\r\n\r\nSet over two floors, the ground floor Surgery (c.127.39 Sq.m) comprises an entrance porch, five large reception rooms, three toilets and rear courtyard access. The 1st floor apartment (c.55.26 Sq.m) comprises an entrance hall with surgery access, stairs to the landing with hot press, two double bedrooms, living / dining room and kitchen.', 'images/commercial1.jpeg', 2, 2),
(6, '123 Old County Road, Crumlin', 'Dublin 12', 'Dublin', 315000, 7, 'End of terrace, two stores mixed use development which extends to a total approximate area of 254 sqm.\r\nComprising two ground floor retail units with 3 x residential apartments overhead.', 'The ground floor comprises two retail units and windows and entrance doorways are secured with roller shutters.\r\nRetail Unit 1 is fitted out and trading as a post office and comprises a regular shaped dual aspect corner unit.\r\nRetail Unit 2 is vacant and comprises an irregular shaped unit that was previously in use as a grocery store.\r\nApartments are located at first floor level. Apartment 3 also includes attic level with sloping ceiling (2 no bedroom).\r\nApartments are configured as open plan kitchen/living room, bedroom(s) and WC/shower room (electric).', 'images/commercial2.jpeg', 2, 5),
(7, 'St. Aloysius College,Deerpark Road', 'Athlone', 'Co. Westmeath', 768000, 9, 'St. Aloyusius College, Deerpark Road, Athlone is a boys secondary school now no longer used as such and is being sold to enable it to be re-purposed.', 'The total complex sits on a site measuring 2.5 Ha(6.25 acres)\r\nIt consists of three different elements:\r\nThe main school building with various classrooms, staffrooms and other ancillary rooms and pre-fabs presented in very good condition and comprised of all accommodation required for the conducting of secondary education. This building measures approximately 2,040 m2.\r\nExternally it has ample car parking, recreational areas and open spaces with a main access off Canal Banks Road.', 'images/commercial3.jpeg', 2, 4),
(8, 'Industrial Lands,Monread Road', 'Naas', 'Co Kildare', 2500000, 0, 'Prime Industrial - Warehouse Lands extending to 3.9 Hectares with full planning permission for 52 Light Industrial/Warehouse Units extending to 14500m2 approximately.', 'The planning comprises 5 separate buildings and is ready to go with all main services available. These lands are superbly well located just off the Monread Road and with 300 metres of road frontage approximately onto the M7. The M7 can be accessed at Exit 9 or the new Exit 9A and both are only minutes away. This site offers ease of access to Dublin and the nationwide motorway system.', 'images/site.jpeg', 3, 2),
(9, 'Ballintombay Lower', 'Rathdrum', 'Wicklow', 295000, 0, 'COTTAGE:\r\nTin Roof Single Storey Cottage: C. 43 Sq.M. in Floor Area\r\n\r\nPlanning Permission Granted by Wicklow County Council for Extension, Septic Tank and Percolation Area. (Planning Reference: 181212)', 'Superb location with South facing aspect overlooking the Glenmalure Valley, Rathdrum is less than 10 minutes, Laragh 15 minutes, South Dublin less than one hour. The Property is approached via a shared access Roadway.', 'images/site3.jpeg', 3, 1),
(10, 'Lakelands, Manulla', 'Castlebar', 'Mayo', 200000, 0, 'Lands for sale.', 'Lands for sale in suitable divisions as follows:- 1. Lakelands Lower, Manulla. A field c. 7.45 acres adjoining this Secondary Road . This is green land in one unit. 2. Lakelands Upper, Manulla. 14.5 acres of low-lying land adjoining the Lake. Maps on request from the Auctioneers.', 'images/site2.jpeg', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `author_email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','approved') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `title`, `content`, `author_name`, `author_email`, `created_at`, `status`) VALUES
(1, 'Very professional company!', 'I found the attention to customer care to be excellent. The level of communication was extremely high ...all my queries were answered in a speedy professional manner. I did note great attention to detail and as the sale progressed I was kept up to date.\r\nMany thanks for the great service.', 'Kathleen Mernagh', 'KathleenMernagh@hotmail.com', '2021-05-23 16:04:56', 'approved'),
(2, 'Amazing company!', 'Brunas Estate Agents is a very professional company and the service is amazing! My husband and I were First Time Buyers and it can be so stressful. When we met Bruna we had so many questions, a lot were unrelated to the property! No matter what we asked or when she always reached out to us. She made the whole journey seamless and having that support is priceless. I would recommend Brunas Estate Agents for their customer service and dedication.', 'Natasha Duggan', 'NatashaDuggan@hotmail.com', '2021-05-23 16:08:42', 'pending'),
(3, 'Great Service!', 'We purchased our house at Brunas Estate Agents and we are very happy with how professional and helpful they were. We needed some extra assistance with a couple of things during the purchase process and they were always prepared to help us when we asked.', 'Stuart Reilly', 'StuartReilly@hotmail.com', '2021-05-23 16:28:33', 'approved'),
(4, 'Great care and empathy!', 'To my delight, from the very first phone call, we received a service second to none from Brunas Estate Agents company.\r\nWith great care and empathy, they made the entire journey a very pleasing experience. Nothing was an issue for them.', 'Mark Sive', 'MarkSive@hotmail.com', '2021-05-23 16:52:33', 'approved'),
(5, 'Couldn\'t be happier with their service!', 'Recently bought my house and couldn\'t be happier with their service, professionalism, regular updates. I cannot recommend this company highly enough!', 'Karen McManus', 'KarenMcManus@hotmail.com', '2021-05-23 16:55:14', 'approved'),
(6, 'Efficient and professional company!', 'Brunas Estate Agents was efficient, professional, supportive and friendly in all dealings regarding my house purchase. They returned calls promptly & dealt with queries/issues without delay.\r\nI would definitely work with Brunas Estate Agents!', 'Caroline Kilganne', 'CarolineK@hotmail.com', '2021-05-23 17:01:01', 'pending'),
(7, 'Excellent service!', 'Excellent service and a pleasure to deal with that company from start to finish. ', 'Michael Smith', 'MichaelS@hotmail.com', '2021-05-23 17:04:44', 'pending'),
(8, 'Transparent service!', 'I bought my home earlier this year. Brunas Estate Agents team were kind, professional, and efficient throughout the process. An honest and transparent service.', 'Margareth Herity', 'MargarethH@hotmail.com', '2021-05-23 17:07:10', 'pending'),
(9, 'Great Assistance!', 'I would have no hesitation in recommending Brunas Estate Agents company!', 'Emma Kelly', 'EmmaKelly@hotmail.com', '2021-05-23 17:10:43', 'pending'),
(10, 'Very professional!', 'Brunas Estate Agents team were very professional, prompt in reply with any queries, on time for all viewings and quick to respond to all phone calls and emails.', 'Helena Vesey', 'HelenaV@hotmail.com', '2021-05-23 17:13:24', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendorid` int(11) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `town` varchar(20) NOT NULL,
  `county` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendorid`, `surname`, `firstname`, `address1`, `town`, `county`, `mobile`, `email`) VALUES
(1, 'Souza', 'Bruna', '1 Ann Fionnan, Magazine Road', 'Athlone', 'Co. Westmeath', '353830590909', 'brunaSouzaBEstateAgents@hotmail.com'),
(2, 'Kelly', 'Emma', '14, Brooklwans,', 'Sligo', 'Sligo', '353830590909', 'emmaBEstateAgents@hotmail.com'),
(3, 'Smith', 'Cyril', '10, Sea Road,', 'Sligo', 'Sligo', '353830590909', 'CyrilSmithBEstateAgents@hotmail.com'),
(4, 'Smith', 'Karoline', '90, Finiskling Road', 'Sligo', 'Sligo', '353830590909', 'karolineSBEstateAgents@hotmail.com'),
(5, 'Jersey', 'Michael', '3, Oconnel Sreet,', 'Sligo', 'Sligo', '353830590909', 'MichaelJBEstateAgents@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`propertyid`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `propertyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
