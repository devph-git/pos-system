<template>
  <v-hover>
    <template v-slot="{ hover }">
      <v-card
        :elevation="hover ? 20 : 6"
        class="pa-0"
      >
        <template>
          <v-container>
            <h1>BEST SELLING PRODUCT</h1>
          </v-container>
          <v-divider />
          <v-simple-table fixed-header height="auto">
            <template v-slot:default>
              <thead>
                <tr>
                  <th class="text-left text-center">
                    Product
                  </th>
                  <th class="text-left">
                    Name
                  </th>
                  <th class="text-left">
                    Size
                  </th>
                  <th class="text-left">
                    Prize
                  </th>
                  <th class="text-left">
                    Quantity
                  </th>
                  <th class="text-left">
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="item in desserts" :key="item.image">
                  <td class="pa-0 ma-0" width="250">
                    <img class="mx-0 mx-auto d-block" width="200" src="https://st2.depositphotos.com/1177973/10937/i/950/depositphotos_109371104-stock-photo-porcelain-cup-of-tea-with.jpg">
                  </td>
                  <td>{{ item.name }}</td>
                  <td>{{ item.size }}</td>
                  <td>{{ item.prize }}</td>
                  <td>{{ item.quantity }}</td>
                </tr>
              </tbody>
            </template>
          </v-simple-table>
        </template>
      </v-card>
    </template>
  </v-hover>
</template>

<script>
export default {
  name: 'bestsellingproduct',
  data () {
    return {
      desserts: [
        {
          image: 'Frozen Yogurt',
          name: 'Milktea',
          size: 'Large',
          prize: '200.00',
          quantity: 3
        },
        {
          image: 'Ice cream sandwich',
          name: 'Milktea',
          size: 'Large',
          prize: '200.00',
          quantity: 3
        }
      ]
    }
  }
}
</script>
