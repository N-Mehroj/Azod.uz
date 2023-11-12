<template >
    <div class="text-center py-10 mt-10">
        <h1 class="dark:text-white">Page TItle</h1>
        <ul class="flex justify-center mt-2">
            <li class="pr-3 border-r-2 dark:text-white">
                <RouterLink :to="{ name: 'home' }">Home</RouterLink>
            </li>
            <li class="pl-3 text-gray-400">
                <RouterLink :to="{ name: 'home' }">Link one</RouterLink>
            </li>
        </ul>
    </div>
    <div class="mt-6 mb-24 w-full">
        <div class="imgBg rounded-lg p-2 relative">
            <div class="p-5 rounded-lg absolute bottom-5">
                <div class="tag px-2 text-white bg-[#4b6bfb] inline-block rounded-md">
                    <p>Technology</p>
                </div>
                <h1 class="text-white dark:text-white">The Impact of Technology on the <br/> Ishchi muhit:  How Technology is Changing</h1>
                <div class="flex mt-2">
                    <img :src="AuthImg" alt="">
                    <p class="px-3 text-[#97989F]">Jason Francisco</p>
                    <p class="text-[#97989F]">August 20, 2022</p>
                </div>
            </div>
        </div>
    </div>
      <Product class="my-20"/>
      
    <div class="flex justify-center mb-10 cursor-pointer"><p class="border border-spacing-5 rounded-md px-3 py-3 border-gray-400 text-gray-500 dark:text-white">View All Post</p></div>

</template>
<script>
import { ImageBanner,AuthImg } from "../constants/";
import { Product } from '@/components/'
export default {
    data() {
        return {
            ImageBanner,
            AuthImg
        };
    },
    components: {
        Product
    },
}
</script>
<style>
.imgBg {
    width: 100%;
    background-size: 100% 150% !important;
    background-repeat: no-repeat !important;
    background-position: center;
    background-size: cover;
    height: 500px;
    background: url('../assets/img/Image.jpg');
}</style>