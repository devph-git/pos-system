<template>
  <v-app>
    <navigationdrawer :current-page="'product'" />
    <v-app-bar app>
      <!-- -->
    </v-app-bar>
    <v-main class="bgColor">
      <v-container class="row mx-auto" fluid>
        <div class="col-7">
          <displayproduct />
        </div>
        <div class="col-5">
          <order />
        </div>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
import navigationdrawer from '@/components/navigationdrawer'
import displayproduct from '@/components/displayproduct'
import order from '@/components/order'

export default {
  components: {
    navigationdrawer,
    displayproduct,
    order
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
