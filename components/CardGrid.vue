<template>
  <section class="grid grid-cols-1 gap-6 my-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
    <div
      v-for="(card, index) in cards"
      :key="index"
      class="w-full h-full flex justify-center items-center gap-4"
    >
      <div
        class="relative w-9/12 h-[250px] sm:w-[250px] sm:h-[250px] md:w-[300px] md:h-[300px] perspective card_content"
      >
        <!-- Parte Frontal -->
        <div
          class="front_card w-full h-full absolute rounded-lg overflow-hidden outline-none shadow-lg shadow-[rgba(190, 190, 190, 0.4)]"
        >
          <div
            class="front__img w-full h-[200px] bg-cover bg-center"
            :style="{ backgroundImage: `url(${card.image})` }"
          ></div>
          <div
            class="h-[50px] sm:h-[50px] md:h-[100px] lg:h-[100px] flex items-center justify-center text-center"
          >
            <div class="my-4 text-lg font-bold">
              {{ card.title }}
            </div>
          </div>
        </div>
        <!-- Parte Trasera -->
        <div
          class="back_card w-full h-full absolute rounded-lg overflow-hidden outline-none shadow-lg shadow-[rgba(190, 190, 190, 0.4)]"
        >
          <div class="back__content">
            <p>
              {{ card.description }}
            </p>
            <RouterLink :to="card.url" class="text-[#275a9d] font-bold">Ver más.</RouterLink>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'CardGrid',
  props: {
    cards: {
      type: Array,
      required: true,
      default: () => [],
    },
  },
};
</script>

<style scoped>
.perspective {
  perspective: 1000px;
}

.card_content:hover .front_card {
  transform: rotateY(180deg);
}
.card_content:hover .back_card {
  transform: rotateY(360deg);
}

.front_card,
.back_card {
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  transition: all 0.9s;
}

.front__content--add {
  font-size: 12px;
  color: #949494;
}

.back_card {
  transform: rotateY(180deg);
}
.back__content {
  padding: 20px;
}
.back__content p {
  font-size: var(--sm);
}
</style>
