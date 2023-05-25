
-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `MID` int(150) NOT NULL,
  `MNAME` varchar(150) NOT NULL,
  `MEMAIL` varchar(150) NOT NULL,
  `MMOB` varchar(150) NOT NULL,
  `MPASS` varchar(150) NOT NULL,
  `MADD` varchar(150) NOT NULL,
  `MAGE` int(150) NOT NULL,
  `MSUB` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MID`, `MNAME`, `MEMAIL`, `MMOB`, `MPASS`, `MADD`, `MAGE`, `MSUB`) VALUES
(1, 'saroj', 'saroj@gmail.com', '9988554422', '1234', 'sakinaka', 24, '12 months'),
(2, 'shiv', 'shiv@gmail.com', '9988774422', '1234', 'sakinaka', 22, '4 months'),
(3, 'manoj', 'manoj@gmail.com', '8877445566', '1234', 'sakinaka', 27, '5 months'),
(4, 'pratik', 'pratik@gmail.com', '4455669988', '1234', 'sakinaka', 26, '8 months'),
(8, 'ashish', 'ashish@gmail.com', '7788559966', '1234', 'sakinaka', 22, '6 months'),
(9, 'hitesh', 'hitesh@gmail.com', '454455688', '1234', 'sakinaka', 23, '3 months'),
(10, 'aditya', 'adi@gmail.com', '1144556688', '1234', 'sakinaka', 29, '7 months');
