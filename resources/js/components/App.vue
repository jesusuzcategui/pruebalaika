<template>
    <div>
        <Laika-navbar v-if="mobileCheck() === false" />
        <Laika-navbar-mobile v-if="mobileCheck() === true" />
        <router-view></router-view>
    </div>
</template>
<script>
import LaikaNavbar from './navbar.vue';
import LaikaNavbarMobile from './navbar-mobile.vue';
export default {
    components: {
        'Laika-navbar': LaikaNavbar,
        'Laika-navbar-mobile': LaikaNavbarMobile
    },
    mounted(){
        console.log(this.mobileCheck());
    }
}
</script>