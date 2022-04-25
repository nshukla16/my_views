import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './pages/Home.vue';
import About from './pages/About.vue';
import login from './pages/login.vue';
import registration from './pages/registration.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/login',
            name: 'login',
            component: login
        },
        {
            path: '/registration',
            name: 'registration',
            component: registration
        },
    ]
});

export default router;