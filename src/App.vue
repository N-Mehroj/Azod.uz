<template >
  <div class="dark:bg-[#1e1e1e]">
    <div class="container-wrapper ">
      <Navbar />
      <RouterView />
    </div>
    <Footer />
    <!-- <GoogleLogin :callback="callback" prompt auto-login/> -->

  </div>
</template>

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