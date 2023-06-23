--
-- Database: `sp_vertigo`
--
-- --------------------------------------------------------
--
-- Struktur dari tabel `admin`
--
CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL
);

--
-- Dumping data untuk tabel `admin`
--
INSERT INTO
  `admin` (`id`, `username`, `password`, `last_login`)
VALUES
  (
    1,
    'admin',
    '$2y$10$hRi1qju2KOeEPcBZ0wYfhu/PN5e9Wl.ddWeDTds8Uokad764X9D1a',
    '2023-06-14 07:33:34'
  );

-- --------------------------------------------------------
--
-- Struktur dari tabel `detail_hasil`
--
CREATE TABLE `detail_hasil` (
  `id` int NOT NULL,
  `id_penyakit` int NOT NULL,
  `presentase` varchar(100) NOT NULL
);

-- --------------------------------------------------------
--
-- Struktur dari tabel `gejala`
--
CREATE TABLE `gejala` (
  `id` int NOT NULL,
  `nama_gejala` varchar(255) NOT NULL,
  `bobot` double NOT NULL
);

-- --------------------------------------------------------
--
-- Struktur dari tabel `hasil`
--
CREATE TABLE `hasil` (
  `id` int NOT NULL,
  `id_pasien` int NOT NULL,
  `hasil_kategori` varchar(100) NOT NULL,
  `bobot` double NOT NULL,
  `tanggal` timestamp NOT NULL,
  `kriteria` varchar(100) NOT NULL
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

-- --------------------------------------------------------
--
-- Struktur dari tabel `pasien`
--
CREATE TABLE `pasien` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `JK` varchar(25) NOT NULL
);

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
ALTER TABLE
  `admin`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_hasil`
--
ALTER TABLE
  `detail_hasil`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE
  `gejala`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE
  `hasil`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE
  `kategori`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE
  `pasien`
ADD
  PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE
  `penyakit`
ADD
  PRIMARY KEY (`id`),
ADD
  UNIQUE KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE
  `pertanyaan`
ADD
  PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--
--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE
  `admin`
MODIFY
  `id` int NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT untuk tabel `detail_hasil`
--
ALTER TABLE
  `detail_hasil`
MODIFY
  `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE
  `gejala`
MODIFY
  `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE
  `hasil`
MODIFY
  `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE
  `kategori`
MODIFY
  `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE
  `pasien`
MODIFY
  `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE
  `penyakit`
MODIFY
  `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE
  `pertanyaan`
MODIFY
  `id` int NOT NULL AUTO_INCREMENT;