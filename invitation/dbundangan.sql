-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 29 Agu 2023 pada 08.35
-- Versi server: 5.7.42
-- Versi PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uef088r3_dbundangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbundangan`
--

CREATE TABLE `tbundangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbundangan`
--

INSERT INTO `tbundangan` (`id`, `nama`, `pesan`) VALUES
(16, 'Ardelia', 'Maasyaallah, selamat pute â¤ï¸ðŸ˜‡ðŸ˜'),
(17, 'Nada Oktavia M.Pd', 'Aaaaa terharuuu selamat putriii ihhh semoga dilancarkan selalu dan juga samawa yaaa'),
(18, 'Alivia Nada', 'Masyaallah selamat kak puteee ðŸ˜, smoga dilancarkan dan dipermudah menuju hari H nyaa kakkk aamiin.. samawa ya kak putee ðŸ¤—ðŸ¥°'),
(19, 'Elfi sulpiya', 'Masyaa Allah kakak, selamaat kakak, semoga dimudahkan dan dilancarkan, semoga jdi keluarga sakinah mawaddah warahmah, uhuuu terharuu tiba2 dapat undanganðŸ¤—ðŸ¥°'),
(20, 'Aminah ðŸ¤', 'Masyaallah kakak sayang, selamat bahagia kakak sayang, semoga lancar smpai hari nya H nya kakakðŸ¤—ðŸ¥°'),
(21, 'Rida Desnila Putri', 'Baru kemaren cerita2 kak, eh alhamdulillah masyaAllah sudah terkabul, selamat kakak puteðŸ˜ðŸ˜ bahagia dunia akhiratðŸ¤²'),
(24, 'Nubli dan istri', 'Alhamdulillah, semoga senantiasa diberkati dan senangtiasa dirahmati pute.. hahaha balek juo konco wak'),
(26, 'Ayu ', 'MasyaAllah selamat kk pute.. semoga lancar smpai hari H'),
(27, 'Hilda', 'Acilamat puteeeðŸ¥³ðŸ¥³\r\nSemoga dilancarkan sampai hari H . Aamiim'),
(28, 'Wiedi', 'Barokallah putri semoga Allah sellu limpahkan kebahagian, sehat lahir batin dan keluarga yng di limpahi rahmat Allah '),
(29, 'Aspa Laila', 'MasyaAllah selamaat kak puteeeðŸ˜Barakallahu fik kaakðŸŒ¹ðŸ˜ðŸ˜'),
(30, 'Iraa', 'Tabaarakallah kak puteeee\r\nAhmadullahh..Akhirnya tiba saatnya berlayar hiyaakk'),
(31, 'Anisa Amelia ', 'Masya Allah, selamat kak puteðŸ˜semoga lancar sampai hari H kakðŸ¤²ðŸ» aamiin ya Allah ðŸ¤²ðŸ»samawa akaaakâœ¨'),
(32, 'Masyita Herza', 'MasyaAllah, selamat kak puteee, sakinah mawaddah warahmah ðŸ¤²'),
(33, 'Annisa Nurul Humairah ', 'Masya Allah, selamat kak puteeðŸ˜ semoga dilancarkan kaak, samawa kak puteeeðŸ¤—'),
(34, 'Helmina', 'Semoga rumah tangga yang akan dijalani penuh keberkahan dan perlindungan dari Allah SWT...ðŸ¤²'),
(35, 'Zuhrida Hayati, M.Ag', 'Maa syaa Allaaah .. selamat puuttðŸ«¶ lancar luncur sampai hari H.. samawa till jannah putriiiðŸ’•ðŸ˜‡'),
(36, 'Yolanda noveni n', 'Selamat Uda dan calon, akhirnya, lancar luncur sampe hari H UdaðŸ™'),
(37, 'IZZA AFKARINA', 'MasyaAllah Tabarokallah semoga langgeng Dunia akhirat bak, sehat dan bahagia Selalu, murah rezeki yang barokah dan lekas dapet momongan amin'),
(38, 'Eka yanti', 'Semoga samara sampai akhir hayat nanti'),
(39, 'RAHMILIA HUSNA', 'Masyaallah, selamat Pute, semoga menjadi keluarga sakinnah, ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbundangan`
--
ALTER TABLE `tbundangan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbundangan`
--
ALTER TABLE `tbundangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
