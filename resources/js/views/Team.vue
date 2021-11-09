<template>
    <div class="bg-linen h-full text-black" v-for="(member, i) in list" :key="`member_${i}`">
        {{ member.name }}
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