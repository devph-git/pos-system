<template>
  <div>
    <div v-if="false">
      <!-- LOGGED IN -->
    </div>
    <div v-else class="loginPage">
      <!-- LOGGING IN -->
      <LoginImage />
      <LoginForm />
    </div>
  </div>
</template>

<script>
import LoginForm from '@/components/LoginForm'
import LoginImage from '@/components/LoginImage'

export default {
  components: {
    LoginForm,
    LoginImage
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
