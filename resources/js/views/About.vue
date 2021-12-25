<template>
    <div>
        <h2>About Component</h2>
    </div>
</template>

<script>
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
