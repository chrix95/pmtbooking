/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('main-component', require('./components/MainComponent.vue').default);
Vue.component('search-component', require('./components/SearchComponent.vue').default);
Vue.component('seat-top-component', require('./components/SeatTopComponent.vue').default);
Vue.component('loader', require('./components/Loader.vue').default);
Vue.component('sidebar', require('./components/Sidebar.vue').default);
Vue.component('select-vehicle-component', require('./components/SelectVehicleComponent.vue').default);
Vue.component('select-seat-component', require('./components/SelectSeatComponent.vue').default);
Vue.component('customer-component', require('./components/CustomerComponent.vue').default);
Vue.component('customer-form', require('./components/CustomerForm.vue').default);
Vue.component('payment', require('./components/Payment.vue').default);
Vue.component('booked', require('./components/Booked.vue').default);
Vue.component('booking-status', require('./components/BookingStatus.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
