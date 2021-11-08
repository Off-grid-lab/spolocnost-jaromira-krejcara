<template>
    <div v-show="shown">
        <div class="bg-blue flex flex-col justify-between fixed inset-0 p-4 text-black uppercase lg:w-1/2 z-[90]">
            <ul>
                <li><button role="button" @click="$emit('close')">X</button></li>
                <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Home' })">SJK</AppLink></li>
                <li><a class="hover:underline" href="#">Kto sme</a></li>
                <li><a class="hover:underline" href="#">Zámer</a></li>
                <li><a class="hover:underline" href="#">Jaromír Krejcar</a></li>
                <li><a class="hover:underline" href="#">LD Machnáč</a></li>
                <li><AppLink class="hover:underline" :to="$i18nRoute({ name: 'Faq' })">FAQ</AppLink></li>
                <li><LocaleSwitcher /></li>
            </ul>

            <ul>
                <li><a class="hover:underline uppercase" href="#">Podporte nás!</a></li>
                <li><a class="hover:underline uppercase" href="#">Odoberať newsletter</a></li>
            </ul>
        </div>

        <div class="bg-gradient-to-r from-blue to-transparent fixed h-full hidden lg:block left-1/2 top-0 w-4 z-[90]"></div>
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