
-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

DROP TABLE IF EXISTS `trainer`;
CREATE TABLE `trainer` (
  `TID` int(150) NOT NULL,
  `TNAME` varchar(150) NOT NULL,
  `TMOB` varchar(150) NOT NULL,
  `TEMAIL` varchar(150) NOT NULL,
  `TPASS` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`TID`, `TNAME`, `TMOB`, `TEMAIL`, `TPASS`) VALUES
(1, 'affan ', '12345647895', 'affan@gmail.com', '1234'),
(2, 'Denzil', '4455889966', 'den@gmail.com', '1234');
