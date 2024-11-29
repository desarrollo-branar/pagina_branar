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

    <section class="relative flex items-center justify-center flex-col">
      <header class="w-full bg-blue-900 pt-16 pb-24 text-center">
        <h2 class="text-3xl text-gray-100">Elija el plan adecuado para usted</h2>
        <p class="text-md text-gray-100 mt-2">
          Precios diseñados para empresas de todos los tamaños. Elija el paquete que se adapte a sus
          necesidades.
        </p>
      </header>
      <TablePricingSocialMediaComponent />
    </section>

    <header class="flex flex-col items-center my-10 text-center">
      <h2
        class="relative text-[#275a9d] text-3xl sm:text-3xl md:text-5xl font-bold drop-shadow-md after:customAfter"
      >
        Transforma tu empresa con nuestro respaldo
      </h2>
      <p class="text-lg w-10/12 md:w-8/12 pt-2">
        Bienvenido a Branar, C.a,
        <strong class="text-[#ec8e39]">
          donde la excelencia en servicios tecnológicos se encuentra con la innovación
          constante.</strong
        >
        Somos una empresa dedicada a proporcionar soluciones tecnológicas avanzadas para empresas de
        todos los tamaños.
      </p>
    </header>

    <section class="flex flex-col justify-center items-center">
      <article class="w-full flex flex-wrap gap-6 justify-evenly items-center">
        <article>
          <a href="#">
            <div
              class="w-[300px] h-[300px] hover:shadow-md rounded-2xl bg-[#ec8e39] flex flex-col items-center justify-center transition-all text-white font-bold text-center"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="white"
                class="w-1/4"
              >
                <path
                  d="M21 7h-6a1 1 0 0 0-1 1v3h-2V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zM8 6h2v2H8V6zM6 16H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V6h2v2zm4 8H8v-2h2v2zm0-4H8v-2h2v2zm9 4h-2v-2h2v2zm0-4h-2v-2h2v2z"
                ></path>
              </svg>
              <p>Empresa B2B</p>
            </div>
          </a>
        </article>
        <article>
          <a href="#">
            <div
              class="w-[300px] h-[300px] hover:shadow-md rounded-2xl bg-[#ec8e39] flex flex-col items-center justify-center transition-all text-white font-bold text-center"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="white"
                class="w-1/4"
              >
                <path
                  d="M12 11.222 14.667 13l-.89-3.111L16 8l-2.667-.333L12 5l-1.333 2.667L8 8l2.223 1.889L9.333 13z"
                ></path>
                <path
                  d="M19 21.723V4a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v17.723l7-4.571 7 4.571zM8 8l2.667-.333L12 5l1.333 2.667L16 8l-2.223 1.889.89 3.111L12 11.222 9.333 13l.89-3.111L8 8z"
                ></path>
              </svg>
              <p>Más de 20 años de experiencia</p>
            </div>
          </a>
        </article>
        <article>
          <a href="#">
            <div
              class="w-[300px] h-[300px] hover:shadow-md rounded-2xl bg-[#ec8e39] flex flex-col items-center justify-center transition-all text-white font-bold text-center"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="white"
                class="w-1/4"
              >
                <path
                  d="M14 5H6c-1.103 0-2 .897-2 2v16l6-3.601L16 23V7c0-1.103-.897-2-2-2zm0 14.467-4-2.399-4 2.399V7h8v12.467z"
                ></path>
                <path
                  d="M18 1h-8c-1.103 0-2 .897-2 2h8c1.103 0 2 .897 2 2v10.443l2 2.489V3c0-1.103-.897-2-2-2z"
                ></path>
              </svg>
              <p>Líder en vanguardia del desarrollo tecnológico</p>
            </div>
          </a>
        </article>
      </article>
      <NuxtLink
        to="/about"
        class="py-[12px] px-[14px] mt-4 rounded-md border-2 border-[#275a9d] bg-white font-bold hover:bg-[#275a9d] hover:text-white"
        aria-label="Ir a la página de Sobre Nosotros"
      >
        Saber más
      </NuxtLink>
    </section>

    <section
      class="mt-6 bg-cover bg-[url('/images/navbar/fondofor.webp')] bg-no-repeat bg-fixed pb-6"
    >
      <header class="header_sec">
        <h2
          class="relative py-4 text-white text-center text-3xl sm:text-3xl md:text-5xl font-bold drop-shadow-md after:customAfter"
        >
          ¿TE INTERESAN NUESTROS SERVICIOS?
        </h2>
      </header>

      <article class="grid gap-4 mx-6 grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:md:grid-cols-2">
        <div class="flex flex-col items-center">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.2299702297105!2d-69.33538428524454!3d10.080233774413554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8767ab02d95f41%3A0x7704b1c5d591db07!2sBranar%20CA!5e0!3m2!1ses!2sve!4v1638893052516!5m2!1ses!2sve"
            class="w-full h-full"
            style="border: 0"
            allowfullscreen=""
            title="map"
            loading="lazy"
          ></iframe>
        </div>

        <div>
          <article class="w-full flex flex-col items-center justify-evenly">
            <form method="post" action="correo.php">
              <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-white font-bold"
                  >Nombre o Razón Social</label
                >
                <input
                  type="text"
                  class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                  name="name"
                  id="nombre"
                  placeholder="Nombre o Razon social"
                  required
                />
              </div>
              <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-white font-bold"
                  >Correo Electronico</label
                >
                <input
                  type="text"
                  class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                  name="email"
                  id="correo"
                  placeholder="Correo Electronico"
                  required
                />
              </div>
              <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm text-white font-bold">Mensaje</label>
                <textarea
                  id="message"
                  name="message"
                  class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                ></textarea>
              </div>
              <button
                type="submit"
                class="text-white bg-[#ec8e39] hover:bg-[#ee8325] font-semibold rounded-md text-sm px-4 py-2.5 w-full"
              >
                Enviar
              </button>
            </form>

            <div class="grid grid-cols-2 gap-6 py-4">
              <a
                href="https://www.facebook.com/BranarContacto"
                target="_blink"
                aria-label="Ir a Facebook de Branar"
                class="bg-[#3b5998] w-full py-2 px-3 border-none rounded-md flex items-center justify-center text-white"
              >
                <FacebookIcon class="w-[24px]" />
                Facebook
              </a>

              <a
                href="https://www.instagram.com/contactobranar/"
                target="_blink"
                aria-label="Ir a Instagram de Branar"
                class="instagram-gradient w-full py-2 px-3 border-none rounded-md flex items-center justify-center text-white"
              >
                <InstagramIcon class="w-[24px]" />
                Instagram
              </a>

              <a
                href="https://www.linkedin.com/company/branar-c-a-/"
                target="_blink"
                aria-label="Ir a Linkedin de Branar"
                class="bg-[#0e76a8] w-full py-2 px-3 border-none rounded-md flex items-center justify-center text-white"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="#ffffff"
                  class="w-[24px]"
                >
                  <path
                    d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM8.339 18.337H5.667v-8.59h2.672v8.59zM7.003 8.574a1.548 1.548 0 1 1 0-3.096 1.548 1.548 0 0 1 0 3.096zm11.335 9.763h-2.669V14.16c0-.996-.018-2.277-1.388-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248h-2.667v-8.59h2.56v1.174h.037c.355-.675 1.227-1.387 2.524-1.387 2.704 0 3.203 1.778 3.203 4.092v4.71z"
                  ></path>
                </svg>
                Linkedin
              </a>

              <a
                href="https://wa.link/rc1mal"
                target="_blink"
                aria-label="Ir a Whatsapp de Branar"
                class="bg-[#2db742] w-full py-2 px-3 border-none rounded-md flex items-center justify-center text-white"
              >
                <WhatsappIcon class="w-[24px]" />
                Whatsapp
              </a>
            </div>
          </article>
        </div>
      </article>
    </section>
  </main>
  <SocialFixed />
</template>

<script setup>
import FacebookIcon from '~/assets/icons/FacebookIcon.vue';
import InstagramIcon from '~/assets/icons/InstagramIcon.vue';
import WhatsappIcon from '~/assets/icons/WhatsappIcon.vue';
import CardGrid from '~/components/CardGrid.vue';
import CarrouselComponent from '~/components/CarrouselComponent.vue';
import SocialFixed from '~/components/SocialFixed.vue';
import TablePricingSocialMediaComponent from '~/components/TablePricingSocialMediaComponent.vue';

const cardData = [
  {
    title: 'Centro de Servicio Autorizado EPSON',
    description:
      'Confía en nuestro equipo para el mantenimiento y reparación de tus equipos. Garantizamos un rendimiento óptimo y mayor vida útil para tus dispositivos.',
    image: '/images/navbar/epson.webp',
    url: '/services/centro_autorizado_epson',
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
    // Metaetiquetas estándar
    {
      name: 'description',
      content:
        'Branar C.A. ofrece servicios tecnológicos avanzados en Venezuela para pequeñas y medianas empresas. Soluciones de tecnología, reparación Epson y desarrollo web.',
    },
    {
      name: 'keywords',
      content: 'Reparación de impresoras EPSON, Empresa de Servicios Tecnológicos, Desarrollo web',
    },
    {
      name: 'viewport',
      content: 'width=device-width, initial-scale=1',
    },

    // Open Graph (para redes sociales como Facebook y LinkedIn)
    {
      property: 'og:title',
      content: 'Empresa de Servicios Tecnológicos Venezuela - Branar C.A.',
    },
    {
      property: 'og:description',
      content:
        'Branar C.A. ofrece servicios tecnológicos avanzados en Venezuela para pequeñas y medianas empresas. Soluciones de tecnología, reparación Epson y desarrollo web.',
    },
    {
      property: 'og:image',
      content: 'https://branar.netlify.app/images/banner/banner1.webp',
    },
    {
      property: 'og:url',
      content: 'https://branar.netlify.app',
    },
    {
      property: 'og:type',
      content: 'website',
    },

    // Twitter Cards
    {
      name: 'twitter:card',
      content: 'summary_large_image',
    },
    {
      name: 'twitter:title',
      content: 'Empresa de Servicios Tecnológicos Venezuela - Branar C.A.',
    },
    {
      name: 'twitter:description',
      content:
        'Branar C.A. ofrece servicios tecnológicos avanzados en Venezuela para pequeñas y medianas empresas. Soluciones de tecnología, reparación Epson y desarrollo web.',
    },
    {
      name: 'twitter:image',
      content: 'https://branar.netlify.app/images/banner/banner1.webp',
    },
  ],
  link: [
    // Enlace canónico para evitar contenido duplicado
    {
      rel: 'canonical',
      href: 'https://branar.netlify.app',
    },
  ],
});
</script>
