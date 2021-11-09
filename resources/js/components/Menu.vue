<template>
    <div class="fixed inset-0 z-[90]" v-show="shown">
        <div class="cursor-pointer fixed inset-0" @click="$emit('close')"></div>

        <div class="bg-blue flex flex-col h-full justify-between px-4 py-3 relative text-2xl text-black underline-offset-sans underline-thickness-sans uppercase lg:w-1/2">
            <div>
                <div>
                    <button class="h-14 leading-14" role="button" @click="$emit('close')">
                        <div class="absolute border-current border-t-1 origin-center rotate-[30deg] w-8"></div>
                        <div class="absolute border-current border-t-1 origin-center rotate-[-30deg] w-8"></div>
                    </button>
                </div>
                <ul class="leading-tight">
                    <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Home' })">SJK</AppLink></li>
                    <li><a class="hover:underline" href="#">Kto sme</a></li>
                    <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Info' })">Zámer</AppLink></li>
                    <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Home', hash: '#jaromir-krejcar' })">Jaromír Krejcar</AppLink></li>
                    <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Home', hash: '#ld-machnac' })">LD Machnáč</AppLink></li>
                    <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Faq' })">FAQ</AppLink></li>
                    <li><LocaleSwitcher /></li>
                </ul>
            </div>

            <ul>
                <li><a class="hover:underline uppercase" href="#">Podporte nás!</a></li>
                <li><a class="hover:underline uppercase" href="#">Odoberať newsletter</a></li>
            </ul>
        </div>

        <div class="bg-gradient-to-r from-blue to-transparent bottom-0 fixed hidden lg:block left-1/2 top-0 w-4 z-[90]"></div>
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