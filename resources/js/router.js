import { createRouter, createWebHashHistory } from 'vue-router'

const routes = [
    {
        path:'/login',
        component: () => import('./pages/Login.vue')
    },
    {
        path:'/',
        component: () => import('./pages/CrearSolicitud.vue')
    },
    {
        path:'/crear-solicitud',
        component: () => import('./pages/CrearSolicitud.vue')
    },
    {
        path:'/solicitudes',
        component: () => import('./pages/Solicitudes.vue'),
        beforeEnter: (to, from) => {
            axios.get('solicitudes')
            .then(response=>{
                console.log(response.data.data)
            })
            .catch(error=>{
                console.log(error)
            })
        },
    },
    {
        path:'/solicitudes/:solicitude',
        component: () => import('./pages/Solicitud.vue'),
        beforeEnter: (to, from) => {
            axios.get(`solicitud/${to.params.solicitude}`)
            .then(response=>{
                console.log(response.data.data)
            })
            .catch(error=>{
                console.log(error)
            })
        },
    },
]

const router = createRouter({
    history: createWebHashHistory(),
    routes,
})

export default router;
