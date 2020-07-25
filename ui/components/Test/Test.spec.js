import { shallowMount } from "@vue/test-utils";
import bestsellingproduct from '@/components/bestsellingproduct.vue'
import loginform from '@/components/loginform.vue'
import dashboardintroimage from '@/components/dashboardintroimage.vue'
import graphcontent from '@/components/graphcontent.vue'
import introforcontent from '@/components/introforcontent.vue'
import loginimage from '@/components/loginimage.vue'
import navigationdrawer from '@/components/navigationdrawer.vue'
import sparklines from '@/components/sparklines.vue'
import index from '@/pages/index.vue'
import dashboard from '@/pages/dashboard.vue'

///////////////////////////////////COMPONENT//////////////////////////////////////////////

// BestSellingProduct Component
describe('Testing BestSellingProduct', () => {
  test('Testing BestSellingProduct', () => {
    const wrapper = shallowMount(bestsellingproduct)
    expect(wrapper).not.toBeNull()
  })
})

// LoginForm Component
describe('Testing LoginForm', () => {
  test('Testing LoginForm', () => {
    const wrapper = shallowMount(loginform)
    expect(wrapper).not.toBeNull()
  })
})

// LoginImage Component
describe('Testing LoginImage', () => {
  test('Testing LoginImage', () => {
    const wrapper = shallowMount(loginimage)
    expect(wrapper).not.toBeNull()
  })
})

// dashboardIntroImage Component
describe('Testing dashboardIntroImage', () => {
  test('Testing dashboardIntroImage', () => {
    const wrapper = shallowMount(dashboardintroimage)
    expect(wrapper).not.toBeNull()
  })
})

// graphcontent Component
describe('Testing graphcontent', () => {
  test('Testing graphcontent', () => {
    const wrapper = shallowMount(graphcontent)
    expect(wrapper).not.toBeNull()
  })
})

// introforcontent Component
describe('Testing introforcontent', () => {
  test('Testing introforcontent', () => {
    const wrapper = shallowMount(introforcontent)
    expect(wrapper).not.toBeNull()
  })
})

// navigationDrawer Component
describe('Testing navigationDrawer', () => {
  test('Testing navigationDrawer', () => {
    const wrapper = shallowMount(navigationdrawer)
    expect(wrapper).not.toBeNull()
  })
})

// sparklines Component
describe('Testing sparklines', () => {
  test('Testing sparklines', () => {
    const wrapper = shallowMount(sparklines)
    expect(wrapper).not.toBeNull()
  })
})

//////////////////////////////////////////PAGES////////////////////////////////////////////

// index Component
describe('Testing index', () => {
  test('Testing index', () => {
    const wrapper = shallowMount(index)
    expect(wrapper).not.toBeNull()
  })
})

// dashboard Component
describe('Testing dashboard', () => {
  test('Testing dashboard', () => {
    const wrapper = shallowMount(dashboard)
    expect(wrapper).not.toBeNull()
  })
})