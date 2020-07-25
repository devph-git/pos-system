<template>
  <v-app>
    <navigationdrawer :current-page="'add-new-category'" />
    <v-app-bar app>
      <!-- -->
    </v-app-bar>
    <v-main class="bgColor" />
  </v-app>
</template>

<script>
import navigationdrawer from '@/components/navigationdrawer'

export default {
  components: {
    navigationdrawer
  },
  head () {
    return {
      title: 'Add New Category',
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { hid: 'description', name: 'description' }
      ]
    }
  }
}
</script>
