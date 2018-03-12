-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 Ian 2018 la 22:24
-- Versiune server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organizare_ev`
--

--
-- Salvarea datelor din tabel `bilete`
--

INSERT INTO `bilete` (`BiletID`, `Pret`, `EvenimentID`, `Format`) VALUES
(1, 130, 1, 'electronic'),
(2, 170, 2, 'fizic'),
(3, 275, 1, 'electronic'),
(4, 350, 4, 'electronic'),
(5, 120, 5, 'electronic'),
(6, 200, 5, 'fizic'),
(7, 720, 1, 'electronic'),
(9, 120, 3, 'fizic'),
(10, 150, 4, 'electronic');

--
-- Salvarea datelor din tabel `evenimente`
--

INSERT INTO `evenimente` (`EvenimentID`, `Nume`, `DataInceperii`, `DataTerminare`, `LocatieID`, `RestrictieVarsta`, `PlannerID`) VALUES
(1, 'Gojira', '2018-06-24', '2018-06-25', 1, 18, 1),
(2, 'Tool', '2018-08-02', '2018-08-04', 5, 14, 2),
(3, 'Folk You', '2018-08-14', '2018-08-18', 2, 18, 2),
(4, 'Electric Castle', '2018-07-18', '2018-07-23', 3, 16, 4),
(5, 'Shine', '2018-06-30', '2018-07-01', 1, 12, 3);

--
-- Salvarea datelor din tabel `fonduri`
--

INSERT INTO `fonduri` (`SponsorID`, `EvenimentID`, `SumaOferita`) VALUES
(1, 1, 3000),
(1, 2, 5000),
(2, 1, 4000),
(4, 2, 3000);

--
-- Salvarea datelor din tabel `locatie`
--

INSERT INTO `locatie` (`LocatieID`, `Nume`, `Judet`, `Oras`, `Strada`, `Spatiu`) VALUES
(1, 'Arenele Romane', 'Bucuresti', 'Bucuresti', 'Cutitul de Argint', 3000),
(2, 'Stuf', 'Constanta', 'Vama Veche', 'Falezei', 200),
(3, 'Banffy Castle', 'Cluj', 'Bontida', 'Clujului', 2500),
(4, 'StudentPub', 'Bucuresti', 'Bucuresti', 'Vasile Milea', 100),
(5, 'Hard Rock Cafe', 'Bucuresti', 'Bucuresti', 'Kiseleff', 300);

--
-- Salvarea datelor din tabel `planneri`
--

INSERT INTO `planneri` (`PlannerID`, `Nume`, `Prenume`, `Utilizator`, `Parola`) VALUES
(1, 'Juganaru', 'Stefan', 'Juganaru', 'Stefan'),
(2, 'Popescu', 'George', 'Popescu', 'George'),
(3, 'Toader', 'Bogdan', 'Toader', 'Bogdan'),
(4, 'Gaman', 'Paul', 'Gaman', 'Paul'),
(5, 'Mitru', 'Vlad', 'Mitru', 'Vlad');

--
-- Salvarea datelor din tabel `sponsori`
--

INSERT INTO `sponsori` (`SponsorID`, `Nume`, `Reclama`, `Domeniu`) VALUES
(1, 'Metalhead', 4, 'Muzica'),
(2, 'Tama', 1, 'Muzica'),
(3, 'McDonalds', 10, 'Food'),
(4, 'KFC', 7, 'Food'),
(5, 'Highland Creek', 2, 'Clothing');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
