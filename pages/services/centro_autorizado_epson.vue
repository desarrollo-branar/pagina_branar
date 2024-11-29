<template>
  <main class="pt-[80px] sm:pt-[80px]">
    <!-- banner top -->
    <div
      class="relative w-full h-[250px] bg-cover bg-center flex items-center justify-center"
      :style="{ backgroundImage: 'url(/images/navbar/printer-epson.webp)' }"
    >
      <div class="absolute top-0 left-0 right-0 bottom-0 bg-[#00000056]"></div>
      <h1 class="text-white text-center text-4xl font-bold uppercase p-6 z-10">
        Centro de Servicio Autorizado EPSON: Soluciones Confiables para tus Equipos
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
              Reparación y Mantenimiento Especializado
            </h2>
          </div>
          <p class="text-lg mt-6 pl-3">
            Nuestro equipo de técnicos altamente capacitados se encarga de brindar servicios de
            reparación y mantenimiento para tus equipos EPSON, asegurando su óptimo rendimiento y
            prolongando su vida útil. 🔧
          </p>
        </section>
        <div class="bg-[#275a9d] flex itemx-center justify-center w-5/6 border_img_wide">
          <img
            src="@/assets/images/impresora.webp"
            class="w-full h-full"
            alt="Branar impresoras Epson"
          />
        </div>
      </article>

      <!-- servicios -->
      <article class="py-10 bg-white">
        <header class="flex flex-col items-center my-10 text-center">
          <h2
            class="relative text-[#275a9d] text-3xl sm:text-3xl md:text-5xl font-bold drop-shadow-md after:customAfter"
          >
            Ofrecemos una amplia gama de servicios, incluyendo:
          </h2>
        </header>
        <section class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 m-6">
          <article class="ml-6 mt-6">
            <div
              class="bg-[url('@/assets/images/printer-epson.webp')] bg-orange-400 bg-cover relative w-11/12 h-[300px] p-5 rounded-lg text-white text-center flex flex-col itemx-center justify-between transition-all"
            >
              <div class="absolute top-0 left-0 right-0 bottom-0 bg-[#00000056] rounded-lg"></div>
              <div class="flex items-center justify-between gap-6 z-20 pt-3 text-left">
                <h3 class="text-lg">Diagnóstico Preciso y Rápido</h3>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="#ffffff"
                >
                  <path
                    d="M19 7h-1V2H6v5H5c-1.654 0-3 1.346-3 3v7c0 1.103.897 2 2 2h2v3h12v-3h2c1.103 0 2-.897 2-2v-7c0-1.654-1.346-3-3-3zM8 4h8v3H8V4zm8 16H8v-4h8v4zm4-3h-2v-3H6v3H4v-7c0-.551.449-1 1-1h14c.552 0 1 .449 1 1v7z"
                  ></path>
                  <path d="M14 10h4v2h-4z"></path>
                </svg>
              </div>
              <p class="text-md z-10 text-justify">
                Contamos con herramientas y conocimientos específicos para diagnosticar cualquier
                problema con tus impresoras y proyectores EPSON de manera rápida y precisa,
                ahorrándote tiempo y preocupaciones.
              </p>
            </div>
          </article>
          <article class="ml-6 mt-6">
            <div
              class="bg-[url('@/assets/images/replacement.webp')] bg-orange-400 bg-cover relative w-11/12 h-[300px] p-5 rounded-lg text-white text-center flex flex-col itemx-center justify-between transition-all"
            >
              <div class="absolute top-0 left-0 right-0 bottom-0 bg-[#00000056] rounded-lg"></div>
              <div class="flex items-center justify-between gap-6 z-20 pt-3 text-left">
                <h3 class="text-lg">Piezas y Repuestos Originales</h3>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="#ffffff"
                >
                  <path
                    d="M19 7h-1V2H6v5H5c-1.654 0-3 1.346-3 3v7c0 1.103.897 2 2 2h2v3h12v-3h2c1.103 0 2-.897 2-2v-7c0-1.654-1.346-3-3-3zM8 4h8v3H8V4zm8 16H8v-4h8v4zm4-3h-2v-3H6v3H4v-7c0-.551.449-1 1-1h14c.552 0 1 .449 1 1v7z"
                  ></path>
                  <path d="M14 10h4v2h-4z"></path>
                </svg>
              </div>
              <p class="text-md z-10 text-justify">
                Utilizamos únicamente piezas y repuestos originales de EPSON para asegurar la
                calidad y durabilidad de las reparaciones, evitando futuros inconvenientes.
              </p>
            </div>
          </article>
          <article class="ml-6 mt-6">
            <div
              class="bg-[url('@/assets/images/satisfaction_warranty.webp')] bg-orange-400 bg-cover relative w-11/12 h-[300px] p-5 rounded-lg text-white text-center flex flex-col itemx-center justify-between transition-all"
            >
              <div class="absolute top-0 left-0 right-0 bottom-0 bg-[#00000056] rounded-lg"></div>
              <div class="flex items-center justify-between gap-6 z-20 pt-3 text-left">
                <h3 class="text-lg">Garantía de Satisfacción</h3>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="#ffffff"
                >
                  <path
                    d="M19 7h-1V2H6v5H5c-1.654 0-3 1.346-3 3v7c0 1.103.897 2 2 2h2v3h12v-3h2c1.103 0 2-.897 2-2v-7c0-1.654-1.346-3-3-3zM8 4h8v3H8V4zm8 16H8v-4h8v4zm4-3h-2v-3H6v3H4v-7c0-.551.449-1 1-1h14c.552 0 1 .449 1 1v7z"
                  ></path>
                  <path d="M14 10h4v2h-4z"></path>
                </svg>
              </div>
              <p class="text-md z-10 text-justify">
                Nos enorgullecemos de ofrecer un servicio de calidad y una garantía de satisfacción
                para que puedas confiar en que tus equipos estarán en buenas manos.
              </p>
            </div>
          </article>
        </section>
      </article>

      <!-- certificado epson -->
      <article class="seccion_link" style="margin-bottom: 34px">
        <header class="flex flex-col items-center my-10 text-center">
          <h2
            class="relative text-[#275a9d] text-3xl sm:text-3xl md:text-5xl font-bold drop-shadow-md after:customAfter"
          >
            Servicio Certificado EPSON
          </h2>
          <p class="text-lg w-10/12 md:w-8/12 pt-2">
            Más sobre nuestra certificación
            <a
              class="text-[#275a9d] underline"
              target="_blank"
              href="https://epson.com.ve/servicelocator?productCode=SPT_C11CC86201#full"
              >aquí</a
            >
          </p>
        </header>
        <div>
          <img
            src="@/assets/images/centro_autorizado_epson.webp"
            alt="Servicio Certificado EPSON"
            width="100%"
          />
        </div>
      </article>

      <!-- Servicio Técnico EPSON Especializado -->
      <section class="">
        <header class="flex flex-col items-center my-10 text-center">
          <h2
            class="relative text-[#275a9d] text-3xl sm:text-3xl md:text-5xl font-bold drop-shadow-md after:customAfter"
          >
            Servicio Técnico EPSON Especializado
          </h2>
          <p class="text-lg w-10/12 md:w-8/12 pt-2">
            Reparación, Mantenimiento y Optimización para tus Equipos EPSON
          </p>
        </header>
        <article class="content-design">
          <div
            class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 place-items-center"
          >
            <img src="@/assets/images/image_printer_epson.webp" class="w-[60%]" alt="Epson" />
            <div class="p-3">
              <div class="flex items-center gap-3 mb-3">
                <span>✅</span>
                <p class="text-md">
                  <strong>Reparación Especializada:</strong> Servicios de reparación precisa y
                  efectiva para tus equipos EPSON, con soluciones rápidas y profesionales.
                </p>
              </div>
              <div class="flex items-center gap-3 mb-3">
                <span>✅</span>
                <p class="text-md">
                  <strong>Reemplazo de Piezas Defectuosas:</strong> Utilizamos solo piezas
                  originales de EPSON para asegurar calidad y confiabilidad en las reparaciones
                </p>
              </div>
              <div class="flex items-center gap-3 mb-3">
                <span>✅</span>
                <p class="text-md">
                  <strong>Actualización de Firmware y Software:</strong> Mantenemos tus equipos al
                  día con las últimas versiones de firmware y software de EPSON.
                </p>
              </div>
              <div class="flex items-center gap-3 mb-3">
                <span>✅</span>
                <p class="text-md">
                  <strong>Sustitución de Consumibles:</strong> Proporcionamos consumibles originales
                  y reemplazamos componentes para un rendimiento óptimo.
                </p>
              </div>
              <div class="flex items-center gap-3 mb-3">
                <span>✅</span>
                <p class="text-md">
                  <strong>Pruebas de Funcionamiento:</strong> Rigurosas pruebas antes de entregar
                  tus equipos reparados, asegurando su correcto funcionamiento.
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
  title: 'Centro de Servicio Autorizado Epson - Branar C.A.',
  meta: [
    // Metaetiquetas estándar
    {
      name: 'description',
      content:
        'Centro de Servicio Autorizado EPSON en Venezuela. Reparación, mantenimiento y piezas originales para impresoras y proyectores. Garantizamos calidad y satisfacción en cada servicio.',
    },
    {
      name: 'keywords',
      content:
        'Servicio Autorizado EPSON, reparación impresoras EPSON, mantenimiento EPSON Venezuela, piezas originales EPSON, soporte técnico EPSON',
    },
    {
      name: 'viewport',
      content: 'width=device-width, initial-scale=1',
    },

    // Open Graph (para redes sociales como Facebook y LinkedIn)
    {
      property: 'og:title',
      content: 'Centro de Servicio Autorizado EPSON en Venezuela - Branar C.A.',
    },
    {
      property: 'og:description',
      content:
        'Confía en Branar C.A., Centro de Servicio Autorizado EPSON en Venezuela. Ofrecemos diagnóstico rápido, reparación especializada y piezas originales para mantener tus equipos en óptimas condiciones.',
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
