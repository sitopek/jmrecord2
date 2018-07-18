-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 02:55 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joombo`
--

-- --------------------------------------------------------

--
-- Table structure for table `j_staff`
--

CREATE TABLE `j_staff` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user_email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user_registered` bigint(20) NOT NULL,
  `user_ic` varchar(12) CHARACTER SET utf8 NOT NULL,
  `user_oldic` varchar(20) NOT NULL,
  `user_bd` date NOT NULL,
  `user_national` varchar(20) CHARACTER SET utf8 NOT NULL,
  `user_bop` varchar(50) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_religion` varchar(20) NOT NULL,
  `user_weight` float NOT NULL,
  `user_height` float NOT NULL,
  `user_race` varchar(20) NOT NULL,
  `user_marriage` varchar(10) CHARACTER SET utf8 NOT NULL,
  `user_address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `user_passno` varchar(20) NOT NULL,
  `user_Issue` varchar(20) NOT NULL,
  `user_PassExp` date NOT NULL,
  `user_EPFno` varchar(20) NOT NULL,
  `user_SOCSOno` varchar(20) NOT NULL,
  `user_incomeTax` varchar(20) NOT NULL,
  `user_Qualification` varchar(100) NOT NULL,
  `speak_malay` varchar(20) NOT NULL,
  `speak_english` varchar(20) NOT NULL,
  `speak_Cantonese` varchar(20) NOT NULL,
  `speak_language` varchar(20) NOT NULL,
  `speak_Others` varchar(20) NOT NULL,
  `write_malay` varchar(20) NOT NULL,
  `write_english` varchar(20) NOT NULL,
  `write_cantonese` varchar(20) NOT NULL,
  `write_language` varchar(20) NOT NULL,
  `write_others` varchar(20) NOT NULL,
  `user_position` varchar(100) NOT NULL,
  `user_department` varchar(100) NOT NULL,
  `JDate` date NOT NULL,
  `uni_qualification2` varchar(100) NOT NULL,
  `tel_1` varchar(20) NOT NULL,
  `tel_2` varchar(20) NOT NULL,
  `user_mobile` varchar(20) NOT NULL,
  `user_residence` varchar(200) NOT NULL,
  `company_detail` varchar(200) NOT NULL,
  `period` varchar(20) NOT NULL,
  `position` varchar(100) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `company_detail2` varchar(100) NOT NULL,
  `period2` varchar(20) NOT NULL,
  `position2` varchar(100) NOT NULL,
  `salary2` varchar(20) NOT NULL,
  `reason2` varchar(50) NOT NULL,
  `uni` varchar(100) NOT NULL,
  `uni_period` varchar(20) NOT NULL,
  `uni_qualification` varchar(100) NOT NULL,
  `uni2` varchar(100) NOT NULL,
  `uni_period2` varchar(20) NOT NULL,
  `S_name` varchar(50) NOT NULL,
  `S_relationship` varchar(20) NOT NULL,
  `S_nationality` varchar(20) NOT NULL,
  `S_ic` varchar(20) NOT NULL,
  `S_oldic` varchar(20) NOT NULL,
  `S_bd` date NOT NULL,
  `S_weight` float NOT NULL,
  `S_height` float NOT NULL,
  `S_race` varchar(20) NOT NULL,
  `S_religion` varchar(20) NOT NULL,
  `S_contact` varchar(200) NOT NULL,
  `S_postal` varchar(20) NOT NULL,
  `S_tel1` varchar(20) NOT NULL,
  `S_mobile` varchar(20) NOT NULL,
  `S_address` varchar(200) NOT NULL,
  `S_postal2` varchar(20) NOT NULL,
  `S_tel2` varchar(20) NOT NULL,
  `S_email` varchar(100) NOT NULL,
  `S_employer` varchar(100) NOT NULL,
  `S_emp_address` varchar(100) NOT NULL,
  `S_emp_postal` varchar(20) NOT NULL,
  `S_emp_tel` varchar(20) NOT NULL,
  `S_emp_email` varchar(20) NOT NULL,
  `E_name` varchar(100) NOT NULL,
  `E_relationship` varchar(20) NOT NULL,
  `E_nationality` varchar(20) NOT NULL,
  `E_ic` varchar(20) NOT NULL,
  `E_oldic` varchar(20) NOT NULL,
  `E_bd` date NOT NULL,
  `E_bop` varchar(100) NOT NULL,
  `E_race` varchar(20) NOT NULL,
  `E_religion` varchar(20) NOT NULL,
  `E_weight` float NOT NULL,
  `E_height` float NOT NULL,
  `E_gender` varchar(20) NOT NULL,
  `E_address` varchar(200) NOT NULL,
  `c1name` varchar(50) NOT NULL,
  `c1bday` date NOT NULL,
  `c1age` varchar(20) NOT NULL,
  `c1ic` varchar(20) NOT NULL,
  `c1cert` varchar(20) NOT NULL,
  `c1status` varchar(20) NOT NULL,
  `c1marriage` varchar(20) NOT NULL,
  `c1gender` varchar(20) NOT NULL,
  `c2name` varchar(50) NOT NULL,
  `c2bday` date NOT NULL,
  `c2age` varchar(20) NOT NULL,
  `c2ic` varchar(20) NOT NULL,
  `c2cert` varchar(20) NOT NULL,
  `c2status` varchar(20) NOT NULL,
  `c2marriage` varchar(20) NOT NULL,
  `c2gender` varchar(20) NOT NULL,
  `c3name` varchar(50) NOT NULL,
  `c3bday` date NOT NULL,
  `c3age` varchar(20) NOT NULL,
  `c3ic` varchar(20) NOT NULL,
  `c3cert` varchar(20) NOT NULL,
  `c3status` varchar(20) NOT NULL,
  `c3marriage` varchar(20) NOT NULL,
  `c3gender` varchar(20) NOT NULL,
  `c4name` varchar(50) NOT NULL,
  `c4bday` date NOT NULL,
  `c4age` varchar(20) NOT NULL,
  `c4ic` varchar(20) NOT NULL,
  `c4cert` varchar(20) NOT NULL,
  `c4status` varchar(20) NOT NULL,
  `c4marriage` varchar(20) NOT NULL,
  `c4gender` varchar(20) NOT NULL,
  `c5name` varchar(50) NOT NULL,
  `c5bday` date NOT NULL,
  `c5age` varchar(20) NOT NULL,
  `c5ic` varchar(20) NOT NULL,
  `c5cert` varchar(20) NOT NULL,
  `c5status` varchar(20) NOT NULL,
  `c5marriage` varchar(20) NOT NULL,
  `c5gender` varchar(20) NOT NULL,
  `c6name` varchar(50) NOT NULL,
  `c6bday` date NOT NULL,
  `c6age` varchar(20) NOT NULL,
  `c6ic` varchar(20) NOT NULL,
  `c6cert` varchar(20) NOT NULL,
  `c6status` varchar(20) NOT NULL,
  `c6marriage` varchar(20) NOT NULL,
  `c6gender` varchar(20) NOT NULL,
  `c7name` varchar(50) NOT NULL,
  `c7bday` date NOT NULL,
  `c7age` varchar(20) NOT NULL,
  `c7ic` varchar(20) NOT NULL,
  `c7cert` varchar(20) NOT NULL,
  `c7status` varchar(20) NOT NULL,
  `c7marriage` varchar(20) NOT NULL,
  `c7gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `j_staff`
--

INSERT INTO `j_staff` (`ID`, `user_name`, `user_email`, `user_registered`, `user_ic`, `user_oldic`, `user_bd`, `user_national`, `user_bop`, `user_gender`, `user_religion`, `user_weight`, `user_height`, `user_race`, `user_marriage`, `user_address`, `user_passno`, `user_Issue`, `user_PassExp`, `user_EPFno`, `user_SOCSOno`, `user_incomeTax`, `user_Qualification`, `speak_malay`, `speak_english`, `speak_Cantonese`, `speak_language`, `speak_Others`, `write_malay`, `write_english`, `write_cantonese`, `write_language`, `write_others`, `user_position`, `user_department`, `JDate`, `uni_qualification2`, `tel_1`, `tel_2`, `user_mobile`, `user_residence`, `company_detail`, `period`, `position`, `salary`, `reason`, `company_detail2`, `period2`, `position2`, `salary2`, `reason2`, `uni`, `uni_period`, `uni_qualification`, `uni2`, `uni_period2`, `S_name`, `S_relationship`, `S_nationality`, `S_ic`, `S_oldic`, `S_bd`, `S_weight`, `S_height`, `S_race`, `S_religion`, `S_contact`, `S_postal`, `S_tel1`, `S_mobile`, `S_address`, `S_postal2`, `S_tel2`, `S_email`, `S_employer`, `S_emp_address`, `S_emp_postal`, `S_emp_tel`, `S_emp_email`, `E_name`, `E_relationship`, `E_nationality`, `E_ic`, `E_oldic`, `E_bd`, `E_bop`, `E_race`, `E_religion`, `E_weight`, `E_height`, `E_gender`, `E_address`, `c1name`, `c1bday`, `c1age`, `c1ic`, `c1cert`, `c1status`, `c1marriage`, `c1gender`, `c2name`, `c2bday`, `c2age`, `c2ic`, `c2cert`, `c2status`, `c2marriage`, `c2gender`, `c3name`, `c3bday`, `c3age`, `c3ic`, `c3cert`, `c3status`, `c3marriage`, `c3gender`, `c4name`, `c4bday`, `c4age`, `c4ic`, `c4cert`, `c4status`, `c4marriage`, `c4gender`, `c5name`, `c5bday`, `c5age`, `c5ic`, `c5cert`, `c5status`, `c5marriage`, `c5gender`, `c6name`, `c6bday`, `c6age`, `c6ic`, `c6cert`, `c6status`, `c6marriage`, `c6gender`, `c7name`, `c7bday`, `c7age`, `c7ic`, `c7cert`, `c7status`, `c7marriage`, `c7gender`) VALUES
(1, 'MUHAMMAD TAUFIQ B. OTHMAN                                                   ', 'taufiqothman1993@gmail.com', 1515373197, '930304025073', '', '1993-04-03', 'Malaysian', 'HOSPITAL BESAR ALOR STAR', 'Male', 'Islam', 49.5, 15, 'Malay', 'Single', 'B5 G41 KUARTERS POLIS BANDAR PERDA,\r\n14400 BUKIT MERTAJAM, \r\nPULAU PINANG', '', '', '0000-00-00', '', '', '', 'DEGREE IN COMPUTER SCIENCE HONS MULTIMEDIA PROGRAMMING', 'Well', 'Well', 'Bad', 'Arabic', 'Fair', 'Well', 'Well', 'Bad', 'Arabic', 'Fair', 'IT ASSIST.', 'AIM', '2017-11-17', 'SPM', '032912382', '', '0174339381', 'NO 1 JALAN MAWARSARI 7,\r\nBANDAR SUNGAI BUAYA,\r\n48010 RAWANG,\r\nSELANGOR DARUL EHSAN', 'McD', '6 MONTHS', 'KITCHEN CREW', 'RM900', 'PART TIMER', 'KTAS RESOURCES SDN. BHD.', '3 MONTHS', 'PRACTICAL STUDENT', 'RM200', 'INDUSTRIAL TRAINING', 'UNI. TEKNOLOGI MARA SHAH ALAM', '3 Years', 'DEGREE IN COMPUTER ScIENCE HONS MULTIMEDIA PROGRAMMING', 'SMKA AL-IRSHAD', '6 Years', '', '', 'Malaysian', '', '', '0000-00-00', 0, 0, 'Malay', 'Islam', '', '', '', '', '', '', '', '', '', '', '', '', '', 'AZIMAH BT. ABD. GHANI', 'MOTHER', 'Malaysian', '630203021020', '', '1963-04-24', 'HOSPITAL BESAR ALOR STAR', 'Malay', 'Islam', 60, 15, 'Female', 'KULIM, ALOR STAR, KEDAH.', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male'),
(18, 'AZFAR BIN OMAR                ', 'oazfar@gmail.com', 1515034267, '941112145285', '', '1994-11-12', 'Malaysian', 'W.PERSEKUTUAN KUALA LUMPUR', 'Male', 'Islam', 95, 170, 'Malay', 'Single', 'NO 21 JALAN SS5C/10,\r\n47301, PETALING JAYA,\r\nSELANGOR DARUL EHSAN.', '', '', '0000-00-00', '', '', '', '', 'Well', 'Good', 'Bad', 'ARABIC', 'Fair', 'Well', 'Good', 'Bad', 'ARABIC', 'Good', 'GENERAL CLERK', 'ADMIN & FINANCE', '2018-01-02', '', '0378035499', '', '0176869020', 'NO 21, JALAN SS5C/10,\r\n47301, PETALING JAYA,\r\nSELANGOR DARUL EHSAN.', 'URBAN IDEA SDN. BHD. (KELANA JAYA)', '2013 - 2015', 'SUPERVISOR/PIC', '-', 'PART TIMER', '', '', '', '', '', 'SMK USJ 4', '2012', 'SPM', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'OMAR BIN AHMAD', 'FATHER', 'Malaysian', '470627105313', '', '1947-06-27', 'KLANG', 'Malay', 'Islam', 70, 167, 'Male', 'NO 21 JALAN SS5C/10,\r\n47301, PETALING JAYA,\r\nSELANGOR DARUL EHSAN.', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(20, 'NUR AIN ZAFIRAH BT. KAMARULZAMAN            ', 'zafkamal92@gmail.com', 1515373394, '921008055118', '', '1992-10-08', 'Malaysian', 'NEGERI SEMBILAN', 'Female', 'Islam', 50, 159, 'Malay', 'Single', 'JKR 2637/B, JALAN BELFIELDS,\r\n50460, KUALA LUMPUR.', '', '', '0000-00-00', '20380302', '', '', '', 'Well', 'Fair', 'Bad', '', '', 'Well', 'Fair', 'Bad', '', '', 'PENYAMBUT TETAMU & KERANI', '', '2017-09-04', 'PMR, SPM.', '', '', '0176513603', '', 'KPJ KAJANG SPECIALIST HOSPITAL', 'MAY 2016 - DEC 2016', 'CLERK FINANCE', '', '', '', '', '', '', '', 'POLITEKNIK TUANKU SYED SIRAJUDDIN', 'DEC 2010 - DEC 2013', 'DIPLOMA VIDEO AND FILM STUDIES', 'SMK BANDAR DAMAI PERDANA', '2005 - 2009', '', '', 'Malaysian', '', '', '0000-00-00', 0, 0, 'Malay', 'Islam', '', '', '', '', '', '', '', '', '', '', '', '', '', 'KAMARULZAMAN B. KAMARUDIN', 'FATHER', 'Malaysian', '', '', '0000-00-00', 'KUALA LUMPUR', 'Malay', 'Islam', 0, 0, 'Male', 'JKR 2637/B JALAN BELFIELDS,\r\n50460, KUALA LUMPUR.', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male'),
(21, 'ELINAZ BT. ISHAK       ', 'elis.ishak@gmail.com', 1514960258, '900418145762', '', '1990-04-18', 'Malaysian', 'W.PERSEKUTUAN KUALA LUMPUR', 'Female', 'Islam', 55, 160, 'Malay', 'Married', 'NO.3, JALAN WIRAWATI 2,\r\nTAMAN MALURI, 55100,\r\nKUALA LUMPUR.', '', '', '0000-00-00', '', '', '', '', 'Well', 'Well', 'Bad', '', '', 'Well', 'Well', 'Bad', '', '', 'OPERATION EXEC. & OP', '', '2015-02-01', 'SPM', '', '', '0196923262', 'NO.2126, JALAN LIMAU PURUT,\r\nKG. GONG LIMAU,CUKAI, 24000,\r\nKEMAMAN, TERENGGANU.', 'MISC BERHAD KUALA LUMPUR', 'JUNE 2012 - 0CT 2014', 'THIRD OFFICER & FOURTH OFFICER', 'RM7720', 'UPGRADE WORK', '', '', '', '', '', 'AKADEMI LAUT MALAYSIA', 'JULY 2008 - JAN 2012', 'DIPLOMA IN NAUTICAL SCIENCE', 'SMK COCHRANE', 'JAN 2003 - DEC 2007', 'MUHAMMAD BIN ABD. RAHMAN', 'HUSBAND', 'Malaysian', '900209015291', '', '1990-02-09', 0, 0, 'Malay', 'Islam', '', '', '', '0197892962', '', '', '', '', 'MISC BHD.', '', '', '', '', 'ISHAK B. BLUAH', 'FATHER', 'Malaysian', '', '', '0000-00-00', '', 'Malay', 'Islam', 0, 0, 'Male', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(24, 'ABDUL QAYYUM B. ONN        ', 'a.qayyum15@gmail.com', 1514960172, '830301145215', '', '1983-03-01', 'Malaysian', 'KUALA LUMPUR', 'Male', 'Islam', 72, 180, 'Malay', 'Married', '25, JALAN 16/9,\r\n46350, PETALING JAYA,\r\nSELANGOR DARUL EHSAN.', 'A35504106', 'UTC KERAMAT', '2020-09-26', '16961465', '', 'SG23925242100', 'SPM', 'Good', 'Good', 'Bad', '', '', 'Good', 'Good', 'Bad', '', '', '', 'PROCUREMENT', '2017-01-03', '', '', '', '0166911515', '2A-01-02, BUNGARAYA CONDOMINIUM,\r\nPERSIARAN GOLF, SEKSYEN  U2,\r\n40150, SHAH ALAM,\r\nSELANGOR DARUL EHSAN.', 'WARNA INTELEK SDN. BHD.', '20 MONTHS', 'GENERAL MANAGER', 'RM4000', 'EXPLORING BETTER PROSPECT', '', '', '', '', '', 'SEKOLAH MENENGAH TEKNIK NIBONG TEBAL', '2000', 'SPM', '', '', 'DAIANA BT. ZAINAL ABIDIN', 'WIFE', 'Malaysian', '810130146118', '', '1985-01-30', 60, 172, 'Malay', 'Islam', '25, JALAN 16/9,\r\n46350, PETALING JAYA,\r\nSELANGOR DARUL EHSAN.', '46350', '', '0166606508', '', '', '', 'daianazainal@gmail.com', 'ARUS BRANDZ SDN. BHD', 'E-1-16 PLAZA DAMAS,\r\nJALAN SRI HARTAMAS 1, \r\n50480, KUALA LUMPUR.', '', '', '', 'NOOR KUMALASARI BT. MOHD. TAIB', 'MOTHER', 'Malaysian', '', '', '1956-04-11', '', 'Malay', 'Islam', 50, 175, 'Female', 'M6-1-2 FAWINA COURT, JALAN PUTRA 6,\r\nTAMAN PUTRA SULAIMAN, 68000,\r\nAMPANG, SELANGOR DARUL EHSAN.', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(25, 'MUHAMMAD SAFIUDDIN B. ABD. RAHMAN      ', 'Cobay_88@yahoo.com', 1514946643, '880628565735', '', '1988-06-28', 'Malaysian', 'KUALA LUMPUR', 'Male', 'Islam', 78, 172, 'Malay', 'Married', 'PT 15528 KG. MAK CHILI,\r\nJALAN SERAYA, 24000,\r\nCUKAI KEMAMAN, TERENGGANU.', 'A37901133', '3 MAY 2016', '2021-05-03', '17351416', '', '', '', 'Well', 'Good', 'Bad', '', '', 'Well', 'Good', 'Bad', '', '', '', 'COMMERCIAL', '2017-01-03', '', '', '', '0132026877', 'NO 1, LOT 3808, JALAN\r\nPENGHULU SALEH, 41250,\r\nKG. DELEK KANAN, KLANG,\r\nSELANGOR DARUL EHSAN.', 'WORLDWIDE SHIPPING (KLANG)', '3 YEARS', 'EXPORT EXECUTIVE', 'RM3000', 'COMPANY CLOSED', 'RAHMAN & SON ENT. (KLANG)', '2 YEARS', 'OWN BUSINESS', 'RM3000', '', 'SMK SULTAN OMAR', '2001 - 2005', 'SPM', 'UNI. TEKNOLOGI MARA PERAK', '2010 - 2012', 'PUTERI MARINAH', 'WIFE', 'Malaysian', '941222106690', '', '1994-12-22', 52, 166, 'Malay', 'Islam', '', '', '', '0122783375', 'NO 1, LOT 3808, JALAN\r\nPENGHULU SALEH, KG.\r\nDELEK KANAN, 41250,\r\nKLANG, SELANGOR DARUL EHSAN.', '41250', '', '', '', '', '', '', '', 'ABD. RAHMAN B. MOHAMMED', 'FATHER', 'Malaysian', '600726115245', '', '1960-07-26', 'KEMAMAN, TERENGGANU.', 'Malay', 'Islam', 65, 169, 'Male', 'PT 15528, KG. MAK CHILI,\r\nJALAN SERAYA, 24000,\r\nKEMAMAN, TERENGGANU.', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male'),
(27, 'ABDUL ANIQ B. KAMAL HISHAM    ', 'abdul.aniq@gmail.com', 1514949871, '901030105363', '', '1990-10-30', 'Malaysian', 'SELANGOR', 'Male', 'Islam', 85, 164, 'Malay', 'Single', '97 JALAN SS22A/2,\r\nDAMANSARA JAYA, 47400,\r\nPETALING JAYA, SELANGOR\r\nDARUL EHSAN.', '', '', '0000-00-00', '', '', '', 'DIPLOMA', 'Good', 'Good', 'Bad', '', '', 'Fair', 'Fair', 'Bad', '', '', '', '', '2017-01-03', 'SPM', '', '', '0137043678', '97 JALAN SS22A/2,\r\nDAMANSARA JAYA, 47400,\r\nPETALING JAYA, SELANGOR\r\nDARUL EHSAN.', 'E-GAL CORPORATION SDN. BHD.', 'MAY - AUG 2012', 'CLERK', '', '', 'HAAGEN DAZS', 'MAY - AUG 2012', 'JUNIOR CREW', '', '', 'SEGI UNIVERSITY', '2009 - 2012', 'DIPLOMA IN ACCOUNTING', 'SMK DAMANSARA JAYA', '2003 - 2007', '', '', 'Malaysian', '', '', '0000-00-00', 0, 0, 'Malay', 'Islam', '', '', '', '', '', '', '', '', '', '', '', '', '', 'KAMAL HISHAM B. ABDUL MALEK', 'FATHER', 'Malaysian', '580722105757', '', '1958-07-22', 'SELANGOR', 'Malay', 'Islam', 0, 0, 'Male', '97 JALAN SS22A/2,\r\nDAMANSARA JAYA, 47400,\r\nPETALING JAYA, SELANGOR\r\nDARUL EHSAN.', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male', '', '0000-00-00', '', '', '', 'Minor', 'Married', 'Male'),
(30, 'PUTRI AISYAH NADIRA BT. OTHMAN', 'putriaisyahnadira@gmail.com', 1514949457, '951213065726', '', '1995-12-13', 'Malaysian', 'KUANTAN, PAHANG.', 'Female', 'Islam', 46, 161, 'Malay', 'Single', 'PT 7005, JALAN HELANG 2/2,\r\nTAMAN MURNI PERDANA, 23100,\r\nPAKA, TERENGGANU.', '', '', '0000-00-00', '', '', '', '', 'Well', 'Well', 'Bad', 'JAPANESE', 'Fair', 'Well', 'Well', 'Bad', '', '', 'ADMINISTRATIVE CLERK', 'ADMIN & FINANCE DEPArtment', '2017-09-05', 'DIPLOMA', '', '', '01117927072', 'NO 2-2-7, LEGASY 2 JALAN 6/4,\r\nTAMAN DESA MELAWATI, 53100,\r\nKUALA LUMPUR.', '', '', '', '', '', '', '', '', '', '', 'TAYLOR\'S UNIVERSITY', '2015 - 2017', 'DEGREE', 'UNI. SULTAN ZAINAL ABIDIN', '2013 - 2015', '', '', '', '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'OTHMAN DZULKIFLI', 'FATHER', 'Malaysian', '600618115125', '', '1960-06-18', 'TERENGGANU', 'Malay', 'Islam', 0, 0, 'Male', 'PT 7005, JALAN HELANG 2/2,\r\nTAMAN MURNI PERDANA, 23100,\r\nPAKA, TERENGGANU.', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(31, 'MOHD SYAHMI AIMAN B. MOHD KHALPIAH  ', 'samenaeman@yahoo.com', 1514950594, '920911145887', '', '1992-09-11', 'Malaysian', 'KUALA LUMPUR', 'Male', 'Islam', 95, 175, 'Malay', 'Single', 'LOT 669B, JALAN ALOR DAMAT,\r\nKAMPUNG BALAI MARAS, 21030,\r\nKUALA TERENGGANU, TERENGGANU.', '', '', '0000-00-00', '', '', '', 'DIPLOMA', 'Well', 'Good', 'Bad', '', '', 'Well', 'Well', 'Bad', '', '', 'TECHNICAL ASSISTANT', 'FLEET MANAGEMENT DEPARTMENT', '2014-12-15', 'CERTIFICATE (SKM)', '01119816449', '', '01125547442', '1571, KAMPUNG BAKAU TINGGI,\r\n24000, KEMAMAN, TERENGGANU.', '7-ELEVEN SDN. BHD. (GONG BADAK)', '2 MONTHS', 'STORE ASSOCIATE', 'RM900', 'STUDY', '', '', '', '', '', 'UNI. KUALA LUMPUR MALAYSIAN INSTITUTE OF \r\nMARINE ENGINEERING TECHNOLOGY', '3 YEARS', 'DIPLOMA', 'ILP GONG BADAK', '1 YEAR 5 MONTHS', '', '', '', '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ROHAYA BT. ISMAIL', 'MOTHER', 'Malaysian', '620314115220', '', '1962-03-14', 'KUALA TERENGGANU', 'Malay', 'Islam', 55, 166, 'Female', 'LOT 669B, JALAN ALOR DAMAT,\r\nKAMPUNG BALAI MARAS, 21030,\r\nKUALA TERENGGANU, TERENGGANU.', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(32, 'AIZAT FAIZ B. ABDUL RAHMAN', '', 1514951340, '910130115133', '', '1991-01-30', 'Malaysian', 'HOSPITAL BESAR K.TERENGGANU', 'Male', 'Islam', 55, 170, 'Malay', 'Single', 'LOT 3374 TAMAN CHENDERING\r\nUTAMA, 21080, KUALA TERENGGANU,\r\nTERENGGANU.', '', '', '0000-00-00', '', '', '', '', 'Well', 'Well', 'Bad', '', '', 'Well', 'Well', 'Bad', '', '', 'TRAINING MANAGEMENT', 'ACCOUNT', '0000-00-00', '', '', '', '0126987616', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ABDUL RAHMAN B. ALI', 'FATHER', 'Malaysian', '610505115515', '', '1961-05-05', 'KUALA TERENGGANU', 'Malay', 'Islam', 78, 180, 'Male', 'LOT 3374 TAMAN CHENDERING\r\nUTAMA, 21080, KUALA TERENGGANU,\r\nTERENGGANU.', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', ''),
(33, 'WAN NAZIRAH BT. WAN MOHAMMAD    ', 'nazirah.mohammad@yahoo.com', 1515053690, '870122115586', '', '1987-12-22', 'Malaysian', 'TERENGGANU', 'Female', 'Islam', 52, 164, 'Malay', 'Married', '428 KG. CHERANG MELILING,\r\n22000, JERTEH, BESUT,\r\nTERENGGANU.', '', '', '0000-00-00', '', '', '', '', 'Well', 'Well', 'Bad', '', '', 'Fair', 'Well', 'Bad', '', '', 'HR EXECUTIVE (CONTRACT)', 'HR ADMIN', '2015-01-25', 'BACHELOR (HONS) IN HRM', '0176548205', '', '0132620947', '', 'BINIRIS ASIA SDN. BHD.', '1 YEAR 6 MOTNHS', 'HR ASSIST.', 'RM2600', 'GIVING A BIRTH', '', '', '', '', '', 'UNIVERSITY COLLEGE OF \r\nDUBLIN, IRELAND', '1 YEAR', 'MASTER IN HRM', 'DUBLIN BUSINESS SCHOOL, \r\nIRELAND', '3 YEARS', 'MOHAZMI AMRI B. MOHAMAD', 'HUSBAND', 'Malaysian', '870410145341', '', '1987-04-10', 74, 178, 'Malay', 'Islam', 'NO.4 JALAN PANDAN INDAH 19,\r\nPANDAN INDAH, 55100, \r\nAMPANG, KUALA LUMPUR.', '55100', '', '0132620947', 'NO.4 JALAN PANDAN INDAH 19,\r\nPANDAN INDAH, 55100, \r\nAMPANG, KUALA LUMPUR.', '55100', '', 'hamy_mohamad@yahoo.com', 'UNIVERSITY AL-AZHAR', 'CAIRO, EGYPT', '', '', '', 'WAN MOHAMMAD B. WAN MOHAMMAD', 'FATHER', 'Malaysian', '620729115169', '', '1962-07-29', 'TERENGGANU', 'Malay', 'Islam', 83, 168, 'Male', '428 KG. CHERANG MELILING,\r\n22000, JERTEH, BESUT,\r\nTERENGGANU.', 'NURHANA NABILA BT. MOHAZMI AMRI', '2014-06-25', '7 MONTHS', '140625030782', '', 'Minor', 'Married', 'Female', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `j_staff`
--
ALTER TABLE `j_staff`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `user_ic` (`user_ic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `j_staff`
--
ALTER TABLE `j_staff`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
