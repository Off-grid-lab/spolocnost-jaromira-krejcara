<template>
    <div class="bg-linen h-full text-black" v-if="faq">
        <article class="border-b-2 last:border-0 border-black" v-for="(article, i) in faq" :key="`faq_${i}`">
            <h3 @click="selected = selected !== i ? i : null" class="cursor-pointer p-4 text-center text-2xl uppercase">{{ article.title[$i18n.locale] }}</h3>
        
            <div :class="selected !== i ? 'hidden' : ''" class="text-center max-w-xl mx-auto pb-8 lg:pb-16 px-4">
                <p v-for="(paragraph, i) in split(article.content[$i18n.locale])" :key="`paragraph_${i}`">{{ paragraph }}</p>
            </div>
        </article>
    </div>
</template>

<script>
export default {
    data() {
        return {
            faq: [],
            selected: null,
        }
    },
    mounted() {
        axios.get(`/api/faq`).then(({data}) => {
            this.faq = data
        })
    },
    methods: {
        split(content) {
            return content ? content.split('\n') : []
        }
    }
}
</script>