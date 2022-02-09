<template>
    <div class="mb-10 relative" v-if="images && images.length">
        <div
        :class="{ 'cursor-pointer': images.length > 1 }"
        @click="click">
            <swiper
            :loop="images.length > 1"
            @swiper="(instance) => { swiper = instance }"
            @slideChange="slideChange">
                <swiper-slide
                v-for="(image, i) in images"
                :key="`image_${i}`"
                style="aspect-ratio: 3/2;">
                    <img
                    :src="image.url"
                    :srcset="image.srcset"
                    sizes="(min-width: 1024px) 50vw, 100vw"
                    :alt="image.name"
                    class="block h-full w-full"
                    :class="cover ? 'object-cover' : 'object-contain object-left-top'">
                </swiper-slide>
            </swiper>
        </div>
        <div
        class="absolute text-center mt-1 w-full"
        v-if="images.length > 1"
        >{{ currentImage + 1 }}/{{ images.length }}</div>
    </div>
</template>

<script>
import { Swiper, SwiperSlide } from 'swiper/vue'

import 'swiper/css'

export default {
    components: { Swiper, SwiperSlide },
    props: ['images', 'cover'],
    data() {
        return {
            currentImage: 0,
            swiper: null,
        }
    },
    methods: {
        slideChange(swiper) {
            this.currentImage = swiper.realIndex
        },
        click() {
            this.swiper.slideNext()
        }
    }
}
</script>
