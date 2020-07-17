import { mount } from '@vue/test-utils'
import LoginForm from '@/components/LoginForm.vue'
import Vue from 'vue'
import Vuetify from 'vuetify'

Vue.use(Vuetify)

describe('LoginForm.vue', () => {
  test('should pass', () => {
    const wrapper = mount(LoginForm)
    expect(wrapper.vm).toBeTruthy()
  })
  
})
