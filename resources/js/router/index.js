// Import Library
import { createRouter, createWebHistory } from "vue-router";

// Router Variable
const routes = [
    {
        path: "/",
        component: () => import("../views/Login.vue"),
        name: "Login",
    },
    {
        path: "/about",
        component: () => import("../views/About.vue"),
        name: "About",
        meta: {
            auth: true,
        },
    },
    {
        // ini akan otomatis ke reedirect ke Halaman Home Apabila Halaman Tidak Ditemukan
        path: "/:catchAll(.*)*",
        redirect: {
            name: "Home",
        },
    },
];

// export router
const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});
router.beforeEach((to, from, next) => {
    const loggedIn = localStorage.getItem("user");

    if (to.matched.some((record) => record.meta.auth) && !loggedIn) {
        next("/login");
        return;
    }
    next();
});

export default router;
