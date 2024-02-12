<template>
  <div v-if="isOpen" class="grid grid-cols-4 gap-x-2 lg:gap-x-12 gap-y-2 max-w-fit">
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi1',$page.props.auth.user)">1</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi2',$page.props.auth.user)">2</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi3',$page.props.auth.user)">3</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi4',$page.props.auth.user)">4</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi5',$page.props.auth.user)">5</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi6',$page.props.auth.user)">6</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi7',$page.props.auth.user)">7</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi8',$page.props.auth.user)">8</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi9',$page.props.auth.user)">9</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi10',$page.props.auth.user)">10</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi11',$page.props.auth.user)">11</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi12',$page.props.auth.user)">12</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi13',$page.props.auth.user)">13</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi14',$page.props.auth.user)">14</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi15',$page.props.auth.user)">15</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi16',$page.props.auth.user)">16</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi17',$page.props.auth.user)">17</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi18',$page.props.auth.user)">18</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi19',$page.props.auth.user)">19</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi20',$page.props.auth.user)">20</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi21',$page.props.auth.user)">21</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi22',$page.props.auth.user)">22</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi23',$page.props.auth.user)">23</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi24',$page.props.auth.user)">24</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi25',$page.props.auth.user)">25</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi26',$page.props.auth.user)">26</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi27',$page.props.auth.user)">27</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi28',$page.props.auth.user)">28</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi29',$page.props.auth.user)">29</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi30',$page.props.auth.user)">30</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi31',$page.props.auth.user)">31</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi32',$page.props.auth.user)">32</button>
    <button class="z-40 bg-blue-100 hover:bg-blue-200 text-black text-base font-bold rounded h-8 w-8 hover:text-xl" @click="selectReaderForUser('2Nephi33',$page.props.auth.user)">33</button>
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
    uuid: 28,
    bookID: 3,
    book: "2 Nephi",
    chapter: 1,
    narrator: "Loree",
    narratorImageName: "Loree",
    chapterImageName: "2Nephi1",
    audioFileName: "2Nephi1",
    isActiveBookmark: false,
    src: "assets/media/2Nephi1.mp3",
  },
  {
    uuid: 29,
    bookID: 3,
    book: "2 Nephi",
    chapter: 2,
    narrator: "Jedd",
    narratorImageName: "Jedd",
    chapterImageName: "2Nephi2",
    audioFileName: "2Nephi2",
    isActiveBookmark: false,
    src: "assets/media/2Nephi2.mp3",
  },
  {
    uuid: 30,
    bookID: 3,
    book: "2 Nephi",
    chapter: 3,
    narrator: "Jedd",
    narratorImageName: "Jedd",
    chapterImageName: "2Nephi3",
    audioFileName: "2Nephi3",
    isActiveBookmark: false,
    src: "assets/media/2Nephi3.mp3",
  },
  {
    uuid: 31,
    bookID: 3,
    book: "2 Nephi",
    chapter: 4,
    narrator: "Julie T",
    narratorImageName: "JulieT",
    chapterImageName: "2Nephi4",
    audioFileName: "2Nephi4",
    isActiveBookmark: false,
    src: "assets/media/2Nephi4.mp3",
  },
  {
    uuid: 32,
    bookID: 3,
    book: "2 Nephi",
    chapter: 5,
    narrator: "Carley",
    narratorImageName: "Carley",
    chapterImageName: "2Nephi5",
    audioFileName: "2Nephi5",
    isActiveBookmark: false,
    src: "assets/media/2Nephi5.mp3",
  },
  {
    uuid: 33,
    bookID: 3,
    book: "2 Nephi",
    chapter: 6,
    narrator: "Alan",
    narratorImageName: "Alan",
    chapterImageName: "2Nephi6",
    audioFileName: "2Nephi6",
    isActiveBookmark: false,
    src: "assets/media/2Nephi6.mp3",
  },
  {
    uuid: 34,
    bookID: 3,
    book: "2 Nephi",
    chapter: 7,
    narrator: "Britta",
    narratorImageName: "Britta",
    chapterImageName: "2Nephi7",
    audioFileName: "2Nephi7",
    isActiveBookmark: false,
    src: "assets/media/2Nephi7.mp3",
  },
  {
    uuid: 35,
    bookID: 3,
    book: "2 Nephi",
    chapter: 8,
    narrator: "Anika",
    narratorImageName: "Anika",
    chapterImageName: "2Nephi8",
    audioFileName: "2Nephi8",
    isActiveBookmark: false,
    src: "assets/media/2Nephi8.mp3",
  },
  {
    uuid: 36,
    bookID: 3,
    book: "2 Nephi",
    chapter: 9,
    narrator: "Nels",
    narratorImageName: "Nels",
    chapterImageName: "2Nephi9",
    audioFileName: "2Nephi9",
    isActiveBookmark: false,
    src: "assets/media/2Nephi9.mp3",
  },
  {
    uuid: 37,
    bookID: 3,
    book: "2 Nephi",
    chapter: 10,
    narrator: "Mitchell",
    narratorImageName: "Mitchell",
    chapterImageName: "2Nephi10",
    audioFileName: "2Nephi10",
    isActiveBookmark: false,
    src: "assets/media/2Nephi10.mp3",
  },
  {
    uuid: 38,
    bookID: 3,
    book: "2 Nephi",
    chapter: 11,
    narrator: "Abby",
    narratorImageName: "Abby",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi11",
    isActiveBookmark: false,
    src: "assets/media/2Nephi11.mp3",
  },
  {
    uuid: 39,
    bookID: 3,
    book: "2 Nephi",
    chapter: 12,
    narrator: "Tera",
    narratorImageName: "Tera",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi12",
    isActiveBookmark: false,
    src: "assets/media/2Nephi12.mp3",
  },
  {
    uuid: 40,
    bookID: 3,
    book: "2 Nephi",
    chapter: 13,
    narrator: "Susan",
    narratorImageName: "Susan",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi13",
    isActiveBookmark: false,
    src: "assets/media/2Nephi13.mp3",
  },
  {
    uuid: 41,
    bookID: 3,
    book: "2 Nephi",
    chapter: 14,
    narrator: "Sully",
    narratorImageName: "Sully",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi14",
    isActiveBookmark: false,
    src: "assets/media/2Nephi14.mp3",
  },
  {
    uuid: 42,
    bookID: 3,
    book: "2 Nephi",
    chapter: 15,
    narrator: "Mitch",
    narratorImageName: "Mitch",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi15",
    isActiveBookmark: false,
    src: "assets/media/2Nephi15.mp3",
  },
  {
    uuid: 43,
    bookID: 3,
    book: "2 Nephi",
    chapter: 16,
    narrator: "Benn",
    narratorImageName: "Benn",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi16",
    isActiveBookmark: false,
    src: "assets/media/2Nephi16.mp3",
  },
  {
    uuid: 44,
    bookID: 3,
    book: "2 Nephi",
    chapter: 17,
    narrator: "Lars",
    narratorImageName: "Lars",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi17",
    isActiveBookmark: false,
    src: "assets/media/2Nephi17.mp3",
  },
  {
    uuid: 45,
    bookID: 3,
    book: "2 Nephi",
    chapter: 18,
    narrator: "Loree",
    narratorImageName: "Loree",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi18",
    isActiveBookmark: false,
    src: "assets/media/2Nephi18.mp3",
  },
  {
    uuid: 46,
    bookID: 3,
    book: "2 Nephi",
    chapter: 19,
    narrator: "Greta",
    narratorImageName: "Greta",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi19",
    isActiveBookmark: false,
    src: "assets/media/2Nephi19.mp3",
  },
  {
    uuid: 47,
    bookID: 3,
    book: "2 Nephi",
    chapter: 20,
    narrator: "Jim",
    narratorImageName: "Jim",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi20",
    isActiveBookmark: false,
    src: "assets/media/2Nephi20.mp3",
  },
  {
    uuid: 48,
    bookID: 3,
    book: "2 Nephi",
    chapter: 21,
    narrator: "Susan",
    narratorImageName: "Susan",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi21",
    isActiveBookmark: false,
    src: "assets/media/2Nephi21.mp3",
  },
  {
    uuid: 49,
    bookID: 3,
    book: "2 Nephi",
    chapter: 22,
    narrator: "Gunnar",
    narratorImageName: "Gunnar",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi22",
    isActiveBookmark: false,
    src: "assets/media/2Nephi22.mp3",
  },
  {
    uuid: 50,
    bookID: 3,
    book: "2 Nephi",
    chapter: 23,
    narrator: "Will",
    narratorImageName: "Will",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi23",
    isActiveBookmark: false,
    src: "assets/media/2Nephi23.mp3",
  },
  {
    uuid: 51,
    bookID: 3,
    book: "2 Nephi",
    chapter: 24,
    narrator: "Eric",
    narratorImageName: "Eric",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi24",
    isActiveBookmark: false,
    src: "assets/media/2Nephi24.mp3",
  },
  {
    uuid: 52,
    bookID: 3,
    book: "2 Nephi",
    chapter: 25,
    narrator: "Scot",
    narratorImageName: "Scot",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi25",
    isActiveBookmark: false,
    src: "assets/media/2Nephi25.mp3",
  },
  {
    uuid: 53,
    bookID: 3,
    book: "2 Nephi",
    chapter: 26,
    narrator: "Nate",
    narratorImageName: "Nate",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi26",
    isActiveBookmark: false,
    src: "assets/media/2Nephi26.mp3",
  },
  {
    uuid: 54,
    bookID: 3,
    book: "2 Nephi",
    chapter: 27,
    narrator: "Britta",
    narratorImageName: "Britta",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi27",
    isActiveBookmark: false,
    src: "assets/media/2Nephi27.mp3",
  },
  {
    uuid: 55,
    bookID: 3,
    book: "2 Nephi",
    chapter: 28,
    narrator: "Loree",
    narratorImageName: "Loree",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi28",
    isActiveBookmark: false,
    src: "assets/media/2Nephi28.mp3",
  },
  {
    uuid: 56,
    bookID: 3,
    book: "2 Nephi",
    chapter: 29,
    narrator: "Maren",
    narratorImageName: "Maren",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi29",
    isActiveBookmark: false,
    src: "assets/media/2Nephi29.mp3",
  },
  {
    uuid: 57,
    bookID: 3,
    book: "2 Nephi",
    chapter: 30,
    narrator: "Brinton",
    narratorImageName: "Brinton",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi30",
    isActiveBookmark: false,
    src: "assets/media/2Nephi30.mp3",
  },
  {
    uuid: 58,
    bookID: 3,
    book: "2 Nephi",
    chapter: 31,
    narrator: "Julie W",
    narratorImageName: "JulieW",
    chapterImageName: "2Nephi31",
    audioFileName: "2Nephi31",
    isActiveBookmark: false,
    src: "assets/media/2Nephi31.mp3",
  },
  {
    uuid: 59,
    bookID: 3,
    book: "2 Nephi",
    chapter: 32,
    narrator: "Julie W",
    narratorImageName: "JulieW",
    chapterImageName: "2Nephi32",
    audioFileName: "2Nephi32",
    isActiveBookmark: false,
    src: "assets/media/2Nephi32.mp3",
  },
  {
    uuid: 60,
    bookID: 3,
    book: "2 Nephi",
    chapter: 33,
    narrator: "Julie W",
    narratorImageName: "JulieW",
    chapterImageName: "BOMpic",
    audioFileName: "2Nephi33",
    isActiveBookmark: false,
    src: "assets/media/2Nephi33.mp3",
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
  // axios.put(route('reader', { uuid: selectedReader.uuid, user_id: user_id }));
  axios.put(`/api/reader/${user_id}`, {uuid: selectedReader.uuid},)
}

</script>