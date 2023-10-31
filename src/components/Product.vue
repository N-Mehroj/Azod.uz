<template >
    <div class="mt-3 grid grid-cols-3 gap-4">
        <RouterLink :to="{ path: '/blog/' + '1' }">
            <div class="card p-3 border w-[420px] rounded-xl cursor-pointer">
                <img src="https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823_640.jpg" alt="" class="rounded-xl">
                <div class="tag px-2 bg-[#f6f7ff] text-[#4b6bfb] inline-block rounded-md mt-5">
                    <p>Technology</p>
                </div>
                <h1>The Impact of Technology on the Workplace: How Technology is Changing</h1>
                <div class="flex mt-2">
                    <img :src="AuthImg" alt="">
                    <p class="px-3 text-[#97989F]">Jason Francisco</p>
                    <p class="text-[#97989F]">August 20, 2022</p>
                </div>
            </div>
        </RouterLink>
        <RouterLink :to="{ path: '/blog/' + '1' }">
            <div class="card p-3 border w-[420px] rounded-xl cursor-pointer">
                <img src="https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823_640.jpg" alt="" class="rounded-xl">
                <div class="tag px-2 bg-[#f6f7ff] text-[#4b6bfb] inline-block rounded-md mt-5">
                    <p>Technology</p>
                </div>
                <h1>The Impact of Technology on the Workplace: How Technology is Changing</h1>
                <div class="flex mt-2">
                    <img :src="AuthImg" alt="">
                    <p class="px-3 text-[#97989F]">Jason Francisco</p>
                    <p class="text-[#97989F]">August 20, 2022</p>
                </div>
            </div>
        </RouterLink>
        <RouterLink :to="{ path: '/blog/' + '1' }">
            <div class="card p-3 border w-[420px] rounded-xl cursor-pointer">
                <img src="https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823_640.jpg" alt="" class="rounded-xl">
                <div class="tag px-2 bg-[#f6f7ff] text-[#4b6bfb] inline-block rounded-md mt-5">
                    <p>Technology</p>
                </div>
                <h1>The Impact of Technology on the Workplace: How Technology is Changing</h1>
                <div class="flex mt-2">
                    <img :src="AuthImg" alt="">
                    <p class="px-3 text-[#97989F]">Jason Francisco</p>
                    <p class="text-[#97989F]">August 20, 2022</p>
                </div>
            </div>
        </RouterLink>
        <RouterLink :to="{ path: '/blog/' + '1' }">
            <div class="card p-3 border w-[420px] rounded-xl cursor-pointer">
                <img src="https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823_640.jpg" alt="" class="rounded-xl">
                <div class="tag px-2 bg-[#f6f7ff] text-[#4b6bfb] inline-block rounded-md mt-5">
                    <p>Technology</p>
                </div>
                <h1>The Impact of Technology on the Workplace: How Technology is Changing</h1>
                <div class="flex mt-2">
                    <img :src="AuthImg" alt="">
                    <p class="px-3 text-[#97989F]">Jason Francisco</p>
                    <p class="text-[#97989F]">August 20, 2022</p>
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