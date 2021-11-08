<template>
  <router-link
    v-bind="$attrs"
    @click="$emitter.emit('app-link.click')"
  >
    <slot />
  </router-link>
</template>

<script>
import { RouterLink } from 'vue-router'

export default {
  components: { RouterLink },
  name: 'AppLink',
  inheritAttrs: false,
}
</script>