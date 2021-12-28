<template>
    <nav
        class="
            sidenav
            navbar navbar-vertical
            fixed-left
            navbar-expand-xs navbar-light
            bg-white
        "
        id="sidenav-main"
    >
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img
                        src="/assets/img/brand/blue.png"
                        class="navbar-brand-img"
                        alt="Logo Atresna"
                    />
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div
                    class="collapse navbar-collapse"
                    id="sidenav-collapse-main"
                >
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <router-link class="nav-link" to="/dashboard">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text"
                                    >Dashboard</span
                                ></router-link
                            >
                        </li>

                        <li class="nav-item">
                            <router-link class="nav-link" to="/master">
                                <i class="ni ni-planet text-orange"></i>
                                <span class="nav-link-text"
                                    >Master Data</span
                                ></router-link
                            >
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3" />
                </div>
            </div>
        </div>
    </nav>
</template>
<script>
export default {
    name: "Sidebar",
};
</script>
