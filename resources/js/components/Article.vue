<template>
    <article>
        <h2 v-if="heading" class="font-display leading-none mb-4 mt-16 lg:mt-24 px-[4vw] text-[14vw] lg:text-8xl text-center uppercase">{{ heading }}</h2>

        <template v-if="images && images.length">
            <div class="w-full" :class="images.length > 1 ? 'cursor-pointer' : ''" style="aspect-ratio: 16/9;" @click="currentImage = (currentImage + 1) % images.length">
                <img v-for="(image, i) in images" :key="`image_${i}`" v-show="i === currentImage" :src="image.url" :srcset="image.srcset" :alt="image.name" class="block h-full object-contain object-left-top">
            </div>
            <div class="text-center mt-1" v-if="images.length > 1">{{ currentImage + 1 }}/{{ images.length }}</div>
        </template>

        <div class="max-w-xl mb-16 lg:mb-24 px-4">
            <h3 class="text-2xl my-6">{{ title }}</h3>
            <p v-for="(paragraph, i) in paragraphs" :key="`paragraph_${i}`">{{ paragraph }}</p>
        </div>
    </article>
</template>

<script>
export default {
    props: ['heading', 'title', 'content', 'images'],
    data() {
        return {
            currentImage: 0,
        }
    },
    computed: {
        paragraphs() {
            return this.content ? this.content.split('\n') : []
        }
    }
}
</script>
