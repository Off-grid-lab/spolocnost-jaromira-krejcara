<template>
  <router-link
    v-bind="$props"
    @click="$emitter.emit('app-link.click', route)"
    :class="isExactActive && $route.hash === route.hash ? 'router-link-exact-with-hash-active' : ''"
  >
    <slot />
  </router-link>
</template>

<script>
import { RouterLink, useLink } from 'vue-router'

export default {
  name: 'AppLink',

  props: {
    ...RouterLink.props,
  },

  setup(props) {
    const { navigate, href, route, isActive, isExactActive } = useLink(props)
    return { isExactActive, route }
  },
}
</script>