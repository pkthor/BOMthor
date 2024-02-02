<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-2 lg:gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi5',$page.props.auth.user)">5</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi6',$page.props.auth.user)">6</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi7',$page.props.auth.user)">7</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi8',$page.props.auth.user)">8</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi9',$page.props.auth.user)">9</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi10',$page.props.auth.user)">10</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi11',$page.props.auth.user)">11</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi12',$page.props.auth.user)">12</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi13',$page.props.auth.user)">13</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi14',$page.props.auth.user)">14</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi15',$page.props.auth.user)">15</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi16',$page.props.auth.user)">16</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi17',$page.props.auth.user)">17</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi18',$page.props.auth.user)">18</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi19',$page.props.auth.user)">19</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi20',$page.props.auth.user)">20</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi21',$page.props.auth.user)">21</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('1Nephi22',$page.props.auth.user)">22</button>
  </div>
</template>

<script setup>
import { useReaderStore } from "../stores/Readers";
import { useMenuStore } from "../stores/Menus";
import { ref } from "vue";
import { storeToRefs,defineStore } from "pinia";
import { Head, Link } from '@inertiajs/vue3';
import axios from 'axios'

const isOpen = ref(true);
const selectedReader = useReaderStore();
const menuStatus = useMenuStore();

var allReaders = [
  {
    uuid: 6,
    bookID: 2,
    book: "1 Nephi",
    chapter: 1,
    narrator: "Carol",
    narratorImageName: "Carol",
    chapterImageName: "1Nephi1",
    audioFileName: "1Nephi1",
    isActiveBookmark: false,
    src: "assets/media/1Nephi1.mp3",
  },
  {
    uuid: 7,
    bookID: 2,
    book: "1 Nephi",
    chapter: 2,
    narrator: "Gina",
    narratorImageName: "Gina",
    chapterImageName: "1Nephi2",
    audioFileName: "1Nephi2",
    isActiveBookmark: false,
    src: "assets/media/1Nephi2.mp3",
  },
  {
    uuid: 8,
    bookID: 2,
    book: "1 Nephi",
    chapter: 3,
    narrator: "Ali",
    narratorImageName: "Ali",
    chapterImageName: "1Nephi3",
    audioFileName: "1Nephi3",
    isActiveBookmark: false,
    src: "assets/media/1Nephi3.mp3",
  },
  {
    uuid: 9,
    bookID: 2,
    book: "1 Nephi",
    chapter: 4,
    narrator: "Ali",
    narratorImageName: "Ali",
    chapterImageName: "1Nephi4",
    audioFileName: "1Nephi4",
    isActiveBookmark: false,
    src: "assets/media/1Nephi4.mp3",
  },
  {
    uuid: 10,
    bookID: 2,
    book: "1 Nephi",
    chapter: 5,
    narrator: "Ali",
    narratorImageName: "Ali",
    chapterImageName: "1Nephi5",
    audioFileName: "1Nephi5",
    isActiveBookmark: false,
    src: "assets/media/1Nephi5.mp3",
  },
  {
    uuid: 11,
    bookID: 2,
    book: "1 Nephi",
    chapter: 6,
    narrator: "Benn",
    narratorImageName: "Benn",
    chapterImageName: "BOMpic",
    audioFileName: "1Nephi6",
    isActiveBookmark: false,
    src: "assets/media/1Nephi6.mp3",
  },
  {
    uuid: 12,
    bookID: 2,
    book: "1 Nephi",
    chapter: 7,
    narrator: "Loree",
    narratorImageName: "Loree",
    chapterImageName: "BOMpic",
    audioFileName: "1Nephi7",
    isActiveBookmark: false,
    src: "assets/media/1Nephi7.mp3",
  },
  {
    uuid: 13,
    bookID: 2,
    book: "1 Nephi",
    chapter: 8,
    narrator: "Lucie",
    narratorImageName: "Lucie",
    chapterImageName: "1Nephi8",
    audioFileName: "1Nephi8",
    isActiveBookmark: false,
    src: "assets/media/1Nephi8.mp3",
  },
  {
    uuid: 14,
    bookID: 2,
    book: "1 Nephi",
    chapter: 9,
    narrator: "Lucie",
    narratorImageName: "Lucie",
    chapterImageName: "BOMpic",
    audioFileName: "1Nephi9",
    isActiveBookmark: false,
    src: "assets/media/1Nephi9.mp3",
  },
  {
    uuid: 15,
    bookID: 2,
    book: "1 Nephi",
    chapter: 10,
    narrator: "James",
    narratorImageName: "James",
    chapterImageName: "BOMpic",
    audioFileName: "1Nephi10",
    isActiveBookmark: false,
    src: "assets/media/1Nephi10.mp3",
  },
  {
    uuid: 16,
    bookID: 2,
    book: "1 Nephi",
    chapter: 11,
    narrator: "Tera",
    narratorImageName: "Tera",
    chapterImageName: "1Nephi11",
    audioFileName: "1Nephi11",
    isActiveBookmark: false,
    src: "assets/media/1Nephi11.mp3",
  },
  {
    uuid: 17,
    bookID: 2,
    book: "1 Nephi",
    chapter: 12,
    narrator: "Kate",
    narratorImageName: "Kate",
    chapterImageName: "BOMpic",
    audioFileName: "1Nephi12",
    isActiveBookmark: false,
    src: "assets/media/1Nephi12.mp3",
  },
  {
    uuid: 18,
    bookID: 2,
    book: "1 Nephi",
    chapter: 13,
    narrator: "Jim",
    narratorImageName: "Jim",
    chapterImageName: "1Nephi13",
    audioFileName: "1Nephi13",
    isActiveBookmark: false,
    src: "assets/media/1Nephi13.mp3",
  },
  {
    uuid: 19,
    bookID: 2,
    book: "1 Nephi",
    chapter: 14,
    narrator: "Mitch",
    narratorImageName: "Mitch",
    chapterImageName: "BOMpic",
    audioFileName: "1Nephi14",
    isActiveBookmark: false,
    src: "assets/media/1Nephi14.mp3",
  },
  {
    uuid: 20,
    bookID: 2,
    book: "1 Nephi",
    chapter: 15,
    narrator: "Kurt",
    narratorImageName: "Kurt",
    chapterImageName: "BOMpic",
    audioFileName: "1Nephi15",
    isActiveBookmark: false,
    src: "assets/media/1Nephi15.mp3",
  },
  {
    uuid: 21,
    bookID: 2,
    book: "1 Nephi",
    chapter: 16,
    narrator: "Chloe",
    narratorImageName: "Chloe",
    chapterImageName: "1Nephi16",
    audioFileName: "1Nephi16",
    isActiveBookmark: false,
    src: "assets/media/1Nephi16.mp3",
  },
  {
    uuid: 22,
    bookID: 2,
    book: "1 Nephi",
    chapter: 17,
    narrator: "Nate",
    narratorImageName: "Nate",
    chapterImageName: "1Nephi17",
    audioFileName: "1Nephi17",
    isActiveBookmark: false,
    src: "assets/media/1Nephi17.mp3",
  },
  {
    uuid: 23,
    bookID: 2,
    book: "1 Nephi",
    chapter: 18,
    narrator: "Mya",
    narratorImageName: "Mya",
    chapterImageName: "1Nephi18",
    audioFileName: "1Nephi18",
    isActiveBookmark: false,
    src: "assets/media/1Nephi18.mp3",
  },
  {
    uuid: 24,
    bookID: 2,
    book: "1 Nephi",
    chapter: 19,
    narrator: "Will",
    narratorImageName: "Will",
    chapterImageName: "1Nephi19",
    audioFileName: "1Nephi19",
    isActiveBookmark: false,
    src: "assets/media/1Nephi19.mp3",
  },
  {
    uuid: 25,
    bookID: 2,
    book: "1 Nephi",
    chapter: 20,
    narrator: "Melissa",
    narratorImageName: "Melissa",
    chapterImageName: "1Nephi20",
    audioFileName: "1Nephi20",
    isActiveBookmark: false,
    src: "assets/media/1Nephi20.mp3",
  },
  {
    uuid: 26,
    bookID: 2,
    book: "1 Nephi",
    chapter: 21,
    narrator: "Nels",
    narratorImageName: "Nels",
    chapterImageName: "BOMpic",
    audioFileName: "1Nephi21",
    isActiveBookmark: false,
    src: "assets/media/1Nephi21.mp3",
  },
  {
    uuid: 27,
    bookID: 2,
    book: "1 Nephi",
    chapter: 22,
    narrator: "Lexy",
    narratorImageName: "Lexy",
    chapterImageName: "BOMpic",
    audioFileName: "1Nephi22",
    isActiveBookmark: false,
    src: "assets/media/1Nephi22.mp3",
  },
];

function selectReader(readerFileName) {
  isOpen.value = false;
  menuStatus.isMenuOpen = !menuStatus.isMenuOpen;
  const newReader = allReaders.filter((reader) => reader.audioFileName === readerFileName);
  populateSelectedReader(newReader)
}
function selectReaderForUser(readerFileName,user) {
  isOpen.value = false;
  menuStatus.isMenuOpen = !menuStatus.isMenuOpen;
  const newReader = allReaders.filter((reader) => reader.audioFileName === readerFileName);
  populateSelectedReaderForUserID(newReader,user.id)
}
function populateSelectedReaderForUserID(newReader,user_id) {
  selectedReader.uuid = newReader[0].uuid
  selectedReader.bookID = newReader[0].bookID
  selectedReader.book = newReader[0].book
  selectedReader.chapter = newReader[0].chapter
  selectedReader.narrator = newReader[0].narrator
  selectedReader.narratorImageName = newReader[0].narratorImageName
  selectedReader.chapterImageName = newReader[0].chapterImageName
  selectedReader.audioFileName = newReader[0].audioFileName
  selectedReader.isActiveBookmark = newReader[0].isActiveBookmark
  selectedReader.src = newReader[0].src
  newReader.splice(0,1) //Remove item at [0]. 2nd parameter means remove one item only
  axios.put(route('reader', { uuid: selectedReader.uuid, user_id: user_id }));
}

</script>