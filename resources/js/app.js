require('./bootstrap');
window.Vue = require('vue');
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import "bootstrap/dist/css/bootstrap.min.css";
import 'element-ui/lib/theme-chalk/display.css';

Vue.use(ElementUI);



Vue.component('home-component', require('./com/Home.vue').default);

const app = new Vue({
    el: '#app'
});