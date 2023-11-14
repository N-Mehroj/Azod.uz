<template>
  <div>
    <nav>
      <div class="nav flex justify-between pt-6 ">
        <RouterLink :to="{ name: 'home' }" class="bace_logo pt-1 dark:text-white text-3xl font-semibold">Azod.uz</RouterLink>
        <div class="lg:flex items-center aLink md:hidden hidden">
          <li class="p-2 mx-2 dark:text-white">
            <RouterLink :to="{ name: 'home' }" class="py-3">Bosh sahifa</RouterLink>
          </li>
          <li class="p-2 mx-2 dark:text-white">
            <RouterLink :to="{ name: 'blog' }" class="py-3">Blog</RouterLink>
          </li>
          <li class="p-2 mx-2 dark:text-white">
            <RouterLink :to="{ name: 'posts' }" class="py-3">Postlar</RouterLink>
          </li>
          <li class="p-2 mx-2 dark:text-white"><a href="#">Saxifalar</a></li>
          <li class="p-2 mx-2 dark:text-white"><a href="#">Bog'lanish</a></li>
        </div>
        <div class="action flex">
          <div class="flex items-center bg-[#F4F4F5] rounded-lg px-2">
            <input type="text" placeholder="Izlash" class="bg-[#F4F4F5] py-2 pl-3 lg:w-36 md:w-40 w-full" />
            <IconSearch class="mr-3" :size="22" />
          </div>
          <label class="relative md:inline-flex items-center mb-2 ml-8 cursor-pointer sm:hidden hidden ">
            <input type="checkbox" class="sr-only peer dark:bg-gray-200" @change="handleCheckboxChange" v-model="isDark" />
            <div
              class="w-12 h-7 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[5px] after:left-[3px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-al peer-checked:bg-blue-600">
            </div>

          </label>
          <IconMenu2 class="lg:hidden  md:inline mx-3 cursor-pointer" :size="35" />
        </div>
      </div>
    </nav>
  </div>
</template>
<script setup>
import { useDark, useToggle } from '@vueuse/core'
import { onMounted } from "vue"
import { googleOneTap,decodeCredential  } from "vue3-google-login"
import { useStoreData } from "@/store/store";

const isDark = useDark()
const toggleDark = useToggle(isDark)



const store = useStoreData()

onMounted(() => {
 if(localStorage.getItem('token') == null){
   googleOneTap({ autoLogin: true })
     .then((response) => {
           const userData = decodeCredential(response.credential)
            console.log("Handle the userData", userData)
             store.users(userData)
     })
     .catch((error) => {
              console.log("Handle the userData", error)
     })
 }else if(localStorage.getItem('token') != null){
    store.getUsers()
 } else{
    store.getUsers()
 }
    // return {
    //   user,
    // }
})
</script>
<script>
import { logo } from "../constants/";
import { IconSearch, IconMenu2 } from "@tabler/icons-vue";

import { mapState, mapActions } from "pinia";
import { useStoreData } from "@/store/store";

export default {
  data() {
    return {
      logo,
    };
  },
  components: {
    IconSearch,
    IconMenu2,
  },
  computed: {
    // ...mapState(useStoreData, ["modeData"]),
  },
  methods: {
    // handleCheckboxChange(event) {
    //   let mode = event.target.checked ? 'dark' : 'light';
    //   window.localStorage.setItem("mode", mode);
    //   // console.log(this.modeData);
    // }
  }
};
</script>
<style>
.aLink>li>a {
  font-size: 16px;
  font-style: normal;
  font-weight: 400;
  line-height: 24px;
}
</style>
