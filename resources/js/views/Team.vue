<template>
    <div class="bg-linen h-full p-4 text-black">
        <div class="flex flex-wrap -mx-1">
            <div v-for="(member, i) in list" :key="`member_${i}`" class="block duration-300 group px-1 text-sm w-full lg:w-1/4">
                <div class="mb-2">{{ member.name }}</div>
                <div style="aspect-ratio: 16/9;">
                    <img v-if="member.image" :src="member.image.url" :srcset="member.image.srcset" :alt="member.image.name" class="block h-full object-cover w-full">
                </div>
                <div class="mb-4 mt-3 min-h-[10rem] w-full">{{ member.content[$i18n.locale] }}</div>
            </div>
        </div>
    </div>
</template>

<script>
import Accordion from '../components/Accordion.vue'
export default {
    components: { Accordion },
    data() {
        return {
            list: [],
        }
    },
    mounted() {
        axios.get(`/api/members`).then(({ data }) => {
            this.list = data.data
        })
    }
}
</script>