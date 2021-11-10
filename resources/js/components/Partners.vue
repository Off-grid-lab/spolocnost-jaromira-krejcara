<template>
    <div class="border-black border-t-1 px-4 py-8 lg:py-16 text-center text-xl lg:text-2xl">
        <h2 class="mb-4 lg:mb-8 uppercase">{{ heading }}</h2>

        <div v-for="(item, i) in list" :key="`item_${i}`" class="my-1">
            <a :href="item.link[$i18n.locale]" class="hover:underline" target="_blank" rel="noopener">{{ item.title[$i18n.locale] }}</a>
        </div>
    </div>
</template>

<script>
export default {
    props: ['heading', 'list'],
}
</script>>