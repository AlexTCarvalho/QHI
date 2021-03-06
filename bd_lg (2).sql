-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jan-2019 às 22:16
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_lg`
--

--
-- Extraindo dados da tabela `fcr_acc`
--

INSERT INTO `fcr_acc` (`id`, `fail`, `sales`, `rate`, `month`, `year`) VALUES
(26, 98.5, 9800.2, 1.01, 1, 2017),
(27, 106.5, 7036.2, 1.51, 2, 2017),
(28, 139.8, 6949.2, 2.01, 3, 2017),
(29, 126.4, 6454.5, 1.96, 4, 2017),
(30, 121.4, 6912.4, 1.76, 5, 2017),
(31, 96.5, 6669.9, 1.45, 6, 2017),
(32, 85.9, 8263.5, 1.04, 7, 2017),
(33, 92.5, 9718.9, 0.95, 8, 2017),
(34, 72.8, 11570.2, 0.63, 9, 2017),
(35, 63.5, 14528.7, 0.44, 10, 2017),
(36, 66.9, 12666.5, 0.53, 11, 2017),
(37, 82.6, 10187.9, 0.81, 12, 2017),
(38, 16.7, 2743.1, 0.61, 1, 2018),
(39, 16.7, 2725, 0.61, 2, 2018),
(40, 15.9, 3371.2, 0.47, 3, 2018),
(41, 22.6, 2875, 0.79, 4, 2018),
(42, 19, 2163, 0.88, 5, 2018),
(43, 12.5, 1361.2, 0.91, 6, 2018),
(44, 17.8, 1933.6, 0.92, 7, 2018),
(45, 18.5, 1999.2, 0.92, 8, 2018),
(46, 14.4, 1987.8, 0.72, 9, 2018),
(47, 16.8, 1576.1, 1.06, 10, 2018),
(48, 15.9, 1724, 0.92, 11, 2018),
(53, 0, 0, 0, 1, 2019),
(54, 17.6, 865, 2.03, 12, 2018);

--
-- Extraindo dados da tabela `fcr_w`
--

INSERT INTO `fcr_w` (`id`, `fail`, `sales`, `rate`, `week`, `month`, `year`) VALUES
(1, 8.9, 522, 1.7, 49, 12, 2018),
(2, 12.2, 618, 1.97, 50, 12, 2018),
(3, 11.4, 597, 1.91, 51, 12, 2018),
(4, 0, 0, 0, 52, 12, 2018),
(5, 0, 0, 0, 52, 12, 2018);

--
-- Extraindo dados da tabela `ffr_acc`
--

INSERT INTO `ffr_acc` (`id`, `accsvc`, `waccs`, `rate`, `month`, `year`) VALUES
(1, 3584, 136541, 2.62, 1, 2017),
(2, 3361, 145608, 2.31, 2, 2017),
(3, 3310, 152022, 2.18, 3, 2017),
(4, 3270, 142719, 2.29, 4, 2017),
(5, 3322, 134140, 2.48, 5, 2017),
(6, 3222, 133253, 2.42, 6, 2017),
(7, 3143, 140669, 2.23, 7, 2017),
(8, 3060, 144399, 2.12, 8, 2017),
(9, 2908, 140705, 2.07, 9, 2017),
(10, 2727, 138474, 1.97, 10, 2017),
(11, 2458, 136468, 1.8, 11, 2017),
(12, 2447, 142440, 1.72, 12, 2017),
(13, 2400, 143427, 1.67, 1, 2018),
(14, 2362, 151251, 1.56, 2, 2018),
(15, 2406, 160559, 1.5, 3, 2018),
(16, 2603, 170858, 1.52, 4, 2018),
(17, 2651, 179032, 1.48, 5, 2018),
(18, 2744, 187062, 1.47, 6, 2018),
(19, 2828, 190924, 1.48, 7, 2018),
(20, 2782, 188588, 1.48, 8, 2018),
(21, 2600, 180993, 1.44, 9, 2018),
(22, 2455, 162927, 1.51, 10, 2018),
(23, 2280, 151417, 1.51, 11, 2018),
(24, 2269, 146518, 1.55, 12, 2018),
(25, 2269, 146518, 1.55, 12, 2018),
(26, 2269, 146518, 1.55, 12, 2018),
(64, 2005, 138083, 1.45, 1, 2019);

--
-- Extraindo dados da tabela `ffr_w`
--

INSERT INTO `ffr_w` (`id`, `accsvc`, `waccs`, `rate`, `week`, `month`, `year`) VALUES
(1, 2167, 133776, 1.62, 47, 11, 2018),
(2, 2267, 139388, 1.63, 48, 11, 2018),
(3, 1954, 116491, 1.68, 49, 12, 2018),
(4, 2038, 121293, 1.68, 50, 12, 2018),
(5, 2081, 145129, 1.43, 51, 12, 2018),
(6, 2269, 146518, 1.55, 52, 12, 2018),
(8, 1841, 136123, 1.35, 1, 1, 2019),
(9, 1841, 136123, 1.35, 1, 1, 2019),
(10, 1849, 136289, 1.36, 1, 1, 2019),
(11, 1930, 136505, 1.41, 2, 1, 2019),
(12, 1930, 136505, 1.41, 2, 1, 2019),
(13, 1930, 136505, 1.41, 2, 1, 2019),
(14, 1933, 136565, 1.42, 2, 1, 2019),
(15, 1933, 136565, 1.42, 2, 1, 2019),
(16, 1933, 136565, 1.42, 2, 1, 2019),
(17, 1985, 137392, 1.44, 3, 1, 2019),
(18, 2003, 137804, 1.45, 3, 1, 2019),
(19, 2003, 137804, 1.45, 3, 1, 2019),
(20, 2005, 138083, 1.45, 3, 1, 2019);

--
-- Extraindo dados da tabela `ifcost_acc`
--

INSERT INTO `ifcost_acc` (`id`, `ifc`, `month`, `year`) VALUES
(1, 2522, 1, 2018),
(2, 2311, 2, 2018),
(3, 3288, 3, 2018),
(4, 4118, 4, 2018),
(5, 312, 5, 2018),
(6, 518, 6, 2018),
(7, 867, 7, 2018),
(8, 499, 8, 2018),
(9, 1403, 9, 2018),
(10, 1543, 10, 2018),
(11, 1547, 11, 2018),
(12, 2328, 12, 2018),
(13, 783, 1, 2019);

--
-- Extraindo dados da tabela `ifcost_w`
--

INSERT INTO `ifcost_w` (`id`, `ifc`, `week`, `month`, `year`) VALUES
(1, 388, 1, 1, 2019),
(2, 395, 2, 1, 2019);

--
-- Extraindo dados da tabela `ifrr_acc`
--

INSERT INTO `ifrr_acc` (`id`, `rework`, `tpq`, `rate`, `month`, `year`) VALUES
(1, 182, 32345, 0.56, 1, 2017),
(2, 0, 22707, 0, 2, 2017),
(3, 95, 30439, 0.31, 3, 2017),
(4, 61, 24968, 0.25, 4, 2017),
(5, 1122, 35330, 3.18, 5, 2017),
(6, 13, 26371, 0.05, 6, 2017),
(7, 729, 26078, 2.8, 7, 2017),
(8, 60, 27758, 0.22, 8, 2017),
(9, 50, 34505, 0.14, 9, 2017),
(10, 300, 35034, 0.86, 10, 2017),
(11, 0, 33420, 0, 11, 2017),
(12, 70, 31688, 0.22, 12, 2017),
(13, 0, 42090, 0, 1, 2018),
(14, 0, 36426, 0, 2, 2018),
(15, 235, 35592, 0.66, 3, 2018),
(16, 0, 14590, 0, 4, 2018),
(17, 321, 39573, 0.81, 5, 2018),
(18, 0, 0, 0, 6, 2018),
(19, 0, 34170, 0, 7, 2018),
(20, 0, 35185, 0, 8, 2018),
(21, 115, 24735, 0.46, 9, 2018),
(22, 0, 34500, 0, 10, 2018),
(23, 0, 38864, 0, 11, 2018),
(24, 0, 21571, 0, 12, 2018),
(58, 0, 23155, 0, 1, 2019),
(59, 0, 23155, 0, 1, 2019),
(60, 0, 23155, 0, 1, 2019);

--
-- Extraindo dados da tabela `ifrr_w`
--

INSERT INTO `ifrr_w` (`id`, `rework`, `tpq`, `rate`, `week`, `month`, `year`) VALUES
(3, 0, 10005, 0, 48, 11, 2018),
(4, 0, 7456, 0, 49, 12, 2018),
(6, 0, 7860, 0, 51, 12, 2018),
(7, 0, 6255, 0, 50, 12, 2018),
(8, 0, 0, 0, 52, 12, 2018),
(15, 0, 3925, 0, 1, 1, 2019),
(26, 0, 10638, 0, 2, 1, 2019),
(27, 0, 1776, 0, 3, 1, 2019),
(28, 0, 2842, 0, 3, 1, 2019),
(29, 0, 4513, 0, 3, 1, 2019),
(30, 0, 5034, 0, 3, 1, 2019),
(31, 0, 5825, 0, 3, 1, 2019),
(32, 0, 6153, 0, 3, 1, 2019),
(33, 0, 6973, 0, 3, 1, 2019),
(34, 0, 7701, 0, 3, 1, 2019),
(35, 0, 8592, 0, 3, 1, 2019);

--
-- Extraindo dados da tabela `linestop_acc`
--

INSERT INTO `linestop_acc` (`id`, `qty`, `month`, `year`) VALUES
(1, 10, 1, 2018),
(2, 1, 2, 2018),
(3, 3, 3, 2018),
(4, 1, 4, 2018),
(5, 4, 5, 2018),
(6, 0, 6, 2018),
(7, 2, 7, 2018),
(8, 4, 8, 2018),
(9, 5, 9, 2018),
(10, 5, 10, 2018),
(11, 9, 11, 2018),
(12, 5, 12, 2018),
(13, 3, 1, 2019);

--
-- Extraindo dados da tabela `linestop_w`
--

INSERT INTO `linestop_w` (`id`, `qty`, `week`, `month`, `year`) VALUES
(1, 1, 1, 1, 2019),
(2, 2, 2, 1, 2019);

--
-- Extraindo dados da tabela `lrr_acc`
--

INSERT INTO `lrr_acc` (`id`, `ng`, `tpq`, `rate`, `month`, `year`) VALUES
(1, 5, 2648, 0.19, 1, 2018),
(2, 2, 2273, 0.09, 2, 2018),
(3, 9, 1318, 0.68, 3, 2018),
(4, 1, 1120, 0.09, 4, 2018),
(5, 11, 1384, 0.79, 5, 2018),
(6, 8, 881, 0.91, 6, 2018),
(7, 14, 1920, 0.73, 7, 2018),
(8, 8, 2003, 0.4, 8, 2018),
(9, 0, 1514, 0, 9, 2018),
(10, 6, 2500, 0.24, 10, 2018),
(11, 5, 2975, 0.17, 11, 2018),
(12, 7, 1214, 0.58, 12, 2018),
(13, 2, 433, 0.46, 1, 2019);

--
-- Extraindo dados da tabela `lrr_w`
--

INSERT INTO `lrr_w` (`id`, `ng`, `tpq`, `rate`, `week`, `month`, `year`) VALUES
(1, 0, 47, 0, 1, 1, 2019),
(2, 2, 334, 0.6, 2, 1, 2019),
(3, 0, 25, 0, 3, 1, 2019),
(4, 0, 27, 0, 3, 1, 2019),
(5, 0, 30, 0, 3, 1, 2019),
(6, 0, 52, 0, 3, 1, 2019);

--
-- Extraindo dados da tabela `nglot_acc`
--

INSERT INTO `nglot_acc` (`id`, `ng`, `total`, `ppm`, `month`, `year`) VALUES
(1, 0, 303, 0, 1, 2018),
(2, 0, 40, 0, 1, 2019);

--
-- Extraindo dados da tabela `nglot_w`
--

INSERT INTO `nglot_w` (`id`, `ng`, `total`, `ppm`, `week`, `month`, `year`) VALUES
(1, 0, 19, 0, 1, 1, 2019),
(2, 0, 21, 0, 2, 1, 2019);

--
-- Extraindo dados da tabela `prr_acc`
--

INSERT INTO `prr_acc` (`id`, `defect`, `tpq`, `ppm`, `month`, `year`) VALUES
(1, 0, 54650, 0, 1, 2017),
(2, 1, 44173, 23, 2, 2017),
(3, 11, 33029, 333, 3, 2017),
(4, 10, 24968, 401, 4, 2017),
(5, 28, 36200, 773, 5, 2017),
(6, 15, 27572, 544, 6, 2017),
(7, 11, 33920, 324, 7, 2017),
(8, 41, 54286, 755, 8, 2017),
(9, 32, 68866, 465, 9, 2017),
(10, 54, 70511, 766, 10, 2017),
(11, 52, 67605, 769, 11, 2017),
(12, 52, 62888, 830, 12, 2017),
(13, 60, 82457, 728, 1, 2018),
(14, 28, 41212, 679, 2, 2018),
(15, 27, 57137, 473, 3, 2018),
(16, 13, 41619, 312, 4, 2018),
(17, 20, 39985, 500, 5, 2018),
(18, 0, 1144, 0, 6, 2018),
(19, 1, 34826, 29, 7, 2018),
(20, 29, 69061, 420, 8, 2018),
(21, 23, 53598, 429, 9, 2018),
(22, 33, 67925, 486, 10, 2018),
(23, 22, 76159, 289, 11, 2018),
(24, 13, 47247, 275, 12, 2018),
(25, 13, 47247, 275, 12, 2018),
(57, 1, 24517, 41, 1, 2019);

--
-- Extraindo dados da tabela `prr_w`
--

INSERT INTO `prr_w` (`id`, `defect`, `tpq`, `ppm`, `week`, `month`, `year`) VALUES
(1, 26, 16966, 1532, 47, 11, 2018),
(2, 24, 23164, 1036, 48, 11, 2018),
(3, 12, 14606, 821, 49, 12, 2018),
(4, 1, 2688, 372, 50, 12, 2018),
(9, 3, 10557, 284, 50, 12, 2018),
(10, 0, 10832, 0, 51, 12, 2018),
(13, 0, 16459, 0, 51, 12, 2018),
(14, 1, 16182, 62, 50, 12, 2018),
(20, 0, 4203, 0, 1, 1, 2019),
(25, 1, 10722, 93, 2, 1, 2019),
(40, 0, 6425, 0, 3, 1, 2019),
(42, 0, 6753, 0, 3, 1, 2019),
(43, 0, 7573, 0, 3, 1, 2019),
(44, 0, 8636, 0, 3, 1, 2019),
(45, 0, 9592, 0, 3, 1, 2019),
(46, 0, 9592, 0, 3, 1, 2019),
(47, 0, 9592, 0, 3, 1, 2019),
(48, 0, 9592, 0, 3, 1, 2019),
(49, 0, 9592, 0, 3, 1, 2019);

--
-- Extraindo dados da tabela `qhi_issues_acc`
--

INSERT INTO `qhi_issues_acc` (`id`, `ceorep`, `salesiqc`, `rewf`, `month`, `year`) VALUES
(1, 0, 0, 0, 1, 2018),
(2, 0, 0, 0, 2, 2018),
(3, 0, 0, 0, 3, 2018),
(4, 0, 0, 0, 4, 2018),
(5, 0, 0, 0, 5, 2018),
(6, 0, 0, 0, 6, 2018),
(7, 0, 0, 0, 7, 2018),
(8, 0, 0, 0, 8, 2018),
(9, 0, 0, 0, 9, 2018),
(10, 0, 0, 0, 10, 2018),
(11, 0, 0, 0, 11, 2018),
(12, 0, 0, 0, 12, 2018),
(13, 0, 0, 0, 1, 2019);

--
-- Extraindo dados da tabela `qhi_issues_w`
--

INSERT INTO `qhi_issues_w` (`id`, `ceorep`, `salesiqc`, `rewf`, `week`, `month`, `year`) VALUES
(1, 0, 0, 0, 1, 1, 2019),
(2, 0, 0, 0, 2, 1, 2019),
(3, 0, 0, 0, 3, 1, 2019),
(4, 0, 0, 0, 4, 1, 2019);

--
-- Extraindo dados da tabela `temp_acc`
--

INSERT INTO `temp_acc` (`id`, `temp`, `total`, `rate`, `month`, `year`) VALUES
(1, 0, 7, 0, 1, 2018),
(2, 0, 7, 0, 2, 2018),
(3, 0, 7, 0, 3, 2018),
(4, 0, 7, 0, 4, 2018),
(5, 0, 7, 0, 5, 2018),
(6, 0, 7, 0, 6, 2018),
(7, 0, 7, 0, 7, 2018),
(8, 0, 7, 0, 8, 2018),
(9, 0, 7, 0, 9, 2018),
(10, 0, 6, 0, 10, 2018),
(11, 0, 6, 0, 11, 2018),
(12, 0, 6, 0, 12, 2018),
(13, 0, 6, 0, 1, 2019);

--
-- Extraindo dados da tabela `temp_w`
--

INSERT INTO `temp_w` (`id`, `temp`, `total`, `rate`, `week`, `month`, `year`) VALUES
(1, 0, 6, 0, 1, 1, 2019),
(2, 0, 6, 0, 2, 1, 2019),
(3, 0, 6, 0, 3, 1, 2019),
(4, 0, 6, 0, 4, 1, 2019);

--
-- Extraindo dados da tabela `tldr_acc`
--

INSERT INTO `tldr_acc` (`id`, `defect`, `tpq`, `ppm`, `month`, `year`) VALUES
(1, 93, 42090, 2210, 1, 2018),
(2, 68, 36426, 1867, 2, 2018),
(3, 104, 35592, 2978, 3, 2018),
(4, 28, 14590, 1919, 4, 2018),
(5, 138, 39573, 3487, 5, 2018),
(6, 0, 0, 0, 6, 2018),
(7, 36, 34170, 1054, 7, 2018),
(8, 130, 35182, 3695, 8, 2018),
(9, 117, 24735, 4771, 9, 2018),
(10, 79, 34500, 2290, 10, 2018),
(11, 106, 38864, 2728, 11, 2018),
(12, 118, 32345, 3648, 1, 2017),
(13, 80, 22707, 3523, 2, 2017),
(14, 86, 30439, 2825, 3, 2017),
(15, 76, 24968, 3044, 4, 2017),
(16, 203, 35330, 5746, 5, 2017),
(17, 182, 26371, 6977, 6, 2017),
(18, 137, 26078, 5292, 7, 2017),
(19, 108, 27758, 3891, 8, 2017),
(20, 186, 34505, 5420, 9, 2017),
(21, 131, 35034, 3825, 10, 2017),
(22, 156, 33420, 4688, 11, 2017),
(23, 88, 31688, 2778, 12, 2017),
(24, 79, 21571, 3662, 12, 2018),
(25, 88, 21571, 4080, 12, 2018),
(60, 64, 23155, 2764, 1, 2019);

--
-- Extraindo dados da tabela `tldr_w`
--

INSERT INTO `tldr_w` (`id`, `defect`, `tpq`, `ppm`, `week`, `month`, `year`) VALUES
(1, 11, 10005, 5201, 48, 11, 2018),
(2, 16, 7456, 2146, 49, 12, 2018),
(3, 33, 7860, 4198, 51, 12, 2018),
(4, 39, 6255, 6235, 50, 12, 2018),
(5, 0, 0, 0, 52, 12, 2018),
(6, 16, 3925, 4076, 1, 1, 2019),
(7, 23, 10638, 2162, 2, 1, 2019),
(8, 25, 7701, 3246, 3, 1, 2019),
(9, 25, 8592, 2910, 3, 1, 2019);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
