
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import VueNavigationBar from 'vue-navigation-bar'
window.Vue = require('vue');

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import PortalVue from 'portal-vue'
Vue.use(PortalVue)
import Vue from 'vue'
import BootstrapVue from '../../node_modules/bootstrap-vue/es/components'
import VueSidebarMenu from 'vue-sidebar-menu'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import 'vue-sidebar-menu/dist/vue-sidebar-menu.css'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faCoffee } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
Vue.use(VueSidebarMenu)
Vue.use(FontAwesomeIcon)
Vue.use(VueNavigationBar)



library.add(faCoffee)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
//Exemple
//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('navbar', require('./components/nav-bar/navbarComponent.vue').default);



//Vue user
Vue.component('artist-vue', require('./components/artists/artistComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.use(BootstrapVue)
const app = new Vue({
    el: '#app'
});
