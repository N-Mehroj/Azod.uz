<template>
    <div class="container-wrap dark:text-white">
        <div class="p-5 rounded-lg mt-16">
            <div class="tag px-2 text-white bg-[#4b6bfb] inline-block rounded-md">
                <p>Technology</p>
            </div>
            <h1 class="text-4xl mt-5 dark:text-white">The Impact of Technology on the Workplace:<br /> How Technology is
                Changing</h1>
            <div class="flex mt-2">
                <img :src="AuthImg" alt="">
                <p class="px-3 text-[#97989F]">Jason Francisco</p>
                <p class="text-[#97989F]">August 20, 2022</p>
            </div>
        </div>
        <img :src="ImageBanner" alt="" class="w-full my-2 rounded-2xl">
        <p class="text-left mt-10" style="font-size: 20px;">Traveling is an enriching experience that opens up new horizons,
            exposes us to different cultures, and creates
            memories that last a lifetime. However, traveling can also be stressful and overwhelming, especially if you
            don't plan and prepare adequately. In this blog article, we'll explore tips and tricks for a memorable journey
            and how to make the most of your travels. <br /><br />

            One of the most rewarding aspects of traveling is immersing yourself in the local culture and customs. This
            includes trying local cuisine, attending cultural events and festivals, and interacting with locals. Learning a
            few phrases in the local language can also go a long way in making connections and showing respect.
        </p>
        <h1 class="my-5 dark:text-white">Research Your Destination</h1>
        <p class="text-left mt-10" style="font-size: 20px;">Traveling is an enriching experience that opens up new horizons,
            exposes us to different cultures, and creates
            memories that last a lifetime. However, traveling can also be stressful and overwhelming, especially if you
            don't plan and prepare adequately. In this blog article, we'll explore tips and tricks for a memorable journey
            and how to make the most of your travels. <br /><br />

            One of the most rewarding aspects of traveling is immersing yourself in the local culture and customs. This
            includes trying local cuisine, attending cultural events and festivals, and interacting with locals. Learning a
            few phrases in the local language can also go a long way in making connections and showing respect.
        </p>
        <h1 class="my-5 dark:text-white">Research Your Destination</h1>
        <p class="text-left mt-10" style="font-size: 20px;">Traveling is an enriching experience that opens up new horizons,
            exposes us to different cultures, and creates
            memories that last a lifetime. However, traveling can also be stressful and overwhelming, especially if you
            don't plan and prepare adequately. In this blog article, we'll explore tips and tricks for a memorable journey
            and how to make the most of your travels. <br /><br />

            One of the most rewarding aspects of traveling is immersing yourself in the local culture and customs. This
            includes trying local cuisine, attending cultural events and festivals, and interacting with locals. Learning a
            few phrases in the local language can also go a long way in making connections and showing respect.
        </p>
        <img :src="ImageBanner" alt="" class="w-full my-10 rounded-2xl">

        <p class="text-left mt-10" style="font-size: 20px;">Traveling is an enriching experience that opens up new horizons,
            exposes us to different cultures, and creates
            memories that last a lifetime. However, traveling can also be stressful and overwhelming, especially if you
            don't plan and prepare adequately. In this blog article, we'll explore tips and tricks for a memorable journey
            and how to make the most of your travels. <br /><br />

            One of the most rewarding aspects of traveling is immersing yourself in the local culture and customs. This
            includes trying local cuisine, attending cultural events and festivals, and interacting with locals. Learning a
            few phrases in the local language can also go a long way in making connections and showing respect.
        </p>
        <h1 class="my-5 dark:text-white">Research Your Destination</h1>
        <p class="text-left mt-10" style="font-size: 20px;">Traveling is an enriching experience that opens up new horizons,
            exposes us to different cultures, and creates
            memories that last a lifetime. However, traveling can also be stressful and overwhelming, especially if you
            don't plan and prepare adequately. In this blog article, we'll explore tips and tricks for a memorable journey
            and how to make the most of your travels. <br /><br />

            One of the most rewarding aspects of traveling is immersing yourself in the local culture and customs. This
            includes trying local cuisine, attending cultural events and festivals, and interacting with locals. Learning a
            few phrases in the local language can also go a long way in making connections and showing respect.
        </p>
        <h1 class="my-5 dark:text-white">Research Your Destination</h1>
        <p class="text-left mt-10" style="font-size: 20px;">Traveling is an enriching experience that opens up new horizons,
            exposes us to different cultures, and creates
            memories that last a lifetime. However, traveling can also be stressful and overwhelming, especially if you
            don't plan and prepare adequately. In this blog article, we'll explore tips and tricks for a memorable journey
            and how to make the most of your travels. <br /><br />

            One of the most rewarding aspects of traveling is immersing yourself in the local culture and customs. This
            includes trying local cuisine, attending cultural events and festivals, and interacting with locals. Learning a
            few phrases in the local language can also go a long way in making connections and showing respect.
        </p>

    </div>
</template>

<script>
import { AuthImg, ImageBanner } from "../constants/";

export default {
    data() {
        return {
            id: this.$route.params.id,
            AuthImg,
            ImageBanner
        }
    },
}
</script>
<style scoped>
.container-wrap {
    padding: 0px 200px;
}

@media only screen and (max-width: 1045px) {
    .container-wrap {
        padding: 0px 100px;
    }
}
@media only screen and (max-width: 980px) {
    .container-wrap {
        padding: 0px 50px;
    }
} 
@media only screen and (max-width: 980px) {
    .container-wrap {
        padding: 0px 50px;
    }
} 
@media only screen and (max-width: 720px) {
    .container-wrap {
        padding: 0px 10px;
    }
} 
</style>