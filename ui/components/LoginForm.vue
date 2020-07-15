<template>
  <div class="container">
    <h1>Welcome</h1>
    <p>Sign in to your account</p>
    <form class="form" @submit.prevent="getData">
      <!-- <input v-model="userInfo.username" type="text" placeholder="Username"> -->
      <!-- USERNAME INPUT -->
      <v-text-field
        v-model="userInfo.username"
        outlined
        :rules="[rules.required, rules.min]"
        name="input-10-1"
        label="Username"
        hint="At least 8 characters"
        prepend-inner-icon="mdi-account"
        @click:append="show1 = !show1"
      ></v-text-field>
      <!--  -->
      <!-- PASSWORD INPUT -->
      <v-text-field
        v-model="userInfo.password"
        outlined
        :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
        :rules="[rules.required, rules.min]"
        :type="show1 ? 'text' : 'password'"
        name="input-10-1"
        label="Password"
        hint="At least 8 characters"
        counter
        prepend-inner-icon="mdi-lock"
        @click:append="show1 = !show1"
      ></v-text-field>
      <!--  -->
      <!-- <input v-model="userInfo.password" type="password" placeholder="Password"> -->
      <v-row class="pa-2 ma-0">
        <v-checkbox class="ma-0 pa-0" label="Remember me"></v-checkbox>
        <v-spacer />
        <span>Forgot password?</span>
      </v-row>
      <v-btn
        block
        :disabled="this.userInfo.username.length > 8 && this.userInfo.password.length > 8 ? false : true"
        :depressed="this.userInfo.username.length > 8 && this.userInfo.password.length > 8 ? false : true"
        type="submit"
        color="#3889BE"
        :dark="this.userInfo.username.length > 8 && this.userInfo.password.length > 8 ? true : false">
          LOGIN
        </v-btn>
      <div class="center">
        <span>Don't have an account? Sign up</span>
      </div>
    </form>
    <div class="community-name center">
      <h4>DEVPH.IO | POS SYSTEM</h4>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LoginForm',
  data () {
    return {
      userInfo: {
        username: '',
        password: ''
      },
      // Script for vuetify
      show1: false,
      rules: {
        required: value => !!value || 'Required.',
        min: v => v.length >= 8 || 'Min 8 characters',
        emailMatch: () => ('The username and password you entered don\'t match')
      }
      //
    }
  },
  methods: {
    async getData () {
      try {
        const response = await this.$auth.loginWith('local', { data: this.login })
        console.log(response)
      } catch (err) {
        console.log(err)
      }
    }
  }
}
</script>

<style lang="scss" scoped>
.form {
  margin-top: 5%;
  > input[type=text], input[type=password], input[type=submit] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  > span {
    color: #3889BE;
  }
  > label,div {
    color: #3889BE;
  }
}
.container {
  > h1, p {
    color: #34495E;
    margin: 0;
    padding: 0;
    font-size: 40px;
  }
  > p {
    font-size: 20px;
  }
}
.center {
  text-align: center;
}
.community-name {
  margin-top: 20%;
  text-shadow: 2px 2px 3px #000000;
}
</style>
