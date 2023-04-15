-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: bjzzesbzxmdkjy99zjrn-mysql.services.clever-cloud.com:3306
-- Generation Time: Apr 15, 2023 at 05:51 PM
-- Server version: 8.0.22-13
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bjzzesbzxmdkjy99zjrn`
--

-- --------------------------------------------------------

--
-- Table structure for table `Comment`
--

CREATE TABLE `Comment` (
  `CommentID` int NOT NULL,
  `CommentContent` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `StaffID` int NOT NULL,
  `IdeaID` int NOT NULL,
  `is_anonymous` tinyint(1) NOT NULL DEFAULT '0',
  `CommentDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Comment`
--

INSERT INTO `Comment` (`CommentID`, `CommentContent`, `StaffID`, `IdeaID`, `is_anonymous`, `CommentDate`) VALUES
(1, 'Good Idea', 15, 1, 0, '2023-04-15 17:40:42'),
(2, 'Good idea', 15, 4, 0, '2023-04-15 17:40:56'),
(3, 'Nice', 15, 2, 0, '2023-04-15 17:41:04'),
(4, 'Nice', 15, 5, 0, '2023-04-15 17:42:09'),
(5, 'Good', 15, 1, 0, '2023-04-15 17:46:57'),
(6, 'Nice', 15, 1, 0, '2023-04-15 17:47:16'),
(7, 'Nice', 32, 15, 0, '2023-04-15 17:49:01'),
(8, 'Nice', 32, 1, 0, '2023-04-15 17:50:31'),
(9, 'Nice idea', 32, 19, 0, '2023-04-15 17:51:37'),
(10, 'Good', 32, 2, 0, '2023-04-15 17:52:53'),
(11, 'Good', 16, 20, 1, '2023-04-15 19:24:11'),
(12, 'Good Idea!', 16, 21, 0, '2023-04-15 19:38:38'),
(13, 'Amazing', 16, 21, 0, '2023-04-15 19:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `Deadline`
--

CREATE TABLE `Deadline` (
  `DeadlineID` int NOT NULL,
  `ClosureDate` datetime NOT NULL,
  `FinalClosureDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Deadline`
--

INSERT INTO `Deadline` (`DeadlineID`, `ClosureDate`, `FinalClosureDate`) VALUES
(1, '2023-05-27 20:42:00', '2023-07-15 20:42:00'),
(2, '2023-04-15 20:45:00', '2023-06-09 20:45:00'),
(3, '2023-04-02 20:46:00', '2023-04-15 20:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE `Department` (
  `DepartmentID` int NOT NULL,
  `DepartmentName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Department`
--

INSERT INTO `Department` (`DepartmentID`, `DepartmentName`) VALUES
(1, 'Academy'),
(2, 'Office of Student Affairs'),
(3, 'Marketing'),
(4, 'Support'),
(5, 'IT'),
(6, 'Finance');

-- --------------------------------------------------------

--
-- Table structure for table `Document`
--

CREATE TABLE `Document` (
  `DocumentID` int NOT NULL,
  `DocumentPath` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `IdeaID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Document`
--

INSERT INTO `Document` (`DocumentID`, `DocumentPath`, `IdeaID`) VALUES
(1, 'uploads/643abe2f31dd5.pdf', 2),
(2, 'uploads/643ac5ae6bc7d.pdf', 5),
(3, 'uploads/643ac65a1e6f1.pdf', 8),
(4, 'uploads/643ac673916ef.pdf', 9),
(5, 'uploads/643ac74d5ae79.pdf', 14),
(6, 'uploads/643ac78a33303.pdf', 16),
(7, 'uploads/643ac7ba921cf.pdf', 17),
(8, 'uploads/643ac7ff3c663.pdf', 19),
(9, 'uploads/643ac86ea6665.pdf', 20);

-- --------------------------------------------------------

--
-- Table structure for table `Idea`
--

CREATE TABLE `Idea` (
  `IdeaID` int NOT NULL,
  `Title` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Content` longtext NOT NULL,
  `is_anonymous` tinyint(1) NOT NULL DEFAULT '0',
  `PostDate` datetime NOT NULL,
  `StaffID` int NOT NULL,
  `TopicID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Idea`
--

INSERT INTO `Idea` (`IdeaID`, `Title`, `Content`, `is_anonymous`, `PostDate`, `StaffID`, `TopicID`) VALUES
(1, 'Campus Facilities Management System ', 'A system that manages the maintenance and upkeep of campus buildings and facilities, including work order management, asset tracking, and preventative maintenance planning.', 1, '2023-04-15 17:01:14', 9, 7),
(2, 'Faculty and Staff Directory', 'A searchable directory that provides contact information for faculty and staff members, including photos, areas of expertise, and office hours.', 0, '2023-04-15 17:09:35', 9, 9),
(3, 'Campus Safety and Security App ', 'An app that provides students with real-time alerts and updates on campus safety and security issues, including emergency notifications, crime reports, and weather alerts.', 1, '2023-04-15 17:11:05', 9, 9),
(4, 'Career Services Platform', 'A platform that provides students with access to job postings, career counseling, resume review services, and other resources to help them prepare for and secure employment after graduation.', 0, '2023-04-15 17:39:43', 10, 4),
(5, 'Online Learning Management System', 'A system that supports online course delivery and facilitates the creation and sharing of course content, assessments, and feedback.', 1, '2023-04-15 17:41:34', 15, 4),
(6, 'Student Financial Aid Portal ', 'A portal that provides students with a comprehensive view of their financial aid options, including grants, loans, and scholarships, as well as resources for budgeting and managing their finances.', 0, '2023-04-15 17:41:53', 15, 4),
(7, 'Campus Event Management System', 'A system that allows student organizations and campus departments to schedule and promote events, manage attendance, and collect feedback from attendees, all in one centralized platform.', 0, '2023-04-15 17:43:53', 15, 4),
(8, 'Automated Course Registration System ', 'A system that streamlines the course registration process for students by allowing them to search for and register for courses online, with real-time updates on course availability and scheduling conflicts.', 1, '2023-04-15 17:44:26', 15, 5),
(9, 'Student Performance Tracking System', 'A system that tracks and analyzes student performance data, including grades, attendance, and participation, to help faculty and advisors identify areas where students may be struggling and provide targeted support.\r\n', 1, '2023-04-15 17:44:51', 15, 6),
(10, 'Campus Event Management System', 'A system that allows student organizations and campus departments to schedule and promote events, manage attendance, and collect feedback from attendees, all in one centralized platform.', 0, '2023-04-15 17:45:06', 15, 6),
(11, 'Student Financial Aid Portal', 'Student Financial Aid Portal - A portal that provides students with a comprehensive view of their financial aid options, including grants, loans, and scholarships, as well as resources for budgeting and managing their finances.', 0, '2023-04-15 17:45:26', 15, 6),
(12, 'Student Financial Aid Portal', 'A portal that provides students with a comprehensive view of their financial aid options, including grants, loans, and scholarships, as well as resources for budgeting and managing their finances.', 0, '2023-04-15 17:45:47', 15, 1),
(13, 'Student Financial Aid Portal ', 'A portal that provides students with a comprehensive view of their financial aid options, including grants, loans, and scholarships, as well as resources for budgeting and managing their finances.', 0, '2023-04-15 17:46:11', 15, 3),
(14, 'Student Financial Aid Portal', 'A portal that provides students with a comprehensive view of their financial aid options, including grants, loans, and scholarships, as well as resources for budgeting and managing their finances.', 0, '2023-04-15 17:48:29', 32, 2),
(15, 'Student Financial Aid Portal ', 'A portal that provides students with a comprehensive view of their financial aid options, including grants, loans, and scholarships, as well as resources for budgeting and managing their finances.', 0, '2023-04-15 17:48:48', 32, 2),
(16, 'Student Financial Aid Portal', 'A portal that provides students with a comprehensive view of their financial aid options, including grants, loans, and scholarships, as well as resources for budgeting and managing their finances.', 0, '2023-04-15 17:49:30', 32, 3),
(17, 'Tutoring Management System ', 'A system that manages the tutor-tutee matching process, schedules tutoring sessions, and provides resources to tutors and tutees.', 0, '2023-04-15 17:50:18', 32, 7),
(18, 'Faculty and Staff Directory', ' A searchable directory that provides contact information for faculty and staff members, including photos, areas of expertise, and office hours.\r\nCampus Facilities Management System - A system that manages the maintenance and upkeep of campus buildings and facilities, including work order management, asset tracking, and preventative maintenance planning.', 0, '2023-04-15 17:51:00', 32, 8),
(19, 'Campus Safety and Security App', 'An app that provides students with real-time alerts and updates on campus safety and security issues, including emergency notifications, crime reports, and weather alerts.', 1, '2023-04-15 17:51:27', 32, 8),
(20, 'Faculty and Staff Directory ', 'A searchable directory that provides contact information for faculty and staff members, including photos, areas of expertise, and office hours.', 0, '2023-04-15 17:53:18', 32, 9),
(21, 'Campus Facilities Management System', 'A system that manages the maintenance and upkeep of campus buildings and facilities, including work order management, asset tracking, and preventative maintenance planning.', 1, '2023-04-15 19:25:38', 16, 9);

-- --------------------------------------------------------

--
-- Table structure for table `Role`
--

CREATE TABLE `Role` (
  `RoleID` int NOT NULL,
  `RoleName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Role`
--

INSERT INTO `Role` (`RoleID`, `RoleName`) VALUES
(1, 'Quality Assurance Manager (QAM)'),
(2, 'Quality Assurance Coordinator(QAC)'),
(3, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `StaffID` int NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` text NOT NULL,
  `RoleID` int NOT NULL,
  `DepartmentID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`StaffID`, `FullName`, `Email`, `Password`, `RoleID`, `DepartmentID`) VALUES
(1, 'Quality Assurance Manager', 'QAM.greenwich@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 1, 1),
(2, 'Quality Assurance Coordinator Academy', 'chiluan6601@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 1),
(3, 'Quality Assurance Coordinator Office ', 'qac2@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 2),
(4, 'Quality Assurance Coordinator Marketing', 'qac3@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 3),
(5, 'Quality Assurance Coordinator Support', 'qac4@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 4),
(6, 'Quality Assurance Coordinator IT', 'qac5@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 5),
(7, 'Quality Assurance Coordinator Finance', 'qac6@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 2, 6),
(8, 'Staff 1', 'staff1@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 1),
(9, 'Staff 2', 'staff2@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 1),
(10, 'Staff 3', 'staff3@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 1),
(11, 'Staff 4', 'staff4@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 1),
(12, 'Staff 5', 'staff5@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 1),
(13, 'Staff 6', 'staff6@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 1),
(14, 'Staff 7', 'staff7@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 1),
(15, 'Staff 8', 'staff8@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 1),
(16, 'Staff 9', 'staff9@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 2),
(17, 'Staff 10', 'staff10@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 2),
(18, 'Staff 11', 'staff11@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 2),
(19, 'Staff 12', 'staff12@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 2),
(20, 'Staff 13', 'staff13@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 2),
(21, 'Staff 14', 'staff14@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 2),
(22, 'Staff 15', 'staff15@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 2),
(23, 'Staff 16', 'staff16@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 2),
(24, 'Staff 17', 'staff17@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 2),
(25, 'Staff 18', 'staff18@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 2),
(26, 'Staff 19', 'staff19@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 3),
(27, 'Staff 20', 'staff20@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 3),
(28, 'Staff 21', 'staff21@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 3),
(29, 'Staff 22', 'staff22@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 3),
(30, 'Staff 23', 'staff23@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 4),
(31, 'Staff 24', 'staff24@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 4),
(32, 'Staff 25', 'staff25@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 4),
(33, 'Staff 26', 'staff26@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 4),
(34, 'Staff 27', 'staff27@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 5),
(35, 'Staff 28', 'staff28@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 5),
(36, 'Staff 29', 'staff29@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 5),
(37, 'Staff 30', 'staff30@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 5),
(38, 'Staff 31', 'staff31@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 6),
(39, 'Staff 32', 'staff32@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 6),
(40, 'Staff 33', 'staff33@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 6),
(41, 'Staff 34', 'staff34@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 6),
(42, 'Staff 35', 'staff35@gmail.com', '$2y$10$aUaqeyUNjiSTgi44hJxRCOoHYscBb669g1MGlP.oFJYBFW2pm0hAG', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `Topic`
--

CREATE TABLE `Topic` (
  `TopicID` int NOT NULL,
  `TopicName` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Description` longtext NOT NULL,
  `CreateDate` datetime NOT NULL,
  `DeadlineID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Topic`
--

INSERT INTO `Topic` (`TopicID`, `TopicName`, `Description`, `CreateDate`, `DeadlineID`) VALUES
(1, 'Online Learning', 'This topic is all about ideas related to online learning, such as how to improve the online learning experience, how to engage students in online courses, and how to ensure online courses are as effective as in-person courses.', '2023-04-15 20:37:28', 3),
(2, 'Student Engagement', 'Ideas related to student engagement aim to help students feel more involved and invested in their education. Some examples of topics could be how to increase student participation in class, how to create a sense of community on campus, and how to provide opportunities for students to take leadership roles.', '2023-04-15 20:37:50', 3),
(3, 'Mental Health', 'This topic covers ideas related to promoting and maintaining mental health on campus. This could include ideas for providing mental health services, reducing stress and anxiety, and promoting healthy lifestyles.', '2023-04-15 20:38:26', 3),
(4, 'Technology', 'Technology is an ever-evolving field, and universities are always looking for ways to incorporate new technologies into their curriculum. Ideas related to technology could include how to use virtual reality in the classroom, how to teach coding to non-technical students, and how to incorporate artificial intelligence into academic research.', '2023-04-15 20:38:49', 2),
(5, 'Campus Sustainability', 'This topic focuses on ideas for promoting sustainability on campus. Some ideas could include how to reduce waste and energy consumption, how to promote sustainable transportation options, and how to integrate sustainable practices into the curriculum.', '2023-04-15 20:39:27', 2),
(6, 'Diversity and Inclusion', 'Ideas related to diversity and inclusion aim to create a more welcoming and inclusive campus environment for all students. Topics could include how to increase diversity in the student body, how to create more inclusive classrooms, and how to promote cultural competency.', '2023-04-15 20:39:52', 2),
(7, 'Career Readiness', 'This topic covers ideas related to preparing students for their careers after graduation. Topics could include how to provide students with more opportunities for internships and work experience, how to teach students important job skills, and how to connect students with potential employers.', '2023-04-15 20:40:16', 1),
(8, 'Student Wellness', 'Similar to mental health, student wellness covers ideas related to promoting overall health and wellness on campus. Topics could include how to promote healthy eating and exercise habits, how to reduce stress, and how to provide mental health services.', '2023-04-15 20:41:12', 1),
(9, 'Active Learning', 'Active learning is a teaching approach that involves students actively engaging with the material through activities and discussions. Ideas related to active learning could include how to incorporate more hands-on activities into the curriculum, how to use games and simulations to teach complex concepts, and how to promote critical thinking and problem-solving skills.', '2023-04-15 20:41:37', 1),
(10, 'Mental Health Support', 'Creating resources for students to manage stress, anxiety, and other mental health issues.', '2023-04-15 20:49:56', NULL),
(11, 'Campus Safety', 'Implementing safety measures to keep students and staff safe, improving emergency response plans, and promoting community awareness.', '2023-04-15 20:51:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Vote`
--

CREATE TABLE `Vote` (
  `VoteID` int NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `IdeaID` int NOT NULL,
  `StaffID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Vote`
--

INSERT INTO `Vote` (`VoteID`, `Status`, `IdeaID`, `StaffID`) VALUES
(1, 1, 3, 9),
(2, 1, 2, 9),
(3, 0, 1, 9),
(4, 1, 3, 10),
(5, 1, 2, 10),
(6, 0, 1, 10),
(7, 1, 3, 8),
(8, 0, 2, 8),
(9, 1, 1, 8),
(10, 1, 4, 15),
(11, 1, 3, 15),
(12, 1, 2, 15),
(13, 1, 1, 15),
(14, 1, 6, 15),
(15, 0, 5, 15),
(16, 1, 7, 15),
(17, 0, 8, 15),
(18, 1, 13, 15),
(19, 1, 12, 15),
(20, 1, 11, 15),
(21, 1, 10, 15),
(22, 0, 9, 15),
(23, 1, 13, 32),
(24, 0, 12, 32),
(25, 1, 10, 32),
(26, 1, 9, 32),
(27, 1, 3, 32),
(28, 1, 2, 32),
(29, 1, 1, 32),
(30, 1, 15, 32),
(31, 1, 14, 32),
(32, 1, 16, 32),
(33, 1, 17, 32),
(34, 1, 18, 32),
(35, 1, 20, 32),
(36, 1, 20, 22),
(37, 1, 19, 22),
(38, 1, 3, 22),
(39, 1, 2, 22),
(40, 0, 1, 22),
(41, 1, 13, 22),
(42, 1, 10, 22),
(43, 1, 5, 16),
(44, 1, 2, 16),
(45, 1, 1, 16),
(46, 1, 20, 16),
(47, 1, 19, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `StaffID` (`StaffID`),
  ADD KEY `IdeaID` (`IdeaID`);

--
-- Indexes for table `Deadline`
--
ALTER TABLE `Deadline`
  ADD PRIMARY KEY (`DeadlineID`);

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`DepartmentID`);

--
-- Indexes for table `Document`
--
ALTER TABLE `Document`
  ADD PRIMARY KEY (`DocumentID`),
  ADD KEY `IdeaID` (`IdeaID`);

--
-- Indexes for table `Idea`
--
ALTER TABLE `Idea`
  ADD PRIMARY KEY (`IdeaID`),
  ADD KEY `StaffID` (`StaffID`),
  ADD KEY `TopicID` (`TopicID`);

--
-- Indexes for table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`RoleID`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`StaffID`),
  ADD KEY `RoleID` (`RoleID`),
  ADD KEY `DepartmentID` (`DepartmentID`);

--
-- Indexes for table `Topic`
--
ALTER TABLE `Topic`
  ADD PRIMARY KEY (`TopicID`),
  ADD KEY `DeadlineID` (`DeadlineID`);

--
-- Indexes for table `Vote`
--
ALTER TABLE `Vote`
  ADD PRIMARY KEY (`VoteID`),
  ADD KEY `IdeaID` (`IdeaID`),
  ADD KEY `StaffID` (`StaffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Comment`
--
ALTER TABLE `Comment`
  MODIFY `CommentID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Deadline`
--
ALTER TABLE `Deadline`
  MODIFY `DeadlineID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Department`
--
ALTER TABLE `Department`
  MODIFY `DepartmentID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Document`
--
ALTER TABLE `Document`
  MODIFY `DocumentID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Idea`
--
ALTER TABLE `Idea`
  MODIFY `IdeaID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `Role`
--
ALTER TABLE `Role`
  MODIFY `RoleID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Staff`
--
ALTER TABLE `Staff`
  MODIFY `StaffID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `Topic`
--
ALTER TABLE `Topic`
  MODIFY `TopicID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Vote`
--
ALTER TABLE `Vote`
  MODIFY `VoteID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Comment`
--
ALTER TABLE `Comment`
  ADD CONSTRAINT `Comment_ibfk_1` FOREIGN KEY (`StaffID`) REFERENCES `Staff` (`StaffID`),
  ADD CONSTRAINT `Comment_ibfk_2` FOREIGN KEY (`IdeaID`) REFERENCES `Idea` (`IdeaID`);

--
-- Constraints for table `Document`
--
ALTER TABLE `Document`
  ADD CONSTRAINT `Document_ibfk_1` FOREIGN KEY (`IdeaID`) REFERENCES `Idea` (`IdeaID`);

--
-- Constraints for table `Idea`
--
ALTER TABLE `Idea`
  ADD CONSTRAINT `Idea_ibfk_1` FOREIGN KEY (`StaffID`) REFERENCES `Staff` (`StaffID`),
  ADD CONSTRAINT `Idea_ibfk_2` FOREIGN KEY (`TopicID`) REFERENCES `Topic` (`TopicID`);

--
-- Constraints for table `Staff`
--
ALTER TABLE `Staff`
  ADD CONSTRAINT `Staff_ibfk_1` FOREIGN KEY (`RoleID`) REFERENCES `Role` (`RoleID`),
  ADD CONSTRAINT `Staff_ibfk_2` FOREIGN KEY (`DepartmentID`) REFERENCES `Department` (`DepartmentID`);

--
-- Constraints for table `Topic`
--
ALTER TABLE `Topic`
  ADD CONSTRAINT `Topic_ibfk_1` FOREIGN KEY (`DeadlineID`) REFERENCES `Deadline` (`DeadlineID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
