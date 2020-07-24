<template>
  <v-app>
    <NavigationDrawer :current-page="'view-category-list'" />
    <v-app-bar app>
      <!-- -->
    </v-app-bar>
    <v-main class="bgColor" />
  </v-app>
</template>

<script>
import NavigationDrawer from '@/components/NavigationDrawer'

export default {
  components: {
    NavigationDrawer
  },
  head () {
    return {
      title: 'View Category List',
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { hid: 'description', name: 'description' }
      ]
    }
  }
}
</script>
