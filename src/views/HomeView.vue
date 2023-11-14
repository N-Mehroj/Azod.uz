<template>
    <div>
        <div class="banner mt-16 mb-10 ">
            <img :src="ImageBanner" alt="" class="w-full relative rounded-2xl">
            <div class="context  md:w-[480px] mt-6 border bg-white  p-5 md:absolute rounded-lg md:-mt-40 md:ml-11 dark:bg-[#2d2d30] dark:border-black shadow dark:shadow-[0_35px_60px_-15px_rgba(255,255,255,0.1)]">
                <div class="tag px-2 text-white bg-[#4b6bfb] inline-block rounded-md dark:text-[#3e3e42] dark:bg-white">
                    <p>Technology</p>
                </div>
                <h1 class="dark:text-white">The Impact of Technology on the Workplace: How Technology is Changing</h1>
                <div class="flex mt-2">
                    <img :src="AuthImg" alt="">
                    <p class="px-3 text-[#97989F]">Jason Francisco</p>
                    <p class="text-[#97989F]">August 20, 2022</p>
                </div>
            </div>
        </div>

        <h1 class="md:mt-36 dark:text-white">So'nggi yangiliklar</h1>

        <Product class="mb-20" />

        <div class="flex justify-center mb-10 cursor-pointer ">
            <p class="border border-spacing-5 rounded-md px-3 py-3 border-gray-400 text-gray-500 dark:border-white dark:text-white">Barchasini ko'rsatish</p>
        </div>
    </div>
</template>

<script>
import { ImageBanner, AuthImg, } from "../constants/";
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
.context {

    border: 1px solid #E8E8EA;
    /* background: var(--White, #FFF); */
    /* shadow-md */
    box-shadow: 0px 12px 24px -6px rgba(24, 26, 42, 0.12);
}
</style>