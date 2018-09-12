import Vue from 'vue'

import VueRouter from 'vue-router'

import Home from './components/Home.vue'

import Login from "./components/Login.vue";

import Borrow from './components/Borrow.vue'

// import VueAuth from '@websanova/vue-auth'

Vue.use(VueRouter)


 const router = new VueRouter({
   routes: [
     {
       path: "/",
       component: Home
     },
     {
       path: "/studentlogin",
       component: Login
     },
     {
       path: "/borrow",
       component: Borrow
     }
   ],

   mode: "history"
 });

export default router