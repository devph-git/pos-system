<template>
  <div class="main">
    <h1>Update Category</h1>
    <v-card>
      <v-container>
        <div>
          <h3><b>Title</b></h3>
          <v-text-field
            label="Sample text"
            single-line
            outlined
          ></v-text-field>
        </div>
        <div>
          <h3><b>Slug</b></h3>
          <v-text-field
            label="Sample text"
            single-line
            outlined
          ></v-text-field>
        </div>
        <div>
          <h3><b>Description</b></h3>
          <v-textarea
            outlined
            single-line
            name="input-7-4"
            label="Sample text"
          ></v-textarea>
        </div>
      </v-container>
    </v-card>
    <div>
      <v-btn
        class="my-2"
        :loading="loading"
        :disabled="loading"
        color="secondary"
        @click="loader = 'loading'"
        large
      >
        Update Category
      </v-btn>
    </div>
  </div>
</template>

<script>
export default {
  name: 'updatecategory',
  data () {
    return {
      loader: null,
      loading: false
    }
  },
  watch: {
    loader () {
      const l = this.loader
      this[l] = !this[l]
      setTimeout(() => (this[l] = false), 30000)
      this.loader = null
    }
  }
}
</script>

<style lang="scss" scoped>
  .main > * {
    color: #4e4e4e;
  }
  .custom-loader {
    animation: loader 1s infinite;
    display: flex;
  }
  @-moz-keyframes loader {
    from {
      transform: rotate(0);
    }
    to {
      transform: rotate(360deg);
    }
  }
  @-webkit-keyframes loader {
    from {
      transform: rotate(0);
    }
    to {
      transform: rotate(360deg);
    }
  }
  @-o-keyframes loader {
    from {
      transform: rotate(0);
    }
    to {
      transform: rotate(360deg);
    }
  }
  @keyframes loader {
    from {
      transform: rotate(0);
    }
    to {
      transform: rotate(360deg);
    }
  }
  .v-application {
    .secondary {
      background-color: #1abc9c !important;
      border-color: #1abc9c !important;
    }
  }
</style>
