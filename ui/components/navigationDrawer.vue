<template>
  <v-navigation-drawer :color="'drawerColor'" app>
    <!--NAV DRAWER -->
    <v-list class="navList mt-5">
      <v-list-item>
        <v-list-item-icon>
          <v-icon v-text="icon"></v-icon>
        </v-list-item-icon>
        <v-list-item-content>
          <v-list-item-title class="title">
            Dashboard
          </v-list-item-title>
        </v-list-item-content>
      </v-list-item>
      <v-list-group
        v-for="item in nav.category"
        :key="item.title"
        v-model="item.active"
        :prepend-icon="item.action"
        no-action
      >
        <template v-slot:activator>
          <v-list-item-content>
            <v-list-item-title v-text="item.title"></v-list-item-title>
          </v-list-item-content>
        </template>

        <v-list-item
          class="ml-5"
          v-for="subItem in item.items"
          :key="subItem.title"
          @click.prevent=""
        >
          <v-list-item-content>
            <v-list-item-title v-text="subItem.title"></v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list-group>
      <v-list-item @click.prevent="">
        <v-list-item-icon>
          <v-icon v-text="nav.product.icon"></v-icon>
        </v-list-item-icon>
        <v-list-item-content>
          <v-list-item-title v-text="nav.product.title"></v-list-item-title>
        </v-list-item-content>
      </v-list-item>
      <v-list-item @click.prevent="">
        <v-list-item-icon>
          <v-icon color="'drawerColor'" v-text="nav.logout.icon"></v-icon>
        </v-list-item-icon>
        <v-list-item-content>
          <v-list-item-title v-text="nav.logout.title"></v-list-item-title>
        </v-list-item-content>
      </v-list-item>
    </v-list>
  </v-navigation-drawer>
</template>

<script>
export default {
  name: 'navigationDrawer',
  data () {
    return {
      icon: 'mdi-account',
      nav: {
        category: [
          {
            action: 'mdi-account',
            title: 'Categories',
            active: true,
            items: [
              { title: 'List Item' },
              { title: 'List Item' }
            ]
          }
        ],
        product: {
          title: 'Product',
          icon: 'mdi-account'
        },
        logout: {
          title: 'Logout',
          icon: 'mdi-account'
        }
      }
    }
  }
}
</script>

<style lang="scss" scoped>
  .drawerColor {
    background-color: #2C2C54;
    *, ::before, ::after {
      color: rgb(255, 255, 255);
    }
  }
</style>
