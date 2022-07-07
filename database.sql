create database hotel;

use hotel;

CREATE TABLE `room` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `daate` varchar(30) NOT NULL,
  `dayss` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `checked` varchar(30) NOT NULL,
  `room` varchar(30) NOT NULL,
  `idcard` varchar(30) NOT NULL,
  `payment` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
);