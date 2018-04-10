-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 11/10/2016 às 00:25
-- Versão do servidor: 5.5.52-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `mercado`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `consico` mediumint(9) DEFAULT NULL,
  `ncm` mediumint(9) DEFAULT NULL,
  `descricao` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=101 ;

--
-- Fazendo dump de dados para tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `consico`, `ncm`, `descricao`) VALUES
(1, 'pies', 29877, 8388607, 'Payroll'),
(2, 'desserts', 19757, 8388607, 'Sales and Marketing'),
(3, 'cereals', 12739, 8388607, 'Human Resources'),
(4, 'soups', 96656, 8388607, 'Human Resources'),
(5, 'noodles', 58803, 8388607, 'Advertising'),
(6, 'noodles', 71460, 8388607, 'Finances'),
(7, 'salads', 19626, 8388607, 'Accounting'),
(8, 'stews', 27916, 8388607, 'Sales and Marketing'),
(9, 'seafood', 35331, 8388607, 'Legal Department'),
(10, 'pies', 26803, 8388607, 'Legal Department'),
(11, 'pasta', 72192, 8388607, 'Research and Development'),
(12, 'desserts', 949, 8388607, 'Finances'),
(13, 'desserts', 72869, 8388607, 'Media Relations'),
(14, 'noodles', 20107, 8388607, 'Asset Management'),
(15, 'salads', 33318, 8388607, 'Payroll'),
(16, 'noodles', 20375, 8388607, 'Media Relations'),
(17, 'pies', 44318, 8388607, 'Human Resources'),
(18, 'soups', 55156, 8388607, 'Quality Assurance'),
(19, 'seafood', 79841, 8388607, 'Research and Development'),
(20, 'noodles', 90901, 8388607, 'Sales and Marketing'),
(21, 'stews', 79864, 8388607, 'Media Relations'),
(22, 'noodles', 32646, 8388607, 'Research and Development'),
(23, 'noodles', 47456, 8388607, 'Customer Relations'),
(24, 'pies', 84191, 8388607, 'Asset Management'),
(25, 'salads', 17124, 8388607, 'Human Resources'),
(26, 'cereals', 86605, 8388607, 'Finances'),
(27, 'stews', 47357, 8388607, 'Media Relations'),
(28, 'sandwiches', 55072, 8388607, 'Media Relations'),
(29, 'desserts', 6244, 8388607, 'Human Resources'),
(30, 'desserts', 67402, 8388607, 'Public Relations'),
(31, 'pies', 85548, 8388607, 'Research and Development'),
(32, 'salads', 88007, 8388607, 'Quality Assurance'),
(33, 'salads', 50706, 8388607, 'Legal Department'),
(34, 'pasta', 22932, 8388607, 'Customer Relations'),
(35, 'sandwiches', 55318, 8388607, 'Customer Service'),
(36, 'soups', 83228, 8388607, 'Legal Department'),
(37, 'sandwiches', 57470, 8388607, 'Human Resources'),
(38, 'stews', 64724, 8388607, 'Asset Management'),
(39, 'sandwiches', 13664, 8388607, 'Accounting'),
(40, 'salads', 62524, 8388607, 'Research and Development'),
(41, 'pies', 31146, 8388607, 'Sales and Marketing'),
(42, 'pasta', 5038, 8388607, 'Customer Relations'),
(43, 'desserts', 12911, 8388607, 'Tech Support'),
(44, 'cereals', 16038, 8388607, 'Advertising'),
(45, 'desserts', 60845, 8388607, 'Sales and Marketing'),
(46, 'stews', 96267, 8388607, 'Human Resources'),
(47, 'cereals', 57190, 8388607, 'Customer Relations'),
(48, 'pies', 92111, 8388607, 'Research and Development'),
(49, 'cereals', 84230, 8388607, 'Sales and Marketing'),
(50, 'soups', 26207, 8388607, 'Payroll'),
(51, 'sandwiches', 86451, 8388607, 'Advertising'),
(52, 'seafood', 51033, 8388607, 'Legal Department'),
(53, 'cereals', 39817, 8388607, 'Payroll'),
(54, 'noodles', 40840, 8388607, 'Sales and Marketing'),
(55, 'desserts', 18936, 8388607, 'Asset Management'),
(56, 'soups', 34168, 8388607, 'Tech Support'),
(57, 'noodles', 4551, 8388607, 'Payroll'),
(58, 'pies', 35722, 8388607, 'Asset Management'),
(59, 'pasta', 85471, 8388607, 'Quality Assurance'),
(60, 'noodles', 84893, 8388607, 'Legal Department'),
(61, 'stews', 73022, 8388607, 'Customer Relations'),
(62, 'soups', 91547, 8388607, 'Advertising'),
(63, 'seafood', 28566, 8388607, 'Research and Development'),
(64, 'sandwiches', 44928, 8388607, 'Media Relations'),
(65, 'seafood', 87430, 8388607, 'Tech Support'),
(66, 'stews', 27263, 8388607, 'Quality Assurance'),
(67, 'sandwiches', 28662, 8388607, 'Customer Relations'),
(68, 'desserts', 52900, 8388607, 'Customer Relations'),
(69, 'noodles', 17910, 8388607, 'Customer Service'),
(70, 'desserts', 48311, 8388607, 'Human Resources'),
(71, 'noodles', 36999, 8388607, 'Quality Assurance'),
(72, 'stews', 25434, 8388607, 'Media Relations'),
(73, 'desserts', 25698, 8388607, 'Customer Relations'),
(74, 'pies', 64858, 8388607, 'Payroll'),
(75, 'salads', 90532, 8388607, 'Tech Support'),
(76, 'cereals', 28277, 8388607, 'Finances'),
(77, 'pasta', 78449, 8388607, 'Customer Service'),
(78, 'pies', 53107, 8388607, 'Research and Development'),
(79, 'noodles', 45659, 8388607, 'Public Relations'),
(80, 'soups', 45456, 8388607, 'Payroll'),
(81, 'stews', 26563, 8388607, 'Public Relations'),
(82, 'seafood', 53993, 8388607, 'Accounting'),
(83, 'pies', 32523, 8388607, 'Asset Management'),
(84, 'soups', 64164, 8388607, 'Accounting'),
(85, 'soups', 94487, 8388607, 'Customer Relations'),
(86, 'salads', 67078, 8388607, 'Quality Assurance'),
(87, 'cereals', 44544, 8388607, 'Public Relations'),
(88, 'salads', 8767, 8388607, 'Payroll'),
(89, 'soups', 79580, 8388607, 'Accounting'),
(90, 'stews', 92967, 8388607, 'Legal Department'),
(91, 'soups', 91578, 8388607, 'Accounting'),
(92, 'desserts', 46078, 8388607, 'Tech Support'),
(93, 'seafood', 59907, 8388607, 'Research and Development'),
(94, 'seafood', 82609, 8388607, 'Finances'),
(95, 'pies', 55069, 8388607, 'Research and Development'),
(96, 'cereals', 84922, 8388607, 'Tech Support'),
(97, 'seafood', 98263, 8388607, 'Media Relations'),
(98, 'soups', 71384, 8388607, 'Customer Relations'),
(99, 'pasta', 22139, 8388607, 'Media Relations'),
(100, 'noodles', 47705, 8388607, 'Customer Relations');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
