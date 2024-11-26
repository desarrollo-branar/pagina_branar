<template>
  <div class="fixed top-[50%] right-0 -translate-y-[50%] flex flex-col gap-2 z-20">
    <a
      href="https://www.facebook.com/BranarContacto"
      target="_blank"
      class="bg-[#3b5998] flex justify-center items-center w-[50px] text-white rounded-tl-lg rounded-bl-lg transition-all hover:pr-2"
    >
      <FacebookIcon class="w-12 h-12 py-2" />
    </a>
    <a
      href="https://www.instagram.com/contactobranar/"
      target="_blank"
      class="instagram-gradient flex justify-center items-center w-[50px] text-white rounded-tl-lg rounded-bl-lg transition-all hover:pr-2"
    >
      <InstagramIcon class="w-12 h-12 py-2" />
    </a>
    <a
      href="https://wa.link/rc1mal"
      target="_blank"
      class="bg-[#25d366] flex justify-center items-center w-[50px] text-white rounded-tl-lg rounded-bl-lg transition-all hover:pr-2"
    >
      <WhatsappIcon class="w-12 h-12 py-2" />
    </a>
    <a
      href="https://www.linkedin.com/company/branar-c-a-/"
      target="_blank"
      class="bg-[#0077b5] flex justify-center items-center w-[50px] text-white rounded-tl-lg rounded-bl-lg transition-all hover:pr-2"
    >
      <LinkedinIcon class="w-12 h-12 py-2" />
    </a>
  </div>
</template>

<script setup lang="ts">
import FacebookIcon from '~/assets/icons/FacebookIcon.vue';
import InstagramIcon from '~/assets/icons/InstagramIcon.vue';
import LinkedinIcon from '~/assets/icons/LinkedinIcon.vue';
import WhatsappIcon from '~/assets/icons/WhatsappIcon.vue';
</script>

<style scoped>
.instagram-gradient {
  background: linear-gradient(
    #405de6,
    #5b51d8,
    #833ab4,
    #c13584,
    #e1306c,
    #fd1d1d,
    #f56040,
    #f77737,
    #fcaf45,
    #ffdc80
  );
}
</style>
