// Import Lib Vuex
import { createStore } from "vuex";

import axios from "axios";

axios.defaults.baseURL = "http://module.test/api";
export default createStore({
    state: {
        user: null,
        currentsUser: [],
    },
    mutations: {
        // Mutations berguna untuk mengubah setiap state yang berubah
        setUserData(state, userData) {
            (state.user = userData),
                localStorage.setItem("user", JSON.stringify(userData));
            axios.defaults.headers.common.Authorization = `Bearer ${userData.token}`;
        },
        clearUserData() {
            localStorage.removeItem("user");
            location.reload();
        },
    },
    actions: {
        // Melakukan Perubahan pada State
        async login({ commit }, credentials) {
            // console.log(credentials);
            return axios.post("/login", credentials).then(({ data }) => {
                commit("setUserData", data);
            });
        },

        logout({ commit }) {
            commit("clearUserData");
        },
    },
    getters: {
        isLogged: (state) => !!state.user,
    },
});
