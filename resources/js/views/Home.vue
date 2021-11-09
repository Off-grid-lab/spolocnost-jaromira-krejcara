<template>
    <div>
        <img src="https://via.placeholder.com/1000" class="block h-[calc(100vh-3.5rem)] object-cover w-full">
        <img src="https://via.placeholder.com/1000" class="block h-[calc(100vh-3.5rem)] object-cover w-full">
        <div class="bg-linen text-black overflow-auto">
            <Article
                v-for="(article, i) in articles"
                :key="`article_${i}`"
                :heading="article.heading[$i18n.locale]"
                :title="article.title[$i18n.locale]"
                :slug="article.slug[$i18n.locale]"
                :content="article.content[$i18n.locale]"
                :images="article.images" />
        </div>
    </div>
</template>

<script>
import Article from '../components/Article.vue'

export default {
    components: { Article },
    data() {
        return {
            articles: [],
        }
    },
    mounted() {
        axios.get('/api/articles').then(({ data }) => {
            this.articles = data.data
        })
    }
}
</script>
