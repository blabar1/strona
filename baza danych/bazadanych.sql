DROP database IF EXISTS `sklep`;
create database `sklep`;
use `sklep`;

CREATE TABLE `dane_logowania` (
  `login` varchar(45) NOT NULL PRIMARY KEY,
  `haslo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `typy_kont` (
  `id_typ` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nazwa` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `dane_kont` (
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
  `id_konta` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `koszyk_produkty` (
  `id_koszyk_produkty` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `koszyk_id_kosz` int NOT NULL,
  `id_produktu` int NOT NULL,
  `ilosc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `kategoria` (
  `id_kategoria` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nazwa` varchar(45) NOT NULL,
  `miniaturka` varchar(45) NOT NULL,
  `nadkategoria` int
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `produkty` (
  `id_produktu` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nazwa` varchar(45) NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `ilosc` int NOT NULL,
  `opis` TEXT NOT NULL,
  `kategoria` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `zamowienia` (
  `id_zamowienia` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_klienta` int NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `zamowione_produkty` (
  `id_zamowione_produkty` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_zamowienia` int NOT NULL,
  `id_produktu` int NOT NULL,
  `ilosc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE dane_kont ADD FOREIGN KEY (login) REFERENCES dane_logowania(login);
ALTER TABLE dane_kont ADD FOREIGN KEY (typ_konta) REFERENCES typy_kont(id_typ);
ALTER TABLE koszyk ADD FOREIGN KEY (id_konta) REFERENCES dane_kont(id_konta);
ALTER TABLE koszyk_produkty ADD FOREIGN KEY (koszyk_id_kosz) REFERENCES koszyk(id_kosz);
ALTER TABLE koszyk_produkty ADD FOREIGN KEY (id_produktu) REFERENCES produkty(id_produktu);
ALTER TABLE kategoria ADD FOREIGN KEY (nadkategoria) REFERENCES kategoria(id_kategoria);
ALTER TABLE produkty ADD FOREIGN KEY (kategoria) REFERENCES kategoria(id_kategoria);
ALTER TABLE zamowienia ADD FOREIGN KEY (id_klienta) REFERENCES dane_kont(id_konta);
ALTER TABLE zamowione_produkty ADD FOREIGN KEY (id_zamowienia) REFERENCES zamowienia(id_zamowienia);
ALTER TABLE zamowione_produkty ADD FOREIGN KEY (id_produktu) REFERENCES produkty(id_produktu);