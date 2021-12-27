<template>
    <div>
        <!-- Sidenav -->
        <sidebar />
        <!-- Main content -->
        <div class="main-content" id="panel">
            <!-- Topnav -->
            <navigasi />
            <!-- Header -->
            <!-- Header -->
            <div class="header bg-primary pb-6 py-4">
                <div class="container-fluid">
                    <div class="header-body">
                        <!-- Card stats -->
                    </div>
                </div>
            </div>
            <!-- Page content -->
            <!-- Page content -->
            <div class="container-fluid mt--6">
                <div class="row">
                    <panel-info-link>
                        <template v-slot:title> Customers </template>
                        <template v-slot:sum> {{ sum }} </template>
                        <template v-slot:presentase> </template>
                        <template v-slot:monthStatus> </template>
                        <template v-slot:icons>
                            <i class="fas fa-users"></i>
                        </template>
                        <template v-slot:links>
                            <router-link
                                class="text-bold font-weight-bold"
                                to="/master/customers"
                            >
                                MANAGES
                            </router-link>
                        </template>
                    </panel-info-link>
                </div>
                <!-- Dark table -->
            </div>
        </div>
    </div>
</template>
<script>
import Sidebar from "../components/Sidebar.vue";
import Navigasi from "../components/Navigasi.vue";
import FooterApp from "../components/Footer.vue";
import PanelInfoLink from "../components/widgets/PanelInfoLink.vue";
export default {
    name: "MasterData",
    components: {
        Sidebar,
        Navigasi,
        FooterApp,
        PanelInfoLink,
    },
    created() {
        // Created LifeCycle Hook Pertama Yang Diakses ketika components di mount
        // get user login info
        const userInfoData = localStorage.getItem("user");
        if (userInfoData) {
            const userData = JSON.parse(userInfoData);
            // set infouser ke state dengan commit
            this.$store.commit("setUserData", userData);
        }
    },

    data() {
        return {
            userData: JSON.parse(localStorage.getItem("user")),
            sum: 0,
        };
    },
};
</script>
