import {
    createApp
} from 'vue'
import store from './store';
import App from './App.vue';


require('./bootstrap');

window.Vue = require('vue').default;

const aplikasi = createApp(App);
aplikasi.use(store);

aplikasi.mount('#app')
