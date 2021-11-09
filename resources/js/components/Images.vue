<template>
    <div class="mb-2" v-if="images && images.length">
        <div class="w-full" :class="images.length > 1 ? 'cursor-pointer' : ''" style="aspect-ratio: 16/9;" @click="currentImage = (currentImage + 1) % images.length">
            <img v-for="(image, i) in images" :key="`image_${i}`" v-show="i === currentImage" :src="image.url" :srcset="image.srcset" :alt="image.name" class="block h-full object-contain object-left-top">
        </div>
        <div class="text-center mt-1" v-if="images.length > 1">{{ currentImage + 1 }}/{{ images.length }}</div>
    </div>
</template>

<script>
export default {
    components: {},
    props: ['images'],
    data() {
        return {
            currentImage: 0,
        }
    },
}
</script>
