<template>
  <div>
    <nav>
      <div class="nav flex justify-between pt-6 ">
        <RouterLink :to="{ name: 'home' }" class="bace_logo pt-1 dark:text-white text-3xl font-semibold">Azod.uz
        </RouterLink>
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
            <input type="text" placeholder="Search" class="bg-[#F4F4F5] py-2 pl-3 lg:w-36 md:w-40 w-full" />
            <IconSearch class="mr-3" :size="22" />
          </div>
          <label class="relative md:inline-flex items-center mb-2 ml-8 cursor-pointer sm:hidden hidden ">




            <input type="checkbox" class="sr-only peer dark:bg-gray-200" id="DLcheckbox" @change="handleCheckboxChange" v-model="isDark">
            <div class="DLbottonBox">
              <label class="DLbutton" for="DLcheckbox">
                <div class="sun" id="sun"></div>
                <svg class="Moon" version="1.1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="179.77px" height="210.11px"
                  viewBox="0 0 179.77 210.11" style="enable-background:new 0 0 179.77 210.11;" xml:space="preserve">
                  <defs>
                  </defs>
                  <path id="hi_1_" d="M104.78,0c3.15,0.26,6.44-0.22,8.96,0.96c2.68,1.26,6.17,3.89,6.47,6.28c0.29,2.37-2.36,6.09-4.74,7.63
        C101.6,23.82,90.15,35.08,82.89,49.9c-7.06,14.4-9.35,29.69-7.38,45.91c2.47,20.33,10.73,37.38,25.57,51.22
        c11.24,10.48,24.45,17.45,39.65,20.27c10.03,1.86,20.02,2.96,30.21,0.28c3.47-0.91,6.25,1.48,8.01,5.08
        c2.13,4.37-0.36,7.16-2.89,9.5c-12.21,11.31-26.29,19.46-42.41,23.87c-16.6,4.54-33.37,5.51-50.25,1.77
        c-21.19-4.7-39.67-14.54-54.58-30.4c-14.11-15.01-23.08-32.75-26.92-53.12c-4.67-24.74-0.72-48.04,11.1-70.05
        c9.19-17.12,22.66-30.1,39.41-39.82C63.73,7.84,75.91,3.76,88.68,1.47C94.02,0.52,99.51,0.46,104.78,0z" />
                </svg>
              </label>
            </div>



            <!-- <input type="checkbox" class="sr-only peer dark:bg-gray-200" @change="handleCheckboxChange"
              v-model="isDark" />
            <div
              class="w-12 h-7 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[5px] after:left-[3px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-al peer-checked:bg-blue-600">
            </div> -->

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
import { googleOneTap, decodeCredential } from "vue3-google-login"
import { useStoreData } from "@/store/store";

const isDark = useDark()
const toggleDark = useToggle(isDark)



const store = useStoreData()

onMounted(() => {
  if (localStorage.getItem('token') == null) {
    googleOneTap({ autoLogin: true })
      .then((response) => {
        const userData = decodeCredential(response.credential)
        console.log("Handle the userData", userData)
        store.users(userData)
      })
      .catch((error) => {
        console.log("Handle the userData", error)
      })
  } else if (localStorage.getItem('token') != null) {
    store.getUsers()
  } else {
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

.DLbottonBox {
  border-radius: 50%;
  width: 50px;
  height: 50px;
  display: inline-block;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(100%);
}


.DLbutton {
  width: 50px;
  height: 50px;
  cursor: pointer;
  border-radius: 50%;
  background-color: #06062d;
  box-shadow: 0px -5px 10px rgba(191, 191, 191, 0);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.DLbutton::after {
  border-radius: 50%;
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  box-shadow: 2px -5px 10px rgba(191, 191, 191, 0.5);
  opacity: 1;
}

input {
  opacity: 100%;
  width: 0px;
  height: 0px;
}


.sun {
  border-radius: 50%;
  margin-top: -3px;
  margin-left: -9px;
  width: 0px;
  height: 0px;
  background-color: #e6b800;
  box-shadow: inset -15px -3px 30px rgba(230, 138, 0, .8);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  transition: 0.2s;
}

input:checked~.DLbottonBox>.DLbutton>.sun {
  border-radius: 50%;
  width: 55px;
  height: 55px;
  background-color: #e6b800;
  position: absolute;
  margin: 0;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}


.Moon {
  width: 55px;
  height: 55px;
  fill: #cccccc;
  stroke-width: 0px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
}


/* Light Mood */

input:checked~.DLbottonBox>.DLbutton {
  animation-name: DayBackgorund;
  animation-timing-function: linear;
  animation-duration: 1s;
  animation-fill-mode: forwards;
}

@keyframes DayBackgorund {
  0% {
    background-color: #06062d;
  }

  100% {
    background-color: #fff;
  }
}

input:checked~.DLbottonBox>.DLbutton::after {
  animation-name: DayBackgorundShadow;
  animation-timing-function: linear;
  animation-duration: 1s;
  animation-fill-mode: forwards;
}

@keyframes DayBackgorundShadow {
  0% {
    box-shadow: 2px -5px 10px rgba(191, 191, 191, 0.5);
  }

  100% {
    box-shadow: -2px 5px 10px rgba(0, 0, 0, 0.5);
  }
}

input:checked~.DLbottonBox>.DLbutton>.sun {
  animation-name: Sunrise;
  animation-duration: 1s;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}

@keyframes Sunrise {
  0% {
    width: 25px;
    height: 25px;
    margin-top: -3px;
    margin-left: 0px;
    background-color: #ffa31a;
    z-index: 1;
    box-shadow: inset -15px -3px 30px rgba(230, 138, 0, .8);
  }

  50% {
    width: 30px;
    height: 30px;
    margin-left: 15px;
    margin-top: -10px;
    box-shadow: inset -15px -3px 30px rgba(230, 138, 0, .8)
  }

  100% {
    width: 50px;
    height: 50px;
    background-color: #e6b800;
    z-index: 3;
    margin-top: 0px;
    margin-left: 0px;
    box-shadow: inset -15px -3px 30px rgba(230, 138, 0, .8);
  }
}

input:checked~.DLbottonBox>.DLbutton>.Moon {
  animation-name: Moonset;
  animation-duration: 1s;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}

@keyframes Moonset {
  0% {
    width: 55px;
    height: 55px;
  }

  50% {
    width: 30px;
    height: 30px;
    margin-left: -15px;
    margin-top: 10px;
  }

  100% {
    width: 0px;
    height: 0px;
  }
}


/* Night Mood */

input~.DLbottonBox>.DLbutton {
  animation-name: NightBackgorund;
  animation-timing-function: linear;
  animation-duration: 1s;
}

@keyframes NightBackgorund {
  from {
    background-color: #fff;
  }

  to {
    background-color: #06062d;
  }
}

input~.DLbottonBox>.DLbutton::after {
  animation-name: NightBackgorundShadow;
  animation-timing-function: linear;
  animation-duration: 1s;
}

@keyframes NightBackgorundShadow {
  from {
    box-shadow: -2px 5px 10px rgba(0, 0, 0, 0.5);
  }

  to {
    box-shadow: 2px -5px 10px rgba(191, 191, 191, 0.5);
  }
}


.sun {
  animation-name: Sunset;
  animation-duration: 1s;
  animation-timing-function: ease-in-out;
}

@keyframes Sunset {
  0% {
    width: 55px;
    height: 55px;
    margin-top: 0px;
    margin-left: 0px;
    background-color: #e6b800;
    z-index: 3;
    box-shadow: inset -15px -3px 30px rgba(230, 138, 0, .8);
  }

  50% {
    width: 30px;
    height: 30px;
    margin-left: -15px;
    margin-top: 10px;
    inset : -15px -3px 30px rgba(230, 138, 0, .8);
  }

  100% {
    width: 0px;
    height: 0px;
    margin-left: 0px;
    margin-top: 0px;
    background-color: #ffa31a;
    ;
    z-index: 1;
    margin-top: -3px;
    margin-left: -9px;
    box-shadow: inset -15px -3px 30px rgba(230, 138, 0, .8);
  }
}

.Moon {
  animation-name: Moonrise;
  animation-duration: 1s;
  animation-timing-function: ease-in-out;
  animation-fill-mode: forwards;
}

@keyframes Moonrise {
  0% {
    width: 0px;
    height: 0px;
  }

  50% {
    width: 30px;
    height: 30px;
    margin-left: 15px;
    margin-top: -10px;
  }

  100% {
    width: 55px;
    height: 55px;
  }
}

/* Change Background Color */

.background {
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: black;
  z-index: -1;
  position: absolute;
  transition: 1s;
}

input:checked~.background {
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: #fff;
  z-index: -1;
  position: absolute;
  transition: 1s;
}</style>
