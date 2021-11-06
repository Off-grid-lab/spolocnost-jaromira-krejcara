<template>
    <div>
        <span v-for="locale in ['sk', 'en']" :key="`locale_${locale}`" :class="$i18n.locale === locale ? 'underline' : ''" class="cursor-pointer hover:underline pr-2" @click="switchLocale(locale)">{{ locale }}</span>
    </div>
</template>

<script>
export default {
    methods: {
        switchLocale(locale) {
            if (this.$i18n.locale !== locale) {
                this.$i18n.locale = locale;
                const to = this.$router.resolve({ params: { locale } })
                this.$router.push(to)
            }
        }
    }
}
</script>