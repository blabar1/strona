<div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
  <div class="offcanvas-body p-0">
    <nav class="navbar-dark">
      <ul class="navbar-nav">
        <?php
        if (isset($_SESSION['user'])) {
          $query = $conn->query("SELECT konto_typ FROM dane_konta WHERE mail = '" . $_SESSION['user'] . "'");
          $result = $query->fetch(PDO::FETCH_ASSOC);
          if ($result['konto_typ'] != 1) {
            if ($result['konto_typ'] == 3) {
              print('<li>
                  <div class="text-muted small fw-bold text-uppercase px-3">
                    Panel administratora
                  </div>
                </li>
                <li>
                  <a href="Produkty.php" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-table"></i></span>
                    <span>Produkty</span>
                  </a>
                </li>
                <li>
                  <a href="Konta.php" class="nav-link px-3  ">
                    <span class="me-2"><i class="bi bi-table"></i></span>
                    <span>Konta</span>
                  </a>
                </li>
                <li>
                  <a href="Kategorie.php" class="nav-link px-3 ">
                    <span class="me-2"><i class="bi bi-table"></i></span>
                    <span>Kategorie</span>
                  </a>
                </li>
                <li>
                <li>
                  <a href="Właściwości.php" class="nav-link px-3 ">
                    <span class="me-2"><i class="bi bi-table"></i></span>
                    <span>Właściwości</span>
                  </a>
                </li>');
            }
          }
        } else
          header('Location: ../index.php');

        ?>
        <li>
          <div class="text-muted small fw-bold text-uppercase px-3">
            Panel pracownika
          </div>
        </li>
        <li>
          <a href="Zamówienia-pracownik.php" class="nav-link px-3 ">
            <span class="me-2"><i class="bi bi-table"></i></span>
            <span>Zamówienia</span>
          </a>
        </li>
        <li>
          <a href="magazyn.php" class="nav-link px-3 ">
            <span class="me-2"><i class="bi bi-table"></i></span>
            <span>Magazyn</span>
          </a>
        </li>
        <!-- <li>
            <a href="" class="nav-link px-3 ">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Podstrony</span>
            </a>
          </li> -->
      </ul>
    </nav>
  </div>
</div>