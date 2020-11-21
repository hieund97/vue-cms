// App.js

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import SidebarComponent from './components/SidebarComponent.vue';
Vue.component('side-bar', SidebarComponent);

import DashboardComponent from './components/DashboardComponent.vue';
Vue.component('dash-board', DashboardComponent);

import ToolbarComponent from './components/ToolbarComponent.vue';
Vue.component('tool-bar', ToolbarComponent);

const router = new VueRouter({ mode: 'history'});
const app = new Vue(Vue.util.extend({ router })).$mount('#app');