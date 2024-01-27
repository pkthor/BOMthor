<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import Audio from "./Audio.vue";
import Tab2 from "./Tab2.vue";
import { ref,onMounted } from "vue";
import { useReaderStore } from "../stores/Readers";
import { useMenuStore } from "../stores/Menus";
import Button from "../Components/Button.vue";
import { storeToRefs,defineStore } from "pinia";

const selectedReader = useReaderStore();
const menuStatus = useMenuStore();
const theNewReader = [];
const menuIsOpen = ref(false);
function toggleMenu() {
  menuIsOpen.value = false;
}
onMounted(() => {
       })
function menuChosen() {
  menuStatus.isMenuOpen = !menuStatus.isMenuOpen
}
</script>

<template>
  <Head title="Thor BOM" />

  <BreezeAuthenticatedLayout>
    <div class="">
      <div class=" grid place-items-center">
          <div class="relative flex">
            <Button class=" lg:bg-green-300 hover:bg-green-400 mt-2 h-20 w-auto lg:h-10 font-bold text-white text-3xl lg:text-lg absolute top-0 left-0 ml-0 lg:ml-0 z-10 " @click="menuChosen"> Menu </Button>
            <Tab2 v-if="menuStatus.isMenuOpen"  class="absolute p-2 flex"/>
            <Audio />
          </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>

 