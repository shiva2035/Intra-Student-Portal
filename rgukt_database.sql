-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2014 at 03:59 PM
-- Server version: 5.5.12
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rgukt`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `class` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `present` int(11) NOT NULL,
  `absent` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `absent_id` varchar(50) NOT NULL,
  UNIQUE KEY `class` (`class`),
  UNIQUE KEY `class_2` (`class`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`class`, `dept`, `present`, `absent`, `total`, `absent_id`) VALUES
('ABII_002', 'CSE', 12, 15, 70, 'B082035,B081941'),
('ABI_001', 'CSE', 10, 10, 20, 'B082035'),
('ABI_014', 'CSE', 29, 25, 54, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `confess`
--

CREATE TABLE IF NOT EXISTS `confess` (
  `id` varchar(7) NOT NULL,
  `message` varchar(200) NOT NULL,
  `ip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confess`
--

INSERT INTO `confess` (`id`, `message`, `ip`) VALUES
('B082035', 'Happy Diwali to all folks', '127.0.0.1'),
('B082035', 'Best Wishes on Ugadi', '127.0.0.1'),
('admin', 'Hello Friends Good Evening', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `uname` varchar(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `from` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`uname`, `subject`, `message`, `from`, `time`) VALUES
('', '', 'http://localhost/shiva/intramail/logo2.png\r\n', 'B082035', '19:33:50'),
('B081167', 'Hi', 'how are you good afternoon', 'B082035', '19:31:11'),
('B082035', 'Hi Happy Republic Da', 'Dear Friend!\r\n    Happy Republic Day! Wish you all the best', 'B082035', '07:03:45'),
('fac_01', 'Reason/Explanation f', 'Suffering from fever', 'SEA01', '14:56:35'),
('B08XXXX', 'hi shiva', 'good evening', 'B082035', '13:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `cid` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `link` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`cid`, `title`, `message`, `link`, `date`, `time`, `type`) VALUES
('BSR20141300', 'TCS Shortlisted Candidates', '', 'RGUKT_BASAR_TCS_SELECTS.html', '2014-01-30', '03:21 PM', 'Examination'),
('BSR20141301', 'Infosys Shortlisted Candidates', 'List of Students Shortlisted for Infosys', 'index.html', '2014-01-30', '03:35 PM', 'Examination');

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE IF NOT EXISTS `outbox` (
  `uname` varchar(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `to` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outbox`
--

INSERT INTO `outbox` (`uname`, `subject`, `message`, `to`, `time`) VALUES
('B082035', 'Hi', 'how are you good afternoon', 'B081167', '19:31:11'),
('SEA01', 'Reason/Explanation f', 'Suffering from fever', 'fac_01', '14:56:35'),
('B082035', 'hi shiva', 'good evening', 'B08XXXX', '13:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` varchar(7) NOT NULL DEFAULT '',
  `name` varchar(34) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`) VALUES
('B081003', 'POGAKULA NARESH GOUD'),
('B081005', 'KANNAREDDY BHARATH REDDY'),
('B081013', 'LINGAMPET MALLA CHARY'),
('B081014', 'MADARI JOSHWA'),
('B081017', 'KOYYADA RASHMI MAYUR'),
('B081018', 'NARAGONI SAI KUMAR'),
('B081035', 'NARUMALLA PAVAN KUMAR'),
('B081036', 'GAJARLA SATHISH'),
('B081041', 'DUDIKATLA VINAY KUMAR'),
('B081046', 'AKKINAPALLY VENU GOPAL'),
('B081047', 'MOTKAR NARESH'),
('B081059', 'MADARABOINA ABHILASH'),
('B081076', 'DONTHAGANI VEERAIAH'),
('B081080', 'JATOTHU NARSHIMA'),
('B081086', 'SEELAM PREETHAM KUMAR'),
('B081088', 'REDDIMALLA SURESH'),
('B081090', 'KONDA SUNIL'),
('B081093', 'BORA  RAMU'),
('B081102', 'NANDA SURESH'),
('B081115', 'NAGAVELLI SANTHOSH KUMAR'),
('B081124', 'DANDEMPALLI SANDEEP'),
('B081131', 'SUNKARI PREM KUMAR'),
('B081143', 'JOSHI NAGARJUN'),
('B081158', 'MASEEDU HAREESH'),
('B081167', 'MEKALA SATISH KUMAR'),
('B081185', 'GADDELA PARAMESHWAR'),
('B081189', 'KANUKUTLA ARUN'),
('B081197', 'DANDE REKHA'),
('B081207', 'ORSU RAM BABU'),
('B081220', 'NANGIREDDY SIVAJI GANESH'),
('B081226', 'PURAM VENU GOPAL'),
('B081230', 'VULLAMGALLU SHIVUDU'),
('B081231', 'POGIRI VENKATESH'),
('B081232', 'MOOD BHIMSINGH'),
('B081238', 'MANDAPALLI SANDHYA'),
('B081261', 'MOTIKE PARASHURAMULU'),
('B081278', 'VOOKE SOUJANYA'),
('B081281', 'VULLUKOLLU SHOBHA RANI'),
('B081285', 'BALAGONI VENKATARAMANA'),
('B081312', 'NALLABOLU SHIRISHA'),
('B081313', 'CHITTARI VISHNU'),
('B081322', 'KARNE KRISHNAVENI'),
('B081325', 'PUTTAKOKKULA KUMAR'),
('B081330', 'DUSSA POOJA'),
('B081336', 'AFSHA BEGUM'),
('B081345', 'GOLLA MAMATHA'),
('B081349', 'CHINTHOJU JYOTHSNA'),
('B081364', 'MACHA SWATHI'),
('B081368', 'BHOOKYA SHRAVANI'),
('B081371', 'GUJJU ASHOK KUMAR'),
('B081381', 'GAJARLA SRIRANJAN'),
('B081409', 'VADLA ANIL KUMAR'),
('B081411', 'CHUNCHU KAVITHA'),
('B081415', 'KATAM HARI PRASAD'),
('B081422', 'LAVAKUSH'),
('B081425', 'MOHAMMAD NASIRUDDIN'),
('B081426', 'MASAMPALLY VINAY KUMAR'),
('B081445', 'MALLELA SAMMAIAH'),
('B081449', 'DODLA MAMATHA'),
('B081450', 'KORE VIKRAM'),
('B081465', 'MARIKANTI CHANDANA'),
('B081467', 'VOONA SNEHALATHA'),
('B081470', 'BEJUGAM SRAVANI'),
('B081486', 'BODIGE MALATHI'),
('B081494', 'MEDICHELMI SHIREESHA'),
('B081499', 'PINISHETTY NAGALAXMI'),
('B081500', 'SIRIKONDA MADHAVI'),
('B081516', 'PAPISHETTY SHARANYA'),
('B081519', 'MATAM NANDINI'),
('B081520', 'KONTHAM VARALAXMI'),
('B081522', 'BALUSANI MOUNIKA'),
('B081524', 'MOHAMMED AZHAR ALI'),
('B081529', 'MAGGIDI HARINI'),
('B081532', 'GIRIGALLA RADHIKA'),
('B081536', 'PABBATHI ARAVIND'),
('B081540', 'GURUDU SRINIVAS'),
('B081543', 'KOMUROJU RADHIKA'),
('B081544', 'SINGAPURAPU BHAVANI'),
('B081545', 'LYAGALA RAJITHA'),
('B081551', 'GHANAPURAM RENUKA'),
('B081555', 'KANDHIKATLA SRIMUKHI'),
('B081563', 'MATKAM GANESH'),
('B081571', 'KOVA PRASHANTH'),
('B081578', 'KANCHARLA MOUNIKA'),
('B081584', 'VENGALA SAGAR'),
('B081594', 'SIRIMULLA VENKATESH'),
('B081595', 'NALAMASA SHOBHAN BABU'),
('B081600', 'CHOODA KOUMUDI'),
('B081602', 'CHAKRALA SRILATHA'),
('B081604', 'BOLLARAM SUDHA RANI'),
('B081609', 'GAINI NAVEEN'),
('B081613', 'NADIMALLA ARCHANA'),
('B081616', 'FIRDOSE'),
('B081620', 'BOMMIDI SWAPNA'),
('B081625', 'DHARAVATH RADHA'),
('B081631', 'SIRIKONDA KRANTHI KUMAR'),
('B081632', 'KAMMALA MAMATHA'),
('B081638', 'DARSHAN SONI'),
('B081643', 'ALA PRAVEEN KUMAR'),
('B081646', 'OLAPU SWATHI'),
('B081652', 'ANDE NAVANEETHA'),
('B081660', 'BONTULA BABITA VENKATA NAGALAKSHMI'),
('B081686', 'SHAMSHAD BEGUM'),
('B081687', 'BOINPALLY SWETHA'),
('B081689', 'MALAVATH GEETHA'),
('B081690', 'SHAIK SALMA SULTHANA'),
('B081692', 'GUMMAKONDA VIJENDER REDDY'),
('B081697', 'AELAKURTHI MAHESH'),
('B081700', 'PATHALA LAKSHMI DURGA'),
('B081713', 'BYAGARI SOUNDARYA'),
('B081721', 'JUPALLY MANASA'),
('B081723', 'NELLUTLA MAHESHWARI'),
('B081731', 'N SONY'),
('B081742', 'B.Rani'),
('B081743', 'ENGLE KALPANA'),
('B081744', 'MD SADAK'),
('B081766', 'PULI GOPI KRISHNA'),
('B081778', 'KUMRA SRINIVAS'),
('B081789', 'E.ANUSHA'),
('B081791', 'Valuri Vineela'),
('B081798', 'CD.SWATHI'),
('B081802', 'GUTTULA  HYMA SIRISHA'),
('B081815', 'CHAPPA UMA MAHESHWARA RAO'),
('B081819', 'THOTA NAGA VENU'),
('B081827', 'DUDEKULA BANDHELI SAB'),
('B081831', 'DHANDA GIRI'),
('B081832', 'KAMISHETTY MAHESH'),
('B081840', 'KHETHAVATH DURYODHAN'),
('B081842', 'RONGALI JAGADEESH'),
('B081853', 'B.SHAILAJA'),
('B081856', 'SABBITHI INDRAJA'),
('B081863', 'KANCHI SANDHYA'),
('B081871', 'B.SHRAVANI'),
('B081872', 'U.UMA'),
('B081879', 'VADLA BASWARAJ'),
('B081889', 'MANCHALA NARESH BABU'),
('B081891', 'BHUKYA RAMESH'),
('B081893', 'BADAVATH NITTU'),
('B081904', 'SK.FAREEDA BHANU'),
('B081906', 'K.SRAVANI'),
('B081910', 'B.MADHAVI'),
('B081911', 'SHAIK SHAMSHAD'),
('B081914', 'G.Sowmya'),
('B081915', 'M.Mounika'),
('B081921', 'Burra Srisoudha'),
('B081926', 'AUSLI SAROJINI'),
('B081932', 'MEDA RAVI'),
('B081936', 'NAKIREKANTI SAI KUMAR'),
('B081939', 'SANGI NAGA RAJU'),
('B081941', 'CHITTIPOLU NAVEEN KUMAR'),
('B081953', 'PABBU SUNITHA'),
('B081954', 'ENJAMOORI BALAMANI'),
('B081955', 'YELAGAM DIVYA'),
('B081956', 'GANDE SOWMYA'),
('B081958', 'AVULA YAMINI'),
('B081963', 'UPPOJU BHARGAVI'),
('B081964', 'PYATA PRAMEELA'),
('B081965', 'PODAPATI PRAGATHI'),
('B081970', 'BORROLLA SOUJANYA'),
('B081974', 'RAZIYA BEGUM'),
('B081977', 'YENALA HARISH'),
('B081983', 'GUJJU UDAY KUMAR'),
('B081986', 'KAVALI RAMULU'),
('B081990', 'KONDABATHIINI RANJITH KUMAR'),
('B081996', 'PEDDABOINA ARUN KUMAR'),
('B082000', 'PICHAKUNTLA KRISHNA'),
('B082002', 'ANCHOORI SHOBHANA'),
('B082005', 'NALLAMANTI NOOKARATHNAM'),
('B082006', 'ERITAM SOUNDARYA'),
('B082007', 'DASIREDDY DIVYA'),
('B082013', 'PUPPALA JHANSI'),
('B082014', 'BUSHIPAKA SABITHA'),
('B082017', 'PURUSHOTHAM DIVYA'),
('B082019', 'AASARI VANITHA'),
('B082021', 'BANDARI MOUNIKA'),
('B082035', 'KANNEBOINA SHIVA KUMAR'),
('B082054', 'VASPARI GEETHA'),
('B082062', 'MOLLA MEHERAJ BEGUM'),
('B082065', 'ANKARAPU KALPANA'),
('B082066', 'GUGULOTH SRILAXMI'),
('B082067', 'MANCHUVARI KALYANI'),
('B082073', 'BALLA RADHIKA'),
('B082077', 'BOMMERLA VARA PRASAD'),
('B082105', 'KANAPARTHY SAMYUKTHA'),
('B082115', 'MOTURI LAVANYA'),
('B082116', 'YELLA SABITHA'),
('B082119', 'AGYARAPU RANI'),
('B082120', 'KARAM BHARGAVI'),
('B082131', 'MUDAVATH RAMU'),
('B082134', 'SUNKARI KUMARA SWAMY'),
('B082152', 'MALAKAM BHARATHI'),
('B082155', 'MADDELA PRIYANKA'),
('B082156', 'DHUTHRAJ PRATHIMA'),
('B082163', 'S Mounika'),
('B082165', 'Sunke Bhagyamma'),
('B082167', 'MARU RAJITHA'),
('B082174', 'Kavati Apoorva'),
('B082175', 'Pottolla Ashwini'),
('B082176', 'BODDU KRISHNA KUMARI'),
('B082182', 'KOVA SHYAMSUNDAR'),
('B082187', 'PALEPALLY PARVEEN KUMAR'),
('B082198', 'DODLE ROHITH'),
('B082202', 'KARROLLA SWATHI'),
('B082203', 'MEKALA SWAPNA'),
('B082210', 'KOPPULA CHAITHANYA'),
('B082217', 'AGGU DIVYA'),
('B082220', 'ALLA SWARNALATHA'),
('B082221', 'CHINTHALA MAMATHA'),
('B082239', 'SULTHANPURAM HANMANTHU'),
('B082246', 'CHINTHALA SHASHIKANTH'),
('B082251', 'PONUGOTI SIVA PRASAD'),
('B082256', 'SYEDA ANAMUZOHRA'),
('B082257', 'SAMA SOUMYA'),
('B082258', 'NIMMALA ROJA'),
('B082260', 'PUDARI BHAGYALAXMI'),
('B082262', 'LINGAMPALLY MAHESHWARI'),
('B082265', 'BANOTH ANITHA'),
('B082269', 'BITLA LAVANYA'),
('B082287', 'BILLAKOORI ASHOK'),
('B082292', 'BANOVATH PANDARI'),
('B082304', 'Jugge Pranitha'),
('B082305', 'Jakkula Sravani'),
('B082307', 'U.N.VENKATA RAMA VARA PUSHPA'),
('B082310', 'JAKKANI ANITHA'),
('B082311', 'CHINTHAKINDI SHIRISHA'),
('B082314', 'T.CHAITANYA VEERA NAGAMANI'),
('B082315', 'RAMA PRIYANKA'),
('B082317', 'CH.LAVANYA'),
('B082318', 'THAKUR MADHAVI'),
('B082320', 'K.PRANAVI'),
('B082321', 'ALLENDULA SWATHI'),
('B082326', 'CHUNARKER NIROSHA'),
('B082327', 'POLIPELLY HAREESH'),
('B082329', 'JANGULWAR PANDARI'),
('B082332', 'KADAM SANDEEP'),
('B082338', 'KOTHAGADI SRIPADACHARi'),
('B082339', 'KOLA THIRUPATHI'),
('B082345', 'AGGULA CHANDRA KANTH'),
('B082347', 'EPPA NARESH'),
('B082350', 'SHETKAR PRASHANTH'),
('B082352', 'SYEDA ASFIA BEGUM'),
('B082353', 'K.MOUNIKA'),
('B082359', 'MD.ZAHEDA PARVEEN'),
('B082361', 'K.AVANIJA'),
('B082364', 'SK.SABIHA'),
('B082365', 'A.SRAVANTHI'),
('B082369', 'P. HARI CHANDANA'),
('B082374', 'VINUKONDA UMA'),
('B082376', 'J.SHAILAJA'),
('B082390', 'SAIDUGARI UDAY KIRAN GOUD'),
('B082414', 'SANJEEDA MASROOR'),
('B082415', 'PURELLA VIMALA'),
('B082417', 'KONDAYYAGARI MEENA'),
('B082419', 'N MOUNIKA'),
('B082422', 'EPPA MOUNIKA'),
('B082425', 'CH SUPRIYA'),
('B082428', 'KOMMULA MADHU'),
('B082429', 'KOTTALANKA NAGARJUNA'),
('B082431', 'GUNTUKULA HARISH'),
('B082436', 'KASTIPURAM RAJESH'),
('B082441', 'GANDRAKOTI ANIL KUMAR'),
('B082442', 'GALI SWAMY'),
('B082453', 'K.ANUSHA'),
('B082455', 'I.ANUSHA'),
('B082460', 'PADALA SOUMYA'),
('B082461', 'J.SHAILAJA'),
('B082470', 'B.SANJANA'),
('B082477', 'LAKAVATH RAJU'),
('B082478', 'LINGALA MAHESH'),
('B082479', 'KUMBUM NAGARAJU'),
('B082480', 'KALLETI SRINIVAS'),
('B082485', 'NUNAVATH SAMMAIAH'),
('B082486', 'MOHAMMAD IRFAN'),
('B082487', 'MALLOJU KONDALA CHARY'),
('B082488', 'MD SIKANDAR'),
('B082511', 'M.SOUJANYA'),
('B082513', 'CH.ANUSHA'),
('B082519', 'K.PRIYANKA'),
('B082521', 'P.LAVANYA'),
('B082532', 'BABRE GANESH'),
('B082533', 'DAMERLA SHIVA'),
('B082536', 'MOHAMMAD WAZEED'),
('B082537', 'BILLA VENKATESH'),
('B082538', 'KALYANKAR VIJENDER'),
('B082539', 'MADARABOINA LINGA MURTHY'),
('B082548', 'KAGU SHIVA KUMAR'),
('B082551', 'CHITYALA BHARGAV DATH'),
('B082579', 'THUPPARI VIKRAM'),
('B082583', 'PULIPATI PARAM KUSHAM'),
('B082584', 'LADDAF SAMAD'),
('B082586', 'MALOTH ESHWAR'),
('B082590', 'EJJAGIRI ANIL KUMAR'),
('B082597', 'KAMMARI ANIL KUMAR'),
('B082611', 'SHERLA SHIRISHA'),
('B082622', 'BODDUPALLY VENKATAMMA'),
('B082626', 'KONDA GOUSIA BEGUM'),
('B082628', 'KANNAPURAM RAGHUPATHI'),
('B082634', 'MANIKALA GOPALA KRISHNA'),
('B082645', 'RAJAMANDRI SANKARA RAO'),
('B082648', 'BONASI BALAKRISHNA'),
('B082650', 'SHAIK RAZAK PASHA'),
('B082653', 'SEEMA PARVEEN'),
('B082656', 'VALGOT SANDHYARANI'),
('B082659', 'VEERAMALLY ABHINAYA'),
('B082663', 'KONDA JYOTHI'),
('B082664', 'PADATHAPURAM HARIPRIYA'),
('B082680', 'BANDELA RAMA SWAMY'),
('B082691', 'DARJI SRIKANTH'),
('B082702', 'MEDE SRILATHA'),
('B082710', 'ANUMULA SWATHI'),
('B082711', 'NEELANOLLA MAHESWARI'),
('B082717', 'SIKILAM KAVITHA'),
('B082720', 'GOURU SHILPA'),
('B082722', 'POLIMERA LAKSHMI'),
('B082723', 'TAMMISHETTI MANJULA'),
('B082725', 'BOOMPAKA SRIVIDYA'),
('B082736', 'DORNALA SRAVAN KUMAR'),
('B082737', 'BOPPENA NAGARAJU'),
('B082748', 'THATI SAI BABA'),
('B082751', 'SOMAVARAPU ARUN'),
('B082763', 'PAMBALA SRUJAN KUMAR'),
('B082773', 'KOTHAPALLY RAJU'),
('B082785', 'GOLLA SRI HARI'),
('B082792', 'HARIJAN RAJU'),
('B082805', 'JOGU KAMALAKAR'),
('B082816', 'AGURU ASHWINIDEVI'),
('B082817', 'CHENNA UMARANI'),
('B082823', 'AUTI RAJASHEKAR'),
('B082839', 'KAMATAM HARSHITH'),
('B082843', 'MYADARI SAI CHANDAN'),
('B082844', 'ATMAKUR PRAVEEN KUMAR'),
('B082847', 'BADIGERU VENKATESH'),
('B082900', 'MANNE SHAILAJA'),
('B082902', 'VENISHETTY DHARANI'),
('B082905', 'BANGARUGANI SHASHIKALA'),
('B082910', 'BARIGALA DEEPTHI'),
('B082913', 'NAMPALLY PINKY'),
('B082916', 'MEESA BHAVANI'),
('B082922', 'GADDAM MOUNIKA'),
('B082926', 'GOLLA PALLY MAMATHA'),
('B082927', 'KOTTURI RENUKA'),
('B082928', 'JANGA SRAVANTHI'),
('B082930', 'BODDU SRILATHA'),
('B082931', 'MOHAMMAD SAZMA'),
('B082934', 'MUTHIKI MOHANA SRAVANI'),
('B082946', 'MUDDARABOINA RUPA'),
('B082948', 'RALLABANDI ANJALI'),
('B082949', 'KANDALAM CHAITANYA BHARATHI'),
('B082951', 'CHENNA SWATHI'),
('B082958', 'JAKKA VENKATA SATYAVATHI'),
('B082965', 'G. NAGASATYA SIREESHA'),
('B082966', 'BASANI MADHAVI'),
('B082969', 'GANGA REDDY SARITHA'),
('B082971', 'THIRAMDAS AKHILA'),
('B082972', 'NASREEN BEGUM'),
('B082973', 'GANJI SIRISHA'),
('B082977', 'BHUKYA KOTESH'),
('B082986', 'MACHERLA YUGENDER'),
('B082999', 'KASHIMALLA NARESH'),
('B083004', 'BONAGANI PRATHIBHA'),
('B083005', 'SINGAMPALLY RAMALAXMI'),
('B083015', 'VADLURI BALAMANI'),
('B083016', 'KOSURI DEVI'),
('B083021', 'JATANGI SWATHI'),
('B083026', 'AMGOTH BALAKISHAN'),
('B083029', 'MOHAMMAD AZAM SHARIF'),
('B083040', 'VANAPATLA DAYAKAR'),
('B083042', 'NAGULA RAJESH'),
('B083052', 'BANDALA SUNITHA'),
('B083056', 'ALETI KALPANA'),
('B083058', 'NEMALIKANTI JAYALAKSHMI'),
('B083059', 'SIRIGINEEDI NAGAJYOTHI'),
('B083062', 'KADUDHULA MOUNIKA'),
('B083063', 'MUTHYALA ASHWINI'),
('B083071', 'PENTOLLA HEMALATHA'),
('B083083', 'MUNGALA RAJESH'),
('B083085', 'UKE KARTHIK'),
('B083095', 'BUDIGAM NAGA RAJU'),
('B083096', 'BELLAMKONDA VENKATESHWARLU'),
('B083097', 'SINGAM SUMAN'),
('B083100', 'ANKARAJU MEGHANA MOUNIKA'),
('B083104', 'PENUMUTSA SAI NAGA DURGA DEVI'),
('B083105', 'GOTTUMUKKALA PADMASRI'),
('B083109', 'ALOORI ANUSHA'),
('B083113', 'ASIA'),
('B083116', 'UPPARI RENUKA'),
('B083125', 'NALAGOPPULAM SURESH'),
('B083130', 'BANDARI HARISH'),
('B083131', 'ANKATHI MAHESH VARMA'),
('B083141', 'RATHALAVATH GANESH'),
('B083143', 'MANGALI ANAND'),
('B083146', 'MALLAM SATISH'),
('B083149', 'KOTA LAXMI PATHI'),
('B083152', 'BOCHKAR MANISHA'),
('B083155', 'GADASU SRILATHA'),
('B083158', 'ALETI RAJAKALA'),
('B083169', 'HANMANTHGARI MEGHANA'),
('B083170', 'MAATOORI RANI'),
('B083171', 'MADIRE ARCHANA'),
('B083177', 'SAMBARU GAGAN KUMAR'),
('B083197', 'SHYAGA NARESH'),
('B083202', 'GATTU SHRUTHI'),
('B083207', 'KASTHURI NACHARAM'),
('B083211', 'VADLA MAHESHWARI'),
('B083215', 'SALVAJI SARITHA'),
('B083216', 'BONAGIRI TEJASHWINI'),
('B083225', 'KEESARI RAMESH'),
('B083231', 'PONNOJI VENU'),
('B083232', 'MANCHIRYALA NITHISH CHARY'),
('B083245', 'RETTAMELLA SANDEEP'),
('B083258', 'BOLLI SWARUPA'),
('B083264', 'KOKALA SOUJANYA'),
('B083283', 'CHERUKU RAVI PRAKASH'),
('B083296', 'SAYYAD NAYYARODDEEN');

-- --------------------------------------------------------

--
-- Table structure for table `studetails`
--

CREATE TABLE IF NOT EXISTS `studetails` (
  `uname` varchar(10) NOT NULL,
  `pass1` varchar(20) DEFAULT NULL,
  `first` varchar(100) DEFAULT NULL,
  `last` varchar(100) DEFAULT NULL,
  `father` varchar(50) DEFAULT NULL,
  `mother` varchar(50) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sex` varchar(5) DEFAULT NULL,
  `ss` varchar(5) DEFAULT NULL,
  `a1` varchar(50) DEFAULT NULL,
  `a2` varchar(50) DEFAULT NULL,
  `a3` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `hostel` varchar(10) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studetails`
--

INSERT INTO `studetails` (`uname`, `pass1`, `first`, `last`, `father`, `mother`, `position`, `dept`, `dob`, `sex`, `ss`, `a1`, `a2`, `a3`, `email`, `phone`, `class`, `hostel`, `type`) VALUES
('admin', 'admin', 'Shiva Kumar', 'K', 'Krishnaiah', 'Padma', 'Student', 'CSE', '0000-00-00', 'M', 'BC-D', 'Nagaram', 'Jajireddy Gudem', 'Nalgonda', 'B082035@rgukt.in', '9963808956', '312', 'sf12', 'Student'),
('B082035', 'shiva2035', 'Kanneboina', 'Shiva Kumar', 'KRISHNAIAH', 'PADMA', 'Student', 'Computer Science and Engineering(CSE)', '1993-01-29', 'Male', 'BC-D', 'Nagaram', 'Jajireddy Gudem', 'Nalgonda', 'shiva2035.iiit@gmail.com', '9963808956', '312', 'SF-12', 'student'),
('b082182', 'password', 'password', 'Shyam', '', '', 'Student', 'Computer Science(CSE)', '1993-08-10', 'Male', 'BC-B', '', '', '', '', '', '312', '', ''),
('company', 'company', 'Placement', 'Portal', 'rgukt', 'rgukt', 'b.tect', 'CSE', '2013-09-15', 'm', 'gener', 'rgukt basar', 'mudhole', 'adilabad', 'shiva2035.iiit@rgukt.in', '504107', '312-CSE', 'sf-12', 'company');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `id` varchar(10) NOT NULL DEFAULT '',
  `vote` varchar(2) DEFAULT NULL,
  `ip` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `vote`, `ip`) VALUES
('B081232', 'N', '10.9.20.22'),
('B082035', 'y', 'ip'),
('b082182', 'x', 'ip');

-- --------------------------------------------------------

--
-- Table structure for table `sysdet`
--

CREATE TABLE IF NOT EXISTS `sysdet` (
  `id` varchar(50) NOT NULL,
  `name` varchar(7) NOT NULL,
  `applied` char(10) NOT NULL,
  `inst` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `confirmed` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sysdet`
--

INSERT INTO `sysdet` (`id`, `name`, `applied`, `inst`, `city`, `confirmed`) VALUES
('J.V.Satyavathi', 'B082958', 'Y', 'KVK Foundation', 'East Godavari', 'confirmed'),
('G.Vijender Reddy', 'B081692', 'Y', 'STPL', 'HYDERABAD', 'Confirmed'),
('K.Srinivas', 'B082480', 'Y', 'DRDO', 'Hyderabad', 'confirmed'),
('K. Madhu', 'B082428', 'Y', 'TCS', '', 'pending'),
('GOPIKRISHNA PULI', 'B081766', 'N', '-', '-', '-'),
('Naga Raju Budigam', 'B083095', 'Y', 'Hyderabad Central University', 'Hyderabad', 'Confirmed'),
('GOPIKRISHNA PULI', 'B081766', 'N', '-', '-', '-'),
('Kova Shyamsunder', 'B082182', 'N', 'No', '', 'No'),
('Polipelly Hareesh', 'B082327', 'N', 'No', 'No', 'No'),
('Jhansi Puppala', 'B082013', 'Y', 'Deloitte', 'Hyderabad', 'pending'),
('Prameela Pyata', 'B081964', 'Y', 'BHEL', 'Hyderabad', 'pending'),
('Polipelly Hareesh', 'B082327', 'N', 'No', 'No', 'No'),
('Kova Shyamsunder', 'B082182', 'N', 'N', '', 'N'),
('Kova Shyamsunder', 'B082182', 'N', 'N', '', 'N'),
('Enagandula Anusha', 'B081789', 'Y', 'NTPC', 'RAMAGUNDAM', 'CONFIRM'),
('Badigeru Venkatesh', 'B082847', 'N', '', '', ''),
('Enjamoori Balamani', 'B081954', 'Y', 'IDRBT', 'Hyderabad', 'pending'),
('CH.SWATHI', 'B082951', 'N', '', '', ''),
('Enjamoori Balamani', 'B081954', 'Y', 'IDRBT', 'Hyderabad', 'pending'),
('Kova Shyamsunder', 'B082182', 'N', 'N', 'N', 'N'),
('AMGOTH BALAKISHAN', 'B083026', 'N', '', '', ''),
('Bhagya', 'B082260', 'Y', 'KVK Foundation', 'East Godavari', 'confirmed'),
('B.Lavanya', 'B082269', 'Y', 'KVK Foundation', 'East Godavari', 'confirmed'),
('Rajesh Munagalashetti', 'B083083', 'N', '', '', ''),
('AMGOTH BALAKISHAN', 'B083026', 'N', '', '', ''),
('P.Ashwini', 'B082175', 'Y', 'IDRBT', 'Hyderabad', 'pending'),
('Thakur Madhavi', 'B082318', 'Y', 'BSNL', 'Hyderabad', 'pending'),
('Nalamasa Shobhan Babu', 'B081595', 'Y', 'Intelli', 'Hyderabad', 'pending'),
('J.Shailaja', 'B082461', 'Y', 'Envy Infotech Company', 'Hyderabad', 'pending'),
('P.LAVANYA', 'B082521', 'Y', 'ENVY-INFOTECH', 'HYDERABAD', 'pending'),
('YELLA SABITHA', 'B082116', 'Y', 'ENVY Infotech', 'HYDERABAD', 'Pending'),
('Shiva Kumar K', 'B082035', 'N', '-', '-', '-'),
('Ch.Srilatha', 'B081602', '', '', '', ''),
('M.Priyanka', 'B082155', 'Y', 'IDRBT', 'Hyderabad', 'pending'),
('B.Swapna', 'B081620', 'Y', 'Envy Infotech', 'Hyderabad', 'pending'),
('Swamy G', 'B082442', 'Y', 'NGO', 'West Godavari', 'pending'),
('K.Chaithanya', 'B082210', 'Y', 'Idea labs', 'Hyderabad', 'pending'),
('DODLA MAMATHA', 'B081449', 'N', '', '', ''),
('Ch.Srilatha', 'B081602', 'Y', 'Envy Infotech Company', 'Hyderabad', 'Pending'),
('B.Srilatha', 'B082930', 'N', '', '', ''),
('K. Sravani', 'B081906', 'N', '', '', ''),
('Singampally Ramalakshmi', 'B083005', 'N', '', '', ''),
('Krishna Kumari B', 'B082176', 'N', '', '', ''),
('K.Samyukta ', 'B082105', 'Y', 'Envy Infotech', 'Hyderabad', 'pending'),
('Bontula Babita Venkata Naga Lakshmi', 'B081660', 'N', '', '', ''),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('Vinaykumar Masampally', 'B081426', 'Y', 'Intel Corporation', 'Hyderabad', 'pending'),
('DARJI SRIKANTH', 'B082691', 'N', '--', '', ''),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('SK.RAZAK', 'B082650', 'N', '--', '--', '--'),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('DARJI SRIKANTH', 'B082691', 'N', '--', '--', '--'),
('SK.RAZAK', 'B082650', 'N', '--', '--', '--'),
('Katam Hariprasad', 'B081415', 'Y', 'BSNL', 'Hyderabad', 'pending'),
('DARJI SRIKANTH', 'B082691', 'N', '--', '--', '--'),
('Thakur Madhavi', 'B082318', 'Y', 'BSNL', 'Hyderabad', 'pending'),
('DORNALA SRAVAN KUMAR', 'B082736', 'N', '--', '--', '--'),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('Renuka Kotturi', 'B082927', 'Y', 'ECIL', 'Hyderabad', 'pending'),
('Polimera Lakshmi', 'B082722', 'Y', '', 'Hyderabad', 'pending'),
('FIRDOSE', 'B081616', 'N', '', '', ''),
('Kosanam Avanija', 'B082361', 'Y', 'Infogroups', 'Hyderabad', 'pending'),
('B.Shailaja', 'B081853', 'N', '', '', ''),
('Mohammad sadak', 'B081744', 'N', '', '', ''),
('Kosanam Avanija', 'B082361', 'Y', 'Infogroups', 'Hyderabad', 'pending'),
('', '', '', '', '', ''),
('Polimera Lakshmi', 'B082722', 'Y', '', 'Hyderabad', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `wt1`
--

CREATE TABLE IF NOT EXISTS `wt1` (
  `uname` varchar(7) NOT NULL,
  `sub1` int(11) NOT NULL,
  `sub2` int(11) NOT NULL,
  `sub3` int(11) NOT NULL,
  `sub4` int(11) NOT NULL,
  `sub5` int(11) NOT NULL,
  `sub6` int(11) NOT NULL,
  `sub7` int(11) NOT NULL,
  `sub8` int(11) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wt1`
--

INSERT INTO `wt1` (`uname`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`) VALUES
('B082035', 88, 99, 89, 96, 95, 100, 98, 92);
