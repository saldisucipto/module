import {
    createApp
} from 'vue'
import store from './store';
import App from './App.vue';
// used Router
import router from './router';


require('./bootstrap');

window.Vue = require('vue').default;
// Vue.config.productionTip = false;



const aplikasi = createApp(App);
aplikasi.use(store);
aplikasi.use(router);

aplikasi.mount('#app')
