<template>
  <v-hover>
    <template v-slot="{ hover }">
      <v-card
        :elevation="hover ? 20 : 6"
        class="row mx-auto pa-0"
      >
        <v-container>
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
        </v-container>
      </v-card>
    </template>
  </v-hover>
</template>

<script>
export default {
  data () {
    return {
      showLabels: true,
      lineWidth: 1,
      labelSize: 3,
      radius: 0,
      padding: 9,
      lineCap: 'square',
      gradient: ['#2C2C54'],
      value: [0, 2, 5, 9, 5, 10, 3, 5, -4, -10],
      type: 'trend'
    }
  }
}
</script>
