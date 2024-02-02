<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-2 lg:gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah5',$page.props.auth.user)">5</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah6',$page.props.auth.user)">6</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah7',$page.props.auth.user)">7</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah8',$page.props.auth.user)">8</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah9',$page.props.auth.user)">9</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah10',$page.props.auth.user)">10</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah11',$page.props.auth.user)">11</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah12',$page.props.auth.user)">12</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah13',$page.props.auth.user)">13</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah14',$page.props.auth.user)">14</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah15',$page.props.auth.user)">15</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah16',$page.props.auth.user)">16</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah17',$page.props.auth.user)">17</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah18',$page.props.auth.user)">18</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah19',$page.props.auth.user)">19</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah20',$page.props.auth.user)">20</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah21',$page.props.auth.user)">21</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah22',$page.props.auth.user)">22</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah23',$page.props.auth.user)">23</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah24',$page.props.auth.user)">24</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah25',$page.props.auth.user)">25</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah26',$page.props.auth.user)">26</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah27',$page.props.auth.user)">27</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah28',$page.props.auth.user)">28</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('Mosiah29',$page.props.auth.user)">29</button>
    
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
	  uuid: 72,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 1,
	  narrator: "Tera",
	  narratorImageName: "Tera",
	  chapterImageName: "Mosiah1",
	  audioFileName: "Mosiah1",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah1.mp3",
	},
	{
	  uuid: 73,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 2,
	  narrator: "Julie T",
	  narratorImageName: "JulieT",
	  chapterImageName: "Mosiah2",
	  audioFileName: "Mosiah2",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah2.mp3",
	},
	{
	  uuid: 74,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 3,
	  narrator: "Julie T",
	  narratorImageName: "JulieT",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah3",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah3.mp3",
	},
	{
	  uuid: 75,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 4,
	  narrator: "Julie T",
	  narratorImageName: "JulieT",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah4",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah4.mp3",
	},
	{
	  uuid: 76,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 5,
	  narrator: "Maren",
	  narratorImageName: "Maren",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah5",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah5.mp3",
	},
	{
	  uuid: 77,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 6,
	  narrator: "Kate",
	  narratorImageName: "Kate",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah6",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah6.mp3",
	},
	{
	  uuid: 78,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 7,
	  narrator: "Brinton",
	  narratorImageName: "Brinton",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah7",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah7.mp3",
	},
	{
	  uuid: 79,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 8,
	  narrator: "Brinton",
	  narratorImageName: "Brinton",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah8",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah8.mp3",
	},
	{
	  uuid: 80,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 9,
	  narrator: "Mitchell",
	  narratorImageName: "Mitchell",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah9",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah9.mp3",
	},
	{
	  uuid: 81,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 10,
	  narrator: "Mitchell",
	  narratorImageName: "Mitchell",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah10",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah10.mp3",
	},
	{
	  uuid: 82,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 11,
	  narrator: "Mitchell",
	  narratorImageName: "Mitchell",
	  chapterImageName: "Mosiah11",
	  audioFileName: "Mosiah11",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah11.mp3",
	},
	{
	  uuid: 83,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 12,
	  narrator: "Tera",
	  narratorImageName: "Tera",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah12",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah12.mp3",
	},
	{
	  uuid: 84,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 13,
	  narrator: "Tera",
	  narratorImageName: "Tera",
	  chapterImageName: "Mosiah13",
	  audioFileName: "Mosiah13",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah13.mp3",
	},
	{
	  uuid: 85,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 14,
	  narrator: "Tera",
	  narratorImageName: "Tera",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah14",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah14.mp3",
	},
	{
	  uuid: 86,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 15,
	  narrator: "Alan",
	  narratorImageName: "Alan",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah15",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah15.mp3",
	},
	{
	  uuid: 87,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 16,
	  narrator: "Benn",
	  narratorImageName: "Benn",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah16",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah16.mp3",
	},
	{
	  uuid: 88,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 17,
	  narrator: "Kurt",
	  narratorImageName: "Kurt",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah17",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah17.mp3",
	},
	{
	  uuid: 89,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 18,
	  narrator: "Kurt",
	  narratorImageName: "Kurt",
	  chapterImageName: "Mosiah18",
	  audioFileName: "Mosiah18",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah18.mp3",
	},
	{
	  uuid: 90,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 19,
	  narrator: "James",
	  narratorImageName: "James",
	  chapterImageName: "Mosiah19",
	  audioFileName: "Mosiah19",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah19.mp3",
	},
	{
	  uuid: 91,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 20,
	  narrator: "Lexy",
	  narratorImageName: "Lexy",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah20",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah20.mp3",
	},
	{
	  uuid: 92,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 21,
	  narrator: "Chloe",
	  narratorImageName: "Chloe",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah21",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah21.mp3",
	},
	{
	  uuid: 93,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 22,
	  narrator: "Loree",
	  narratorImageName: "Loree",
	  chapterImageName: "Mosiah22",
	  audioFileName: "Mosiah22",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah22.mp3",
	},
	{
	  uuid: 94,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 23,
	  narrator: "Sadie",
	  narratorImageName: "Sadie",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah23",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah23.mp3",
	},
	{
	  uuid: 95,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 24,
	  narrator: "Sadie",
	  narratorImageName: "Sadie",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah24",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah24.mp3",
	},
	{
	  uuid: 96,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 25,
	  narrator: "Sadie",
	  narratorImageName: "Sadie",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah25",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah25.mp3",
	},
	{
	  uuid: 97,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 26,
	  narrator: "Abby",
	  narratorImageName: "Abby",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah26",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah26.mp3",
	},
	{
	  uuid: 98,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 27,
	  narrator: "Anika",
	  narratorImageName: "Anika",
	  chapterImageName: "Mosiah27",
	  audioFileName: "Mosiah27",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah27.mp3",
	},
	{
	  uuid: 99,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 28,
	  narrator: "Anika",
	  narratorImageName: "Anika",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah28",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah28.mp3",
	},
	{
	  uuid: 100,
	  bookID: 9,
	  book: "Mosiah",
	  chapter: 29,
	  narrator: "Anika",
	  narratorImageName: "Anika",
	  chapterImageName: "BOMpic",
	  audioFileName: "Mosiah29",
	  isActiveBookmark: false,
	  src: "assets/media/Mosiah29.mp3",
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