
CREATE TABLE IF NOT EXISTS `poll_answer` (
  `ans_id` int(6) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `qst_id` int(6) NOT NULL,
  `opt` varchar(50) NOT NULL,
  PRIMARY KEY (`ans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `poll_answer`
--

-- --------------------------------------------------------

--
-- Table structure for table `poll_qst`
--

CREATE TABLE IF NOT EXISTS `poll_qst` (
  `qst_id` int(4) NOT NULL AUTO_INCREMENT,
  `qst` varchar(100) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  UNIQUE KEY `qst_id` (`qst_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `poll_qst`
--

INSERT INTO `poll_qst` (`qst_id`, `qst`, `opt1`, `opt2`, `opt3`) VALUES
(1, 'Church leaders can be female', 'Agree', 'Indifferent', 'Disagree'),
(2, 'Communion should be taken weekly', 'Agree', 'Indifferent', 'Disagree'),
(3, 'Speaking in tongues is evidence of conversion', 'Agree', 'Indifferent', 'Disagree'),
(4, 'All the gifts of the Spirit are still available today', 'Agree', 'Indifferent', 'Disagree'),
(5, 'The congregation should decide on all matters', 'Agree', 'Indifferent', 'Disagree'),
(6, 'Children can and should be baptised', 'Agree', 'Indifferent', 'Disagree'),
(7, 'Praise and worship should include contemporary songs', 'Agree', 'Indifferent', 'Disagree'),
(8, 'Preachers should teach the bible line by line', 'Agree', 'Indifferent', 'Disagree'),
(9, 'Churches should have their own building', 'Agree', 'Indifferent', 'Disagree'),
(10, 'Youth ministry is essential', 'Agree', 'Indifferent', 'Disagree');
