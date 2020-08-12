<template>
  <div class="main">
    <h1>Category List</h1>
    <v-expansion-panels>
      <v-expansion-panel
        v-for="(item,i) in 3"
        :key="i"
        class="my-2"
      >
        <v-expansion-panel-header><h3>Item</h3></v-expansion-panel-header>
        <v-expansion-panel-content>
          <p><strong>Name : </strong>
            <span class="less-opacity">
              Sample text
            </span>
          </p>
          <p><strong>Slug : </strong>
            <span class="less-opacity">
              Sample text
            </span>
          </p>
          <p><strong>Description : </strong>
            <span class="less-opacity">
              Lorem ipsum, or lipsum as it is sometimes known, is
              dummy text used in laying out print, graphic
              or web designs.
            </span>
          </p>
          <div class="category-btn d-flex justify-end">
            <div @click.stop="delete_dialog = true" class="ma-1">
              <v-btn small color="delete-btn">Delete</v-btn>
            </div>
            <div @click.stop="update_dialog = true" class="ma-1">
              <v-btn small color="update-btn">Update</v-btn>
            </div>
          </div>
        </v-expansion-panel-content>
      </v-expansion-panel>
    </v-expansion-panels>
    <!-- DELETE DIALOG -->
    <v-dialog
      v-model="delete_dialog"
      max-width="390"
    >
      <v-card>
        <v-card-title>Confirm Delete</v-card-title>
        <v-divider />
        <v-card-text>
          Are you sure you want to delete this item from your category list?
        </v-card-text>
        <v-divider />
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn
            small
            color="delete-btn"
            @click="delete_dialog = false"
          >
            Delete
          </v-btn>
          <v-btn
            small
            color="cancel-btn"
            @click="delete_dialog = false"
          >
            Cancel
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <!--  -->
    <!-- UPDATE DIALOG -->
    <v-dialog
      v-model="update_dialog"
      max-width="390"
    >
      <v-card class="text-center">
        <v-card-title class="headline">
          <div class="update-image mx-auto">
            <img src="../assets/okpx.png">
          </div>
        </v-card-title>
        <v-divider />
        <v-card-text class="py-3">
          <h3><strong>Category has been updated!</strong></h3>
        </v-card-text>
        <v-divider />
        <v-card-actions>
          <v-btn
            text
            color="primary"
            @click="update_dialog = false"
            class="mx-auto"
          >
            Close
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <!--  -->
  </div>
</template>

<script>
export default {
  name: 'categorylist',
  data () {
    return {
      loader: null,
      loading: false,
      delete_dialog: false,
      update_dialog: false
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
  $small-font: 65%;
  .main {
    * {
      color: #4e4e4e;
    }
  }
  .delete-btn {
    background-color: #c0392b !important;
    color: #ffffff;
    font-size: $small-font;
  }
  .update-btn {
    background-color: #1abc9c !important;
    color: #ffffff;
    font-size: $small-font;
  }
  .cancel-btn {
    background-color: #bdc3c7 !important;
    color: #ffffff;
    font-size: $small-font;
  }
  .update-image > img {
    width: 50px;
  }
  .headline {
    background-color: #1abc9c;
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
  .less-opacity {
    opacity: 0.5;
  }
  .v-expansion-panel-content {
    font-size: 90%;
  }
</style>
