<template>
  <v-app>
    <navigationdrawer :current-page="'dashboard'" />
    <v-app-bar app>
      <!-- -->
    </v-app-bar>
    <v-main class="bgColor">
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
        <bestsellingproduct />
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
import introforcontent from '@/components/introforcontent'
import navigationdrawer from '@/components/navigationdrawer'
import graphcontent from '@/components/graphcontent'
import sparklines from '@/components/sparklines'
import bestsellingproduct from '@/components/bestsellingproduct'

export default {
  components: {
    navigationdrawer,
    introforcontent,
    graphcontent,
    sparklines,
    bestsellingproduct
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
