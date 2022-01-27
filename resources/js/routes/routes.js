// import Vue from 'vue';
import VueRouter from 'vue-router'
import ViewerComponent from "../components/ViewerComponent.vue";


const router = new VueRouter({
    routes: [
        {
            path: '/viewer',
            components: {
                ViewerComponent,
            },
            name: 'ViewerComponent',
        },

    ],
})


export default router
