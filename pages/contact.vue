<template>
  <div>
    <h1>Contáctanos</h1>
    <form @submit.prevent="submitForm">
      <input type="text" v-model="name" placeholder="Tu nombre" required />
      <input type="email" v-model="email" placeholder="Tu correo" required />
      <textarea v-model="message" placeholder="Tu mensaje"></textarea>
      <button type="submit">Enviar</button>
    </form>
  </div>
</template>

<script setup>
const name = ref('');
const email = ref('');
const message = ref('');

useHead({
  title: 'Contacto - Branar C.A.',
  meta: [{ name: 'description', content: 'Ponte en contacto con Branar C.A.' }],
});

const submitForm = () => {
  alert(`Gracias, ${name.value}! Hemos recibido tu mensaje.`);
};
</script>
