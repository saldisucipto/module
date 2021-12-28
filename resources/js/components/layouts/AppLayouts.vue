<template>
    <div>
        <!-- Sidenav -->
        <sidebar />
        <!-- Main content -->
        <div class="main-content" id="panel">
            <!-- Topnav -->
            <navigasi />
            <!-- Header -->

            <slot name="header_content">
                <div class="header bg-primary pb-6 py-4">
                    <div class="container-fluid">
                        <div class="header-body">
                            <!-- Card stats -->
                            <h1>content</h1>
                        </div>
                    </div>
                </div>
            </slot>
            <!-- Header -->
            <!-- Page content -->
            <slot name="main_content_page">
                <div class="container-fluid mt--6">
                    <div class="row">
                        <h1>Content</h1>
                    </div>
                </div>
            </slot>
        </div>
    </div>
</template>

<script>
import Sidebar from "../Sidebar.vue";
import Navigasi from "../Navigasi.vue";

export default {
    name: "AppsLayout",
    components: {
        Sidebar,
        Navigasi,
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
};
</script>
