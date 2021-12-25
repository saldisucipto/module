import {
    createApp
} from 'vue'

import HelloWorld from './components/HelloWorld.vue'

require('./bootstrap');

window.Vue = require('vue').default;

const aplikasi = createApp(HelloWorld);

aplikasi.mount('#app')
