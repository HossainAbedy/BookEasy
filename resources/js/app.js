/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.Fire = new Vue(); //events

 //sweetalert
import swal from 'sweetalert2'
window.swal = swal;

const toast = swal.mixin({  //toaster
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});
window.toast = toast;//toaster

//sweetalert

//progressbar
import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '5px',
})
//progressbar
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/UserManagement.vue').default);
// Vue.component('example-component', require('./components/BookManagement.vue').default);

//vue-router
import VueRouter from 'vue-router'
Vue.use(VueRouter)

let routes = [
    { path: '/user', component: require('./components/UserManagement.vue').default},
    { path: '/book', component: require('./components/BookManagement.vue').default},
    { path: '/dashboard', component: require('./components/DashBoard.vue').default},
    { path: '/booklist', component: require('./components/BookList.vue').default},
  ]

const router = new VueRouter({
    // mode: 'history',
    routes // short for `routes: routes`
})
//vue-router

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',router
});
