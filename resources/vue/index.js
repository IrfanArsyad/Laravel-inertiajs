import { createApp, defineAsyncComponent, h } from 'vue'
import { createInertiaApp, Link } from '@inertiajs/vue3'

/*
 * import ziggy library
 */
import {ZiggyVue} from 'ziggy/vue'
import {http} from '@/vue/libs'


export const init = () => {
    createInertiaApp({
        resolve: (name) => {
            const vue = import.meta.glob('./pages/**/*.vue', {eager: true})
            const pages = import.meta.glob('/app/Modules/**/*.vue', {eager: true})

            return pages[`/app/Modules/${name}.vue`] ?? vue[`./pages/${name}.vue`]
        },
        async setup({element, App, props, plugin}) {
            const response = await http.get('/api/router')
            const Ziggy = await response.data

            // noinspection JSUnresolvedVariable
            if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
                // noinspection JSUnresolvedVariable
                Object.assign(Ziggy.routes, window.Ziggy.routes)
            }

            const app = createApp({render: () => h(App, props)})

            app.use(plugin)
            app.use(ZiggyVue, Ziggy)

            app.mount('#app')
        },
    }).then(() => {
        console.log('App Created !')
    })
}
