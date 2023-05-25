
-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `PID` int(150) NOT NULL,
  `MID` int(150) NOT NULL,
  `MNAME` varchar(150) NOT NULL,
  `AMOUNT` varchar(150) NOT NULL,
  `PAYMENT_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PID`, `MID`, `MNAME`, `AMOUNT`, `PAYMENT_DATE`) VALUES
(1, 1, '', '5000 ', '2023-04-29'),
(2, 2, '', '2000', '2023-04-25'),
(3, 3, '', '2300', '2023-04-02'),
(4, 4, '', '4000', '2023-04-08'),
(5, 8, '', '2600', '2023-04-02'),
(6, 9, '', '1300', '2023-04-20'),
(7, 10, '', '3000', '2023-04-05');
