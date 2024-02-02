<template>
  <div class="z-20">
    <div class="absolute ml-8 flex flex-col">
      <ul
        v-for="(item, index) in booknames"
        :key="index"
        :href="item.href"
        class=" text-gray-800 text-base font-bold bg-white opacity-80 min-w-max"
      >
        <li>
          <button
            @click="currentTab(item.label)"
            class="flex px-4 py-2 focus:outline-none mb-1 justify-between"
          >
            {{ item.label }}
            <!-- this is the down facing caret svg -->
            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>
        </li>
      </ul>
    </div>
    <div class="ml-60 z-40 -translate-x-46 lg:-translate-x-4">
      <div>
        <div v-if="tab === 'Introduction'">
          <Popup0 />
        </div>
        <div v-if="tab === '1 Nephi'">
          <Popup1 />
        </div>
        <div v-if="tab === '2 Nephi'">
          <Popup2 />
        </div>
        <div v-if="tab === 'Jacob'">
          <Popup3 />
        </div>
        <div v-if="tab === 'Enos'">
          <Popup4 />
        </div>
        <div v-if="tab === 'Jarom'">
          <Popup5 />
        </div>
        <div v-if="tab === 'Omni'">
          <Popup6 />
        </div>
        <div v-if="tab === 'Words of Mormon'">
          <Popup7 />
        </div>
        <div v-if="tab === 'Mosiah'">
          <Popup8 />
        </div>
        <div v-if="tab === 'Alma'">
          <Popup9 />
        </div>
        <div v-if="tab === 'Helaman'">
          <Popup10 />
        </div>
        <div v-if="tab === '3 Nephi'">
          <Popup11 />
        </div>
        <div v-if="tab === '4 Nephi'">
          <Popup12 />
        </div>
        <div v-if="tab === 'Mormon'">
          <Popup13 />
        </div>
        <div v-if="tab === 'Ether'">
          <Popup14 />
        </div>
        <div v-if="tab === 'Moroni'">
          <Popup15 />
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onBeforeMount, ref } from "vue"

// import { eventBus } from "../app";
import Popup0 from "./Popup0.vue"
import Popup1 from "./Popup1.vue"
import Popup2 from "./Popup2.vue"
import Popup3 from "./Popup3.vue"
import Popup4 from "./Popup4.vue"
import Popup5 from "./Popup5.vue"
import Popup6 from "./Popup6.vue"
import Popup7 from "./Popup7.vue"
import Popup8 from "./Popup8.vue"
import Popup9 from "./Popup9.vue"
import Popup10 from "./Popup10.vue"
import Popup11 from "./Popup11.vue"
import Popup12 from "./Popup12.vue"
import Popup13 from "./Popup13.vue"
import Popup14 from "./Popup14.vue"
import Popup15 from "./Popup15.vue"

const isOpen = ref(true)
const tab = ref(1)
function currentTab(tabNumber) {
  tab.value = tabNumber
}
function changeTheMenu(theSelectedReader) {
}
const booknames = [
  {
    index: 0,
    href: "#",
    label: "Introduction",
    icon: "Icon1",
  },
  {
    index: 1,
    href: "#",
    label: "1 Nephi",
    icon: "Icon2",
  },
  {
    index: 2,
    href: "/",
    label: "2 Nephi",
    icon: "Icon2",
  },
  {
    index: 3,
    href: "/",
    label: "Jacob",
    icon: "Icon2",
  },
  {
    index: 4,
    href: "/",
    label: "Enos",
    icon: "Icon2",
  },
  {
    index: 5,
    href: "/",
    label: "Jarom",
    icon: "Icon2",
  },
  {
    index: 6,
    href: "/",
    label: "Omni",
    icon: "Icon2",
  },
  {
    index: 7,
    href: "/",
    label: "Words of Mormon",
    icon: "Icon2",
  },
  {
    index: 8,
    href: "/",
    label: "Mosiah",
    icon: "Icon2",
  },
  {
    index: 9,
    href: "/",
    label: "Alma",
    icon: "Icon2",
  },
  {
    index: 10,
    href: "/",
    label: "Helaman",
    icon: "Icon2",
  },
  {
    index: 11,
    href: "/",
    label: "3 Nephi",
    icon: "Icon2",
  },
  {
    index: 12,
    href: "/",
    label: "4 Nephi",
    icon: "Icon2",
  },
  {
    index: 13,
    href: "/",
    label: "Mormon",
    icon: "Icon2",
  },
  {
    index: 14,
    href: "/",
    label: "Ether",
    icon: "Icon2",
  },
  {
    index: 15,
    href: "/",
    label: "Moroni",
    icon: "Icon2",
  },
]
</script>