<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-2 lg:gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mormon1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mormon2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mormon3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mormon4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mormon5',$page.props.auth.user)">5</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mormon6',$page.props.auth.user)">6</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mormon7',$page.props.auth.user)">7</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mormon8',$page.props.auth.user)">8</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mormon9',$page.props.auth.user)">9</button>
    
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
	  uuid: 211,
	  bookID: 14,
	  book: "Mormon",
	  chapter: 1,
	  narrator: "Gina",
	  narratorImageName: "Gina",
	  chapterImageName: "Mormon1",
	  audioFileName: "Mormon1",
	  isActiveBookmark: false,
	  src: "assets/media/Mormon1.mp3",
	},
	{
	  uuid: 212,
	  bookID: 14,
	  book: "Mormon",
	  chapter: 2,
	  narrator: "Eric",
	  narratorImageName: "Eric",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mormon2",
	  isActiveBookmark: false,
	  src: "assets/media/Mormon2.mp3",
	},
	{
	  uuid: 213,
	  bookID: 14,
	  book: "Mormon",
	  chapter: 3,
	  narrator: "Lucie",
	  narratorImageName: "Lucie",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mormon3",
	  isActiveBookmark: false,
	  src: "assets/media/Mormon3.mp3",
	},
	{
	  uuid: 214,
	  bookID: 14,
	  book: "Mormon",
	  chapter: 4,
	  narrator: "Julie W",
	  narratorImageName: "JulieW",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mormon4",
	  isActiveBookmark: false,
	  src: "assets/media/Mormon4.mp3",
	},
	{
	  uuid: 215,
	  bookID: 14,
	  book: "Mormon",
	  chapter: 5,
	  narrator: "Kurt",
	  narratorImageName: "Kurt",
	  chapterImageName: "Mormon5",
	  audioFileName: "Mormon5",
	  isActiveBookmark: false,
	  src: "assets/media/Mormon5.mp3",
	},
	{
	  uuid: 216,
	  bookID: 14,
	  book: "Mormon",
	  chapter: 6,
	  narrator: "Mitch",
	  narratorImageName: "Mitch",
	  chapterImageName: "Mormon6",
	  audioFileName: "Mormon6",
	  isActiveBookmark: false,
	  src: "assets/media/Mormon6.mp3",
	},
	{
	  uuid: 217,
	  bookID: 14,
	  book: "Mormon",
	  chapter: 7,
	  narrator: "Ali",
	  narratorImageName: "Ali",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mormon7",
	  isActiveBookmark: false,
	  src: "assets/media/Mormon7.mp3",
	},
	{
	  uuid: 218,
	  bookID: 14,
	  book: "Mormon",
	  chapter: 8,
	  narrator: "Nels",
	  narratorImageName: "Nels",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mormon8",
	  isActiveBookmark: false,
	  src: "assets/media/Mormon8.mp3",
	},
	{
	  uuid: 219,
	  bookID: 14,
	  book: "Mormon",
	  chapter: 9,
	  narrator: "Jim",
	  narratorImageName: "Jim",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mormon9",
	  isActiveBookmark: false,
	  src: "assets/media/Mormon9.mp3",
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