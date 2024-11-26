<template>
  <main class="pt-[80px] sm:pt-[80px]">
    <CarrouselComponent />

    <div class="flex flex-col items-center my-10 text-center">
      <h1
        class="relative text-[#275a9d] text-3xl sm:text-3xl md:text-5xl font-bold drop-shadow-md after:customAfter"
      >
        Tu mejor alternativa tecnológica
      </h1>
      <p class="text-md">
        ¡Optimiza y protege tu negocio con nuestros
        <strong class="text-[#ec8e39]">servicios especializados en tecnología</strong>!
      </p>
    </div>

    <CardGrid :cards="cardData" />
  </main>
  <SocialFixed />
</template>

<script setup lang="ts">
import CardGrid from '~/components/CardGrid.vue';
import CarrouselComponent from '~/components/CarrouselComponent.vue';
import SocialFixed from '~/components/SocialFixed.vue';

const cardData = [
  {
    title: 'Centro de Servicio Autorizado EPSON',
    description:
      'Confía en nuestro equipo para el mantenimiento y reparación de tus equipos. Garantizamos un rendimiento óptimo y mayor vida útil para tus dispositivos.',
    image: '/images/navbar/epson.webp',
    url: '/services/csa',
  },
  {
    title: 'Service Pack',
    description:
      'Ofrecemos mantenimiento completo y actualización de software para tus equipos, asegurando un rendimiento óptimo y protección contra amenazas.',
    image: '/images/navbar/section_servi_pack.webp',
    url: '/services/service-pack',
  },
  {
    title: 'Redes e Infraestructura',
    description:
      'Diseñamos y construimos una infraestructura de red confiable y eficiente, para garantizar la conectividad y el flujo de datos en tu empresa.',
    image: '/images/navbar/redes_infraestructura.webp',
    url: '/services/infraestructura',
  },
  {
    title: 'Social Media',
    description:
      'Creamos campañas personalizadas, optimizamos tus perfiles en redes sociales y generamos contenido atractivo para impulsar tus ventas.',
    image: '/images/navbar/social-media.webp',
    url: '/services/social-media',
  },
  {
    title: 'Profit Plus',
    description:
      'Nuestro equipo de expertos se encargará de todo el proceso, y obtendras una instalacion adecuada a tus necesidades.',
    image: '/images/navbar/profit.webp',
    url: '/services/profit-plus',
  },
  {
    title: 'Desarrollo Web',
    description:
      'Estamos listos para crear la plataforma perfecta para tu negocio. Diseñamos soluciones digitales que te ayudarán a destacarte en el competitivo mundo digital.',
    image: '/images/navbar/devweb.webp',
    url: '/services/desarrollo-web',
  },
  // Agregar más objetos según sea necesario
];

useHead({
  title: 'Empresa de Servicios Tecnológicos Venezuela - Branar C.A.',
  meta: [
    {
      name: 'description',
      content:
        '¿Desea invertir en Tecnologias de Información? Branar C.A. brinda servicios Avanzados en Tecnología a pequeñas y medianas empresas venezolanas...',
    },
    {
      name: 'keywords',
      content: 'Reparación de impresoras EPSON, Empresa de Servicios Tecnológicos, Desarrollo web',
    },
  ],
});
</script>
