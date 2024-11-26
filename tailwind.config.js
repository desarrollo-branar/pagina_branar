/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./components/**/*.{js,vue,ts}",
    "./layouts/**/*.vue",
    "./pages/**/*.vue",
    "./plugins/**/*.{js,ts}",
    "./app.vue",
    "./error.vue",
  ],
  theme: {
    extend: {
      // Agregar clases personalizadas
      extend: {
        after: {
          customAfter: {
            content: '""',
            height: '1px',
            backgroundColor: '#f36b21',
            position: 'absolute',
            left: '50%',
            top: '100%',
            transform: 'translateX(-50%)',
            zIndex: '10',
          },
        },
      },
    },
  },
  plugins: [],
}

