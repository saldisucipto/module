<template>
    <div class="bg-default">
        <!-- Main content -->
        <div class="main-content pb-7">
            <!-- Header -->
            <div class="header bg-gradient-primary py-8 py-lg-5 pt-lg-6">
                <div class="container">
                    <div class="header-body text-center mb-7">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                                <h1 class="text-white">Selamat Datang!</h1>
                                <p class="text-lead text-white">
                                    Ini Adalah Module ERP
                                    <b>PT. MATA AIR MUTIARA</b>,
                                    <br />
                                    <a
                                        href="mailto:atresnacreative@gmail.com"
                                        class="text-white"
                                        ><b>Atresna Creative</b></a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="separator separator-bottom separator-skew zindex-100"
                >
                    <svg
                        x="0"
                        y="0"
                        viewBox="0 0 2560 100"
                        preserveAspectRatio="none"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <polygon
                            class="fill-default"
                            points="2560 0 2560 100 0 100"
                        ></polygon>
                    </svg>
                </div>
            </div>
            <!-- Page content -->
            <div class="container mt--8 pb-5">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-7">
                        <div class="card bg-secondary border-0 mb-0">
                            <div class="card-body px-lg-5 py-lg-5">
                                <div
                                    class="
                                        text-center text-muted
                                        mb-4
                                        text-blue
                                    "
                                >
                                    <p
                                        class="
                                            text-lg text-uppercase text-center
                                        "
                                    >
                                        <b>
                                            <i class="fas fa-user fa-2x"></i>
                                            <br />
                                            Login User</b
                                        >
                                    </p>
                                    <small
                                        >Login Menggunakan User/Password Yang
                                        Anda Miliki</small
                                    >
                                </div>
                                <!-- Login Form -->
                                <login-form />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import LoginForm from "../components/LoginForm.vue";
export default {
    name: "Login",
    components: {
        LoginForm,
    },
};
</script>
