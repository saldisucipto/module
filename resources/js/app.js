import { createApp } from "vue";
import store from "./store";
import App from "./App.vue";
// used Router
import router from "./router";
// VeeVlidation
import VeeValidatePlugin from "./includes/validations";
// Font Awesome
import "@fortawesome/fontawesome-free/css/all.css";
import "@fortawesome/fontawesome-free/js/all.js";

require("./bootstrap");

window.Vue = require("vue").default;
// Vue.config.productionTip = false;

const aplikasi = createApp(App);
aplikasi.use(store);
aplikasi.use(router);
aplikasi.use(VeeValidatePlugin);

aplikasi.mount("#app");
