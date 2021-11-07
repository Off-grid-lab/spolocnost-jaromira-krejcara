<template>
    <div v-if="news">
        <div class="w-full" style="aspect-ratio: 16/9;">
            <img @click="currentImage = (currentImage + 1) % news.images.length" v-for="(image, i) in news.images" :key="`image_${i}`" v-show="i === currentImage" :src="image.url" :srcset="image.srcset" :alt="image.name" class="cursor-pointer block h-full object-contain">
        </div>
        <div class="text-center" v-if="news.images.length">{{ currentImage + 1 }}/{{ news.images.length }}</div>

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
            currentImage: 0,
        }
    },
    mounted() {
        this.fetch(this.$route)
    },
    methods: {
        fetch(route) {
            axios.get(`/api/news/${route.params.id}`).then(({data}) => {
                this.news = data.data
            })
        }
    },
    beforeRouteUpdate(to, from, next) {
        next()
        this.fetch(to)
    }
}
</script>