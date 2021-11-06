import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import App from './App.vue'
import Footer from './components/Footer.vue'
import Faq from './views/Faq.vue'
import Home from './views/Home.vue'
import NewsDetail from './views/NewsDetail.vue'

require('./bootstrap')


const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', name: 'Home', component: Home },
        { path: '/news/:id', name: 'NewsDetail', component: NewsDetail },
        { path: '/faq', name: 'Faq', component: Faq },
    ]
})

const app = createApp(App)
    .use(router)
    .component('Footer', Footer)
    .mount('#app')

router.beforeEach((to, from, next) => {
    app.menuShown = false
    next()
})