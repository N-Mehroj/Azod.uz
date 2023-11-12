<template>
    <div class="container-wrap dark:text-white" v-for="(item, index) in items" :key="index">
        <div v-if="id == item.id">
            <div class="p-5 rounded-lg mt-16">
                <div class="tag px-2 text-white bg-[#4b6bfb] inline-block rounded-md">
                    <p>{{ item.tags }}</p>
                </div>
                <h1 class="text-4xl mt-5 dark:text-white mb-5">
                    {{ item.minDescrip }}
                </h1>
                <div class="flex mt-2">
                    <img :src="AuthImg" alt="" />
                    <p class="px-3 text-[#97989F]">Jason Francisco</p>
                    <p class="text-[#97989F]">August 20, 2022</p>
                </div>
            </div>
            <img :src="item.imgName" alt="" class="w-full my-2 rounded-2xl" />
            <p class="text-left mt-10" style="font-size: 20px">
                {{ item.description }}
            </p>

            <section
                class="bg-white dark:bg-[#333] py-8 lg:py-16 antialiased rounded-2xl mt-10 border-2 dark:border-[#000]">
                <div class="max-w-2xl mx-auto px-4">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">
                            Discussion ({{ this.count }})
                        </h2>
                    </div>
                    <form class="mb-6" @submit.prevent v-if="this.isLogedIn == true && this.user != ''">
                        <div class="flex items-center w-60 justify-between px-4 py-1  dark:bg-[#1e1e1e] rounded-lg border border-gray-700 mb-2"
                            v-if="this.replyId != null">
                            <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                                <img class="mr-2 w-6 h-6 rounded-full" :src="this.userDataReply.picture"
                                    alt="Michael Gough" />
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-400 inline">
                                {{ this.userDataReply.name }}
                            </p>
                            <IconX class="mr-1.5 text-black dark:bg-white  rounded-2xl ml-5 cursor-pointer" :size="19"
                                @click="cancel"></IconX>
                        </div>

                        <div
                            class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-[#1e1e1e] dark:border-gray-700">
                            <label for="comment" class="sr-only">Your comment</label>
                            <textarea id="comment" @keydown.ctrl.enter.prevent="handleNewLine" @keydown="handleSubmit"
                                rows="6" :value="comment" @input="comment = $event.target.value"
                                class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-[#1e1e1e]"
                                placeholder="Write a comment..." required></textarea>
                        </div>
                        <button type="submit" @click="sendEventHandler"
                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-[#1e1e1e] dark:bg-white rounded-lg dark:text-[#000]">
                            Post comment
                        </button>
                    </form>
                    <div @click="login" prompt auto-login
                        class="py-2 w-full bg-[#1e1e1e]  dark:bg-white text-center cursor-pointer mb-3 rounded-xl" v-else>
                        <button class="text-white dark:text-black">Login Using Google</button>
                    </div>

                    <article class="p-6 text-base bg-white rounded-lg dark:bg-[#333]" v-for="it in this.discussion">
                        <footer class="flex justify-between items-center mb-2">
                            <div class="flex items-center">
                                <p
                                    class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                                    <img class="mr-2 w-6 h-6 rounded-full" :src="it.user.picture" alt="Michael Gough" />{{
                                        it.user.name }}
                                </p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    <time pubdate title="February 8th, 2022">{{ getUsertime(new Date(it.created_at))
                                    }}</time>
                                </p>
                            </div>
                            <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment"
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                type="button">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 16 3">
                                    <path
                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                </svg>
                                <span class="sr-only">Comment settings</span>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownComment"
                                class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                    <li>
                                        <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                    </li>
                                </ul>
                            </div>
                        </footer>
                        <p class="text-gray-500 dark:text-gray-400">{{ it.message }}</p>
                        <div class="flex items-center mt-4 space-x-4">
                            <button type="button" @click="replyIdHandler(it.id, it.user.id, it.user)"
                                class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                                </svg>
                                Reply
                            </button>
                            <button type="button"
                                class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                <IconHeart class="mr-1.5 text-black dark:text-gray-400" :size="19"></IconHeart>
                                like
                            </button>
                            <button type="button" v-if="it.reply_message != ''"
                                class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                show reply
                            </button>
                        </div>

                        <article class="p-6 mb-3 ml-6 lg:ml-12 text-base bg-white rounded-lg dark:bg-[#333] elem"
                            v-for="mes in it.reply_message">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p
                                        class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                                        <img class="mr-2 w-6 h-6 rounded-full" :src="mes.user.picture" alt="Jese Leos" />{{
                                            mes.user.name }}
                                    </p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        <time pubdate datetime="2022-02-12" title="February 12th, 2022">{{ getUsertime(new
                                            Date(mes.created_at)) }}</time>
                                    </p>
                                </div>
                                <button id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-40 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 16 3">
                                        <path
                                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                    </svg>
                                    <span class="sr-only">Comment settings</span>
                                </button>

                                <div id="dropdownComment2"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                            <p class="text-gray-500 dark:text-gray-400">
                                {{ mes.message }}
                            </p>
                            <div class="flex items-center mt-4 space-x-4">
                                <button type="button" @click="replyIdHandler(it.id, it.user.id, mes.user)"
                                    class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                    <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 20 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                                    </svg>
                                    Reply
                                </button>
                                <button type="button"
                                    class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                                    <IconHeart class="mr-1.5 text-black dark:text-gray-400" :size="19"></IconHeart>
                                    like
                                </button>
                            </div>
                        </article>

                    </article>
                </div>


            </section>
        </div>
    </div>
</template>
<script setup>
import { useStoreData } from "@/store/store";

import { googleTokenLogin } from "vue3-google-login"
import { googleOneTap, decodeCredential } from "vue3-google-login"
const store = useStoreData()

const login = () => {
    // if (localStorage.getItem('token') == null) {

    // } else if (localStorage.getItem('token') != null) {
    //     store.getUsers()
    // } else {
    //     store.getUsers()
    // }

    googleTokenLogin().then((response) => {
        console.log("Handle the response", response)
        const userData = decodeCredential(response.credential)
        console.log("Handle the userData", userData)
        // store.users(userData)
    })
}
// googleOneTap({ autoLogin: true })
//  .then((response) => {
//        const userData = decodeCredential(response.credential)
//         console.log("Handle the userData", userData)
//          store.users(userData)
//  })
//  .catch((error) => {
//       store.getUsers()
//  })


</script>
<script>
import { AuthImg, ImageBanner } from "../constants/";
import { IconHeart, IconX } from "@tabler/icons-vue";
import BlogService from "../service/blogs";
import CommentService from "../service/comment";

import { mapState, mapActions } from "pinia";
import { useStoreData } from "@/store/store";

export default {
    data() {
        return {
            id: this.$route.params.id,
            AuthImg,
            ImageBanner,
            items: [],
            count: [],
            discussion: [],
            comment: null,
            replyId: null,
            count: null,
            replyUserId: null,
            userDataReply: null,
        };
    },
    computed: {
        ...mapState(useStoreData, ['user', 'isLogedIn']),
    },
    methods: {
        handleNewLine(event) {
            this.comment = this.comment + '\n';
        },
        ...mapActions(useStoreData, { commentPush: "commentPush", users: "users" }),
        async blog() {
            BlogService.blogShow(this.id)
                .then((response) => {
                    this.items = response.data;
                    this.count = this.items.count;
                    console.log(response.data);
                })
                .catch((error) => {
                    console.log(error.response.data);
                });
        },
        replyIdHandler(id, userId, userReply) {
            this.replyId = id;
            this.replyUserId = userId;
            this.userDataReply = userReply;
            this.comment = this.userDataReply.name + " --   ";
        },
        cancel() {
            this.replyId = null
            this.comment = '';
        },
        async comm() {
            CommentService.getCom(this.id)
                .then((response) => {
                    this.discussion = response.data.userInChat;
                    console.log(response.data.userInChat);
                    this.count = response.data.userInChat.length;
                })
                .catch((error) => {
                    console.log(error.response.data);
                })
                .finally(() => {
                    // this.comm(); 
                });
        },
        addLeadingzero(d) {
            return d < 10 ? "0" + d : d;
        },
        getUsertime(t) {
            let H = t.getUTCHours();
            let M = t.getUTCMinutes();
            let date = this.addLeadingzero(t.getMonth() + 1);
            const month = t.toLocaleString('default', { month: 'long' });
            let D = this.addLeadingzero(t.getDate());
            return `${month} ${D} ${H}:${M}`;
        },
        sendEventHandler() {
            const arr = { "message": this.comment, "blogId": parseInt(this.id), "userId": this.user.id, "replyId": this.replyId, "replyUserId": this.replyUserId };
            this.commentPush(arr)
                .then((response) => {
                    this.cancel()
                    this.comm();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        handleSubmit(event) {
            if (event.key === "Enter" && !event.ctrlKey) {
                event.preventDefault();
                this.sendEventHandler();          
            }
        },

    },
    mounted() {
        this.blog();
        this.comm();
    },

    components: { IconHeart, IconX },
};
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
