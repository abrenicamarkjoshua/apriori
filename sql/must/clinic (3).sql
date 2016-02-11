-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2015 at 11:01 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` text NOT NULL,
  `admin_pass` text NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pass`, `access`) VALUES
('MNL1129', '1234', 1),
('LPU1234', '1234', 2);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL,
  `empid` text NOT NULL,
  `emp_pass` text NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `birthday` text NOT NULL,
  `gender` text NOT NULL,
  `department` text NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL,
  `civilstat` text NOT NULL,
  `medicalrecord_op` text NOT NULL,
  `medicalrecord_rec` text NOT NULL,
  `medicalrecord_ex` text NOT NULL,
  `medicalrecord` text NOT NULL,
  `phy_vat` text NOT NULL,
  `phy_htta` text NOT NULL,
  `phy_vs` text NOT NULL,
  `phy_fmh` text NOT NULL,
  `phy_fm` text NOT NULL,
  `lab_f` text NOT NULL,
  `lab_u` text NOT NULL,
  `lab_cbc` text NOT NULL,
  `lab_hsc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `empid`, `emp_pass`, `lastname`, `firstname`, `middlename`, `birthday`, `gender`, `department`, `address`, `contact`, `civilstat`, `medicalrecord_op`, `medicalrecord_rec`, `medicalrecord_ex`, `medicalrecord`, `phy_vat`, `phy_htta`, `phy_vs`, `phy_fmh`, `phy_fm`, `lab_f`, `lab_u`, `lab_cbc`, `lab_hsc`) VALUES
(1, '1125456', '1234', 'Peren', 'Jerian', '111', '2015-09-03', 'Female', 'COECSA', 'Cavite', '09123456789', 'Married', '', '', '', '', 'Visual Activity Test', 'Head to toe assessment', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employeearchive`
--

CREATE TABLE IF NOT EXISTS `employeearchive` (
  `id` int(11) NOT NULL,
  `empid` text NOT NULL,
  `emp_pass` text NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `birthday` text NOT NULL,
  `gender` text NOT NULL,
  `department` text NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL,
  `civilstat` text NOT NULL,
  `medicalrecord_op` text NOT NULL,
  `medicalrecord_rec` text NOT NULL,
  `medicalrecord_ex` text NOT NULL,
  `medicalrecord` text NOT NULL,
  `phy_vat` text NOT NULL,
  `phy_htta` text NOT NULL,
  `phy_vs` text NOT NULL,
  `phy_fmh` text NOT NULL,
  `phy_fm` text NOT NULL,
  `lab_f` text NOT NULL,
  `lab_u` text NOT NULL,
  `lab_cbc` text NOT NULL,
  `lab_hsc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeearchive`
--

INSERT INTO `employeearchive` (`id`, `empid`, `emp_pass`, `lastname`, `firstname`, `middlename`, `birthday`, `gender`, `department`, `address`, `contact`, `civilstat`, `medicalrecord_op`, `medicalrecord_rec`, `medicalrecord_ex`, `medicalrecord`, `phy_vat`, `phy_htta`, `phy_vs`, `phy_fmh`, `phy_fm`, `lab_f`, `lab_u`, `lab_cbc`, `lab_hsc`) VALUES
(1, '1125456', '1234', 'Peren', 'Jerian', '111', '2015-09-03', 'Female', 'COECSA', 'Cavite', '09123456789', 'Married', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lab_procedure`
--

CREATE TABLE IF NOT EXISTS `lab_procedure` (
  `id` int(11) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `transDate` date NOT NULL,
  `Fecalysis` int(11) NOT NULL,
  `Parasite` varchar(30) NOT NULL,
  `PusCell` varchar(100) NOT NULL,
  `RBC` varchar(100) NOT NULL,
  `FBacteria` varchar(30) NOT NULL,
  `Macrophages` varchar(30) NOT NULL,
  `FatGlobules` varchar(30) NOT NULL,
  `Urinalysis` int(11) NOT NULL,
  `Color` varchar(30) NOT NULL,
  `Appearance` varchar(30) NOT NULL,
  `Glucose` varchar(30) NOT NULL,
  `Protein` varchar(30) NOT NULL,
  `UBacteria` varchar(30) NOT NULL,
  `Nitrite` varchar(30) NOT NULL,
  `CBC` int(11) NOT NULL,
  `RedBloodCell` decimal(10,2) NOT NULL,
  `WhiteBloodCell` decimal(10,2) NOT NULL,
  `Hemoglobin` decimal(10,2) NOT NULL,
  `Hematocrit` decimal(10,2) NOT NULL,
  `Platelets` decimal(10,2) NOT NULL,
  `OralProphylaxis` int(11) NOT NULL,
  `TartarRemoval` varchar(5) NOT NULL,
  `GinivalCleaning` varchar(5) NOT NULL,
  `Piezon` varchar(5) NOT NULL,
  `Rectoration` int(11) NOT NULL,
  `RectorationRes` varchar(5) NOT NULL,
  `Extraction` int(11) NOT NULL,
  `SimpleExtraction` varchar(5) NOT NULL,
  `SurgicalExtraction` varchar(5) NOT NULL,
  `Others` int(11) NOT NULL,
  `Specify` varchar(300) NOT NULL,
  `VisualAcuityTest` int(11) NOT NULL,
  `Snellen` varchar(200) NOT NULL,
  `RandomE` varchar(200) NOT NULL,
  `HeadToToeAssessment` int(11) NOT NULL,
  `HTTARes` varchar(500) NOT NULL,
  `VitalSigns` int(11) NOT NULL,
  `Height` varchar(50) NOT NULL,
  `Weight` varchar(50) NOT NULL,
  `Temperatue` varchar(50) NOT NULL,
  `BloodPresure` varchar(100) NOT NULL,
  `Pulse` varchar(100) NOT NULL,
  `FamilyMedicalRecord` int(11) NOT NULL,
  `SpecifyFMR` varchar(500) NOT NULL,
  `MedicalRecord` int(11) NOT NULL,
  `SpecifyMR` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='Table for Laboratory Procedures';

--
-- Dumping data for table `lab_procedure`
--

INSERT INTO `lab_procedure` (`id`, `uid`, `transDate`, `Fecalysis`, `Parasite`, `PusCell`, `RBC`, `FBacteria`, `Macrophages`, `FatGlobules`, `Urinalysis`, `Color`, `Appearance`, `Glucose`, `Protein`, `UBacteria`, `Nitrite`, `CBC`, `RedBloodCell`, `WhiteBloodCell`, `Hemoglobin`, `Hematocrit`, `Platelets`, `OralProphylaxis`, `TartarRemoval`, `GinivalCleaning`, `Piezon`, `Rectoration`, `RectorationRes`, `Extraction`, `SimpleExtraction`, `SurgicalExtraction`, `Others`, `Specify`, `VisualAcuityTest`, `Snellen`, `RandomE`, `HeadToToeAssessment`, `HTTARes`, `VitalSigns`, `Height`, `Weight`, `Temperatue`, `BloodPresure`, `Pulse`, `FamilyMedicalRecord`, `SpecifyFMR`, `MedicalRecord`, `SpecifyMR`) VALUES
(1, '100380', '2015-10-03', 1, 'No OVA', '1', '1', 'Normal', 'None', 'None', 1, 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 1, '4.75', '4400.00', '120.00', '38.50', '149.00', 1, 'Yes', 'Yes', 'Yes', 1, 'No', 1, 'Yes', 'Yes', 0, '', 1, 'test', 'test', 1, 'awdawdaw', 1, 'H', 'W', 'T', 'B', 'P', 1, '                         dawdawdawda       ', 1, '                                test'),
(2, '2012-00002', '2015-10-04', 1, 'Parasite Seen', '11', '1', 'Normal', 'None', 'None', 0, '', '', '', '', '', '', 0, '0.00', '0.00', '0.00', '0.00', '0.00', 1, 'Yes', 'Yes', 'Yes', 0, '', 0, '', '', 0, 'TEST TEST TEST TEST', 0, '', '', 0, '', 0, '', '', '', '', '', 0, '', 0, ''),
(3, '2014-00592', '2015-10-04', 1, 'No OVA', '1', '1', 'Normal', 'None', 'None', 0, '', '', '', '', '', '', 0, '0.00', '0.00', '0.00', '0.00', '0.00', 1, 'Yes', 'Yes', 'Yes', 0, '', 0, '', '', 0, '', 0, '', '', 0, '', 0, '', '', '', '', '', 0, '', 0, ''),
(4, '2012-10777', '2015-10-11', 1, 'No OVA', '', '', 'Many', 'None', 'None', 1, 'Abnormal', 'Abnormal', 'Abnormal', 'Normal', 'Normal', 'Normal', 0, '0.00', '0.00', '0.00', '0.00', '0.00', 1, 'Yes', 'Yes', 'Yes', 0, '', 0, '', '', 0, '', 0, '', '', 0, '', 0, '', '', '', '', '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `mst_suggestion`
--

CREATE TABLE IF NOT EXISTS `mst_suggestion` (
  `id` int(11) NOT NULL,
  `result_id` varchar(50) NOT NULL,
  `lab_proc_name` varchar(100) NOT NULL,
  `suggestion` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_suggestion`
--

INSERT INTO `mst_suggestion` (`id`, `result_id`, `lab_proc_name`, `suggestion`) VALUES
(1, 'URI_Abnormal_Color', 'Urinalysis Color', 'Above 10% of the students suffers from having abnormal urine color. We may suggest to warn students to minimize consuming softdrinks and carbonated drinks.'),
(2, 'URI_Abnormal_Appearance', 'Urinalysis Appearance', 'We may suggest to have a phenazopyridine (Pyridium)  test in the clinic or may warn students to consult a doctor. This medication is used to relieve burning and pain caused by urinary-tract infections'),
(3, 'URI_Abnormal_Glucose', 'Urinalysis Glucose', 'When too much glucose is found in the urine, the most common culprit is diabetes. We suggest to warn student about having high glucose level or refer you to an endocrinologist and a nutritionist to help plan the best strategies to get your glucose levels under control.'),
(4, 'URI_Abnormal_Protein', 'Urinalysis Protein', 'If proteinuria is not controlled, the increased amount of protein in your urine can lead to more kidney damage. We suggest to conduct a test in clinic to have the eGFR (estimated glomerular filtration rate) test or a 24-hour urine test'),
(5, 'URI_Abnormal_Bacteria', 'Urinalysis Bacteria', 'Drink plenty of water each day to cleanse the bladder and urinary tract unless your healthcare provider has told you to limit how much fluid you drink. We suggest to secure a clean water in each drinking fountain provided by the school, make sure that the fountains are displayed in a clean area'),
(6, 'URI_Abnormal_Nitrate', 'Urinalysis Nitrate', 'All patients should avoid intense athletic training or heavy physical work before the test, as these activities may cause small amounts of blood to appear in the urine. Specially the members of the athletic programs offered by the campus'),
(7, 'Fecal_Abnormal_Parasite', 'Fecalysis Parasite', 'We prescribe Antibiotic like Rifaximine tablet along with Pre and Probiotic capsule to be offer in clinic. Clinic must have oral rehydration salt solution procedure.'),
(8, 'Fecal_Abnormal_Bacteria', 'Fecalysis Bacteria', 'The main cause of bacteria in fecal is dehydration and food intake. We suggest that they must conduct a study in the campus i f their foods and products are safe.'),
(9, 'Fecal_Abnormal_Macrophages', 'Fecalysis Macrophages', 'We may suggest to warn the students to minimize spicy and fried foods. Initiate clean enviornment so that this infection will not spread to other family members. '),
(10, 'Fecal_Abnormal_FatGlobules', 'Fecalysis Fat Globules', 'Abnormal count of fat globules have negative effect in patients health.We suggest to promote to each and every students and employees to eat a normal diet containing about 100 grams of fat per day. The health care provider may ask you to stop using drugs or food additives that could affect the test.'),
(11, 'Fecal_Abnormal_PusCell', 'Fecalysis Pus Cell', 'Abnormal rate of PUS Cell can cause to cancerous cells.To prevent it from happening we suggest to students to take sufficient water, fluids in any form such as juices without sugar, coconut water lemon water etc. helps to remove the infection.'),
(12, 'CBC_Abnormal_RBC', 'CBC Red blood cell', 'We may suggest that the clinic must require students to have a regular check -up in blood to monitor each students abnormal blood count that may cause serious diseases.'),
(13, 'CBC_Abnormal_WBC', 'CBC White blood cell', 'We may suggest that the clinic must require students to have a regular check -up in blood to monitor each students abnormal blood count that may cause serious diseases.'),
(14, 'CBC_Abnormal_HEMO', 'CBC Hemoglobin', 'We may suggest that the clinic must require students to have a regular check -up in blood to monitor each students abnormal blood count that may cause serious diseases.'),
(15, 'CBC_Abnormal_HEMA', 'CBC Hematocrit', 'We may suggest that the clinic must require students to have a regular check -up in blood to monitor each students abnormal blood count that may cause serious diseases.'),
(16, 'CBC_Abnormal_Platelets', 'CBC Platelets', 'We may suggest that the clinic must require students to have a regular check -up in blood to monitor each students abnormal blood count that may cause serious diseases.');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `birthday` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `studentno` varchar(14) NOT NULL,
  `guardianno` varchar(14) NOT NULL,
  `course` varchar(50) NOT NULL,
  `civilstat` varchar(20) NOT NULL,
  `refferal` text NOT NULL,
  `medicalrecord_op` text NOT NULL,
  `medicalrecord_rec` text NOT NULL,
  `medicalrecord_ex` text NOT NULL,
  `medicalrecord` text NOT NULL,
  `phy_vat` text NOT NULL,
  `phy_htta` text NOT NULL,
  `phy_vs` text NOT NULL,
  `phy_fmh` text NOT NULL,
  `phy_fm` text NOT NULL,
  `lab_f` text NOT NULL,
  `lab_u` text NOT NULL,
  `lab_cbc` text NOT NULL,
  `lab_hsc` text NOT NULL,
  `ref_p` text NOT NULL,
  `ref_im` text NOT NULL,
  `ref_fm` text NOT NULL,
  `ref_o` text NOT NULL,
  `ref_ent` text NOT NULL,
  `ref_or` text NOT NULL,
  `ref_s` text NOT NULL,
  `ref_g` text NOT NULL,
  `ref_com` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_id`, `lastname`, `firstname`, `middlename`, `birthday`, `gender`, `address`, `studentno`, `guardianno`, `course`, `civilstat`, `refferal`, `medicalrecord_op`, `medicalrecord_rec`, `medicalrecord_ex`, `medicalrecord`, `phy_vat`, `phy_htta`, `phy_vs`, `phy_fmh`, `phy_fm`, `lab_f`, `lab_u`, `lab_cbc`, `lab_hsc`, `ref_p`, `ref_im`, `ref_fm`, `ref_o`, `ref_ent`, `ref_or`, `ref_s`, `ref_g`, `ref_com`) VALUES
(1, '100380', 'Abrenica', 'Mark Joshua', 'Rivera', '1993-05-21', 'Male', 'Sm the grass residences', '09175824979', '09175824979', 'bsit', 'Single', '', 'Oral Prophylaxis', 'Rectoration', 'Extraction', '', 'Visual Activity Test', '', '', '', '', 'Fecalysis', 'Urinalysis', 'Complete Blood Count', 'Hb Shy Screening', '', '', '', '', '', '', '', '', ''),
(2, '2012-00002', 'Mainit', 'Josephine', 'Anales', '1965-06-02', 'Female', 'Imus', '0909090909', '0908080808', 'BSCS', 'Married', '0', '', 'Rectoration', '', '', '', '', 'Vital Signs', '', '', 'Fecalysis', 'Urinalysis', '', '', '', '', '', '', '', '', '', '', ''),
(3, '2012-10777', 'Mainit', 'Joshua', 'Anales', '1995-10-29', 'Male', 'Imus', '09492967596', '09228768440', 'BSCS', 'Single', '0', '', 'Rectoration', '', '', '', 'Head to toe assessment', 'Vital Signs', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '2014-00592', 'Mainit', 'Jose Lorenzo', 'Anales', '1997-11-29', 'Male', 'Imus', '09898989', '0954264', 'BSMMA', 'Single', '0', 'Oral Prophylaxis', 'Rectoration', 'Extraction', '', 'Visual Activity Test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '2012-00011', 'Manzano', 'Jerica', 'Mique', '2015-10-06', 'Female', 'Paliparan', '090909222', '0909145454', 'BSCS', 'Single', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '2012-10101', 'Macaalay', 'Charline', 'Punsalan', '2015-09-29', 'Female', 'General Trias', '0911154246', '09333643654', 'BSCS', 'Single', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '2012-10111', 'Chow ', 'Aira ', 'Garcia', '2015-10-01', 'Male', 'Imus, Cavite', '095554848', '0922646524', 'BSCS', 'Single', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentarchive`
--

CREATE TABLE IF NOT EXISTS `studentarchive` (
  `id` int(11) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `birthday` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `studentno` varchar(14) NOT NULL,
  `guardianno` varchar(14) NOT NULL,
  `course` varchar(50) NOT NULL,
  `civilstat` varchar(20) NOT NULL,
  `refferal` text NOT NULL,
  `medicalrecord_op` text NOT NULL,
  `medicalrecord_rec` text NOT NULL,
  `medicalrecord_ex` text NOT NULL,
  `medicalrecord` text NOT NULL,
  `phy_vat` text NOT NULL,
  `phy_htta` text NOT NULL,
  `phy_vs` text NOT NULL,
  `phy_fmh` text NOT NULL,
  `phy_fm` text NOT NULL,
  `lab_f` text NOT NULL,
  `lab_u` text NOT NULL,
  `lab_cbc` text NOT NULL,
  `lab_hsc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentarchive`
--

INSERT INTO `studentarchive` (`id`, `student_id`, `lastname`, `firstname`, `middlename`, `birthday`, `gender`, `address`, `studentno`, `guardianno`, `course`, `civilstat`, `refferal`, `medicalrecord_op`, `medicalrecord_rec`, `medicalrecord_ex`, `medicalrecord`, `phy_vat`, `phy_htta`, `phy_vs`, `phy_fmh`, `phy_fm`, `lab_f`, `lab_u`, `lab_cbc`, `lab_hsc`) VALUES
(1, '100380', 'Abrenica', 'Mark Joshua', 'Rivera', '1993-05-21', 'Male', 'Sm the grass residences', '09175824979', '09175824979', 'bsit', 'Single', '', 'Oral Prophylaxis', 'Rectoration', 'Extraction', 'bleh dental', 'Visual Activity Test', 'Head to toe assessment', 'Vital Signs', 'bleh', 'bleh', 'Fecalysis', 'Urinalysis', 'Complete Blood Count', 'Hb Shy Screening'),
(2, '2012-00002', 'Mainit', 'Josephine', 'Anales', '1965-06-02', 'Female', 'Imus', '0909090909', '0908080808', 'BSCS', 'Married', '0', 'Oral Prophylaxis', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '2012-10777', 'Mainit', 'Joshua', 'Anales', '1995-10-29', 'Male', 'Imus', '09123456987', '0909090909', 'BSCS', 'Single', '0', 'Oral Prophylaxis', '', '', '', 'Visual Activity Test', 'Head to toe assessment', 'Vital Signs', '', '', '', '', '', ''),
(4, '2014-00592', 'Mainit', 'Jose Lorenzo', 'Anales', '1997-11-29', 'Male', 'Imus', '09898989', '0954264', 'BSMMA', 'Single', '0', 'Oral Prophylaxis', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentbackup`
--

CREATE TABLE IF NOT EXISTS `studentbackup` (
  `id` int(11) NOT NULL,
  `student_id` varchar(10) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `birthday` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `studentno` varchar(14) NOT NULL,
  `guardianno` varchar(14) NOT NULL,
  `course` varchar(50) NOT NULL,
  `civilstat` varchar(50) NOT NULL,
  `refferal` text NOT NULL,
  `medicalrecord_op` text NOT NULL,
  `medicalrecord_rec` text NOT NULL,
  `medicalrecord_ex` text NOT NULL,
  `medicalrecord` text NOT NULL,
  `phy_vat` text NOT NULL,
  `phy_htta` text NOT NULL,
  `phy_vs` text NOT NULL,
  `phy_fmh` text NOT NULL,
  `phy_fm` text NOT NULL,
  `lab_f` text NOT NULL,
  `lab_u` text NOT NULL,
  `lab_cbc` text NOT NULL,
  `lab_hsc` text NOT NULL,
  `ref_p` text NOT NULL,
  `ref_im` text NOT NULL,
  `ref_fm` text NOT NULL,
  `ref_o` text NOT NULL,
  `ref_ent` text NOT NULL,
  `ref_or` text NOT NULL,
  `ref_s` text NOT NULL,
  `ref_g` text NOT NULL,
  `ref_com` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentbackup`
--

INSERT INTO `studentbackup` (`id`, `student_id`, `lastname`, `firstname`, `middlename`, `birthday`, `gender`, `address`, `studentno`, `guardianno`, `course`, `civilstat`, `refferal`, `medicalrecord_op`, `medicalrecord_rec`, `medicalrecord_ex`, `medicalrecord`, `phy_vat`, `phy_htta`, `phy_vs`, `phy_fmh`, `phy_fm`, `lab_f`, `lab_u`, `lab_cbc`, `lab_hsc`, `ref_p`, `ref_im`, `ref_fm`, `ref_o`, `ref_ent`, `ref_or`, `ref_s`, `ref_g`, `ref_com`) VALUES
(1, '100380', 'Abrenica', 'Mark Joshua', 'Rivera', '1993-05-21', 'Male', 'Sm the grass residences', '09175824979', '09175824979', 'bsit', 'Single', '', 'Oral Prophylaxis', 'Rectoration', 'Extraction', '', 'Visual Activity Test', '', '', '', '', 'Fecalysis', 'Urinalysis', 'Complete Blood Count', 'Hb Shy Screening', '', '', '', '', '', '', '', '', ''),
(2, '2012-00002', 'Mainit', 'Josephine', 'Anales', '1965-06-02', 'Female', 'Imus', '0909090909', '0908080808', 'BSCS', 'Married', '0', '', 'Rectoration', '', '', '', '', 'Vital Signs', '', '', 'Fecalysis', 'Urinalysis', '', '', '', '', '', '', '', '', '', '', ''),
(3, '2012-10777', 'Mainit', 'Joshua', 'Anales', '1995-10-29', 'Male', 'Imus', '09123456987', '0909090909', 'BSCS', 'Single', '0', '', 'Rectoration', '', '', '', 'Head to toe assessment', 'Vital Signs', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '2014-00592', 'Mainit', 'Jose Lorenzo', 'Anales', '1997-11-29', 'Male', 'Imus', '09898989', '0954264', 'BSMMA', 'Single', '0', 'Oral Prophylaxis', 'Rectoration', 'Extraction', '', 'Visual Activity Test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '2012-10111', 'Chua', 'Jay Joseph', 'Bebe', '2015-10-16', 'Male', 'Paliparan', '091234444', '098787245', 'BSCS', 'Single', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '2012-10222', 'De Ramos', 'Ron Deive', 'AAA', '2007-07-12', 'Male', 'Maragondon', '78975464', '8978798797', 'BSCS', 'Single', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '2012-10333', 'Pabiton', 'Gift Joy', 'Cong', '2003-03-19', 'Female', 'Malagasang', '354946216984', '321981691', 'CITHM', 'Single', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '2015-14111', 'Bryant ', 'Kobe', 'Abcd', '2004-06-17', 'Male', 'Dasmarinas', '123452321', '6545464', 'BSIT', 'Married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '2015-15151', 'James', 'Lebron', 'Efgh', '1995-06-14', 'Male', 'Silang', '48949844', '651984984', 'HRM', 'Married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '2015-15141', 'Sabal', 'Julius', 'Igos', '1995-06-20', 'Male', 'Salitran', '852147649', '61983295', 'BSIT', 'Married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '2015-42196', 'Martin', 'Mirna', 'Nmbv', '2015-10-05', 'Female', 'Pasay', '1233131', '123651231', 'BSCE', 'Married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '2012-78451', 'Dayal', 'James', 'Non', '1995-10-10', 'Male', 'General Trias', '123548', '321831', 'BSCS', 'Preffered not to answer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '2015-66686', 'Rousey', 'Ronda', 'Lalala', '2015-10-14', 'Female', 'Malagasang', '5145614261', '6519136161', 'BSMMA', 'Preffered not to answer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '2015-15123', 'Reyes', 'Helen', 'Anales', '1990-02-06', 'Female', 'Imus', '123651891', '3519816161', 'BSBA', 'Separated', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '2015-15531', 'Maglian', 'Shin Exequiel', 'Reyes', '1984-01-31', 'Male', 'Bacoor', '51371527356', '8746283768716', 'BSEE', 'Single', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '2015-36518', 'Reyes', 'Reynel', 'Anales', '2015-10-21', 'Male', 'Imus', '5454546984', '3546894654', 'BSIE', 'Single', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '2014-04854', 'Vicedo', 'Kryselle Iris', 'Villaflores', '1997-12-05', 'Female', 'Charina Homes, General Trias, Cavite', '09158526543', '09584127630', 'Multimedia Arts', 'Single', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '2014-09745', 'Javier', 'Moises Eleison', 'Villanueva', '1997-08-23', 'Male', 'Tagaytay City', '09279874165', '09168745920', 'Multimedia Arts', 'Single', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, '2014-00682', 'Codes', 'Timothy Joy', 'Nollora', '1997-07-15', 'Female', 'Dasmarinas, Cavite', '09264725634', '09238574156', 'Multimedia Arts', 'Single', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '2014-00758', 'Canunayon', 'Bienvenido', 'Castro', '1998-04-23', 'Male', 'Imus, Cavite', '09478546321', '09184569826', 'Multimedia Arts', 'Single', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeearchive`
--
ALTER TABLE `employeearchive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_procedure`
--
ALTER TABLE `lab_procedure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_suggestion`
--
ALTER TABLE `mst_suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentarchive`
--
ALTER TABLE `studentarchive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentbackup`
--
ALTER TABLE `studentbackup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employeearchive`
--
ALTER TABLE `employeearchive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lab_procedure`
--
ALTER TABLE `lab_procedure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mst_suggestion`
--
ALTER TABLE `mst_suggestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `studentarchive`
--
ALTER TABLE `studentarchive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `studentbackup`
--
ALTER TABLE `studentbackup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
