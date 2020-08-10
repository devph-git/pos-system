<template>
  <v-navigation-drawer :color="'drawerColor'" app permanent>
    <!--NAV DRAWER -->
    <v-list class="navList mt-5">
      <v-list-item :class="currentPage===''?'clicked':''" @click.prevent="">
        <v-list-item-icon>
          <v-icon v-text="icon" />
        </v-list-item-icon>
        <v-list-item-content>
          <nuxt-link to="/">
            <v-list-item-title class="title">
              Dashboard
            </v-list-item-title>
          </nuxt-link>
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
            <v-list-item-title v-text="item.title" />
          </v-list-item-content>
        </template>

        <v-list-item
          class="ml-3"
          :class="currentPage==='add-new-category'?'clicked':''"
          @click.prevent=""
        >
          <nuxt-link to="/add-new-category">
            <v-list-item-content>
              <v-list-item-title v-text="item.add_new_category.title" />
            </v-list-item-content>
          </nuxt-link>
        </v-list-item>
        <v-list-item
          class="ml-3"
          :class="currentPage==='view-category-list'?'clicked':''"
          @click.prevent=""
        >
          <nuxt-link to="/view-category-list">
            <v-list-item-content>
              <v-list-item-title v-text="item.view_category_list.title" />
            </v-list-item-content>
          </nuxt-link>
        </v-list-item>
      </v-list-group>
      <v-list-item :class="currentPage==='product'?'clicked':''" @click.prevent="">
        <v-list-item-icon>
          <v-icon v-text="nav.product.icon" />
        </v-list-item-icon>
        <v-list-item-content>
          <nuxt-link to="/product">
            <v-list-item-title v-text="nav.product.title" />
          </nuxt-link>
        </v-list-item-content>
      </v-list-item>
      <v-list-item @click.prevent="$auth.logout()">
        <v-list-item-icon>
          <v-icon color="'drawerColor'" v-text="nav.logout.icon" />
        </v-list-item-icon>
        <v-list-item-content>
          <v-list-item-title v-text="nav.logout.title" />
        </v-list-item-content>
      </v-list-item>
    </v-list>
  </v-navigation-drawer>
</template>

<script>
export default {
  name: 'Navigationdrawer',
  props: ['currentPage'],
  data () {
    return {
      icon: 'mdi-account',
      nav: {
        category: [
          {
            action: 'mdi-account',
            title: 'Categories',
            active: true,
            add_new_category: {
              title: 'Add New Category'
            },
            view_category_list: {
              title: 'View Category List'
            }
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
    a:link {
      text-decoration: none ;
    }
  }
  .clicked {
    background-color: #191933;
    color: '#ffffff'
  }
</style>
