<template >
    <div class="w-full bg-[#F6F6F7] pt-14 pb-10 mt-20">
        <div class="container-wrapper flex">
            <div class="mr-32">
                <h2>About</h2>
                <p class="w-72">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                <div class="flex mt-2">
                    <h5>Email: </h5>
                    <p>info@jstemplate.net</p>
                </div>
                <div class="flex">
                    <h5>Phone: </h5>
                    <p>880 123 456 789</p>
                </div>
            </div>
            <div class="mr-28">
                <h2>Quick Link</h2>
                <ul class="mt-5">
                    <li class="my-2"><a href="#">Home</a></li>
                    <li class="my-2"><a href="#">About</a></li>
                    <li class="my-2"><a href="#">Blog</a></li>
                    <li class="my-2"><a href="#">Archived</a></li>
                    <li class="my-2"><a href="#">Author</a></li>
                    <li class="my-2"><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="mr-28">
                <h2>Category</h2>
                <ul class="mt-5">
                    <li class="my-2"><a href="#">Lifestyle</a></li>
                    <li class="my-2"><a href="#">Technology</a></li>
                    <li class="my-2"><a href="#">Travel</a></li>
                    <li class="my-2"><a href="#">Business</a></li>
                    <li class="my-2"><a href="#">Economy</a></li>
                    <li class="my-2"><a href="#">Sports</a></li>
                </ul>
            </div>

            <div class="p-8 rounded-lg bg-white text-center w-[450px]">
                <h3>Weekly Newsletter</h3>
                <p>Get blog articles and offers via email</p>
                <div class="mt-5 flex items-center border rounded-lg px-2 ">
                    <input type="text" placeholder="Email" class=" py-2 pl-3 w-full" />
                    <IconMail class="mr-3" :size="22" />
                </div>
                <div class="bg-[#4b6bfb] mt-3 py-3 rounded-lg text-white cursor-pointer">Subscribe</div>
            </div>
        </div>

        <div class="container-wrapper mt-20   border-t-2">
            <div class="pt-8 items-center flex justify-between">
                <div class="im">
                    <img :src="Copyright" alt="">
                </div>
                <div class="nav flex">
                    <li class="p-2 mx-2"><a href="#">Terms of Use</a></li>
                    <li class="p-2 mx-2"><a href="#">Privacy Policy</a></li>
                    <li class="p-2 mx-2"><a href="#">Cookie Policy</a></li>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { Copyright } from "../constants/";

import { IconMail } from "@tabler/icons-vue";
export default {
    data() {
        return {
            Copyright,
        };
    },
    components: { IconMail },
}
</script>
<style></style>