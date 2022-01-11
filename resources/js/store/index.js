// Import Lib Vuex
import {
    createStore
} from "vuex";

import axios from "axios";

axios.defaults.baseURL = "http://module.test/api";
export default createStore({
    state: {
        user: null,
        currentsUser: [],
    },
    mutations: {
        // Mutations berguna untuk mengubah setiap state yang berubah
        // Mutations untuk melakukan dan merubah data pada state yang ada
        setUserData(state, userData) {
            (state.user = userData),
            localStorage.setItem("user", JSON.stringify(userData));
            axios.defaults.headers.common.Authorization = `Bearer ${userData.token}`;
        },
        setCurentUser(state, value) {
            state.currentsUser = value["user"];
        },
        clearUserData() {
            localStorage.removeItem("user");
            location.reload();
        },
    },
    actions: {
        // Melakukan Perubahan pada State atau Logic
        async login({
            commit
        }, credentials) {
            // console.log(credentials);
            // commit berfungsi untuk men trigger perubahan yang dilakukan mutations
            return axios.post("/login", credentials).then(({
                data
            }) => {
                // console.log(data["user"]);
                commit("setUserData", data);
                commit("setCurentUser", data);
            })
        },
        // Logout
        logout({
            commit
        }) {
            commit("clearUserData");
        },
    },
    getters: {
        // Mengembalikan data terbaru yang ada pada state sesuai perubahan state
        isLogged: (state) => !!state.user,
        currentsUser: (state) => state.currentsUser,
    },
});
