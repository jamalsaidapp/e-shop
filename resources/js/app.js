import {Form} from "vform/src";
//Vue Router
import VueRouter from 'vue-router'
// V-Form
import {AlertError, HasError} from 'vform';

require('./bootstrap');
window.Vue = require('vue').default;

addEventListener("load", function () {
    setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
    window.scrollTo(0, 1);
}

//Component Declaration
Vue.component('headerr', require('./components/Layouts/Header').default);
Vue.component('bodyy', require('./components/Layouts/Body').default);
Vue.component('footerr', require('./components/Layouts/Footer').default);


Vue.use(VueRouter);

window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

const routes = [
    // NavBar
    {path: '/index', component: require('./components/Index').default},
    {path: '/products', component: require('./components/Products').default},
    {path: '/boutique', component: require('./components/Boutique').default},
    {path: '/contact', component: require('./components/Contact').default},
    //Auth
    {path: '/login', component: require('./components/Auth/Login').default},
    {path: '/register', component: require('./components/Auth/Register').default},

];

const router = new VueRouter({
    routes,
    mode: 'history',
});


const app = new Vue({
    el: '#app',
    router
});
