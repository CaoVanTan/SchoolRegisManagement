-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 06:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(10) UNSIGNED NOT NULL,
  `class_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_id` int(10) UNSIGNED NOT NULL,
  `course_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `office_id`, `course_id`) VALUES
(1, '61TH1', 1, 'K61'),
(2, '61KT1', 2, 'K61'),
(3, '61TH2', 1, 'K61');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_start` year(4) NOT NULL,
  `year_end` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `year_start`, `year_end`) VALUES
('K60', 2018, 2022),
('K61', 2019, 2023),
('K62', 2020, 2024);

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE `curriculum` (
  `office_id` int(10) UNSIGNED NOT NULL,
  `subject_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_year` year(4) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`office_id`, `subject_id`, `course_id`, `school_year`, `semester`) VALUES
(1, 'CSE280', 'K61', 2020, 1),
(1, 'CSE281', 'K61', 2020, 1),
(1, 'CSE480', 'K61', 2021, 1),
(1, 'CSE290', 'K61', 2021, 2);

-- --------------------------------------------------------

--
-- Table structure for table `list_register`
--

CREATE TABLE `list_register` (
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `std_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_register`
--

INSERT INTO `list_register` (`teacher_id`, `std_id`, `subject_id`) VALUES
(6, '1951060995', 'CSE485'),
(5, '1951060995', 'CSE480'),
(6, '1951060995', 'CSE485');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `office_id` int(10) UNSIGNED NOT NULL,
  `office_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`office_id`, `office_name`) VALUES
(1, 'Công nghệ thông tin'),
(2, 'Kinh tế và Quản lý'),
(3, 'Cơ khí'),
(4, 'Điện - Điện tử'),
(5, 'Công trình'),
(6, 'Kỹ thuật tài nguyên nước');

-- --------------------------------------------------------

--
-- Table structure for table `regis_period`
--

CREATE TABLE `regis_period` (
  `id` int(11) NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regis_period`
--

INSERT INTO `regis_period` (`id`, `start_time`, `end_time`) VALUES
(1, '2021-10-04', '2021-10-06'),
(2, '2021-11-01', '2021-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_gender` tinyint(1) NOT NULL,
  `std_birthday` date NOT NULL,
  `std_phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_pass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_name`, `std_gender`, `std_birthday`, `std_phone`, `std_email`, `std_address`, `std_pass`, `class_id`) VALUES
('1951060995', 'Cao Văn Tân', 1, '2001-10-21', '0123345675', '1951060995@e.tlu.edu.vn', 'Thanh Hóa', '$2y$10$H7MSnqO2PptP8AJLLFBU1upDYtjGF6Ae7morjC6up0EpKb4yvRWSu', 1),
('1951060996', 'Lương Chí Kiên', 1, '2001-01-12', '0123485324', '1951060996@e.tlu.edu.vn', 'Thái Nguyên', '$2y$10$SxSSWhmBHfP/50hKzgJzAOwdwYb2SMK6LwEHdmKFjBM.L6dT/IbzW', 1),
('1951060997', 'Nguyễn Văn Mạnh', 1, '2001-11-16', '0123456654', '1951060997@e.tlu.edu.vn', 'Thanh Hóa', '$2y$10$xgzl28QNH.X05DJSr53/JO1cxgaRFpnCSaQ7ptoNpy9JIcJpp0VzC', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credits` int(10) UNSIGNED NOT NULL,
  `office_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `credits`, `office_id`) VALUES
('CSE0484', 'Cơ sở dữ liệu', 4, 1),
('CSE280', 'Ngôn ngữ lập trình', 4, 1),
('CSE281', 'Cấu trúc dữ liệu và giải thuật', 3, 1),
('CSE284', 'Lập trình JAVA', 3, 1),
('CSE290', 'Tiếng Anh chuyên ngành', 3, 1),
('CSE480', 'Phân tích & Thiết kế HTTT', 3, 1),
('CSE485', 'Công nghệ Web', 3, 1),
('MATH254', 'Xác suất thống kê', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `teacher_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_gender` tinyint(1) NOT NULL,
  `teacher_birthday` date NOT NULL,
  `teacher_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_pass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'abc',
  `office_id` int(10) UNSIGNED NOT NULL,
  `subject_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_gender`, `teacher_birthday`, `teacher_address`, `teacher_phone`, `teacher_email`, `teacher_pass`, `office_id`, `subject_id`) VALUES
(5, 'Nguyễn Văn Nam', 1, '1985-07-12', 'Hà Nội', '0112345674', 'namnv@e.tlu.edu.vn', '$2y$10$EESvZ/BnObv2afrQ/H2AbOR/99P/sd4dGXGb8hTXK.IfDGA7/mhvO', 1, 'CSE480'),
(6, 'Kiều Tuấn Dũng', 1, '1985-06-14', 'Hà Nội', '0123456756', 'dungkt@e.tlu.edu.vn', '$2y$10$NZcPWv8wGLeGB35WwEshquJOcKe3jcc6TjL2bcqzQiFwMYiPkR6cS', 1, 'CSE485'),
(7, 'Nguyễn Huy Đức', 1, '1970-06-17', 'Hà Nội', '0156786795', 'ducnh@e.tlu.edu.vn', '$2y$10$tzYeDZIVSUEMmKQxUCeCf.2NH/OvGT3nLdA2VhAe2q2wtKynoyb72', 1, 'CSE281'),
(8, 'Trần Thị Ngân', 0, '1987-06-18', 'Hà Nội', '0196564245', 'ngantt@e.tlu.edu.vn', '$2y$10$EAduQROoeOzjQ/jFMe1M/eL32/9Z9vXDEpHDFNW3PBuT4Y6Khg7U6', 1, 'CSE280'),
(9, 'Nguyễn Hằng Phương', 0, '1989-06-12', 'Hà Nội', '0978657448', 'phuongnh@e.tlu.edu.vn', '$2y$10$3UCRpT4/aXV9.Vb9eZLJg.gq.9686OFkZm2.D8FNm.2LI8MP0s3vW', 1, 'CSE290'),
(10, 'Nguyễn Thị Lý', 0, '1987-08-05', 'Hà Nội', '0934545767', 'lynt@e.tlu.edu.vn', '$2y$10$mJwzWqu.EW89wEcpVe.KIuuow4CkbT4b.9B7VuLHNJNFmLnb8RWwm', 1, 'MATH254');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `office_id` (`office_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD KEY `office_id` (`office_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `list_register`
--
ALTER TABLE `list_register`
  ADD KEY `std_id` (`std_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`office_id`);

--
-- Indexes for table `regis_period`
--
ALTER TABLE `regis_period`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `office_id` (`office_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `office_id` (`office_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `office_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `regis_period`
--
ALTER TABLE `regis_period`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`),
  ADD CONSTRAINT `class_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD CONSTRAINT `curriculum_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`),
  ADD CONSTRAINT `curriculum_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `curriculum_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `list_register`
--
ALTER TABLE `list_register`
  ADD CONSTRAINT `list_register_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`),
  ADD CONSTRAINT `list_register_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `list_register_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`),
  ADD CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
