-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2020 pada 12.19
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `penulis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `tanggal`, `penulis`) VALUES
(101, 'Santunan & Pembinaan Rutin Mustahik', 'SETIAP tanggal 10 , seluruh keluarga binaan LAZIS Sabilillah selalu datang di masjid Sabilillah guna mendapatkan santunan pendidikan bagi putra putrinya yang masih sekolah. Kedatangan tanggal 10 setiap bulan bagi keluarga binaan adalah hal yang wajib di hadiri karena sudah menjadi akad perjanjian di awal pengangkatan sebagai keluarga binaan. Acara rutin setiap bulan ini selain anak asuh mendapatkan santunan sekaligus bagi keluarga binaan ini adalah sebagai sarana pembinaan menuju keluarga yang sakinah dan sejahtera. Dalam acara rutin tersebut mustahiq diberikan pembinaan mental spiritual dan skill guna menjadikan mustahiq adalah keluarga yang sabar dalam ujian Alloh SWT, keluarga yang bertaqwa dan keluarga yang sungguh sungguh dalam mendidik anak dan dalam menjalani kehidupan ini. Acara rutin diawali dengan membaca istighotsah dan dilanjutkan dengan meteri pembinaan seperti ibadah, pendidikan anak, kesehatan keluarga hingga materi usaha.\r\n\r\nSeperti yang disampaikan Ust Sofyan Arief (bag. Pendistribusian), bahwa pembinaan mustahiq di LAZIS Sabilillah adalah satu paket dengan santunan, baik santunan guru TPQ maupun santunan imam Musolla. Karena pembinaan adalah merupakan kunci dari upaya meningkatkan mustahiq menjadi lebih sejahtera dari sebelumnya. Tanpa adanya pembinaan mustahil akan ada perubahan bagi mustahik. Pendistribusian tanpa adanya pembinaan akan menjadikan mustahiq lebih ketergantungan pada lembaga, dan tidak akan menjadikan mustahiq jadi mandiri, Lanjut Sofian.\r\n\r\nDalam upaya pedistribusian LAZIS Sabilillah menekankan utama pada pembinaan mental spiritual, karena mental spiritual lah yang mampu merubah kondisi mustahiq untuk lebih berdaya dan mandiri. Karena pendistribusian Zakat, infaq shodaqoh masihlah sedikit atau belum mencukupi dibanding kebutuhan mustahiq secara total. Untuk itu upaya dan usaha keras mustahiqlah yang dapat menghantarkan diri mereka menuju kehidupan yang lebih baik.\r\n\r\nSenada dikatakan Manajer Oprerasional (Ust Sulaiman) yakni pertama, esensi pendistribusian zakat adalah bahwa dana zakat diharapkan akan mampu mendekatkan diri mustahiq pada sang Kholiq (Yang Maha Pencipta) hingga Alloh SWT akan memberikan rahmatnya pada mustahik dan Alloh merubah kondisi mustahik menjadi lebih sejahtera. Kedua, LAZIS Sabililah sebagai fungsi masjid dalam pembinaan umat, tentunya pembinaan mustahiq akan mengarah pada peningkatan nilai-nilai spiritual menuju peningkatan ketaqwaan kepada Alloh SWT. Sebagai fungsi masjid yang tidak hanya mampu meningkatkan ketaqwaan pada jamaah saja namun juga mampu meningkatkan kesejahteraan pada jamaah.', '2019-01-31', 'Admin'),
(103, 'Ambulan Masjid Sabilillah Siap Siaga 24 Jam', 'Sebagai masjid yang berpredikat sebagai masjid paripurna nasional maka tidak hanya bidang peribadatan saja yang dilayani. Selain bidang sosial kemasyarakatan yang telah digawangi oleh LAZIS Sabilillah, melalui penggalangan dana selama 1 tahun pengadaan ambulan gratis untuk jamaâ€™ah Banyak cerita dan kisah menarik jika berbicara mengenai pelayanan Ambulan Gratis ini diantaranya, diantaranya pernah dalam 1 hari bisa mengantarkan pasien hingga 3 kali dengan rute berbeda. Meski terbilang belum lama aktif dan berlalu lalang namun ambulan Sabilillah cukup dikenal, baik dikalangan Bapak Bapak Polisi maupun para perawat di beberapa RS di Kota Malang. Bapak Didik Supardi selaku coordinator penanggung jawab ambulan mengatakan bahwa setiap hari ia tidak pernah lepas dari control HP nomor layanan ambulan. Karena memang pemakaian kebutuhan ambulan tidak dapat diprediksi atau dijadwalkan sebelumnya. â€œBisa jadi ketika kita lelap istirahat tiba â€“ tiba HP berbunyi ada panggilan dari pasien untuk segera diantar menuju Rumah sakit atau ke rumah duka. Program Ambulan Gratis ini berjalan sejak akhir tahun 2016 lalu. Hingga akhir tahun 2018 telah tercatat setidaknya melayani 172 pengguna yang memanfaatkan adanya fasilitas ini. Memang secara standard ambulan jenazah dan ambulan pasien tidakâ€™lah diperbolehkan menjadi satu kendaraan. Oleh karenanya dalam hal mensiasati hal ini pengelola ambulan menyediakan 2 jenis tempat tidur yang mana fungsi dan kegunaannya sudah disesuaikan demi masing â€“ masing kebutuhan pasien. â€œTidak lepas pula kami selalu berkoordinasi serta mengajak perawat dari klinik Sabilillah medical service jika kami mengantar pasien rujukan atau non rujukan yang membutuhkan rawat inap atau jalan di rumah sakit. Hingga kami tidak akan salah tindakan dalam membawa pasiean menuju rumah sakit yang diinginkan.â€ Didik S selaku driver menjelaskan Seperti beberapa waktu yang lalu ketika masuk kabar ada salah satu jamaâ€™ah dari guru TPQ binaan LAZIS yang membutuhkan ambulan untuk mengantar keluarga sesaat yang meninggal dunia di RSSU Saiful Anwar untuk menuju keluarga di daerah Kabupaten Jepara Jawa Tengah. Dengan sigap driver ambulan menyiapkan armada untuk menjemput sekaligus mengantar jenazah. Dengan kondisi jarak yang tidaklah dekat maka diputuskan untuk membawa driver cadangan. Selain itu keluarga pasien juga diwajibkan untuk ikut menunggu dan menjaga di dalam kabin ambulan selama dalam perjalanan. Berangkat dari Malang jam 14.00 wib dengan jarak tempuh 264 KM, kendaraan keluarga beriringan dengan ambulan. Namun pasti tertinggal, karena memang laju ambulan membawa pasien sudah bisa dipastikan maksimal hingga 100 km/jam pada arus jalan yang lancar. Melalui jalan bebas hambatan dan jalur pantura ambulan sampai dirumah duka tepat pada pukul 10 malam.', '2020-04-27', 'Admin'),
(104, 'Berdiri Megah, Bangunan Masjid Sabilillah Kota Malang Simpan Makna Kemerdekaan', 'MALANGTIMES - Warga Malang mungkin sudah tidak asing dengan nama Masjid Sabilillah. Selain kemegahannya, masjid yang berada di kawasan Blimbing itu juga banyak dikenal lantaran menyimpan banyak nilai sejarah.\r\n\r\nBahkan, sederet bangunannya pun menyimpan makna tersendiri. Jumlah pilar, tinggi bangunan, hingga luas bangunannya pun masih berkaitan erat dengan hari kemerdekaan Indonesia.Sekretaris Takmir Masjid Sabilillah Akhmad Farkhan menyampaikan, di seluruh area masjid terdapat 17 pilar yang melambangkan tanggal kemerdekaan Indonesia, yakni 17 Agustus. Selanjutnya lantai sampai atap memiliki ketinggian delapan meter yang menunjukkan bulan kemerdekaan Indonesia.\r\n\r\n\"Lebar masjid dan tinggi menara yang 45 meter ini melambangkan tahun perjuangan bangsa Indonesia, yakni tahun 1945,\" bebernya.\r\n\r\nTak hanya itu. Dia juga menyampaikan bahwa antara pilar yang satu dengan lainnya di dalam masjid berjarak lima meter. Hal itu memiliki makna Pancasila dan Rukun Islam yang jumlah masing-masing adalah lima. Sementara segi enam pada bangunan menara melambangkan Rukun lman pada agama Islam.\r\n\r\n\"Garis tengah bangunan kubah yang panjangnya 20 meter melambangkan sifat-sifat Tuhan yang dua puluh,\" imbuh Farkhan.\r\n\r\nDia juga menyampaikan, pembangunan Masjid Raya Sabilillah merupakan upaya untuk mengenang jasa ulama Islam yang berjiwa patriotik. Selain dimaksudkan sebagai rumah ibadah, Masjid Sabilillah dimaksudkan sebagai monumen perjuangan.\"Para ulama yang tergabung dalam barisan Sabilillah pernah berjasa dalam sejarah perjuangan bangsa. Jadi, untuk meneladani semangat perjuangan ulama dalam membela agama,\" pungkasnya. ', '2019-06-04', 'Admin'),
(105, 'Besok, Masjid Sabilillah Malang Tetap Laksanakan Ibadah Salat Jumat Berjamaah', 'Masjid Sabilillah Malang akan tetap melaksanakan Shalat Jumat berjamaah, Jumat (20/3/2020) besok. Namun untuk mengantisipasi penyebaran virus Corona, pihak pengelola masjid akan melakukan penyemprotan disinfektan pada Kamis (19/3/2020) selepas dhuhur.\r\n\r\nSekretaris Masjid Sabilillah Malang, Akhmad Farkhan saat dikonfirmasi menyampaikan, Salat Jumat akan dilaksanakan seperti biasanya. Termasuk shaf salat akan dibuat seperti biasa dan tak berjarak. Namun, jamaah yang akan mengikuti salat akan dipastikan dalam kondisi sehat.\r\n\r\n\"Kami mengimbau untuk jamaah yang dalam kondisi sakit untuk sementara melaksanakan salat di rumah. Namun untuk yang sehat bisa mengikuti salat berjamaah seperti biasa,\" katanya, Kamis (19/3/2020).\r\n\r\nDijelaskan juga jika pembersihan karpet dan penyemprotan disinfektan dilakukan dengan menggandeng pihak dari Kota Surabaya. Kondisi masjid akan dibersihkan secara total untuk memastikan agar Salat Jumat berlangsung khusyu.\r\n\r\nSelain membersihkan masjid, dia juga mengimbau agar jamaah datang ke masjid sudah dalam kondisi suci dan bersih. Selain itu jamaah juga diimbau untuk membawa sajadah sendiri-sendiri dari rumah.\r\n\r\nLebih jauh dia menyampaikan jika pasca Salat Jumat akan dilaksanakan tausiah tambahan dengan materi wudhu yang baik dan benar. Tujuannya adalah mengantisipasi penyebaran virus Corona atau Covid-19. Tausiah akan disampaikan oleh Dr. KH Mustofa Alwi Shahab yang juga sekaligus sebagai Khatib Salat Jumat besok.\r\n\r\nSementara itu, Kabag Humas Pemkot Malang Nur Widianto menyampaikan, seluruh takmir masjid di Kota Malang telah diberikan informasi berkaitan dengan imbauan yang berdasar pada Surat Edaran yang telah ditandatangani Wali Kota Malang Sutiaji.\r\n\r\nNamun apabila tetap dilaksanakan secara berjamaah, Pemkot Malang tetap berharap agar masjid melakukan persiapan dan antisipasi yang diberlakukan. Diantaranya seperti melakukan pengukuran suhu tubuh hingga cuci tangan dengan benar.\r\n\r\n\"Kami dorong agar menjalankan sesuai protokol yang ditetapkan,\" terang pria yang akrab disapa Wiwid itu.', '2020-03-19', 'Admin'),
(106, 'Masih Bandel Ramai di Jalanan, Siap-Siap Dengar Ceramah Wali Kota Malang di Traffic Light', 'Berbagai upaya untuk mengurangi angka kasus Covid-19 di Kota Malang telah dilakukan.\r\nMisalnya, imbauan untuk menerapkan social distancing dan physical distancing, hingga pembatasan aktivitas di luar rumah. \r\n\r\nNamun, hal itu rupanya memang belum sepenuhnya dilakukan oleh masyarakat yang ada di Kota Malang. \r\n\r\nBeberapa hari terakhir ini bahkan jalanan sudah tampak ramai lalu lalang kendaraan.\r\n\r\nPadahal, Pemerintah Kota (Pemkot) Malang selalu mengingatkan masyarakat untuk tetap waspada. Sebab, penularan Covid-19 tidak kenal waktu dan tempat.\r\n\r\nNah, bagi masyarakat yang masih nekat jalan-jalan di luar rumah siap-siap saja disambut suara Wali Kota Malang Sutiaji.\r\n\r\nSebab, sejak kemarin (Sabtu, 18/4), \'Voice Announcer\' yang terpasang di perangkat Traffic Light Kota Malang telah bersuara imbauan pencegahan Covid-19 langsung dari Wali Kota Malang Sutiaji. \r\n\r\nDilihat dari postingan sosial media Dinas Perhubungan Kota Malang baik di instagram ataupun twitter, Voice Announcer itu telah di pasang di Traffic Light daerah Jalan Kawi dan dekat Masjid Sabilillah, Blimbing.\"Pemasangan Voice Announcement terkait imbauan COVID-19 dengan suara langsung oleh Wali Kota Malang, Drs. H. Sutiaji, di traffic light Sabilillah dan Jl. Kawi.\r\nSemoga masyarakat semakin mematuhi imbauan ini, tetap jaga kesehatan, jaga jarak dan di rumah saja,\" cuit @dishub_mlgkota di akun twitternya.Para pengendara yang melintasi kawasan tersebut akan selalu mendengar imbauan yang menjelaskan beberapa aturan mengenai pencegahan Covid-19.\r\n\r\n\"Salam Satu Jiwa Arema. Saudara sekalian, Nawakku yang saya banggakan. Kami Ingatkan kota Malang masuk zona merah wabah Covid-19. Ayo lakukan sosial distancing, physical distancing, pakai masker, dan biasakan cuci tangan dengan sabun dan air mengalir, serta termasuk untuk beraktivitas di rumah saja,\" imbau Sutiaji. \r\n\r\nHal lain yang juga disampaikan melalui \'Voice Announcer\' tersebut yakni imbauan untuk tidak melakukan perjalanan mudik. \r\n\r\nIa meminta masyarakat untuk ikhlas tidak menjalankan tradisi tahunan menyambut hari lebaran itu di tengah pandemi Covid-19 ini. \r\n\r\n\"Salam satu Jiwa Arema. Saudara sekalian nawakku yang saya banggakan, dulur kabeh, saat ini kita perangi wabah corona bersama. Bisa kita hentikan corona itu dengan cara biasakan cuci tangan dengan sabun dan air mengalir, pakai masker, jaga jarak serta utamakan aktivitas di rumah saja. Dan kami meminta untuk saudara keikhlasannya untuk keluarganya tidak mudik dan pulang kampung terlebih dahulu,\" terangnya.', '2020-04-19', 'Admin'),
(108, 'Memakmurkan Masjid dan Jamaah Jadi Moto Masjid Sabilillah Malang', 'REPUBLIKA.CO.ID, JAKARTA -- Masjid Sabilillah menjadi salah satu yang dinominasikan Kementerian Agama sebagai Masjid Paripurna. Karenanya, Masjid Sabilillah diharapkan dapat membagikan tata kelola kepada masjid-masjid seluruh Indonesia.\r\n\r\nKetua Yayasan Masjid Sabilillah, KH Mas\'ud Ali, menilai pengelolaan masjid harus memiliki strategi yang mumpuni, terutama untuk memakmurkan jamaah yang ada di sekitar. Ia menuturkan, strategi itu merupakan salah satu usaha yang dilakukan menejemen Masjid Sabilillah, semata-mata demi mengembalikan fungsi masjid sebagai pusat peradaban umat. \"Jadi memang moto Masjid Sabilillah adalah memakmurkan masjid dan memakmurkan jamaah,\" kata Mas\'ud di Hotel Lumire Jakarta, Selasa (13/12).\r\n\r\nIa menerangkan, saat ini Masjid Sabilillah sudah memiliki 150 orang yang merupakan jamaah tetap, dengan daya tampung sekitar tiga sampai empat ribu jamaah. Selain itu, Masjid Sabilillah memiliki sekolah-sekolah jenjang SD, SMP dan SMA, yang ternyata sudah jadi salah satu sekolah unggulan terutama di Malang.\r\n\r\nMas\'ud mengungkapkan rasa syukur, karena tata letak Masjid Sabilillah yang berada di depan pintu masuk Kota Malang. Selain itu, Masjid Sabilillah berhadapan langsung dengan salah satu gereja kuno di Malang, dan sejak dibangun pada 1974 dan selesai pada 1980, keduanya mampu menjaga hubungan dan berdampingan baik.\r\n\r\nMeski begitu, kiai Mas\'ud Ali menuturkan bagaimana pendiri dari Masjid Sabilillah, KH Masykur, sangat menginginkan masjid dikembalikan fungsinya sebagai pusat peradaban umat.\r\n\r\nMaka itu, kiai Mas\'ud menjelaskan program-program yang ada di Masjid Sabilillah tidak memiliki tujaun lain, mewujudkan masjid sebagai pusat peradaban. \"Semoga dengan itu masjid bisa benar-benar menjalankan tugas membimbing umat,\" ujar Mas\'ud.', '2016-12-13', 'Admin'),
(109, 'Masjid Hizbullah-Sabilillah di antara Kiai Masykur dan Kiai Tolchah', 'Bagi seluruh warga Nahdlatul Ulama di Nusantara jika saja berkunjung ke Malang Raya, tidaklah sempurna rasanya jikalau tidak berkunjung ke dua masjid bersejarah bagi warga Nahdlatul Ulama. Kedua masjid tersebut adalah masjid Hizbullah yang berada di Singosari, Kabupaten Malang, dan Masjid Sabilillah yang berada di Kecamatan Blimbing Kabupaten Malang. Dikatakan masjid ini penting bagi warga Nahdlatul Ulama adalah karena keduanya, baik Masjid Hizbullah maupun Sabilillah, didirikan dan menjadi monument sejarah perjuangan Laskar Hizbullah dan Sabilillah utamanya pada peperangan 10 Nopember 1945.  Masjid Hizbullah merupakan masjid Jami’ pertama yang ada di Singosari Kabupaten Malang. Masjid ini didirikan pada tahun 1907 atas jasa dan prakarsa KH Masykur. Sedangkan Masjid Sabilillah berdiri agak lebih belakangan yaitu dimulai peletakan batu pertamanya pada tahun 1974. Meskipun berdiri sejak tahun 1907, masjid Hizbullah Singosari pada awalnya tidaklah memakai nama hizbullah pada tahun 1907. Melainkan dinamakan dengan masjid Jami’ Singosari. Hanya saja karena belakangan di sebelah timur masjid sabilillah ini terdapat markaz Hizbullah dan Kiai Masjkur sendiri adalah salah satu komandan Hizbullah region Malang, Singosari pun menjadi pusat kegiatan Laskar Hizbullah. Maka belakangan pengurusan wakaf tanah dan kepengurusan Masjid ini kemudian dipindahtangankan kepada Nahdlatul Ulama. Pada tahun 1996, lima tahun setelah wafatanya Kiai Masjkur sang pendiri, nama masjid jami’ Singosari diganti menjadi: Masjid Besar Hizbullah (Hasan Ishaq, 2017). Adapaun Masjid Sabilillah di Blimbing Kota Malang adalah beridiri memang untuk mengenang Perjuangan Laskar Sabilillah. Di mana KH Masjkur juga terlibat di dalam laskar itu. Kiai Masjkur kemudian menunjuk menantunya Kiai Tolchah Hasan untuk menjadi ketua panitia pembangunan masjid tersebut. Di mana masyarakat sekitar juga mendukung pembangunannya karena masjid Jami’ Blimbing yang ada sebelumnya sudah tidak mampu menampung jama’ah shalat jum’at. Dalam pada itu, ketika Kiai Masjkur menunjuk Kiai Tolchah menjadi panitia pembangunan, Ia berpesan kepada menantunya itu: “Kalau masjid (sabilillah, red) ini tidak kunjung selesai pembangunannya, maka berarti diantara panitia ini ada yang ngentit (korupsi dana).” Kata Kiai Masykur seperti dikisahkan Kiai Tolchah Hasan pada acara halal bihalal masjid Sabilillah pada tahun 2013 silam. “Jadi jika saja ada pembangunan masjid kok tidak selesai-selesai, berarti panitianya ada yang korupsi.” Lanjut Kiai Tolchah ketika itu. Adalah menarik pula untuk menilik bagaimana cara meramaikan kedua masjid tersebut ala Kiai Tolchah. Khususnya dengan Masjid Sabilillah di Kecamatan Blimbing Kota Malang, Kiai Tolchah sebagai penerus perjuangan Kiai Masjkur kemudian mengembangkan berbagai unit kegiatan amal di dalamnya. Berbagai kegiatan dan fasilitas untuk kemaslahatan ummat diselenggarakan di sana. Unit-unit Pendidikan mulai tingkat taman kanak-kanak sampai sekolah menengah atas, fasilitas dan kegiatan kesehatan, perpustakaan dan juga Lembaga infaq zakat dan shadaqah yang dikembangkan secara baik. Belakangan ini, bahkan Masjid Sabilillah telah melakukan bedah rumah bagi warga sekitar masjid yang rutin berjama’ah di masjid sabilillah. Adapun Masjid Hizbullah dalam hal ini, sangat terlihat pesat dengan diselenggarakannya berbagai Lembaga Pendidikan yang ada di sana. Hal mana Lembaga-lembaga Pendidikan tersebut berkembang pesat dibawah sebuah Yayasan Pendidikan Islam Al-Maarif yang juga dipelopori Kiai Masykur dan Kiai Tolchah. Semua Lembaga Pendidikan mulai dari tingkat SD-MI, sampai SMA, MA dan SMK di sana berjalan dan berkembang baik dan maju. Partisipasi masyarakat juga tinggi. Dalam sebuah kesempatan seminar di Unisma yang penulis ikuti, Kiai Tolchah Hasan secara impilisit mengungkapkan bahwa khususnya konsep pengembangan Masjid Sabilillah yang dia kembangkan adalah meniru Universitas Al-Azhar Mesir. Di mana Universitas tersebut berkembang berasal dari masjid yang kemudian menjadi pusat peradaban Islam. “Al-Azhar itu bahkan memiliki wakaf tanah yang digunakan untuk rumah sakit dan pusat perbelanjaan.” Kata Kiai Tolchah dalam kesempatan seminar itu.  Demikianlah, Masjid Hizbullah dan Sabilillah berkembang sebagai masjid yang memakmurkan masyarakat sekitarnya.\r\n\r\nSumber: https://www.nu.or.id/post/read/107071/masjid-hizbullah-sabilillah-di-antara-kiai-masykur-dan-kiai-tolchah', '2019-05-31', 'Admin'),
(110, 'Masjid Sabilillah Malang Menjadi Contoh Bagaimana Wakaf Dikelola Secara Produktif', 'Masjid Sabilillah, Malang, Jawa Timur, menjadi salah satu dari 23 masjid di Indonesia yang mendapatkan penghargaan dari Kementerian Agama sebagai masjid percontohan tingkat nasional. Sesepuh NU, KH Muhammad Tolchah Hasan (81) yang juga Ketua Dewan Pembina Masjid Sabilillah menjelaskan bagaimana aset wakaf berupa masjid ini bisa dikelola secara produktif untuk kesejahteraan umat, bukan hanya menjadi tempat ibadah mahdhoh.  “Sejak awal kita ingin Masjid Sabilillah tidak hanya menjadi pusat ibadah, tapi juga pusat peradaban Islam,” kata Kiai Tolchah di Jakarta Selasa (8/8) yang secara khusus diminta oleh Badan Wakaf Indonesia (BWI) untuk menyampaikan testimoni terkait pengelolaan wakaf secara produktif.  Menurut Kiai Tolchah, Yayasan Sabilillah di masjid ini juga mengelola sekolah, ambulans, dan koperasi. Terakhir, masjid ini juga melakukan kegiatan bedah rumah, yakni renovasi rumah-rumah para jamaah yang kurang layak huni yang berada di sekitar masjid. “Sekarang sedikitnya sudah ada 20 rumah yang dibedah,” katanya. Bidang usaha, antara lain, dikelola dalam bentuk koperasi dengan beragam usaha. Sejak berdiri pada 1999, koperasi ini sudah memiliki ratusan anggota anggota. Jenis usaha yang dilakukan, di antaranya unit pertokoan, BMT, dan pujasera. Melalui koperasi ini, Masjid Sabilillah tidak memiliki ketergantungan terhadap sumbangan dana. \"Kita usahakan masjid tidak hanya berharap sumbangan tapi justru memberikan kredit-kredit kepada pedagang-pedagang kurang mampu ,\" katanya.  Di bidang pendidikan, Masjid Sabilillah mempunyai Lembaga Pendidikan Islam (LPI) Sabilillah yang menyelenggarakan pendidikan mulai dari jenjang TK hingga SMA, bahkan memberikan beasiswa kepada anak-anak yatim atau tidak mampu untuk melanjutkan pendidikan. Di bidang kesehatan, Masjid Sabilillah mendirikan lembaga layanan kesehatan bekerja sama dengan RS Islam yang ada di sekitar Malang. Lembaga Amil Zakat, Infak, dan Sedekah (LAZIS) Masjid Sabilillah juga yang secara rutin memberikan santunan dan beasiswa kepada anak anak yatim dan dzuafa, insentif guru TPQ, santunan untuk lansia pejuang agama, dan modal bergulir kepada puluhan paguyuban. Kiai Tolchah yang tahun 2017 in imemasuki usia 82 tahun memang menjadi salah seorang tokoh senior yang dinilai berhasil mengelola wakaf secara produktif. Di Malang, bersama para nadzir lainnya ia mengelola aset wakaf menjadi perguruan tinggi, seperti Universitas Islam Malang (Unisma), Universitas Raden Rahmat, dan Institut Agama Islam Al-Qolam.  Ada juga aset wakaf di Malang yang diwujudkan dalam bentuk Rumah Sakit Islam yang dipercaya oleh pemerintah untuk membina rumah sakit-rumah sakit di kawasan Idonesia Timur. Potensi Besar Dalam kegiatan \"Media Gathering dan Launching Pedoman Akuntansi Wakaf\" yang diselenggarakan oleh Badan Wakaf Indonesia (BWI) di Jakarta, Selasa (8/8), dipaparkan besarnya aset wakaf di Indonesia. Robbyantono, divisi pemberdayaan wakaf BWI mengungkapkan, potensi wakaf di Indonesia yang berupa tanah seluas 4.359 kilometer persegi, atau hampir 10 kali lipat dari luas wilayah DKI Jakarta atau negara Singapura. Sementara potensi wakaf yang sangat besar dan terus berkembang adalah wakaf uang. Direktur Jenderal Bimbingan Masyarakat Islam Kementerian Agama Muhammadiyah mengatakan, sebagian besar masyarakat masih mengira wakaf itu urusanya hanya sekolah, masjid dan kuburan. “Padahal aset wakaf ini besar sekali dan bisa dikelola secara produktif,\" katanya.  Untuk memaksimalkan produktifitas wakaf, menurut Muhammdiyah Amin, para nadzir atau pengelola wakaf harus mempunyai wawasan interpreneur. \" Di sini ada KH Tolchah Hasan yang punya pengetahuan menjadikan wakaf produktif,\" katanya. Ia memaklumi bahwa selama ini sosialisasi mengenai wakaf masih kurang. Khotbah dengan tema wakaf hampir tidak ada. \"Kalau tentang zakat kadang masih ada meskipun jarang sekali. Nah yang tentang wakaf ini tidak ada,\" katanya. Kiai Tolchah mengatakan, khotbah-khotbah dan ceramah agama harus lebih memberdayakan masyarakat. “Selama ini khotbah lebih banyak berbicara jalan dari kuburan ke neraka. Bukan dari wakaf menuju surga,” katanya. Menurut Kiai Tolchah, budaya wakaf di Indonesia masih perlu dibangun lagi. “Di Kuwait, ibu-ibu sehabis belanja sudah biasa membayar wakaf uang lewat hp. Sudah banyak anjungan wakaf di sana. Di Sudan sudah banyak bank wakaf. Di Mesir, Al-Azhar sudah mempunyai pabrik-pabrik dari wakaf,” ujarnya.', '2017-08-10', 'Admin'),
(111, 'Jejak Perjuangan Arek Malang di Masjid Sabilillah', 'Masjid Sabilillah Kota Malang, merupakan salah satu masjid yang memiliki nilai sejarah. Masjid ini merekam Jejak perjuangan arek Malang, saat berjuang menghadapi penjajah. Tak hanya memiliki nilai sejarah, bentuk bangunan Masjid ini juga memiliki arti filosofis, mulai dari pilar, tinggi dinding hingga menara.\r\n\r\nTerakota.id telah menurunkan laporan tentang sosok Kyai Haji Masjkur yang merupakan pemimpin Laskar Sabilillah. Kiai Masjkur merupakan anggota Badan Penyelidik Usaha-Usaha Persiapan Kemerdekaan Indonesia  (BPUPKI), Menteri Agama dalam lima periode kabinet, dan Ketua Umum Pengurus Besar Nahdlatul Ulama (PBNU).\r\n\r\nTim peneliti diketuai Kiai Haji Kasuwi Saiban,  sekretaris M Faisol Fatawi, dan anggota Mohammad Mahpur, Achmad Diny Hidayatullah, Hayat, Abdul Adzim Irsyad,  Hayat, Abdur Rahim, dan Heru Pratikno.', '2018-06-05', 'Admin'),
(113, 'Masjid Sabilillah, Saksi Sejarah Perjuangan dan Tempat Referensi Ibadah Warga Malang', 'Letak masjid ini tepat berada di menuju masuk Kota Malang tepatnya di Jalan Ahmad Yani, Kecamatan Blimbing, Kota Malang, Jawa Timur. Masjid Sabilillah yang berdiri megah di pertigaan Blimbing ini seakan menyambut warga yang akan memasuki Kota Malang dari sisi utara.\r\n\r\nBagi sebagian orang mungkin tak tahu bila Masjid Sabilillah ini menjadi saksi bersejarah bagaimana laskar - laskar islam yakni laskar Sabilillah dibawah panglima KH. Zainul Arifin dan Hizbullah KH. Masykur, berjuang untuk mengusir penjajah di pertempuran 10 November di Kota Surabaya.', '2020-05-17', 'Adminnn De');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_artikel`, `judul`, `gambar`) VALUES
(201, 101, 'Santunan & Pembinaan Rutin Mustahik', '1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_kegiatan` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nama`, `tgl_kegiatan`, `keterangan`) VALUES
(301, 'Santunan & Pembinaan Rutin Mustahik', '2019-01-10', 'Kegiatan bulanan'),
(302, 'Program Wakaf Tunai', '2019-04-09', 'Kepentingan Masyarakat'),
(303, 'Pelajaran Tahsin Rutin â€“ Ustadz Badrus', '2019-07-15', 'Kajian Rutin'),
(304, 'Tabligh Akbar Ustadz Syafiq Riza', '2020-01-26', 'Tabligh Akbar'),
(305, 'Tabligh Akbar Ustadz Subhan Bawazier', '2020-01-20', 'Tabligh Akbar'),
(306, 'Kajian Rutin \"Kitab Al Kabair\" - Ustadz Afroqi', '2019-09-27', 'Kajian Rutin'),
(307, 'Kajian Rutin Bulanan \"Riyadus Shalihin\"', '2019--8-25', 'Kajian Rutin'),
(308, 'Kajian Rutin \"Minhajul Muslim\" - Ustadz Sanusi', '2019-08-18', 'Kajian Rutin'),
(309, 'Kajian Rutin \"Kitab Arba\'in An Nawawi\"', '2019-08-08', 'Kajian Rutin'),
(310, 'Safari Dakwah Ust. dr. Raehanul Bahraen', '2019-09-15', 'Tabligh Akbar'),
(311, 'Safari Dakwah Ust. dr. Raehanul Bahraen', '2019-09-14', 'Tabligh Akbar'),
(312, 'Kajian Rutin Ustadz Khalid Basalamah ', '2019-10-12', 'Kajian Rutin'),
(313, 'Kajian Rutin \"Sejarah Islam\" - Ustadz Zainal', '2020-02-29', 'Kajian Rutin'),
(314, 'Muslim LifeFest - JCC', '2019-08-31', 'Kajian Rutin'),
(315, 'Kajian Rutin \"Kitab Usnul Tsalatsah\"', '2020-02-05', 'Kajian Rutin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `telepon`) VALUES
(1201, 'Penerima ZIS', '08980008078'),
(1202, 'Ambulance 24 jam', '085649650050'),
(1203, 'Rumah Yatim Sabilillah', '08980008078'),
(1204, 'Madrasah Quran Sabilillah', '082245652142'),
(1205, 'Sabilillah Medical Center', '(0321) 493080'),
(1207, 'Susi', '0897685467');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `fk_gambar` (`id_artikel`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1208;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `fk_gambar` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
