<template>
  <v-hover>
    <template v-slot="{ hover }">
      <v-card
        :elevation="hover ? 20 : 6"
        class="row mx-auto pa-0 pb-5"
      >
        <v-container class="mb-5">
          <client-only>
            <v-sparkline
              :value="value"
              :gradient="gradient"
              :smooth="radius || false"
              :padding="padding"
              :line-width="lineWidth"
              :stroke-linecap="lineCap"
              :type="type"
              auto-draw
              :show-labels="showLabels"
              :label-size="labelSize"
            />
          </client-only>
          <v-divider />
        </v-container>
      </v-card>
    </template>
  </v-hover>
</template>

<script>
export default {
  name: 'sparklines',
  data () {
    return {
      showLabels: true,
      lineWidth: 1,
      labelSize: 4,
      radius: 0,
      padding: 9,
      lineCap: 'square',
      gradient: ['#2C2C54'],
      value: [
        Math.floor((Math.random() * 10) + 1),
        Math.floor((Math.random() * 10) + 1),
        Math.floor((Math.random() * 10) + 1),
        Math.floor((Math.random() * 10) + 1),
        Math.floor((Math.random() * 10) + 1),
        Math.floor((Math.random() * 10) + 1),
        Math.floor((Math.random() * 10) + 1),
        Math.floor((Math.random() * 10) + 1),
        Math.floor((Math.random() * 10) + 1),
        Math.floor((Math.random() * 10) + 1)
      ],
      type: 'trend'
    }
  }
}
</script>
