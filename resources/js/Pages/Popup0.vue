<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-2 lg:gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Intro1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Intro2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Intro3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Intro4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Intro5',$page.props.auth.user)">5</button>
  </div>
</template>

<script setup>
import { useReaderStore } from "../stores/Readers";
import { useMenuStore } from "../stores/Menus";
import { ref } from "vue";
import { storeToRefs,defineStore } from "pinia";
import { Head, Link } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3';
import axios from 'axios'

const isOpen = ref(true);
const selectedReader = useReaderStore();
const menuStatus = useMenuStore();

var allReaders = [
  {
    uuid: 1,
    bookID: 1,
    book: "Intro",
    chapter: 1,
    narrator: "Carol",
    narratorImageName: "Carol",
    chapterImageName: "Intro1",
    audioFileName: "Intro1",
    isActiveBookmark: false,
    src: "assets/media/Intro1.mp3",
  },
  {
    uuid: 2,
    bookID: 1,
    book: "Intro",
    chapter: 2,
    narrator: "Carol",
    narratorImageName: "Carol",
    chapterImageName: "Intro2",
    audioFileName: "Intro2",
    isActiveBookmark: false,
    src: "assets/media/Intro2.mp3",
  },
  {
    uuid: 3,
    bookID: 1,
    book: "Intro",
    chapter: 3,
    narrator: "Carol",
    narratorImageName: "Carol",
    chapterImageName: "Intro3",
    audioFileName: "Intro3",
    isActiveBookmark: false,
    src: "assets/media/Intro3.mp3",
  },
  {
    uuid: 4,
    bookID: 1,
    book: "Intro",
    chapter: 4,
    narrator: "Carol",
    narratorImageName: "Carol",
    chapterImageName: "Intro4",
    audioFileName: "Intro4",
    isActiveBookmark: false,
    src: "assets/media/Intro4.mp3",
  },
  {
    uuid: 5,
    bookID: 1,
    book: "Intro",
    chapter: 5,
    narrator: "Jim",
    narratorImageName: "Jim",
    chapterImageName: "Intro5",
    audioFileName: "Intro5",
    isActiveBookmark: false,
    src: "assets/media/Intro5.mp3",
  },
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
];

function selectReader(readerFileName) {
  isOpen.value = false;
  menuStatus.isMenuOpen = !menuStatus.isMenuOpen;
  const newReader = allReaders.filter((reader) => reader.audioFileName === readerFileName);
  populateSelectedReader(newReader)
}
function selectReaderForUser(readerFileName,user) {
  console.log("The user ID in selectReaderForUser is: ", user.id)
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