import VueRouter from 'vue-router';

let routes = [
    {
        path: '/dashboard/',
        component: require('./views/Home')
    },
    {
        path: '/dashboard/freelancer',
        component: require('./views/freelancerpage')
    },
    {
        path: '/dashboard/getpremium',
        component:require('./views/Premium')
    },
    {
        path: '/dashboard/getpremium/credit',
        component:require('./views/Credit')
    },
    {
        path: '/dashboard/postads',
        component:require('./views/Postads')
    },
    {
        path: '/dashboard/manageads',
        component:require('./views/Manageads')
    },
    {
        path: '/dashboard/postjobs',
        component:require('./views/PostJobs')
    },
    {
        path: '/dashboard/managejobs',
        component:require('./views/ManageJobs')
    }



]


export default new VueRouter({
    routes,
    mode: 'history',
    linkActiveClass: 'active'
})