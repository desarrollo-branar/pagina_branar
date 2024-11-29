<template>
  <header :class="['w-full fixed z-30 bg-white px-6 transition-all duration-300 shadow-md']">
    <nav :class="['flex justify-between items-center']">
      <div>
        <NuxtLink to="/">
          <img
            src="@/assets/images/navbar-logo.webp"
            class="w-[90px] sm:w-[110px] md:w-[110px] lg:w-[120px] py-2"
            alt="Logo"
          />
        </NuxtLink>
      </div>
      <ul :class="['gap-12', isSmallScreen ? 'hidden' : 'flex']">
        <li class="menu">
          <a class="text-[#145bc6] font-medium text-lg cursor-pointer"> Servicios </a>
          <ul class="hidden">
            <li>
              <NuxtLink to="/services/centro_autorizado_epson">Csa Epson</NuxtLink>
            </li>
            <li>
              <NuxtLink to="/services/infraestructura">Infraestructura</NuxtLink>
            </li>
            <li>
              <NuxtLink to="/services/social-media">Social Media</NuxtLink>
            </li>
            <li>
              <NuxtLink to="/services/profit-plus">Profit Plus</NuxtLink>
            </li>
            <li>
              <NuxtLink>Service Pack</NuxtLink>
            </li>
            <li>
              <NuxtLink to="/services/desarrollo-web">Desarrollo Web</NuxtLink>
            </li>
            <li>
              <NuxtLink>CiberSeguridad</NuxtLink>
            </li>
          </ul>
        </li>
        <li>
          <NuxtLink to="/about" class="text-[#145bc6] font-medium text-lg cursor-pointer"
            >Conócenos</NuxtLink
          >
        </li>
        <li>
          <NuxtLink to="/contact" class="text-[#145bc6] font-medium text-lg cursor-pointer"
            >Contáctanos</NuxtLink
          >
        </li>
        <li>
          <NuxtLink to="/projects" class="text-[#145bc6] font-medium text-lg cursor-pointer"
            >Proyectos</NuxtLink
          >
        </li>
      </ul>
      <div v-if="isSmallScreen" class="w-6 sm:w-8 cursor-pointer" @click="toggleMenu">
        <IconMenu />
      </div>
    </nav>

    <!-- Fondo oscuro opaco -->
    <div
      v-if="isMenuOpen && isSmallScreen"
      class="fixed inset-0 bg-black bg-opacity-50 z-40 transition-opacity duration-300"
      @click="toggleMenu"
    ></div>

    <!-- Menú móvil -->
    <div
      :class="[
        'mobile-navbar fixed top-0 left-0 w-3/4 max-w-xs h-full bg-white z-50 transform transition-transform duration-300',
        isMenuOpen && isSmallScreen ? 'translate-x-0' : '-translate-x-full',
      ]"
    >
      <ul>
        <li>
          <span class="block px-4 py-2 font-medium text-[#145bc6] hover:bg-gray-50">
            Servicios
          </span>
          <ul class="ml-4">
            <li>
              <NuxtLink
                to="/services/centro_autorizado_epson"
                class="block px-4 py-2 text-sm text-[#145bc6] hover:bg-gray-100"
              >
                Csa Epson
              </NuxtLink>
            </li>
            <li>
              <NuxtLink
                to="/services/infraestructura"
                class="block px-4 py-2 text-sm text-[#145bc6] hover:bg-gray-100"
              >
                Infraestructura
              </NuxtLink>
            </li>
            <li>
              <NuxtLink
                to="/services/social-media"
                class="block px-4 py-2 text-sm text-[#145bc6] hover:bg-gray-100"
              >
                Social Media
              </NuxtLink>
            </li>
            <li>
              <NuxtLink
                to="/services/profit-plus"
                class="block px-4 py-2 text-sm text-[#145bc6] hover:bg-gray-100"
              >
                Profit Plus
              </NuxtLink>
            </li>
            <li>
              <NuxtLink
                to="/services/service-pack"
                class="block px-4 py-2 text-sm text-[#145bc6] hover:bg-gray-100"
              >
                ServicePack
              </NuxtLink>
            </li>
            <li>
              <NuxtLink
                to="/services/desarrollo-web"
                class="block px-4 py-2 text-sm text-[#145bc6] hover:bg-gray-100"
              >
                Desarrollo Web
              </NuxtLink>
            </li>
            <li>
              <NuxtLink
                to="/services/ciber-seguridad"
                class="block px-4 py-2 text-sm text-[#145bc6] hover:bg-gray-100"
              >
                CiberSeguridad
              </NuxtLink>
            </li>
          </ul>
        </li>
        <li>
          <NuxtLink to="/about" class="block px-4 py-2 font-medium text-[#145bc6] hover:bg-gray-50">
            Nosotros
          </NuxtLink>
        </li>
        <li>
          <NuxtLink
            to="/contact"
            class="block px-4 py-2 font-medium text-[#145bc6] hover:bg-gray-50"
          >
            Contacto
          </NuxtLink>
        </li>
        <li>
          <NuxtLink
            to="/projects"
            class="block px-4 py-2 font-medium text-[#145bc6] hover:bg-gray-50"
          >
            Proyectos
          </NuxtLink>
        </li>
      </ul>
    </div>
  </header>
</template>

<script setup lang="ts">
import { ref, onMounted, onUnmounted } from 'vue';
import IconMenu from '~/assets/icons/IconMenu.vue';

const isMenuOpen = ref(false);
const isSmallScreen = ref(false);
const isScrolled = ref(false);

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value;
};

const handleScroll = () => {
  isScrolled.value = window.scrollY > 50;
};

onMounted(() => {
  isSmallScreen.value = window.innerWidth < 1024;
  window.addEventListener('scroll', handleScroll);
  window.addEventListener('resize', () => {
    isSmallScreen.value = window.innerWidth < 1024;
  });
});

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
});
</script>

<style scoped>
.mobile-navbar {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
</style>
