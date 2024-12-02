<template>
  <main class="pt-[80px] sm:pt-[80px]">
    <!-- banner top -->
    <div
      class="relative w-full h-[250px] bg-cover bg-center flex items-center justify-center"
      :style="{ backgroundImage: 'url(/images/connection-industry.webp)' }"
    >
      <div class="absolute top-0 left-0 right-0 bottom-0 bg-[#00000056]"></div>
      <h1 class="text-white text-center text-4xl font-bold uppercase p-6 z-10">
        Infraestructura de Empresas: Potencia tu Negocio con la Mejor Base Tecnológica
      </h1>
    </div>

    <section>
      <!-- top -->
      <article
        class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 mt-12 mr-6 mb-6 ml-6 p-4 place-items-center shadow-md"
      >
        <section>
          <div>
            <h2 class="relative text-3xl text-[#275a9d] font-bold">
              Potencia tu negocio con nuestra infraestructura y virtualización
            </h2>
          </div>
          <p class="text-lg mt-6 pl-3">
            Diseñamos, implementamos y mantenemos redes seguras y confiables para que tu empresa
            pueda funcionar sin interrupciones.
          </p>
        </section>
        <div class="flex itemx-center justify-center w-5/6">
          <img
            src="@/assets/images/infraestructure.webp"
            class="w-5/6 rounded-2xl"
            alt="Soporte Técnico Barquisimeto"
          />
        </div>
      </article>
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

      <!-- Servicio -->

      <article
        class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 mt-12 mr-6 mb-6 ml-6 p-4 place-items-center shadow-md"
      >
        <div class="flex itemx-center justify-center w-5/6">
          <img
            src="@/assets/images/ms-365.webp"
            class="w-5/6 rounded-2xl"
            alt="Soporte Técnico Barquisimeto"
          />
        </div>
        <section>
          <div>
            <h2 class="relative text-3xl text-[#275a9d] font-bold">
              Licencias y Servicios Microsoft: Maximiza el Potencial de tu Empresa
            </h2>
          </div>
          <p class="text-lg mt-6 pl-3">
            Maximiza el Potencial de tu Empresa con Licencias y Servicios Microsoft. Ofrecemos una
            amplia gama de soluciones, desde licencias de software hasta servicios de correo
            electrónico, para potenciar la productividad y el crecimiento de tu negocio.
          </p>
        </section>
      </article>
    </section>
  </main>
  <SocialFixed />
</template>

<script setup lang="ts">
import CardGrid from '~/components/CardGrid.vue';

const cardData = [
  {
    title: 'Diagramación de la red',
    description:
      'Creamos estructuras de red eficientes y escalables para optimizar la conectividad y el flujo de datos en tu empresa.',
    image: '/images/services/diagramacion.webp',
  },
  {
    title: 'Instalación de cableado estructurado',
    description:
      'Garantizamos una infraestructura de cableado ordenada y de alta calidad para mantener la estabilidad y el rendimiento de tus sistemas.',
    image: '/images/services/servidores3.webp',
  },
  {
    title: 'Instalación de redes inalámbricas (puntos de acceso)',
    description:
      'Implementamos redes inalámbricas seguras y de alto rendimiento para facilitar la movilidad dentro de tu espacio de trabajo.',
    image: '/images/services/servidores.webp',
  },
  {
    title: 'Formato e instalación de sistema operativo para servidores',
    description:
      'Configuramos y optimizamos los sistemas operativos de tus servidores para un rendimiento óptimo.',
    image: '/images/services/servidores2.webp',
  },
  {
    title: 'Administración de servidores',
    description:
      'Monitorizamos y gestionamos tus servidores para garantizar su funcionamiento continuo y la seguridad de tus datos.',
    image: '/images/services/admin.webp',
    url: '/services/profit-plus',
  },
  {
    title: 'Migración de la información a servicios en la nube',
    description:
      'Facilitamos la transición hacia la nube para que puedas acceder a tus datos desde cualquier lugar y mejorar la eficiencia operativa.',
    image: '/images/services/nube.webp',
  },
  {
    title: 'Control de la actividad de la red así como en sus conexiones',
    description:
      'Implementamos respaldos automatizados para proteger tu información ante posibles fallos o pérdidas.',
    image: '/images/services/respaldo.webp',
  },
  {
    title: 'Monitoreo de Redes',
    description:
      'Monitoreamos y aseguramos la actividad de tu red, garantizando la seguridad y la eficiencia de tus operaciones.',
    image: '/images/services/control.webp',
  },
  // Agregar más objetos según sea necesario
];

useHead({
  title: 'Service Pack - Branar C.A.',
  meta: [
    // Metaetiquetas estándar
    {
      name: 'description',
      content:
        'Descubre Service Pack de Branar C.A.: Soluciones integrales para empresas en Venezuela. Digitalización, automatización, soporte tecnico.',
    },
    {
      name: 'keywords',
      content:
        'Service Pack Venezuela, soluciones empresariales, Mantenimiento de computadoras, Soporte Técnico Barquisimeto, gestión tecnológica, Branar C.A., productividad empresarial, asesoría tecnológica, mantenimiento equipos',
    },
    {
      name: 'viewport',
      content: 'width=device-width, initial-scale=1',
    },

    // Open Graph (para redes sociales como Facebook y LinkedIn)
    {
      property: 'og:title',
      content: 'Service Pack - Branar C.A.',
    },
    {
      property: 'og:description',
      content:
        'Descubre Service Pack de Branar C.A.: Soluciones integrales para empresas en Venezuela. Digitalización, automatización, soporte tecnico.',
    },
    {
      property: 'og:image',
      content: 'https://branar.netlify.app/images/centro_autorizado_epson.webp',
    },
    {
      property: 'og:url',
      content: 'https://branar.netlify.app/services/centro_autorizado_epson',
    },
    {
      property: 'og:type',
      content: 'article',
    },

    // Twitter Cards
    {
      name: 'twitter:card',
      content: 'summary_large_image',
    },
    {
      name: 'twitter:title',
      content: 'Centro de Servicio Autorizado EPSON en Venezuela - Branar C.A.',
    },
    {
      name: 'twitter:description',
      content:
        'En Branar C.A. garantizamos soluciones confiables para tus equipos EPSON. Diagnóstico rápido, reparación con piezas originales y servicio técnico especializado.',
    },
    {
      name: 'twitter:image',
      content: 'https://branar.netlify.app/images/centro_autorizado_epson.webp',
    },
  ],
  link: [
    // Enlace canónico para evitar contenido duplicado
    {
      rel: 'canonical',
      href: 'https://branar.netlify.app/services/centro_autorizado_epson',
    },
  ],
});
</script>
