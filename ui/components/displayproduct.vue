<template>
  <v-card>
    <v-tabs
      background-color="white"
      color="deep-purple accent-4"
      right
      class="mt-1"
    >
      <v-container class="tab d-flex">
        <v-tab class="container">
          Products
        </v-tab>
        <v-tab class="container">
          Products
        </v-tab>
        <v-tab class="container">
          Products
        </v-tab>
        <v-tab class="container">
          Products
        </v-tab>
        <v-tab class="container">
          Products
        </v-tab>
      </v-container>
      <v-tab-item
        v-for="n in 5"
        :key="n"
      >
        <v-container class="container">
          <v-row>
            <v-col
              v-for="item in items"
              :key="item.id"
              cols="3"
              aria-rowcount="3"
            >
              <v-container class="item-card ma-0 pa-0" style="border: 1px solid #707070;">
                <v-img
                  :src="`${item.image}`"
                  height="150"
                  width="300"
                />
                <div class="d-flex my-1">
                  <h5 class="font-weight-medium ml-1">
                    {{ item.name }}
                  </h5>
                  <v-spacer />
                  <h5 class="font-weight-medium mr-1">
                    ${{ item.price }}
                  </h5>
                </div>
                <v-btn
                  tile
                  block
                  class="pa-0 font-weight-light"
                  color="#2c2c54"
                  height="30"
                  dark
                >
                  <v-icon class="ma-0 pa-0" small dark right>
                    mdi-cart-arrow-right
                  </v-icon>
                  <span class="font-small">Add to cart</span>
                </v-btn>
              </v-container>
            </v-col>
          </v-row>
        </v-container>
      </v-tab-item>
    </v-tabs>
    <div id="pagination" class="text-center">
      <v-pagination
        v-model="page"
        :length="3"
        prev-icon="mdi-menu-left"
        next-icon="mdi-menu-right"
      />
    </div>
  </v-card>
</template>

<script>
export default {
  name: 'DisplayProduct',
  data () {
    return {
      page: 1,
      items: [
        {
          id: 1,
          new: false,
          image: 'https://miro.medium.com/max/906/1*SEc9d19178neoZ9F4itZnw.png',
          name: 'Milktea',
          price: 200.00
        },
        {
          id: 2,
          new: false,
          image: 'https://miro.medium.com/max/906/1*SEc9d19178neoZ9F4itZnw.png',
          name: 'Milktea',
          price: 200.00
        },
        {
          id: 3,
          new: false,
          image: 'https://miro.medium.com/max/906/1*SEc9d19178neoZ9F4itZnw.png',
          name: 'Milktea',
          price: 200.00
        },
        {
          id: 4,
          new: false,
          image: 'https://miro.medium.com/max/906/1*SEc9d19178neoZ9F4itZnw.png',
          name: 'Milktea',
          price: 200.00
        },
        {
          id: 5,
          new: false,
          image: 'https://miro.medium.com/max/906/1*SEc9d19178neoZ9F4itZnw.png',
          name: 'Milktea',
          price: 200.00
        },
        {
          id: 6,
          new: false,
          image: 'https://miro.medium.com/max/906/1*SEc9d19178neoZ9F4itZnw.png',
          name: 'Milktea',
          price: 200.00
        },
        {
          id: 7,
          new: false,
          image: 'https://miro.medium.com/max/906/1*SEc9d19178neoZ9F4itZnw.png',
          name: 'Milktea',
          price: 200.00
        },
        {
          id: 8,
          new: false,
          image: 'https://miro.medium.com/max/906/1*SEc9d19178neoZ9F4itZnw.png',
          name: 'Milktea',
          price: 200.00
        },
        {
          id: 9,
          new: false,
          image: 'https://miro.medium.com/max/906/1*SEc9d19178neoZ9F4itZnw.png',
          name: 'Milktea',
          price: 200.00
        },
        {
          id: 10,
          new: false,
          image: 'https://miro.medium.com/max/906/1*SEc9d19178neoZ9F4itZnw.png',
          name: 'Milktea',
          price: 200.00
        },
        {
          id: 11,
          new: false,
          image: 'https://miro.medium.com/max/906/1*SEc9d19178neoZ9F4itZnw.png',
          name: 'Milktea',
          price: 200.00
        },
        {
          id: 12,
          new: false,
          image: 'https://miro.medium.com/max/906/1*SEc9d19178neoZ9F4itZnw.png',
          name: 'Milktea',
          price: 200.00
        }
      ]
    }
  }
}
</script>

<style lang="scss">
.v-tabs-slider {
  height: 8px;
  box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.16);
  background-color: #2c2c54;
}
.tab {
  color: #2c2c54;
}
.font-small {
  font-size: 10px;
}
</style>
