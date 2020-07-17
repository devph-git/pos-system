<template>
  <v-app>
    <navigationDrawer />
    <v-app-bar app>
      <!-- -->
    </v-app-bar>
<<<<<<< HEAD

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
=======
    <v-main>
      <v-container fluid>
        <introforcontent />
      </v-container>
      <v-container>
        <graphcontent />
      </v-container>
      <v-container>
        <sparklines />
      </v-container>
      <v-container>
        <BestSellingProduct />
      </v-container>
    </v-main>
>>>>>>> error/41493137/sparkline-component
  </v-app>
</template>

<script>
import introforcontent from '@/components/introforcontent'
import navigationDrawer from '@/components/navigationDrawer'
<<<<<<< HEAD
=======
import graphcontent from '@/components/graphcontent'
import sparklines from '@/components/sparklines'
import BestSellingProduct from '@/components/BestSellingProduct'
>>>>>>> error/41493137/sparkline-component

export default {
  components: {
    navigationDrawer,
<<<<<<< HEAD
    introforcontent
=======
    introforcontent,
    graphcontent,
    sparklines,
    BestSellingProduct
>>>>>>> error/41493137/sparkline-component
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
