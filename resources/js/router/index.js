// Import Library
import {
    createRouter,
    createWebHistory
} from "vue-router";

const UserProfile = {
    template: "<div>Profile</div>"
};

// Router Variable
const routes = [{
        path: "/",
        component: () => import("../views/Login.vue"),
        name: "Login",
    },
    {
        path: "/dashboard",
        component: () => import("../views/Dashboard.vue"),
        name: "Dashboard",
        meta: {
            auth: true,
        },
    },
    {
        path: "/master",
        component: () => import("../views/MasterData.vue"),
        name: "Master",
        meta: {
            auth: true,
        },
    },
    {
        path: "/master/customer",
        component: () => import("../views/masters/Customers.vue"),
        // component: UserProfile,
        name: "Customer",
        meta: {
            auth: true,
        },
    },
    {
        path: "/master/supplier",
        component: () => import("../views/masters/Supplier.vue"),
        // component: UserProfile,
        name: "Supplier",
        meta: {
            auth: true,
        },
    },

    {
        // ini akan otomatis ke reedirect ke Halaman Home Apabila Halaman Tidak Ditemukan
        path: "/:catchAll(.*)*",
        redirect: {
            name: "Dashboard",
        },
    },
];

// export router
const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
    // Identify Active Link On Pages
    linkActiveClass: "active",
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
