<template>
  <div class="bg-black fixed flex h-14 leading-14 justify-between leading-14 px-4 text-2xl text-blue top-0 underline-offset-sans underline-thickness-sans uppercase w-full z-[10]">
      <div class="flex w-1/2">
          <button role="button" @click="$emit('showMenu')">
              <div class="border-current border-t-1 relative top-3 w-8"></div>
              <div class="border-current border-t-1 w-8"></div>
              <div class="border-current border-t-1 relative bottom-3 w-8"></div>
          </button>
          <div class="ml-4">
              <AppLink class="hover:underline" :to="$i18nRoute({ name: 'Home' })">SJK</AppLink>
          </div>
      </div>
      <div class="hidden lg:flex justify-between pl-4 w-1/2">
        <LocaleSwitcher />
      </div>
      <div class="lg:hidden text-blue"><span :class="calendarShown ? 'underline' : 'hover:underline'" class="cursor-pointer normal-case " @click="$emit('showCalendar')">Aktuality</span></div>
  </div>
</template>

<script>
import LocaleSwitcher from './LocaleSwitcher.vue'
export default {
    components: { LocaleSwitcher },
    emits: ['showMenu', 'showCalendar'],
    props: ['calendarShown'],
}
</script>