<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-2 lg:gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Ether1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Ether2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Ether3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Ether4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Ether5',$page.props.auth.user)">5</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Ether6',$page.props.auth.user)">6</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Ether7',$page.props.auth.user)">7</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Ether8',$page.props.auth.user)">8</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Ether9',$page.props.auth.user)">9</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Ether10',$page.props.auth.user)">10</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Ether11',$page.props.auth.user)">11</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Ether12',$page.props.auth.user)">12</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Ether13',$page.props.auth.user)">13</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Ether14',$page.props.auth.user)">14</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Ether15',$page.props.auth.user)">15</button>
    
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
	  uuid: 220,
	  bookID: 15,
	  book: "Ether",
	  chapter: 1,
	  narrator: "Kurt",
	  narratorImageName: "Kurt",
	  chapterImageName: "Ether1",
	  audioFileName: "Ether1",
	  isActiveBookmark: false,
	  src: "assets/media/Ether1.mp3",
	},
	{
	  uuid: 221,
	  bookID: 15,
	  book: "Ether",
	  chapter: 2,
	  narrator: "Gina",
	  narratorImageName: "Gina",
	  chapterImageName: "Ether2",
	  audioFileName: "Ether2",
	  isActiveBookmark: false,
	  src: "assets/media/Ether2.mp3",
	},
	{
	  uuid: 222,
	  bookID: 15,
	  book: "Ether",
	  chapter: 3,
	  narrator: "Gina",
	  narratorImageName: "Gina",
	  chapterImageName: "Ether3",
	  audioFileName: "Ether3",
	  isActiveBookmark: false,
	  src: "assets/media/Ether3.mp3",
	},
	{
	  uuid: 223,
	  bookID: 15,
	  book: "Ether",
	  chapter: 4,
	  narrator: "Eric",
	  narratorImageName: "Eric",
	  chapterImageName: "BOMpic",
	  audioFileName: "Ether4",
	  isActiveBookmark: false,
	  src: "assets/media/Ether4.mp3",
	},
	{
	  uuid: 224,
	  bookID: 15,
	  book: "Ether",
	  chapter: 5,
	  narrator: "Benn",
	  narratorImageName: "Benn",
	  chapterImageName: "BOMpic",
	  audioFileName: "Ether5",
	  isActiveBookmark: false,
	  src: "assets/media/Ether5.mp3",
	},
	{
	  uuid: 225,
	  bookID: 15,
	  book: "Ether",
	  chapter: 6,
	  narrator: "Britta",
	  narratorImageName: "Britta",
	  chapterImageName: "BOMpic",
	  audioFileName: "Ether6",
	  isActiveBookmark: false,
	  src: "assets/media/Ether6.mp3",
	},
	{
	  uuid: 226,
	  bookID: 15,
	  book: "Ether",
	  chapter: 7,
	  narrator: "Greta",
	  narratorImageName: "Greta",
	  chapterImageName: "BOMpic",
	  audioFileName: "Ether7",
	  isActiveBookmark: false,
	  src: "assets/media/Ether7.mp3",
	},
	{
	  uuid: 227,
	  bookID: 15,
	  book: "Ether",
	  chapter: 8,
	  narrator: "Lexy",
	  narratorImageName: "Lexy",
	  chapterImageName: "BOMpic",
	  audioFileName: "Ether8",
	  isActiveBookmark: false,
	  src: "assets/media/Ether8.mp3",
	},
	{
	  uuid: 228,
	  bookID: 15,
	  book: "Ether",
	  chapter: 9,
	  narrator: "Gunnar",
	  narratorImageName: "Gunnar",
	  chapterImageName: "BOMpic",
	  audioFileName: "Ether9",
	  isActiveBookmark: false,
	  src: "assets/media/Ether9.mp3",
	},
	{
	  uuid: 229,
	  bookID: 15,
	  book: "Ether",
	  chapter: 10,
	  narrator: "Anika",
	  narratorImageName: "Anika",
	  chapterImageName: "BOMpic",
	  audioFileName: "Ether10",
	  isActiveBookmark: false,
	  src: "assets/media/Ether10.mp3",
	},
	{
	  uuid: 230,
	  bookID: 15,
	  book: "Ether",
	  chapter: 11,
	  narrator: "Gina",
	  narratorImageName: "Gina",
	  chapterImageName: "BOMpic",
	  audioFileName: "Ether11",
	  isActiveBookmark: false,
	  src: "assets/media/Ether11.mp3",
	},
	{
	  uuid: 231,
	  bookID: 15,
	  book: "Ether",
	  chapter: 12,
	  narrator: "Abby",
	  narratorImageName: "Abby",
	  chapterImageName: "BOMpic",
	  audioFileName: "Ether12",
	  isActiveBookmark: false,
	  src: "assets/media/Ether12.mp3",
	},
	{
	  uuid: 232,
	  bookID: 15,
	  book: "Ether",
	  chapter: 13,
	  narrator: "Gina",
	  narratorImageName: "Gina",
	  chapterImageName: "BOMpic",
	  audioFileName: "Ether13",
	  isActiveBookmark: false,
	  src: "assets/media/Ether13.mp3",
	},
	{
	  uuid: 233,
	  bookID: 15,
	  book: "Ether",
	  chapter: 14,
	  narrator: "Gina",
	  narratorImageName: "Gina",
	  chapterImageName: "BOMpic",
	  audioFileName: "Ether14",
	  isActiveBookmark: false,
	  src: "assets/media/Ether14.mp3",
	},
	{
	  uuid: 234,
	  bookID: 15,
	  book: "Ether",
	  chapter: 15,
	  narrator: "Sara",
	  narratorImageName: "Sara",
	  chapterImageName: "BOMpic",
	  audioFileName: "Ether15",
	  isActiveBookmark: false,
	  src: "assets/media/Ether15.mp3",
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
//   axios.put(route('reader', { uuid: selectedReader.uuid, user_id: user_id }));
  axios.put(`/api/reader/${user_id}`, {uuid: selectedReader.uuid},)
}

</script>