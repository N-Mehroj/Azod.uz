import './assets/tailwind.css'
import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

const app = createApp(App)

// app.use(vue3GoogleLogin, {
//     clientId: '.apps.googleusercontent.com'
//   })
import vue3GoogleLogin from 'vue3-google-login'
app.use(vue3GoogleLogin, {
    clientId: '452933626521-2qo5obf75ugh47drptutnu8obmq7pcan.apps.googleusercontent.com'
  })


app.use(createPinia())
app.use(router)

app.mount('#app')
