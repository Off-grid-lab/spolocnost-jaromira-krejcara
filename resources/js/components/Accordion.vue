<template>
    <div class="bg-linen text-black" v-if="list.length">
        <article class="border-b-1 last:border-0 border-black" v-for="(article, i) in filteredList" :key="`list_${i}`">
            <h3
            @click="selected = selected !== article ? article : null"
            class="cursor-pointer max-w-2xl p-4 text-2xl uppercase"
            :class="{ 'mx-auto text-center': justify !== 'left' }"
            >{{ article.title[$i18n.locale] }}</h3>

            <div :class="selected !== article ? 'hidden' : ''">
                <Images :images="article.images" />
                <div
                class="max-w-xl pb-8 lg:pb-16 px-4"
                :class="{ 'mx-auto text-center': justify !== 'left' }"
                v-html="article.content[$i18n.locale]"
                ></div>
            </div>
        </article>
    </div>
</template>

<script>
import Images from './Images.vue'

export default {
    components: { Images },
    props: ['list', 'justify'],
    data() {
        return {
            selected: null,
        }
    },
    computed: {
        filteredList() {
            return this.list.filter(article => {
                return article.title[this.$i18n.locale]
            })
        }
    }
}
</script>