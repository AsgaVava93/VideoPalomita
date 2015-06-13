-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mag 28, 2015 alle 18:27
-- Versione del server: 5.5.41-0ubuntu0.14.10.1
-- PHP Version: 5.5.12-2ubuntu4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amm14_ibbaFederico`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`id` int(11) NOT NULL,
  `id_utente` int(11) NOT NULL,
  `id_computer` int(11) DEFAULT NULL,
  `id_monitor` int(11) DEFAULT NULL,
  `num` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dump dei dati per la tabella `cart`
--

INSERT INTO `cart` (`id`, `id_utente`, `id_computer`, `id_monitor`, `num`) VALUES
(2, 2, 8, NULL, 1),
(3, 2, 9, NULL, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `computer`
--

CREATE TABLE IF NOT EXISTS `computer` (
  `marca` varchar(30) NOT NULL,
  `modello` varchar(30) NOT NULL,
  `os` varchar(15) NOT NULL,
  `monitor` float NOT NULL,
  `cpu` varchar(30) NOT NULL,
  `video` varchar(30) NOT NULL,
  `ram` int(11) NOT NULL,
  `hd` int(11) NOT NULL,
  `memoryCard` int(11) NOT NULL,
  `price` float NOT NULL,
  `num` int(11) NOT NULL,
  `photo` varchar(40) NOT NULL,
  `Description` text NOT NULL,
`code` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dump dei dati per la tabella `computer`
--

INSERT INTO `computer` (`marca`, `modello`, `os`, `monitor`, `cpu`, `video`, `ram`, `hd`, `memoryCard`, `price`, `num`, `photo`, `Description`, `code`) VALUES
('SAMSUNG', 'NP300 E5C S05IT', 'Windows 7', 15.6, 'Intel core i5 3210M', 'Nvidia GeForce 610M 1GB', 6, 1000, 1, 599.99, 8, 'assets/images/art1.jpg', '<p>\r\nGoditi prestazioni durevoli e massima affidabilit&agrave; a un ottimo rapporto qualit&agrave;-prezzo con i notebook Samsung Serie 3.<br><br>\r\n\r\nLo schermo antiriflesso Led Hd da 15,6" ti offre immagini dai dettagli pi&ugrave; nitidi e dai colori pi&ugrave; vivaci.<br><br> \r\n\r\nLa superficie satinata del display riduce l''effetto specchio e ti permette di guardare lo schermo pi&ugrave; a lungo, anche all''esterno, senza affaticare i tuoi occhi. Inoltre, grazie alla cornice sottile quanto un dito, il notebook &egrave; ancora pi&ugrave; piccolo e leggero, e quindi pi&ugrave; pratico da portare in giro. <br><br>\r\n\r\n<b>Finitura anti-impronta</b>: qualit&agrave; fatta per durare. Essere sempre in movimento non &egrave; facile neanche per i notebook, che rischiano spesso di graffiarsi e rovinarsi. Il telaio Samsung Duracase &egrave; stato studiato apposta per proteggere il notebook da urti e impatti, e, grazie alla speciale superficie anti-graffio e anti-impronta, ti garantisce un notebook elegante e resistente. <br><br>\r\n\r\n<b>BatteryLife Plus</b>: la tecnologia Samsung di ricarica intelligente della batteria si avvale di una nuova tecnologia antiusura e consente alla batteria di mantenere l''80% della sua capacit&agrave; originale fino a 1000 ricariche, cio&eacute; fino a 3 volte di pi&ugrave; rispetto a una batteria tradizionale, che normalmente dura fino a 300 cicli. Tutto questo rende le nostre batterie pi&ugrave; economiche ed eco-compatibili, perch&eacute; sar&agrave; necessario sostituirle un minore numero di volte.\r\n</p>', 1),
('ACER', 'Aspire V5-122P', 'Windows 8', 11.6, 'AMD A4-1450', 'integrata', 4, 500, 0, 419.99, 6, 'assets/images/art2.jpg', '<p>\r\nAcer presenta il nuovo Aspire V5-122P, pensato per soddisfare le esigenze del consumatore digitale. Con eccellenti performance, funzioni di intrattenimento evolute, strumenti di comunicazione avanzati e un design di classe, &egrave; dedicati agli utenti pi&ugrave; esigenti che ricercano prestazioni audio e video al top.<br><br>\r\n\r\nL''ultima generazione di processori Intel Core e la scheda grafica assicura prestazioni eccellenti per il multitasking con qualunque applicazione, musica, video,  giochi e non solo.<br><br>\r\n\r\nLa serie V5 &egrave; caratterizzata dalle tecnologie Acer InviLink; Nplify; Wi-Fi CERTIFIED;  che garantiscono all''utente una connessione estremamente veloce, mentre la webcam Acer Crystal Eye HD consente di effettuare videochiamate in alta risoluzione.<br><br>\r\n\r\nAcer clear.fi 2.0 connette automaticamente tra loro i device digitali presenti nella stessa rete, cos&igrave; gli utenti possono condividere i propri contenuti su qualunque dispositivo in ogni punto della casa.<br><br>\r\n\r\nIl design classico viene esaltato dalla cover con finitura lucida e il richiamo dei colori principali sul palm-rest. La tastiera con tasti a isola &egrave; elegante, comoda e si accompagna al touchpad multi-gesture che garantisce il massimo del confort e della produttivit&agrave;.\r\n</p>', 2),
('ASUS', 'X552CL-SX050H', 'Windows 8', 15.6, 'Intel core i7', 'NVIDIA GeForce GT 710M 1GB', 4, 500, 1, 699.99, 7, 'assets/images/art3.jpg', '<p>\r\nIl notebook Asus X552CL-SX050H possiede un design elegante che permette agli utenti di esprimere la propria individualit&agrave;.<br><br>\r\n\r\nL''integrazione di processori pi&ugrave; veloci, una sezione grafica pi&ugrave; potente ed un controller avanzato di memoria onboard, rende questo notebook perfetto per il multitasking di tutti i giorni cos&igrave; e per l''intrattenimento multimediale. \r\n</p>', 3),
('ACER', 'V3-771G-73638G1TMAII', 'Windows 8', 17, 'Intel Core i7 2.20 GHz', 'NVIDIA GeForce GT740M 4GB', 8, 1000, 1, 799.99, 4, 'assets/images/art4.jpg', '<p>\r\nAcer presenta la nuova serie Aspire V3, una gamma di notebook pensata per soddisfare le esigenze del consumatore digitale. Con eccellenti performance, funzioni di intrattenimento evolute, strumenti di comunicazione avanzati e un design di classe, questi notebook sono dedicati agli utenti pi&ugrave; esigenti che ricercano prestazioni audio e video al top.\r\n</p>', 4),
('HP', 'Pavilion dv6-1200sl', 'Windows Vista', 15.6, 'Intel Pentium Dual Core T4200 ', 'Radeon HD4530', 4, 320, 0, 299.99, 7, 'assets/images/art5.jpg', '<p>\r\nQuesto notebook da 15,6'''' &egrave; lo strumento ideale per divertirsi, comunicare e spostarsi. <br><br>\r\n\r\nEleganza sofisticata Grazie alla finitura espresso nera lucida con un raffinato motivo a spirali, il notebook HP Paviliondv6-1222 non mancher&agrave; di farsi notare.<br><br>\r\n\r\nIl software HP MediaSmart gestisce l''intrattenimento in ogni sua forma: basta un semplice clic per passare dai filmati alle foto digitali e alla musica. \r\n</p>\r\n', 5),
('LENOVO', 'IdeaPad Y560', 'Windows 8', 15.6, 'Intel Core i7 740QM', 'ATI Mobility Radeon HD 5730', 4, 500, 1, 699.99, 7, 'assets/images/art6.jpg', '<p>\r\nIl notebook Lenovo IdeaPad Y560 pu&ograve; adattare automaticamente le prestazioni per le vostre esigenze, grazie al nuovo processore Intel Core i7-720QM con tecnologia Intel Turbo Boost. <br><br>\r\n\r\nQuesto notebook multimediale viene inoltre fornito con OneKey Theater II per distribuire video nitidi e brillanti con splendida chiarezza su un 15.6 pollici HD widescreen, mentre Dolby Home Theater surround e diffusori JBL assicurano un''esperienza sonora esaltante. <br><br>\r\n\r\nCon SlideNav, una barra di scorrimento intelligente sensibile al tocco, c''&egrave; un nuovo modo di interagire con i vostri collegamenti preferiti sul desktop. <br><br>\r\n\r\nL''IdeaPad Y560 dispone anche Lenovo Enhanced Experience per Windows 7, che prevede di avvio e di arresto volte pi&ugrave; veloce, oltre a una ricca esperienza multimediale.\r\n</p>', 6),
('TOSHIBA', 'Satellite Pro C850-1HD', 'Windows 8', 15.6, 'Intel Core i5 2.5 GHz', 'Intel HD Graphics', 4, 500, 1, 599.99, 0, 'assets/images/art7.jpg', '<p>\r\nIl Satellite Pro C850 ha tutto ci&ograve; che serve per mettersi subito al lavoro con un''ampia scelta di processori e formati di memoria per adattarsi a tutte le esigenze aziendali. <br><br>\r\n\r\nFanno parte del pacchetto anche le connessioni pi&ugrave; recenti e rapide, quali USB 3.0, HDMI, Bluetooth 4.0 e LAN Gigabit. Guarda il tuo lavoro ad alta definizione senza riflessi sullo schermo LED HD antiriflesso. Condividi la tua esperienza tramite videoconferenza con la webcam HD. <br><br>\r\n\r\nSe stai cercando qualcosa di pi&ugrave; per il tuo lavoro, con Toshiba Satellite Pro C850 non puoi sbagliare.\r\n</p>', 7),
('ACER', 'AXC603', 'Windows 8', 0, 'Intel Pentium J 2.41 GHz', 'Integrata', 8, 1000, 0, 349.99, 1, 'assets/images/desk1.jpg', '<p>\r\n<b>Tutte le funzionalit&agrave; in solo un terzo delle dimensioni</b><br>\r\n\r\nAumenta la tua creativit&agrave; e lo spazio sulla tua scrivania. Sufficientemente piccolo per potersi adattare ovunque, lo stile compatto della soluzione Aspire serie X occupa solo un terzo dello spazio rispetto a un PC tower e offre maggiore potenza e prestazioni per la tua creativit&agrave; multimediale e per il tuo intrattenimento HD. Inoltre puoi condividere i tuoi contenuti multimediali con AcerCloud.<br><br>\r\n\r\n<b>Prestazioni assicurate</b><br>\r\n\r\nCompleta le tue attivit&agrave;, guarda i tuoi programmi preferiti, gioca e resta in contatto con i tuoi amici -- tutto grazie all''elaborazione di processori Intel Core di terza generazione o dei nuovi AMD e alla gamma di schede grafiche, da quelle Intel HD integrate alle discrete NVIDIA GeForce o AMD Radeon. Premi il tasto di accensione LED blu1 e gestisci il tuo mondo.<br><br>\r\n\r\n<b>Intrattenimento ad alta definizione</b><br>\r\n\r\nIncredibilmente compatto e incredibilmente divertente: Aspire serie X &egrave; il tuo centro multimediale ad alta definizione. I modelli selezionati combinano grafica discreta con audio HD per colori e audio sorprendentemente precisi. Inoltre, puoi trasmettere la tua esperienza multimediale su uno schermo gigante, grazie alla porta HDMI integrata su tutti i computer desktop Aspire serie X.\r\n</p>', 8),
('ASUS', 'M31AD-IT004S', 'Windows 8', 0, 'Intel Core i5 3.1GHz', 'NVIDIA GeForce GT 630 2GB', 8, 1000, 1, 699.99, 6, 'assets/images/desk2.jpg', '<p>\r\nASUS serie M31AD &egrave; il nuovo Desktop PC equipaggiato con i processori CPU di quarta generazione Intel Core e potenti schede NVIDIA, per garantire le pi&ugrave; alte prestazioni nel multitasking e nel gaming.<br><br> \r\n\r\nI desktop M31AD sono basati sul chipset Intel H81 ed hanno 2 slot di espansione memoria DDR3 a 1600MHz, Pci Express 16x 3.0, 2 connessioni SATA III, 2 connessioni SATAII e 4 USB 3.0. Completano la dotazione un lettore di smart card 16:1, 32 GB di spazio web per la gestione dei vostri file in libert&agrave; di movimento, la tecnologia ASUS Smart Cooling per assicurare un funzionamento fresco e silenzioso nonch&eacute; il controllo e la gestione a livello hardware dei consumi, grazie ai coprocessori dedicati ASUS EPU.<br><br>\r\n\r\nParticolarmente curata anche la parte audio integrata, 8 canali HD con tecnologia Sonic Master, in modo da assicurare un sound di qualit&agrave; superiore senza bisogno di ulteriori schede dedicate.\r\n</p>', 9),
('FUJITSU', 'P0520P27A1IT', 'Windows 7 ', 0, 'Intel Core  I7-4770 3.4 GHz', 'integrata', 8, 1000, 0, 714.99, 9, 'assets/images/desk3.jpg', '<p>\r\n<b>Green IT</b><br>\r\nFujitsu &egrave; impegnata a eliminare l''uso di sostanze nocive e potenzialmente dannosi nei suoi prodotti e processi produttivi, al fine di minimizzare i rischi per gli utenti finali e per l''ambiente.<br><br>\r\n\r\n<b>Efficienza energetica</b><br>\r\nPoich&eacute; il risparmio energetico &egrave; una delle componenti fondamentali di approccio di Fujitsu per l''ambiente, cerchiamo costantemente di migliorare l''efficienza energetica dei nostri prodotti. La FUJITSU ESPRIMO P520 dispone di tecnologia pi&ugrave;  recente in materia di Intel chipset e processore e di un massimo di potenza efficiente alimentazione 86% di energia.<br><br>\r\n\r\n<b>Flessibilit&agrave;</b><br>\r\nOgni azienda ha esigenze uniche e specifiche per la propria infrastruttura IT. Avete la libert&agrave; di scegliere le soluzioni che pi&ugrave; si adattano al vostro ambiente specifico con l''hardware, il software, add-on e la gestione del ciclo di vita.\r\n\r\n</p>', 10),
('LENOVO', 'IC FLEX10 N2806', 'Windows 8.1', 10.1, 'Intel Celeron 1.58GHz', 'integrata', 2, 320, 0, 249.99, 0, 'assets/images/art8.jpg', '<p>\r\n<b>Portatile dual-mode - Modalit&agrave; Portatile e Stand</b><br>\r\n\r\nQuando &egrave; necessario utilizzare a lungo la tastiera, ad esempio per redigere documenti o aggiornare un foglio di lavoro, &egrave; possibile lasciare il modello Flex 10 in modalit&agrave; Portatile per ottenere la massima produttivit&agrave;. Quando invece si desidera utilizzare applicazioni touch-screen, chattare sul Web o guardare un film o un video, &egrave; possibile ruotare il portatile di 300 gradi e attivare cos&igrave; la modalit&agrave; Stand. L''esclusivo design del modello Flex 10 si adatta a qualsiasi tipo di attivit&agrave; si desideri svolgere.<br><br>\r\n\r\n<b>Schermo multi-touch a 10 punti</b><br>\r\n\r\n&Egrave; possibile interagire con il portatile Flex 10 utilizzando gesti semplici e intuitivi direttamente sullo schermo multi-touch a 10 punti da 10,1" ottimizzato per Windows 8.<br><br>\r\n\r\n<b>Solo 1,2 kg di peso e meno di 2,5 cm di spessore</b><br>\r\n\r\nI portatili sottili e leggeri sono spesso disponibili a un prezzo elevato; nonostante lo spessore di soli 17,3 mm e il peso di appena 1,2 kg, il modello Flex 10 viene offerto invece a un prezzo molto conveniente.\r\n</p>', 11),
('SONY', 'VAIO TAP 11', 'Windows 8.1', 11.6, 'i3-4020Y 1.5GHz', 'integrata', 4, 128, 0, 959.99, 9, 'assets/images/GetImage.jpg', '<p>\r\n<b>Design</b><br>\r\n\r\nEsteticamente, ci troviamo di fronte a uno degli ibridi pi&ugrave; eleganti e curati nella costruzione. Il tablet &egrave; sottile e leggero, con uno spessore di 9,9 mm e un peso contenuto in 780 g, risultati raggiunti grazie allo chassis in lega di alluminio e magnesio. <br><br>\r\n\r\n<b>Tastiera</b><br>\r\n\r\nIl Sony Vaio Tap 11 si differenzia anche per la tastiera wireless, collegata al tablet tramite una connessione magnetica, con funzione di ricarica, sul bordo inferiore destro di quest''''ultimo. La connessione fra tablet e cover &egrave; sicura e avviene in modo assolutamente naturale, con la tastiera guidata in sede. Allo stesso modo &egrave; facile e immediato staccarla dal corpo principale. Tuttavia, non rimane collegata quando si usa la tastiera.<br><br>\r\n\r\n<b>Prestazioni</b><br>\r\n\r\nNell''''uso quotidiano, sempre rimanendo in ambito professionale, le prestazioni sono comunque pi&ugrave; che soddisfacenti, con un''ottima gestione della potenza a disposizione. Ne consegue un tablet silenzioso e con una limitatissima tendenza al riscaldamento durante la riproduzione di contenuti multimediali, che si apprezza quando lo si tiene in mano o in grembo.<br><br>\r\n\r\n<b>Video</b><br>\r\n\r\nLo schermo impiegato sul Vaio Tap 11 si colloca nella tradizione Sony, in altre parole parliamo di un pannello IPS da 11'''''''' con risoluzione Full HD ed eccellente qualit&agrave; delle immagini visualizzate, oltre a un elevato angolo di visuale.<br>\r\n\r\nGrazie alla tecnologia Triluminos, ereditata dal mondo del TV Sony Bravia LED, la fedelt&agrave; e vivacit&agrave; dei colori raggiunge risultati difficilmente eguagliabili nel mondo mobile, rendendo una gioia per gli occhi la riproduzione di foto e video in alta definizione.<br>\r\n\r\nIl display &egrave; anche reattivo e sensibile alle gesture multi touch, confermandosi cos&igrave; al top in ogni ambito analizzato.\r\n\r\n</p>', 12),
('PANASONIC', 'CF-19', 'Windows 7', 10.1, 'Intel Core I5-3340M 2.7GHz', 'integrata', 4, 500, 0, 3499.99, 10, 'assets/images/art9.jpg', '<p>\r\nToughbook Wireless Display &egrave; una soluzione ideale per la trasmissione e la raccolta di informazioni in una variet&agrave; di ambienti di lavoro. Con la sua capacit&agrave; multi-client, pi&ugrave; utenti autorizzati in luoghi diversi possono simultaneamente e in modo sicuro la connessione a un server tramite Citrix o Microsoft Windows Server per accedere e aggiornare le applicazioni basate su server fino a 300 metri di distanza da un punto di accesso wireless. <br><br>\r\n\r\nCome risultato del suo involucro di magnesio resistente agli urti, il display &egrave; protetto contro le cadute da un massimo di 1 metro su una superficie di cemento. Una guarnizione speciale protegge anche tutte le porte contro polvere e infiltrazioni di acqua.\r\n</p>', 13);

-- --------------------------------------------------------

--
-- Struttura della tabella `monitor`
--

CREATE TABLE IF NOT EXISTS `monitor` (
  `Marca` varchar(30) NOT NULL,
  `Modello` varchar(30) NOT NULL,
  `Pollici` float NOT NULL,
  `Risoluzione` varchar(15) NOT NULL,
  `Formato` varchar(7) NOT NULL,
  `3D` varchar(2) NOT NULL,
  `Altoparlanti` varchar(2) NOT NULL,
  `num` int(5) NOT NULL,
  `prezzo` float NOT NULL,
  `photo` varchar(40) NOT NULL,
  `Descrizione` text NOT NULL,
`Code` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2005 ;

--
-- Dump dei dati per la tabella `monitor`
--

INSERT INTO `monitor` (`Marca`, `Modello`, `Pollici`, `Risoluzione`, `Formato`, `3D`, `Altoparlanti`, `num`, `prezzo`, `photo`, `Descrizione`, `Code`) VALUES
('Fujitsu', 'B23T-6 LED', 23, '1920x1080', '16:9', 'No', 'Si', 5, 249.99, 'assets/images/mon1.jpg', '<p> Il display B23T-6 LED offre eccellenti caratteristiche ergonomiche e di usabilit&agrave; che lo rendono particolarmente adatto all''uso intensivo in ufficio, grazie al comodo supporto 4 in 1. Alta risoluzione per immagini estremamente nitide con le applicazioni pi&ugrave; moderne.</p>', 2001),
('ASUS', 'VK207S LED', 19.5, '1600x900', '16:9', 'No', 'Si', 6, 119.99, 'assets/images/mon2.jpg', '<p> Ottimizza il contrasto del display regolando la luminosit&agrave; della retroilluminazione per ottenere il nero pi&ugrave scuro e bianco pi&ugrave; luminoso, ottenendo cos&igrave immagini pi&ugrave; realistiche.<br><br>\r\n\r\nQuando si desidera guardare i film sdraiati con lo sguardo rivolto verso l''alto, la tecnologia Smart View pu&ograve regolare i  parametri di colore per offrire la stessa qualit&agrave dell''immagine e colori con visione diritta.</p>', 2002),
('IPS', 'AOC D2769VH LED', 27, '1920x1080', '16:9', 'Si', 'Si', 10, 399.99, 'assets/images/mon3.jpg', '<p>Cercate un monitor di grande formato, che combini un design moderno con una qualit&agrave; d''immagine eccellente e una strabiliante visualizzazione in 3D? D2769VH &egrave; la scelta giusta per voi. <br><br>\r\n\r\nQuesto modello Full HD da 68,6 cm (27 pollici) offre immagini straordinariamente vivide e un tempo di risposta di soli 5ms, eliminando cos&igrave; le sfocature, per il massimo del divertimento senza compromessi.<br><br>\r\n\r\nDotato di tecnologia di polarizzazione 3D e di un pannello IPS per angolazioni estremamente ampie, il monitor d2769Vh consente a pi&ugrave; utenti contemporaneamente di godere di una straordinaria qualit&agrave; delle immagini unita a una profondit&agrave; stereoscopica strabiliante. Questo modello, inoltre, offre la retroilluminazione a LED, diversi connettori, come un D-Sub e 2 HDMI, forte contrasto (1000:1 tipico) e alta luminosit&agrave; (250 cd/m<sup>2</sup>). <br><br>\r\n\r\nE ancora: la retroilluminazione a LED consente di risparmiare energia, riducendo cos&igrave; i costi di utilizzo. Sperimentate ora il divertimento in 3D!\r\n</p>', 2003),
('HP', 'Pavilion 23XI', 23, '1920x1080', '16:9', 'No', 'Si', 0, 149.99, 'assets/images/mon4.jpg', '<p>\r\nLa tecnologia IPS (In-Plane Switching) garantisce colori sorprendenti. Ampiamente utilizzata in tablet, dispositivi mobili e televisori, &egrave; ora disponibile in un monitor ultrasottile ideale per l''uso domestico. Le immagini e i colori risultano omogenei pressoch&eacute; da qualsiasi angolazione.<br><br>\r\n\r\nIl design contemporaneo con display senza bordi, offre una visualizzazione ottimale delle immagini e del contenuto sullo schermo, conferisce un tocco moderno alla scrivania di casa. Un risparmio di spazio con stile. Il profilo ultrasottile, unico nel suo genere, pu&ograve; essere collocato pressoch&eacute ovunque e occupa pochissimo spazio. La configurazione a doppio monitor consentita dall''intelligente design Plug and Play garantisce una maggiore produttivit&agrave;. Gli ingressi VGA, DVI e HDMI incorporati (con HDCP) consentono l''utilizzo di dispositivi di ultima generazione.<br><br>\r\n\r\nI ricordi prenderanno vita grazie a dettagli con un alto livello di precisione. La tecnologia HP Enhance+ consente di ottenere immagini estremamente nitide. La risoluzione 1920 x 1080 Full HD[k1] e un rapporto di contrasto dinamico di 10.000.000:1[k2] garantiscono una visione nitida e ricca di dettagli. Le foto, i video e i giochi online[k3] avranno una maggior profondit&agrave; di campo; la differenza si noter&agrave; soprattutto con i neri pi&ugrave; scuri e i bianchi pi&ugrave; chiari.\r\n</p>', 2004);

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE IF NOT EXISTS `utente` (
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  `dataNascita` date NOT NULL,
  `sesso` char(1) NOT NULL,
  `via` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL,
  `cap` varchar(5) NOT NULL,
  `comune` varchar(30) NOT NULL,
  `provincia` varchar(2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `admin` tinyint(1) NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`nome`, `cognome`, `dataNascita`, `sesso`, `via`, `numero`, `cap`, `comune`, `provincia`, `email`, `username`, `password`, `admin`, `id`) VALUES
('Pinco', 'Pallino', '1993-02-09', 'm', 'Milano', 24, '09036', 'Guspini', 'CA', 'pinco@pallino.it', 'admin', '8dd43ae0638e1ce2690e2e3cfa653923', 1, 1),
('Peppe', 'Nobile', '1999-05-30', 'f', 'Dei Giudicati', 24, '09100', 'Cagliari', 'CA', 'nobile@live.it', 'cliente', '8dd43ae0638e1ce2690e2e3cfa653923', 0, 2),
('vale', 'sau', '1993-11-25', 'f', 'Via', 34, '09121', 'Cagliari', 'CA', 'valsau00@estudiantes.unileon.es', 'Valee', '8b2bb453eb515773ffbafacab91f5baf', 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`id`), ADD KEY `id_utente` (`id_utente`), ADD KEY `id_computer` (`id_computer`), ADD KEY `id_monitor` (`id_monitor`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `monitor`
--
ALTER TABLE `monitor`
 ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `utente`
--
ALTER TABLE `utente`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
MODIFY `code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `monitor`
--
ALTER TABLE `monitor`
MODIFY `Code` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2005;
--
-- AUTO_INCREMENT for table `utente`
--
ALTER TABLE `utente`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `cart`
--
ALTER TABLE `cart`
ADD CONSTRAINT `acquisto` FOREIGN KEY (`id_utente`) REFERENCES `utente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `mon` FOREIGN KEY (`id_monitor`) REFERENCES `monitor` (`Code`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pc` FOREIGN KEY (`id_computer`) REFERENCES `computer` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `case_entries`
--

CREATE TABLE IF NOT EXISTS `case_entries` (
`id` bigint(20) unsigned NOT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `description` text,
  `patient_id` bigint(20) unsigned DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dump dei dati per la tabella `case_entries`
--

INSERT INTO `case_entries` (`id`, `start`, `end`, `description`, `patient_id`) VALUES
(2, '2003-08-03 01:00:43', '1011-11-11 11:11:11', 'fdasfs', 0),
(3, '2013-01-01 00:00:59', '1011-11-11 11:11:11', 'ffdadsf', 0),
(4, '2013-01-01 00:00:59', '1011-11-11 11:11:11', 'ffdadsf', 0),
(5, '2019-01-01 20:00:00', '1011-11-11 11:11:11', 'aaaaaaa', 31);

-- --------------------------------------------------------

--
-- Struttura della tabella `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `ward` varchar(30) DEFAULT NULL,
  `bed_number` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=74 ;

--
-- Dump dei dati per la tabella `patients`
--

INSERT INTO `patients` (`id`, `name`, `surname`, `birthday`, `ward`, `bed_number`) VALUES
(1, 'pat', 'pat', '2010-12-12', 'wut', 2),
(2, 'pat', 'pat', '2010-12-12', 'wut', 2),
(3, 'pat', 'pat', '2010-12-12', 'wut', 2),
(4, 'asdf', 'fafssd', '2013-01-01', 'arqwe', 3),
(5, 'dfdas', 'fsadfdafadfsd', '1989-01-01', 'fdsaf', 3),
(6, 'fdsafdsfdsfdfffffffffffff', 'ffffffffffffff', '2019-01-01', 'fdsa', 3),
(7, 'fdsafdsfdsfdfffffffffffff', 'ffffffffffffff', '2019-01-01', 'fdsa', 3),
(8, 'dffffff', 'fff', '2014-01-01', 'asdf', 3),
(9, 'aaaa', 'aaaaa', '2014-01-01', 'fdsa', 0),
(10, 'dfdas', 'fsadfdafadfsd', '1989-01-01', 'fdsaf', 3),
(11, 'dfdas', 'fsadfdafadfsd', '1989-01-01', 'fdsaf', 3),
(12, 'rrrrrrrrr', 'rrrrrrrrrrr', '2006-01-01', 'fadsfa', 2),
(13, 'rrrrrrrrr', 'rrrrrrrrrrr', '2006-01-01', 'fadsfa', 2),
(14, 'qqq', 'qqq', '2014-01-01', 'fdsaf', 2),
(15, 'qqq', 'qqq', '2014-01-01', 'fdsaf', 2),
(16, 'qqq', 'qqq', '2014-01-01', 'fdsaf', 2),
(17, 'z', 'z', '2014-01-01', 'afd', 3),
(18, 'f', 'f', '2014-01-01', 'sdaf', 1),
(19, 'w', 'w', '2014-02-01', 'fd', 0),
(20, 't', 't', '2014-01-01', 'k', 0),
(21, 't', 't', '2014-01-01', 'k', 0),
(22, 't', 't', '2014-01-01', 'k', 0),
(23, 'y', 'y', '2014-01-01', 'd', 0),
(24, 'y', 'y', '2014-01-01', 'd', 0),
(25, 'a', 'a', '2014-01-01', 'a', 0),
(26, 'a', 'a', '2014-01-01', 'a', 0),
(27, 'f', 'f', '2014-01-01', 'fsda', 7),
(28, 'o', 'o', '2014-01-01', 'f', 0),
(29, 'o', 'o', '2014-01-01', 'f', 0),
(30, 'o', 'o', '2014-01-01', 'f', 0),
(31, 'o', 'o', '2014-01-01', 'f', 0),
(32, 'o', 'o', '2014-01-01', 'f', 0),
(33, 'o', 'o', '2014-01-01', 'f', 0),
(34, 'sadf', 'asdf', '2014-01-01', 'fdsa', 0),
(35, 'l', 'l', '2014-01-01', 'l', 0),
(36, 'i', 'i', '2014-01-01', 'q', 0),
(37, 'n', 'n', '2014-01-01', 'fdsaf', 0),
(38, 'x', 'x', '2014-01-01', 'x', 0),
(39, 'x', 'x', '2014-01-01', 'x', 0),
(40, 'f', 'hhhh', '2014-01-01', 'f', 0),
(41, 'fg', 'sdfa', '2014-01-01', 'fdsa', 0),
(42, 'fg', 'sdfa', '2014-01-01', 'fdsa', 0),
(43, 'b', 'b', '2014-01-01', 'fasdf', 3),
(44, '', 'fafa', '2014-02-01', 'fdsa', 4),
(45, 'mmmmmmmm', 'mmmmmm', '2014-01-01', 'mmm', 0),
(46, 'op', 'op', '1966-01-01', 'op', 0),
(47, 'n', 'n', '1997-01-01', 'n', 0),
(48, 'n', 'n', '2014-01-01', 'a', 0),
(49, 'b', 'b', '2015-01-01', 'sdf', 0),
(50, 'p', 'p', '2013-02-01', 'p', 0),
(51, 'p', 'p', '2014-01-01', 'aa', 0),
(52, 'Patient1', 'p', '2013-02-01', 'df', 0),
(53, 'Patient1', 'p', '2013-02-01', 'df', 0),
(54, 'o', 'o', '2014-01-01', 'afd', 0),
(55, 'o', 'o', '2014-01-01', 'afd', 0),
(56, 'o', 'o', '2014-01-01', 'afd', 0),
(57, 'o', 'o', '2014-01-01', 'afd', 0),
(58, 'o', 'o', '2014-01-01', 'afd', 0),
(59, 'o', 'o', '2014-01-01', 'afd', 0),
(60, 'o', 'o', '2014-01-01', 'afd', 0),
(61, 'o', 'o', '2014-01-01', 'afd', 0),
(62, 'o', 'o', '2014-01-01', 'afd', 0),
(63, 'o', 'o', '2014-01-01', 'afd', 0),
(64, 'o', 'o', '2014-01-01', 'afd', 0),
(65, 'o', 'o', '2014-01-01', 'afd', 0),
(66, 'o', 'o', '2014-01-01', 'afd', 0),
(67, 'o', 'o', '2014-01-01', 'afd', 0),
(68, 'o', 'o', '2014-01-01', 'afd', 0),
(69, 'o', 'o', '2014-01-01', 'afd', 0),
(70, 'o', 'o', '2014-01-01', 'afd', 0),
(71, 'o', 'o', '2014-01-01', 'afd', 0),
(72, 'o', 'o', '2014-01-01', 'afd', 0),
(73, '', '', '2014-12-25', '', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `tabella_registrati`
--

CREATE TABLE IF NOT EXISTS `tabella_registrati` (
`id` int(40) NOT NULL,
  `nick` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `user_patient`
--

CREATE TABLE IF NOT EXISTS `user_patient` (
`id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `patient_id` bigint(20) unsigned DEFAULT NULL,
  `user_role` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Dump dei dati per la tabella `user_patient`
--

INSERT INTO `user_patient` (`id`, `user_id`, `patient_id`, `user_role`) VALUES
(1, 0, 0, 'Doctor'),
(2, 0, 0, 'Doctor'),
(3, 0, 0, 'Doctor'),
(4, 0, 0, 'Doctor'),
(5, 1, 31, 'User'),
(6, 1, 32, 'User'),
(7, 1, 33, 'User'),
(8, 1, 34, 'User'),
(9, 1, 35, 'User'),
(10, 1, 36, 'User'),
(11, 1, 37, 'User'),
(12, 1, 38, 'User'),
(13, 1, 39, 'User'),
(14, 1, 40, 'User'),
(15, 1, 41, 'User'),
(16, 1, 42, 'User'),
(17, 1, 43, 'User'),
(18, 1, 44, 'User'),
(19, 1, 45, 'User'),
(20, 1, 46, 'User'),
(21, 1, 47, 'User'),
(22, 1, 48, 'User'),
(23, 1, 49, 'User'),
(24, 1, 50, 'User'),
(25, 1, 51, 'User'),
(26, 1, 52, 'User'),
(27, 1, 53, 'User'),
(28, 1, 54, 'User'),
(29, 1, 55, 'User'),
(30, 1, 56, 'User'),
(31, 1, 57, 'User'),
(32, 1, 58, 'User'),
(33, 1, 59, 'User'),
(34, 1, 60, 'User'),
(35, 1, 61, 'User'),
(36, 1, 62, 'User'),
(37, 1, 63, 'User'),
(38, 1, 64, 'User'),
(39, 1, 65, 'User'),
(40, 1, 66, 'User'),
(41, 1, 67, 'User'),
(42, 1, 68, 'User'),
(43, 1, 69, 'User'),
(44, 1, 70, 'User'),
(45, 1, 71, 'User'),
(46, 1, 72, 'User');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `ward` varchar(30) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `birthday`, `ward`, `role`, `email`, `password`) VALUES
(1, 'Mattia', 'Setzu', '2010-12-23', 'some', 'Doctor', 'ma.setzu2@studenti.unica.it', '123456789'),
(2, 'Mattia', 'Setzu', '2007-02-01', 'None', 'Student', 'setzu.mattia@gmail.com', '123456789'),
(3, 'Mattia', 'Setzu', '2007-02-01', 'None', 'Student', '1@gmail.com', '123456789'),
(4, 'Mattia', 'Setzu', '2007-02-01', 'None', 'Student', '2@gmail.com', '12345678'),
(5, 'Mattia', 'Setzu', '2007-02-01', 'None', 'Student', '3@gmail.com', '123456789'),
(6, 'Mattia', 'Setzu', '2007-02-01', 'None', 'Student', '4@gmail.com', '123456789'),
(7, 'Mattia', 'Setzu', '2007-02-01', 'None', 'Student', '5@gmail.com', '123456789'),
(8, 'Mattia', 'Setzu', '2007-02-01', 'None', 'Student', '7@gmail.com', '123456789'),
(9, 'Mattia', 'Setzu', '2011-01-01', 'None', 'Student', '45@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_entries`
--
ALTER TABLE `case_entries`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabella_registrati`
--
ALTER TABLE `tabella_registrati`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_patient`
--
ALTER TABLE `user_patient`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_entries`
--
ALTER TABLE `case_entries`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `tabella_registrati`
--
ALTER TABLE `tabella_registrati`
MODIFY `id` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_patient`
--
ALTER TABLE `user_patient`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
