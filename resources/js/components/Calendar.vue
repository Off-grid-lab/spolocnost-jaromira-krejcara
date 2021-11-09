<template>
    <div class="bg-black fixed top-14 lg:sticky lg:top-0 lg:flex lg:flex-wrap overflow-x-scroll px-4 lg:pl-4 lg:pr-44 py-1 w-full whitespace-nowrap lg:whitespace-normal z-[10]">
        <button @click="selectedTag = selectedTag !== tag ? tag : null" :class="selectedTag === tag ? 'bg-blue text-black' : 'text-blue'" class="border-1 border-blue duration-100 my-1 mr-2 last:mr-0 px-3 rounded-full" v-for="(tag, i) in tags" :key="`tag_${i}`">{{ tag.title[$i18n.locale] }}</button>
    </div>

    <div class="px-4">
        <div class="flex flex-wrap mt-16 -mx-1">
            <AppLink v-for="(article, i) in filteredNews" :key="`news_${i}`" :class="current(article) ? 'text-blue' : ''" class="block duration-300 group hover:text-blue no-underline px-1 text-sm hover:translate-y-[-.1rem] w-full lg:w-1/4" :to="$i18nRoute({ name: 'NewsDetail', params: { id: article.id } })">
                <div class="mb-2">{{ $formatDate(article.datetime) }}</div>
                <div style="aspect-ratio: 16/9;">
                    <img v-if="article.image" :src="article.image.url" :srcset="article.image.srcset" :alt="article.image.name" class="block h-full object-cover lg:opacity-0 group-hover:opacity-100 w-full">
                </div>
                <div class="mb-1 mt-3 truncate uppercase">{{ article.title[$i18n.locale] }}</div>
                <div class="mb-4 min-h-[10rem] w-full">{{ article.perex[$i18n.locale] }}</div>
            </AppLink>
            <div ref="last"></div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            selectedTag: null,
            news: [],
            tags: [],
            page: 1,
            observer: new IntersectionObserver(this.observerCallback),
        }
    },
    mounted() {
        axios.get('/api/tags').then(({data}) => {
            this.tags = data
        })

        this.loadNews()
    },
    methods: {
        current(article) {
            return this.$route.name === 'NewsDetail' && this.$route.params.id == article.id
        },
        loadNews() {
            return axios.get('/api/news', {
                params: { page: this.page }
            }).then(({ data }) => {
                if (data.data.length) {
                    this.page += 1
                    this.news.push(...data.data)
                }

                if (data.data.length) {
                    this.$nextTick(() => {
                        this.observer.observe(this.$refs.last)
                    })
                }
            })
        },
        observerCallback(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    this.observer.unobserve(entry.target)
                    this.loadNews()
                }
            })
        }
    },
    computed: {
        filteredNews() {
            if (this.selectedTag === null) {
                return this.news
            }

            return this.news.filter(article => {
                return article.tags.map(tag => tag.id).includes(this.selectedTag.id)
            })
        }
    }
}
</script>