<template>
  <div class="bg-blue flex flex-col justify-between fixed inset-0 p-4 text-black lg:w-1/2 z-[90]" v-show="shown">
      <ul>
          <li><button role="button" @click="$emit('close')">X</button></li>
          <li><router-link class="hover:underline uppercase" to="/">SJK</router-link></li>
          <li><a class="hover:underline uppercase" href="#">Kto sme</a></li>
          <li><a class="hover:underline uppercase" href="#">Zámer</a></li>
          <li><a class="hover:underline uppercase" href="#">Jaromír Krejcar</a></li>
          <li><a class="hover:underline uppercase" href="#">LD Machnáč</a></li>
          <li><router-link class="hover:underline uppercase" to="/faq">FAQ</router-link></li>
          <li><a class="hover:underline uppercase" href="#">SK</a> <a class="hover:underline uppercase">EN</a></li>
      </ul>

      <ul>
          <li><a class="hover:underline uppercase" href="#">Podporte nás!</a></li>
          <li><a class="hover:underline uppercase" href="#">Odoberať newsletter</a></li>
      </ul>
  </div>
</template>

<script>
export default {
    props: ['shown'],
    emits: ['close'],
}
</script>