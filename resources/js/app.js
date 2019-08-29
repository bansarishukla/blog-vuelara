
import Vue from 'vue';
import categoriesList from './components/CategoriesList';

// import router from 'router.js';
require('./bootstrap');


window.Vue = require('vue');
window.axios = axios;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('post-list', require('./components/Post.vue').default);
Vue.component('edit-post', require('./components/Edit.vue').default);
Vue.component('categories-list', categoriesList);


const app = new Vue({
    // router,
    el: '#app',
});


