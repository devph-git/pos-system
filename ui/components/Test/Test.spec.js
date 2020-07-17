import { shallowMount } from "@vue/test-utils";
import BestSellingProduct from '@/components/BestSellingProduct.vue'
import LoginForm from '@/components/LoginForm.vue'
import dashboardIntroImage from '@/components/dashboardIntroImage.vue'
import graphcontent from '@/components/graphcontent.vue'
import introforcontent from '@/components/introforcontent.vue'
import LoginImage from '@/components/LoginImage.vue'
import navigationDrawer from '@/components/navigationDrawer.vue'
import sparklines from '@/components/sparklines.vue'
import index from '@/pages/index.vue'
import dashboard from '@/pages/dashboard.vue'

///////////////////////////////////COMPONENT//////////////////////////////////////////////

// BestSellingProduct Component
describe('Testing BestSellingProduct', () => {
  test('Testing BestSellingProduct', () => {
    const wrapper = shallowMount(BestSellingProduct)
    expect(wrapper).not.toBeNull()
  })
})

// LoginForm Component
describe('Testing LoginForm', () => {
  test('Testing LoginForm', () => {
    const wrapper = shallowMount(LoginForm)
    expect(wrapper).not.toBeNull()
  })
})

// LoginImage Component
describe('Testing LoginImage', () => {
  test('Testing LoginImage', () => {
    const wrapper = shallowMount(LoginImage)
    expect(wrapper).not.toBeNull()
  })
})

// dashboardIntroImage Component
describe('Testing dashboardIntroImage', () => {
  test('Testing dashboardIntroImage', () => {
    const wrapper = shallowMount(dashboardIntroImage)
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
    const wrapper = shallowMount(navigationDrawer)
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