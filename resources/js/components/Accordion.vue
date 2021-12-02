a<template>
    <div class="bg-linen text-black" v-if="list.length">
        <article class="border-b-1 last:border-0 border-black" v-for="(article, i) in list" :key="`list_${i}`">
            <h3 @click="selected = selected !== article ? article : null" class="cursor-pointer max-w-2xl mx-auto p-4 text-center text-2xl uppercase">{{ article.title[$i18n.locale] }}</h3>

            <div :class="selected !== article ? 'hidden' : ''">
                <Images :images="article.images" />
                <div class="text-center max-w-xl mx-auto pb-8 lg:pb-16 px-4">
                    <p v-for="(paragraph, i) in split(article.content[$i18n.locale])" :key="`paragraph_${i}`">{{ paragraph }}</p>
                </div>
            </div>
        </article>
    </div>
</template>

<script>
import Images from './Images.vue'

export default {
    components: { Images },
    props: ['list'],
    data() {
        return {
            selected: null,
        }
    },
    methods: {
        split(content) {
            return content ? content.split('\n') : []
        }
    }
}
</script>