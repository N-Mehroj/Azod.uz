<template>
  <div>
    <nav>
      <div class="nav flex justify-between pt-6">
        <img :src="logo" alt="" class="h-9" />
        <div class="flex items-center aLink">
          <li class="p-2 mx-2">
            <RouterLink :to="{ name: 'home' }">Bosh sahifa</RouterLink>
          </li>
          <li class="p-2 mx-2">
            <RouterLink :to="{ name: 'blog' }">Blog</RouterLink>
          </li>
          <li class="p-2 mx-2">
            <RouterLink :to="{ name: 'posts' }">Postlar</RouterLink>
          </li>
          <li class="p-2 mx-2"><a href="#">Saxifalar</a></li>
          <li class="p-2 mx-2"><a href="#">Bog'lanish</a></li>
          <div class="btn">google</div>
        </div>
        <div class="action flex">
          <div class="flex items-center bg-[#F4F4F5] rounded-lg px-2">
            <input type="text" placeholder="Search" class="bg-[#F4F4F5] py-2 pl-3 w-48" />
            <IconSearch class="mr-3" :size="22" />
          </div>
          <label class="relative inline-flex items-center mb-2 ml-8 cursor-pointer">
            <input type="checkbox" value="" class="sr-only peer" />
            <div
              class="w-12 h-7 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[5px] after:left-[3px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-al peer-checked:bg-blue-600">
            </div>

          </label>
        </div>
      </div>
    </nav>
  </div>
</template>
<script>
import { logo } from "../constants/";
import { IconSearch } from "@tabler/icons-vue";
export default {
  data() {
    return {
      logo,
    };
  },
  components: { IconSearch },
};
</script>
<style>
.aLink>li>a {
  font-size: 16px;
  font-style: normal;
  font-weight: 400;
  line-height: 24px;
}
</style>
