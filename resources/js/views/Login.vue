<template>
    <div>
        <h1>Login</h1>
        <form @submit.prevent="login">
            <input type="email" name="email" id="" v-model="email" />
            <input type="password" name="password" id="" v-model="password" />
            <button type="submit">Login</button>
        </form>
    </div>
</template>
<script>
export default {
    name: "Login",
    data() {
        return {
            email: "",
            password: "",
        };
    },
    methods: {
        login() {
            this.$store
                .dispatch("login", {
                    email: this.email,
                    password: this.password,
                })
                .then(() => {
                    this.$router.push({ name: "About" });
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
};
</script>
