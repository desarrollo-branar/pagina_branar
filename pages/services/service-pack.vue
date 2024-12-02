<template>
  <main class="pt-[80px] sm:pt-[80px]">
    <!-- banner top -->
    <div
      class="relative w-full h-[250px] bg-cover bg-center flex items-center justify-center"
      :style="{ backgroundImage: 'url(/images/navbar/social-media.webp)' }"
    >
      <div class="absolute top-0 left-0 right-0 bottom-0 bg-[#00000056]"></div>
      <h1 class="text-white text-center text-4xl font-bold uppercase p-6 z-10">
        ServiPack: Soluciones Integrales para Empresas Modernas
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
              Soluciones Empresariales Personalizadas
            </h2>
          </div>
          <p class="text-lg mt-6 pl-3">
            Nuestro equipo de expertos en tecnología se encarga de desarrollar paquetes de servicios
            a medida que se ajusten a las necesidades únicas de tu empresa.
          </p>
        </section>
        <div class="flex itemx-center justify-center w-5/6">
          <img
            src="@/assets/images/servicio.webp"
            class="w-5/6 rounded-2xl"
            alt="Soporte Técnico Barquisimeto"
          />
        </div>
      </article>

      <!-- Servicio -->
      <section class="">
        <header class="flex flex-col items-center my-10 text-center">
          <h2
            class="relative text-[#275a9d] text-3xl sm:text-3xl md:text-5xl font-bold drop-shadow-md after:customAfter"
          >
            Aumenta la Productividad
          </h2>
          <p class="text-lg w-10/12 md:w-8/12 pt-2">
            Con Nuestro Service Pack, optimiza tus procesos internos y mejora la eficiencia de tu
            negocio. 💼
          </p>
        </header>
        <article class="content-design">
          <div
            class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 place-items-center"
          >
            <img
              src="@/assets/images/service.webp"
              class="w-[60%]"
              alt="Mantenimiento de computadoras"
            />
            <div class="p-3">
              <div class="flex items-center gap-3 mb-3">
                <span class="text-2xl">⚙️</span>
                <p class="text-lg">
                  <strong>Digitalización y Automatización:</strong> Optimiza tus procesos
                  empresariales con nuestras soluciones avanzadas de digitalización y
                  automatización.
                </p>
              </div>
              <div class="flex items-center gap-3 mb-3">
                <span class="text-2xl">🔒</span>
                <p class="text-lg">
                  <strong>Seguridad Informática Avanzada:</strong> Protege tu empresa de amenazas
                  cibernéticas con nuestra seguridad informática avanzada.
                </p>
              </div>
              <div class="flex items-center gap-3 mb-3">
                <span class="text-2xl">🌐</span>
                <p class="text-lg">
                  <strong>Gestión de Infraestructura Tecnológica:</strong> Mantén tus sistemas y
                  equipos en óptimo funcionamiento con nuestro servicio de gestión de
                  infraestructura tecnológica.
                </p>
              </div>
              <div class="flex items-center gap-3 mb-3">
                <span class="text-2xl">🤝</span>
                <p class="text-lg">
                  <strong>Asesoría en Tecnología:</strong> Incorpora tecnología de vanguardia en tu
                  empresa con la asesoría de nuestros expertos.
                </p>
              </div>
              <div class="flex items-center gap-3 mb-3">
                <span class="text-2xl">💻</span>
                <p class="text-lg">
                  <strong>Soporte Especializado para Software:</strong> Cuenta con nuestro equipo de
                  soporte especializado en una amplia gama de software empresarial.
                </p>
              </div>
            </div>
          </div>
        </article>
      </section>
    </section>
  </main>
  <SocialFixed />
</template>

<script setup lang="ts">
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
