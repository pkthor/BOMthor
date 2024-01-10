<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-2 lg:gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman5',$page.props.auth.user)">5</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman6',$page.props.auth.user)">6</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman7',$page.props.auth.user)">7</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman8',$page.props.auth.user)">8</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman9',$page.props.auth.user)">9</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman10',$page.props.auth.user)">10</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman11',$page.props.auth.user)">11</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman12',$page.props.auth.user)">12</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman13',$page.props.auth.user)">13</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman14',$page.props.auth.user)">14</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman15',$page.props.auth.user)">15</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-3xl lg:text-base font-bold rounded h-20 w-20 lg:h-10 lg:w-10 hover:text-xl" @click="selectReaderForUser('Helaman16',$page.props.auth.user)">16</button>
    
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
	  uuid: 164,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 1,
	  narrator: "Mya",
	  narratorImageName: "Mya",
	  chapterImageName: "BOMpic",
	  audioFileName: "Helaman1",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman1.mp3",
	},
	{
	  uuid: 165,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 2,
	  narrator: "Sara",
	  narratorImageName: "Sara",
	  chapterImageName: "BOMpic",
	  audioFileName: "Helaman2",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman2.mp3",
	},
	{
	  uuid: 166,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 3,
	  narrator: "Carley",
	  narratorImageName: "Carley",
	  chapterImageName: "BOMpic",
	  audioFileName: "Helaman3",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman3.mp3",
	},
	{
	  uuid: 167,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 4,
	  narrator: "Ali",
	  narratorImageName: "Ali",
	  chapterImageName: "BOMpic",
	  audioFileName: "Helaman4",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman4.mp3",
	},
	{
	  uuid: 168,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 5,
	  narrator: "Eric",
	  narratorImageName: "Eric",
	  chapterImageName: "Helaman5",
	  audioFileName: "Helaman5",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman5.mp3",
	},
	{
	  uuid: 169,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 6,
	  narrator: "Scot",
	  narratorImageName: "Scot",
	  chapterImageName: "BOMpic",
	  audioFileName: "Helaman6",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman6.mp3",
	},
	{
	  uuid: 170,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 7,
	  narrator: "Loree",
	  narratorImageName: "Loree",
	  chapterImageName: "BOMpic",
	  audioFileName: "Helaman7",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman7.mp3",
	},
	{
	  uuid: 171,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 8,
	  narrator: "Lexy",
	  narratorImageName: "Lexy",
	  chapterImageName: "BOMpic",
	  audioFileName: "Helaman8",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman8.mp3",
	},
	{
	  uuid: 172,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 9,
	  narrator: "Susan",
	  narratorImageName: "Susan",
	  chapterImageName: "BOMpic",
	  audioFileName: "Helaman9",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman9.mp3",
	},
	{
	  uuid: 173,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 10,
	  narrator: "Nels",
	  narratorImageName: "Nels",
	  chapterImageName: "BOMpic",
	  audioFileName: "Helaman10",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman10.mp3",
	},
	{
	  uuid: 174,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 11,
	  narrator: "Melissa",
	  narratorImageName: "Melissa",
	  chapterImageName: "BOMpic",
	  audioFileName: "Helaman11",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman11.mp3",
	},
	{
	  uuid: 175,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 12,
	  narrator: "Lars",
	  narratorImageName: "Lars",
	  chapterImageName: "BOMpic",
	  audioFileName: "Helaman12",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman12.mp3",
	},
	{
	  uuid: 176,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 13,
	  narrator: "Scot",
	  narratorImageName: "Scot",
	  chapterImageName: "Helaman13",
	  audioFileName: "Helaman13",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman13.mp3",
	},
	{
	  uuid: 177,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 14,
	  narrator: "Scot",
	  narratorImageName: "Scot",
	  chapterImageName: "BOMpic",
	  audioFileName: "Helaman14",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman14.mp3",
	},
	{
	  uuid: 178,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 15,
	  narrator: "Scot",
	  narratorImageName: "Scot",
	  chapterImageName: "BOMpic",
	  audioFileName: "Helaman15",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman15.mp3",
	},
	{
	  uuid: 179,
	  bookID: 11,
	  book: "Helaman",
	  chapter: 16,
	  narrator: "Anika",
	  narratorImageName: "Anika",
	  chapterImageName: "BOMpic",
	  audioFileName: "Helaman16",
	  isActiveBookmark: false,
	  src: "assets/media/Helaman16.mp3",
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