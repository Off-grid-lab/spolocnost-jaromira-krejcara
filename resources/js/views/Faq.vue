<template>
    <Accordion v-bind="{ list }" class="h-full" />
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
        axios.get(`/api/faq`).then(({ data }) => {
            this.list = data
        })
    }
}
</script>