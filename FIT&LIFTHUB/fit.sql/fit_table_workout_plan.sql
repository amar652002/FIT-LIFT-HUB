
-- --------------------------------------------------------

--
-- Table structure for table `workout_plan`
--

DROP TABLE IF EXISTS `workout_plan`;
CREATE TABLE `workout_plan` (
  `WID` int(150) NOT NULL,
  `DAY` varchar(150) NOT NULL,
  `BODY_PART` varchar(150) NOT NULL,
  `EXERCISE` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workout_plan`
--

INSERT INTO `workout_plan` (`WID`, `DAY`, `BODY_PART`, `EXERCISE`) VALUES
(4, 'Monday ', ' CHEST & TRICEPS(Advance)', 8),
(5, 'Tuesday', 'BACK & BICEPS(Advance)', 8),
(6, 'Wednesday', 'LEGS(Advance)', 6),
(7, 'Thursday', 'CHEST & TRICEPS(Advance)', 8),
(8, 'FRIDAY', 'BACK & BICEPS(Advance)', 8),
(9, 'SATURDAY', 'SHOULDER(Advance)', 6),
(10, 'Monday(Advance)', 'Shoulder', 8),
(11, 'Tuesday(Advance)', 'Biceps', 8),
(13, 'Wednesday(Advance)', 'Chest', 8),
(14, 'Thursday(Advance)', 'Back', 8),
(15, 'Friday(Advance)', 'Legs', 8),
(16, 'Saturday(Advance)', 'Triceps', 8);
