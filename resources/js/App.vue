<template>
  <Header @showMenu="menuShown = true" @showCalendar="calendarShown = !calendarShown" v-bind="{ calendarShown }" />

  <div class="lg:flex lg:h-[calc(100vh-3.5rem)] mt-14">
    <div class="overflow-y-auto w-full lg:w-1/2" @scroll="scroll" :class="calendarShown ? 'hidden lg:block' : ''" ref="routerView">
      <div class="flex flex-col items-stretch h-full">
        <div class="flex-grow">
          <router-view />
        </div>
        <div class="bg-blue pb-6 px-4 pt-4 relative text-black z-[40]">
          <Footer />
        </div>
      </div>
    </div>
    <div class="overflow-y-auto w-full lg:w-1/2" @scroll="scroll" :class="!calendarShown ? 'hidden lg:block' : ''">
      <div class="flex flex-col items-stretch h-full">
        <div class="flex-grow">
          <Calendar />
        </div>
        <div class="bg-linen pb-6 px-4 pt-4 relative text-black z-[20]">
          <Footer />
        </div>
      </div>
    </div>
  </div>

  <div class="fixed hidden lg:flex lg:flex-col inset-0 justify-between px-4 py-3 pointer-events-none text-2xl text-blue underline-offset-sans underline-thickness-sans uppercase w-full z-[30]">
    <div class="text-right">
      <AppLink class="pointer-events-auto hover:underline" :to="$i18nRoute({ name: 'Info' })">Zámer</AppLink><br>
      <AppLink class="pointer-events-auto hover:underline" :to="$i18nRoute({ name: 'Team' })">Kto sme</AppLink>
    </div>
    <div class="flex justify-between items-end">
      <div>
        <AppLink class="pointer-events-auto hover:underline" :to="$i18nRoute({ name: 'Home', hash: '#jaromir-krejcar' })">Jaromír Krejcar</AppLink><br>
        <AppLink class="pointer-events-auto hover:underline" :to="$i18nRoute({ name: 'Home', hash: '#ld-machnac' })">LD Machnáč</AppLink>
      </div>
      <div><AppLink class="pointer-events-auto hover:underline" :to="$i18nRoute({ name: 'Faq' })">FAQ</AppLink></div>
    </div>
  </div>

  <Menu :shown="menuShown" @close="menuShown = false" />

  <div v-show="$route.name == 'Home' && !calendarShown" :class="claimShown ? 'top-1/2' : '-top-1/2'" class="duration-1000 fixed font-display leading-none left-1/2 pointer-events-none text-[14vw] lg:text-[8vw] text-blue text-center transform transition-all -translate-x-1/2 -translate-y-1/2 uppercase z-[80]">
    Vyvlastnime<br>Machnáč!
  </div>
</template>

<script>
import Calendar from './components/Calendar.vue'
import Footer from './components/Footer.vue'
import Header from './components/Header.vue'
import Menu from './components/Menu.vue'

export default {
  components: { Calendar, Footer, Header, Menu },
  data() {
    return {
      menuShown: false,
      claimShown: true,
      calendarShown: false,
    }
  },
  created() {
    window.addEventListener('scroll', this.scroll, { passive: true })
    this.$emitter.on('app-link.click', this.appLinkClicked)
  },
  unmounted() {
    window.removeEventListener('scroll', this.scroll, { passive: true })
  },
  methods: {
    appLinkClicked(route) {
      this.menuShown = false
      this.calendarShown = false
      if (route.hash) {
        const el = document.querySelector(route.hash)
        if (el) {
          el.scrollIntoView({
            behavior: 'smooth'
          })
        }
      } else {
        this.$refs.routerView.scroll(0, 0)
      }
    },
    scroll(e) {
      const top = e.target === document ? window.scrollY : e.target.scrollTop
      if (top > 200) {
        this.claimShown = false
      }
    },
  },
}
</script>