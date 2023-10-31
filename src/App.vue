<template >
  <div>
    <div class="container-wrapper">
      <Navbar />
      <RouterView />
    </div>
    <Footer/>
    <GoogleLogin :callback="callback" prompt auto-login/>

  </div>
</template>
<script setup>
import { onMounted } from "vue"
import { googleOneTap } from "vue3-google-login"
import { decodeCredential } from 'vue3-google-login'

const callback = (response) => {
    const userData = decodeCredential(response.credential)
    console.log("Handle the userData", userData)
}

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