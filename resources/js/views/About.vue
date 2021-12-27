<template>
    <div>
        <h2>About Component</h2>
    </div>
</template>

<script>
import Sidebar from "../components/Sidebar.vue";
import Navigasi from "../components/Navigasi.vue";
import FooterApp from "../components/Footer.vue";
import PanelInfoLink from "../components/widgets/PanelInfoLink.vue";
export default {
    name: "About",
    created() {
        const userInfo = localStorage.getItem("user");
        if (userInfo) {
            const userData = JSON.parse(userInfo);
            this.$store.commit("setUserData", userData);
        }
    },
};
</script>
