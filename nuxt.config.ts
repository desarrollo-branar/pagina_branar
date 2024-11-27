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
      sitemap: 'https://branar.netlify.app/sitemap.xml', // URL del sitemap
    }],
    ['@nuxtjs/sitemap', {
      rules: [
        {
          hostname: 'https://branar.netlify.app', // URL base de tu sitio
          gzip: true, // Comprime el archivo sitemap para optimización
          routes: [
            '/', // Página principal
            '/about', // Agrega rutas estáticas
            '/contact',
            '/projects',
            '/services/csa',
            '/services/infraestructura',
            '/services/social-media',
            '/services/profit-plus',
            '/services/service-pack',
            '/services/desarrollo-web',
            '/services/ciber-seguridad',
          ],
        },
      ]
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