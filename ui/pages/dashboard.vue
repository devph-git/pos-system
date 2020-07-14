<template>
  <v-app>
    <navigationDrawer />
    <v-app-bar app>
      <!-- -->
    </v-app-bar>

    <!-- Sizes your content based upon application components -->
    <v-main>

      <!-- Provides the application the proper gutter -->
      <v-container fluid>

        <!-- If using vue-router -->
        <introforcontent />
      </v-container>
    </v-main>

    <v-footer app>
      <!-- -->
    </v-footer>
  </v-app>
</template>

<script>
import introforcontent from '@/components/introforcontent'
import navigationDrawer from '@/components/navigationDrawer'

export default {
  components: {
    navigationDrawer,
    introforcontent
  },
  head () {
    return {
      title: 'Dashboard',
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { hid: 'description', name: 'description' }
      ]
    }
  }
}
</script>

<style scoped>
</style>
