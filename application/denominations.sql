DROP TABLE IF EXISTS `denominations`;

CREATE TABLE `denominations` (
  `ID` int(1) NOT NULL PRIMARY KEY,
  `GroupName` varchar(24) NOT NULL,
  `Denom` varchar(128) NOT NULL
)