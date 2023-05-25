
-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE `schedule` (
  `ID` int(150) NOT NULL,
  `DAY` varchar(150) NOT NULL,
  `TIME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`ID`, `DAY`, `TIME`) VALUES
(7, '(1)Monday , Tuesday , Wednesday', '6 am to 7 pm'),
(8, '(1)Thursday ,Friday ,Saturday', '9 am to 8 pm');
