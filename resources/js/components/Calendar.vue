<template>
    <div class="flex flex-wrap max-w-lg">
        <button @click="selectedTag = selectedTag !== i ? i : null" :class="selectedTag == i ? 'bg-blue text-black' : ''" class="border-2 border-blue m-1 px-3 rounded-full text-blue" v-for="i in 10" :key="`tag_${i}`">Tag</button>
    </div>

    <div class="flex flex-wrap -mx-1 mt-24">
        <router-link class="block group hover:text-blue px-1 text-sm w-full lg:w-1/4" :to="$i18nRoute({ name: 'NewsDetail', params: { id: article.id } })" v-for="(article, i) in news" :key="`news_${i}`">
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
        }
    },
    mounted() {
        axios.get('/api/news').then(({data}) => {
            this.news = data.data
        })
    }
}
</script>