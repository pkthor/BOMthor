<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { ref, computed, reactive } from "vue";
import conversions2 from "../stores/conversions2.js";

const isItalian = ref(true);
const listIsOpen = ref(true);
const storyIsOpen = ref(false);
const selectedName = ref("");
var selectedStory = ref("");
var unSelectedStory = ref("");
const selectedSrcPhoto = ref("");
const flagSrc = ref("/assets/convImg/flagUS.png");

var conversionsA = computed(() => {
  const a = conversions2.sort(lastNameSort)
  console.log("Check me: ",a)
  return a;
})

var conversions = conversionsA.value;

function displayStory(name, storyItalian, storyEnglish, src) {
  storyIsOpen.value = true;
  listIsOpen.value = false;
  selectedName.value = name;
  selectedStory.value = storyItalian;
  unSelectedStory.value = storyEnglish;
  selectedSrcPhoto.value = src;
}
function resetPage() {
  storyIsOpen.value = false;
  listIsOpen.value = true;
  isItalian.value = true;
}

function useOtherVersion() {
  storyIsOpen.value = true;
  isItalian.value = !isItalian.value;
  const temp = selectedStory.value;
  selectedStory.value = unSelectedStory.value;
  unSelectedStory.value = temp;
}

function lastNameSort(x, y) {
  if (x.lastName < y.lastName) {
    return -1;
  }
  if (x.lastName > y.lastName) {
    return 1;
  }
  return 0;
}


const page = ref(1);

const data2 = Array.from(conversions);

const perPage = 12;

const paginatedData = computed(() =>
  data2.slice((page.value - 1) * perPage, page.value * perPage)
);

const nextPage = () => {
  if (page.value !== Math.ceil(data2.length / perPage)) {
    page.value += 1;
  }
};

const backPage = () => {
  if (page.value !== 1) {
    page.value -= 1;
  }
};

const goToPage = (numPage) => {
  page.value = numPage;
};
</script>

<template>
  <Head title="En alta voce" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2
        class="font-semibold text-3xl lg:text-xl text-black leading-tight mb-4"
      >
        Conversion Stories
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="bg-blue-300 overflow-hidden shadow-sm lg:rounded-lg">
          <div v-if="listIsOpen" class="p-2 bg-blue-300">
            <h1
              class="
                font-semibold
                text-3xl
                lg:text-2xl
                text-black
                leading-tight
                mb-4
                text-center
              "
            >
              Our Conversion Stories
            </h1>
            <div class="grid grid-cols-1 place-items-center mb-8">
              <!-- James' custom design -->
              <svg
                width="261"
                height="267"
                viewBox="0 0 87 89"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M85 10.4387V67.1053C85 72.0468 80.9941 76.0527 76.0527 76.0527H19.386"
                  stroke="#011F29"
                  stroke-width="2.98246"
                  stroke-linecap="round"
                />
                <mask
                  id="mask0_40_1116"
                  style="mask-type: alpha"
                  maskUnits="userSpaceOnUse"
                  x="8"
                  y="0"
                  width="73"
                  height="89"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M14.9123 6.10352e-05C11.618 6.10352e-05 8.94739 2.67065 8.94739 5.96498V65.6141C8.94739 68.9084 11.618 71.579 14.9123 71.579H23.8597V85.7596C23.8597 88.3417 26.918 89.7038 28.8373 87.9764L47.0566 71.579H74.5614C77.8558 71.579 80.5263 68.9084 80.5263 65.6141V5.96497C80.5263 2.67064 77.8557 6.10352e-05 74.5614 6.10352e-05H14.9123Z"
                    fill="#C4C4C4"
                  />
                </mask>
                <g mask="url(#mask0_40_1116)">
                  <rect
                    x="8.94739"
                    y="6.10352e-05"
                    width="23.8596"
                    height="89.4737"
                    fill="#40904D"
                  />
                  <rect
                    x="32.807"
                    y="0.00012207"
                    width="23.8596"
                    height="89.4737"
                    fill="white"
                  />
                  <rect
                    x="56.6667"
                    y="0.00012207"
                    width="23.8596"
                    height="89.4737"
                    fill="#BF383B"
                  />
                </g>
                <mask id="path-6-inside-1_40_1116" fill="white">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M14.9123 6.10352e-05C11.618 6.10352e-05 8.94739 2.67065 8.94739 5.96498V65.6141C8.94739 68.9084 11.618 71.579 14.9123 71.579H23.8597V85.7596C23.8597 88.3417 26.918 89.7038 28.8373 87.9764L47.0566 71.579H74.5614C77.8558 71.579 80.5263 68.9084 80.5263 65.6141V5.96497C80.5263 2.67064 77.8557 6.10352e-05 74.5614 6.10352e-05H14.9123Z"
                  />
                </mask>
                <path
                  d="M23.8597 71.579H29.8246C29.8246 68.2847 27.154 65.6141 23.8597 65.6141V71.579ZM28.8373 87.9764L32.8276 92.4101H32.8276L28.8373 87.9764ZM47.0566 71.579V65.6141C45.583 65.6141 44.1616 66.1596 43.0663 67.1453L47.0566 71.579ZM14.9123 5.96498V5.96497V-5.96485C8.32363 -5.96485 2.98248 -0.623671 2.98248 5.96498H14.9123ZM14.9123 65.6141V5.96498H2.98248V65.6141H14.9123ZM14.9123 65.6141H14.9123H2.98248C2.98248 72.2028 8.32365 77.5439 14.9123 77.5439V65.6141ZM23.8597 65.6141H14.9123V77.5439H23.8597V65.6141ZM29.8246 85.7596V71.579H17.8948V85.7596H29.8246ZM24.847 83.5427C26.7662 81.8154 29.8246 83.1774 29.8246 85.7596H17.8948C17.8948 93.5059 27.0698 97.5921 32.8276 92.4101L24.847 83.5427ZM43.0663 67.1453L24.847 83.5427L32.8276 92.4101L51.0469 76.0127L43.0663 67.1453ZM74.5614 65.6141H47.0566V77.5439H74.5614V65.6141ZM74.5614 65.6141V65.6141V77.5439C81.1501 77.5439 86.4912 72.2027 86.4912 65.6141H74.5614ZM74.5614 5.96497V65.6141H86.4912V5.96497H74.5614ZM74.5614 5.96497H74.5614H86.4912C86.4912 -0.623699 81.1501 -5.96485 74.5614 -5.96485V5.96497ZM14.9123 5.96497H74.5614V-5.96485H14.9123V5.96497Z"
                  fill="white"
                  mask="url(#path-6-inside-1_40_1116)"
                />
                <mask id="path-8-inside-2_40_1116" fill="white">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M14.9123 6.10352e-05C11.618 6.10352e-05 8.94739 2.67065 8.94739 5.96498V65.6141C8.94739 68.9084 11.618 71.579 14.9123 71.579H23.8597V85.7596C23.8597 88.3417 26.918 89.7038 28.8373 87.9764L47.0566 71.579H74.5614C77.8558 71.579 80.5263 68.9084 80.5263 65.6141V5.96497C80.5263 2.67064 77.8557 6.10352e-05 74.5614 6.10352e-05H14.9123Z"
                  />
                </mask>
                <path
                  d="M23.8597 71.579H26.8421C26.8421 69.9318 25.5068 68.5966 23.8597 68.5966V71.579ZM28.8373 87.9764L30.8324 90.1932L28.8373 87.9764ZM47.0566 71.579V68.5966C46.3198 68.5966 45.6091 68.8693 45.0615 69.3622L47.0566 71.579ZM11.9298 5.96498C11.9298 4.31781 13.2651 2.98252 14.9123 2.98252V-2.9824C9.9708 -2.9824 5.96493 1.02349 5.96493 5.96498H11.9298ZM11.9298 65.6141V5.96498H5.96493V65.6141H11.9298ZM14.9123 68.5966C13.2651 68.5966 11.9298 67.2613 11.9298 65.6141H5.96493C5.96493 70.5556 9.97082 74.5615 14.9123 74.5615V68.5966ZM23.8597 68.5966H14.9123V74.5615H23.8597V68.5966ZM26.8421 85.7596V71.579H20.8772V85.7596H26.8421ZM26.8421 85.7596C26.8318 85.7688 26.8254 85.7732 26.8234 85.7746C26.8214 85.7759 26.8221 85.7752 26.8254 85.7737C26.8287 85.7722 26.8331 85.7705 26.8383 85.769C26.8434 85.7675 26.8482 85.7666 26.8523 85.766C26.8605 85.7649 26.8633 85.7657 26.8604 85.7653C26.8571 85.7648 26.8504 85.7632 26.8421 85.7596C26.8338 85.7559 26.8282 85.7519 26.8256 85.7498C26.8233 85.7479 26.8259 85.7495 26.8305 85.7563C26.8329 85.7598 26.8354 85.7639 26.8377 85.7687C26.84 85.7736 26.8417 85.778 26.8428 85.7814C26.8439 85.7849 26.8438 85.7859 26.8435 85.7835C26.8431 85.7811 26.8421 85.7734 26.8421 85.7596H20.8772C20.8772 90.9238 26.9939 93.6479 30.8324 90.1932L26.8421 85.7596ZM45.0615 69.3622L26.8421 85.7596L30.8324 90.1932L49.0518 73.7959L45.0615 69.3622ZM74.5614 68.5966H47.0566V74.5615H74.5614V68.5966ZM77.5439 65.6141C77.5439 67.2613 76.2086 68.5966 74.5614 68.5966V74.5615C79.5029 74.5615 83.5088 70.5556 83.5088 65.6141H77.5439ZM77.5439 5.96497V65.6141H83.5088V5.96497H77.5439ZM74.5614 2.98252C76.2086 2.98252 77.5439 4.31781 77.5439 5.96497H83.5088C83.5088 1.02347 79.5029 -2.9824 74.5614 -2.9824V2.98252ZM14.9123 2.98252H74.5614V-2.9824H14.9123V2.98252Z"
                  fill="#011F29"
                  mask="url(#path-8-inside-2_40_1116)"
                />
                <circle cx="16.4035" cy="49.2106" r="4.47368" fill="white" />
                <mask
                  id="mask1_40_1116"
                  style="mask-type: alpha"
                  maskUnits="userSpaceOnUse"
                  x="12"
                  y="32"
                  width="12"
                  height="25"
                >
                  <rect x="12" y="32" width="12" height="25" fill="#C4C4C4" />
                </mask>
                <g mask="url(#mask1_40_1116)">
                  <path
                    d="M10 37.2808H10.4386C15.3801 37.2808 19.386 41.2866 19.386 46.2281V49.2106"
                    stroke="white"
                    stroke-width="2.98246"
                    stroke-linecap="round"
                  />
                </g>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M7.45614 38.772C3.33823 38.772 0 42.1102 0 46.2281V56.6667C0 60.7846 3.33823 64.1229 7.45614 64.1229H8.94737V61.1404H7.45614C4.98539 61.1404 2.98246 59.1375 2.98246 56.6667V46.2281C2.98246 43.7574 4.98539 41.7544 7.45614 41.7544H10.4386C12.9093 41.7544 14.9123 43.7574 14.9123 46.2281V49.2106C14.9123 50.0342 15.5799 50.7018 16.4035 50.7018C17.2271 50.7018 17.8947 50.0342 17.8947 49.2106V46.2281C17.8947 42.1102 14.5565 38.772 10.4386 38.772H7.45614Z"
                  fill="#011F29"
                />
                <mask
                  id="mask2_40_1116"
                  style="mask-type: alpha"
                  maskUnits="userSpaceOnUse"
                  x="12"
                  y="6"
                  width="10"
                  height="21"
                >
                  <rect
                    x="12"
                    y="6.00006"
                    width="10"
                    height="21"
                    fill="#C4C4C4"
                  />
                </mask>
                <g mask="url(#mask2_40_1116)">
                  <path
                    d="M10 8.94745H10.4386C15.3801 8.94745 19.386 12.9533 19.386 17.8948V20.8773C19.386 22.5244 18.0507 23.8597 16.4035 23.8597V23.8597C14.7564 23.8597 13.4211 22.5244 13.4211 20.8773V20.8773"
                    stroke="white"
                    stroke-width="2.98246"
                    stroke-linecap="round"
                  />
                </g>
                <circle cx="16.4035" cy="20.8773" r="4.47368" fill="white" />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M7.45614 10.4387C3.33823 10.4387 0 13.7769 0 17.8949V28.3335C0 32.4514 3.33823 35.7896 7.45614 35.7896H8.94737V32.8071H7.45614C4.98539 32.8071 2.98246 30.8042 2.98246 28.3335V17.8949C2.98246 15.4241 4.98539 13.4212 7.45614 13.4212H10.4386C12.9093 13.4212 14.9123 15.4241 14.9123 17.8949V20.8773C14.9123 21.7009 15.5799 22.3685 16.4035 22.3685C17.2271 22.3685 17.8947 21.7009 17.8947 20.8773V17.8949C17.8947 13.7769 14.5565 10.4387 10.4386 10.4387H7.45614Z"
                  fill="#011F29"
                />
              </svg>
            </div>
            <!-- Show the list view -->
            <ul class="grid grid-cols-3 place-items-center">
              <li
                v-for="story in paginatedData"
                :key="story.uuid"
                class="grid place-items-center"
              >
                <button
                  class="
                    font-semibold
                    text-2xl
                    lg:text-xl
                    text-black
                    leading-tight
                    m-auto
                    grid
                    place-items-center
                  "
                  type="button"
                  @click="
                    displayStory(
                      story.name,
                      story.storyTextItalian,
                      story.storyTextEnglish,
                      story.src
                    )
                  "
                >
                  <!-- The image is the button -->
                  <img
                    class="w-40 h-40 lg:h-40 lg:w-30 object-contain my-2 pt-4"
                    :src="story.src"
                    alt="italia"
                  />
                  {{ story.name }}
                </button>
              </li>
            </ul>
          </div>
          <div
            v-if="storyIsOpen"
            class="pb-6 bg-blue-300 border-b border-gray-200"
          >
            <!-- Show the English flag -->
            <div class="flex flex-row justify-between mx-6 mt-4">
              <div>
                <button type="button" @click="resetPage">
                  <svg
                    width="87"
                    height="89"
                    viewBox="0 0 87 89"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M85 10.4387V67.1053C85 72.0468 80.9941 76.0527 76.0527 76.0527H19.386"
                      stroke="#011F29"
                      stroke-width="2.98246"
                      stroke-linecap="round"
                    />
                    <mask
                      id="mask0_40_1116"
                      style="mask-type: alpha"
                      maskUnits="userSpaceOnUse"
                      x="8"
                      y="0"
                      width="73"
                      height="89"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M14.9123 6.10352e-05C11.618 6.10352e-05 8.94739 2.67065 8.94739 5.96498V65.6141C8.94739 68.9084 11.618 71.579 14.9123 71.579H23.8597V85.7596C23.8597 88.3417 26.918 89.7038 28.8373 87.9764L47.0566 71.579H74.5614C77.8558 71.579 80.5263 68.9084 80.5263 65.6141V5.96497C80.5263 2.67064 77.8557 6.10352e-05 74.5614 6.10352e-05H14.9123Z"
                        fill="#C4C4C4"
                      />
                    </mask>
                    <g mask="url(#mask0_40_1116)">
                      <rect
                        x="8.94739"
                        y="6.10352e-05"
                        width="23.8596"
                        height="89.4737"
                        fill="#40904D"
                      />
                      <rect
                        x="32.807"
                        y="0.00012207"
                        width="23.8596"
                        height="89.4737"
                        fill="white"
                      />
                      <rect
                        x="56.6667"
                        y="0.00012207"
                        width="23.8596"
                        height="89.4737"
                        fill="#BF383B"
                      />
                    </g>
                    <mask id="path-6-inside-1_40_1116" fill="white">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M14.9123 6.10352e-05C11.618 6.10352e-05 8.94739 2.67065 8.94739 5.96498V65.6141C8.94739 68.9084 11.618 71.579 14.9123 71.579H23.8597V85.7596C23.8597 88.3417 26.918 89.7038 28.8373 87.9764L47.0566 71.579H74.5614C77.8558 71.579 80.5263 68.9084 80.5263 65.6141V5.96497C80.5263 2.67064 77.8557 6.10352e-05 74.5614 6.10352e-05H14.9123Z"
                      />
                    </mask>
                    <path
                      d="M23.8597 71.579H29.8246C29.8246 68.2847 27.154 65.6141 23.8597 65.6141V71.579ZM28.8373 87.9764L32.8276 92.4101H32.8276L28.8373 87.9764ZM47.0566 71.579V65.6141C45.583 65.6141 44.1616 66.1596 43.0663 67.1453L47.0566 71.579ZM14.9123 5.96498V5.96497V-5.96485C8.32363 -5.96485 2.98248 -0.623671 2.98248 5.96498H14.9123ZM14.9123 65.6141V5.96498H2.98248V65.6141H14.9123ZM14.9123 65.6141H14.9123H2.98248C2.98248 72.2028 8.32365 77.5439 14.9123 77.5439V65.6141ZM23.8597 65.6141H14.9123V77.5439H23.8597V65.6141ZM29.8246 85.7596V71.579H17.8948V85.7596H29.8246ZM24.847 83.5427C26.7662 81.8154 29.8246 83.1774 29.8246 85.7596H17.8948C17.8948 93.5059 27.0698 97.5921 32.8276 92.4101L24.847 83.5427ZM43.0663 67.1453L24.847 83.5427L32.8276 92.4101L51.0469 76.0127L43.0663 67.1453ZM74.5614 65.6141H47.0566V77.5439H74.5614V65.6141ZM74.5614 65.6141V65.6141V77.5439C81.1501 77.5439 86.4912 72.2027 86.4912 65.6141H74.5614ZM74.5614 5.96497V65.6141H86.4912V5.96497H74.5614ZM74.5614 5.96497H74.5614H86.4912C86.4912 -0.623699 81.1501 -5.96485 74.5614 -5.96485V5.96497ZM14.9123 5.96497H74.5614V-5.96485H14.9123V5.96497Z"
                      fill="white"
                      mask="url(#path-6-inside-1_40_1116)"
                    />
                    <mask id="path-8-inside-2_40_1116" fill="white">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M14.9123 6.10352e-05C11.618 6.10352e-05 8.94739 2.67065 8.94739 5.96498V65.6141C8.94739 68.9084 11.618 71.579 14.9123 71.579H23.8597V85.7596C23.8597 88.3417 26.918 89.7038 28.8373 87.9764L47.0566 71.579H74.5614C77.8558 71.579 80.5263 68.9084 80.5263 65.6141V5.96497C80.5263 2.67064 77.8557 6.10352e-05 74.5614 6.10352e-05H14.9123Z"
                      />
                    </mask>
                    <path
                      d="M23.8597 71.579H26.8421C26.8421 69.9318 25.5068 68.5966 23.8597 68.5966V71.579ZM28.8373 87.9764L30.8324 90.1932L28.8373 87.9764ZM47.0566 71.579V68.5966C46.3198 68.5966 45.6091 68.8693 45.0615 69.3622L47.0566 71.579ZM11.9298 5.96498C11.9298 4.31781 13.2651 2.98252 14.9123 2.98252V-2.9824C9.9708 -2.9824 5.96493 1.02349 5.96493 5.96498H11.9298ZM11.9298 65.6141V5.96498H5.96493V65.6141H11.9298ZM14.9123 68.5966C13.2651 68.5966 11.9298 67.2613 11.9298 65.6141H5.96493C5.96493 70.5556 9.97082 74.5615 14.9123 74.5615V68.5966ZM23.8597 68.5966H14.9123V74.5615H23.8597V68.5966ZM26.8421 85.7596V71.579H20.8772V85.7596H26.8421ZM26.8421 85.7596C26.8318 85.7688 26.8254 85.7732 26.8234 85.7746C26.8214 85.7759 26.8221 85.7752 26.8254 85.7737C26.8287 85.7722 26.8331 85.7705 26.8383 85.769C26.8434 85.7675 26.8482 85.7666 26.8523 85.766C26.8605 85.7649 26.8633 85.7657 26.8604 85.7653C26.8571 85.7648 26.8504 85.7632 26.8421 85.7596C26.8338 85.7559 26.8282 85.7519 26.8256 85.7498C26.8233 85.7479 26.8259 85.7495 26.8305 85.7563C26.8329 85.7598 26.8354 85.7639 26.8377 85.7687C26.84 85.7736 26.8417 85.778 26.8428 85.7814C26.8439 85.7849 26.8438 85.7859 26.8435 85.7835C26.8431 85.7811 26.8421 85.7734 26.8421 85.7596H20.8772C20.8772 90.9238 26.9939 93.6479 30.8324 90.1932L26.8421 85.7596ZM45.0615 69.3622L26.8421 85.7596L30.8324 90.1932L49.0518 73.7959L45.0615 69.3622ZM74.5614 68.5966H47.0566V74.5615H74.5614V68.5966ZM77.5439 65.6141C77.5439 67.2613 76.2086 68.5966 74.5614 68.5966V74.5615C79.5029 74.5615 83.5088 70.5556 83.5088 65.6141H77.5439ZM77.5439 5.96497V65.6141H83.5088V5.96497H77.5439ZM74.5614 2.98252C76.2086 2.98252 77.5439 4.31781 77.5439 5.96497H83.5088C83.5088 1.02347 79.5029 -2.9824 74.5614 -2.9824V2.98252ZM14.9123 2.98252H74.5614V-2.9824H14.9123V2.98252Z"
                      fill="#011F29"
                      mask="url(#path-8-inside-2_40_1116)"
                    />
                    <circle
                      cx="16.4035"
                      cy="49.2106"
                      r="4.47368"
                      fill="white"
                    />
                    <mask
                      id="mask1_40_1116"
                      style="mask-type: alpha"
                      maskUnits="userSpaceOnUse"
                      x="12"
                      y="32"
                      width="12"
                      height="25"
                    >
                      <rect
                        x="12"
                        y="32"
                        width="12"
                        height="25"
                        fill="#C4C4C4"
                      />
                    </mask>
                    <g mask="url(#mask1_40_1116)">
                      <path
                        d="M10 37.2808H10.4386C15.3801 37.2808 19.386 41.2866 19.386 46.2281V49.2106"
                        stroke="white"
                        stroke-width="2.98246"
                        stroke-linecap="round"
                      />
                    </g>
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.45614 38.772C3.33823 38.772 0 42.1102 0 46.2281V56.6667C0 60.7846 3.33823 64.1229 7.45614 64.1229H8.94737V61.1404H7.45614C4.98539 61.1404 2.98246 59.1375 2.98246 56.6667V46.2281C2.98246 43.7574 4.98539 41.7544 7.45614 41.7544H10.4386C12.9093 41.7544 14.9123 43.7574 14.9123 46.2281V49.2106C14.9123 50.0342 15.5799 50.7018 16.4035 50.7018C17.2271 50.7018 17.8947 50.0342 17.8947 49.2106V46.2281C17.8947 42.1102 14.5565 38.772 10.4386 38.772H7.45614Z"
                      fill="#011F29"
                    />
                    <mask
                      id="mask2_40_1116"
                      style="mask-type: alpha"
                      maskUnits="userSpaceOnUse"
                      x="12"
                      y="6"
                      width="10"
                      height="21"
                    >
                      <rect
                        x="12"
                        y="6.00006"
                        width="10"
                        height="21"
                        fill="#C4C4C4"
                      />
                    </mask>
                    <g mask="url(#mask2_40_1116)">
                      <path
                        d="M10 8.94745H10.4386C15.3801 8.94745 19.386 12.9533 19.386 17.8948V20.8773C19.386 22.5244 18.0507 23.8597 16.4035 23.8597V23.8597C14.7564 23.8597 13.4211 22.5244 13.4211 20.8773V20.8773"
                        stroke="white"
                        stroke-width="2.98246"
                        stroke-linecap="round"
                      />
                    </g>
                    <circle
                      cx="16.4035"
                      cy="20.8773"
                      r="4.47368"
                      fill="white"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.45614 10.4387C3.33823 10.4387 0 13.7769 0 17.8949V28.3335C0 32.4514 3.33823 35.7896 7.45614 35.7896H8.94737V32.8071H7.45614C4.98539 32.8071 2.98246 30.8042 2.98246 28.3335V17.8949C2.98246 15.4241 4.98539 13.4212 7.45614 13.4212H10.4386C12.9093 13.4212 14.9123 15.4241 14.9123 17.8949V20.8773C14.9123 21.7009 15.5799 22.3685 16.4035 22.3685C17.2271 22.3685 17.8947 21.7009 17.8947 20.8773V17.8949C17.8947 13.7769 14.5565 10.4387 10.4386 10.4387H7.45614Z"
                      fill="#011F29"
                    />
                  </svg>
                  Ritorno
                </button>
              </div>
              <div class="h-12 w-12 mx-6 px-2" v-if="isItalian">
                <button type="button" @click="useOtherVersion()">
                  <img src="/assets/convImg/flagUS.png" alt="US flag" />
                  English
                </button>
              </div>
              <div class="h-12 w-12 mx-6 px-2" v-else>
                <button type="button" @click="useOtherVersion()">
                  <img src="/assets/convImg/flagIT.png" alt="US flag" />
                  Italiano
                </button>
              </div>
            </div>

            <div
              class="
                font-semibold
                text-4xl
                lg:text-3xl
                text-black
                eading-tight
                mb-4
                text-center
              "
            >
              {{ selectedName }}
            </div>
            <img
              class="float-left w-80 h-80 object-contain px-6 bg-blue-300"
              :src="selectedSrcPhoto"
              alt="storyteller's image"
            />

            <p
              class="
                ml-4
                font-semibold
                text-3xl
                lg:text-xl
                text-black
                leading-tight
                m-auto
                p-6
              "
            >
              <span v-html="selectedStory"></span>
            </p>
          </div>
        </div>

        <!-- Pagination buttons -->
        <div class="mt-4" v-if="listIsOpen">
          <button
            type="button"
            class="
              text-white
              bg-green-600
              hover:bg-green-700
              focus:ring-4 focus:ring-green-400
              font-medium
              rounded-lg
              text-base
              px-5
              py-2
              mr-2
              mb-2
              focus:outline-none
            "
            @click="backPage"
          >
            Indtr
          </button>
          <button
            type="button"
            class="
              text-black
              bg-white
              hover:bg-blue-600
              focus:ring-4 focus:ring-blue-300
              font-medium
              rounded-lg
              text-base
              px-5
              py-2
              mr-2
              mb-2
              focus:outline-none
            "
            v-for="item in Math.ceil(data2.length / perPage)"
            :key="item"
            @click="() => goToPage(item)"
          >
            {{ item }}
          </button>
          <button
            type="button"
            class="
              text-white
              bg-red-600
              hover:bg-red-700
              focus:ring-4 focus:ring-red-400
              font-medium
              rounded-lg
              text-base
              px-5
              py-2
              mr-2
              mb-2
              focus:outline-none
            "
            @click="nextPage"
          >
            Avnt
          </button>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
