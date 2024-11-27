<template>
  <footer class="bg-black text-white py-8">
    <div class="flex items-center justify-start border-b border-gray-700">
      <img
        src="@/assets/images/logo-black.webp"
        class="pl-4 pb-4 w-[120px] sm:w-[120px] md:w-1/12 lg:w-1/12"
        alt="Branar Servicios en Tecnologia"
      />
    </div>

    <div class="container mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Sección: Únete a nosotros -->
      <div>
        <h3 class="font-bold text-lg mb-4">Únete a nosotros</h3>
        <ul class="space-y-2">
          <li>
            <NuxtLink to="/services/csa" class="hover:text-orange-500">Csa Epson</NuxtLink>
          </li>
          <li>
            <NuxtLink to="/services/infraestructura" class="hover:text-orange-500"
              >Infraestructura</NuxtLink
            >
          </li>
          <li>
            <NuxtLink to="/services/social-media/" class="hover:text-orange-500"
              >SocialMedia</NuxtLink
            >
          </li>
          <li>
            <NuxtLink to="/services/profit-plus/" class="hover:text-orange-500"
              >Profit Plus</NuxtLink
            >
          </li>
          <li>
            <NuxtLink to="/services/service-pack/" class="hover:text-orange-500"
              >ServiPack</NuxtLink
            >
          </li>
          <li>
            <NuxtLink to="/services/desarrollo-web/" class="hover:text-orange-500"
              >Desarrollo Web</NuxtLink
            >
          </li>
          <li>
            <NuxtLink to="/services/ciber-seguridad/" class="hover:text-orange-500"
              >CiberSeguridad</NuxtLink
            >
          </li>
        </ul>
      </div>
      <!-- Sección: Nosotros -->
      <div>
        <h3 class="font-bold text-lg mb-4">Nosotros</h3>
        <ul class="space-y-2">
          <li><NuxtLink to="/about" class="hover:text-orange-500">¿Quiénes somos?</NuxtLink></li>
          <li>
            <a
              href="https://www.facebook.com/BranarContacto"
              target="_blink"
              aria-label="Ir a Facebook de Branar"
              class="hover:text-orange-500"
            >
              Facebook
            </a>
          </li>
          <li>
            <a
              href="https://www.instagram.com/contactobranar/"
              target="_blink"
              aria-label="Ir a Instagram de Branar"
              class="hover:text-orange-500"
            >
              Instagram
            </a>
          </li>
          <li>
            <a
              href="https://wa.link/rc1mal"
              target="_blink"
              aria-label="Ir a Whatsapp de Branar"
              class="hover:text-orange-500"
            >
              WhatsApp
            </a>
          </li>
        </ul>
      </div>
      <!-- Sección: Soporte -->
      <div>
        <h3 class="font-bold text-lg mb-4">Soporte</h3>
        <ul class="space-y-2">
          <li><NuxtLink to="/contact" class="hover:text-orange-500">Contáctanos</NuxtLink></li>
        </ul>
      </div>
      <!-- Sección: Contacto -->
      <div>
        <h3 class="font-bold text-lg mb-4">Contacto</h3>
        <ul class="space-y-2">
          <li>Teléfono: (0251) – 4453083 / 0412 – 3290719</li>
          <li>Dirección: Av. Libertador, Cruce Calle 41, Local 41-12. Barquisimeto-Lara.</li>
          <li>
            Correo:
            <a
              href="mailto:contacto@branar.com"
              aria-label="Enviar correo a Contacto Branar"
              class="hover:text-orange-500"
            >
              contacto@branar.com
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Separador y créditos -->
    <div class="mt-8 border-t border-gray-700 pt-4 text-center">
      <p class="text-sm">&copy; 2023 Branar, C.A. J-310451397. Todos los derechos reservados.</p>
    </div>
  </footer>
</template>
