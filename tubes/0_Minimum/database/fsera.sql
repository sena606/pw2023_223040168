-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 10:04 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsera`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int NOT NULL,
  `nama_category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `nama_category`) VALUES
(1, '2017'),
(2, '2018'),
(3, '2019'),
(4, '2020'),
(5, '2021'),
(6, '2022');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` varchar(10000) NOT NULL,
  `id_category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `photo`, `title`, `detail`, `id_category`) VALUES
(1, '6483405cabd4e.jpg', 'Fashion 2017', 'Tren fashion memang selalu berputar, dan tentunya akan menjadi sebuah referensi gaya busana untuk mengganti penampilan. Tak ada salahnya mencoba mengikuti tren baru untuk tetap tampil keren di tahun depan. Kuncinya hanyalah harus tetap pede dan nyaman saat mengenakan busana tersebut.Tak perlu membuang pakaian lama Anda, dengan trik padu padan yang tepat Anda bisa tampil lebih modis dengan beberapa tren busana berikut. Seperti yang dilansir dari situs whowhatwear.com, Selasa (27/12/2016) ada 6 tren busana yang diramalkan akan menjadi tren besar di tahun 2017 nanti. Apa sajakah gaya busana tersebut?', 1),
(28, '6483407d9c071.jpg', 'Fashion 2018', 'Tahun baru selalu identik dengan perubahan besar atau munculnya sesuatu yang baru. Apalagi dalam dunia fashion, para fashionista pasti selalu punya insight tentang apa sih yang bakal tren di tahun 2018?  Nggak cuma buat cewek, cowok pun kini punya sense fashion yang juga tinggi loh. So buat cewek cowok fashionista, ini dia trend fashion 2018 yang bisa jadi inspirasi style kamu selama 12 bulan mendatang. Ultra Violet dan Yellow Ungu dan Kuning menjadi warna yang tahun ini akan bersinar. Nggak cuma blouse atau pakaian yang punya warna kuning atau ungu, tapi juga sepatu, jaket, dress, hingga tas.  So, kalau punya baju warna ungu atau kuning jangan keburu dibuang ya!', 2),
(29, '648340a464847.png', 'Fashion 2019', 'Tahun 2019 akan segera berakhir dan berganti jadi 2020. Sebelum melangkah ke tahun baru,masih ingatkah kalian dengan sederet trend fashion yang hits dan berkembang selama satu tahun terakhir? Kira-kira item fashion yang banyak diburu sepanjang 2019 itu apakah akan kembali hits pada 2020?  Buat yang penasaran, berikut deretan gaya fashion terhits sepanjang 2019. Mungkin aksen fashion berikut ini masih pas buat kalian jadikan OOTD (outfit of the day) saat menyambut tahun baru dan menutup 2019 dengan kenangan yang manis. 1. Rok Tutu Masih ingatkah kalian, rok tutu sebagai ikon fashion yang lama berkembang di Indonesia bahkan dunia kembali dicintai pecinta fashion. Tahun ini, rok tutu begitu banyak dikenakan untuk sederet tampilan. Mulai dari tampilan formal hingga tampilan kekinian yang lebih santai.   Artis hingga sederet pecinta fashion berbondong-bondong tampil energik dengan rok tutu. Mulai dari anak-anak hingga dewasa tampaknya kembali jatuh cinta dengan rok tutu.   Kira-kira apakah ada di antara kalian yang mulai mengoleksi rok tutu sejak 2019? Buat yang masih menyimpan rok tutu, ayo angkat tangan, siapa tahu tahun depan masih tren ya gengs.', 3),
(30, '6483410fa6356.jpg', 'Fashion 2020', 'Masyarakat yang kini aktif dan dinamis berpengaruh pada fesyen yang membuat gaya semakin sederhana agar lebih mudah berkegiatan. Gaya yang sederhana ini juga berlaku dengan tampilan makeup atau tata rias wajah.  Make up yang natural dengan menonjolkan kulit yang sehat akan jadi tren pada 2020. Penggunaan skincare juga akan semakin marak untuk menunjang kulit yang sehat.  Desainer Ivan Gunawan menyebut makeup yang natural itu hanya menonjolkan pada satu bagian wajah saja.  &quot;Jadi, menurut aku sesuatu yang fake di 2020 harus dikurangi. Kayaknya lebih ke inner beauty,&quot; kata Ivan beberapa waktu lalu.  Selain tren fesyen secara umum, beberapa produk mode juga diprediksi akan populer pada 2020. Prediksi ini berasal dari sejumlah karya desainer ternama untuk 2020 yang dianggap sebagai kiblat fesyen.  Berikut beberapa fashion 2020', 4),
(31, '6483412f94578.jpg', 'Fashion 2021', 'Masih terbawa oleh suasana tahun 2020 yang mana kenyamanan adalah hal yang penting dalam berpakaian, maka tak heran jika celana berukuran besar seperti wide-leg pants dan kulot disukai banyak orang di tahun 2021. Selain lebih nyaman dikenakan dibandingkan skinny jeans atau celana model lain yang ketat, wide-leg pants atau kulot juga bisa memberikan tampilan yang versatile. Bisa dikenakan untuk mendapatkan profesional look, tapi juga mudah mix and match dengan gaya kasual jika ingin dipakai untuk hangout bersama teman-teman  oversize top atau sweeter ', 5),
(32, '6484b8ef79897.png', 'Fashion 2022', 'Catsuits   Kalau kamu suka mengenakan jumpsuit, sepertinya kamu bakal suka dengan trend fashion style 2022 ini.     Yap, catsuits mirip banget dengan jumpsuit. Mirip bukan berarti sama, ya, girls. Ada banyak perbedaan di antara kedua fashion items ini. Kalau jumpsuit biasanya lebih loose, catsuits benar-benar mengikuti lekuk tubuh dan bahannya cenderung tipis.    Seperti yang kita tahu, there’s no rules in fashion. So, apapun bentuk tubuhmu, sah-sah saja kalau pengin menggunakan catsuits untuk jalan-jalan atau bahkan saat ke pesta.    Biar keseluruhan penampilanmu kelihatan perfect, gunakan stiletto atau mules sandal yang lagi kekinian.     Dare to try?', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`) VALUES
(8, 'coba', '$2y$10$eLXOKNLXnlfvQxrph0Y6qO4BS275H/IvDkSayni7WN3RVoMtMD3gi', 'coba@gmail.com', 'user'),
(9, 'admin', '$2y$10$0LBOG1rylP/AX8p6cPm5BOckL6tXo3DchF8h1RebOd9PQq9v0nfUi', 'admin@gmail.com', 'admin'),
(24, 'sena', '$2y$10$A.Y1B1gy3G0fVLX/wtCVdepaZo70ZfSh/D6EnWUNe63w60awbDdM.', 'sena@gmail.com', 'user'),
(25, 'aldi', '$2y$10$WFDyYpwDhFfSlBwjmN3tVeIbEfOzQ3Ca6hMgCz8J7MtQnKkQjO7rW', 'aldi@gmmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id category` (`id_category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
