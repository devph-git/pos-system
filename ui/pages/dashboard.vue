<template>
  <v-app>
    <navigationDrawer />
    <v-app-bar app>
      <!-- -->
    </v-app-bar>
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
  </v-app>
</template>

<script>
import introforcontent from '@/components/introforcontent'
import navigationDrawer from '@/components/navigationDrawer'
import graphcontent from '@/components/graphcontent'
import sparklines from '@/components/sparklines'
import BestSellingProduct from '@/components/BestSellingProduct'

export default {
  components: {
    navigationDrawer,
    introforcontent,
    graphcontent,
    sparklines,
    BestSellingProduct
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
