    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid px-lg-5 align-items-start">
        <a class="navbar-brand" href="<?= $site_url; ?>">
          <div class="logo">
            <img src="assets/images/logo_shishac_new.png" alt="Logo">
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-menus mt-lg-3" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link <?php echo ($page === 'index') ? "active_link" : ""; ?>" href="<?= $site_url; ?>/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($page === 'about-us') ? "active_link" : ""; ?>" href="<?= $site_url; ?>/about-us">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($page === 'capabilities') ? "active_link" : ""; ?>" href="<?= $site_url; ?>/capabilities">Capabilities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($page === 'facilities') ? "active_link" : ""; ?>" href="<?= $site_url; ?>/facilities">Facilities</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sectors
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= $site_url; ?>/aerospace">Aerospace</a></li>
                <li><a class="dropdown-item" href="<?= $site_url; ?>/motorsports">Motorsports</a></li>
                <li><a class="dropdown-item" href="<?= $site_url; ?>/automotive">Automotive</a></li>
                <li><a class="dropdown-item" href="<?= $site_url; ?>/railways">Railways</a></li>
                <li><a class="dropdown-item" href="<?= $site_url; ?>/space">Space</a></li>
                <li><a class="dropdown-item" href="<?= $site_url; ?>/other-industries">Other Industries</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($page === 'contact-us') ? "active_link" : ""; ?>" href="<?= $site_url; ?>/contact-us">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>