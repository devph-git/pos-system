<template>
  <v-card class="container">
    <client-only>
      <v-simple-table fixed-header height="620px">
        <template v-slot:default>
          <thead>
            <tr>
              <th class="text-left">Item</th>
              <th class="text-left">Quantity</th>
              <th class="text-left">Price</th>
              <th class="text-left">Delete</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="item in desserts" :key="item.name">
              <td class="d-flex ml-1 pa-0">
                <div class="my-auto">
                  <v-img width="35" src="https://miro.medium.com/max/906/1*SEc9d19178neoZ9F4itZnw.png" />
                </div>
                <span class="my-auto d-block pl-1"> {{ item.name }}</span>
              </td>
              <td>
                <v-btn
                  tile
                  class="ma-0 pa-0"
                  width="1"
                  x-small
                  color="'#2c2c54'">
                  <v-icon>mdi-minus</v-icon>
                </v-btn>
                <span class="pa-1">{{ item.quantity }}</span>
                <v-btn
                  tile
                  class="ma-0 pa-0"
                  width="1"
                  x-small
                  color="'#2c2c54'">
                  <v-icon>mdi-plus</v-icon>
                </v-btn>
              </td>
              <td class="pa-0 text-center">${{ item.price }}</td>
              <td>
                <v-btn
                  class="ma-0 pa-0"
                  text
                  icon
                  color="red lighten-2">
                  <v-icon>mdi-trash-can</v-icon>
                </v-btn>
              </td>
            </tr>
          </tbody>
        </template>
      </v-simple-table>
    </client-only>
    <v-divider />
    <div>
      <table class="container">
        <tr>
          <td>Tax</td>
          <td class="text-right font-weight-thin">10%</td>
        </tr>
        <tr>
          <td>Discount</td>
          <td class="text-right font-weight-thin">0%</td>
        </tr>
        <tr>
          <td>Sub Total</td>
          <td class="text-right font-weight-bold">$200.00</td>
        </tr>
        <tr>
          <td>Total</td>
          <td class="text-right font-weight-bold">$200.00</td>
        </tr>
      </table>
      <div class="row px-4">
        <v-btn
          class="col ma-1"
          color="#e5e9ed"
          dark
        >
          <v-icon color="red darken-1">mdi-close-circle</v-icon>
          <span class="order-button">Cancel</span>
        </v-btn>
        <v-btn
          class="col ma-1"
          tile
          color="#2980b9"
          dark
        >
          <v-icon>mdi-printer</v-icon>
          Print Order
        </v-btn>
      </div>
    </div>
  </v-card>
</template>

<script>
export default {
  name: 'Order',
  data () {
    return {
      desserts: [
        {
          name: 'Frozen Yogurt',
          quantity: 9,
          price: 200
        },
        {
          name: 'Ice cream sandwich',
          quantity: 7,
          price: 200
        },
        {
          name: 'Ice cream sandwich',
          quantity: 7,
          price: 200
        },
        {
          name: 'Ice cream sandwich',
          quantity: 7,
          price: 200
        },
        {
          name: 'Ice cream sandwich',
          quantity: 2,
          price: 200
        },
        {
          name: 'Ice cream sandwich',
          quantity: 2,
          price: 200
        },
        {
          name: 'Ice cream sandwich',
          quantity: 2,
          price: 200
        },
        {
          name: 'Ice cream sandwich',
          quantity: 2,
          price: 200
        },
        {
          name: 'Ice cream sandwich',
          quantity: 2,
          price: 200
        }
      ]
    }
  }
}
</script>

<style lang="scss" scoped>
.container {
  color: #2d2d2d;
  font-weight: bold;
  .quantity {
    background-color: #ebeff3;
  }
  .order-button {
    color: #ff3e3e;
  }
}
</style>
