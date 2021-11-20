<?php include_once "header.php"; ?>

<body onload="formreset()">
  <?php include_once "topBar.php"; ?>
  <!-- offcanvas -->
  <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3">
              Tabele
            </div>
          </li>
          <li>
            <a href="index.php" class="nav-link px-3 active">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Produkty</span>
            </a>
          </li>
          <li>
            <a href="Konta.php" class="nav-link px-3 ">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Konta</span>
            </a>
          </li>
          <li>
            <a href="Kategorie.php" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Kategorie</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3 ">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Produkty</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3 ">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Produkty</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3 ">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Produkty</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3 ">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Produkty</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3 ">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Produkty</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3 ">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Produkty</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3 ">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Produkty</span>
            </a>
          </li>

          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              Tabele
            </div>
          </li>
          <li>
            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
              <span class="me-2"><i class="bi bi-layout-split"></i></span>
              <span>Layouts</span>
              <span class="ms-auto">
                <span class="right-icon">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </span>
            </a>
            <div class="collapse" id="layouts">
              <ul class="navbar-nav ps-3">
                <li>
                  <a href="#" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                    <span>Dashboard</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-book-fill"></i></span>
              <span>Pages</span>
            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              Addons
            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-graph-up"></i></span>
              <span>Charts</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-table"></i></span>
              <span>Tables</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- offcanvas -->
  <main class="mt-5 pt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h4>Produkty</h4>
        </div>
      </div>
      <div class="row">
        <div class="card-body">
        </div>
      </div>
    </div>

    <div class="card-header">
    </div>
    </div>
    <div class="row">
      <div class="col-md-12 mb-3">
        <div class="card">
          <div class="card-header">
            <span><i class="bi bi-table me-2"></i></span> Data Table
            <div class="float-right">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Dodaj Produkt
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
            </div>
          </div>
        </div>
      </div>

    </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Dodawanie Produktu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="dod">
            <div class="modal-body">

              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nazwa produktu</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nazwa produktu" value="" required>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Cena</label>
                <input type="number" class="form-control" id="formGroupExampleInput2" min="0" step="0.01" placeholder="Cena produktu" value="" required>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Ilosc produktu</label>
                <input type="number" class="form-control" id="formGroupExampleInput2" min="1" placeholder="Ilosc produktu" value="" required>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Wybierz kategorie</label>
                <select class="form-control" id="formGroupExampleInput2" required>
                  <option selected disabled hidden value="">Przykład</option>
                  <option></option>

                  <option></option>
                  <option></option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuluj</button>
              <input type="submit" value="Zapisz" name="DODAJ" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
</body>
<?php include_once "footer.php"; ?>