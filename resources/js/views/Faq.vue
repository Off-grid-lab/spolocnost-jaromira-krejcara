<template>
    <div class="bg-linen h-full text-black" v-if="faq">
        <div class="border-b-2 last:border-0 border-black" v-for="(article, i) in faq" :key="`faq_${i}`">
            <h3 @click="selected = selected !== i ? i : null" class="cursor-pointer p-4 text-center text-lg uppercase">{{ article.title[$i18n.locale] }}</h3>
        
            <p :class="selected !== i ? 'hidden' : ''" class="text-center">
                {{ article.content[$i18n.locale] }}
            </p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            selected: null,
            faq: [],
        }
    },
    mounted() {
        axios.get(`/api/faq`).then(({data}) => {
            this.faq = data
        })
    },
}
</script>