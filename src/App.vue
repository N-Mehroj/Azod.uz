<template >
  <div>
    <div class="container-wrapper">
      <Navbar />
      <RouterView />
    </div>
    <Footer/>
  </div>
</template>
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