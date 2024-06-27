<!-- navbar -->
<header class="header">
  <nav class="navbar">
    <div class="cont-menu-logo">
      <a href="{{ route('index') }}"><img src="{{ asset('images/navbar-logo.png')}}" class="menu-logo"
          alt="Branar - Servicios en Tecnologia | Logo" width="90" height="70"></a>
    </div>
    <ul class="nav">

      <li class="menu">
        <a href="#" class="line-down underline">Servicios<ion-icon name="caret-down-outline"></ion-icon></a>
        <ul class="submenu">
          <li><a href="{{ route('csa') }}" class="underline">Csa Epson<span class="icon-dot"></span></a></li>
          <li><a href="{{ route('infraestructure') }}" class="underline">Infraestructura<span class="icon-dot"></span></a></li>
          <li><a href="{{ route('social_media') }}" class="underline">Social Media<span class="icon-dot"></span></a>
          </li>
          <li><a href="{{ route('profit_plus') }}" class="underline">Profit Plus<span class="icon-dot"></span></a></li>
          <li><a href="{{ route('servicepack') }}" class="underline">Service Pack<span class="icon-dot"></span></a></li>
          <li><a href="{{ route('dev_web') }}" class="underline">Desarrollo Web<span class="icon-dot"></span></a></li>
        </ul>
      </li>
      <li><a href="{{ route('about') }}" class="underline"><span class="icon-house"></span>Nosotros</a></li>
      <li><a href="{{ route('contact') }}" class="underline"><span class="icon-mail"></span>Contacto</a></li>
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
          <li><a href="{{ route('csa') }}" class="underline">Csa Epson <span class="icon-dot"></span></a></li>
          <li><a href="{{ route('infraestructure') }}" class="underline">Infraestructura <span class="icon-dot"></span></a></li>
          <li><a href="{{ route('social_media') }}" class="underline">SocialMedia<span class="icon-dot"></span></a></li>
          <li><a href="{{ route('profit_plus') }}" class="underline">Profit Plus<span class="icon-dot"></span></a></li>
          <li><a href="{{ route('servicepack') }}" class="underline">ServiPack<span class="icon-dot"></span></a></li>
          <li><a href="{{ route('dev_web') }}" class="underline">Desarrollo Web <span class="icon-dot"></span></a></li>
        </ul>
      </li>
      <li><a href="{{ route('about') }}" class="underline">Nosotros</a></li>
      <li><a href="{{ route('contact') }}" class="underline">Contacto</a></li>
    </ul>
  </div>
</header>
