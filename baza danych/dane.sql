INSERT INTO `typ_konta` (`nazwa`) VALUES
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
("Inteligentny dom", "pk13.jpg", 7),
("Zdrowie", "pk14.jpg", 7),
("Kable", "pk15.jpg", 8),
("Przejściówki", "pk16.jpg", 8);

INSERT INTO `produkt` (`nazwa`, `cena`, `ilosc`, `opis`, `miniaturka`, `kategoria`) VALUES
("Laptop ASUS TUF Dash F15", 5699, 25, "Opis ni ma jeszcze.", "p1.jpg", 9),
("Komputer Apple Mac Pro Xeon E5", 15149.99, 40, "Opis ni ma jeszcze.", "p2.jpg", 10),
("Nokia 3310", 1000000, 1, "Opis ni ma jeszcze.", "p3.jpg", 11),
("Zegarek Smartwatch Xiaomi Mi Watch", 249, 32, "Opis ni ma jeszcze.", "p4.jpg", 12),
("Elden Ring PC", 249, 100, "Opis ni ma jeszcze.", "p5.jpg", 13),
("Statyw Quadralite Verso 190", 99.99, 12, "Opis ni ma jeszcze.", "p6.jpg", 14),
("Lenovo IdeaPad Gaming 3 15ACH6", 3299, 40, "Klawiatura z dodatkowym podświetleniem umożliwia pracę nawet w ciemnościach, bez konieczności instalowania dodatkowych źródeł światła. Proste włączanie i wyłączanie podświetlenia wpływa na wygodę i szybkość pracy na komputerze. System Windows 10 łączy najlepsze cechy swoich poprzedników - Windows 7 oraz 8. Znane menu Start zostało rozbudowane, łącząc listę narzędzi z kafelkami. Nowa przeglądarka Edge pozwala przeglądać internet szybko i intuicyjnie, obsługa ekranów dotykowych ułatwi pracę, a wbudowane zabezpieczenia wzmocnią Twoje poczucie bezpieczeństwa.", "p7.jpg", 9),
("Lenovo IdeaPad 3 15ADA05 15,6 AMD Athlon 3050U", 1849, 10, "USB 3.1 to nowy standard, nowa jakość. Prędkość przesyłu danych do 10 Gbit/s jest dwukrotnie większa niż standardu USB 3.0, co pozwala na jeszcze szybszą komunikację między urządzeniami. Przy najwyższej prędkości przeniesienie zawartości 32 GB pendrive'a zajmie jedynie 26 sekund! Zainstalowana fabrycznie pamięć RAM o pojemności 8 GB to gwarancja szybkiej i płynnej pracy. Bez żadnych problemów możesz uruchomić kilka aplikacji jednocześnie oraz grać w bardziej wymagające gry i korzystać z programów graficznych i multimediów.", "p8.jpg", 9),

("Samsung Galaxy M12", 599.00, 12, "Samsung Galaxy M12  to połączenie nowoczesnego wyglądu i technologii. Rób zdjęcia, wykorzystując do tego system czterech aparatów. Wybierz obiektyw, w zależności od aktualnych potrzeb. Przestronny, 6,5” ekran HD+ oferuje płynny, wysokiej jakości obraz, wyświetlając go z częstotliwością odświeżania 90 Hz. Nie obawiaj się, że w trakcie dnia zabraknie Ci energii do dalszego działania. Pojemna bateria 5000 mAh wystarcza na bardzo długo.", "p9.jpg", 11),
("Huawei Watch Fit ", 349, 32, "Dzięki smartwatchowi Huawei Watch Fit zyskasz większą kontrolę zarówno nad swoimi osiągnięciami treningowymi, jak i nad własnym organizmem", "p10.jpg", 12),
("PC The Witcher 3: Wild Hunt", 66, 29, "Gra The Witcher 3: Wild Hunt edycja Game of the Year zawiera podstawową wersję gry The Witcher 3: Wild Hunt oraz wszystkie dodatki, które miały swoją premierę. Dodatki, które zawiera pakiet to: Krew i Wino oraz Serca z Kamienia. Ponadto otrzymasz wszystkie dostępne bronie oraz zbroje, które możesz odblokować w toku gry.", "p11.jpg", 13),
("Mozos MKIT-900PRO", 169, 12, "Mozos MKIT-900PRO to zestaw, który sprawdzi się dla każdej osoby, która zaczyna swoją przygodę z profesjonalnym nagrywaniem dźwięku a także dla graczy. Mikrofon wysokiej klasy o charakterystyce kardioidalnej, wysokiej mocy wyjściowej oraz niskiemu poziomowi szumów własnych podniesie jakość nagrań, dzięki czemu Twoi słuchacze usłyszą wyraźnie każde słowo. Urządzenie nie wymaga instalacji dodatkowych sterowników. Wystarczy podpiąć mikrofon do portu USB i gotowe. Dzięki temu w ciągu kilku chwil będzie on gotowy do użycia. Natomiast malowanie lakierem premium z dużą odpornością na chemiczne związki pozwala być pewnym długiej eksploatacji bez śladów na mikrofonie.", "p12.jpg", 14),
("Bloodborne - PlayStation Hits PS4 / PS5", 79, 3, "Na tropie własnych koszmarów. Samotny podróżnik. Przeklęte miasto. Zabójcza tajemnica, pochłaniająca wszystko, z czym się zetknie. Zmierz się ze swoimi obawami i wejdź do popadającego w ruinę miasta Yharnam, przeklętego miejsca, dotkniętego straszliwą epidemią. Zbadaj jego mroczne zakamarki, walcz o życie, używając broni palnej i białej, oraz odkryj tajemnice, które zmrożą ci krew w żyłach... ale być może ocalą ci skórę...", "p13.jpg", 13),
("Activision DESTINY: The Taken King Legendary Edition", 179, 6, "Destiny: The Taken King to kolejna wspaniała przygoda w uniwersum strzelanki Destiny. Rozszerzenie wprowadza nową kampanię fabularną i zadania, nowych przeciwników, nowe lokacje, nowe mapy do trybów Strikes i Crucible, nowy Raid, który przetestuje Twoje umiejętności, i jeszcze więcej. Aby sprostać tym wyzwaniom na Strażników czekają trzy nowe, potężne podklasy i ogromny arsenał broni, pancerzy i ekwipunku.", "p14.jpg", 13),
("Doom Eternal PC", 180, 666, "Kontynuacja dynamicznych gier FPS z cyklu Doom, z nowymi umiejętnościami Doom Slayera, rozszerzonym arsenałem broni, trybami gry wieloosobowej i nowymi przeciwnikami.", "p15.jpg", 13),
("Elden Ring Collector's Edition - PlayStation 5",1299, 5, "Złoty Porządek został rozbity. Powstań, zmatowieńcze, i pozwól się prowadzić łasce, by posiąść moc Eldeńskiego Kręgu i zostać Eldeńskim Władcą na Ziemiach Pomiędzy.

ELDEN RING to gra RPG akcji w konwencji fantasy stworzona przez FromSoftware Inc. i wyprodukowana przez BANDAI NAMCO. Fabuła tego największego jak do tej pory tytułu FromSoftware została osadzona w świecie pełnym tajemnic i niebezpieczeństw.

 

Edycja Kolekcjonerska zawiera:

· Edycję premierową gry

· Cyfrową ścieżkę dźwiękową

· Figurkę Malenii – Miecza Miquelli (23 cm)

· Wyjątkowy steelbook

· 40 stronicowy artbook w twardej oprawie", "p16.jpg", 13),


("Intel Core i5-10400F", 699, 29, "Poznaj moc do dziesiątej potęgi. Nowy procesor Intel® Core™ i5-10400F z rodziny Comet Lake zapewnia wysoką wydajność, która przekłada się na wzrost produktywności i fantastyczną rozrywkę. Intel Core i5 10-generacji oferuje m.in. częstotliwość dochodzącą do 4.3 GHz w trybie turbo, 6 rdzeni, 12 wątków, a także inteligentną optymalizację systemu. Odkryj nowe ultramożliwości z procesorem Intel® Core™ i5-10400F.", "p17.jpg", 15),
("AMD Ryzen 7 5800X", 1779, 9, "Jednostka AMD Ryzen 7 5800X posiada 8 rdzeni i 16 wątków, gotowych do pracy przy maksymalnym obciążeniu w grach i specjalistycznych aplikacjach. Pamięć cache tego procesora liczy łącznie 36 MB, a bazowe taktowanie rdzeni otwiera częstotliwość 3,80 GHz, mogąca sięgać aż do 4,70 GHz w trybie Turbo. Moc jednostki może jednak wzrosnąć dzięki odblokowanej możliwości podkręcania. Czas na ogromną moc wspartą przez nowatorską architekturę Zen 3.", "p18.jpg", 15),
("AMD Ryzen 5 5600X", 1439, 12, "Jednostka AMD Ryzen 5 5600X posiada 6 rdzeni i 12 wątków, gotowych do pracy przy maksymalnym obciążeniu w grach i specjalistycznych aplikacjach. Pamięć cache tego procesora liczy łącznie 35 MB, a bazowe taktowanie rdzeni otwiera częstotliwość 3,70 GHz, mogąca sięgać aż do 4,60 GHz w trybie Turbo. Moc jednostki może jednak wzrosnąć dzięki odblokowanej możliwości podkręcania. Czas na ogromną moc wspartą przez nowatorską architekturę Zen 3.", "p19.jpg", 15),
("Acer Nitro 50 i5-11400F/16GB/512/W10 GTX1660S", 4699, 3, "Drapieżny wygląd komputera Acer Nitro 50 pozwala podkreślić jego gamingowy charakter. W swoim wnętrzu skrywa wydajny, nowoczesny procesor oraz dedykowaną kartę graficzną. Z takim zapleczem technologicznym nie musisz już się martwić o płynność działania czy czasy reakcji. Układ chłodzenia o wysokiej sprawności pozwoli na wielogodzinne sesje wraz z Twoimi ulubionymi grami. Stawiając na Acer Nitro 50, stawiasz na zwycięstwo.", "p20.jpg", 10),
("Gigabyte GeForce RTX 3060 Ti GAMING OC LHR 8GB GDDR6", 4599, 4, "Postaw na minimalizm zorientowany na gaming. Gigabyte GeForce RTX 3060 Ti GAMING OC LHR 8GB GDDR6 to wydajna konstrukcja oparta na możliwościach architektury NVIDIA Ampere. Zapewnia więc wyjątkowe osiągi, pozwalające doświadczyć fotorealistycznej grafiki z Ray Tracingiem oraz wysokiego poziomu FPS dzięki technologii DLSS. Podświetlane logo Gigabyte, zgodne z RGB Fusion 2.0, pozwoli Ci lepiej spersonalizować wygląd swojej gamingowej konfiguracji. Karty graficzne LHR (Lite Hash Rate) sprzętowo ograniczają wydajność kopania kryptowaluty Ethereum.", "p21.jpg", 16),
("MSI GeForce RTX 3060 Ti GAMING X LHR 8GB GDDR6",4799, 5, "Graj na najwyższym poziomie detali i FPS dzięki architekturze NVIDIA Ampere. Ta wyposażona w 8GB pamięci GDDR6 oraz nowatorskie rozwiązania graficzne konstrukcja pozwoli Ci korzystać z technologii takich jak Ray Tracing czy DLSS. MSI GeForce RTX 3060 Ti GAMING X LHR oferuje także układ chłodzenia najwyższej klasy i bogate możliwości personalizacji. Karty graficzne LHR (Lite Hash Rate) sprzętowo ograniczają wydajność kopania kryptowaluty Ethereum.", "p22.jpg", 16),
("Gigabyte Radeon RX 6900 XT GAMING OC 16GB GDDR6", 8299, 3, "Graj w rozdzielczościach 4K nie obawiając się spadków płynności. Gigabyte Radeon RX 6900 XT GAMING OC to unikalne połączenie GPU w architekturze AMD RDNA 2, 16GB pamięci GDDR6 oraz wydajnego chłodzenia Windforce 3X. Dzięki temu karta zapewnia wysoką liczbę FPS, utrzymywaną stabilnie przy nawet najbardziej wymagających grach. Korzystaj przy tym z unikalnych technologii AMD i sprzętowego Ray Tracingu, które pozwolą Ci doświadczyć grafiki o fotorealistycznej jakości.", "p23.jpg", 16),
("ASUS Radeon RX 6900 XT TUF GAMING OC Edition 16GB GDDR6", 9399, 6, "Wykorzystaj możliwości nowatorskiej architektury AMD RDNA 2, wspierane przez 16 GB szybkiej pamięci GDDR6. ASUS Radeon RX 6900 XT TUF GAMING OC Edition to potężna karta należąca do niezawodnej i sprawdzonej serii TUF. Pozwoli Ci ona cieszyć się niezrównaną wydajnością w grach i wielu innych zastosowaniach, umożliwiając przy tym korzystanie z unikalnych technologii graficznych. Uruchom sprzętowy Ray Tracing, nie obawiając się spadków płynności i w pełni wykorzystaj możliwości rozwiązań od AMD.", "p24.jpg", 16),

("Acer Nitro VG242YPBMIIPX czarny HDR400", 799, 56, "Monitor dedykowany graczom. Wyświetlacz cechuje się dobrym pokryciem kolorów. To w połączeniu z poprawną kalibracją fabryczną skutkuje obrazem z żywymi i nasyconymi kolorami. Producent mówi, że natywne odświeżanie 120 Hz można podbić do 165 Hz. Wymaga to ustawienia niestandardowej rozdzielczości i może skutkować artefaktami na ekranie. Poza tym podświetlenie panelu nie jest równomierne. Spowodowane jest to słabo dopasowaną ramką dolną, przez którą przebija się światło z lampy podświetlania. Na plus wypada menu OSD. To jest łatwe w obsłudze, pozwala na dokładne dopasowanie obrazu dzięki, chociażby suwakom kolorów w 6 osiach. Dodatkowo zapiszesz swoje ustawienia na jednym z 3 profili.", "p25.jpg", 17),
("Dell S2721DGFA nanoIPS HDR", 1899, 5, "Zachwycający design oraz niezwykle bogata funkcjonalność – to czyni z monitora Dell S2721DGFA narzędzie, dzięki któremu odkryjesz gaming na nowo. Solidna konstrukcja połączona z panelem IPS WQHD oferuje najlepsze doznania z gry w każdym calu. Bogate kolory, najdrobniejsze szczegóły i niezwykle szybki czas reakcji to cechy, dzięki którym odniesiesz sukces na wirtualnych polach bitwy. Poznaj gamingowy monitor Dell S2721DGFA.", "p26.jpg", 17),
("Samsung Odyssey C27G75TQSRX Curved Quantum Do", 2299, 55, "Samsung Odyssey jest dedykowany graczom. Cechuje się zakrzywieniem ekranu dodającym głębi i zmniejszającym zmęczenie oczu. Nasycenie i świetne odwzorowanie kolorów sprawia, że obraz wygląda realistycznie. Monitor cierpi jednak na nierównomierne podświetlenie matrycy, wysoki pobór mocy i nagrzewanie ekranu. Odświeżanie 240Hz sprawia, że w dynamicznych grach obraz nie smuży i jest pełen szczegółów, a tryb HDR poprawia widoczność w jasnych i ciemnych scenach.", "p27.jpg", 17),
("HP Laser MFP 135w",719, 33, "HP Laser MFP 135w to idealne rozwiązanie, gdy musisz szybko wydrukować bądź skopiować dokumenty przed wyjściem albo prowadzisz małą firmę i potrzebujesz od czasu do czasu skorzystać ze skanera. Pojemny podajnik papieru, duża szczegółowość druku i oszczędność tonera świetnie sprawdzą się w domu i małym biurze. Dodatkowo ekonomia pracy i łatwa wymiana elementów eksploatacyjnych zredukują koszty obsługi.", "p28.jpg", 18),
("HP OfficeJet Pro 6230",335, 22, "HP OfficeJet Pro 6230 to idealne rozwiązanie, gdy musisz szybko wydrukować dokumenty przed wyjściem albo prowadzisz małą firmę i potrzebujesz od czasu do czasu skorzystać z drukarki. Pojemny podajnik papieru, duża szczegółowość druku i oszczędność tuszu świetnie sprawdzą się w domu i małym biurze. Dodatkowo ekonomia pracy i łatwa wymiana elementów eksploatacyjnych zredukują koszty obsługi.", "p29.jpg", 18),
("Samsung QE50Q60AA", 2699, 21, "Samsung QE50Q60AA to telewizor 4K, dzięki któremu wkroczysz do świata doskonałego obrazu, dźwięku i rozrywki. Połączenie komponentów wysokiej klasy, takich jak procesor Quantum 4K Lite czy matrycy QLED daje ogromne możliwości. Technologia kropki kwantowej (Quantum Dot) powoduje, że wyświetlany obraz jest niezwykle głęboki, pełen detali i przejrzystości. Zakres ponad miliarda kolorów w 100% zaskoczy Cię i sprawi, że zachwycisz się tym, co zobaczysz. Ponadto, dzięki innowacyjnej technologii podświetlania Dual LED z ciepłą i chłodną tonacją, kontrast będzie jeszcze wyraźniejszy a kolory głębsze.", "p30.jpg", 19),

("Xiaomi Mi LED TV P1 43", 1490, 16, "Wkrocz do nowego świata rozrywki z Xiaomi Mi TV P1. Bezramkowy projekt dostarczy wyjątkowych, niczym nie zakłóconych wrażeń. Jakość 4K oraz wyświetlacz LED oferuje obraz zbliżony do naturalnego. Pełnia nasyconych kolorów oraz głębi będzie zachwycać za każdym razem. Technologia HDR wydobędzie szczegóły, ostrość oraz kontrast, dzięki czemu zobaczysz jeszcze więcej. Natomiast funkcja MEMC zadba o płynność i wyrazistość każdej dynamicznej sceny. Dodatkowo, kodeki Dolby Audio i DTS 4K zapewnią prawdziwie kinowe brzmienie. Takie rozwiązania sprawią, że nie umknie Ci żaden detal podczas seansu.", "p31.jpg", 19),
("LG OLED55A13LA", 4470, 2, "Samoświecące piksele telewizora LG OLED55A13LA rozświetlą Twój świat, a 55-calowy ekran stanie się portalem, który przeniesie Cię w centrum interaktywnej rozrywki. Filmy, seriale, gry i wszystkie inne treści nabiorą spektakularnej wyrazistości i realizmu. Doskonała czerń oraz idealny kontrast sprawią, że kolory nabiorą życia, a obraz głębi. Dodatkowo telewizor OLED55A13LA cechuje świetny dźwięk w technologii Dolby Atmos, który swoją przestrzennością wzmacnia wrażenie bycia częścią akcji toczącej się na ekranie. Co więcej, inteligentna technologia Dolby Vision IQ na podstawie warunków oświetlenia oraz wyświetlanych treści dostosuje jasność ekranu, kolory i kontrast.", "p32.jpg", 19),
("Logitech 2.1 Z333", 199, 16, "Moc szczytowa 80 W/moc RMS 40 W zapewnia maksymalną głośność dzięki dwóm głośnikom satelitarnym i dużemu subwooferowi. Ciesz się bogatym, wyraźnym i donośnym dźwiękiem.", "p33.jpg", 20),
("Creative Pebble Pluse",129, 23, "Pomimo swoich niewielkich rozmiarów, Creative Pebble Plus to głośniki o niezwykle dużej mocy. Proste, wykonane z dbałością o szczegóły urządzenie idealnie łączy w sobie minimalizm i wysokie osiągi, wtapiając się w miejsce użytkowania. Co ważne, wymagają do pracy wyłącznie podłączenia do portu USB 2.0. A jeżeli zechcesz skorzystać z trybu High Gain i pełnej mocy wyjściowej 8W RMS, podłącz je do zewnętrznego zasilacza 5V/2A.", "p34.jpg", 20),
("Logitech 5.1 Z906 Surround Sound Speakers",1199, 12, "Stworzony w celu zapewniania najbardziej wciągającego dźwięku przestrzennego natychmiast po wyjęciu z pudełka. Ten zestaw głośników 5.1 został dostrojony zgodnie z najwyższymi standardami, aby uzyskać certyfikat THX. Zaprojektowano go w celu dekodowania ścieżek dźwiękowych Dolby Digital i DTS, przez co zapewnia doskonałą jakość dźwięku.", "p35.jpg", 20),
("Google Home Inteligentny Głośnik OEM", 149, 32, "Głośnik Google Home to Twój osobisty asystent w domu. Zadawaj mu pytania i wydawaj polecenia. Dzięki obsłudze kilku użytkowników potrafi rozpoznawać i rozróżniać głos.

Mów do niego. Wystarczy powiedzieć: 'OK Google', a głośnik Google Home będzie oczekiwał na Twoje polecenia. To jakość Google, którą znasz.

Dzięki swojemu uniwersalnemu wyglądowi, Google Home będzie pasował do wielu pomieszczeń, a wymienialne podstawy pozwolą Ci go jeszcze lepiej dopasować do własnych upodobań.

Obudowa głośnika Google Home została wyposażona w panel dotykowy, dzięki któremu będziesz go mógł kontrolować.", "p36.jpg", 21),
("TP-Link Tapo C200 2Mpx 1080P LED IR (dzień/noc) obrotowa", 129, 20, "Obrotowa kamera Wi-Fi do monitoringu domowego, Tapo C200 zapewnia zdumiewającą jakość wideo. Obraz w rozdzielczości 1080P sprawi, że wszystkie twoje nagrania będą niezwykle wyraźne. Co więcej, kamera wykryje podejrzany ruch, nawet w nocy i natychmiast dostaniesz powiadomienie. Włącz alarm, a z łatwością odstraszysz nieproszonych gości. Natomiast wbudowany mikrofon i głośnik umożliwią skuteczną komunikację.", "p37.jpg", 21),
("Belkin SoundForm Elite Czarny (AirPlay)", 699, 34, "Mocny i krystalicznie czysty dźwięk zapewniający doskonałe doznania z inteligentnym głośnikiem Belkin SoundForm Elite. Firma Belkin nawiązała współpracę z ekspertami w dziedzinie Hi-Fi z firmy Devialet, aby połączyć niezwykłą technologię dźwięku z wielokrotnie nagradzanym wzornictwem i funkcją ładowania bezprzewodowego. Korzystaj z AirPlay aby odtwarzać muzykę i uzyskać oszałamiający dźwięk, który wypełni każde pomieszczenie w domu.", "p38.jpg", 21),

("Withings BPM Connect bezprzewodowy", 449, 4, "Withings BPM Connect to bezprzewodowy, inteligentny monitor ciśnienia tętniczego, którego możesz używać w swoim domu. Urządzenie jest precyzyjne i przyjazne w obsłudze. Przeznaczone jest do współpracy ze smartfonami z zainstalowaną aplikacją Health Mate dostępna na systemy operacyjne iOS i Android. Synchronizacja jest możliwa dzięki wbudowanym modułom Bluetooth i Wi-Fi.
Urządzenie pozwala dokonywać prawidłowych pomiarów ciśnienia tętniczego i pulsu. Po zakończeniu pomiaru otrzymasz natychmiast wyniki oznaczone kolorami na wyświetlaczu monitora BPM Connect oraz w aplikacji. Wyniki możesz w łatwy sposób udostępnić swojemu lekarzowi.", "p39.jpg", 22),

("Polar Monitor Pracy Serca H10 M-XXL", 329.99, 76, "Nadajnik Polar H10 to najlepszy wybór, jeśli zależy Ci na dokładności pomiaru. Połącz nadajnik z kompatybilnym sprzętem treningowym i monitoruj tętno z maksymalną precyzją.
Nadajnik Polar H10 jest kompatybilny z najlepszymi aplikacjami pomagającymi dbać o kondycję, sprzętem sportowym i wieloma innymi urządzeniami Bluetooth.
Połącz nadajnik ze swoją ulubioną aplikacją lub kompatybilnym sprzętem treningowym i tak zoptymalizuj trening, by osiągnąć założone cele.
Oferowany nadajnik jest przewidziany dla osób noszących rozmiary w przedziale M-XXL.", "p40.jpg", 22),
("Silver Monkey Kabel HDMI 2.0 - HDMI 1,5m", 16.99, 11, "Wybierz kabel HDMI marki Silver Monkey i wykorzystaj pełen potencjał obrazu w 4K. To wysokiej jakości akcesorium ma 1,5 metra długości oraz solidne wtyczki z pozłacanymi końcówkami. Kabel HDMI-HDMI Silver Monkey wspiera ponadto standard HDMI 2.0, transmitując obraz i dźwięk w doskonałej jakości. Co więcej, współpracuje z telewizorami, monitorami, laptopami, odtwarzaczami Blu-Ray, jak i konsolami wideo. Otwórz się na nowe doznania wizualne.", "p41.jpg", 23),
("Silver Monkey Kabel USB 3.0 - USB-C 1,2m", 22.99, 20, "Postaw na szybkość i wybierz kabel Silver Monkey z symetrycznym wtykiem USB-C i portem USB 3.0. jest kompatybilny z każdym urządzeniem posiadającym port USB-C, jak i złącze w Thunderbolt, obecny w komputerach Apple. Z jego pomocą błyskawicznie prześlesz dane albo naładujesz urządzenie mobilne. Co więcej, dzięki długości 1,2 metra kabel bez trudu mieści się w torbie, plecaku, damskiej torebce, a nawet w kieszeni kurtki.", "p42.jpg", 23),
("Unitek Kabel HDMI 2.1 - HDMI 1,5m (8K/60Hz, 4K/120Hz)", 44.99, 12, "Przewód HDMI marki Unitek wykonano z najwyższej jakości materiałów, aby zapewnić kompatybilność z technologią HDMI 2.1, oferującą przepustowość na poziomie nawet 48 Gb/s. Zapewnia ona krystalicznie czysty i wyraźny obraz wyświetlany w rozdzielczościach 8K/60Hz oraz 4K/120Hz. Ponadto wspiera funkcje Dynamic HDR, Dolby Vision, HDR 10 czy 3D Video.

Pozłacane wtyki z aluminiowym wykończeniem oraz w 100% miedziany rdzeń, z dołączoną ochroną przed zakłóceniami EMI czy RFI, zapewniają przesyłanie stabilnego sygnału pomiędzy wszystkimi kompatybilnymi urządzeniami.", "p43.jpg", 23),

("Silver Monkey Adapter HDMI - DVI", 19.99, 4, "Adapter Silver Monkey HDMI - DVI pozwoli Ci użyć kabla HDMI z urządzeniami wyposażonymi w złącze DVI. Przejściówkę wyposażono w żeńskie złącze HDMI oraz w męskie złącze DVI-D 24+1-pin (Dual Link).

Urządzenie wykonano z wysokiej jakości materiałów, dzięki czemu możesz liczyć na jego niezawodność, a pozłacane styki zagwarantują przesyłanie obrazu bez żadnych zakłóceń.", "p44.jpg", 24),

("Unitek Adapter USB-A - USB-C 3.1 Gen1", 24.99, 56, "Adapter Unitek USB-A - USB-C 3.1 ma obudowę wykonaną z trwałego stopu cynku, dzięki czemu jest niezwykle trwały i wytrzymały. Dodatkowo ma kompaktowe rozmiary i specjalny otwór, dzięki czemu łatwo przymocujesz go np. do kluczy czy torby.", "p45.jpg", 24),
("Intel Core i9-12900K", 2999, 15, "Poznaj procesory Intel Core dwunastej generacji do komputerów stacjonarnych, stworzone do gamingu nowej generacji. Bezkompromisowe granie i wielozadaniowość umożliwia hybrydowa i bardziej wydajna architektura odblokowanego procesora Intel Core i9-12900K, korzystająca z dwóch rodzajów rdzeni: 8 wysoko wydajnych (Performance Core) i 8 energooszczędnych (Efficient Core).", "p46.jpg", 15);
INSERT INTO `galeria_zdjec`(`plik`, `produkt`) VALUES ("p1.jpg",1), ("p2.jpg",1), ("p7-2.jpg",7), ("p8-2.jpg",8), ("p8-3.jpg",8), ("p10-2.jpg",10), ("p13-2.jpg",13), ("p13-3.jpg",13), ("p13-4.jpg",13), ("p15-2.jpg",15), ("p20-2.jpg",20), ("p20-3.jpg",20), ("p21-2.jpg",21), ("p22-2.jpg",22), ("p23-2.jpg",23), ("p24-2.jpg",24), ("p25-2.jpg",25), ("p26-2.jpg",26), ("p27-2.jpg",27), ("p28-2.jpg",28), ("p28-3.jpg",28), ("p28-4.jpg",28), ("p30-2.jpg",30), ("p31-2.jpg",31), ("p32-2.jpg",32), ("p36-2.jpg",36), ("p36-3.jpg",36), ("p37-2.jpg",37), ("p38-2.jpg",38);
INSERT INTO `dostawa`(`nazwa`, `cena`) VALUES ("Kurier – InPost, UPS, FedEx, DTS lub Poczta Polska",25.00),
("Odbiór osobisty w salonie", 0),
("Paczkomaty 24/7",16.99),
("Punkty odbioru – Poczta Polska, Żabka, Ruch, Orlen i inne",10.99);