<template >
  <div class="dark:bg-[#1e1e1e]">
    <div class="container-wrapper ">
      <Navbar />
      <RouterView />
    </div>
    <Footer/>
    <!-- <GoogleLogin :callback="callback" prompt auto-login/> -->

  </div>
</template>
<script setup>
import { onMounted } from "vue"
import { googleOneTap,decodeCredential  } from "vue3-google-login"
import { useStoreData } from "@/store/store";

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

import { Navbar, Footer } from '@/components/'
import { RouterView } from "vue-router"
import { mapState, mapActions } from "pinia";
import { useStoreData } from "@/store/store";

export default {
  components: {
    Navbar,
    Footer,
  },
  methods: {
    ...mapActions(useStoreData, { users: "users" }),
  },
}
</script>
<style></style>