<template>
    <div class="flex flex-col items-stretch">
        <div class="flex-grow px-4 mt-14">
            <div class="flex flex-wrap max-w-lg">
                <button @click="selectedTag = selectedTag !== i ? i : null" :class="selectedTag == i ? 'bg-blue text-black' : ''" class="border-2 border-blue m-1 px-3 rounded-full text-blue" v-for="i in 10" :key="`tag_${i}`">Tag</button>
            </div>

            <div class="flex flex-wrap -mx-1 mt-24">
                <router-link class="block group hover:text-blue px-1 text-sm w-full lg:w-1/4" :to="{ name: 'NewsDetail', params: { locale: $i18n.locale, id: i } }" v-for="i in 20" :key="`news_${i}`">
                    <div>23/7/19</div>
                    <img src="https://via.placeholder.com/300" class="block object-cover lg:opacity-0 group-hover:opacity-100 w-full" style="aspect-ratio: 16/9;">
                    <div class="truncate uppercase">NÁZOV, KTORÝ SA NEZMESTÍ</div>
                    <div class="lg:min-h-[10rem] w-full">Lorem Ipsum is simply dummy</div>
                </router-link>
            </div>
        </div>
        <div class="bg-linen pb-6 px-4 pt-4 relative text-black z-[20]">
        <Footer />
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            selectedTag: null,
        }
    }
}
</script>