-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.4.32-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных hospital
CREATE DATABASE IF NOT EXISTS `hospital` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `hospital`;

-- Дамп структуры для таблица hospital.analysis
CREATE TABLE IF NOT EXISTS `analysis` (
  `AnalysisID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `medicalCardID` int(10) unsigned NOT NULL,
  `analysisName` varchar(50) NOT NULL,
  `dateOfAppointment` date NOT NULL,
  `analysisResult` varchar(100) DEFAULT NULL,
  `dateOfSetResult` date DEFAULT NULL,
  PRIMARY KEY (`AnalysisID`),
  KEY `medicalCardID` (`medicalCardID`),
  CONSTRAINT `analysis_ibfk_1` FOREIGN KEY (`medicalCardID`) REFERENCES `medicalcard` (`medicalCardID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы hospital.analysis: ~1 rows (приблизительно)
INSERT INTO `analysis` (`AnalysisID`, `medicalCardID`, `analysisName`, `dateOfAppointment`, `analysisResult`, `dateOfSetResult`) VALUES
	(6, 12, 'Название анализа', '2025-06-23', 'Положительный ', '2025-06-23');

-- Дамп структуры для таблица hospital.department
CREATE TABLE IF NOT EXISTS `department` (
  `departmentID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `departmentName` varchar(100) NOT NULL,
  PRIMARY KEY (`departmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы hospital.department: ~4 rows (приблизительно)
INSERT INTO `department` (`departmentID`, `departmentName`) VALUES
	(1, 'Наркологическое отделение'),
	(2, 'Отделение 1'),
	(3, 'Психиатрическое отделение'),
	(4, 'Отделение 2');

-- Дамп структуры для таблица hospital.diagnosis
CREATE TABLE IF NOT EXISTS `diagnosis` (
  `diagnosisID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `medicalCardID` int(10) unsigned NOT NULL,
  `diseaseID` int(10) unsigned NOT NULL,
  `treatmentOfTheDiagnosis` varchar(150) DEFAULT NULL,
  `installationDate` datetime NOT NULL,
  PRIMARY KEY (`diagnosisID`),
  KEY `medicalCardID` (`medicalCardID`),
  KEY `diseaseID` (`diseaseID`),
  CONSTRAINT `diagnosis_ibfk_1` FOREIGN KEY (`medicalCardID`) REFERENCES `medicalcard` (`medicalCardID`),
  CONSTRAINT `diagnosis_ibfk_2` FOREIGN KEY (`diseaseID`) REFERENCES `disease` (`diseaseID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы hospital.diagnosis: ~4 rows (приблизительно)
INSERT INTO `diagnosis` (`diagnosisID`, `medicalCardID`, `diseaseID`, `treatmentOfTheDiagnosis`, `installationDate`) VALUES
	(20, 12, 2, 'Есть', '2025-06-23 20:53:59'),
	(21, 12, 1, NULL, '2025-06-23 20:55:41'),
	(22, 12, 1, NULL, '2025-06-23 21:04:07'),
	(23, 12, 1, 'Новый', '2025-06-23 21:07:20');

-- Дамп структуры для таблица hospital.discharge
CREATE TABLE IF NOT EXISTS `discharge` (
  `medicalCardID` int(10) unsigned NOT NULL,
  `treatmentResults` varchar(255) NOT NULL,
  `recommendations` varchar(255) NOT NULL,
  `dateOfDischarge` date NOT NULL,
  PRIMARY KEY (`medicalCardID`),
  CONSTRAINT `discharge_ibfk_1` FOREIGN KEY (`medicalCardID`) REFERENCES `medicalcard` (`medicalCardID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы hospital.discharge: ~0 rows (приблизительно)

-- Дамп структуры для таблица hospital.disease
CREATE TABLE IF NOT EXISTS `disease` (
  `diseaseID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `symbol` char(1) NOT NULL,
  `number` varchar(4) NOT NULL,
  `description` varchar(75) NOT NULL,
  PRIMARY KEY (`diseaseID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы hospital.disease: ~4 rows (приблизительно)
INSERT INTO `disease` (`diseaseID`, `symbol`, `number`, `description`) VALUES
	(1, 'A', '00.0', 'Описание'),
	(2, 'A', '99.9', 'Кашель'),
	(3, 'A', '11.2', 'Икота'),
	(4, 'A', '11.1', 'Не оспа');

-- Дамп структуры для таблица hospital.employee
CREATE TABLE IF NOT EXISTS `employee` (
  `EmployeeID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullName` varchar(100) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `experience` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`EmployeeID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы hospital.employee: ~4 rows (приблизительно)
INSERT INTO `employee` (`EmployeeID`, `fullName`, `specialization`, `category`, `experience`) VALUES
	(11, 'Василий Г Г', 'Кардиолог', 'Высшая', 15),
	(15, 'Пётр Б Б', 'Хирург', '1', 11),
	(21, 'Ирина И И', 'Медсестра', '3', 5),
	(22, 'Евгений В В', 'Окулист', 'Третья', 20);

-- Дамп структуры для таблица hospital.medicalcard
CREATE TABLE IF NOT EXISTS `medicalcard` (
  `medicalCardID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `patientID` int(10) unsigned NOT NULL,
  `wardID` int(10) unsigned DEFAULT NULL,
  `nurseOnDutyID` int(10) unsigned NOT NULL,
  `doctorOnDutyID` int(10) unsigned DEFAULT NULL,
  `reasonForAdmission` varchar(150) NOT NULL,
  `initialInspectionData` varchar(255) DEFAULT NULL,
  `dateAndTimeOfAdmission` datetime NOT NULL,
  PRIMARY KEY (`medicalCardID`),
  KEY `patientID` (`patientID`),
  KEY `wardID` (`wardID`),
  KEY `nurseOnDutyID` (`nurseOnDutyID`),
  KEY `doctorOnDutyID` (`doctorOnDutyID`),
  CONSTRAINT `medicalcard_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `patient` (`patientID`),
  CONSTRAINT `medicalcard_ibfk_2` FOREIGN KEY (`wardID`) REFERENCES `ward` (`wardID`),
  CONSTRAINT `medicalcard_ibfk_3` FOREIGN KEY (`nurseOnDutyID`) REFERENCES `employee` (`EmployeeID`),
  CONSTRAINT `medicalcard_ibfk_4` FOREIGN KEY (`doctorOnDutyID`) REFERENCES `employee` (`EmployeeID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы hospital.medicalcard: ~1 rows (приблизительно)
INSERT INTO `medicalcard` (`medicalCardID`, `patientID`, `wardID`, `nurseOnDutyID`, `doctorOnDutyID`, `reasonForAdmission`, `initialInspectionData`, `dateAndTimeOfAdmission`) VALUES
	(12, 6, 3, 21, 15, '', 'Данные первичного осмотра', '2025-06-23 20:26:48');

-- Дамп структуры для таблица hospital.patient
CREATE TABLE IF NOT EXISTS `patient` (
  `patientID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `passportData` varchar(255) NOT NULL,
  `insuranceCompany` varchar(50) NOT NULL,
  `insurancePolicyNumber` varchar(50) NOT NULL,
  PRIMARY KEY (`patientID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы hospital.patient: ~1 rows (приблизительно)
INSERT INTO `patient` (`patientID`, `passportData`, `insuranceCompany`, `insurancePolicyNumber`) VALUES
	(6, 'Честер И В', 'Компания 1', '99-99-99');

-- Дамп структуры для таблица hospital.ward
CREATE TABLE IF NOT EXISTS `ward` (
  `wardID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `departmentID` int(10) unsigned NOT NULL,
  `headOfTheWardID` int(10) unsigned NOT NULL,
  `totalNumberOfBeds` tinyint(3) unsigned NOT NULL,
  `wardNumber` varchar(4) NOT NULL,
  PRIMARY KEY (`wardID`),
  KEY `departmentID` (`departmentID`),
  KEY `headOfTheWardID` (`headOfTheWardID`),
  CONSTRAINT `ward_ibfk_1` FOREIGN KEY (`departmentID`) REFERENCES `department` (`departmentID`),
  CONSTRAINT `ward_ibfk_2` FOREIGN KEY (`headOfTheWardID`) REFERENCES `employee` (`EmployeeID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы hospital.ward: ~5 rows (приблизительно)
INSERT INTO `ward` (`wardID`, `departmentID`, `headOfTheWardID`, `totalNumberOfBeds`, `wardNumber`) VALUES
	(1, 1, 11, 11, '1'),
	(2, 1, 11, 20, '2'),
	(3, 3, 11, 20, '3'),
	(4, 3, 15, 5, '4'),
	(5, 1, 11, 20, '20');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
