import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import { createI18n } from 'vue-i18n'
import mitt from 'mitt'
import App from './App.vue'
import AppLink from './components/AppLink.vue'
import Faq from './views/Faq.vue'
import Info from './views/Info.vue'
import Home from './views/Home.vue'
import NewsDetail from './views/NewsDetail.vue'
import Team from './views/Team.vue'

require('./bootstrap')


const i18n = createI18n({
    locale: 'sk',
    fallbackLocale: 'sk',
    messages: {}
})

const router = createRouter({
    history: createWebHistory(),
    routes: [{
        path: '/', redirect: '/sk'
    }, {
        path: '/:locale',
        component: {
            template: '<router-view></router-view>'
        },
        beforeEnter: (to, from, next) => {
            const locale = to.params.locale
            const supported_locales = ['sk', 'en']
            if (!supported_locales.includes(locale)) return next('sk')
            if (i18n.global.locale !== locale) {
                i18n.global.locale = locale
            }

            return next()
        },
        children: [
            { path: '', name: 'Home', component: Home },
            { path: 'news/:id', name: 'NewsDetail', component: NewsDetail },
            { path: 'faq', name: 'Faq', component: Faq },
            { path: 'info', name: 'Info', component: Info },
            { path: 'team', name: 'Team', component: Team },
        ]
    }],
})

const app = createApp(App)
    .use(i18n)
    .use(router)
    .component('AppLink', AppLink)

app.config.globalProperties.$i18nRoute = function (to) {
    return {
        ...to,
        params: { locale: this.$i18n.locale, ...to.params }
    }
}

app.config.globalProperties.$emitter = mitt()

app.config.globalProperties.$formatDate = function (string) {
    const date = new Date(string)
    return `${date.getDate()}/${date.getMonth() + 1}/${date.toLocaleDateString(undefined, {year: '2-digit'})}`
}

app.mount('#app')
