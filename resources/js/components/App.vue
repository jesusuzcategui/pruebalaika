<template>
    <div>
        <Laika-navbar />
        <router-view></router-view>
    </div>
</template>
<script>
import LaikaNavbar from './navbar.vue';
export default {
    components: {
        'Laika-navbar': LaikaNavbar
    }
}
</script>