<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-2 lg:gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi5',$page.props.auth.user)">5</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi6',$page.props.auth.user)">6</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi7',$page.props.auth.user)">7</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi8',$page.props.auth.user)">8</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi9',$page.props.auth.user)">9</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi10',$page.props.auth.user)">10</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi11',$page.props.auth.user)">11</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi12',$page.props.auth.user)">12</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi13',$page.props.auth.user)">13</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi14',$page.props.auth.user)">14</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi15',$page.props.auth.user)">15</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi16',$page.props.auth.user)">16</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi17',$page.props.auth.user)">17</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi18',$page.props.auth.user)">18</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi19',$page.props.auth.user)">19</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi20',$page.props.auth.user)">20</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi21',$page.props.auth.user)">21</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi22',$page.props.auth.user)">22</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi23',$page.props.auth.user)">23</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi24',$page.props.auth.user)">24</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi25',$page.props.auth.user)">25</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi26',$page.props.auth.user)">26</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi27',$page.props.auth.user)">27</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi28',$page.props.auth.user)">28</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi29',$page.props.auth.user)">29</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('3Nephi30',$page.props.auth.user)">30</button>
    
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
	  uuid: 180,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 1,
	  narrator: "Gunnar",
	  narratorImageName: "Gunnar",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi1",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi1.mp3",
	},
	{
	  uuid: 181,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 2,
	  narrator: "Sara",
	  narratorImageName: "Sara",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi2",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi2.mp3",
	},
	{
	  uuid: 182,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 3,
	  narrator: "Gunnar",
	  narratorImageName: "Gunnar",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi3",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi3.mp3",
	},
	{
	  uuid: 183,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 4,
	  narrator: "Jim",
	  narratorImageName: "Jim",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi4",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi4.mp3",
	},
	{
	  uuid: 184,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 5,
	  narrator: "Eric",
	  narratorImageName: "Eric",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi5",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi5.mp3",
	},
	{
	  uuid: 185,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 6,
	  narrator: "Jedd",
	  narratorImageName: "Jedd",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi6",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi6.mp3",
	},
	{
	  uuid: 186,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 7,
	  narrator: "Sully",
	  narratorImageName: "Sully",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi7",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi7.mp3",
	},
	{
	  uuid: 187,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 8,
	  narrator: "Susan",
	  narratorImageName: "Susan",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi8",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi8.mp3",
	},
	{
	  uuid: 188,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 9,
	  narrator: "Susan",
	  narratorImageName: "Susan",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi9",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi9.mp3",
	},
	{
	  uuid: 189,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 10,
	  narrator: "Britta",
	  narratorImageName: "Britta",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi10",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi10.mp3",
	},
	{
	  uuid: 190,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 11,
	  narrator: "Julie W",
	  narratorImageName: "JulieW",
	  chapterImageName: "3Nephi11",
	  audioFileName: "3Nephi11",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi11.mp3",
	},
	{
	  uuid: 191,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 12,
	  narrator: "Melissa",
	  narratorImageName: "Melissa",
	  chapterImageName: "3Nephi12",
	  audioFileName: "3Nephi12",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi12.mp3",
	},
	{
	  uuid: 192,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 13,
	  narrator: "Brinton",
	  narratorImageName: "Brinton",
	  chapterImageName: "3Nephi13",
	  audioFileName: "3Nephi13",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi13.mp3",
	},
	{
	  uuid: 193,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 14,
	  narrator: "Brinton",
	  narratorImageName: "Brinton",
	  chapterImageName: "3Nephi14",
	  audioFileName: "3Nephi14",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi14.mp3",
	},
	{
	  uuid: 194,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 15,
	  narrator: "Maren",
	  narratorImageName: "Maren",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi15",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi15.mp3",
	},
	{
	  uuid: 195,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 16,
	  narrator: "Abby",
	  narratorImageName: "Abby",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi16",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi16.mp3",
	},
	{
	  uuid: 196,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 17,
	  narrator: "Kate",
	  narratorImageName: "Kate",
	  chapterImageName: "3Nephi17",
	  audioFileName: "3Nephi17",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi17.mp3",
	},
	{
	  uuid: 197,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 18,
	  narrator: "Jim",
	  narratorImageName: "Jim",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi18",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi18.mp3",
	},
	{
	  uuid: 198,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 19,
	  narrator: "Carol",
	  narratorImageName: "Carol",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi19",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi19.mp3",
	},
	{
	  uuid: 199,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 20,
	  narrator: "Julie W",
	  narratorImageName: "JulieW",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi20",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi20.mp3",
	},
	{
	  uuid: 200,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 21,
	  narrator: "Greta",
	  narratorImageName: "Greta",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi21",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi21.mp3",
	},
	{
	  uuid: 201,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 22,
	  narrator: "Sadie",
	  narratorImageName: "Sadie",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi22",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi22.mp3",
	},
	{
	  uuid: 202,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 23,
	  narrator: "Sadie",
	  narratorImageName: "Sadie",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi23",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi23.mp3",
	},
	{
	  uuid: 203,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 24,
	  narrator: "Nate",
	  narratorImageName: "Nate",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi24",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi24.mp3",
	},
	{
	  uuid: 204,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 25,
	  narrator: "Gunnar",
	  narratorImageName: "Gunnar",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi25",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi25.mp3",
	},
	{
	  uuid: 205,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 26,
	  narrator: "Abby",
	  narratorImageName: "Abby",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi26",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi26.mp3",
	},
	{
	  uuid: 206,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 27,
	  narrator: "Chloe",
	  narratorImageName: "Chloe",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi27",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi27.mp3",
	},
	{
	  uuid: 207,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 28,
	  narrator: "Dugan",
	  narratorImageName: "Dugan",
	  chapterImageName: "3Nephi28",
	  audioFileName: "3Nephi28",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi28.mp3",
	},
	{
	  uuid: 208,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 29,
	  narrator: "Lexy",
	  narratorImageName: "Lexy",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi29",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi29.mp3",
	},
	{
	  uuid: 209,
	  bookID: 12,
	  book: "3 Nephi",
	  chapter: 30,
	  narrator: "Kate",
	  narratorImageName: "Kate",
	  chapterImageName: "BOMpic",
	  audioFileName: "3Nephi30",
	  isActiveBookmark: false,
	  src: "assets/media/3Nephi30.mp3",
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