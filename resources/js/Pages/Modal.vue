<template>
  <div class="container mx-auto flex justify-end">
    <div class="flex justify-center">
      <button
        @click="isOpen = true"
        class="
          dropdown-toggle
          px-6
          py-2.5
          bg-green-600
          text-white
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-blue-700 hover:shadow-lg
          focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-blue-800 active:shadow-lg active:text-white
          transition
          duration-150
          ease-in-out
          flex
          items-center
          whitespace-nowrap
        "
        type="button"
      >
        Il Libro di Mormon
        <svg
          aria-hidden="true"
          focusable="false"
          data-prefix="fas"
          data-icon="caret-right"
          class="w-1.5 ml-2"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 192 512"
        >
          <path
            fill="currentColor"
            d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"
          ></path>
        </svg>
      </button>
      <div
        v-show="isOpen"
        class="
          absolute
          inset-0
          flex
          items-center
          justify-center
          bg-gray-700 bg-opacity-50
        "
      >
        <ul
          class="
            dropdown-menu
            min-w-max
            absolute
            bg-white
            text-base
            z-50
            float-left
            py-2
            list-none
            text-left
            rounded-lg
            shadow-lg
            mt-1
            m-0
            bg-clip-padding
            border-none
          "
        >
          <li>
            <Link
              v-for="(item, index) in booknames"
              :key="index"
              :href="item.href"
              :data="{ test: item.icon }"
              class="
                dropdown-item
                text-sm
                py-2
                px-4
                font-normal
                block
                w-full
                whitespace-nowrap
                bg-transparent
                text-gray-700
                hover:bg-gray-100
              "
              >{{ item.label }}</Link
            >
          </li>
          <button
            @click="isOpen = false"
            class="px-6 py-2 text-blue-800 border border-blue-600 rounded ml-4"
          >
            Cancel
          </button>
          <!-- <button class="px-6 py-2 ml-2 text-blue-100 bg-blue-600 rounded">
            Save
          </button> -->
        </ul>
        >
      </div>
    </div>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

const isOpen = ref(false);
const test = ref("initial");
const booknames = [
  {
    href: "#",
    label: "Introduction",
    icon: "Icon1",
  },
  {
    href: "#",
    label: "1 Nephi",
    icon: "Icon2",
  },
  {
    href: "/",
    label: "2 Nephi",
    icon: "Icon2",
  },
  {
    href: "/",
    label: "Jacob",
    icon: "Icon2",
  },
  {
    href: "/",
    label: "Enos",
    icon: "Icon2",
  },
  {
    href: "/",
    label: "Jarom",
    icon: "Icon2",
  },
  {
    href: "/",
    label: "Omni",
    icon: "Icon2",
  },
  {
    href: "/",
    label: "Words of Mormon",
    icon: "Icon2",
  },
  {
    href: "/",
    label: "Mosiah",
    icon: "Icon2",
  },
  {
    href: "/",
    label: "Alma",
    icon: "Icon2",
  },
  {
    href: "/",
    label: "Helaman",
    icon: "Icon2",
  },
  {
    href: "/",
    label: "3 Nephi",
    icon: "Icon2",
  },
  {
    href: "/",
    label: "4 Nephi",
    icon: "Icon2",
  },
  {
    href: "/",
    label: "Mormon",
    icon: "Icon2",
  },
  {
    href: "/",
    label: "Ether",
    icon: "Icon2",
  },
  {
    href: "/",
    label: "Moroni",
    icon: "Icon2",
  },
];
function checkme() {
  // console.log(test);
}
</script>
