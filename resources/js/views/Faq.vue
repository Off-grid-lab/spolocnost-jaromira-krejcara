<template>
    <div class="bg-linen mt-14 text-black">
        <div class="border-b-2 last:border-0 border-black p-4" v-for="i in 10" :key="`faq_${i}`">
            <h3 @click="selected = selected !== i ? i : null" class="cursor-pointer text-center text-lg uppercase">Kto stojí za Spoločnosťou Jaromíra Krejcara?</h3>
        
            <p :class="selected !== i ? 'hidden' : ''" class="text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec molestie arcu eu odio suscipit auctor. Nam fringilla tellus sed elit ultrices, pharetra pretium tellus dapibus. Morbi consequat nec ante sollicitudin aliquam. In ante mi, euismod quis ipsum sit amet, sagittis feugiat diam. Integer vitae fermentum felis. Suspendisse ac lobortis neque. Duis leo leo, tempor eget nisl ut, volutpat convallis nisi. Vestibulum id laoreet metus. Sed mollis libero sed ligula euismod, suscipit tincidunt purus sagittis. Nullam sed porttitor eros, nec fringilla sapien. Morbi nec lectus at urna cursus luctus id in ante. Mauris non convallis urna, vitae dapibus nulla. Mauris sodales, tellus quis tincidunt pharetra, sem ligula dapibus dolor, id consequat felis urna sed massa. Duis urna odio, condimentum non orci in, tempus dictum velit. Nam vitae augue mauris. Ut et euismod mi, id maximus urna.
            </p>
        </div>
    </div>

    <div class="bg-blue pb-6 px-4 pt-4 relative text-black z-[40]">
        <Footer />
    </div>
</template>

<script>
export default {
    data() {
        return {
            selected: null,
        }
    }
}
</script>