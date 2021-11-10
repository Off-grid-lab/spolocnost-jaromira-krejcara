<template>
    <div v-show="shown">
        <div class="fixed inset-0 z-[90]">
            <div class="cursor-pointer fixed inset-0" @click="$emit('close')"></div>

            <div class="bg-blue flex flex-col h-full justify-between pb-3 px-4 relative text-2xl text-black underline-offset-sans underline-thickness-sans uppercase lg:w-1/2">
                <div>
                    <ul class="leading-tight mt-14">
                        <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Home' })">SJK</AppLink></li>
                        <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Team' })">Kto sme</AppLink></li>
                        <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Info' })">Zámer</AppLink></li>
                        <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Home', hash: '#jaromir-krejcar' })">Jaromír Krejcar</AppLink></li>
                        <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Home', hash: '#ld-machnac' })">LD Machnáč</AppLink></li>
                        <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Faq' })">FAQ</AppLink></li>
                        <li><LocaleSwitcher /></li>
                    </ul>
                </div>

                <ul>
                    <li><a class="hover:underline uppercase" href="https://sjk.darujme.sk/zachranme-spolu-ld-machnac-bc0e3-cda68/">Podporte nás!</a></li>
                    <li><a class="hover:underline uppercase" href="https://jaromirkrejcar.us1.list-manage.com/subscribe?u=4e63a4d17cc72ef85255a875f&amp;id=db6fc83619" target="_blank" rel="noopener">Odoberať newsletter</a></li>
                </ul>
            </div>

            <div class="bg-gradient-to-r from-blue to-transparent bottom-0 fixed hidden lg:block left-1/2 top-0 w-4 z-[90]"></div>
        </div>
        <div class="flex fixed h-14 leading-14 px-4 text-2xl text-black top-0 z-[90]">
            <button role="button" class="relative w-8" @click="$emit('close')">
                <div class="absolute border-current border-t-1 rotate-[30deg] w-8"></div>
                <div class="absolute border-current border-t-1 rotate-[-30deg] w-8"></div>
            </button>
        </div>
    </div>
</template>

<script>
import LocaleSwitcher from './LocaleSwitcher.vue'
export default {
    components: { LocaleSwitcher },
    props: ['shown'],
    emits: ['close'],
}
</script>