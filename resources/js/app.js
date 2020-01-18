import Vue from 'vue'

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import App from './views/App'
import Home from './views/Home'
import Blog from './views/Blog'
import SinglePost from './views/SinglePost'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/blog',
            name: 'blog',
            component: Blog
        },
        {
            path: '/blog/:post', 
            name: 'post', 
            component: SinglePost
        }

    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});