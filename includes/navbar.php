<!-- navbar -->
<header class="header">
  <nav class="navbar">
    <div class="cont-menu-logo">
      <a href="<?= $_ENV['BASE_URL'] ?>/">
        <img src="<?= $_ENV['BASE_URL'] ?>/assets/images/navbar-logo.png" class="menu-logo" alt="Branar - Servicios en Tecnologia | Logo" width="90" height="70">
      </a>
    </div>
    <ul class="nav">

      <li class="menu">
        <a href="#" class="line-down underline">Servicios<ion-icon name="caret-down-outline"></ion-icon></a>
        <ul class="submenu">
          <li><a href="<?= $_ENV['BASE_URL'] ?>/csa.php" class="underline">Csa Epson<span class="icon-dot"></span></a></li>
          <li><a href="<?= $_ENV['BASE_URL'] ?>/infraestructure.php" class="underline">Infraestructura<span class="icon-dot"></span></a></li>
          <li><a href="<?= $_ENV['BASE_URL'] ?>/social-media.php" class="underline">Social Media<span class="icon-dot"></span></a></li>
          <li><a href="<?= $_ENV['BASE_URL'] ?>/profitplus.php" class="underline">Profit Plus<span class="icon-dot"></span></a></li>
          <li><a href="<?= $_ENV['BASE_URL'] ?>/servicepack.php" class="underline">Service Pack<span class="icon-dot"></span></a></li>
          <li><a href="<?= $_ENV['BASE_URL'] ?>/devweb.php" class="underline">Desarrollo Web<span class="icon-dot"></span></a></li>
          <li><a href="<?= $_ENV['BASE_URL'] ?>/ciber_seguridad.php" class="underline">CiberSeguridad<span class="icon-dot"></span></a></li>
        </ul>
      </li>
      <li><a href="<?= $_ENV['BASE_URL'] ?>/about-us.php" class="underline"><span class="icon-house"></span>Nosotros</a></li>
      <li><a href="<?= $_ENV['BASE_URL'] ?>/contact.php" class="underline"><span class="icon-mail"></span>Contacto</a></li>
      <li><a href="<?= $_ENV['BASE_URL'] ?>/projects/" class="underline"><span class="icon-mail"></span>Proyectos</a></li>
    </ul>
    <div class="menu-icon inactive">
      <ion-icon name="reorder-four-outline" id="icon-hamburguer"></ion-icon>
    </div>
  </nav>
  <div class="mobile-navbar">
    <ul>
      <li class="mobile-menu" id="submenu-down">
        <a href="#" class="line-down underline">Servicios<ion-icon name="caret-down-outline"></ion-icon></a>
        <ul class="mobile-submenu">
          <li><a href="<?= $_ENV['BASE_URL'] ?>/csa.php" class="underline">Csa Epson <span class="icon-dot"></span></a></li>
          <li><a href="<?= $_ENV['BASE_URL'] ?>/infraestructure.php" class="underline">Infraestructura <span class="icon-dot"></span></a></li>
          <li><a href="<?= $_ENV['BASE_URL'] ?>/social-media.php" class="underline">SocialMedia<span class="icon-dot"></span></a></li>
          <li><a href="<?= $_ENV['BASE_URL'] ?>/profitplus.php" class="underline">Profit Plus<span class="icon-dot"></span></a></li>
          <li><a href="<?= $_ENV['BASE_URL'] ?>/servipack.php" class="underline">ServiPack<span class="icon-dot"></span></a></li>
          <li><a href="<?= $_ENV['BASE_URL'] ?>/devweb.php" class="underline">Desarrollo Web <span class="icon-dot"></span></a></li>
          <li><a href="<?= $_ENV['BASE_URL'] ?>/ciber_seguridad.php" class="underline">CiberSeguridad<span class="icon-dot"></span></a></li>
        </ul>
      </li>
      <li><a href="<?= $_ENV['BASE_URL'] ?>/about-us.php" class="underline">Nosotros</a></li>
      <li><a href="<?= $_ENV['BASE_URL'] ?>/contact.php" class="underline">Contacto</a></li>
      <li><a href="<?= $_ENV['BASE_URL'] ?>/projects/" class="underline">Proyectos</a></li>
    </ul>
  </div>
</header>