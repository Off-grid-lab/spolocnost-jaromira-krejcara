<template>
    <div class="mb-10 relative" v-if="images && images.length">
        <div :class="{ 'cursor-pointer': images.length > 1 }"
            style="aspect-ratio: 3/2;"
            @click="currentImage = (currentImage + 1) % images.length">
            <img v-for="(image, i) in images" :key="`image_${i}`"
                v-show="i === currentImage"
                :src="image.url"
                :srcset="image.srcset"
                :alt="image.name"
                class="block h-full w-full"
                :class="cover ? 'object-cover' : 'object-contain object-left-top'">
        </div>
        <div class="absolute text-center mt-1 w-full" v-if="images.length > 1">{{ currentImage + 1 }}/{{ images.length }}</div>
    </div>
</template>

<script>
export default {
    components: {},
    props: ['images', 'cover'],
    data() {
        return {
            currentImage: 0,
        }
    },
}
</script>
