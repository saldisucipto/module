<template>
    <div>
        <router-link v-if="isLogged" :to="{ name: 'About' }">About</router-link>
        <router-link :to="{ name: 'Login' }">Login</router-link>
        <button type="button" @click="logout()" v-if="isLogged">Logout</button>

        <router-view></router-view>
    </div>
</template>

<script>
import { mapGetters } from "vuex";
export default {
    name: "App",
    created() {
        const userInfo = localStorage.getItem("user");
        if (userInfo) {
            const userData = JSON.parse(userInfo);
            this.$store.commit("setUserData", userData);
        }
        axios.interceptors.response.use(
            (response) => response,
            (error) => {
                if (error.response.status === 401) {
                    this.$store.dispatch("logout");
                }
                return Promise.reject(error);
            }
        );
    },
    computed: {
        ...mapGetters(["isLogged"]),
    },
    methods: {
        logout() {
            this.$store.dispatch("logout");
        },
    },
};
</script>
