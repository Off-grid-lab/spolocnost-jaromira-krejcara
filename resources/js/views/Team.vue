<template>
    <div class="bg-linen h-full overflow-hidden text-black">
        <div class="relative pb-[56.25%]">
            <iframe class="absolute h-full w-full" src="https://www.youtube.com/embed/PeuZO12WDd4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="flex flex-wrap px-4 my-8 -mx-1">
            <div v-for="(member, i) in members" :key="`member_${i}`" class="block duration-300 group px-1 text-sm w-full lg:w-1/4">
                <div class="mb-2">{{ member.name }}</div>
                <div class="mb-3" style="aspect-ratio: 16/9;">
                    <img v-if="member.image" :src="member.image.url" :srcset="member.image.srcset" :alt="member.image.name" class="block h-full object-cover w-full">
                </div>
                <div class="mb-1">{{ member.position[$i18n.locale] }}</div>
                <div class="mb-4 min-h-[10rem]">{{ member.content[$i18n.locale] }}</div>
            </div>
        </div>

        <Accordion :list="[statute]" v-if="statute" class="border-black border-t-1" />

        <Partners :list="partners" heading="Partneri" />
        <Partners :list="supports" heading="Podpora &amp; spolupráca" />
    </div>
</template>

<script>
import Accordion from '../components/Accordion.vue'
import Partners from '../components/Partners.vue'

export default {
    components: { Accordion, Partners },
    data() {
        return {
            members: [],
            partners: [],
            supports: [],
            statute: null,
        }
    },
    mounted() {
        axios.get('/api/members').then(({ data }) => {
            this.members = data.data
        })
        axios.get('/api/partners').then(({ data }) => {
            this.partners = data
        })
        axios.get('/api/supports').then(({ data }) => {
            this.supports = data
        })
        axios.get('/api/statute').then(({ data }) => {
            this.statute = data
        })
    }
}
</script>