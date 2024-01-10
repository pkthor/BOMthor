<template>
  <div class="z-20">
    <h2 class="mb-4 font-bold text-center text-blue-900 text-1xl">
      The Book of Mormon
    </h2>
    <!-- <div class="container ml-8 flex flex-col">
      <ul class="text-white"> -->
        <div class="container mx-auto">
        <ul class="flex justify-center space-x-2 text-white ">
        <li>
          <button
            @click="currentTab(1)"
            class="inline-block px-4 py-2 bg-blue-500 focus:outline-none mb-1"
          >
            Tab 1
          </button>
        </li>
        <li>
          <button
            @click="currentTab(2)"
            class="inline-block px-4 py-2 bg-blue-500 focus:outline-none mb-1"
          >
            Tab 2
          </button>
        </li>
        <li>
          <button
            @click="currentTab(3)"
            class="inline-block px-4 py-2 bg-blue-500 focus:outline-none mb-1"
          >
            Tab 3
          </button>
        </li>
      </ul>
      <div class="p-3 mt-6 text-center bg-white">
        <div v-if="tab === 1">
          Tab 1 Content show Lorem ipsum dolor sit amet consectetur adipisicing
          elit. Quas sunt ducimus numquam! Quam, perspiciatis!
        </div>
        <div v-if="tab === 2">
          Tab 2 Content show Lorem ipsum dolor sit amet consectetur, adipisicing
          elit. aliquam rem. Exercitationem corporis eius voluptatibus.
        </div>
        <div v-if="tab === 3">
          Tab 3 Content show Lorem ipsum dolor sit amet consectetur adipisicing
          elit.
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";

const tab = ref(1);
const currentTab = (tabNumber) => (tab.value = tabNumber);
</script>