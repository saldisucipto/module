<template>
    <div v-if="form_diprose" class="alert" :class="form_styling" role="alert">
        <strong> <i class="fas fa-spinner"></i> </strong> {{ form_show_alert }}
    </div>
    <div>
        <vee-form role="form" :validation-schema="loginSchema" @submit="login">
            <div class="form-group mb-3">
                <div
                    class="input-group input-group-merge input-group-alternative"
                >
                    <div class="input-group-prepend">
                        <span class="input-group-text"
                            ><i class="ni ni-email-83"></i
                        ></span>
                    </div>
                    <vee-field
                        name="email"
                        class="form-control"
                        placeholder="Email"
                        type="email"
                    />
                </div>
                <ErrorMessage class="text-danger text-xs" name="email" />
            </div>
            <div class="form-group">
                <div
                    class="input-group input-group-merge input-group-alternative"
                >
                    <div class="input-group-prepend">
                        <span class="input-group-text"
                            ><i class="ni ni-lock-circle-open"></i
                        ></span>
                    </div>
                    <vee-field
                        name="password"
                        class="form-control"
                        placeholder="Password"
                        type="password"
                    />
                </div>
                <ErrorMessage class="text-danger text-xs" name="password" />
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">
                    Sign in
                </button>
            </div>
        </vee-form>
    </div>
</template>
<script>
import { mapState } from "vuex";
export default {
    name: "LoginForm",
    data() {
        return {
            form_diprose: false,
            form_show_alert: "",
            form_styling: "alert-primary",
            loginSchema: {
                email: "required|min:3|max:100|email",
                password: "required|min:6",
            },
        };
    },
    methods: {
        async login(values) {
            // debug value
            this.form_diprose = true;
            this.form_show_alert = "Tunggu Sebentar, Login Sedang Di Proses";
            this.form_styling = "alert-primary";
            // console.log(values);
            // used STORE State Managemnt
            try {
                await this.$store.dispatch("login", values);
                return this.$router.push({ name: "Dashboard" });
            } catch (error) {
                this.form_diprose = true;
                this.form_show_alert = `Password Dan Email Anda Tidak Sesuai`;
                // console.log(error);
                this.form_styling = "alert-danger";
                return;
            }
        },
    },
    computed: {
        ...mapState({
            messageResponse: "responseMessage",
        }),
    },
};
</script>
