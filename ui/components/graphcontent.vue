<template>
  <div class="container ma-0 pa-0 d-flex">
    <v-hover>
      <template v-slot="{ hover }">
        <v-card
          :elevation="hover ? 20 : 6"
          class="mx-auto pa-3"
        >
          <div class="d-flex">
            <v-progress-circular
              :rotate="360"
              :size="100"
              :width="15"
              :value="sales.sales1"
              color="red"
            >
              {{ sales.sales1 }}%
            </v-progress-circular>
            <div class="text-center my-auto d-block">
              <h6 class="display-1 font-weight-bold">
                31.052
              </h6>
              <p class="mb-0">
                Sales
              </p>
            </div>
          </div>
        </v-card>
      </template>
    </v-hover>
    <v-hover>
      <template v-slot="{ hover }">
        <v-card
          :elevation="hover ? 20 : 6"
          class="mx-auto pa-3"
        >
          <div class="d-flex">
            <v-progress-circular
              :rotate="-90"
              :size="100"
              :width="15"
              :value="sales.sales2"
              color="primary"
            >
              {{ sales.sales2 }}%
            </v-progress-circular>
            <div class="text-center my-auto d-block">
              <h6 class="display-1 font-weight-bold">
                31.052
              </h6>
              <p class="mb-0">
                Sales
              </p>
            </div>
          </div>
        </v-card>
      </template>
    </v-hover>
    <v-hover>
      <template v-slot="{ hover }">
        <v-card
          :elevation="hover ? 20 : 6"
          class="mx-auto pa-3"
        >
          <div class="d-flex">
            <v-progress-circular
              :rotate="90"
              :size="100"
              :width="15"
              :value="sales.sales3"
              color="primary"
            >
              {{ sales.sales3 }}%
            </v-progress-circular>
            <div class="text-center my-auto d-block">
              <h6 class="display-1 font-weight-bold">
                31.052
              </h6>
              <p class="mb-0">
                Sales
              </p>
            </div>
          </div>
        </v-card>
      </template>
    </v-hover>
    <v-hover>
      <template v-slot="{ hover }">
        <v-card
          :elevation="hover ? 20 : 6"
          class="mx-auto pa-3"
        >
          <div class="d-flex">
            <v-progress-circular
              :rotate="180"
              :size="100"
              :width="15"
              :value="sales.sales4"
              color="primary"
            >
              {{ sales.sales4 }}%
            </v-progress-circular>
            <div class="text-center my-auto d-block">
              <h6 class="display-1 font-weight-bold">
                31.052
              </h6>
              <p class="mb-0">
                Sales
              </p>
            </div>
          </div>
        </v-card>
      </template>
    </v-hover>
  </div>
</template>

<script>
export default {
  data () {
    return {
      intervals: {
        interval1: {},
        interval2: {},
        interval3: {},
        interval4: {}
      },
      sales: {
        sales1: 0,
        sales2: 0,
        sales3: 0,
        sales4: 0
      }
    }
  },
  beforeDestroy () {
    clearInterval(this.intervals.interval1)
    clearInterval(this.intervals.interval2)
    clearInterval(this.intervals.interval3)
    clearInterval(this.intervals.interval4)
  },
  mounted () {
    this.intervals.interval1 = setInterval(() => {
      if (this.sales.sales1 === 50) {
        return (this.sales.sales1 = 50)
      }
      this.sales.sales1 += 5
    }, 100)
    this.intervals.interval2 = setInterval(() => {
      if (this.sales.sales2 === 20) {
        return (this.sales.sales2 = 20)
      }
      this.sales.sales2 += 5
    }, 100)
    this.intervals.interval3 = setInterval(() => {
      if (this.sales.sales3 === 95) {
        return (this.sales.sales3 = 95)
      }
      this.sales.sales3 += 5
    }, 100)
    this.intervals.interval4 = setInterval(() => {
      if (this.sales.sales4 === 85) {
        return (this.sales.sales4 = 85)
      }
      this.sales.sales4 += 5
    }, 100)
  }
}
</script>

<style scoped>
.v-progress-circular {
  margin: 1rem;
}
.text-center {
  color: #2C2C54;
}
</style>
