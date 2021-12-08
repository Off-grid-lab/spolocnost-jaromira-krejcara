<template>
    <img src="/img/web_home1.jpg" class="block h-[calc(100vh-3.5rem)] object-cover w-full">
    <img src="/img/web_home2.jpg" class="block h-[calc(100vh-3.5rem)] object-cover w-full">
    <div class="bg-linen text-black overflow-auto">
        <div
            v-for="(article, i) in articles"
            :key="`article_${i}`"
            :ref="observe"
            :id="`${article.slug[$i18n.locale]}`">
            <Article
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
            observer: new IntersectionObserver(this.observerCallback, {
                threshold: 0,
            }),
            visibleTargets: new Set(),
        }
    },
    mounted() {
        axios.get('/api/articles').then(({ data }) => {
            this.articles = data.data

            this.$nextTick(() => {
                if (this.$route.hash) {
                    const el = document.querySelector(this.$route.hash)
                    if (el) {
                        el.scrollIntoView({
                            behavior: 'smooth'
                        })
                    }
                }
            })
        })
    },
    methods: {
        observe(el) {
            if (el) {
                this.observer.observe(el)
            }
        },
        observerCallback(entries) {
            const wasVisible = this.visibleTargets.size
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    this.visibleTargets.add(entry.target)
                } else {
                    this.visibleTargets.delete(entry.target)
                }
            })
            const [first] = this.visibleTargets
            if (first) {
                this.$router.replace({ hash: `#${first.id}` })
            } else if (wasVisible) {
                this.$router.replace({ hash: null })
            }
        }
    }
}
</script>
