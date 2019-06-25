import VueRouter from 'vue-router';
import auth from './utils/auth';


const routes =[
    {
        path: '/register',
        component: require('./views/Register.vue').default,
        name:'register'
    },
];


export default new VueRouter({
    mode: 'history',
    base: '/',
    routes,
    hashbang: false,
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 }//scrolls to top on route change
    }
});