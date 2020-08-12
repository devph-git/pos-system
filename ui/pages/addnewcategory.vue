<template>
  <v-app>
    <navigationdrawer :current-page="'add-new-category'" />
    <v-app-bar app>
      <!-- -->
    </v-app-bar>
    <v-main class="bgColor">
      <v-container class="row mx-auto" fluid>
        <div class="col-7">
          <updatecategory />
        </div>
        <div class="col-5">
          <categorylist />
        </div>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
import navigationdrawer from '@/components/navigationdrawer'
import updatecategory from '@/components/updatecategory'
import categorylist from '@/components/categorylist'

export default {
  components: {
    navigationdrawer,
    updatecategory,
    categorylist
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
