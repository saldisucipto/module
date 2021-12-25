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
    },
    {
        path: "/login",
        component: () => import('../views/Login.vue'),
        name: 'Login',
    },
    {
        path: '/about',
        component: () => import('../views/About.vue'),
        name: 'About',
    },
    {
        // ini akan otomatis ke reedirect ke Halaman Home Apabila Halaman Tidak Ditemukan
        path: "/:catchAll(.*)*",
        redirect: {
            name: "Home"
        },
    },
]

// export router
const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
})
router.beforeEach((to, from, next) => {
    const loggedIn = localStorage.getItem('user')

    if (to.matched.some(record => record.meta.auth) && !loggedIn) {
        next('/login')
        return
    }
    next()
})

export default router;
