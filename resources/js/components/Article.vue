<template>
    <article>
        <h2 v-if="heading" class="font-display leading-none mb-4 pt-16 lg:pt-24 px-[4vw] lg:px-[2vw] text-[15vw] lg:text-[7.5vw] text-center uppercase">{{ heading }}</h2>

        <Images v-bind="{ images, cover }" />

        <div class="max-w-xl mb-16 lg:mb-24 px-4">
            <h1>{{ title }}</h1>
            <div v-html="content"></div>
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
    }
}
</script>
