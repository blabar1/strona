CREATE TABLE `dane_logowania` (
  `mail` varchar(45) NOT NULL PRIMARY KEY,
  `haslo` varchar(72) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `typ_konta` (
  `id_typ` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nazwa` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `dane_konta` (
  `id_konta` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `imie` varchar(32) NOT NULL,
  `nazwisko` varchar(32) NOT NULL,
  `adres` varchar(64) DEFAULT NULL,
  `miasto` varchar(45) DEFAULT NULL,
  `kod_pocztowy` varchar(6) DEFAULT NULL,
  `konto_typ` int NOT NULL,
  `mail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `koszyk` (
  `id_koszyk` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `konto` int NOT NULL,
  `produkt` int NOT NULL,
  `ilosc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `kategoria` (
  `id_kategoria` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nazwa` varchar(45) NOT NULL,
  `miniaturka` varchar(45) NOT NULL,
  `nadkategoria` int
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `produkt` (
  `id_produkt` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nazwa` varchar(255) NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `ilosc` int NOT NULL,
  `opis` TEXT NOT NULL,
  `miniaturka` varchar(45) NOT NULL,
  `kategoria` int 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `galeria_zdjec` (
  `id_zdjecia` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `plik` varchar(45) NOT NULL,
  `produkt` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `wlasciwosc` (
  `id_wlasciwosc` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nazwa` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `produkt_wlasciwosc` (
  `id_wlasciwosc_produkt` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `produkt` int NOT NULL,
  `nazwa_wlasciwosc` int NOT NULL,
  `wartosc` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `zamowienie` (
  `id_zamowienia` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `imie` varchar(32) NOT NULL,
  `nazwisko` varchar(32) NOT NULL,
  `adres` varchar(64) NOT NULL,
  `miasto` varchar(45) NOT NULL,
  `kod_pocztowy` varchar(6) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `dostawa` int NOT NULL,
  `metoda` int NOT NULL,
  `data_zlozenia` date NOT NULL,
  `data_wyslania` date DEFAULT NULL,
  `koszt` decimal(10,2) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `zamowienie_produkt` (
  `id_zamowione_produkty` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `zamowienie` int NOT NULL,
  `produkt` int NOT NULL,
  `ilosc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `dostawa` (
  `id_dostawa` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nazwa` varchar(64) NOT NULL,
  `cena` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `metoda_platnosci` (
  `id_metoda` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nazwa` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE dane_konta ADD FOREIGN KEY (mail) REFERENCES dane_logowania(mail) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE dane_konta ADD FOREIGN KEY (konto_typ) REFERENCES typ_konta(id_typ);
ALTER TABLE koszyk ADD FOREIGN KEY (konto) REFERENCES dane_konta(id_konta) ON DELETE CASCADE;
ALTER TABLE koszyk ADD FOREIGN KEY (produkt) REFERENCES produkt(id_produkt) ON DELETE CASCADE;
ALTER TABLE kategoria ADD FOREIGN KEY (nadkategoria) REFERENCES kategoria(id_kategoria) ON DELETE SET NULL;
ALTER TABLE produkt ADD FOREIGN KEY (kategoria) REFERENCES kategoria(id_kategoria) ON DELETE SET NULL;
ALTER TABLE galeria_zdjec ADD FOREIGN KEY (produkt) REFERENCES produkt(id_produkt) ON DELETE CASCADE;
ALTER TABLE zamowienie_produkt ADD FOREIGN KEY (zamowienie) REFERENCES zamowienie(id_zamowienia) ON DELETE CASCADE;
ALTER TABLE zamowienie_produkt ADD FOREIGN KEY (produkt) REFERENCES produkt(id_produkt) ON DELETE CASCADE;
ALTER TABLE produkt_wlasciwosc ADD FOREIGN KEY (nazwa_wlasciwosc) REFERENCES wlasciwosc(id_wlasciwosc) ON DELETE CASCADE;
ALTER TABLE produkt_wlasciwosc ADD FOREIGN KEY (produkt) REFERENCES produkt(id_produkt) ON DELETE CASCADE;
ALTER TABLE zamowienie ADD FOREIGN KEY (dostawa) REFERENCES dostawa(id_dostawa);
ALTER TABLE zamowienie ADD FOREIGN KEY (metoda) REFERENCES metoda_platnosci(id_metoda);