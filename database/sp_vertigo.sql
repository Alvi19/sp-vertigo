--
-- Database: `sp_vertigo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL
);

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `last_login`) VALUES
(1, 'admin', 'admin', '$2y$10$L4zXv9/dscZqbem34beK1uAlnlblqoIkEGFqFVU5eJtjAwsde.YQC', '2023-06-23 11:33:25'),
(2, 'user', 'user', '$2y$10$L4zXv9/dscZqbem34beK1uAlnlblqoIkEGFqFVU5eJtjAwsde.YQC', '2023-06-22 11:23:34'),
(3, 'user2', 'user2', '$2y$10$5cljAHM9rKBkIUbtZmYAk.wWyriucifF750E2SXmMKVBJmtr8NmVy', '2023-06-22 11:25:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_hasil`
--

CREATE TABLE `detail_hasil` (
  `id` int NOT NULL,
  `id_pasien` int DEFAULT NULL,
  `id_penyakit` int NOT NULL,
  `presentase` varchar(100) NOT NULL
);

--
-- Dumping data untuk tabel `detail_hasil`
--

INSERT INTO `detail_hasil` (`id`, `id_pasien`, `id_penyakit`, `presentase`) VALUES
(5, 2, 8, '90'),
(6, 2, 11, '90'),
(7, 2, 9, '88'),
(8, 2, 10, '98.08'),
(9, 3, 8, '97.6'),
(10, 3, 10, '99.232'),
(11, 3, 11, '80'),
(12, 3, 9, '60'),
(13, 3, 12, '70'),
(14, 3, 8, '97.6'),
(15, 3, 10, '99.232'),
(16, 3, 11, '80'),
(17, 3, 9, '60'),
(18, 3, 12, '70'),
(19, 4, 8, '98.32'),
(20, 4, 10, '98.656'),
(21, 4, 11, '86'),
(22, 4, 9, '60'),
(23, 4, 12, '60'),
(24, 8, 8, '98.74'),
(25, 8, 10, '97.984'),
(26, 8, 11, '93'),
(27, 8, 9, '88'),
(28, 8, 12, '60'),
(29, 9, 8, '79'),
(30, 9, 10, '91.6'),
(31, 9, 11, '79'),
(32, 9, 9, '70'),
(33, 9, 12, '70'),
(34, 10, 8, '93.7'),
(35, 10, 10, '97.48'),
(36, 10, 11, '65'),
(37, 10, 9, '70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id` int NOT NULL,
  `nama_gejala` varchar(255) NOT NULL,
  `bobot` double NOT NULL
);

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `nama_gejala`, `bobot`) VALUES
(8, 'Mual', 0.4),
(9, 'Muntah', 0.6),
(10, 'Pandangan Kabur', 0.3),
(11, 'Seperti Mabok Perjalanan', 0.7),
(12, 'Tidak Mampu Berderi Tegak', 0.5),
(13, 'Sensasi Kepala Berputar', 0.8),
(14, 'Tidak mampu berdiri atau berjalan', 0.7),
(15, 'Kehilangan pendegaran sementara', 0.6),
(16, 'Terjadi dalam beberapa menit', 0.5),
(17, 'telinga berdengung', 0.6),
(18, 'sensitif terhadap cahaya dan bunyi', 0.6),
(19, 'Kepala pusing', 0.7),
(20, 'Faktor Genetik', 0.4),
(21, 'Pandangan Sulit fokus', 0.6),
(22, 'Lingkungan berputar 2 arah', 0.7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id` int NOT NULL,
  `id_detail_hasil` int DEFAULT NULL,
  `tanggal` timestamp NOT NULL
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `kode_kategori` varchar(45) NOT NULL,
  `nama_kategori` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL
);

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kode_kategori`, `nama_kategori`, `deskripsi`) VALUES
(1, 'K1', 'Vertigo Perifer', 'Vertigo Perifer'),
(2, 'K2', 'Vertigo Sentral', 'Vertigo Sentral');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `JK` varchar(25) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `alamat`, `JK`, `tanggal`) VALUES
(1, 'yuyun', 'Cirebon', 'laki-laki', '2023-06-21 13:23:27'),
(2, 'Supri', 'Kuningan', 'laki-laki', '2023-06-21 13:23:27'),
(3, 'Desi', 'Cirebon', 'perempuan', '2023-06-21 13:23:27'),
(4, 'Rangga', 'Cirebon', 'laki-laki', '2023-06-21 13:23:27'),
(5, 'Gugun', 'Cirebon', 'laki-laki', '2023-06-21 13:23:27'),
(6, 'yuni', 'Majalengka', 'perempuan', '2023-06-21 13:23:27'),
(7, 'yuni', 'Majalengka', 'laki-laki', '2023-06-21 13:23:27'),
(8, 'goni', 'Cirebon', 'laki-laki', '2023-06-21 13:23:27'),
(9, 'Agus', 'Cirebon', 'laki-laki', '2023-06-21 13:23:27'),
(10, 'Sandi', 'Cirebon', 'laki-laki', '2023-06-22 18:45:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int NOT NULL,
  `id_kategori` int NOT NULL,
  `solusi` varchar(255) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
);

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `id_kategori`, `solusi`, `nama_penyakit`, `deskripsi`) VALUES
(8, 1, 'Vertigo Sentral', 'Bening Parazosysmal Position Vertigo', 'Bening Parazosysmal Position Vertigo'),
(9, 2, 'Maniere', 'Maniere', 'Maniere\r\n'),
(10, 2, 'Migren Vestibular', 'Migren Vestibular', 'Migren Vestibular'),
(11, 1, 'Multiple Sclerosis', 'Multiple Sclerosis', 'Multiple Sclerosis\r\n'),
(12, 2, 'Vertigo Serebeleum', 'Vertigo Serebeleum', 'Vertigo Serebeleum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit_gejala`
--

CREATE TABLE `penyakit_gejala` (
  `id` int NOT NULL,
  `id_penyakit` int NOT NULL,
  `id_gejala` int NOT NULL
);

--
-- Dumping data untuk tabel `penyakit_gejala`
--

INSERT INTO `penyakit_gejala` (`id`, `id_penyakit`, `id_gejala`) VALUES
(20, 8, 8),
(21, 8, 9),
(22, 8, 10),
(23, 8, 11),
(24, 8, 12),
(25, 8, 13),
(26, 9, 14),
(27, 9, 15),
(28, 10, 8),
(29, 10, 9),
(30, 10, 10),
(31, 10, 15),
(32, 10, 16),
(33, 10, 17),
(34, 10, 18),
(35, 10, 19),
(39, 11, 10),
(40, 11, 12),
(41, 11, 13),
(42, 11, 20),
(43, 12, 21),
(44, 12, 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `id_gejala` int NOT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_hasil`
--
ALTER TABLE `detail_hasil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_detail_hasil` (`id_detail_hasil`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`) USING BTREE;

--
-- Indeks untuk tabel `penyakit_gejala`
--
ALTER TABLE `penyakit_gejala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `detail_hasil`
--
ALTER TABLE `detail_hasil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `penyakit_gejala`
--
ALTER TABLE `penyakit_gejala`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;