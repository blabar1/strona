INSERT INTO `typy_kont` (`nazwa`) VALUES
("uzytkownik"),
("pracownik"),
("admin");

INSERT INTO `kategoria` (`nazwa`, `miniaturka`, `nadkategoria`) VALUES
("Laptopy i komputery", "kg1.jpg", NULL),
("Smartfony i smartwatche", "kg2.jpg", NULL),
("Gaming i streaming", "kg3.jpg", NULL),
("Podzespoły komputerowe", "kg4.jpg", NULL),
("Urządzenia perfyeryjne", "kg5.jpg", NULL),
("TV i audio", "kg6.jpg", NULL),
("Smarthome i lifestyle", "kg7.jpg", NULL),
("Akcesoria", "kg8.jpg", NULL),
("Laptopy", "pk1.jpg", 1),
("Komputery PC", "pk2.jpg", 1),
("Smartfony", "pk3.jpg", 2),
("Smartwatche", "pk4.jpg", 2),
("Gaming", "pk5.jpg", 3),
("Streaming", "pk6.jpg", 3),
("Procesory", "pk7.jpg", 4),
("Karty graficzne", "pk8.jpg", 4),
("Monitory", "pk9.jpg", 5),
("Drukarki", "pk10.jpg", 5),
("Telewizory", "pk11.jpg", 6),
("Głośniki", "pk12.jpg", 6),
("Inteligentny dom", "pk11.jpg", 7),
("Zdrowie", "pk12.jpg", 7),
("Kable", "pk11.jpg", 8),
("Przejściówki", "pk12.jpg", 8);

INSERT INTO `produkty` (`nazwa`, `cena`, `ilosc`, `opis`, `miniaturka`, `kategoria`) VALUES
("Laptop ASUS TUF Dash F15", 5699, 25, "Opis ni ma jeszcze.", "p1.jpg", 9),
("Komputer Apple Mac Pro Xeon E5", 15149.99, 40, "Opis ni ma jeszcze.", "p2.jpg", 10),
("Nokia 3310", 1000000, 1, "Opis ni ma jeszcze.", "p3.jpg", 11),
("Zegarek Smartwatch Xiaomi Mi Watch", 249, 32, "Opis ni ma jeszcze.", "p4.jpg", 12),
("Elden Ring PC", 249, 100, "Opis ni ma jeszcze.", "p5.jpg", 13),
("Statyw Quadralite Verso 190", 99.99, 12, "Opis ni ma jeszcze.", "p5.jpg", 14);