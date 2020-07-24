<template>
  <v-app>
    <NavigationDrawer :current-page="'product'" />
    <v-app-bar app>
      <!-- -->
    </v-app-bar>
    <v-main class="bgColor">
      <v-container class="row mx-auto" fluid>
        <div class="col-7">
          <displayProduct />
        </div>
        <div class="col-5">
          <Order />
        </div>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
import NavigationDrawer from '@/components/NavigationDrawer'
import displayProduct from '@/components/displayProduct'
import Order from '@/components/Order'

export default {
  components: {
    NavigationDrawer,
    displayProduct,
    Order
  },
  head () {
    return {
      title: 'Product',
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { hid: 'description', name: 'description' }
      ]
    }
  }
}
</script>
