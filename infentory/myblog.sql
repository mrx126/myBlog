-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Apr 10, 2025 at 12:00 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` int(11) NOT NULL,
  `penulis` varchar(200) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `gambar_2` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `link` mediumtext NOT NULL,
  `isi` mediumtext NOT NULL,
  `isi_2` mediumtext NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `penulis`, `kategori`, `gambar`, `gambar_2`, `judul`, `link`, `isi`, `isi_2`, `created_at`) VALUES
(1, 'Mirza Abdillah Fakih', 'article', 'https://i.pinimg.com/originals/c5/5a/08/c55a08b8559621fcbc7776d8e53b3aeb.png', 'https://i.pinimg.com/originals/dd/55/65/dd556588c6173079eaa270024d595ff0.jpg', 'Hukum Adat', 'HUKUM ADAT INDONESIA (Suatu Pengantar) ditulis oleh Prof. Dr. C. Dewi Wulansari, SH., MH., SE., MM. dan diterbitkan oleh PT Refika Aditama di bandung pada tahun 2010', 'Istilah hukum Adat (aturan kebiasaan) sudah lama dikenal di Indonesia seperti di daerah aceh Darussalam pada masa pemerintahan Sultan Iskandar muda (1607-1636) yang ditemukan dalam kitab hukum \"Safinatul Hukkam Fi Takhlisil Khassam\" yang ditulis oleh Jalaludin bin Syeh Muhammad Kamaludin anak Kadhi baginda Khatib Negeri Trussan atas perintah sultan Alaiddin Johan Syah (1781-1895). Kemudian istilah ini dicatat oleh Christian Snouck Hurgronje dalam bukunya DE Atjehers atau Orang-orang Aceh (1894), Ketika ia melakukan penelitian di aceh pada tahun 1891-1892 yang kemudian diterjemahkan kedalam istilah bahasa Belanda \"Adat-Rech\", untuk membedakan antara kebiasaan atau pendirian dengan adat yang memiliki sanksi hukum, yang kemudian istilah ini menjadi popuer Ketika digunankan oleh Cornelis van Vollenhoven dalam tiga jilid bukunya Het Adat-Recht van Nederlandsch Indie (Hukum Adat Hindia Belanda).  Namun jauh sebelum diperkenalkannya istilah Adat-Reach ini, istilah-istilah terkait hukum adat nyatanya sudah dipergunakan terlebih dahulu dalam peraturan Perundang-undangan Hindia Belanda dengan sebutan Undang-Undang Agama, Lembaga Rakyat, kebiasaan-kebiasaan, dan Lembaga asli.', 'Istilah \"adat-rech\" baru dipergunakan dalam undang-undang pemerintah Belanda pada tahun 1920 yaitu didalam undang-undang mengenai Perguruan Tinggi di Negeri Belanda, Nederlands (Stbl. 1920 nr. 105 dan dalam academisch Statuut). Terkait perbedaan antara hukum adat dengan adat itu sendiri, para ahli dalam hal ini telah memberikan gambaran ada kecenderungan yang umum untuk menetapkan sanksi atau \"akibat hukum\" sebagai atribut hukum adat, misalnya seperti apa yang telah dikemukakan oleh Djaren Saragih yang menyebutkan bahwa untuk membedakan antara hukum dengan adat dapat digunakan kriteria sebagai pedoman yaitu Batasan dan atribut dari gejala hukum (adat) itu sendiri.  Selain yang telah dikemukakan di atas, di dalam hukum adat terdapat unsur-unsur yang dapat menimbulkan adanya kewajiban hukum (opinion necessitas) bagi anggota masyarakat adat diantaranya: Unsur Psikologos, bahwa terdapat adanya keyakinan pada rakyat atau anggota masyarakat adat, bahwa adat memiliki kekuatan hukum dan Unsur kenyataan, bahwa adat dalam keadaan yang sama selalu di indahkan oleh rakyat atau anggota masyarakat adat.', '2022-11-17'),
(4, 'Mirza Abdillah Fakih', 'newspaper', 'https://thumb.ac-illust.com/d3/d35b255df17a5722b72737c1ef9c66e3_w.jpeg', 'https://i.pinimg.com/originals/81/5e/fd/815efd2d09c659c43fd4b05d0b560bf8.jpg', 'Raden Ajeng Kartini', 'https://www.amnesty.id/referensi-ham/amnestypedia/hak-perempuan-dan-kesetaraan-gender/03/2021/', 'Sebagai seorang pemuda, kita semestinya sadar bahwa kita memiliki kekuatan dan pengaruh untuk membentuk pandangan dan sikap terhadap isu-isu sosial seperti ketidakadilan gender. Saya percaya bahwa pendidikan dan pemahaman yang baik adalah kunci untuk membimbing kita menjadi pemuda yang menghormati dan memperjuangkan hak-hak perempuan. Pertama-tama, penting bagi kita untuk mendapatkan pemahaman yang kuat tentang pentingnya kesetaraan gender. Saya sering memperhatikan bahwa ada stereotipe dan ekspektasi yang diberikan kepada laki-laki dan perempuan dalam masyarakat. Namun, sebagai pemuda, saya sadar bahwa setiap individu memiliki potensi yang sama untuk mencapai impian mereka, terlepas dari jenis kelamin mereka. Saya menolak pandangan yang mengatakan bahwa laki-laki lebih superior atau perempuan lebih lemah. Saya percaya bahwa setiap individu harus memiliki kesempatan yang sama untuk berkembang dan mencapai kesuksesan. Selanjutnya, sebagai pemuda, saya berkomitmen untuk membantu membangun lingkungan yang aman dan inklusif bagi semua orang. Saya menyadari bahwa kekerasan terhadap perempuan adalah masalah yang sangat serius, dan saya bertekad untuk menentang segala bentuk kekerasan dan pelecehan seksual. Saya siap untuk berdiri sebagai pendukung perempuan yang berjuang melawan ketidakadilan dan mendukung mereka dalam menuntut keadilan. Selain itu, saya menyadari bahwa penting untuk memperkuat keterwakilan perempuan dalam berbagai bidang, termasuk politik, bisnis, dan pendidikan. Saya percaya bahwa perempuan memiliki pemikiran dan ide yang berharga yang dapat membantu memecahkan masalah kompleks dalam masyarakat. Oleh karena itu, saya siap untuk mendukung perempuan dalam meraih posisi kepemimpinan dan mengambil peran aktif dalam pengambilan keputusan yang berdampak pada kita semua. Sebagai seorang pemuda, saya juga berkomitmen untuk membantu memerangi stereotipe gender yang masih menghambat kemajuan menuju kesetaraan. Saya akan melibatkan diri dalam diskusi, kampanye, dan kegiatan yang bertujuan untuk mengubah persepsi dan norma yang merugikan perempuan. Saya akan terus belajar dan mengedukasi diri sendiri tentang isu-isu gender, sehingga saya dapat berperan sebagai sumber inspirasi dan penggerak perubahan bagi orang-orang di sekitarku. Selain kesadaran dan komitmen, ada berbagai upaya yang dapat kita lakukan khususnya para pemuda yang cenderung memiliki pikiran terbuka diantaranya dengan mengajarkan kesetaraan gender dan mempromosikan hak-hak perempuan. Pertama-tama, penting bagi kita untuk terlibat dalam pendidikan dan penyebaran informasi. Kita dapat mengorganisir diskusi dan seminar tentang isu-isu gender, mengundang ahli dan pembicara yang berpengalaman untuk berbagi pengetahuan mereka. Melalui penyebaran informasi yang sayarat dan pemahaman yang lebih baik, kita dapat membantu memerangi stereotipe dan prasangka yang masih ada di masyarakat. Selanjutnya, penting bagi kita untuk menjadi contoh yang baik dalam tindakan sehari-hari. Kita dapat mempraktikkan kesetaraan gender dalam hubungan personal kita, baik di lingkungan keluarga, teman-teman, maupun di tempat kerja. Memperlsayakan perempuan dengan rasa hormat, mendengarkan dan menghargai pendapat mereka, serta memberikan kesempatan yang sama untuk berpartisipasi dan berkembang, adalah tindakan konkret yang dapat kita lsayakan untuk mempromosikan kesetaraan.', 'Selain itu, kita dapat ikut serta dalam gerakan dan kampanye yang berfokus pada hak-hak perempuan. Menjadi aktivis atau relawan dalam organisasi yang bekerja untuk advokasi kesetaraan gender dapat memberikan pengaruh yang signifikan. Kita dapat mengampanyekan perlindungan terhadap kekerasan dan pelecehan seksual, memperjuangkan akses yang setara terhadap pendidikan dan kesempatan kerja, serta mendukung perempuan dalam mengejar impian dan ambisi mereka. Selain itu, kita juga dapat menggunakan media sosial sebagai alat untuk menyebarkan pesan kesetaraan gender. Dengan memanfaatkan platform online, kita dapat berbagi artikel, informasi, dan cerita inspiratif yang mendukung hak-hak perempuan. Kita dapat memanfaatkan kekuatan media sosial untuk menggalang dukungan, mengajak orang lain untuk terlibat, dan menciptakan kesadaran yang lebih luas tentang pentingnya kesetaraan gender. Terakhir, kita tidak boleh melupakan pentingnya pendidikan di lingkungan keluarga. Sebagai pemuda, kita dapat memulai dari rumah dengan membantu mendorong kesetaraan gender dalam keluarga kita sendiri. Dengan memberikan contoh yang baik, berbicara terbuka tentang isu-isu gender, dan membangun pemahaman yang sehat, kita dapat membantu membentuk pikiran dan sikap yang menghormati hak-hak perempuan pada generasi mendatang. Dalam mengajarkan kesetaraan dari generasi ke generasi, penting bagi kita untuk memiliki tekad yang kuat, ketekunan, dan kesabaran. Perubahan sosial tidak terjadi dalam semalam, tetapi setiap langkah yang kita ambil memiliki dampak yang berarti. Sebagai pemuda, kita memiliki peran penting dalam membangun dunia yang lebih adil dan setara. Bersama-sama, kita dapat membawa perubahan yang positif dan mewujudkan visi kesetaraan gender yang kita impikan.', '2023-09-17'),
(5, 'Mirza Abdillah Fakih', 'article', 'https://i.pinimg.com/originals/13/3d/8f/133d8f7941118dbfd3fa96468c6e0350.jpg', 'https://wallpapercave.com/wp/wp5694599.jpg', 'Hukum Agraria Di Indonesia', 'Land Law and Custom in the Colonies oleh Peter Fitzpatrick (Oxford University Press, 2017)', 'Hukum agraria adalah salah satu cabang hukum yang paling penting dan memengaruhi banyak aspek kehidupan manusia. Hal ini mengatur hak-hak dan kewajiban terkait tanah dan sumber daya alam lainnya, yang merupakan aset yang sangat berharga. Dalam konteks global, hukum agraria mencakup pemilikan tanah, hak guna tanah, penggunaan tanah, serta berbagai aspek yang terkait dengan tanah. Dalam artikel ini, kami akan memberikan gambaran umum yang padat tentang hukum agraria, dengan fokus pada konteks Indonesia dan sebagian besar dunia.  Sejarah hukum agraria sangat panjang dan memiliki akar dalam peradaban manusia yang beragam. Di masa lalu, berbagai peradaban seperti Mesir Kuno, Romawi, dan Tiongkok memiliki sistem hukum agraria mereka sendiri yang mengatur pemilikan dan penggunaan tanah. Di Indonesia, hukum agraria memiliki dasar dalam tradisi adat yang beragam dan pengaruh kolonialisme Belanda. Di Indonesia sendiri memiliki berbagai peraturan hukum agraria, dengan yang terpenting adalah Undang-Undang Pokok Agraria (UUPA) tahun 1960. UUPA mengatur hak atas tanah, seperti hak milik, hak guna usaha, dan hak pakai. Ini adalah landasan hukum yang penting yang mengatur hubungan antara individu, masyarakat, dan tanah. Indonesia telah meluncurkan program-program reformasi agraria untuk mengatasi masalah ketidaksetaraan kepemilikan tanah. Program ini mencakup redistribusi tanah kepada petani kecil untuk meningkatkan kesejahteraan mereka dan memastikan akses yang lebih adil ke tanah.  Tantangan global dalam hukum agraria mencakup konflik tanah, akses tanah bagi masyarakat adat, dan dampak perubahan iklim pada pertanian. Di berbagai negara, reforma agraria dan perlindungan hak asasi manusia menjadi perhatian utama dalam menjaga keseimbangan antara hak individu dan kepentingan umum. Pemerintah memainkan peran kunci dalam mengelola hukum agraria. Di Indonesia, Badan Pertanahan Nasional (BPN) bertanggung jawab atas penerapan dan pengawasan hukum agraria. Program-program seperti redistribusi tanah dilakukan oleh pemerintah untuk mencapai tujuan reformasi agraria.', 'Hubungan antara hukum agraria dan hak asasi manusia sangat erat. Hak atas tanah adalah hak asasi manusia yang mendasar, dan melindungi hak ini adalah prioritas utama dalam konteks hukum agraria. Hak masyarakat adat juga menjadi fokus dalam upaya menjaga keseimbangan antara hak-hak individu dan kolektif. Berbagai negara memiliki kasus-kasus penting terkait hukum agraria. Contohnya termasuk reforma agraria di Amerika Latin yang bertujuan untuk mengurangi ketidaksetaraan kepemilikan tanah dan pengelolaan sumber daya alam. Di Indonesia, terdapat sejumlah konflik tanah yang memunculkan perdebatan tentang hak atas tanah. Di masa depan, hukum agraria dihadapkan pada sejumlah tantangan. Urbanisasi yang terus berlanjut, perubahan iklim, dan pertumbuhan populasi adalah faktor yang akan memengaruhi bagaimana tanah digunakan dan diatur di seluruh dunia. Penyeimbangan antara hak individu dan kepentingan kolektif akan tetap menjadi tantangan yang signifikan.  Hukum agraria adalah bidang hukum yang luas dan penting yang mengatur pemilikan, penggunaan, dan penguasaan tanah serta sumber daya alam terkait. Sejarahnya yang kaya dan rumit melibatkan berbagai peradaban di seluruh dunia, dan Indonesia tidak terkecuali. Landasan hukum utama di Indonesia adalah Undang-Undang Pokok Agraria (UUPA) tahun 1960 yang mengatur hak atas tanah dengan rinci. Dengan tantangan global seperti konflik tanah dan perubahan iklim yang semakin mendesak, pemahaman yang mendalam tentang hukum agraria sangat penting. Ini adalah bidang hukum yang terus berkembang, dan peran pemerintah, hak asasi manusia, dan kesejahteraan masyarakat menjadi faktor penting dalam perumusannya. Hukum agraria bukan hanya masalah hukum, tetapi juga isu sosial, ekonomi, dan lingkungan yang harus diperhatikan dengan cermat demi keadilan dan keberlanjutan.', '2023-09-20'),
(44, 'Mirza Abdillah Fakih', 'article', 'https://img.freepik.com/premium-vector/arab-man-his-teens-taking-math-test_1238364-92438.jpg', 'https://thumbs.dreamstime.com/b/beautiful-anime-manga-girl-dubai-arabic-dressed-illustration-generative-ai-beautiful-anime-manga-girl-dubai-arabic-dressed-272771401.jpg', 'Deklarasi Kairo', 'https://eprints.umm.ac.id/36299/1/M Syaprin Zahidi, Cairo Declaration Legal Form Rational Choice Soft Law.pdf', 'Deklarasi Kairo (Hak Asasi Manusia dalam Islam) adalah deklarasi yang diadakan di Kairo, pada tahun 1990 oleh Organisasi Konferensi Islam (OKI). Deklarasi ini merumuskan poin-poin hak asasi manusia dalam perspektif nilai-nilai ajaran Islam. Dalam deklarasi ini, terdapat sekitar 25 pasal yang sebagian besar mengutip dari Al-Qur’an, sebagai dasar acuan dan sumber ajaran nilai-nilai Islam. OKI sebagai organisasi Negara Islam dan Negara yang memiliki mayoritas penduduk Muslim menggagas Cairo Declaration on Human Rights in Islam untuk merumuskan jaminan negara atas perlindungan hak asasi bagi rakyatnya. Selain itu, dengan dimaklumkan Deklarasi tentang Hak Asasi Manusia dalam Islam ini, dapat dilihat bahwa sejatinya Islam sangat menghargai gagasan hak asasi manusia.', 'Secara umum jika merujuk pada Deklarasi Kairo, ada empat belas macam kesepakatan yang menjadi komitmen dari negara-negara anggota OKI terhadap penegakan Hak Asasi Manusia diantaranya adalah: Hak untuk hidup; Hak untuk berkeluarga dan melanjutkan keturunan; Hak atas kekayaan intelektual; Hak kebebasan berpendapat dan memperoleh informasi; Hak memperoleh keadilan; Hak kebebasan beragama; Hak atas kemerdekaan diri; Hak kebebasan berdomisili dan memperoleh suaka negara lain; Hak atas rasa aman, Hak atas kesejahteraan; Hak kepemilikan; Hak turut serta dalam pemerintahan; Hak perempuan; serta hak anak.', '2023-03-27'),
(45, 'Mirza Abdillah Fakih', 'article', 'https://i.pinimg.com/originals/51/01/43/51014358768388f7cc5855e70fa43d74.jpg', 'https://i.pinimg.com/originals/ec/97/30/ec97304c6020b87028faa5d882e80883.jpg', 'Hukum Pidana Menurut Hak Asasi Manusia', 'Criminal Law and Human Rights: Understanding the Intersection oleh Grażyna Baranowska', 'Hukum pidana dan hak asasi manusia adalah dua pilar utama yang membentuk landasan keadilan dalam masyarakat. Pemahaman yang mendalam tentang bagaimana keduanya saling terkait sangat penting untuk menjaga keseimbangan antara penegakan hukum yang efektif dan perlindungan hak-hak individu. Pertama-tama, mari pahami konsep hukum pidana. Hukum pidana adalah seperangkat peraturan yang menentukan tindak pidana dan hukuman yang dapat diberikan kepada pelaku kejahatan. Ini adalah cara negara mengatasi perilaku kriminal dalam masyarakat. Namun, dalam prosesnya, hukum pidana memiliki potensi untuk menghakimi dan membatasi hak-hak individu. Inilah tempat di mana hak asasi manusia masuk. Hak asasi manusia adalah hak-hak dasar yang diberikan kepada setiap individu tanpa diskriminasi. Ini termasuk hak atas kehidupan, kebebasan dari penyiksaan, privasi, dan banyak lagi. Konflik muncul ketika penegakan hukum yang agresif melanggar hak-hak ini, seperti penangkapan tanpa alasan yang jelas atau penggunaan kekerasan yang berlebihan oleh aparat penegak hukum. Bagaimana kita menyelesaikan konflik antara hukum pidana dan hak asasi manusia? Salah satu kuncinya adalah memastikan bahwa proses hukum pidana berjalan dengan adil. Setiap individu yang dituduh melakukan kejahatan memiliki hak untuk pengadilan yang adil, pengacara, dan hak untuk tidak bersalah sampai terbukti bersalah. Selain itu, undang-undang pidana harus selaras dengan prinsip-prinsip hak asasi manusia. Ini berarti bahwa hukuman yang diberikan harus sebanding dengan kejahatan yang dilakukan dan tidak boleh melanggar prinsip-prinsip dasar seperti larangan penyiksaan atau perlakuan yang tidak manusiawi.', 'Di sisi lain, prinsip-prinsip hak asasi manusia juga membentuk hukum pidana. Mereka mengingatkan kepada pengadilan dan legislator bahwa setiap individu, bahkan pelaku kejahatan, memiliki hak-hak yang harus dihormati. Ini mencegah penegakan hukum yang sewenang-wenang dan mendorong upaya rehabilitasi narapidana. Dalam dunia yang kompleks dan berubah dengan cepat, pemahaman tentang hubungan antara hukum pidana dan hak asasi manusia menjadi semakin penting. Ini adalah kunci untuk menjaga keadilan, melindungi masyarakat dari kejahatan, dan pada saat yang sama, memastikan bahwa hak-hak individu tidak terabaikan atau dilanggar. Dengan keseimbangan yang tepat antara penegakan hukum yang efektif dan perlindungan hak-hak asasi manusia, kita dapat menciptakan masyarakat yang adil dan beradab. Salah satu aspek penting dalam memahami hubungan antara hukum pidana dan hak asasi manusia adalah pendidikan masyarakat. Masyarakat perlu diberdayakan dengan pengetahuan tentang hak-hak asasi manusia mereka dan bagaimana hukum pidana memengaruhi kehidupan mereka. Pendidikan ini dapat membantu masyarakat memahami bagaimana sistem hukum beroperasi, hak-hak mereka, serta tanggung jawab dan kewajiban dalam menjaga keadilan. Pemahaman yang kuat tentang bagaimana hukum pidana dan hak asasi manusia berhubungan satu sama lain adalah kunci untuk menjaga keadilan dalam masyarakat. Ini melibatkan mengakui bahwa kedua aspek ini saling mendukung dan bahwa hak asasi manusia adalah landasan moral yang harus dipegang teguh dalam penegakan hukum.', '2023-09-17'),
(52, 'Mirza Abdillah Fakih', 'article', 'https://hdwallpaperim.com/wp-content/uploads/2017/08/22/103352-original_characters-brunette-green_eyes-anime_girls-gun-weapon.jpg', 'https://i.pinimg.com/originals/6f/1f/77/6f1f77329effb2e27e7b784e8dd81dee.jpg', 'Sistem Hukum Pidana Di Dunia', 'Comparative Criminal Justice Systems: A Topical Approach, ditulis oleh Philip L. Reichel dan diterbitkan oleh Pearson di AS pada tahun 2017', 'Sistem hukum pidana di berbagai negara adalah hasil dari sejarah, budaya, dan nilai-nilai masyarakat yang berbeda. Setiap negara memiliki pendekatan unik dalam merumuskan dan menjalankan hukum pidana sesuai dengan kebutuhan dan nilai-nilai mereka. Di beberapa negara, seperti Amerika Serikat, sistem hukum pidana didasarkan pada hukum umum atau \"common law.\" Hal ini berarti bahwa keputusan pengadilan sebelumnya, atau \"preceden,\" memiliki peran penting dalam membentuk hukum. Pengadilan biasanya mengacu pada kasus-kasus sebelumnya untuk menentukan hukum yang berlaku dalam kasus yang sedang berlangsung. Selain itu, juri memainkan peran aktif dalam persidangan, dengan mengambil keputusan tentang kesalahan atau kebenaran terdakwa. Di negara-negara hukum kodifikasi, seperti Prancis dan Jerman, hukum pidana tersusun dalam kode tertulis yang rinci. Ini berarti bahwa hukum pidana diatur dalam dokumen tertulis yang mencantumkan berbagai jenis kejahatan dan hukuman yang sesuai. Hakim dalam sistem ini memiliki peran yang lebih terbatas dalam menginterpretasikan hukum, karena hukum pidana sudah diuraikan secara rinci dalam kode tersebut. Selain itu, terdapat perbedaan dalam pendekatan rehabilitasi versus hukuman berat dalam penegakan hukum pidana. Beberapa negara, seperti Jepang dan Norwegia, menekankan rehabilitasi narapidana. Mereka berusaha untuk memperbaiki perilaku narapidana melalui pendidikan, pelatihan, dan dukungan psikologis. Di sisi lain, negara-negara seperti Arab Saudi menerapkan hukuman berat, termasuk hukuman mati, sebagai bentuk pemulihan ketertiban sosial. Namun, meskipun perbedaan-perbedaan ini, tujuan akhir dari sistem hukum pidana di seluruh dunia adalah menjaga ketertiban sosial, melindungi hak dan keamanan warga, serta memberikan keadilan kepada semua individu yang terlibat dalam proses hukum. Walaupun sistemnya berbeda, prinsip-prinsip mendasar ini tetap menjadi landasan dalam setiap sistem hukum pidana di berbagai negara.', 'Penting untuk diingat bahwa, di luar perbedaan dalam sistem hukum pidana, ada upaya internasional untuk mencapai kesepakatan tentang prinsip-prinsip dasar hak asasi manusia dalam konteks hukum pidana. Prinsip-prinsip ini, termasuk prinsip ketidakadilan dalam hukuman dan perlindungan terhadap perlakuan yang tidak manusiawi atau merendahkan martabat, telah diakui secara universal melalui berbagai perjanjian internasional seperti Konvensi Hak-Hak Sipil dan Politik PBB. Selain itu, globalisasi dan pertukaran informasi telah memungkinkan negara-negara untuk bekerja sama dalam melawan kejahatan lintas batas seperti terorisme, perdagangan narkoba, dan kejahatan siber. Organisasi internasional seperti Interpol dan Europol memainkan peran penting dalam kerja sama lintas negara untuk menegakkan hukum pidana. Dengan perubahan konstan dalam masyarakat, teknologi, dan dinamika politik, sistem hukum pidana di seluruh dunia juga terus beradaptasi dan berkembang. Reformasi hukum pidana sering kali menjadi tanggung jawab pemerintah untuk memastikan bahwa sistem hukum pidana tetap relevan dan efektif dalam menjawab tantangan masa kini. Dalam konteks global, pertukaran ide dan praktik terbaik dalam penegakan hukum pidana juga menjadi semakin penting untuk mencapai tujuan bersama dalam menjaga keadilan, keamanan, dan perlindungan hak asasi manusia.', '2023-09-17'),
(67, 'Mirza Abdillah Fakih', 'article', 'https://4kwallpapers.com/images/walls/thumbs_3t/14874.jpg', 'https://wallpapercave.com/wp/wp11695996.jpg', 'Legalitas Hukum Penggunaan Musik di TikTok', 'https://ejournal2.undip.ac.id/index.php/ lj/article/view/11111/5579', 'Aplikasi TikTok telah menjadi platform yang sangat populer di seluruh dunia, termasuk di Indonesia. Pengguna TikTok sering kali menggunakan musik dalam video mereka, yang menimbulkan berbagai masalah hukum terkait hak cipta. Hak cipta adalah hak eksklusif yang diberikan kepada pencipta karya untuk menggunakan dan mengizinkan orang lain menggunakan karyanya. Dalam konteks TikTok, penggunaan musik tanpa izin dari pemegang hak cipta dapat dianggap sebagai pelanggaran hak cipta. Perlindungan hukum terhadap hak cipta musik di TikTok diatur oleh Undang-Undang Nomor 28 Tahun 2014 tentang Hak Cipta di Indonesia. Undang-undang ini memberikan perlindungan kepada pencipta lagu dan pemegang hak cipta atas karya mereka. TikTok sebagai platform harus memastikan bahwa konten yang diunggah oleh pengguna tidak melanggar hak cipta sesuai dengan undang-undang ini. Namun, dalam praktiknya, masih banyak konten yang melanggar hak cipta beredar di platform ini. TikTok memiliki mekanisme untuk menangani klaim pelanggaran hak cipta, termasuk penghapusan konten yang melanggar dan pemberian peringatan kepada pengguna. Namun, efektivitas mekanisme ini sering kali dipertanyakan, terutama dalam hal kecepatan dan ketepatan penanganan klaim. Banyak pemegang hak cipta merasa bahwa hak mereka belum sepenuhnya terlindungi dan masih banyak konten yang melanggar hak cipta beredar di platform ini.', 'Selain itu, TikTok juga harus mematuhi berbagai regulasi hukum di berbagai negara tempat platform ini beroperasi. Di Indonesia, misalnya, TikTok harus mematuhi Undang-Undang Nomor 28 Tahun 2014 tentang Hak Cipta. Undang-undang ini mengatur tentang hak dan kewajiban pemegang hak cipta serta sanksi bagi pelanggar hak cipta. TikTok harus memastikan bahwa konten yang diunggah oleh pengguna tidak melanggar hak cipta sesuai dengan undang-undang ini. Pengawasan hukum terhadap TikTok juga melibatkan berbagai lembaga pemerintah. Di Indonesia, Komisi Pengawas Persaingan Usaha (KPPU) memiliki peran penting dalam mengawasi praktik bisnis TikTok, terutama terkait dengan persaingan usaha yang sehat. KPPU bertugas memastikan bahwa TikTok tidak melakukan praktik monopoli atau persaingan usaha yang tidak sehat yang dapat merugikan pelaku usaha lainnya. Penelitian menunjukkan bahwa perlindungan hukum bagi pemegang hak cipta di TikTok masih memerlukan peningkatan. Banyak pemegang hak cipta merasa bahwa hak mereka belum sepenuhnya terlindungi dan masih banyak konten yang melanggar hak cipta beredar di platform ini. Oleh karena itu, diperlukan upaya lebih lanjut dari TikTok dan pihak berwenang untuk meningkatkan perlindungan hak cipta dan memastikan bahwa platform ini mematuhi semua regulasi hukum yang berlaku. Secara keseluruhan, TikTok sebagai platform media sosial harus terus beradaptasi dengan berbagai regulasi hukum yang berlaku di setiap negara tempat mereka beroperasi. Perlindungan hak cipta dan pengawasan hukum yang efektif sangat penting untuk memastikan bahwa TikTok dapat beroperasi dengan baik tanpa melanggar hak-hak pemegang hak cipta dan menjaga persaingan usaha yang sehat.', '2024-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `artikel` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `id_komen` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nama2` varchar(20) DEFAULT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `artikel`, `judul`, `id_komen`, `nama`, `nama2`, `isi`, `tanggal`) VALUES
(129, 4, 'Raden Ajeng Kartini', 0, 'Mirza Abdillah Fakih', '', 'Terima kasih sudah berkunjung ke blog saya, selamat membaca', '2024-07-31'),
(130, 4, 'Raden Ajeng Kartini', 0, 'Nikmatul Nur Aini', '', 'Pembahasan yang sangat menarik', '2024-07-31'),
(131, 4, 'Raden Ajeng Kartini', 129, 'Nikmatul Nur Aini', 'Mirza Abdillah Fakih', 'Sama-sama, dan saya tunggu tulisan selanjutnya', '2024-07-31'),
(132, 4, 'Raden Ajeng Kartini', 130, 'Mirza Abdillah Fakih', 'Nikmatul Nur Aini', 'Terima kasih, salamat membaca', '2024-07-31'),
(133, 52, 'Sistem Hukum Pidana Di Dunia', 0, 'Mirza Abdillah Fakih', '', 'Terima kasih sudah berkunjung ke blog saya, selamat membaca', '2024-07-31'),
(134, 52, 'Sistem Hukum Pidana Di Dunia', 133, 'Nikmatul Nur Aini', 'Mirza Abdillah Fakih', 'Sama-sama, dan saya tunggu tulisan selanjutnya', '2024-07-31'),
(135, 52, 'Sistem Hukum Pidana Di Dunia', 0, 'Nikmatul Nur Aini', '', 'Pembahasan yang sangat menarik', '2024-07-31'),
(205, 52, 'Sistem Hukum Pidana Di Dunia', 135, 'Mirza Abdillah Fakih', 'Nikmatul Nur Aini', 'Terima kasih, selamat membaca', '2024-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio1`
--

CREATE TABLE `portfolio1` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `penulis` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio1`
--

INSERT INTO `portfolio1` (`id`, `username`, `password`, `penulis`, `email`) VALUES
(1, 'mirza', '$2y$10$Slg7knCkTQoN9oWwc/.g5uVSyYULogYGAw8WxPqPQyhtBUEu6CB1W', 'Mirza Abdillah Fakih', 'mirzaabdillahfakih@gmail.com'),
(28, 'aini', '$2y$10$Houxhrubqu56A7LAaSzVXOfkF2xEupocdkFTGq083h/WynYPZ2P1.', 'Nikmatul Nur Aini', 'mabdillahfakih@gmail.com'),
(29, 'sahal', '$2y$10$ldJWgLKE2QYive2Hf//lKOBFq/detWV74DOsb0XLFETc2LIi6pznO', 'Sahal Baedowi', 'f6577676@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio1`
--
ALTER TABLE `portfolio1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT for table `portfolio1`
--
ALTER TABLE `portfolio1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
