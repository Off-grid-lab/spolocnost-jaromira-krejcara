<template>
    <div v-if="news">
        <Article :title="news.title[$i18n.locale]" :content="news.content[$i18n.locale]" :images="news.images" :cover="true" />
    </div>
</template>

<script>
import Article from '../components/Article.vue'

export default {
    components: { Article },
    data() {
        return {
            news: null,
            currentImage: 0,
        }
    },
    mounted() {
        this.fetch(this.$route)
    },
    methods: {
        fetch(route) {
            return axios
                .get(`/api/news/${route.params.id}`)
                .then(({data}) => {
                    this.news = data.data
                    if (!this.news.title[this.$i18n.locale]) {
                        this.$router.replace({ name: 'Home' })
                    }
                })
        }
    },
    beforeRouteUpdate(to, from, next) {
        next()
        this.fetch(to)
    }
}
</script>