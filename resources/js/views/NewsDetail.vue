<template>
    <div v-if="news">
        <div class="w-full" style="aspect-ratio: 16/9;">
            <img class="block h-full" src="https://via.placeholder.com/1000">
        </div>
        <div class="text-center">1/4</div>

        <div class="max-w-lg px-4">
            <h3 class="mt-4 text-2xl">{{ news.title[$i18n.locale] }}</h3>
            <p>{{ news.content[$i18n.locale] }}</p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            news: null,
        }
    },
    mounted() {
        this.fetch(this.$route)
    },
    methods: {
        fetch(route) {
            axios.get(`/api/news/${route.params.id}`).then(({data}) => {
                this.news = data
            })
        }
    },
    beforeRouteUpdate(to, from, next) {
        next()
        this.fetch(to)
    }
}
</script>