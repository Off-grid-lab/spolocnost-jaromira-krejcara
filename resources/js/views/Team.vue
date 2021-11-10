<template>
    <div class="bg-linen h-full text-black">
        <div class="flex flex-wrap -mx-1 p-4">
            <div v-for="(member, i) in members" :key="`member_${i}`" class="block duration-300 group px-1 text-sm w-full lg:w-1/4">
                <div class="mb-2">{{ member.name }}</div>
                <div style="aspect-ratio: 16/9;">
                    <img v-if="member.image" :src="member.image.url" :srcset="member.image.srcset" :alt="member.image.name" class="block h-full object-cover w-full">
                </div>
                <div class="mb-4 mt-3 min-h-[10rem] w-full">{{ member.content[$i18n.locale] }}</div>
            </div>
        </div>

        <Partners :list="partners" heading="Partneri" />
        <Partners :list="supports" heading="Podpora &amp; spolupráca" />
    </div>
</template>

<script>
import Partners from '../components/Partners.vue'

export default {
    components: { Partners },
    data() {
        return {
            members: [],
            partners: [],
            supports: [],
        }
    },
    mounted() {
        axios.get(`/api/members`).then(({ data }) => {
            this.members = data.data
        })
        axios.get(`/api/partners`).then(({ data }) => {
            this.partners = data
        })
        axios.get(`/api/supports`).then(({ data }) => {
            this.supports = data
        })
    }
}
</script>