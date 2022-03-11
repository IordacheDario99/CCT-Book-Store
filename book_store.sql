-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 26, 2021 at 02:39 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

DROP TABLE IF EXISTS `tblbooks`;
CREATE TABLE IF NOT EXISTS `tblbooks` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `cover_image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `description` text,
  `pages` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `collection` varchar(255) DEFAULT NULL,
  `publishing_year` varchar(255) DEFAULT NULL,
  `cover_type` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`book_id`, `cover_image`, `title`, `author`, `description`, `pages`, `publisher`, `collection`, `publishing_year`, `cover_type`, `price`) VALUES
(19, 'hp.jpeg', 'Harry Potter si Camera Secretelor', 'J.K. ROWLING', 'Harry Potter are o varÄƒ plinÄƒ: petrece o zi de naÈ™tere groaznicÄƒ, primeÈ™te avertizÄƒri sinistre de la un elf de casÄƒ pe nume Dobby È™i fuge de la familia Dursley cu maÈ™ina zburÄƒtoare a prietenului sÄƒu Ron.\r\n\r\nLa Hogwarts Ã®ncepe un nou an È™colar, iar Harry aude niÈ™te È™oapte ciudate pe coridoarele goale. Apoi au loc mai multe atacuri misterioase â€“ previziunile sumbre ale lui Dobby par sÄƒ se adevereascÄƒ...', '400', 'Arthur', ' Fantasy', '2021', 'Hardcover', '50'),
(12, 'obama.jpeg', 'Pamantul fagaduintei', 'BARACK OBAMA', 'Nimic nu se comparÄƒ cu sentimentul pe care-l ai cÃ¢nd termini de scris o carte È™i sunt mÃ¢ndru de aceasta pe care tocmai am finalizat-o. Mi-am petrecut ultimii cÃ¢È›iva ani reflectÃ¢nd asupra preÈ™edinÈ›iei mele, iar Ã®n PÄ‚MÃ‚NTUL FÄ‚GÄ‚DUINÈšEI am Ã®ncercat sÄƒ redau cu sinceritate povestea campaniei mele prezidenÈ›iale È™i timpul Ã®n care am fost Ã®n funcÈ›ie: evenimentele-cheie È™i oamenii care au stat la baza lor; pÄƒrerea mea despre lucrurile care mi-au ieÈ™it È™i greÈ™elile pe care le-am fÄƒcut; È™i forÈ›ele de ordin politic, economic È™i cultural cu care echipa mea È™i cu mine ne-am confruntat atunci â€“ È™i cu care, ca naÈ›iune, Ã®ncÄƒ avem de-a face. De asemenea, am Ã®ncercat sÄƒ redau cititorilor cÄƒlÄƒtoria intimÄƒ pe care Michelle È™i cu mine am fÄƒcut-o Ã®n acei ani, cu toate momentele abisale È™i cele Ã®nÄƒlÈ›Äƒtoare. È˜i Ã®n cele din urmÄƒ, Ã®n aceste vremuri Ã®n care America trece prin niÈ™te momente decisive atÃ¢t de semnificative, cartea oferÄƒ cÃ¢teva dintre pÄƒrerile generale pe care le am despre cum putem sÄƒ vindecÄƒm diviziunile din È›ara noastrÄƒ de-acum Ã®ncolo È™i cum sÄƒ facem ca democraÈ›ia sÄƒ fie Ã®n folosul tuturor â€“ o sarcinÄƒ care nu va depinde de un anume preÈ™edinte, ci de noi toÈ›i, ca cetÄƒÈ›eni implicaÈ›i. Dincolo de a fi o lecturÄƒ plÄƒcutÄƒ È™i informativÄƒ, sper mai mult decÃ¢t orice ca aceastÄƒ carte sÄƒ inspire tinerii din toate colÈ›urile È›Äƒrii â€“ È™i ale lumii â€“ sÄƒ preia È™tafeta, sÄƒ-È™i facÄƒ vocea auzitÄƒ È™i sÄƒ Ã®ntreprindÄƒ tot ce È›ine de ei ca sÄƒ schimbe lumea Ã®n bine.', '800', 'Litera', 'Biografii,', '2020', 'Hardcover', '80'),
(18, '205062452-0.jpeg', 'Arta subtila a nepasarii', 'MARK MANSON', 'ÃŽn acest ghid revoluÈ›ionar, definitoriu pentru o Ã®ntreagÄƒ generaÈ›ie, autorul ne Ã®nvaÈ›Äƒ cÄƒ, pentru a fi fericiÈ›i, trebuie sÄƒ renunÈ›Äƒm la a fi â€žpozitivi\" mereu È™i trebuie, Ã®n schimb, sÄƒ ne perfecÈ›ionÄƒm Ã®n Ã®nvingerea obstacolelor.\r\nSusÈ›inÃ¢ndu-È™i afirmaÈ›iile cu cercetÄƒri academice È™i anecdote bine plasate, Manson argumenteazÄƒ cÄƒ pentru a avea o viaÈ›Äƒ mai bunÄƒ trebuie sÄƒ È™tim nu cum sÄƒ transformÄƒm lÄƒmÃ¢ile Ã®n limonadÄƒ, ci cum sÄƒ le tolerÄƒm mai bine. El ne sfÄƒtuieÈ™te sÄƒ ne cunoaÈ™tem limitele È™i sÄƒ le acceptÄƒm. Aceasta este adevÄƒrata sursÄƒ a puterii. DupÄƒ ce ne-am acceptat temerile, greÈ™elile È™i incertitudinile, dupÄƒ ce Ã®ncetÄƒm sÄƒ evitÄƒm adevÄƒrurile dureroase È™i Ã®ncepem sÄƒ le Ã®nfruntÄƒm, putem gÄƒsi curajul È™i Ã®ncrederea pe care le cÄƒutÄƒm cu disperare.\r\nAdoptÃ¢nd pentru acest manifest un ton sincer È™i un limbaj direct, fÄƒrÄƒ compromisuri, Manson Ã®ncearcÄƒ sÄƒ ne trezeascÄƒ la realitate pentru a putea duce o viaÈ›Äƒ mai plinÄƒ de satisfacÈ›ii È™i mai ancoratÄƒ Ã®n concret.', '240', 'Lifestyle Publishing', 'Dezvoltare personala', '2017', 'Paperback', '40'),
(14, '9789734624058-1860916.jpg', 'Java de la 0 la expert (brosata)', 'STEFAN TANASA', 'Editia a II-a revazuta si adaugita.\r\nJava este un limbaj de programare orientat obiect consacrat. Cele mai multe aplicatii distribuite sint scrise in Java, iar evolutiile tehnologice permit utilizarea sa pentru dispozitive mobile gen telefon, agenda electronica si palmtop. Cititorului i se ofera un ghid complet care cuprinde atit notiunile de baza ale limbajului Java, cit si elemente de nivel mediu si avansat. Actualizat in conformitate cu dezvoltarea limbajului Java, volumul este bogat in exemple de programe comentate, de regula fiecare capitol terminindu-se cu realizarea unei aplicatii concrete, pentru a ilustra cit mai bine cele prezentate.', '864', ' Polirom', 'Programare,', '2007`', 'Brosata', '100'),
(15, '9789736818684-2798143.jpg', 'Programarea in limbajul C/C++ pentru liceu', 'MARINEL SERBAN, EMANUELA CERCHEZ', 'Structura cartii include atit materia prevazuta in programele scolare actuale de la clasele de profil, cit si teme care se studiaza in Centrele de Excelenta, pentru o pregatire de performanta. Continutul teoretic este sustinut prin exemple aplicative si prin numeroase rezolvari de probleme, iar fiecare tema este insotita de un set consistent de probleme reprezentative, propuse spre rezolvare. Limbajul de programare C a devenit un standard: noile limbaje (de programare sau de scripting) care se impun pe piata dezvoltatorilor de software au ca punct de plecare sintaxa C/C++ (Java, Javascript, ActionScript, PHP etc.).', '296', 'Polirom', 'Programare', '2005', 'Brosata', '39'),
(16, '25714128-0-240.jpg', 'Web Design with HTML, CSS, JavaScript and jQuery Set', 'JON DUCKETT', 'A two-book set for web designers and front-end developers This two-book set combines the titles HTML & CSS: Designing and Building Web Sites and JavaScript & jQuery: Interactive Front-End Development.', '1152', 'John Wiley And Sons Ltd', 'Programare', '2014', 'Paperback', '296'),
(17, '1093427565-0.jpeg', 'Metro 2033', 'DMITRI GLUHOVSKI', 'ÃŽn anul 2033, supravieÈ›uitorii unui rÄƒzboi atomic planetar Ã®ncearcÄƒ sÄƒ-È™i continue existenÈ›a sub pÄƒmÃ¢nt, Ã®n staÈ›iile de metrou din Moscova, unde pericole nebÄƒnuite Ã®i aÈ™teaptÄƒ la tot pasul. ÃŽn lupta cu ÃŽntunecaÈ›ii â€“ creaturi misterioase care trÄƒiesc la suprafaÈ›Äƒ È™i care coboarÄƒ Ã®n adÃ¢ncuri Ã®n cÄƒutarea oamenilor â€“, Artiom, personajul central al cÄƒrÈ›ii, trece prin experienÈ›e care Ã®i demonstreazÄƒ cÄƒ cel mai mare pericol pentru om rÄƒmÃ¢n tot oamenii. Metro 2033 este un roman apocaliptic ce clÄƒdeÈ™te un univers de coÈ™mar pe ruinele lumii imperfecte a zilelor noastre.', '624', 'Paladin', 'SF', '2016', 'Hardcover', '44'),
(20, '773677900-1.jpeg', 'Ganduri catre sine insusi', 'MARCUS AURELIUS', 'MARCUS AURELIUS Antoninus Augustus este cunoscut atÃ¢t ca Ã®mpÄƒrat al Romei, cÃ¢t ÅŸi ca filozof stoic. NÄƒscut la Roma, la 26 aprilie 121, Ã®ntr-o familie senatorialÄƒ de origine hispanicÄƒ, a fost adoptat de viitorul Ã®mpÄƒrat Antoninus Pius, la cererea Ã®mpÄƒratului Hadrian. PrimeÅŸte o educaÅ£ie aleasÄƒ, studiind retorica cu Marcus Cornelius Fronto ÅŸi Herodes Atticus ÅŸi filozofia cu Quintus Iunius Rusticus, Apollonius din Calcedonia ÅŸi Sextus din Cheroneea. Domnia sa, Ã®nceputÄƒ Ã®n anul 161, este marcatÄƒ de un ÅŸir de catastrofe (ciumÄƒ, inundaÅ£ii, cutremure), precum ÅŸi de numeroase rÄƒzboaie, purtate cu succes; Ã®n plan militar, Marcus Aurelius a respins atacurile duÅŸmanilor Romei de la hotarele imperiului, Ã®n special Ã®n Orient ÅŸi pe DunÄƒre, continuÃ¢nd politica defensivÄƒ iniÅ£iatÄƒ de Hadrian. A murit la 17 martie 180, de ciumÄƒ, se pare, la Sirmium sau la Vindobona (Viena de azi).', '188', 'Humanitas', 'Etica si morala', '2020', 'Paperback', '29'),
(21, '320311956-0.jpeg', 'Tata bogat, tata sarac', 'ROBERT T. KIYOSAKI', 'Principalul motiv pentru care oamenii se luptÄƒ cu dificultÄƒÅ£ile financiare este acela cÄƒ au trecut prin ÅŸcoalÄƒ fÄƒrÄƒ sÄƒ Ã®nveÅ£e nimic despre bani. Rezultatul este cÄƒ Ã®nvaÅ£Äƒ sÄƒ lucreze pentru baniâ€¦ dar nu Ã®nvaÅ£Äƒ niciodatÄƒ sÄƒ punÄƒ banii sÄƒ acÅ£ioneze pentru ei.\r\nÃŽmi iubesc copiii ÅŸi vreau sÄƒ fac tot posibilul pentru ca ei sÄƒ aibÄƒ parte de cea mai bunÄƒ educaÅ£ie! ÃŽnvÄƒtÄƒmÃ¢ntul tradiÅ£ional, deÅŸi este foarte important, nu mai este de ajuns. Trebuie sÄƒ Ã®nÅ£elegem cu toÅ£ii ce sunt banii ÅŸi cum lucreazÄƒ ei.', '232', 'Curtea Veche', 'Business', '2019', 'Paperback', '50'),
(22, '1983201-0.jpeg', 'Sapiens. Scurta istorie a omenirii', 'YUVAL NOAH HARARI', 'PublicatÄƒ iniÅ£ial Ã®n Israel Ã®n 2011, Sapiens a devenit rapid bestseller internaÅ£ional, fiind tradusÄƒ Ã®n peste patruzeci de limbi.\r\n\r\nAcum 100.000 de ani, pe pÄƒmÃ®nt existau cel puÅ£in ÅŸase specii de oameni. AstÄƒzi existÄƒ una singurÄƒ: noi, Homo sapiens. Ce s-a Ã®ntÃ®mplat cu celelalte? Åži cum am ajuns sÄƒ fim stÄƒpÃ®nii planetei? De la Ã®nceputurile speciei noastre ÅŸi rolul pe care l-a jucat Ã®n ecosistemul global pÃ®nÄƒ Ã®n modernitate, Sapiens Ã®mbinÄƒ istoria ÅŸi ÅŸtiinÅ£a pentru a pune Ã®n discuÅ£ie tot ce ÅŸtim despre noi Ã®nÅŸine, ne aratÄƒ cum ne-am unit ca sÄƒ construim oraÅŸe, regate ÅŸi imperii, cum am ajuns sÄƒ credem Ã®n zei, Ã®n legi ÅŸi Ã®n cÄƒrÅ£i, dar ÅŸi cum am devenit sclavii birocraÅ£iei, ai consumerismului ÅŸi ai cÄƒutÄƒrii fericirii. De asemenea, ne Ã®ndeamnÄƒ sÄƒ privim Ã®n viitor, cÄƒci de cÃ®teva decenii am Ã®nceput sÄƒ Ã®ncÄƒlcÄƒm legile selecÅ£iei naturale care au guvernat viaÅ£a Ã®n ultimii patru miliarde de ani. DobÃ®ndim capacitatea de a modela nu doar lumea din jurul nostru, ci ÅŸi pe noi Ã®nÅŸine. ÃŽncotro ne duce aceasta ÅŸi ce vrem sÄƒ devenim?', '384', 'Polirom', 'Istorie generala', '2017', 'Hardcover', '69');

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

DROP TABLE IF EXISTS `tblcart`;
CREATE TABLE IF NOT EXISTS `tblcart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(255) DEFAULT NULL,
  `item_price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblorders`
--

DROP TABLE IF EXISTS `tblorders`;
CREATE TABLE IF NOT EXISTS `tblorders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `book_title` varchar(255) DEFAULT NULL,
  `book_author` varchar(255) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `order_price` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluserdata`
--

DROP TABLE IF EXISTS `tbluserdata`;
CREATE TABLE IF NOT EXISTS `tbluserdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(10) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(12) DEFAULT NULL,
  `password` text NOT NULL,
  `address` text,
  `zip_code` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluserdata`
--

INSERT INTO `tbluserdata` (`id`, `user_type`, `first_name`, `last_name`, `email`, `phone_number`, `password`, `address`, `zip_code`) VALUES
(30, '1', 'Iordache', 'Dario', 'admin@admin.com', '1234567890', '1234', 'STR. TRANDAFIRILOR, CLUJ, 405300', 123456),
(29, '0', 'Iordache', 'Dario', 'dario.iordache@gmail.com', '0722846988', 'caca1234', 'Str. Dunno, Nr.11', 123456),
(32, '0', 'Iordache ', 'Dario', 'da@gmail.com', '1231254145', 'caca123', 'asfasfa', 12314),
(33, '0', 'Stoicescu', 'Andrei', 'sa@sa.com', '929521321', '1234', 'Bulevardul Ficusului 44A, Bucuresti 1', 123563);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
