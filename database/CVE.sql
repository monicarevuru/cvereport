-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2019 at 01:10 AM
-- Server version: 5.7.11-0ubuntu6
-- PHP Version: 7.0.4-7ubuntu2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CVE`
--

-- --------------------------------------------------------

--
-- Table structure for table `cve`
--

CREATE TABLE `cve` (
  `sname` varchar(100) NOT NULL,
  `oname` varchar(100) NOT NULL,
  `vname` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `cveid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cve`
--

INSERT INTO `cve` (`sname`, `oname`, `vname`, `pname`, `cveid`) VALUES
('power', 'NHPC', 'gonip construction company', 'NH/cont./1022', 'pngn'),
('power', 'NHPC', 'ss construction', 'NH/R-800/356', 'pnsn'),
('power', 'NTPC', 'ABB', 'DDCMIS', 'pnad'),
('power', 'NTPC', 'finolex', 'FOC', 'pnff'),
('power', 'PGCIL', 'bhushan limited', 'High Voltage Capacitors', 'ppbh'),
('telecom', '3GPP', 'ericsson', 'NSA 5G NR', 't3en'),
('telecom', '3GPP', 'nokia', 'NSA 5G NR', 't3nn'),
('telecom', '3GPP', 'qualcomm', 'NSA 5G NR', 't3qn'),
('telecom', 'GSMA', 'accelerite', 'Aepona Identity Server', 'tgaa'),
('telecom', 'GSMA', 'boloro', 'Boloro Authentication', 'tgbb'),
('telecom', 'GSMA', 'curity', 'Curity Identity Server', 'tgcc'),
('telecom', 'OMA', 'broadcom', 'Cable Coverter', 'tobc'),
('telecom', 'OMA', 'nokia', 'Nokia OZO', 'tonn'),
('telecom', 'OMA', 'qualcomm', 'Snapdragon', 'toqs');

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
  `oname` varchar(100) NOT NULL,
  `vname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pname` varchar(100) NOT NULL,
  `pdate` date NOT NULL,
  `cveid` varchar(20) NOT NULL,
  `vtype` varchar(20) NOT NULL,
  `cvss` int(11) NOT NULL,
  `summary` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pname`, `pdate`, `cveid`, `vtype`, `cvss`, `summary`) VALUES
('Aepona Identity Server', '2018-10-17', 'tgaa', '', 18, ''),
('Boloro Authentication', '2018-10-10', 'tgbb', 'security', 67, ''),
('Cable Coverter', '2018-09-18', 'tobc', '', 72, ''),
('Curity Identity Server', '2018-09-27', 'tgcc', 'network device', 56, ''),
('DDCMIS', '2018-12-12', 'pnad', 'power scarce', 40, ''),
('FOC', '2019-01-24', 'pnff', 'security', 10, ''),
('High Voltage Capacitors', '2018-11-14', 'ppbh', '', 34, ''),
('NH/cont./1022', '2019-01-02', 'pngn', 'security', 60, ''),
('NH/R-800/356', '2018-12-27', 'pnsn', '', 5, ''),
('Nokia OZO', '2018-08-24', 'tonn', '', 36, ''),
('NSA 5G NR', '2018-11-06', 't3en', 'network device', 45, ''),
('Snapdragon', '2018-09-20', 'toqs', 'security', 27, '');

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `sname` varchar(100) NOT NULL,
  `oname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`sname`, `oname`) VALUES
('telecom', 'GSMA');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vname` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cve`
--
ALTER TABLE `cve`
  ADD PRIMARY KEY (`sname`,`oname`,`vname`,`pname`);

--
-- Indexes for table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`oname`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pname`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`sname`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vname`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
