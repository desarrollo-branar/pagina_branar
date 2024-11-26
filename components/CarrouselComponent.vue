<template>
  <div class="glide">
    <div data-glide-el="track" class="glide__track">
      <ul class="glide__slides">
        <li class="glide__slide">
          <img src="https://branar.com/nuevas/banner1.jpg" class="w-full" alt="" />
        </li>
        <li class="glide__slide">
          <img src="https://branar.com/nuevas/banner2.jpg" class="w-full" alt="" />
        </li>
        <li class="glide__slide">
          <img src="https://branar.com/nuevas/banner1.jpg" class="w-full" alt="" />
        </li>
      </ul>
    </div>
    <!-- Navegación si la necesitas -->
    <div class="glide" style="position: initial">
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="14"
            height="14"
            viewBox="0 0 24 24"
            style="fill: #ffffff"
          >
            <path
              d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"
            ></path>
          </svg>
        </button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="14"
            height="14"
            viewBox="0 0 24 24"
            style="fill: #ffffff"
          >
            <path
              d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"
            ></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import Glide from '@glidejs/glide';
import { onMounted } from 'vue';

import '@glidejs/glide/dist/css/glide.core.min.css';
import '@glidejs/glide/dist/css/glide.theme.min.css';

onMounted(() => {
  new Glide('.glide', {
    type: 'carousel',
    startAt: 0,
  }).mount();
});
</script>
