
-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `ID_PROVINSI` int(11) NOT NULL,
  `NAMA_PROVINSI` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`ID_PROVINSI`, `NAMA_PROVINSI`) VALUES
(1, 'Aceh'),
(2, 'Sumatra Utara'),
(3, 'Sumatra Barat'),
(4, 'Riau'),
(5, 'Kepulauan Riau'),
(6, 'Jambi'),
(7, 'Sumatra Selatan'),
(8, 'Bangka Belitung'),
(9, 'Bengkulu'),
(10, 'Lampung'),
(11, 'DKI Jakarta'),
(12, 'Jawa Barat'),
(13, 'Banten'),
(14, 'Jawa Tengah'),
(15, 'DI Yogyakarta'),
(16, 'Jawa Timur'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Tengah'),
(22, 'Kalimantan Selatan'),
(23, 'Kalimantan Timur'),
(24, 'Kalimantan Utara'),
(25, 'Gorontalo'),
(26, 'Sulawesi Utara'),
(27, 'Sulawesi Barat'),
(28, 'Sulawesi Tengah'),
(29, 'Sulawesi Selatan'),
(30, 'Sulawesi Tenggara'),
(31, 'Maluku'),
(32, 'Maluku Utara'),
(33, 'Papua'),
(34, 'Papua Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `ID_RS` int(11) NOT NULL,
  `ID_PROVINSI` int(11) NOT NULL,
  `NAMA_PROVINSI` varchar(300) NOT NULL,
  `NAMA_RS` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`ID_RS`, `ID_PROVINSI`, `NAMA_PROVINSI`, `NAMA_RS`) VALUES
(1, 1, 'Aceh', 'RSU Dr. Zainoel Abidin Banda Aceh'),
(2, 1, 'Aceh', 'RSU Cut Meutia Lhokseumawe'),
(3, 2, 'Sumatra Utara', 'RSU H. Adam Malik Medan'),
(4, 2, 'Sumatra Utara', 'RSU Kabanjahe'),
(5, 2, 'Sumatra Utara', 'RSU Djasamen Saragih'),
(6, 2, 'Sumatra Utara', 'RSU Tarutung'),
(7, 2, 'Sumatra Utara', 'RSU Padang Sidempuan'),
(8, 3, 'Sumatra Barat', 'RSUP Dr. M. Jamil Padang'),
(9, 3, 'Sumatra Barat', 'RSU Dr. Achmad Mochtar'),
(10, 4, 'Riau', 'RSU Dr. Achmad Mochtar'),
(11, 4, 'Riau', 'RSU Kota Dumai'),
(12, 4, 'Riau', 'RSUD Puri Husada Tembilahan'),
(13, 5, 'Kepulauan Riau', 'RSUD Embung Fatimah'),
(14, 5, 'Kepulauan Riau', 'RS Badan Pengusahaan Batam'),
(15, 5, 'Kepulauan Riau', 'RSUD Raja hmad Tabib'),
(16, 5, 'Kepulauan Riau', 'RSUD Karimun'),
(17, 6, 'Jambi', 'RSU Raden Mattaher Jambi'),
(18, 7, 'Sumatra Selatan', 'RSUP Dr. M. Hoesin Palembang'),
(19, 7, 'Sumatra Selatan', 'RSU Kayu Agung'),
(20, 7, 'Sumatra Selatan', 'RSUD Kabupaten Lahat'),
(21, 7, 'Sumatra Selatan', 'RSUD Siti Aisyah Lubuh Linggau'),
(22, 7, 'Sumatra Selatan', 'RSUD Siti Fatimah'),
(23, 7, 'Sumatra Selatan', 'RS Dr. Rifai Abdullah'),
(24, 8, 'Bangka Belitung', 'RSU Tanjung Pandan'),
(25, 8, 'Bangka Belitung', 'RSU Pangkal Pinang'),
(26, 9, 'Bengkulu', 'RSU Dr. M. Yunus Bengkulu'),
(27, 9, 'Bengkulu', 'RSU Arga Makmur'),
(28, 9, 'Bengkulu', 'RSUD Hasanuddin Damrah Manna'),
(29, 10, 'Lampung', 'RSU Abdul Moeloek'),
(30, 10, 'Lampung', 'RSU Kalianda'),
(31, 10, 'Lampung', 'RSU Mayjend HM Ryacudu'),
(32, 10, 'Lampung', 'RSU Ahmad Yani'),
(33, 11, 'DKI Jakarta', 'RSPI Dr. Sulianti Saroso'),
(34, 11, 'DKI Jakarta', 'RSU Persahabatan'),
(35, 11, 'DKI Jakarta', 'RSPAD Gatot Subroto'),
(36, 11, 'DKI Jakarta', 'RSUP Fatmawati'),
(37, 11, 'DKI Jakarta', 'RSUD Tarakan'),
(38, 11, 'DKI Jakarta', 'RSUD Pasar Rebo'),
(39, 11, 'DKI Jakarta', 'RS Bhayangkara Said Soekanto'),
(40, 11, 'DKI Jakarta', 'RSAL Mintoharjo'),
(41, 12, 'Jawa Barat', 'RSU Dr. Hasan Sadikin Bandung'),
(42, 12, 'Jawa Barat', 'RSTP Dr. H. A. Rotinsulu Bandung'),
(43, 12, 'Jawa Barat', 'RSUD Gunung Jati Cirebon'),
(44, 12, 'Jawa Barat', 'RSUD Slamet Garut'),
(45, 12, 'Jawa Barat', 'RSUD Sekarwangi Sukabumi'),
(46, 12, 'Jawa Barat', 'RSUD Kab. Indramayu'),
(47, 12, 'Jawa Barat', 'RS Paru Goenawan Partowidgdo'),
(48, 12, 'Jawa Barat', 'RS Tk. II Dustira'),
(49, 13, 'Banten', 'RSUD Kab. Tangerang'),
(50, 13, 'Banten', 'RSUD Serang'),
(51, 14, 'Jawa Tengah', 'RSU Dr. Kariadi Semarang'),
(52, 14, 'Jawa Tengah', 'RSU Dr. Suraji Tirtonegoro'),
(53, 14, 'Jawa Tengah', 'RSU Prof. Dr. Margono Soekarjo'),
(54, 14, 'Jawa Tengah', 'RSUD Pekalongan'),
(55, 14, 'Jawa Tengah', 'RSUD Soeselo Slawi'),
(56, 14, 'Jawa Tengah', 'RSUD RAA. Soewondo'),
(57, 14, 'Jawa Tengah', 'RSUD Tidar Magelang'),
(58, 14, 'Jawa Tengah', 'RSUD Moewardi'),
(59, 14, 'Jawa Tengah', 'RSUD Banyumas'),
(60, 14, 'Jawa Tengah', 'RSU Kudus'),
(61, 14, 'Jawa Tengah', 'RS Paru Dr. Aryo Wirawan'),
(62, 14, 'Jawa Tengah', 'RSUD Kota Semarang'),
(63, 14, 'Jawa Tengah', 'RSUD Kardinah Tegal'),
(64, 15, 'DI Yogyakarta', 'RSUP Dr. Sardjito'),
(65, 15, 'DI Yogyakarta', 'RSUD Panembahan Senopati Bantul'),
(66, 15, 'DI Yogyakarta', 'RSUD Wonosari'),
(67, 15, 'DI Yogyakarta', 'RSUD Wates'),
(68, 16, 'Jawa Timur', 'RSUD Soebandi Jember'),
(69, 16, 'Jawa Timur', 'RS Pare'),
(70, 16, 'Jawa Timur', 'RSU Dr. Soetomo'),
(71, 16, 'Jawa Timur', 'RS Dr. Soedono Madiun'),
(72, 16, 'Jawa Timur', 'RSU Dr. Saiful Anwar'),
(73, 16, 'Jawa Timur', 'RS Dr. R. Koesma Tuban'),
(74, 16, 'Jawa Timur', 'RSUD Blambangan'),
(75, 16, 'Jawa Timur', 'RSUD Dr. S. Djatikoesoemo'),
(76, 16, 'Jawa Timur', 'RSUD Iskak Tulungagung'),
(77, 17, 'Bali', 'RSUP Sanglah'),
(78, 17, 'Bali', 'RSU Sajiwani Gianyar'),
(79, 17, 'Bali', 'RSUD Tabanan'),
(80, 17, 'Bali', 'RSUD Kab. Buleleng'),
(81, 18, 'Nusa Tenggara Barat', 'RSUD NTB'),
(82, 18, 'Nusa Tenggara Barat', 'RSUD Kota Bima'),
(83, 18, 'Nusa Tenggara Barat', 'RSUD Dr. Sudjono'),
(84, 18, 'Nusa Tenggara Barat', 'RSUD Praya'),
(85, 19, 'Nusa Tenggara Timur', 'RSU Prof. Dr. WZ Johanes'),
(86, 19, 'Nusa Tenggara Timur', 'RSU Dr. TC Hillers Maumere'),
(87, 19, 'Nusa Tenggara Timur', 'RSUD Komando Labuhan Bajo'),
(88, 20, 'Kalimantan Barat', 'RSU Dr. Sudarso Pontianak'),
(89, 20, 'Kalimantan Barat', 'RSU Dr. Abdul Aziz Singkawang'),
(90, 20, 'Kalimantan Barat', 'RSUD Ade Muhammad dJoen Sintang'),
(91, 20, 'Kalimantan Barat', 'RSUD Agoesdjam Ketapang'),
(92, 20, 'Kalimantan Barat', 'RSUD Sultan Imanudin Pangkalan Bui'),
(93, 21, 'Kalimantan Tengah', 'RSU Dr. Doris Sylvianus Palangkaraya'),
(94, 21, 'Kalimantan Tengah', 'RSU Dr. Murjani Sampit'),
(95, 22, 'Kalimantan Selatan', 'RSUD Ulin Banjarmasin'),
(96, 22, 'Kalimantan Selatan', 'RSUD Idaman Banjarbaru'),
(97, 23, 'Kalimantan Timur', 'RSU Panglima Sebaya'),
(98, 23, 'Kalimantan Timur', 'RSU Taman Husada Bontang'),
(99, 23, 'Kalimantan Timur', 'RSU Dr. Kanujoso Djatiwibow'),
(100, 23, 'Kalimantan Timur', 'RSU H. A. Wahab Sjahranie'),
(101, 23, 'Kalimantan Timur', 'RSUD Aji Muhammad Parikesit'),
(102, 24, 'Kalimantan Utara', 'RSUD Tanjung Selor'),
(103, 24, 'Kalimantan Utara', 'RSU Kota Tarakan'),
(104, 25, 'Gorontalo', 'RSU Prof. Dr. H. Aloei Saboe'),
(105, 26, 'Sulawesi Utara', 'RSU Prof. DR. RD. Kandou'),
(106, 26, 'Sulawesi Utara', 'RSU Dr. Sam Ratulangi'),
(107, 26, 'Sulawesi Utara', 'RSU Ratatotok Buyat'),
(108, 26, 'Sulawesi Utara', 'RSUD Kota Kotamabagu'),
(109, 27, 'Sulawesi Barat', 'RSUD Provinsi Sulawesi Barat'),
(110, 28, 'Sulawesi Tengah', 'RSUD Kota Kotamabagu'),
(111, 28, 'Sulawesi Tengah', 'RSUD Kab. Banggai Luwuk'),
(112, 28, 'Sulawesi Tengah', 'RSU Mokopido Toli-Toli'),
(113, 28, 'Sulawesi Tengah', 'RSUD Kolonedale'),
(114, 28, 'Sulawesi Tengah', 'RSU Anutapura Palu'),
(115, 29, 'Sulawesi Selatan', 'RSU Dr. Wahidin Sudirohusodo'),
(116, 29, 'Sulawesi Selatan', 'RSU Andi Makkasau Pare-Pare'),
(117, 29, 'Sulawesi Selatan', 'RSU Lakipadada Tana Toraja'),
(118, 29, 'Sulawesi Selatan', 'RSU Kab. Sinja'),
(119, 29, 'Sulawesi Selatan', 'RS Universitas Hasanuddin'),
(120, 29, 'Sulawesi Selatan', 'RSUD Labuang Baj'),
(121, 29, 'Sulawesi Selatan', 'RS Tk. II Pelamonia'),
(122, 29, 'Sulawesi Selatan', 'RS Tadjuddin Chalid'),
(123, 30, 'Sulawesi Tenggara', 'RS Kendari'),
(124, 31, 'Maluku', 'RSU Dr. M. Haulussy Ambon'),
(125, 31, 'Maluku', 'RSUP Leimena'),
(126, 32, 'Maluku Utara', 'RSU Chasan Basoeri Ternate'),
(127, 32, 'Maluku Utara', 'RSUD Sofifi'),
(128, 33, 'Papua', 'RSU Jayapura'),
(129, 33, 'Papua', 'RSU Nabire'),
(130, 33, 'Papua', 'RSU Merauke'),
(131, 34, 'Papua Barat', 'RSUD Manokwari'),
(132, 34, 'Papua Barat', 'RSUD Kab. Sorong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subscriber`
--

CREATE TABLE `subscriber` (
  `ID_SUBS` int(11) NOT NULL,
  `EMAIL_SUBS` varchar(300) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`ID_PROVINSI`);

--
-- Indeks untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`ID_RS`);

--
-- Indeks untuk tabel `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`ID_SUBS`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `ID_PROVINSI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `ID_RS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT untuk tabel `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `ID_SUBS` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
