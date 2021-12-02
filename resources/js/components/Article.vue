<template>
    <article>
        <h2 v-if="heading" class="font-display leading-none mb-4 pt-16 lg:pt-24 px-[4vw] text-[14vw] lg:text-[7vw] text-center uppercase">{{ heading }}</h2>

        <Images v-bind="{ images, cover }" />

        <div class="max-w-xl mb-16 lg:mb-24 px-4">
            <h3 class="text-xl lg:text-2xl my-3 lg:my-5">{{ title }}</h3>
            <p v-for="(paragraph, i) in paragraphs" :key="`paragraph_${i}`">{{ paragraph }}</p>
        </div>
    </article>
</template>

<script>
import Images from './Images.vue'
export default {
    components: { Images },
    props: ['heading', 'title', 'content', 'images', 'slug', 'cover'],
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
