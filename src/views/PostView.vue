<template>
    <div>
        <div class="bg-[#F6F6F7] w-full  p-16 py-20 rounded-xl mt-11 mb-14">
            <div class="prof flex justify-center mb-5">
               <div class="mr-2">
                   <img :src="prof" alt="" >
               </div>
               <div class="mt-2">
                   <h4 class="p-0">Jonathan Doe</h4>
                   <p class="p-0">Collaborator & Editor</p>
               </div>
            </div>
             <div class="prof flex justify-center">
                 <p class="text-center w-[600px]">
                  Meet Jonathan Doe, a passionate writer and blogger with a love for technology and 
                  travel. Jonathan holds a degree in Computer Science and has spent years working in 
                  the tech industry, gaining a deep understanding of the impact technology has on our 
                  lives.
                 </p>
             </div>
        </div>
        <h1>Latest Post</h1>
        <Product/>
    </div>
</template>
<script>
import { prof } from "../constants/";
import { Product } from '@/components/'

export default {
    data() {
        return {
            prof
        }
    },
    components: {
        Product
  },
}
</script>
<style>
    
</style>