require('./bootstrap');

window.Vue = require('vue').default;

import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import axios from 'axios';
import { routes } from './router';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import '@fortawesome/fontawesome-free/js/all.js';
import CountryFlag from 'vue-country-flag';
import VueCountryCode from "vue-country-code-select";
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

import { mobileCheck } from './helper';

import App from './components/App.vue';
import Vue from 'vue';
Vue.component('country-flag', CountryFlag);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.mixin({
    methods: {
        mobileCheck: mobileCheck
    }
});

Vue.use(BootstrapVue);
Vue.use(IconsPlugin);
Vue.use(VueCountryCode);
Vue.use(VueRouter);
Vue.use(VueAxios, axios);


const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
});
