<template>
    <app-layouts>
        <template v-slot:header_content>
            <div class="header bg-primary pb-6 py-4">
                <div class="container-fluid">
                    <div class="header-body">
                        <!-- Card stats -->
                        <h1 class="text-white py-3">Master Data</h1>
                    </div>
                </div>
            </div>
        </template>
        <template v-slot:main_content_page>
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
                                :to="{ name: 'Customer' }"
                            >
                                MANAGES
                            </router-link>
                        </template>
                    </panel-info-link>
                </div>
                <!-- Dark table -->
            </div>
        </template>
    </app-layouts>
</template>
<script>
import PanelInfoLink from "../components/widgets/PanelInfoLink.vue";
import AppLayouts from "../components/layouts/AppLayouts.vue";

export default {
    name: "MasterData",
    components: {
        PanelInfoLink,
        AppLayouts,
    },
    data() {
        return {
            sum: 0,
        };
    },
};
</script>
