<?php
session_start();
if (isset($_GET['category']))
    $_SESSION['category'] = $_GET['category'];
else
    $_SESSION['category'] = 0;
if (isset($_GET['search']))
    $_SESSION['search'] = $_GET['search'];
else
    $_SESSION['search'] = "%";
?>
<!-- menu,header-->

<div class="c-header">

    <nav class="navbar navbar-inverse" style="border-radius:0px; margin-bottom:0px;">
        <div class="o-wrapper">

            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="c-menu-icon__element-wrapper">
                        <a href="index.php">
                            <div class="c-menu-icon__element"><img class="c-menu-icon" src="images/ikonka.png"></div>
                        </a>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">

                        <li class="dropdown">
                            <a class="dropdown" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="input-group">
                                <form action="categoryProducts.php" method="GET">
                                    <div class="input-group-container">
                                        <div class="input-search">
                                            <input type="search" name="search" id="form1" class="input-group-container__search search-responsive form-control" placeholder="Szukaj"> <button type="submit" class="btn btn-dark">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                        <select name="category" class="input-group-container__category">
                                            <?php
                                            $query = $conn->query("SELECT id_kategoria, nazwa FROM kategoria WHERE nadkategoria is NULL");
                                            $result = $query->fetchAll(PDO::FETCH_ASSOC);
                                            print("<option value='0'>Wszystko</option>");
                                            foreach ($result as $row) {
                                                if ($row['id_kategoria'] == $_SESSION['category'])
                                                    print("<option value='" . $row['id_kategoria'] . "' selected>" . $row['nazwa'] . "</option>");
                                                else
                                                    print("<option value='" . $row['id_kategoria'] . "'>" . $row['nazwa'] . "</option>");
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </form>

                            </div>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="display: flex!important;
    align-content: center!important;
    align-items: center!important;">
                        <?php
                        if (empty($_SESSION['user'])) {
                            print("<li><a href='login.php'><span class='glyphicon glyphicon-user'></span> Zaloguj się</a></li>");
                        } else {
                            $user = $conn->query("SELECT imie FROM dane_konta WHERE mail ='" . $_SESSION['user'] . "' LIMIT 1");
                            $user_imie = $user->fetch(PDO::FETCH_ASSOC);
                            print('<li class="dropdown">
                            <a class="dropdown" data-toggle="dropdown" href="#">Witaj ponownie ' . $user_imie['imie'] . ' <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Twoje Zamówienia</a></li>
                                <li><a href="konto.php">Ustawienia konta</a></li>
                                <li><a href="logout.php">Wyloguj się</a></li>
                            </ul>
                        </li>');
                        }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="c-menu-element-basket">
                                    <div class="svg-photo-basket">
                                        <div class="svg-photo-basket">
                                            <div class="c-menu-element-basket__dot-container">
                                                <div class="c-menu-element-basket__dot">
                                                    <span>4</span>
                                                    <!-- maciek tutaj pokazuje sie ilosc w koszyku -->
                                                </div>
                                            </div><svg class="svg-menu-basket" style="width: 100%;height: 100%;" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22 22a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm0-1a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm-10 1a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm0-1a3 3 0 1 1 0 6 3 3 0 0 1 0-6zM8.098 6H4.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .488.393l3.5 16a.5.5 0 1 1-.976.214L8.098 6zM9.5 9a.5.5 0 0 1 0-1h15a.5.5 0 0 1 .488.608l-2 9A.5.5 0 0 1 22.5 18h-11a.5.5 0 1 1 0-1h10.599l1.778-8H9.5zm2 13v-1H22v1H11.5z"></path>
                                            </svg>
                                        </div>

                                    </div>

                                    <div class="c-menu-element-basket__text">Koszyk</div>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- menu hidding -->
    <div id="c_menu_list_hidding">
        <div class="o-wrapper__menu__hidding">
            <div class="c-menu__list ">

                <div class="cd-morph-dropdown">
                    <div class="show">
                        <a href="#0" class="nav-trigger navbar-toggle" id="not active" style="top:10px; border: 1px solid #333; border-radius: 4px;">
                            <span class="icon-bar" style="background-color:white;"></span>
                            <span class="icon-bar" style="background-color:white;"></span>
                            <span class="icon-bar" style="background-color:white;"></span>
                        </a>
                    </div>
                </div>
                <header class="cd-morph-dropdown">

                    <nav class="main-nav">
                        <ul>
                            <a href="/strona/categoryProducts.php?category=1">
                                <li class="has-dropdown links" data-content="1">

                                    <div class="svg-photo-wrap">
                                        <div class="svg-photo">
                                            <svg class="svg-menu" style="width: 100%;height: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M 21.6 2 h -7.2 c -0.8 0 -1.4 0.6 -1.4 1.4 V 7 c 0 0.3 0.2 0.5 0.5 0.5 s 0.5 -0.2 0.5 -0.5 V 3.4 c 0 -0.2 0.2 -0.4 0.4 -0.4 h 7.2 c 0.2 0 0.4 0.2 0.4 0.4 v 17.2 c 0 0.2 -0.2 0.4 -0.4 0.4 h -0.8 c -0.3 0 -0.5 0.2 -0.5 0.5 s 0.2 0.5 0.5 0.5 h 0.8 c 0.8 0 1.4 -0.6 1.4 -1.4 V 3.4 c 0 -0.8 -0.6 -1.4 -1.4 -1.4 Z"></path>
                                                <path d="M 21.1 5.9 v -0.7 c 0 -0.7 -0.5 -1.2 -1.2 -1.2 h -0.7 c -0.7 0 -1.2 0.5 -1.2 1.2 v 0.7 c 0 0.7 0.5 1.2 1.2 1.2 h 0.7 c 0.7 0 1.2 -0.5 1.2 -1.2 Z m -1 0 c 0 0.1 -0.1 0.2 -0.2 0.2 h -0.7 c -0.1 0 -0.2 -0.1 -0.2 -0.2 v -0.7 c 0 -0.1 0.1 -0.2 0.2 -0.2 h 0.7 c 0.1 0 0.2 0.1 0.2 0.2 v 0.7 Z M 20.5 11.5 c 0 -0.3 -0.2 -0.5 -0.5 -0.5 h -1 c -0.3 0 -0.5 0.2 -0.5 0.5 s 0.2 0.5 0.5 0.5 h 1 c 0.3 0 0.5 -0.2 0.5 -0.5 Z M 19 9 c -0.3 0 -0.5 0.2 -0.5 0.5 s 0.2 0.5 0.5 0.5 h 1 c 0.3 0 0.5 -0.2 0.5 -0.5 S 20.3 9 20 9 h -1 Z M 18 17.3 V 10 c -0.1 -1.2 -1.1 -2.2 -2.3 -2.2 H 4.3 C 3 7.9 2 8.8 2 10.1 v 7.2 c -0.3 0.3 -1 1.3 -1.7 2.4 c -0.3 0.4 -0.3 1 -0.1 1.5 c 0.3 0.5 0.9 0.8 1.6 0.8 h 16.4 c 0.8 0 1.4 -0.3 1.7 -0.9 c 0.2 -0.5 0.1 -1 -0.2 -1.4 c -0.7 -1 -1.4 -2 -1.7 -2.4 Z M 4.3 8.9 h 11.4 c 0.7 0 1.2 0.5 1.3 1.2 V 17 H 3 v -6.9 c 0 -0.7 0.5 -1.2 1.3 -1.2 Z M 19 20.7 c -0.1 0.2 -0.3 0.3 -0.8 0.3 H 1.8 c -0.4 0 -0.6 -0.1 -0.7 -0.3 c -0.1 -0.1 -0.1 -0.3 0 -0.4 c 0.7 -1 1.3 -1.9 1.6 -2.3 h 14.5 c 0.3 0.4 1 1.3 1.7 2.3 c 0.1 0.1 0.1 0.3 0.1 0.4 Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="has-dropdown-title">
                                        <div class="has-dropdown-title__title">Laptopy i komputery</div>
                                    </div>
                            </a>
                            </li>
                            <a href="/strona/categoryProducts.php?category=2">
                                <li class="has-dropdown links" data-content="2">

                                    <div class="svg-photo-wrap">
                                        <div class="svg-photo">
                                            <svg class="svg-menu" style="width: 100%;height: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M 21.5 11.8 v -1.4 c 0 -0.3 -0.2 -0.5 -0.5 -0.5 v -0.4 c 0 -0.8 -0.5 -1.4 -1.2 -1.5 c -0.5 -0.6 -0.8 -1.3 -0.8 -2 c 0 -0.3 -0.2 -0.5 -0.5 -0.5 s -0.5 0.2 -0.5 0.5 c 0 0.7 0.2 1.4 0.5 2 h -3.1 c 0.4 -0.6 0.6 -1.3 0.6 -2 c 0 -0.3 -0.2 -0.5 -0.5 -0.5 s -0.5 0.2 -0.5 0.5 c 0 0.7 -0.3 1.4 -0.8 2 c -0.7 0.1 -1.2 0.7 -1.2 1.5 v 6 c 0 0.8 0.5 1.4 1.2 1.5 c 0.5 0.7 0.8 1.3 0.8 2 c 0 0.3 0.2 0.5 0.5 0.5 s 0.5 -0.2 0.5 -0.5 c 0 -0.7 -0.2 -1.4 -0.5 -2 h 3.1 c -0.4 0.6 -0.5 1.3 -0.5 2 c 0 0.3 0.2 0.5 0.5 0.5 s 0.4 -0.2 0.4 -0.5 c 0 -0.7 0.3 -1.4 0.8 -2 c 0.7 -0.1 1.2 -0.7 1.2 -1.5 v -0.7 c 0.3 0 0.5 -0.2 0.5 -0.5 v -0.4 c 0 -0.3 -0.2 -0.5 -0.5 -0.5 v -1.1 c 0.3 0 0.5 -0.2 0.5 -0.5 Z M 20 15.5 c 0 0.3 -0.2 0.5 -0.5 0.5 h -5 c -0.3 0 -0.5 -0.2 -0.5 -0.5 v -6 c 0 -0.3 0.2 -0.5 0.5 -0.5 h 5 c 0.3 0 0.5 0.2 0.5 0.5 v 6 Z"></path>
                                                <path d="M 13.5 17.5 c -0.3 0 -0.5 0.2 -0.5 0.5 v 2.5 c 0 0.3 -0.2 0.5 -0.5 0.5 h -9 c -0.3 0 -0.5 -0.2 -0.5 -0.5 v -17 c 0 -0.3 0.2 -0.5 0.5 -0.5 h 9 c 0.3 0 0.5 0.2 0.5 0.5 V 7 c 0 0.3 0.2 0.5 0.5 0.5 s 0.5 -0.2 0.5 -0.5 V 3.5 c 0 -0.9 -0.6 -1.5 -1.5 -1.5 h -9 C 2.6 2 2 2.6 2 3.5 v 17 c 0 0.9 0.6 1.5 1.5 1.5 h 9 c 0.9 0 1.5 -0.6 1.5 -1.5 V 18 c 0 -0.3 -0.2 -0.5 -0.5 -0.5 Z"></path>
                                                <circle cx="8" cy="19" r="1"></circle>
                                                <path d="M10 5.5c0-.3-.2-.5-.5-.5h-3c-.3 0-.5.2-.5.5s.2.5.5.5h3c.3 0 .5-.2.5-.5zM18.2 10.8L17 12.1l-.6-.6c-.2-.2-.5-.2-.7 0s-.2.5 0 .7l1 1c.1.1.2.1.4.1s.3 0 .4-.1l1.6-1.6c.2-.2.2-.5 0-.7s-.7-.2-.9-.1z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="has-dropdown-title">
                                        <div class="has-dropdown-title__title">Smartfony i smartwatche</div>
                                    </div>
                            </a>
                            </li>
                            <a href="/strona/categoryProducts.php?category=3">
                                <li class="has-dropdown links" data-content="3">

                                    <div class="svg-photo-wrap">
                                        <div class="svg-photo"><svg class="svg-menu" style="width: 100%;height: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M9.743 18A5.5 5.5 0 1 1 5 9.022L19 9a5.98 5.98 0 0 1 1.97.585A5.5 5.5 0 1 1 14.258 18H9.743zm-4.45-8l-.203.018a4.5 4.5 0 1 0 3.882 7.345l.3-.363h5.456l.3.363a4.5 4.5 0 1 0 3.882-7.345L18.706 10H5.294zm9.207 7v1h-5v-1h5zm-9-7V9h13v1h-13zm-2 5a.5.5 0 1 1 0-1h4a.5.5 0 1 1 0 1h-4zM5 12.5a.5.5 0 1 1 1 0v4a.5.5 0 1 1-1 0v-4zm8-3a.5.5 0 1 1-1 0V8.472c.043-.77.471-1.468 1.176-1.874l2.183-1.03c.387-.225.63-.634.641-1.068v-2a.5.5 0 1 1 1 0v2.013c-.021.794-.452 1.52-1.176 1.939l-2.183 1.03c-.377.219-.618.611-.641 1.018v1zm7 4.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm-2 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm-7-4v-1h2v1h-2zm0 2v-1h2v1h-2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="has-dropdown-title">
                                        <div class="has-dropdown-title__title">Gaming i streaming</div>
                                    </div>
                            </a>
                            </li>
                            <a href="/strona/categoryProducts.php?category=4">
                                <li class="has-dropdown button" data-content="4">

                                    <div class="svg-photo-wrap">
                                        <div class="svg-photo"><svg class="svg-menu" style="width: 100%;height: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M16.5 3a.5.5 0 0 1 .5.5v1.55c.98.2 1.751.97 1.95 1.95h1.55a.5.5 0 1 1 0 1H19v2h1.5a.5.5 0 1 1 0 1H19v2h1.5a.5.5 0 1 1 0 1H19v2h1.5a.5.5 0 1 1 0 1h-1.55c-.199.98-.97 1.751-1.95 1.95v1.55a.5.5 0 1 1-1 0V19h-2v1.5a.5.5 0 1 1-1 0V19h-2v1.5a.5.5 0 1 1-1 0V19H8v1.5a.5.5 0 1 1-1 0v-1.55A2.503 2.503 0 0 1 5.05 17H3.5a.5.5 0 1 1 0-1H5v-2H3.5a.5.5 0 1 1 0-1H5v-2H3.5a.5.5 0 1 1 0-1H5V8H3.5a.5.5 0 0 1 0-1h1.55c.199-.98.97-1.751 1.95-1.95V3.5a.5.5 0 0 1 1 0V5h2V3.5a.5.5 0 1 1 1 0V5h2V3.5a.5.5 0 1 1 1 0V5h2V3.5a.5.5 0 0 1 .5-.5zm0 3h-9A1.5 1.5 0 0 0 6 7.5v9A1.5 1.5 0 0 0 7.5 18h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 16.5 6zm-2 2A1.5 1.5 0 0 1 16 9.5v5a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 8 14.5v-5A1.5 1.5 0 0 1 9.5 8h5zm0 1h-5a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="has-dropdown-title">
                                        <div class="has-dropdown-title__title">Podzespoły komputerowe</div>
                                    </div>
                            </a>
                            </li>
                            <a href="/strona/categoryProducts.php?category=5">
                                <li class="has-dropdown gallery" data-content="5">

                                    <div class="svg-photo-wrap">
                                        <div class="svg-photo"><svg class="svg-menu" style="width: 100%;height: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M16 16.5a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5V18H4.5A1.5 1.5 0 0 1 3 16.5v-7A1.5 1.5 0 0 1 4.5 8h15A1.5 1.5 0 0 1 21 9.5v7a1.5 1.5 0 0 1-1.5 1.5H16v-1.5zm1 .5h2.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5h-15a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5H7v-.5A1.5 1.5 0 0 1 8.5 15h7a1.5 1.5 0 0 1 1.5 1.5v.5zM7 9V4.5A1.5 1.5 0 0 1 8.5 3h7A1.5 1.5 0 0 1 17 4.5V9H7zm9-1V4.5a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5V8h8zm-7.5 7h7a1.5 1.5 0 0 1 1.5 1.5v4a1.5 1.5 0 0 1-1.5 1.5h-7A1.5 1.5 0 0 1 7 20.5v-4A1.5 1.5 0 0 1 8.5 15zm0 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-7zm9.5-6a1 1 0 1 1 0 2 1 1 0 0 1 0-2zM9 20v-1h4v1H9zm0-2v-1h6v1H9z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="has-dropdown-title">
                                        <div class="has-dropdown-title__title">Urządzenie peryferyjne</div>
                                    </div>
                            </a>
                            </li>
                            <a href="/strona/categoryProducts.php?category=6">
                                <li class="has-dropdown gallery" data-content="6">

                                    <div class="svg-photo-wrap">
                                        <div class="svg-photo"><svg class="svg-menu" style="width: 100%;height: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M11.46 19H5v1h14v-1h-7.54zm10.04-1h-19A2.5 2.5 0 0 1 0 15.5v-10A2.5 2.5 0 0 1 2.5 3h19A2.5 2.5 0 0 1 24 5.5v10a2.5 2.5 0 0 1-2.5 2.5zm0-1a1.5 1.5 0 0 0 1.5-1.5v-10A1.5 1.5 0 0 0 21.5 4h-19A1.5 1.5 0 0 0 1 5.5v10A1.5 1.5 0 0 0 2.5 17h19zM10 13.5v-6a.5.5 0 0 1 .757-.429l5 3a.5.5 0 0 1 0 .858l-5 3A.5.5 0 0 1 10 13.5zm4.528-3L11 8.383v4.234l3.528-2.117zM5 5v1H3.5a.5.5 0 0 0-.5.5V8H2V6.5A1.5 1.5 0 0 1 3.5 5H5zm14 11v-1h1.5a.5.5 0 0 0 .5-.5V13h1v1.5a1.5 1.5 0 0 1-1.5 1.5H19z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="has-dropdown-title">
                                        <div class="has-dropdown-title__title">TV i audio</div>
                                    </div>
                            </a>
                            </li>
                            <a href="/strona/categoryProducts.php?category=7">
                                <li class="has-dropdown gallery" data-content="7">

                                    <div class="svg-photo-wrap">
                                        <div class="svg-photo"><svg class="svg-menu" style="width: 100%;height: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M19.5 13a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-15a.5.5 0 0 1-.5-.5v-8a.5.5 0 1 1 1 0V21h14v-7.5a.5.5 0 0 1 .5-.5zm-6.793 2.293a1 1 0 1 1-1.414 1.414 1 1 0 0 1 1.414-1.414zm1.768-1.768a.5.5 0 1 1-.707.707 2.5 2.5 0 0 0-3.536 0 .5.5 0 1 1-.707-.707 3.5 3.5 0 0 1 4.95 0zm1.768-1.768a.5.5 0 0 1-.707.707 5 5 0 0 0-7.072 0 .5.5 0 0 1-.707-.707 6 6 0 0 1 8.486 0zm-3.9-9.62l9.5 9a.5.5 0 1 1-.687.726L12 3.189l-9.156 8.674a.5.5 0 1 1-.688-.726l9.5-9a.5.5 0 0 1 .688 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="has-dropdown-title">
                                        <div class="has-dropdown-title__title">Smarthome i lifestyle</div>

                                    </div>
                            </a>
                            </li>
                            <a href="/strona/categoryProducts.php?category=8">
                                <li class="has-dropdown gallery" data-content="8">

                                    <div class="svg-photo-wrap">
                                        <div class="svg-photo"><svg class="svg-menu" style="width: 100%;height: 100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M3 9.5h1v1.71H3V9.5zm6 0h1v8H9v-8zm-5 0H3a3.5 3.5 0 0 1 7 0H9a2.5 2.5 0 0 0-5 0zm13 8h1a4.5 4.5 0 1 1-9 0h1a3.5 3.5 0 0 0 7 0zm0-6h1v6h-1v-6zM13.5 6h8a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5v-4a.5.5 0 0 1 .5-.5zm.5 1v3.5a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 .5-.5V7h-7zm.5-4h6a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5zm.5 1v2h5V4h-5zM1.5 14h4a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5zm.5 1v1h3v-1H2zm4.5 0h-6a.5.5 0 0 1-.5-.5v-2A1.5 1.5 0 0 1 1.5 11h4A1.5 1.5 0 0 1 7 12.5v2a.5.5 0 0 1-.5.5zM6 12.5a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 0-.5.5V14h5v-1.5zM16 5h1v2h-1V5zm2 0h1v2h-1V5z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="has-dropdown-title">
                                        <div class="has-dropdown-title__title">Akcesoria</div>

                                    </div>
                            </a>
                            </li>

                        </ul>
                    </nav>
                    <!-- dropdown-list -->

                    <div class="o-sideBySide">
                        <div class="morph-dropdown-wrap">


                            <div class="morph-dropdown-wrapper">
                                <div class="left">
                                    <a href="#0" class="nav-trigger" id="not active"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></a>
                                </div>

                                <div class="dropdown-list ">
                                    <ul>
                                        <?php
                                        $query = $conn->query("SELECT id_kategoria, nazwa, miniaturka FROM kategoria WHERE nadkategoria is NULL");
                                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result as $row) {
                                            print('<li id="' . $row['id_kategoria'] . '" class="dropdown links">
                                            <a href="#0" class="label">' . $row['nazwa'] . '</a>
                                            <div class="content">
                                            <ul>
                                            <li>
                                            <a href="#0">
                                            <h2>' . $row['nazwa'] . '</h2>
                                            </a>
                                            <ul class="links-list">');

                                            $query2 = $conn->query("SELECT id_kategoria, nazwa, miniaturka FROM kategoria WHERE nadkategoria = '" . $row['id_kategoria'] . "'");
                                            $result2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($result2 as $row2) {
                                                print('<li class="links-list-element"><a href="#0">' . $row2['nazwa'] . '</a></li>');
                                                $query3 = $conn->query("SELECT id_kategoria, nazwa, miniaturka FROM kategoria WHERE nadkategoria = '" . $row2['id_kategoria'] . "'");
                                                $result3 = $query3->fetchAll(PDO::FETCH_ASSOC);
                                                if (!empty($result3)) {
                                                    print('<ul class="links-list-subcategory">');
                                                    foreach ($result3 as $row3) {
                                                        print('<li class="links-list-element"> <a href="#0">' . $row3['nazwa'] . '</a></li>');
                                                    }
                                                    print('</ul>');
                                                }
                                            }
                                            print('</ul>
                                            </li>
                                            </ul>
                                            </div>
                                            </li>');
                                        }
                                        ?>
                                    </ul>
                                    <div class="bg-layer" aria-hidden="true"></div>
                                </div>
                            </div> <!-- morph-dropdown-wrapper -->
                </header>


            </div>
        </div>
    </div>
</div>