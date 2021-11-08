<template>
    <div class="px-4">
        <div class="flex flex-wrap max-w-lg">
            <button @click="selectedTag = selectedTag !== tag ? tag : null" :class="selectedTag === tag ? 'bg-blue text-black' : 'text-blue'" class="border-2 border-blue m-1 px-3 rounded-full" v-for="(tag, i) in tags" :key="`tag_${i}`">{{ tag.title[$i18n.locale] }}</button>
        </div>

        <div class="flex flex-wrap mt-24 -mx-1">
            <AppLink :class="current(article) ? 'text-blue' : ''" class="block group hover:text-blue px-1 text-sm w-full lg:w-1/4" :to="$i18nRoute({ name: 'NewsDetail', params: { id: article.id } })" v-for="(article, i) in filteredNews" :key="`news_${i}`">
                <div>{{ $formatDate(article.datetime) }}</div>
                <div style="aspect-ratio: 16/9;">
                    <img v-if="article.image" :src="article.image.url" :srcset="article.image.srcset" :alt="article.image.name" class="block object-cover lg:opacity-0 group-hover:opacity-100 w-full">
                </div>
                <div class="truncate uppercase">{{ article.title[$i18n.locale] }}</div>
                <div class="lg:min-h-[10rem] w-full">{{ article.perex[$i18n.locale] }}</div>
            </AppLink>
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
        }
    },
    mounted() {
        axios.get('/api/tags').then(({data}) => {
            this.tags = data
        })
        axios.get('/api/news').then(({data}) => {
            this.news = data.data
        })
    },
    methods: {
        current(article) {
            return this.$route.name === 'NewsDetail' && this.$route.params.id == article.id
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