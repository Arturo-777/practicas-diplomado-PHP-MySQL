-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2019 at 03:44 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestor_escuela`
--

-- --------------------------------------------------------

--
-- Table structure for table `clases`
--

CREATE TABLE `clases` (
  `profID` varchar(10) DEFAULT NULL,
  `estudID` varchar(10) DEFAULT NULL,
  `matID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clases`
--

INSERT INTO `clases` (`profID`, `estudID`, `matID`) VALUES
('11', NULL, NULL),
('11', NULL, NULL),
('', NULL, NULL),
('', NULL, NULL),
(NULL, '01010101', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `docente`
--

CREATE TABLE `docente` (
  `profID` varchar(10) NOT NULL,
  `profNOM` varchar(10) DEFAULT NULL,
  `profAP` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docente`
--

INSERT INTO `docente` (`profID`, `profNOM`, `profAP`) VALUES
('', '', ''),
('11', 'apero', 'correa');

-- --------------------------------------------------------

--
-- Table structure for table `escuela`
--

CREATE TABLE `escuela` (
  `escuelaID` varchar(10) NOT NULL,
  `escuelaNOM` varchar(10) DEFAULT NULL,
  `rectorID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `escuela`
--

INSERT INTO `escuela` (`escuelaID`, `escuelaNOM`, `rectorID`) VALUES
('', '', ''),
('12333', 'la loquera', '001');

-- --------------------------------------------------------

--
-- Table structure for table `esc_personas`
--

CREATE TABLE `esc_personas` (
  `escuelaID` varchar(10) DEFAULT NULL,
  `profID` varchar(10) DEFAULT NULL,
  `estudID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `esc_personas`
--

INSERT INTO `esc_personas` (`escuelaID`, `profID`, `estudID`) VALUES
('', NULL, NULL),
('', NULL, NULL),
('', NULL, NULL),
(NULL, '11', NULL),
(NULL, '11', NULL),
(NULL, '', NULL),
(NULL, '', NULL),
(NULL, NULL, '01010101');

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

CREATE TABLE `estudiante` (
  `estudID` varchar(10) NOT NULL,
  `estudNOM` varchar(10) DEFAULT NULL,
  `estudAP` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estudiante`
--

INSERT INTO `estudiante` (`estudID`, `estudNOM`, `estudAP`) VALUES
('01010101', 'peperoni', 'rocino');

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE `materia` (
  `matID` varchar(10) NOT NULL,
  `matNOM` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rector`
--

CREATE TABLE `rector` (
  `rectorID` varchar(10) NOT NULL,
  `rectorNOM` varchar(10) DEFAULT NULL,
  `rectorAP` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rector`
--

INSERT INTO `rector` (`rectorID`, `rectorNOM`, `rectorAP`) VALUES
('', '', ''),
('001', 'pepe', 'gonzalez');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `tutorID` varchar(10) NOT NULL,
  `tutorNOM` varchar(10) DEFAULT NULL,
  `tutorAP` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`tutorID`, `tutorNOM`, `tutorAP`) VALUES
('20202002', 'pizza', 'pala');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_estud`
--

CREATE TABLE `tutor_estud` (
  `tutorID` varchar(10) DEFAULT NULL,
  `estudID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor_estud`
--

INSERT INTO `tutor_estud` (`tutorID`, `estudID`) VALUES
('20202002', NULL),
(NULL, '01010101'),
('20202002', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clases`
--
ALTER TABLE `clases`
  ADD KEY `profID` (`profID`),
  ADD KEY `estudID` (`estudID`),
  ADD KEY `matID` (`matID`);

--
-- Indexes for table `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`profID`);

--
-- Indexes for table `escuela`
--
ALTER TABLE `escuela`
  ADD PRIMARY KEY (`escuelaID`),
  ADD KEY `rectorID` (`rectorID`);

--
-- Indexes for table `esc_personas`
--
ALTER TABLE `esc_personas`
  ADD KEY `escuelaID` (`escuelaID`),
  ADD KEY `profID` (`profID`),
  ADD KEY `estudID` (`estudID`);

--
-- Indexes for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`estudID`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`matID`);

--
-- Indexes for table `rector`
--
ALTER TABLE `rector`
  ADD PRIMARY KEY (`rectorID`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`tutorID`);

--
-- Indexes for table `tutor_estud`
--
ALTER TABLE `tutor_estud`
  ADD KEY `tutorID` (`tutorID`),
  ADD KEY `estudID` (`estudID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `clases_ibfk_1` FOREIGN KEY (`profID`) REFERENCES `docente` (`profID`),
  ADD CONSTRAINT `clases_ibfk_2` FOREIGN KEY (`estudID`) REFERENCES `estudiante` (`estudID`),
  ADD CONSTRAINT `clases_ibfk_3` FOREIGN KEY (`matID`) REFERENCES `materia` (`matID`);

--
-- Constraints for table `escuela`
--
ALTER TABLE `escuela`
  ADD CONSTRAINT `escuela_ibfk_1` FOREIGN KEY (`rectorID`) REFERENCES `rector` (`rectorID`);

--
-- Constraints for table `esc_personas`
--
ALTER TABLE `esc_personas`
  ADD CONSTRAINT `esc_personas_ibfk_1` FOREIGN KEY (`escuelaID`) REFERENCES `escuela` (`escuelaID`),
  ADD CONSTRAINT `esc_personas_ibfk_2` FOREIGN KEY (`profID`) REFERENCES `docente` (`profID`),
  ADD CONSTRAINT `esc_personas_ibfk_3` FOREIGN KEY (`estudID`) REFERENCES `estudiante` (`estudID`);

--
-- Constraints for table `tutor_estud`
--
ALTER TABLE `tutor_estud`
  ADD CONSTRAINT `tutor_estud_ibfk_1` FOREIGN KEY (`tutorID`) REFERENCES `tutor` (`tutorID`),
  ADD CONSTRAINT `tutor_estud_ibfk_2` FOREIGN KEY (`estudID`) REFERENCES `estudiante` (`estudID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
