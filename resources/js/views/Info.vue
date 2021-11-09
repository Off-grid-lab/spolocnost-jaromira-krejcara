<template>
    <Accordion v-bind="{ list }" />
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
        axios.get(`/api/infos`).then(({ data }) => {
            this.list = data.data
        })
    }
}
</script>