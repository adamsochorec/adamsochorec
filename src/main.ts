import { createApp } from 'vue'
import './assets/main.css'
import App from './App.vue'
import router from './router'

// PrimeVue
import PrimeVue from 'primevue/config'
import PrimeVueTheme from '@primeuix/themes/aura'
import { definePreset } from '@primeuix/themes'
import 'primeicons/primeicons.css'
import Tooltip from 'primevue/tooltip'

const app = createApp(App)
app.directive('tooltip', Tooltip)

const slavicmedia = definePreset(PrimeVueTheme, {
  semantic: {
    primary: {
      50: '{gray.50}',
      100: '{gray.100}',
      200: '{gray.200}',
      300: '{gray.300}',
      400: '{gray.400}',
      500: '{gray.500}',
      600: '{gray.600}',
      700: '{gray.700}',
      800: '{gray.800}',
      900: '{gray.900}',
      950: '{gray.950}',
    },
  },
})

app.use(PrimeVue, {
  theme: {
    preset: slavicmedia,
  },
  options: {
    darkModeSelector: false || 'none',
  },
})

app.use(router)
app.mount('#app')
