-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 07:26 PM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `Id` int(100) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Password` int(200) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`Id`, `UserName`, `Password`, `role_as`) VALUES
(3, 'aa', 123, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(255) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `FirstName`, `LastName`, `Email`, `Message`) VALUES
(7, 'khan', 'jawwad', 'jawwad@gmail.com', 'please guide me more about your firm'),
(9, 'muhammad ', 'Jawwad Khan', 'jawwad@gmail.com', 'My name is khan i am only one');

-- --------------------------------------------------------

--
-- Table structure for table `coursecategory`
--

CREATE TABLE `coursecategory` (
  `Id` int(255) NOT NULL,
  `CourseIcon` varchar(200) NOT NULL,
  `CourseName` varchar(200) NOT NULL,
  `CourseDescription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coursecategory`
--

INSERT INTO `coursecategory` (`Id`, `CourseIcon`, `CourseName`, `CourseDescription`) VALUES
(10, 'study-6684423_1280.jpg', 'English Language', 'Available'),
(11, 'IELTS-Text.png', 'IELTS', 'Upcoming'),
(14, 'training-7408255_1280.jpg', 'MsOffice', 'Upcoming'),
(15, 'images.png', 'O&A Level', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `courses_detail`
--

CREATE TABLE `courses_detail` (
  `Id` int(255) NOT NULL,
  `course_pic` varchar(200) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses_detail`
--

INSERT INTO `courses_detail` (`Id`, `course_pic`, `course_name`, `course_status`) VALUES
(32, 'study-6684423_1280.jpg', 'English Language', 'Available'),
(33, 'IELTS-Text.png', 'IELTS', 'Upcoming'),
(35, 'training-7408255_1280.jpg', 'MsWord Course', 'Upcoming');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `Id` int(11) NOT NULL,
  `faqQuest` varchar(100) NOT NULL,
  `faqAnswer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`Id`, `faqQuest`, `faqAnswer`) VALUES
(6, 'How can I enroll in courses offered by your educational firm?', 'Enrolling in our courses is a straightforward process. Simply follow these steps:'),
(7, ' What learning resources and support can I expect during my enrollment in your courses?', 'We understand that successful learning requires more than just access to course materials. That is why we are committed to providing you with a comprehensive support system and a wide range of learning resources throughout your enrollment. '),
(8, 'How can I access course materials and resources after enrolling in a course?', 'This question addresses a common concern for students who want to know how they can access the materials they need for their courses.'),
(9, ' What types of learning formats do you offer for your courses?', 'This question is aimed at providing prospective students with information about the various learning formats available, which could include in-person classes, online courses, blended learning options, etc.       '),
(10, 'How do I register for courses offered by your educational firm?', 'This question addresses the process of registration, which is a common inquiry among prospective students.'),
(11, 'Can I receive certification upon completing your courses?', 'This question addresses the potential for certification, which is often an important consideration for individuals seeking to enhance their credentials or advance their careers through education.\r\n\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `Id` int(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Fathername` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `schoolname` varchar(255) NOT NULL,
  `Phone` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `agree` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`Id`, `photo`, `Firstname`, `Lastname`, `Fathername`, `Email`, `class`, `schoolname`, `Phone`, `city`, `address`, `age`, `DOB`, `gender`, `agree`) VALUES
(1, '', 'dfs', 'gdf', 'dfgf', 'ab@gmail.com', '12', 'dfdsfsdf', 21474836, 'Karachi', 'aSAS', 12, '2024-01-17', 'on', 0),
(2, '', 'dfs', 'gdf', 'dfgf', 'kh@gmail.com', '12', 'dfdsfsdf', 54354, 'Karachi', 'MT khan road near new haji camp, Sultanabad, Karachi', 12, '2024-01-19', 'on', 0),
(3, 'code-g32ca37dbd_1920.jpg', 'dfs', 'gdf', 'dfgf', 'ab@gmail.com', '12', 'dfdsfsdf', 21474836, 'Karachi', 'MT khan road near new haji camp, Sultanabad, Karachi', 12, '2024-01-19', 'on', 0),
(4, 'b7f7e29f-b6bc-494b-a016-e576ce75a37c.jpg', 'dfs', 'gdf', 'dfgf', 'jawwad@gmail.com', '12', 'dfdsfsdf', 1234, 'Karachi', 'zXZXZX', 12, '2024-01-15', 'on', 0),
(5, 'code-g32ca37dbd_1920.jpg', 'Mark', 'gdf', 'dfgf', 'jawwad@gmail.com', '12', 'dfdsfsdf', 21474836, 'Karachi', 'zXZXZX', 23, '2024-01-11', '', 0),
(6, 'b7f7e29f-b6bc-494b-a016-e576ce75a37c.jpg', 'dfs', 'gdf', 'dfgf', 'jawwad@gmail.com', '12', 'dfdsfsdf', 54354354, 'Karachi', 'aSAS', 66, '2024-01-10', 'on', 0),
(7, '', '', '', '', '', '', '', 0, '', '', 0, '0000-00-00', '', 0),
(8, '', '', '', '', '', '', '', 0, '', '', 0, '0000-00-00', 'on', 0),
(9, 'b7f7e29f-b6bc-494b-a016-e576ce75a37c.jpg', 'Muhammad', 'Jawwad', 'Muhammad Khan', 'jawwadkhan09@gmail.com', '14', 'star academy school', 2147483647, 'Karachi', 'new haji camp', 23, '2024-01-10', 'on', 0),
(10, 'random-counter-jquery-plugin-460x230.png', 'dfs', 'gdf', 'dfgf', 'ab@gmail.com', '12', 'dfdsfsdf', 21474836, 'Karachi', 'uyuyykjkjbknl', 121, '2024-01-10', 'on', 0),
(11, 'random-counter-jquery-plugin-460x230.png', 'dfs', 'gdf', 'dfgf', 'jawwad@gmail.com', '12', 'dfdsfsdf', 21474836, 'Karachi', 'uyuyykjkjbknl', 12, '2024-01-10', 'on', 0),
(12, '', '', '', '', '', '', '', 0, '', '', 0, '0000-00-00', '', 0),
(13, '', '', '', '', '', '', '', 0, '', '', 0, '0000-00-00', 'on', 0),
(14, 'random-counter-jquery-plugin-460x230.png', 'dfs', 'gdf', 'dfgf', 'jawwad@gmail.com', '12', 'dfdsfsdf', 21474836, 'Karachi', 'uyuyykjkjbknl', 23, '2024-02-02', 'on', 0),
(15, 'random-counter-jquery-plugin-460x230.png', 'dfs', 'gdf', 'dfgf', 'jawwad@gmail.com', '34', 'dfdsfsdf', 2147483647, 'Karachi', 'uyuyykjkjbknl', 34, '2024-01-10', 'on', 0),
(16, 'random-counter-jquery-plugin-460x230.png', 'dfs', 'gdf', 'dfgf', 'jawwad@gmail.com', '', '', 0, '', '', 0, '0000-00-00', '', 0),
(17, 'random-counter-jquery-plugin-460x230.png', 'dfs', 'gdf', 'dfgf', 'jawwadk638@gmail.com', '', '', 0, '', '', 0, '0000-00-00', '', 0),
(18, 'random-counter-jquery-plugin-460x230.png', 'dfs', 'gdf', 'dfgf', 'jawwad@gmail.com', '', '', 0, '', '', 0, '0000-00-00', '', 0),
(19, 'random-counter-jquery-plugin-460x230.png', 'dfs', 'gdf', 'dfgf', 'jawwadk638@gmail.com', '', '', 0, '', '', 0, '0000-00-00', '', 0),
(20, 'random-counter-jquery-plugin-460x230.png', 'dfs', 'gdf', 'dfgf', 'jawwad12@gmail.com', '', '', 0, '', '', 0, '0000-00-00', '', 0),
(21, 'random-counter-jquery-plugin-460x230.png', 'dfs', 'gdf', 'dfgf', 'ab@gmail.com', '', '', 0, '', '', 0, '0000-00-00', '', 0),
(22, 'random-counter-jquery-plugin-460x230.png', 'dfs', 'gdf', 'dfgf', 'jawwad@gmail.com', '', '', 0, '', '', 0, '0000-00-00', '', 0),
(23, 'random-counter-jquery-plugin-460x230.png', 'dfs', 'gdf', 'dfgf', 'kh@gmail.com', '', '', 0, '', '', 0, '0000-00-00', '', 0),
(24, 'random-counter-jquery-plugin-460x230.png', 'dfs', 'gdf', 'dfgf', 'jawwad@gmail.com', '', '', 0, '', '', 0, '0000-00-00', '', 0),
(25, 'scrnli_1_30_2024_10-51-43 PM.png', 'Mark', 'gdf', 'dfgf', 'jawwad@gmail.com', '12', 'dfdsfsdf', 21474836, '12', 'MT khan road near new haji camp, Sultanabad, Karachi', 12, '2024-01-03', '', 0),
(26, 'scrnli_1_30_2024_10-51-43 PM.png', 'dfs', 'gdf', 'dfgf', 'jawwadk63@gmail.com', '123', 'dfdsfsdf', 2147483647, '12', 'aSAS', 23, '2024-01-17', 'on', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsales`
--

CREATE TABLE `newsales` (
  `Id` int(255) NOT NULL,
  `Sales` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsales`
--

INSERT INTO `newsales` (`Id`, `Sales`) VALUES
(3, '50% Off for New users');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Id` int(255) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Id`, `Name`, `Email`, `Password`) VALUES
(1, 'khan', 'khan@gmail.com', '123'),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, 'khan', 'jawwad@gmail.com', '123'),
(6, 'jawwad', 'jawwad@gmail.com', '123'),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, 'Mark Geragos', 'ab@gmail.com', '321'),
(11, 'ab', 'ss@gmail.com', '12'),
(12, 'khan', 'lallu@mail.com', '11'),
(13, 'jawwad', '12@', '12'),
(14, 'khan', '1@', '12'),
(15, 'khan', 'jawwadk638@gmail.com', '12'),
(16, 'ab', 'ab12', '123'),
(17, 'Malik', 'malik@gmail.com', '123'),
(18, 'Malik', 'singwithabid@gmail.com', '123'),
(19, 'Abid khan', '123', '123'),
(20, 'ly', 'ly@', '12'),
(21, 'David has', 'davidhessi@gmail.com', '123'),
(22, 'Anjum', 'Anjum@', '432'),
(23, 'khan', 'khank@gma', '123'),
(24, 'as', 'as@', '11'),
(25, 'khan', '34@', '21'),
(26, 'khan', '45@', '12'),
(27, '1234f', '76@', '54');

-- --------------------------------------------------------

--
-- Table structure for table `studenttable`
--

CREATE TABLE `studenttable` (
  `Id` int(100) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `FatherName` varchar(200) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `Class` int(100) NOT NULL,
  `Fees` int(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studenttable`
--

INSERT INTO `studenttable` (`Id`, `Name`, `FatherName`, `PhoneNumber`, `Class`, `Fees`, `status`) VALUES
(13, 'khan', 'fsdfd', '123435678', 4, 3000, 1),
(14, 'khan', 'fsdfd', '23121342', 23, 21321, 1),
(15, 'khan', 'fsdfd', '12345', 12, 22, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teammember`
--

CREATE TABLE `teammember` (
  `Id` int(255) NOT NULL,
  `MemberPhoto` varchar(255) NOT NULL,
  `MemberName` varchar(255) NOT NULL,
  `MemberExperties` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teammember`
--

INSERT INTO `teammember` (`Id`, `MemberPhoto`, `MemberName`, `MemberExperties`) VALUES
(6, 'man.png', 'Muhammad Jawwad', 'Teacher'),
(7, 'user.png', 'Shahmeer', 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `coursecategory`
--
ALTER TABLE `coursecategory`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `courses_detail`
--
ALTER TABLE `courses_detail`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `newsales`
--
ALTER TABLE `newsales`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `studenttable`
--
ALTER TABLE `studenttable`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teammember`
--
ALTER TABLE `teammember`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `coursecategory`
--
ALTER TABLE `coursecategory`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `courses_detail`
--
ALTER TABLE `courses_detail`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `newsales`
--
ALTER TABLE `newsales`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `studenttable`
--
ALTER TABLE `studenttable`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teammember`
--
ALTER TABLE `teammember`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
