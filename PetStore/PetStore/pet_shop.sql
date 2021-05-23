-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 06:52 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bird cage`
--

CREATE TABLE `bird cage` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bird cage`
--

INSERT INTO `bird cage` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Large Luxurious Bird Cage With Feeding Container', 'dc03ba4028bc0b3bb3ae37701ba6e482.jpg', 3000),
(2, 'Bird House', '1856041e8f9b988ac22a4991626bdcdb.jpg', 450),
(3, 'Wooden Bird Feeding Attractor', 'd8bfd324a759e94e9a291a131c5f4f66.jpg', 350),
(4, 'Duo Cage Set for Small Bird', '496c4bc7146cc5120e6b94b03fa3597f.jpg', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `bird food`
--

CREATE TABLE `bird food` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bird food`
--

INSERT INTO `bird food` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Smart Heart Mynah Bird Food 1Kg', 'Mynah.png', 250),
(2, 'Smart Heart Talkative Brain Nourishing Mynah Bird Food 400gm', 'TalkativeMynah.png', 175),
(3, 'KIKI Canary Seed 500gm', 'Canary-02.png', 120),
(4, 'Kinlys Dried Meal worms For Wild Birds 150gm', 'BirdWormMeals.png', 380);

-- --------------------------------------------------------

--
-- Table structure for table `cat accessories`
--

CREATE TABLE `cat accessories` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat accessories`
--

INSERT INTO `cat accessories` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Breathable Pet Carrier Backpack', '5903dc7e8f44971302c595b6e5d39c0c.jpg\r\n', 900),
(2, 'Pet Carrier Travel Bag', '2f2f6c45796db89945187d42b11e5904.jpg', 800),
(3, 'Pet Smart GPS Tracker Device', 'f301a697543b24ec4cadbd756d10350a.jpg', 4500),
(4, 'Smart Auto Food Dispenser', 'petlibro-automatic-pet-feeder-208254_1800x1800.jpg', 7500),
(5, 'Pet Harness Collar Leash Large Size', 'Dog-Harness-Collar-Leash-Large-Size-300x352.png', 250),
(6, 'Premium Steel Pet Food Bowl All Sizes 12 piece Set', 'premium-steel-pet-food-bowl-300x352.png', 500),
(7, 'Automated Water Dispenser for Pets (in 3 colours each)', 'b-1632021185910370_pet drinker.jpg', 400),
(8, 'Breathable Plastic Pet Carrier', '39c6a655df44d5def46a480028c288c6.jpg', 550),
(9, 'Breathable Pet Sleeping/Play House Tent', '5e31c2ca878f04801d552a40b23acf7c.jpg', 850),
(10, 'Warm Sleeping Bed For Pets', '7a7e09474f45bbd9fa0c10f758d7f5ed.jpg', 700),
(11, 'Warm Sleeping House For Pets', '05cb7c4e5cce9f46f7c64cdb49226b76.jpg', 750),
(12, 'Reflective Glow in the Dark Pet Collars', '5f1941bd1a9ba210ebcd31a5-large.jpg', 100),
(13, 'Pet Leash Harness Collar Trio Set', '6662fd46afc85a9381156d7fbc1aa40f.jpg', 250),
(14, 'Pet Leash Harness Duo Set', '48516e8ba79568379152000a1421b410.jpg', 250);

-- --------------------------------------------------------

--
-- Table structure for table `cat dry food`
--

CREATE TABLE `cat dry food` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat dry food`
--

INSERT INTO `cat dry food` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Brit Premium Kitten Cat Food 8Kg', 'Kitten.png', 3000),
(2, 'Brit Care Adult Cat Food Lucky I’m Vital Adult 7Kg', 'i-m-vital-adult.png', 3000),
(3, 'Brit Care Adult Cat Food Monty I’m Living indoor 7Kg', 'Monty-im-living-inddor.png', 2900),
(4, 'Lara Adult Cat Food Chicken with Roasted Beef 3kg', 'LaraFish.png', 2500),
(5, 'Lara Adult Cat Food Chicken Chunks with Salmon 10kg', 'LaraFish.png', 2950),
(6, 'Smart Heart Adult Cat Food Mackerel 8Kg', 'Mackerel.png', 3000),
(7, 'Smart Heart Adult Cat Food Seafood 8Kg', 'Seafood.png', 2100),
(8, 'Smart Heart Adult Cat Food Chicken & Tuna 8Kg', 'Chicken-Tuna.png', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `cat grooming supplies`
--

CREATE TABLE `cat grooming supplies` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat grooming supplies`
--

INSERT INTO `cat grooming supplies` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Frontline Spray (100ml) – Flea & Tick Treatment for Cats & Dogs', 'frontline-spray-100ml-flea-tick-treatment-for-cats-dogs-1-300x352.png', 800),
(2, 'Pet Grooming Glove Brush', 'pet-grooming-gloves-brush-300x352.jpg', 350),
(3, 'Cat and Dog Nail Cutter', 'dog-nail-cutter-500x500-1.png', 300),
(4, 'Kimhome Cat and Dog Nail Trimmer and Filer', 'nail-trimmer-cutter-lets-pet-300x352.png', 400),
(5, 'Bearing Chic and Charm Conditioning Shampoo C&K 1 For Dog and Cat (500ml)', 'bearing-chic-charm-conditioning-shampoo-dejavu-for-dog-cat-500ml-300x352.jpg', 900),
(6, 'Bearing Chic and Charm Conditioning Shampoo Kenz Flower For Dog and Cat (500ml)', 'bearing-chic-and-charm-conditioning-shampoo-kenz-flower-for-dog-and-cat-500ml-300x352.jpg', 900),
(7, 'Bearing Chic and Charm Conditioning Shampoo Polo Sp For Dog and Cat (500ml)', 'bearing-chic-and-charm-conditioning-shampoo-polo-sp-for-dog-and-cat-500ml-300x352.jpg', 900),
(8, 'Bearing Chic and Charm Conditioning Shampoo Happy For Dog and Cat (500ml)', 'bearing-chic-and-charm-conditioning-shampoo-happy-for-dog-and-cat-500ml-300x352.jpg', 900),
(9, 'Pet Grooming Full Salon Kit', 'f53bb5cb4c4b8eef0890e191a2789dde.jpg', 1100),
(10, 'Pet Grooming Shower Glove', '87ad3f0bf13c1f9a4c4b87d425ebd6fd.jpg', 650);

-- --------------------------------------------------------

--
-- Table structure for table `cat treats`
--

CREATE TABLE `cat treats` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat treats`
--

INSERT INTO `cat treats` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Nekko Pouch Cat Food Tuna with Topping Cheese 70gm', 'nekko-pouch-tuna-with-topping-cheese-70gm-300x352.png', 150),
(2, 'Me-O Creamy Treats Crab (15gmx4)', 'b-132021184047575_crb.jpg', 120),
(3, 'Me-O Creamy Treats Chicken & Liver (15gmx4)', 'b-132021184018575_ckn  Liver.jpg', 200),
(4, 'Me-O Creamy Treats Maguro (15gmx4)', 'b-132021184955755_Maguro.jpg', 175),
(5, 'SmartHeart Creamy Treats in 4 Different Flavours (15gmx4) each', '2312f9d8fcdbd7bb0c15a90ec26b903e.jfif', 175);

-- --------------------------------------------------------

--
-- Table structure for table `dog accessories`
--

CREATE TABLE `dog accessories` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dog accessories`
--

INSERT INTO `dog accessories` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Breathable Pet Carrier Backpack', '5903dc7e8f44971302c595b6e5d39c0c.jpg\r\n', 900),
(2, 'Pet Carrier Travel Bag', '2f2f6c45796db89945187d42b11e5904.jpg', 800),
(3, 'Pet Smart GPS Tracker Device', 'f301a697543b24ec4cadbd756d10350a.jpg', 4500),
(4, 'Smart Auto Food Dispenser', 'petlibro-automatic-pet-feeder-208254_1800x1800.jpg', 7500),
(5, 'Pet Harness Collar Leash Large Size', 'Dog-Harness-Collar-Leash-Large-Size-300x352.png', 250),
(6, 'Premium Steel Pet Food Bowl All Sizes 12 piece Set', 'premium-steel-pet-food-bowl-300x352.png', 500),
(7, 'Automated Water Dispenser for Pets (in 3 colours each)', 'b-1632021185910370_pet drinker.jpg', 400),
(8, 'Breathable Plastic Pet Carrier', '39c6a655df44d5def46a480028c288c6.jpg', 550),
(9, 'Breathable Pet Sleeping/Play House Tent', '5e31c2ca878f04801d552a40b23acf7c.jpg', 850),
(10, 'Warm Sleeping Bed For Pets', '7a7e09474f45bbd9fa0c10f758d7f5ed.jpg', 700),
(11, 'Warm Sleeping House For Pets', '05cb7c4e5cce9f46f7c64cdb49226b76.jpg', 750),
(12, 'Reflective Glow in the Dark Pet Collars', '5f1941bd1a9ba210ebcd31a5-large.jpg', 100),
(13, 'Pet Leash Harness Collar Trio Set', '6662fd46afc85a9381156d7fbc1aa40f.jpg', 250),
(14, 'Pet Leash Harness Duo Set', '48516e8ba79568379152000a1421b410.jpg', 250);

-- --------------------------------------------------------

--
-- Table structure for table `dog dry food`
--

CREATE TABLE `dog dry food` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dog dry food`
--

INSERT INTO `dog dry food` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Smart Heart Adult Food Gold Fit & Firm 20Kg', 'Golt-Adult.png', 2900),
(2, 'Smart Heart Adult Dog Food Power Maxx 10Kg', 'Power-Maxx.png', 2500),
(3, 'Smart Heart Adult Dog Food Power Pack 10Kg', 'Power-Pack.png', 3000),
(4, 'Brit Care Adult Large Breed Dog Food Lamb & Rice 1Kg', 'Large-Breed-Lamb-Rice.png', 3000),
(5, 'Smart Heart Adult Dog Food Chicken & Egg 20Kg', 'Chicken-Egg.png', 2950),
(6, 'Smart Heart Adult Dog Food Chicken & Liver 20Kg', 'Chicken-Liver.png', 3000),
(7, 'Smart Heart Adult Dog Food Roast Beef 20Kg', 'Roast-Beef.png', 2100),
(8, 'Smart Heart Adult Dog Food Smoked Liver 20Kg', 'Smoked-Liver.png', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `dog grooming supplies`
--

CREATE TABLE `dog grooming supplies` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dog grooming supplies`
--

INSERT INTO `dog grooming supplies` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Frontline Spray (100ml) – Flea & Tick Treatment for Cats & Dogs', 'frontline-spray-100ml-flea-tick-treatment-for-cats-dogs-1-300x352.png', 800),
(2, 'Pet Grooming Glove Brush', 'pet-grooming-gloves-brush-300x352.jpg', 350),
(3, 'Cat and Dog Nail Cutter', 'dog-nail-cutter-500x500-1.png', 300),
(4, 'Kimhome Cat and Dog Nail Trimmer and Filer', 'nail-trimmer-cutter-lets-pet-300x352.png', 400),
(5, 'Bearing Chic and Charm Conditioning Shampoo C&K 1 For Dog and Cat (500ml)', 'bearing-chic-charm-conditioning-shampoo-dejavu-for-dog-cat-500ml-300x352.jpg', 900),
(6, 'Bearing Chic and Charm Conditioning Shampoo Kenz Flower For Dog and Cat (500ml)', 'bearing-chic-and-charm-conditioning-shampoo-kenz-flower-for-dog-and-cat-500ml-300x352.jpg', 900),
(7, 'Bearing Chic and Charm Conditioning Shampoo Polo Sp For Dog and Cat (500ml)', 'bearing-chic-and-charm-conditioning-shampoo-polo-sp-for-dog-and-cat-500ml-300x352.jpg', 900),
(8, 'Bearing Chic and Charm Conditioning Shampoo Happy For Dog and Cat (500ml)', 'bearing-chic-and-charm-conditioning-shampoo-happy-for-dog-and-cat-500ml-300x352.jpg', 900),
(9, 'Pet Grooming Full Salon Kit', 'f53bb5cb4c4b8eef0890e191a2789dde.jpg', 1100),
(10, 'Pet Grooming Shower Glove', '87ad3f0bf13c1f9a4c4b87d425ebd6fd.jpg', 650);

-- --------------------------------------------------------

--
-- Table structure for table `dog wet food`
--

CREATE TABLE `dog wet food` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dog wet food`
--

INSERT INTO `dog wet food` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Brit Care Adult Dog Wet Food Pate & Meat Duck 400gm', 'Brit-Pate-Meat-Duck.png', 210),
(2, 'Brit Care Adult Dog Wet Food Pate & Meat Lamb 400gm', 'Brit-Pate-Meat-Lamb.png', 260),
(3, 'Brit Care Adult Dog Wet Food Pate & Meat Turkey 400gm', 'Brit-Pate-Meat-Turkey.png', 240),
(4, 'Brit Care Adult Dog Wet Food Pate & Meat Venison 400gm', 'Brit-Pate-Meat-Venison.png', 260),
(5, 'Brit Care Adult Dog Wet Food Mono Protein Beef 400gm', 'Brit-Mono-Protin-Beef.png', 250),
(6, 'Brit-Mono-Protin-Turkey.png', 'Brit Care Adult Dog Wet Food Mono Protein Turkey 400gm', 230),
(7, 'Brit Care Adult Dog Wet Food Pate & Meat Beef 400gm', 'Brit-Pate-Meat-Beef.png', 200),
(8, 'Brit Care Adult Dog Wet Food Pate & Meat Chicken 400gm', 'Brit-Pate-Meat-Chicken.png', 170);

-- --------------------------------------------------------

--
-- Table structure for table `fish aquarium`
--

CREATE TABLE `fish aquarium` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fish food`
--

CREATE TABLE `fish food` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fish food`
--

INSERT INTO `fish food` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Osaka Green-1 Fish Food (100gm)', 'osaka-green-1-fish-food-100gm-300x352.png', 80),
(2, 'Optimum Aquarium Fish Food (100gm)', 'optimum-aquarium-fish-food-100gm-300x352.png', 85);

-- --------------------------------------------------------

--
-- Table structure for table `mother and kitten care`
--

CREATE TABLE `mother and kitten care` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mother and kitten care`
--

INSERT INTO `mother and kitten care` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Royal Canin Persian Kitten 2Kg', 'Royal canin persian kitten 2kg.jpg', 900),
(2, 'Royal Canin (Kitten Persian) 2Kg', 'Kitten Persian.png', 500),
(3, 'Brit Care Mother Replacement Milk for Orphan Kittens', 'Kitten milk.png', 300),
(4, 'Fancy Feast Kitten White Fish 200gm', 'b-2311201762031942_new 5.jpg', 150),
(5, 'Smart Heart Kitten Food with Chicken, Fish, Egg and Milk', 'b-188202010933977_Smart.jpg', 250);

-- --------------------------------------------------------

--
-- Table structure for table `mother and puppy care`
--

CREATE TABLE `mother and puppy care` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mother and puppy care`
--

INSERT INTO `mother and puppy care` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Royal Canin Mother and Baby Dog Care', 'RC-Starter-Mother-_-Baby-Dog-Maxi-26-44kg-1kg.jpg', 700),
(2, 'Fresh Breath Puppy Oral Care Kit', 'Tropiclean-Fresh-Breath-Puppy-Oral-Care-Kit_480x520.jpg', 350),
(3, 'DogMX Mother Replacement Milk for Orphan Puppies', '5295492.jfif', 250);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_code` varchar(30) NOT NULL,
  `avatar` blob NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `complete_address` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` int(1) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `reference_no` varchar(30) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` int(1) NOT NULL,
  `expected_delivery_date` date NOT NULL,
  `total_amount` float NOT NULL,
  `number_of_items` int(5) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pet_product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  `quantity_price` float NOT NULL,
  `status` int(1) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `reference_no` varchar(30) NOT NULL,
  `payment_for` int(1) NOT NULL,
  `amount_paid` float NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `payment_status` int(1) NOT NULL,
  `paid_by` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pet`
--

CREATE TABLE `tbl_pet` (
  `pet_id` int(11) NOT NULL,
  `pet_description` varchar(50) NOT NULL,
  `pet_category_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `pet_images` blob NOT NULL,
  `pet_status` int(1) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pet_category`
--

CREATE TABLE `tbl_pet_category` (
  `pet_category_id` int(11) NOT NULL,
  `pet_category_name` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pet_product`
--

CREATE TABLE `tbl_pet_product` (
  `pet_product_id` int(11) NOT NULL,
  `product_code` varchar(30) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_detail` varchar(100) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `quantity_on_hand` int(5) NOT NULL,
  `vendor_price` float NOT NULL,
  `retail_price` float NOT NULL,
  `discount` float NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pet_product_category`
--

CREATE TABLE `tbl_pet_product_category` (
  `product_category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `service_id` int(11) NOT NULL,
  `reference_no` varchar(30) NOT NULL,
  `service_name` varchar(30) NOT NULL,
  `service_detail` varchar(100) NOT NULL,
  `service_fee` float NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `avatar` blob NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_category_id` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_group`
--

CREATE TABLE `tbl_user_group` (
  `user_group_id` int(11) NOT NULL,
  `group_name` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  `allow_add` int(1) NOT NULL,
  `allow_edit` int(1) NOT NULL,
  `allow_delete` int(1) NOT NULL,
  `allow_print` int(1) NOT NULL,
  `allow_import` int(1) NOT NULL,
  `allow_export` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor`
--

CREATE TABLE `tbl_vendor` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_contact_person` varchar(30) NOT NULL,
  `company_email` varchar(30) NOT NULL,
  `company_contact_number` varchar(15) NOT NULL,
  `company_website` varchar(30) NOT NULL,
  `company_profile` varchar(250) NOT NULL,
  `vendor_username` varchar(30) NOT NULL,
  `vendor_password` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `turtle food`
--

CREATE TABLE `turtle food` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `turtle food`
--

INSERT INTO `turtle food` (`id`, `product_name`, `image`, `price`) VALUES
(1, 'Taiyo Turtle Food', 'Turtlefood.jpg', 250),
(2, 'ZooMed Natural Aquatic Turtle Food', 'turtlee.jfif', 175),
(3, 'Taiyo Baby Turtle Food', 'taiyo-baby-turtle-food-500x500.jpg', 120),
(4, 'Gourmet Repti Sticks for Turtles', 'Gourmet turtle food.jfif', 380);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `password`, `email`, `phone`, `gender`) VALUES
('admin', 'admin', 'admin@gmail.com', 2147483647, 'male'),
('test', 'test', 'test', 2147483647, 'female'),
('test', 'test', 'test', 2147483647, 'female'),
('test', 'test', 'test', 2147483647, 'female'),
('test', 'test', 'test', 2147483647, 'female'),
('test', 'test', 'test', 2147483647, 'female'),
('test', 'test', 'test', 2147483647, 'female'),
('Sadia', '123', 'sadiajeesanayesha@gmail.com', 567, 'female'),
('user1', '123', 'emp@gmail.com', 567, 'female'),
('mars', '123', 'mars@gmail.com', 2147483647, 'female'),
('price', '123', '181@gmail.com', 567, 'female'),
('marr', '123', 'sadiajeesanayesha@gmail.com', 567, 'female'),
('marr', '123', 'sadiajeesanayesha@gmail.com', 567, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `vacappointment`
--

CREATE TABLE `vacappointment` (
  `ownername` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `petname` varchar(40) NOT NULL,
  `petspecies` varchar(40) NOT NULL,
  `vet` varchar(40) NOT NULL,
  `reason` varchar(80) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacappointment`
--

INSERT INTO `vacappointment` (`ownername`, `email`, `petname`, `petspecies`, `vet`, `reason`, `number`) VALUES
('[value-1]', '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', 7),
('Ayesha', 'ayesha@gmail.com', 'Luna', 'cat', 'Dr. Bayezid', 'Vaccination', 16),
('Ayesha', 'ayesha@gmail.com', 'Luna', 'cat', 'Dr. Bayezid', 'Vaccination', 16),
('Ayesha', 'ayesha@gmail.com', 'Luna', 'cat', 'Dr. Bayezid', 'Vaccination', 16),
('Anjan', 'anjan@gmail.com', 'Nebula', 'dog', 'Dr. Bayezid', 'Deworming', 17),
('Anjan', 'anjan@gmail.com', 'Nebula', 'dog', 'Dr. Bayezid', 'Deworming', 17),
('Anjan', 'anjan@gmail.com', 'Nebula', 'dog', 'Dr. Bayezid', 'Deworming', 17),
('Anjan', 'anjan@gmail.com', 'Nebula', 'dog', 'Dr. Bayezid', 'Deworming', 17),
('owner', 'email', 'petname', 'petType', 'vet', 'reason', 0),
('owner', 'email', 'petname', 'petType', 'vet', 'reason', 0),
('owner', 'email', 'petname', 'petType', 'vet', 'reason', 0),
('owner', 'email', 'petname', 'petType', 'vet', 'reason', 0),
('owner', 'email', 'petname', 'petType', 'vet', 'reason', 0),
('owner', 'email', 'petname', 'petType', 'vet', 'reason', 0),
('owner', 'email', 'petname', 'petType', 'vet', 'reason', 0),
('owner', 'email', 'petname', 'petType', 'vet', 'reason', 0),
('employee', 'employee1@gmail.com', 'emp', 'vet1', 'cat', 'sick', 1619773336);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bird cage`
--
ALTER TABLE `bird cage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bird food`
--
ALTER TABLE `bird food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat accessories`
--
ALTER TABLE `cat accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat dry food`
--
ALTER TABLE `cat dry food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat grooming supplies`
--
ALTER TABLE `cat grooming supplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat treats`
--
ALTER TABLE `cat treats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dog accessories`
--
ALTER TABLE `dog accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dog dry food`
--
ALTER TABLE `dog dry food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dog grooming supplies`
--
ALTER TABLE `dog grooming supplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dog wet food`
--
ALTER TABLE `dog wet food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fish aquarium`
--
ALTER TABLE `fish aquarium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fish food`
--
ALTER TABLE `fish food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mother and kitten care`
--
ALTER TABLE `mother and kitten care`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mother and puppy care`
--
ALTER TABLE `mother and puppy care`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `pet_product_id` (`pet_product_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_pet`
--
ALTER TABLE `tbl_pet`
  ADD PRIMARY KEY (`pet_id`),
  ADD KEY `pet_category_id` (`pet_category_id`),
  ADD KEY `vendor_id` (`vendor_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_pet_category`
--
ALTER TABLE `tbl_pet_category`
  ADD PRIMARY KEY (`pet_category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_pet_product`
--
ALTER TABLE `tbl_pet_product`
  ADD PRIMARY KEY (`pet_product_id`),
  ADD KEY `product_category_id` (`product_category_id`),
  ADD KEY `vendor_id` (`vendor_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_pet_product_category`
--
ALTER TABLE `tbl_pet_product_category`
  ADD PRIMARY KEY (`product_category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `vendor_id` (`vendor_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_category_id` (`user_category_id`);

--
-- Indexes for table `tbl_user_group`
--
ALTER TABLE `tbl_user_group`
  ADD PRIMARY KEY (`user_group_id`);

--
-- Indexes for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `turtle food`
--
ALTER TABLE `turtle food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bird cage`
--
ALTER TABLE `bird cage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bird food`
--
ALTER TABLE `bird food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cat accessories`
--
ALTER TABLE `cat accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `cat dry food`
--
ALTER TABLE `cat dry food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cat grooming supplies`
--
ALTER TABLE `cat grooming supplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cat treats`
--
ALTER TABLE `cat treats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dog accessories`
--
ALTER TABLE `dog accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `dog dry food`
--
ALTER TABLE `dog dry food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `dog grooming supplies`
--
ALTER TABLE `dog grooming supplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dog wet food`
--
ALTER TABLE `dog wet food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `fish aquarium`
--
ALTER TABLE `fish aquarium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fish food`
--
ALTER TABLE `fish food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mother and kitten care`
--
ALTER TABLE `mother and kitten care`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mother and puppy care`
--
ALTER TABLE `mother and puppy care`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pet`
--
ALTER TABLE `tbl_pet`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pet_category`
--
ALTER TABLE `tbl_pet_category`
  MODIFY `pet_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pet_product`
--
ALTER TABLE `tbl_pet_product`
  MODIFY `pet_product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pet_product_category`
--
ALTER TABLE `tbl_pet_product_category`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1712303;

--
-- AUTO_INCREMENT for table `tbl_user_group`
--
ALTER TABLE `tbl_user_group`
  MODIFY `user_group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `turtle food`
--
ALTER TABLE `turtle food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD CONSTRAINT `tbl_customer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD CONSTRAINT `tbl_order_detail_ibfk_1` FOREIGN KEY (`pet_product_id`) REFERENCES `tbl_pet_product` (`pet_product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_detail_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_detail_ibfk_3` FOREIGN KEY (`vendor_id`) REFERENCES `tbl_vendor` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD CONSTRAINT `tbl_payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pet`
--
ALTER TABLE `tbl_pet`
  ADD CONSTRAINT `tbl_pet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pet_ibfk_2` FOREIGN KEY (`pet_category_id`) REFERENCES `tbl_pet_category` (`pet_category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pet_ibfk_3` FOREIGN KEY (`vendor_id`) REFERENCES `tbl_vendor` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pet_category`
--
ALTER TABLE `tbl_pet_category`
  ADD CONSTRAINT `tbl_pet_category_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pet_product`
--
ALTER TABLE `tbl_pet_product`
  ADD CONSTRAINT `tbl_pet_product_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pet_product_ibfk_2` FOREIGN KEY (`product_category_id`) REFERENCES `tbl_pet_product_category` (`product_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pet_product_category`
--
ALTER TABLE `tbl_pet_product_category`
  ADD CONSTRAINT `tbl_pet_product_category_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD CONSTRAINT `tbl_service_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_service_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `tbl_vendor` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`user_category_id`) REFERENCES `tbl_user_group` (`user_group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  ADD CONSTRAINT `tbl_vendor_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
