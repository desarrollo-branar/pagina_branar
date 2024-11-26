<template>
  <div>
    <h1>Nuestros Servicios</h1>
    <ul>
      <li><NuxtLink to="/services/infraestructura">Infraestructura</NuxtLink></li>
      <li><NuxtLink to="/services/social-media">Social Media</NuxtLink></li>
      <li><NuxtLink to="/services/desarrollo-web">Desarrollo Web</NuxtLink></li>
      <li><NuxtLink to="/services/profit-plus">Profit Plus</NuxtLink></li>
    </ul>
    <NuxtLink to="/">Volver al Inicio</NuxtLink>
  </div>
</template>

<script setup>
useHead({
  title: 'Servicios - Branar C.A.',
  meta: [{ name: 'description', content: 'Descubre nuestros servicios' }],
});
</script>
