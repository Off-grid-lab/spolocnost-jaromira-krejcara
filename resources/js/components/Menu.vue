<template>
    <div v-show="shown">
        <div class="cursor-pointer fixed inset-0" @click="$emit('close')"></div>
        <div class="bg-blue fixed inset-0 lg:right-1/2 overflow-y-auto z-[90]">
            <div class="flex flex-col h-full justify-between relative text-black underline-offset-sans underline-thickness-sans">
                <ul class="leading-tight mt-14 px-4 text-2xl uppercase">
                    <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Home' })">SJK</AppLink></li>
                    <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Team' })">Kto sme</AppLink></li>
                    <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Info' })">Zámer</AppLink></li>
                    <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Home', hash: '#jaromir-krejcar' })">Jaromír Krejcar</AppLink></li>
                    <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Home', hash: '#ld-machnac' })">LD Machnáč</AppLink></li>
                    <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Faq' })">FAQ</AppLink></li>
                    <li><LocaleSwitcher /></li>
                </ul>

                <div class="relative top-4">
                    <ul class="px-4 text-2xl uppercase">
                        <li><a class="hover:underline" href="https://sjk.darujme.sk/zachranme-spolu-ld-machnac-bc0e3-cda68/" target="_blank" rel="noopener">Podporte nás!</a></li>
                        <li><a class="hover:underline" href="https://jaromirkrejcar.us1.list-manage.com/subscribe?u=4e63a4d17cc72ef85255a875f&amp;id=db6fc83619" target="_blank" rel="noopener">Odoberať newsletter</a></li>
                    </ul>

                    <Footer class="absolute" />
                </div>
            </div>

            <div class="absolute flex h-14 leading-14 px-4 text-2xl text-black top-0 z-[90]">
                <button role="button" class="relative w-8" @click="$emit('close')">
                    <div class="absolute border-current border-t-1.5 rotate-[30deg] w-8"></div>
                    <div class="absolute border-current border-t-1.5 rotate-[-30deg] w-8"></div>
                </button>
            </div>
        </div>
        <div class="bg-gradient-to-r from-blue to-transparent bottom-0 fixed hidden lg:block left-1/2 top-0 w-4 z-[90]"></div>
    </div>
</template>

<script>
import Footer from './Footer.vue'
import LocaleSwitcher from './LocaleSwitcher.vue'
export default {
    components: { Footer, LocaleSwitcher },
    props: ['shown'],
    emits: ['close'],
}
</script>