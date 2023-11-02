<template >
    <div class="mt-3 grid lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 lg:gap-5 md:gap-3 gap-5">
        <RouterLink :to="{ path: '/blog/' + '1' }">
            <div class="card p-3 border w-full rounded-xl cursor-pointer pb-5 dark:bg-[#2d2d30] dark:border-black shadow dark:shadow-md dark:shadow-[0_35px_60px_-15px_rgba(255,255,255,0.1)]">
                <img src="https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823_640.jpg" alt="" class="rounded-xl">
                <div class="tag px-2 bg-[#f6f7ff] text-[#4b6bfb] inline-block rounded-md mt-5 dark:text-[#3e3e42] dark:bg-white">
                    <p>Technology</p>
                </div>
                <h1 class="lg:text-2xl md:text-xl sm:text-lg text-sm dark:text-white">The Impact of Technology on the Workplace: How Technology is Changing</h1>
                <div class="flex mt-2 ">
                    <img :src="AuthImg" alt="" class="float-left">
                    <p class="px-3 text-[#97989F] inline lg:text-sm">Jason Francisco</p>
                    <p class="text-[#97989F] inline lg:text-sm">August 20, 2022</p>
                </div>
            </div>
        </RouterLink>
        <RouterLink :to="{ path: '/blog/' + '1' }">
            <div class="card p-3 border w-full rounded-xl cursor-pointer pb-5 dark:bg-[#2d2d30] dark:border-black shadow dark:shadow-md dark:shadow-[0_35px_60px_-15px_rgba(255,255,255,0.1)]">
                <img src="https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823_640.jpg" alt="" class="rounded-xl">
                <div class="tag px-2 bg-[#f6f7ff] text-[#4b6bfb] inline-block rounded-md mt-5 dark:text-[#3e3e42] dark:bg-white">
                    <p>Technology</p>
                </div>
                <h1 class="lg:text-2xl md:text-xl sm:text-lg text-sm dark:text-white">The Impact of Technology on the Workplace: How Technology is Changing</h1>
                <div class="flex mt-2 ">
                    <img :src="AuthImg" alt="" class="float-left">
                    <p class="px-3 text-[#97989F] inline lg:text-sm">Jason Francisco</p>
                    <p class="text-[#97989F] inline lg:text-sm">August 20, 2022</p>
                </div>
            </div>
        </RouterLink>
        <RouterLink :to="{ path: '/blog/' + '1' }">
            <div class="card p-3 border w-full rounded-xl cursor-pointer pb-5 dark:bg-[#2d2d30] dark:border-black shadow dark:shadow-md dark:shadow-[0_35px_60px_-15px_rgba(255,255,255,0.1)]">
                <img src="https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823_640.jpg" alt="" class="rounded-xl">
                <div class="tag px-2 bg-[#f6f7ff] text-[#4b6bfb] inline-block rounded-md mt-5 dark:text-[#3e3e42] dark:bg-white">
                    <p>Technology</p>
                </div>
                <h1 class="lg:text-2xl md:text-xl sm:text-lg text-sm dark:text-white">The Impact of Technology on the Workplace: How Technology is Changing</h1>
                <div class="flex mt-2 ">
                    <img :src="AuthImg" alt="" class="float-left">
                    <p class="px-3 text-[#97989F] inline lg:text-sm">Jason Francisco</p>
                    <p class="text-[#97989F] inline lg:text-sm">August 20, 2022</p>
                </div>
            </div>
        </RouterLink>
        <RouterLink :to="{ path: '/blog/' + '1' }">
            <div class="card p-3 border w-full rounded-xl cursor-pointer pb-5 dark:bg-[#2d2d30] dark:border-black shadow dark:shadow-md dark:shadow-[0_35px_60px_-15px_rgba(255,255,255,0.1)]">
                <img src="https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823_640.jpg" alt="" class="rounded-xl">
                <div class="tag px-2 bg-[#f6f7ff] text-[#4b6bfb] inline-block rounded-md mt-5 dark:text-[#3e3e42] dark:bg-white">
                    <p>Technology</p>
                </div>
                <h1 class="lg:text-2xl md:text-xl sm:text-lg text-sm dark:text-white">The Impact of Technology on the Workplace: How Technology is Changing</h1>
                <div class="flex mt-2 ">
                    <img :src="AuthImg" alt="" class="float-left">
                    <p class="px-3 text-[#97989F] inline lg:text-sm">Jason Francisco</p>
                    <p class="text-[#97989F] inline lg:text-sm">August 20, 2022</p>
                </div>
            </div>
        </RouterLink>
        <RouterLink :to="{ path: '/blog/' + '1' }">
            <div class="card p-3 border w-full rounded-xl cursor-pointer pb-5 dark:bg-[#2d2d30] dark:border-black shadow dark:shadow-md dark:shadow-[0_35px_60px_-15px_rgba(255,255,255,0.1)]">
                <img src="https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823_640.jpg" alt="" class="rounded-xl">
                <div class="tag px-2 bg-[#f6f7ff] text-[#4b6bfb] inline-block rounded-md mt-5 dark:text-[#3e3e42] dark:bg-white">
                    <p>Technology</p>
                </div>
                <h1 class="lg:text-2xl md:text-xl sm:text-lg text-sm dark:text-white">The Impact of Technology on the Workplace: How Technology is Changing</h1>
                <div class="flex mt-2 ">
                    <img :src="AuthImg" alt="" class="float-left">
                    <p class="px-3 text-[#97989F] inline lg:text-sm">Jason Francisco</p>
                    <p class="text-[#97989F] inline lg:text-sm">August 20, 2022</p>
                </div>
            </div>
        </RouterLink>


    </div>
</template>
<script>
import { AuthImg, } from "../constants/";
export default {
    data() {
        return {
            AuthImg
        };
    },
}
</script>
<style></style>