-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2023 at 03:55 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `srms_nagpur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS "admin" (
  "id" int(4) NOT NULL,
  "username" varchar(30) NOT NULL,
  "password" varchar(15) NOT NULL,
  PRIMARY KEY ("id")
) AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'srms@123');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS "courses" (
  "c_id" int(10) NOT NULL,
  "cr_name" varchar(50) NOT NULL,
  "cr_duration" varchar(10) NOT NULL,
  PRIMARY KEY ("c_id")
) AUTO_INCREMENT=19 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `cr_name`, `cr_duration`) VALUES
(1, 'Computer Engineering', '4'),
(2, 'Electrical Engineering', '4'),
(3, 'electronics', '4'),
(4, 'Mechanical Engineering', '4');

-- --------------------------------------------------------

--
-- Table structure for table `course_vs_class`
--

CREATE TABLE IF NOT EXISTS "course_vs_class" (
  "class_id" int(10) NOT NULL,
  "c_id" int(10) NOT NULL,
  "class_name" varchar(20) NOT NULL,
  PRIMARY KEY ("class_id")
) AUTO_INCREMENT=1 ;

--
-- Dumping data for table `course_vs_class`
--


-- --------------------------------------------------------

--
-- Table structure for table `course_vs_cr_code`
--

CREATE TABLE IF NOT EXISTS "course_vs_cr_code" (
  "class_id" int(10) NOT NULL,
  "c_id" int(10) NOT NULL,
  "class_name" varchar(15) NOT NULL,
  PRIMARY KEY ("class_id")
) AUTO_INCREMENT=24 ;

--
-- Dumping data for table `course_vs_cr_code`
--

INSERT INTO `course_vs_cr_code` (`class_id`, `c_id`, `class_name`) VALUES
(10, 1, 'CO_2I'),
(9, 1, 'CO_1I'),
(11, 1, 'CO_3I'),
(12, 1, 'CO_4I'),
(13, 1, 'CO_5I');

-- --------------------------------------------------------

--
-- Table structure for table `d3_details`
--

CREATE TABLE IF NOT EXISTS d3_details (
  d3_id int(10) NOT NULL,
  academic_yr int(10) NOT NULL,
  staff_name varchar(50) NOT NULL,
  c_id int(10) NOT NULL,
  class_id int(10) NOT NULL,
  subject_id int(10) NOT NULL,
  subject_code varchar(10) NOT NULL,
  semister varchar(10) NOT NULL,
  username varchar(50) NOT NULL,
  password varchar(20) NOT NULL,
  roll_no int(15) NOT NULL,
  enroll_no int(20) NOT NULL,
  exam_seat_no varchar(25) NOT NULL,
  stud_name varchar(50) NOT NULL,
  m1 int(5) NOT NULL,
  m2 int(5) NOT NULL,
  m3 int(5) NOT NULL,
  m4 int(5) NOT NULL,
  m5 int(5) NOT NULL,
  m6 int(5) NOT NULL,
 m7 int(5) NOT NULL,
  m8 int(5) NOT NULL,
  m9 int(5) NOT NULL,
  m10 int(5) NOT NULL,
  m11 int(5) NOT NULL,
  m12 int(5) NOT NULL,
  m13 int(5) NOT NULL,
  m14 int(5) NOT NULL,
  m15 int(5) NOT NULL,
  m16 int(5) NOT NULL,
  m17 int(5) NOT NULL,
  m18 int(5) NOT NULL,
  m19 int(5) NOT NULL,
  m20 int(5) NOT NULL,
  m21 int(5) NOT NULL,
  m22 int(5) NOT NULL,
  m23 int(5) NOT NULL,
  m24 int(5) NOT NULL,
  m25 int(5) NOT NULL,
  m26 int(5) NOT NULL,
  m27 int(5) NOT NULL,
  m28 int(5) NOT NULL,
  m29 int(5) NOT NULL,
  m30 int(5) NOT NULL,
  m31 int(5) NOT NULL,
  m32 int(5) NOT NULL,
  total_marks int(10) NOT NULL,
  PA_marks int(10) NOT NULL,
  PRIMARY KEY (d3_id)
) AUTO_INCREMENT=15 ;

--
-- Dumping data for table `d3_details`
--

INSERT INTO `d3_details` (`d3_id`, `academic_yr`, `staff_name`, `c_id`, `class_id`, `subject_id`, `subject_code`, `semister`, `username`, `password`, `roll_no`, `enroll_no`, `exam_seat_no`, `stud_name`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `m8`, `m9`, `m10`, `m11`, `m12`, `m13`, `m14`, `m15`, `m16`, `m17`, `m18`, `m19`, `m20`, `m21`, `m22`, `m23`, `m24`, `m25`, `m26`, `m27`, `m28`, `m29`, `m30`, `m31`, `m32`, `total_marks`, `PA_marks`) VALUES
(9, 2020, 'Rupali Raut', 1, 9, 18, '17CO101', 'SEM-I', 'rupali27may@rediffmail.com', '956@@544199', 2, 1516830269, '420778', 'Ekta Kishor Wasekar', 7, 7, 7, 7, 7, 7, 8, 8, 8, 8, 8, 9, 9, 9, 9, 9, 6, 7, 8, 9, 9, 9, 7, 8, 7, 8, 9, 7, 8, 7, 9, 7, 252, 20),
(10, 2020, 'TEJASWINI', 13, 18, 27, '281217', 'SEM-VI', 'TEJASWINI@GMAIL.COM', '956@@544131859', 16, 2147483647, '162301', 'RAVI GANDHARE', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 1),
(11, 2021, 'shahu sir', 14, 19, 28, '22617', 'SEM-VI', 'shahu@gmail.com', '956@@544141961', 35, 123456789, '564378', 'nikuuu chaple', 12, 33, 23, 11, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 91, 7),
(12, 2022, 'supriya gupta mam', 16, 21, 30, '22415', 'SEM-VI', 'supriya123@gmail.om', '956@@544162163', 39, 1234567890, '123456', 'joy', 12, 13, 12, 10, 15, 18, 19, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 119, 9),
(13, 2022, 'pinky mam', 17, 22, 31, '234543', 'SEM-I', 'pinkymam@gmail.com', '956@@544172264', 2, 2147483647, '4354654', 'ruchika', 12, 21, 12, 23, 12, 10, 11, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 113, 9),
(14, 2022, 'dhiraj sir', 18, 23, 32, '123435', 'SEM-I', 'dhiraj@gmail.com', '956@@544182365', 6, 2147483647, '123', 'deepak goapl kumar', 8, 9, 4, 6, 8, 9, 9, 9, 8, 7, 8, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 94, 7);

-- --------------------------------------------------------

--
-- Table structure for table `d4_details`
--

CREATE TABLE IF NOT EXISTS d4_details (
  d4_id int(10) NOT NULL,
  academic_yr int(10) NOT NULL,
  staff_name varchar(45) NOT NULL,
  c_id int(10) NOT NULL,
  class_id int(10) NOT NULL,
  subject_id int(10) NOT NULL,
  subject_code varchar(10) NOT NULL,
  semister varchar(10) NOT NULL,
  username varchar(50) NOT NULL,
  roll_no int(25) NOT NULL,
  enroll_no int(25) NOT NULL,
  exam_seat_no varchar(25) NOT NULL,
  stud_name varchar(45) NOT NULL,
  marks_obt int(20) NOT NULL,
  PRIMARY KEY (d4_id)
) AUTO_INCREMENT=3 ;

--
-- Dumping data for table `d4_details`
--

INSERT INTO `d4_details` (`d4_id`, `academic_yr`, `staff_name`, `c_id`, `class_id`, `subject_id`, `subject_code`, `semister`, `username`, `roll_no`, `enroll_no`, `exam_seat_no`, `stud_name`, `marks_obt`) VALUES
(2, 2020, 'Rupali Raut', 1, 9, 18, '17CO101', 'SEM-I', 'rupali27may@rediffmail.com', 1, 1516830243, '420777', 'Trishala Arun Gaikwad', 15);

-- --------------------------------------------------------

--
-- Table structure for table `d5_details`
--

CREATE TABLE IF NOT EXISTS d5_details (
  d5_id int(10) NOT NULL,
  academic_yr int(10) NOT NULL,
  staff_name varchar(45) NOT NULL,
  c_id int(10) NOT NULL,
  class_id int(10) NOT NULL,
  subject_id int(10) NOT NULL,
  subject_code varchar(10) NOT NULL,
  semister varchar(10) NOT NULL,
  username varchar(50) NOT NULL,
  roll_no int(20) NOT NULL,
  stud_name varchar(45) NOT NULL,
  enroll_no int(25) NOT NULL,
  exam_seat_no varchar(25) NOT NULL,
  TS1 int(10) NOT NULL,
  TS2 int(10) NOT NULL,
  avg_marks int(10) NOT NULL,
  perform int(10) NOT NULL,
  indivi_perform int(10) NOT NULL,
  total int(10) NOT NULL,
  PRIMARY KEY (d5_id)
) AUTO_INCREMENT=3 ;

--
-- Dumping data for table `d5_details`
--

INSERT INTO `d5_details` (`d5_id`, `academic_yr`, `staff_name`, `c_id`, `class_id`, `subject_id`, `subject_code`, `semister`, `username`, `roll_no`, `stud_name`, `enroll_no`, `exam_seat_no`, `TS1`, `TS2`, `avg_marks`, `perform`, `indivi_perform`, `total`) VALUES
(2, 2020, 'Rupali Raut', 1, 9, 18, '17CO101', 'SEM-I', 'rupali27may@rediffmail.com', 1, 'Trishala Arun Gaikwad', 1516830243, '420777', 22, 0, 11, 5, 2, 18);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS exam (
  exam_id int(10) NOT NULL,
  class_id int(10) NOT NULL,
  exam_name varchar(20) NOT NULL,
  PRIMARY KEY (exam_id)
) AUTO_INCREMENT=32 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `class_id`, `exam_name`) VALUES
(23, 11, 'Sessional I'),
(22, 9, 'Sessional II'),
(21, 9, 'Sessional I'),
(24, 14, 'Sessional II'),
(25, 17, 'Sessional I'),
(26, 18, 'Sessional I'),
(27, 19, 'Sessional I'),
(28, 20, 'Sessional I'),
(29, 21, 'Sessional II'),
(30, 22, 'Sessional I'),
(31, 23, 'Sessional II');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS login (
  login_id int(10) NOT NULL,
  username varchar(50) NOT NULL,
  password varchar(25) NOT NULL,
  status varchar(10) NOT NULL,
  PRIMARY KEY (login_id)
) AUTO_INCREMENT=10 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `status`) VALUES
(1, 'rupali27may@rediffmail.com', '956@@544199', 'staff'),
(2, 'SHRUTI@GMAIL.COM', '956@@544121758', 'staff'),
(3, 'TEJASWINI@GMAIL.COM', '956@@544131859', 'staff'),
(4, 'prashant2gmail.com', '956@@5441960', 'staff'),
(5, 'shahu@gmail.com', '956@@544141961', 'staff'),
(6, 'abc123@gmail.com', '956@@544152062', 'staff'),
(7, 'supriya123@gmail.om', '956@@544162163', 'staff'),
(8, 'pinkymam@gmail.com', '956@@544172264', 'staff'),
(9, 'dhiraj@gmail.com', '956@@544182365', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `staff_reg`
--

CREATE TABLE IF NOT EXISTS "staff_reg" (
  staff_id int(10) NOT NULL,
  staff_name varchar(50) NOT NULL,
  email varchar(50) NOT NULL,
  c_id int(10) NOT NULL,
  class_id int(10) NOT NULL,
  subject_id int(10) NOT NULL,
  subject_code varchar(10) NOT NULL,
  session varchar(20) NOT NULL,
  username varchar(30) NOT NULL,
  password varchar(30) NOT NULL DEFAULT '',
  about varchar(200) NOT NULL,
  PRIMARY KEY (staff_id)
) AUTO_INCREMENT=66 ;

--
-- Dumping data for table `staff_reg`
--

INSERT INTO `staff_reg` (`staff_id`, `staff_name`, `email`, `c_id`, `class_id`, `subject_id`, `subject_code`, `session`, `username`, `password`, `about`) VALUES
(57, 'Rupali Raut', 'rupali27may@rediffmail.com', 0, 0, 18, '17CO101', '2018-19', 'rupali27may@rediffmail.com', '956@@544199', 'She is a good Programmer...');

-- --------------------------------------------------------

--
-- Table structure for table `studvsmarks`
--

CREATE TABLE IF NOT EXISTS studvsmarks (
 studVSmarks_id int(10) NOT NULL,
  stud_id int(10) NOT NULL,
  roll_no int(10) NOT NULL,
  stud_name varchar(50) NOT NULL,
  class_id int(10) NOT NULL,
  exam_id int(10) NOT NULL,
  subject_id int(10) NOT NULL,
  marks_obt int(10) NOT NULL,
  marks_out_of int(10) NOT NULL,
  PRIMARY KEY (studVSmarks_id)
) AUTO_INCREMENT=69 ;

--
-- Dumping data for table `studvsmarks`
--

INSERT INTO `studvsmarks` (`studVSmarks_id`, `stud_id`, `roll_no`, `stud_name`, `class_id`, `exam_id`, `subject_id`, `marks_obt`, `marks_out_of`) VALUES
(40, 29, 1, 'Trishala Arun Gaikwad', 9, 21, 18, 19, 25);

-- --------------------------------------------------------

--
-- Table structure for table `stud_reg`
--

CREATE TABLE IF NOT EXISTS stud_reg (
  stud_id int(10) NOT NULL,
  stud_name varchar(40) NOT NULL,
  roll_no varchar(15) NOT NULL,
  enroll_no int(20) NOT NULL,
  exam_seat_no int(20) NOT NULL,
  c_id int(10) NOT NULL,
 cr_cod int(10) NOT NULL,
  session varchar(15) NOT NULL,
  PRIMARY KEY (stud_id)
) AUTO_INCREMENT=42 ;

--
-- Dumping data for table `stud_reg`
--


-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS subject (
  subject_id int(10) NOT NULL,
  c_id int(10) NOT NULL,
  class_id int(10) NOT NULL,
  subject_name varchar(70) NOT NULL,
  subject_code varchar(25) NOT NULL,
  PRIMARY KEY (subject_id)
) AUTO_INCREMENT=33 ;

--
-- Dumping data for table `subject`
--

