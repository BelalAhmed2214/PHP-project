-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `password`, `email`) VALUES
(1, 'BelalAhmed', '123456', 'belalahmed2214@gmail.com'),
(2, 'deifallah', '123456789', 'deifallah@gmail.com'),
(5, 'omar', 'islam1234', 'omar@gmail.com'),
(7, 'kamal', '145287', 'kamal@gmail.com'),
(8, 'ahmedaboaisha', '142536', 'ahmedjae@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;