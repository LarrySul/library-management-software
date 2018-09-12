// require('./bootstrap');

// Vue.http.headers.common['X-CSRF-TOKEN'] = Laravel.csrfToken; 

import Vue from 'vue'

import App from './App.vue'

import VueRouter from 'vue-router'

import Toaster from 'v-toaster'

import Router from './router.js'

import axios from 'axios'

import VeeValidate from 'vee-validate'

Vue.use(VeeValidate)

Vue.use(VueRouter)

Vue.use(Toaster, { timeout: 7000 })


new Vue({
    el: '#app',
    render: h => h(App),
    router: Router
})
