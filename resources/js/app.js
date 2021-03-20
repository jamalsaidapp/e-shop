require('./bootstrap');
window.Vue = require('vue').default;

addEventListener("load", function () {
    setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
    window.scrollTo(0, 1);
}


Vue.component('example-component', require('./components/ExampleComponent.vue').default);










const app = new Vue({
    el: '#app',
});
