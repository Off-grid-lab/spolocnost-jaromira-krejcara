<template>
    <div class="flex flex-wrap max-w-lg px-4">
        <button @click="selectedTag = selectedTag !== tag ? tag : null" :class="selectedTag === tag ? 'bg-blue text-black' : ''" class="border-2 border-blue m-1 px-3 rounded-full text-blue" v-for="(tag, i) in tags" :key="`tag_${i}`">{{ tag.title[$i18n.locale] }}</button>
    </div>

    <div class="flex flex-wrap -mx-1 mt-24 px-4">
        <router-link :class="current(article) ? 'text-blue' : ''" class="block group hover:text-blue px-1 text-sm w-full lg:w-1/4" :to="$i18nRoute({ name: 'NewsDetail', params: { id: article.id } })" v-for="(article, i) in filteredNews" :key="`news_${i}`">
            <div>{{ $formatDate(article.datetime) }}</div>
            <img src="https://via.placeholder.com/300" class="block object-cover lg:opacity-0 group-hover:opacity-100 w-full" style="aspect-ratio: 16/9;">
            <div class="truncate uppercase">{{ article.title[$i18n.locale] }}</div>
            <div class="lg:min-h-[10rem] w-full">{{ article.perex[$i18n.locale] }}</div>
        </router-link>
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