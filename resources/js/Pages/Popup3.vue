<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-2 lg:gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Jacob1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Jacob2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Jacob3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Jacob4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Jacob5',$page.props.auth.user)">5</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Jacob6',$page.props.auth.user)">6</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Jacob7',$page.props.auth.user)">7</button>
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
	  uuid: 61,
	  bookID: 4,
	  book: "Jacob",
	  chapter: 1,
	  narrator: "Dugan",
	  narratorImageName: "Dugan",
	  chapterImageName: "BOMpic",
	  audioFileName: "Jacob1",
	  isActiveBookmark: false,
	  src: "assets/media/Jacob1.mp3",
	},
	{
	  uuid: 62,
	  bookID: 4,
	  book: "Jacob",
	  chapter: 2,
	  narrator: "Mitch",
	  narratorImageName: "Mitch",
	  chapterImageName: "BOMpic",
	  audioFileName: "Jacob2",
	  isActiveBookmark: false,
	  src: "assets/media/Jacob2.mp3",
	},
	{
	  uuid: 63,
	  bookID: 4,
	  book: "Jacob",
	  chapter: 3,
	  narrator: "Lexy",
	  narratorImageName: "Lexy",
	  chapterImageName: "BOMpic",
	  audioFileName: "Jacob3",
	  isActiveBookmark: false,
	  src: "assets/media/Jacob3.mp3",
	},
	{
	  uuid: 64,
	  bookID: 4,
	  book: "Jacob",
	  chapter: 4,
	  narrator: "Gunnar",
	  narratorImageName: "Gunnar",
	  chapterImageName: "BOMpic",
	  audioFileName: "Jacob4",
	  isActiveBookmark: false,
	  src: "assets/media/Jacob4.mp3",
	},
	{
	  uuid: 65,
	  bookID: 4,
	  book: "Jacob",
	  chapter: 5,
	  narrator: "Susan",
	  narratorImageName: "Susan",
	  chapterImageName: "BOMpic",
	  audioFileName: "Jacob5",
	  isActiveBookmark: false,
	  src: "assets/media/Jacob5.mp3",
	},
	{
	  uuid: 66,
	  bookID: 4,
	  book: "Jacob",
	  chapter: 6,
	  narrator: "Sara",
	  narratorImageName: "Sara",
	  chapterImageName: "BOMpic",
	  audioFileName: "Jacob6",
	  isActiveBookmark: false,
	  src: "assets/media/Jacob6.mp3",
	},
	{
	  uuid: 67,
	  bookID: 4,
	  book: "Jacob",
	  chapter: 7,
	  narrator: "Chloe",
	  narratorImageName: "Chloe",
	  chapterImageName: "BOMpic",
	  audioFileName: "Jacob7",
	  isActiveBookmark: false,
	  src: "assets/media/Jacob7.mp3",
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