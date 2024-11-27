// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2024-04-03',
  modules: [
    ['@nuxtjs/robots', {
      rules: [
        {
          userAgent: '*', // Permite acceso a todos los bots
          allow: '/', // Permitir el acceso a todo el sitio
          disallow: '/admin', // Bloquear la ruta `/admin`
        }
      ],
      sitemap: 'https://tusitio.com/sitemap.xml', // URL del sitemap
    }],
  ],
  devtools: { enabled: true },
  css: ['~/assets/css/main.css'],
  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },
})