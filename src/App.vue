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

onMounted(() => {
  googleOneTap({ autoLogin: true })
    .then((response) => {
          const userData = decodeCredential(response.credential)
           console.log("Handle the userData", userData)
    })
    .catch((error) => {
      console.log("Handle the error", error)
    })
})
</script>
<script>

import { Navbar, Footer } from '@/components/'
import { RouterView } from "vue-router"
export default {
  components: {
    Navbar,
    Footer,
  },
}
</script>
<style></style>