<template>
<<<<<<< HEAD
  <div>
    <dashboardIntroImage />
=======
  <div class="container">
    <v-hover>
      <template v-slot="{ hover }">
        <v-card
          :elevation="hover ? 20 : 6"
          class="row mx-auto pa-0"
        >
          <dashboardIntroImage class="col-5" />
          <div class="heading col-7 my-auto d-block">
            <p class="ma-0 pa-0">
              Welcome Back
            </p>
            <h1>Administrator!</h1>
            <p class="mr-6 font-weight-light">
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's
              standard dummy text ever since the 1500s, when an unknown
              printer took a galley of type and scrambled it to make a type
              specimen book.
            </p>
          </div>
        </v-card>
      </template>
    </v-hover>
>>>>>>> error/41493137/sparkline-component
  </div>
</template>

<script>
import dashboardIntroImage from './dashboardIntroImage'

export default {
<<<<<<< HEAD
  name: 'contentIntro',
=======
  name: 'ContentIntro',
>>>>>>> error/41493137/sparkline-component
  components: {
    dashboardIntroImage
  }
}
</script>
<<<<<<< HEAD
=======

<style lang="scss" scoped>
.container {
  font-size: 20px;
  color: #2c2c54;
}
</style>
>>>>>>> error/41493137/sparkline-component
