<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Branar - Servicios en Tecnologia')</title>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-57GHTKM');
  </script>
  <!-- End Google Tag Manager -->

  <meta name="description" content="@yield('description', '¿Desea invertir en Tecnologias de Información? Branar C.A. brinda servicios Avanzados en Tecnología a pequeñas y medianas empresas venezolanas...')">
  <meta name="keywords" content="@yield('keywords', 'empresas en tecnologia,servicios en tecnologia,empresas informaticas')">
  <link rel="canonical" href="@yield('canonical', url()->current())">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="@yield('og_title', 'Branar - Servicios en Tecnologia')">
  <meta property="og:description" content="@yield('og_description', '¿Desea invertir en Tecnologias de Información? Branar C.A. brinda servicios Avanzados en Tecnología a pequeñas y medianas empresas venezolanas...')">
  <meta property="og:url" content="@yield('og_url', url()->current())">
  <meta property="og:site_name" content="Branar - Servicios en Tecnologia">
  <meta property="article:modified_time" content="2021-05-11T04:12:39+00:00">

  @yield('head_content')


  {{-- Font Awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  {{-- Google Fonts (Preconnect) --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  {{-- Material Icons (Preload) --}}
  <link rel="preload" as="style" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" media="print"
    onload="this.media='all'">

  {{-- CDN Bootstrap (Preload and Async) --}}
  <link rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"
    media="print" onload="this.media='all'">

  {{-- CSS Propio --}}
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bot.css') }}">
  @yield('styles')

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VE0TTSQRCJ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-VE0TTSQRCJ');
  </script>

  <!-- Google Search Console Verification (solo necesario en la página principal) -->
  @if (Request::is('/'))
    <meta name="google-site-verification" content="24wjTYuMbQJIbk8lDwHf2x-FJY-INU-8Ifl9ao7-cpM" />
  @endif

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-57GHTKM');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Google Search Console Verification -->
  <meta name="google-site-verification" content="24wjTYuMbQJIbk8lDwHf2x-FJY-INU-8Ifl9ao7-cpM" />

</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57GHTKM" height="0" width="0"
      style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  @include('layouts.nav')

  @yield('carrousel')
  <main>
    @yield('content')
  </main>

  @include('layouts.footer')

  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
  <!-- cdn Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- scripts -->
  <script src="{{ asset('js/main.js') }}"></script>
  @yield('scripts')

</body>

</html>
