<template>
  <div>
    <div v-if="false">
      <!-- LOGGED IN -->
      <!-- Dashboard should put here -->
    </div>
    <div v-else class="loginPage">
      <!-- LOGGED OUT -->
      <loginimage />
      <loginform />
    </div>
  </div>
</template>

<script>
import loginform from '@/components/loginform'
import loginimage from '@/components/loginimage'

export default {
  components: {
    loginform,
    loginimage
  },
  head () {
    return {
      title: 'Login',
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
.loginPage {
  display: flex;
  margin: auto;
  margin-top: 8%;
  width: 90%;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
</style>
