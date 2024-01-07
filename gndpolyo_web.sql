-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 04:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gndpolyo_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_auth_tokens`
--

CREATE TABLE `admin_auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `auth_type` varchar(255) NOT NULL,
  `selector` text NOT NULL,
  `token` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expires_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_auth_tokens`
--

INSERT INTO `admin_auth_tokens` (`id`, `user_email`, `auth_type`, `selector`, `token`, `created_at`, `expires_at`) VALUES
(136, 'crownbrahamjot2004@gmail.com', 'remember_me', 'd3dfbb25a789879d', '$2y$10$bDyyjE4xlmTI2Kq0rMUJ8.0pnCUMjX9x33nY52NbPAMXwl4AFotCm', '2023-05-07 11:14:23', '2023-05-17 07:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `admin_books`
--

CREATE TABLE `admin_books` (
  `Accession_No` bigint(25) NOT NULL,
  `Date` date NOT NULL,
  `Bill_No` varchar(16) NOT NULL,
  `Price` int(20) NOT NULL,
  `Book_Name` varchar(150) NOT NULL,
  `Author_Name` varchar(150) NOT NULL,
  `Publisher_Name` varchar(150) NOT NULL,
  `Place` varchar(100) NOT NULL,
  `Edition` varchar(10) NOT NULL,
  `Year` int(4) NOT NULL,
  `Volume` int(30) NOT NULL,
  `Pages` int(100) NOT NULL,
  `Dept_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_books`
--

INSERT INTO `admin_books` (`Accession_No`, `Date`, `Bill_No`, `Price`, `Book_Name`, `Author_Name`, `Publisher_Name`, `Place`, `Edition`, `Year`, `Volume`, `Pages`, `Dept_name`) VALUES
(1, '2023-02-13', 'cc202310010000', 1200, 'web development using php', 'ram singh', 'eagle prakashan', 'ludhiana', '1', 2019, 2, 300, 'CSE'),
(2, '2023-02-13', 'cc202310010001', 300, 'Microcomputer', 'mahesh', 'eagle prakashan', 'jalandhar', '1', 2023, 2, 305, 'CSE'),
(4, '2023-02-13', 'cc202310010003', 500, 'BUILDING STRUCTURE', 'rAMESH singh', 'eagle prakashan', 'ludhiana', '1', 2019, 1, 400, 'Civil'),
(5, '2023-02-13', 'cc202310010004', 100, 'PHYSICS', 'FARUK ABDULA', 'eagle prakashan', 'ludhiana', '3', 2019, 1, 490, 'AS'),
(6, '2023-02-13', 'cc202310010005', 200, 'SPARE PARTS STRUCTURE', 'HARINDER KHACH', 'GOOGLE PAY', 'ludhiana', '1', 2023, 1, 209, 'ME'),
(7, '2023-02-13', 'cc202310010006', 120, 'Tire manufacture', 'faruk sidhi', 'eagle prakashan', 'ludhiana', '1', 2023, 1, 120, 'AE'),
(8, '2023-03-09', 'cc202310010000', 120, 'Microprocessor', 'ram', 'eagle prakashan', 'ludhiana', '1', 2023, 1, 500, 'CSE'),
(9, '2023-04-25', 'cc202310010000', 123, 'The Great Gatsby', 'F. Scott Fitzgerald', 'abc', 'ludhiana', '1', 2023, 1, 123, 'Literature'),
(10, '2023-04-25', 'cc202310010009', 1200, 'web2', 'ag', 'ad', 'fsf', '1', 2021, 2, 1200, 'Reference');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `headline` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `profile_image` varchar(255) NOT NULL DEFAULT '_defaultUser.png',
  `verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `gender`, `headline`, `bio`, `profile_image`, `verified_at`, `created_at`, `updated_at`, `deleted_at`, `last_login_at`) VALUES
(0, 'supahot', 'supa@hot.com', '$2y$10$jhIOk4NVdBile/NwhAU9We/f0aoohx.cG9CizmIALRz0aCKJa5s6a', 'Supahot', 'Soverysupahot', 'm', 'Headline of a supa hot user', 'This is the bio of a supa hot user. Now i will say needless stuff to make this longer so this looks like a bio and not anything other than a bio.', '_defaultUser.png', NULL, '2022-11-20 15:56:49', '2022-11-20 15:56:49', NULL, NULL),
(31, 'brahamjot2004', 'brahmjot23@gndpoly.org', 'UPDATE `admin_users` SET `password` = `$2y$10$TbLnQHbLOTel/Vl59wxVluoCiH6Y1fvUh0y1u.DR5p8TclP7u4ANG`, `deleted_at` = NULL WHERE `admin_users`.`id` = 31;', 'Brahamjot', 'Singh', 'm', 'Test', 'Test', '_defaultUser.jpg', '2022-11-20 16:35:20', '2022-11-20 16:27:46', '2023-05-08 08:19:14', NULL, '2023-05-08 08:19:14'),
(32, 'gkshah23', 'gkshah23@gndpoly.org', '$2y$10$ERHIaVfAGVO89/T6/qHIcuoMuKEnKQr1kGvSKwUUpiajXwkB3nxPu', 'Gagan Kumar', 'Shah', NULL, NULL, NULL, '_defaultUser.png', '2023-05-07 11:45:10', '2023-05-07 11:24:58', '2023-05-08 08:37:34', NULL, '2023-05-08 08:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `branch_wise_book`
--

CREATE TABLE `branch_wise_book` (
  `Sr.No` int(50) NOT NULL,
  `Branch` varchar(150) NOT NULL,
  `Total_Books` int(50) NOT NULL,
  `Titles` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch_wise_book`
--

INSERT INTO `branch_wise_book` (`Sr.No`, `Branch`, `Total_Books`, `Titles`) VALUES
(1, 'Civil', 1872, 145),
(2, 'Elect.', 1932, 215),
(3, 'Mech. & Auto', 3081, 198),
(4, 'ECE', 2145, 245),
(5, 'Computer', 1933, 445),
(6, 'App. Sc.', 2201, 96),
(7, 'Gen. Books & Literature', 1051, 1051),
(8, 'Ref. Books', 1275, 332);

-- --------------------------------------------------------

--
-- Table structure for table `detail_of_journals`
--

CREATE TABLE `detail_of_journals` (
  `Sr.No` int(50) NOT NULL,
  `Detail_of_Journals` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_of_journals`
--

INSERT INTO `detail_of_journals` (`Sr.No`, `Detail_of_Journals`) VALUES
(1, 'Resonance'),
(2, 'Structure Engineering'),
(3, 'Electrical & Electronics Engg.'),
(4, 'Information Technology'),
(5, 'Computer Science'),
(6, 'Mechanical Engg.'),
(7, 'Telecommunication'),
(8, 'Indian  Safety Choronicle'),
(9, 'International Jr. of Industrial Production Engg. & Technology'),
(10, 'National Research Jr. of Mechanical Engg. & Technology'),
(11, 'National Research Jr. of Electrical Engg.'),
(12, 'National Research Jr. of Electronics & Communication Engg.'),
(13, 'Research & Review in Power Energy System Control Engg.'),
(14, 'National Research Jr. of Advance Civil Engg.'),
(15, 'National Research Jr. of Advance Structural System Engg.'),
(16, '	Internaltional Jr. of Mobile Computing & Applications'),
(17, 'National Research Jr. of Computer Network Technology'),
(18, 'National Research Jr. of Pure & Applied Physics & its Application'),
(19, 'National Research Jr. of Applied Civil Engg.'),
(20, '	Indian Jr. of Technical Education');

-- --------------------------------------------------------

--
-- Table structure for table `detail_of_newspaper`
--

CREATE TABLE `detail_of_newspaper` (
  `Sr.No` int(50) NOT NULL,
  `Detai_of_Newspaper` varchar(150) NOT NULL,
  `Language` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_of_newspaper`
--

INSERT INTO `detail_of_newspaper` (`Sr.No`, `Detai_of_Newspaper`, `Language`) VALUES
(1, 'The Tribune', 'English'),
(2, 'Indian Express', 'English'),
(3, 'Hindustan Times', 'English'),
(4, 'Ajit', 'Punjabi'),
(5, 'Jagbani', 'Punjabi'),
(6, 'Punjabi Times', 'Punjabi'),
(7, 'Danik Jagran', 'Hindi');

-- --------------------------------------------------------

--
-- Table structure for table `detail_of_non_tech_magazines`
--

CREATE TABLE `detail_of_non_tech_magazines` (
  `Sr.No` int(50) NOT NULL,
  `Tech_Maganzines` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_of_non_tech_magazines`
--

INSERT INTO `detail_of_non_tech_magazines` (`Sr.No`, `Tech_Maganzines`) VALUES
(1, 'Junior Science Refreher'),
(2, 'Competition Sucess Review'),
(3, 'Chronicle'),
(4, 'Fathima'),
(5, 'G.K Today'),
(6, 'Sport Star'),
(7, 'Yojana'),
(8, 'Mulazam Lehar'),
(9, 'Pratiyogita Darpan'),
(10, 'Sada Vishwash Sada Gorev'),
(11, 'Bahumatwi Kerthi'),
(12, 'Suchiten'),
(13, 'Cosmic faith');

-- --------------------------------------------------------

--
-- Table structure for table `detail_of_tech_magazines`
--

CREATE TABLE `detail_of_tech_magazines` (
  `Sr.No` int(50) NOT NULL,
  `Tech_Maganzines` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_of_tech_magazines`
--

INSERT INTO `detail_of_tech_magazines` (`Sr.No`, `Tech_Maganzines`) VALUES
(1, 'Digit'),
(2, 'P.C QUEST'),
(3, 'Over Drive'),
(4, 'Electronic for U'),
(5, 'Down to Earth'),
(6, 'Employment News');

-- --------------------------------------------------------

--
-- Table structure for table `fine_security`
--

CREATE TABLE `fine_security` (
  `Sr_no` int(11) NOT NULL,
  `s_key` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fine_security`
--

INSERT INTO `fine_security` (`Sr_no`, `s_key`) VALUES
(1, 'gagan123');

-- --------------------------------------------------------

--
-- Table structure for table `footerlinks`
--

CREATE TABLE `footerlinks` (
  `sno` int(255) NOT NULL,
  `linkname` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footerlinks`
--

INSERT INTO `footerlinks` (`sno`, `linkname`, `link`) VALUES
(1, 'Administration', 'Administration9.php'),
(2, 'Alumni', 'Alumni8.php'),
(3, 'Contact', 'Contact6.php'),
(4, 'Mandatory Disclosure', 'MandatoryDisclosure5.php'),
(5, 'Anti-Ragging', 'Anti-Ragging8.php'),
(6, 'Hostel', 'Hostel5.php'),
(7, 'Training and Placement Cell', 'TrainingandPlacementCell8.php'),
(8, 'Placements', 'Placements6.php'),
(9, 'PMKVY', 'PMYK3.php'),
(10, 'CDTP', 'CDTP3.php'),
(11, 'Guru Nanak Dev ITI', 'http://gnditi.gndpoly.org'),
(12, 'Swayam: MOOCS Courses', 'https://swayam.gov.in/'),
(13, 'Complaint Cell', 'files/complaint_cell.pdf'),
(14, 'College Map', 'CollegeMap2.php'),
(15, 'Skill Training Center', 'http://stc.gndpoly.org');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `Student_Id` bigint(10) NOT NULL,
  `Roll_No` int(10) NOT NULL,
  `S_Name` varchar(100) NOT NULL,
  `Dept` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Issue_Date` date NOT NULL,
  `Due_Date` date NOT NULL,
  `Accession_No` int(25) NOT NULL,
  `Book_Name` varchar(150) NOT NULL,
  `Author_Name` varchar(150) NOT NULL,
  `Publisher_Name` varchar(150) NOT NULL,
  `Edition` varchar(10) NOT NULL,
  `Year` int(4) NOT NULL,
  `Volume` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `library_membership_form`
--

CREATE TABLE `library_membership_form` (
  `mem_no` int(11) NOT NULL,
  `Date` date NOT NULL,
  `S_Name` varchar(100) NOT NULL,
  `F_Name` varchar(100) NOT NULL,
  `Mobile_Number` bigint(30) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Semester` int(50) NOT NULL,
  `Academic_Year` int(50) NOT NULL,
  `Roll_Number` int(50) NOT NULL,
  `Registration_Number` bigint(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Full_Address` varchar(300) NOT NULL,
  `Student_Profile` varchar(300) NOT NULL,
  `Student_Id` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library_membership_form`
--

INSERT INTO `library_membership_form` (`mem_no`, `Date`, `S_Name`, `F_Name`, `Mobile_Number`, `Department`, `Semester`, `Academic_Year`, `Roll_Number`, `Registration_Number`, `email`, `Category`, `Full_Address`, `Student_Profile`, `Student_Id`) VALUES
(1, '2023-05-08', 'QWERTYUIOP', 'ASDFGHJKL', 9855930504, 'CSE', 1, 2023, 1014, 200179501802, 'brahmjot23@gndpoly.org', 'GENERAL', 'QWERTYUIOPPLKJHGFDSAZXCVBNM', '_DSC0905.jpg', 101423);

-- --------------------------------------------------------

--
-- Table structure for table `lib_news`
--

CREATE TABLE `lib_news` (
  `sr_no` bigint(10) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lib_news`
--

INSERT INTO `lib_news` (`sr_no`, `date`, `title`, `description`) VALUES
(2, '2023-04-11', 'gndpoly addmission ', 'Helloooo');

-- --------------------------------------------------------

--
-- Table structure for table `pay_fine`
--

CREATE TABLE `pay_fine` (
  `Sr_no` bigint(50) NOT NULL,
  `Student_Id` bigint(10) NOT NULL,
  `Roll_No` int(10) NOT NULL,
  `S_Name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Dept` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Category` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Issue_Date` date NOT NULL,
  `Due_Date` date NOT NULL,
  `Return_Date` date NOT NULL,
  `Accession_No` int(25) NOT NULL,
  `Book_Name` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `Author_Name` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `Publisher_Name` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `Edition` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `Year` int(4) NOT NULL,
  `Volume` int(30) NOT NULL,
  `fine` double NOT NULL,
  `fine_type` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Invoice_Id` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `Fine_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pay_fine`
--

INSERT INTO `pay_fine` (`Sr_no`, `Student_Id`, `Roll_No`, `S_Name`, `Dept`, `Category`, `Issue_Date`, `Due_Date`, `Return_Date`, `Accession_No`, `Book_Name`, `Author_Name`, `Publisher_Name`, `Edition`, `Year`, `Volume`, `fine`, `fine_type`, `Invoice_Id`, `Fine_Status`) VALUES
(1, 100123, 1001, 'ABHISHEK PANDEY', 'CSE', 'GENERAL', '2023-05-04', '2023-05-18', '2023-05-04', 8, 'Microprocessor', 'ram', 'eagle prakashan', '1', 2023, 1, 0, 'SC/ST', 'LIB040523018', ''),
(1, 100123, 1001, 'ABHISHEK PANDEY', 'CSE', 'GENERAL', '2023-05-04', '2023-05-18', '2023-05-04', 8, 'Microprocessor', 'ram', 'eagle prakashan', '1', 2023, 1, 0, 'SC/ST', 'LIB040523018', 'PAID');

-- --------------------------------------------------------

--
-- Table structure for table `return_book`
--

CREATE TABLE `return_book` (
  `Sr_no` bigint(50) NOT NULL,
  `Student_Id` bigint(10) NOT NULL,
  `Roll_No` int(10) NOT NULL,
  `S_Name` varchar(100) NOT NULL,
  `Dept` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Issue_Date` date NOT NULL,
  `Due_Date` date NOT NULL,
  `Return_Date` date NOT NULL,
  `Accession_No` int(25) NOT NULL,
  `Book_Name` varchar(150) NOT NULL,
  `Author_Name` varchar(150) NOT NULL,
  `Publisher_Name` varchar(150) NOT NULL,
  `Edition` varchar(10) NOT NULL,
  `Year` int(4) NOT NULL,
  `Volume` int(30) NOT NULL,
  `fine` double NOT NULL,
  `fine_type` varchar(50) NOT NULL,
  `Invoice_Id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_book`
--

INSERT INTO `return_book` (`Sr_no`, `Student_Id`, `Roll_No`, `S_Name`, `Dept`, `Category`, `Issue_Date`, `Due_Date`, `Return_Date`, `Accession_No`, `Book_Name`, `Author_Name`, `Publisher_Name`, `Edition`, `Year`, `Volume`, `fine`, `fine_type`, `Invoice_Id`) VALUES
(1, 100123, 1001, 'ABHISHEK PANDEY', 'CSE', 'GENERAL', '2023-05-04', '2023-05-18', '2023-05-04', 8, 'Microprocessor', 'ram', 'eagle prakashan', '1', 2023, 1, 0, 'NO_FINE', 'LIB040523018');

-- --------------------------------------------------------

--
-- Table structure for table `stu_auth_tokens`
--

CREATE TABLE `stu_auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `auth_type` varchar(255) NOT NULL,
  `selector` text NOT NULL,
  `token` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expires_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu_auth_tokens`
--

INSERT INTO `stu_auth_tokens` (`id`, `user_email`, `auth_type`, `selector`, `token`, `created_at`, `expires_at`) VALUES
(66, 'brahmjot23@gndpoly.org', 'remember_me', 'aead8e9dcbda5af7', '$2y$10$BnlNIz3V0M2cQcFgh.O/M.VV2vAM7U8XxjGkUwbHmqxcqVXswEhsa', '2023-05-07 18:58:38', '2023-05-17 15:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `stu_users`
--

CREATE TABLE `stu_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `headline` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `profile_image` varchar(255) NOT NULL DEFAULT '_defaultUser.png',
  `verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu_users`
--

INSERT INTO `stu_users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `gender`, `headline`, `bio`, `profile_image`, `verified_at`, `created_at`, `updated_at`, `deleted_at`, `last_login_at`) VALUES
(31, 'brahamjot2004', 'brahmjot23@gndpoly.org', '$2y$10$TbLnQHbLOTel/Vl59wxVluoCiH6Y1fvUh0y1u.DR5p8TclP7u4ANG', '', '', NULL, '', '', '_defaultUser.png', '2023-05-07 18:38:57', '2023-05-07 18:21:58', '2023-05-07 18:58:38', NULL, '2023-05-07 18:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `total_book`
--

CREATE TABLE `total_book` (
  `SR_NO` int(50) NOT NULL,
  `Total_No_of_Books` varchar(150) NOT NULL,
  `Counting` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `total_book`
--

INSERT INTO `total_book` (`SR_NO`, `Total_No_of_Books`, `Counting`) VALUES
(1, 'Engg. & Tech. Books', 15490),
(2, 'Basic Sc. & Engg. Sc.', 13207),
(3, 'Books on Comm. Skills Mgt. & Standard General Reading', 2282);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_auth_tokens`
--
ALTER TABLE `admin_auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `admin_books`
--
ALTER TABLE `admin_books`
  ADD PRIMARY KEY (`Accession_No`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id` (`id`,`username`,`email`);

--
-- Indexes for table `footerlinks`
--
ALTER TABLE `footerlinks`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `library_membership_form`
--
ALTER TABLE `library_membership_form`
  ADD PRIMARY KEY (`Student_Id`);

--
-- Indexes for table `stu_auth_tokens`
--
ALTER TABLE `stu_auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `stu_users`
--
ALTER TABLE `stu_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id` (`id`,`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_auth_tokens`
--
ALTER TABLE `admin_auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `footerlinks`
--
ALTER TABLE `footerlinks`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `stu_auth_tokens`
--
ALTER TABLE `stu_auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `stu_users`
--
ALTER TABLE `stu_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
