DROP database IF EXISTS `sklep`;
create database `sklep`;
use `sklep`;

CREATE TABLE `dane_logowania` (
  `login` varchar(45) NOT NULL PRIMARY KEY,
  `haslo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `typy_konta` (
  `id_typ` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nazwa` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `dane_konta` (
  `id_konta` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `imie` varchar(32) NOT NULL,
  `nazwisko` varchar(32) NOT NULL,
  `adres` varchar(64) DEFAULT NULL,
  `miasto` varchar(45) DEFAULT NULL,
  `mail` varchar(45) NOT NULL,
  `typ_konta` int NOT NULL,
  `login` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `koszyk` (
  `id_kosz` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `konto` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `koszyk_produkt` (
  `id_koszyk_produkty` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `kosz` int NOT NULL,
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
  `nazwa` varchar(45) NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `ilosc` int NOT NULL,
  `opis` TEXT NOT NULL,
  `miniaturka` varchar(45) NOT NULL,
  `kategoria` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `galeria_zdjec` (
  `id_zdjecia` int NOT NULL,
  `plik` varchar(45) NOT NULL,
  `produkt` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `wlasciowsc` (
  `id_wlasciowsc` int NOT NULL,
  `nazwa` varchar(45) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `produkt_wlasciowsc` (
  `id_wlasciowsc_produkt` int NOT NULL,
  `produkt` int NOT NULL,
  `nazwa_wlasciwosc` int NOT NULL,
  `wartosc` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `zamowienie` (
  `id_zamowienia` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `klient` int NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `zamowienie_produkt` (
  `id_zamowione_produkty` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `zamowienie` int NOT NULL,
  `produkt` int NOT NULL,
  `ilosc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE dane_konta ADD FOREIGN KEY (login) REFERENCES dane_logowania(login);
ALTER TABLE dane_konta ADD FOREIGN KEY (typ_konta) REFERENCES typy_konta(id_typ);
ALTER TABLE koszyk ADD FOREIGN KEY (konto) REFERENCES dane_konta(id_konta);
ALTER TABLE koszyk_produkt ADD FOREIGN KEY (kosz) REFERENCES koszyk(id_kosz);
ALTER TABLE koszyk_produkt ADD FOREIGN KEY (produkt) REFERENCES produkt(id_produkt);
ALTER TABLE kategoria ADD FOREIGN KEY (nadkategoria) REFERENCES kategoria(id_kategoria);
ALTER TABLE produkt ADD FOREIGN KEY (kategoria) REFERENCES kategoria(id_kategoria);
ALTER TABLE galeria_zdjec ADD FOREIGN KEY (produkt) REFERENCES produkt(id_produkt);
ALTER TABLE zamowienie ADD FOREIGN KEY (klient) REFERENCES dane_konta(id_konta);
ALTER TABLE zamowienie_produkt ADD FOREIGN KEY (zamowienie) REFERENCES zamowienie(id_zamowienia);
ALTER TABLE zamowienie_produkt ADD FOREIGN KEY (produkt) REFERENCES produkt(id_produkt);
ALTER TABLE produkt_wlasciowsc ADD FOREIGN KEY (nazwa_wlasciowsc) REFERENCES wlasciowsc(id_wlasciowsc);
ALTER TABLE produkt_wlasciowsc ADD FOREIGN KEY (produkt) REFERENCES produkt(id_produkt);