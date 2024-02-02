<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-2 lg:gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Moroni1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Moroni2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Moroni3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Moroni4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Moroni5',$page.props.auth.user)">5</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Moroni6',$page.props.auth.user)">6</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Moroni7',$page.props.auth.user)">7</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Moroni8',$page.props.auth.user)">8</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Moroni9',$page.props.auth.user)">9</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Moroni10',$page.props.auth.user)">10</button>
    
    
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
	  uuid: 235,
	  bookID: 16,
	  book: "Moroni",
	  chapter: 1,
	  narrator: "Benn",
	  narratorImageName: "Benn",
	  chapterImageName: "BOMpic",
	  audioFileName: "Moroni1",
	  isActiveBookmark: false,
	  src: "assets/media/Moroni1.mp3",
	},
	{
	  uuid: 236,
	  bookID: 16,
	  book: "Moroni",
	  chapter: 2,
	  narrator: "Kate",
	  narratorImageName: "Kate",
	  chapterImageName: "BOMpic",
	  audioFileName: "Moroni2",
	  isActiveBookmark: false,
	  src: "assets/media/Moroni2.mp3",
	},
	{
	  uuid: 237,
	  bookID: 16,
	  book: "Moroni",
	  chapter: 3,
	  narrator: "Gunnar",
	  narratorImageName: "Gunnar",
	  chapterImageName: "BOMpic",
	  audioFileName: "Moroni3",
	  isActiveBookmark: false,
	  src: "assets/media/Moroni3.mp3",
	},
	{
	  uuid: 238,
	  bookID: 16,
	  book: "Moroni",
	  chapter: 4,
	  narrator: "Alan",
	  narratorImageName: "Alan",
	  chapterImageName: "BOMpic",
	  audioFileName: "Moroni4",
	  isActiveBookmark: false,
	  src: "assets/media/Moroni4.mp3",
	},
	{
	  uuid: 239,
	  bookID: 16,
	  book: "Moroni",
	  chapter: 5,
	  narrator: "Alan",
	  narratorImageName: "Alan",
	  chapterImageName: "BOMpic",
	  audioFileName: "Moroni5",
	  isActiveBookmark: false,
	  src: "assets/media/Moroni5.mp3",
	},
	{
	  uuid: 240,
	  bookID: 16,
	  book: "Moroni",
	  chapter: 6,
	  narrator: "Loree",
	  narratorImageName: "Loree",
	  chapterImageName: "BOMpic",
	  audioFileName: "Moroni6",
	  isActiveBookmark: false,
	  src: "assets/media/Moroni6.mp3",
	},
	{
	  uuid: 241,
	  bookID: 16,
	  book: "Moroni",
	  chapter: 7,
	  narrator: "Julie T",
	  narratorImageName: "JulieT",
	  chapterImageName: "BOMpic",
	  audioFileName: "Moroni7",
	  isActiveBookmark: false,
	  src: "assets/media/Moroni7.mp3",
	},
	{
	  uuid: 242,
	  bookID: 16,
	  book: "Moroni",
	  chapter: 8,
	  narrator: "Chloe",
	  narratorImageName: "Chloe",
	  chapterImageName: "BOMpic",
	  audioFileName: "Moroni8",
	  isActiveBookmark: false,
	  src: "assets/media/Moroni8.mp3",
	},
	{
	  uuid: 243,
	  bookID: 16,
	  book: "Moroni",
	  chapter: 9,
	  narrator: "Maren",
	  narratorImageName: "Maren",
	  chapterImageName: "BOMpic",
	  audioFileName: "Moroni9",
	  isActiveBookmark: false,
	  src: "assets/media/Moroni9.mp3",
	},
	{
	  uuid: 244,
	  bookID: 16,
	  book: "Moroni",
	  chapter: 10,
	  narrator: "Jedd",
	  narratorImageName: "Jedd",
	  chapterImageName: "Moroni10",
	  audioFileName: "Moroni10",
	  isActiveBookmark: false,
	  src: "assets/media/Moroni10.mp3",
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