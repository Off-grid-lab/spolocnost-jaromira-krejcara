<template>
  <div class="bg-black flex h-14 leading-14 justify-between leading-14 px-4 text-blue uppercase">
      <div class="flex w-1/2">
          <button role="button" @click="$emit('showMenu')">
              <div class="border-current border-t-2 relative top-3 w-8"></div>
              <div class="border-current border-t-2 w-8"></div>
              <div class="border-current border-t-2 relative bottom-3 w-8"></div>
          </button>
          <div class="ml-4">
              <router-link class="hover:underline" :to="$i18nRoute({ name: 'Home' })">SJK</router-link>
          </div>
      </div>
      <div class="hidden lg:flex justify-between pl-4 w-1/2">
        <LocaleSwitcher />
      </div>
      <div class="lg:hidden text-blue"><span class="cursor-pointer normal-case hover:underline" @click="$emit('showCalendar')">Aktuality</span></div>
  </div>
</template>

<script>
import LocaleSwitcher from './LocaleSwitcher.vue'
export default {
    components: { LocaleSwitcher },
    emits: ['showMenu', 'showCalendar']
}
</script>