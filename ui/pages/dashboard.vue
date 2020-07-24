<template>
  <v-app>
    <NavigationDrawer :current-page="'dashboard'" />
    <v-app-bar app>
      <!-- -->
    </v-app-bar>
    <v-main class="bgColor">
      <v-container fluid>
        <Introforcontent />
      </v-container>
      <v-container>
        <Graphcontent />
      </v-container>
      <v-container>
        <Sparklines />
      </v-container>
      <v-container>
        <BestSellingProduct />
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
import Introforcontent from '@/components/Introforcontent'
import NavigationDrawer from '@/components/NavigationDrawer'
import Graphcontent from '@/components/Graphcontent'
import Sparklines from '@/components/Sparklines'
import BestSellingProduct from '@/components/BestSellingProduct'

export default {
  components: {
    NavigationDrawer,
    Introforcontent,
    Graphcontent,
    Sparklines,
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

<style>
.bgColor {
  background-color: #ebeff3;
}
</style>
