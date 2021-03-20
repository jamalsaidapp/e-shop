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


//Vue Router
import VueRouter from 'vue-router'

Vue.use(VueRouter);

const routes = [
    {path: '/index', component: require('./components/Index').default},
    {path: '/products', component: require('./components/Products').default},
    {path: '/contact', component: require('./components/Contact').default}
];

const router = new VueRouter({
    routes,
    mode: 'history',
});



const app = new Vue({
    el: '#app',
    router
});
