<template>
  <div class="container">
    <v-hover>
      <template v-slot="{ hover }">
        <v-card
          :elevation="hover ? 20 : 6"
          class="row mx-auto pa-0"
        >
          <dashboardintroimage class="col-5" />
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
  </div>
</template>

<script>
import dashboardintroimage from './dashboardintroimage'

export default {
  name: 'introforcontent',
  components: {
    dashboardintroimage
  }
}
</script>

<style lang="scss" scoped>
.container {
  font-size: 20px;
  color: #2c2c54;
}
</style>
