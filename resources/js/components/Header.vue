<template>
  <div class="bg-black fixed flex h-14 leading-14 justify-between leading-14 px-4 text-blue top-0 uppercase w-full z-[10]">
      <div class="flex w-1/2">
          <button role="button" @click="$emit('showMenu')">
              <div class="border-current border-t-2 relative top-3 w-8"></div>
              <div class="border-current border-t-2 w-8"></div>
              <div class="border-current border-t-2 relative bottom-3 w-8"></div>
          </button>
          <div class="ml-4">
              <router-link class="hover:underline" to="/">SJK</router-link>
          </div>
      </div>
      <div class="hidden lg:flex justify-between pl-2 w-1/2">
          <div>
              <a class="hover:underline px-1" href="#">SK</a>
              <a class="hover:underline px-1" href="#">EN</a>
          </div>
      </div>
      <div class="lg:hidden text-blue"><a class="hover:underline" href="#">Aktuality</a></div>
  </div>
</template>

<script>
export default {
    emits: ['showMenu']
}
</script>