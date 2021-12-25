// Import Library
import {
    createRouter,
    createWebHistory
} from "vue-router";
// import Home Vue Components
import Home from "../views/Home.vue"

// Router Variable
const routes = [{
    path: "/", // path adalah url yang akan diakses '/' ini adalah root url
    component: Home, // Componnent adalah Component yang akan diakses pertama kali
    name: "Home",
}]

// export router
const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
})

export default router;
