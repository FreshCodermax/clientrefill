import './bootstrap';
import router from './routes';
import navbar from './components/Navbar';
//Vue.component('nav', require('./components/Navbar.vue'));

new Vue({
    el: '#app',
    router,
    components: {
        navbar
    }

});