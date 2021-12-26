<template>
    <div></div>
</template>
<script>
export default {
    name: "Dashboard",
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
