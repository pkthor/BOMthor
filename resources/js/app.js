import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { createPinia } from 'pinia'
import Icon from '@/Components/Icon.vue'

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

// window.axios.get('/sanctum/csrf-cookie').then(() => {
    createInertiaApp({
        title: (title) => `${title}`,
        resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
        setup({ el, App, props, plugin }) {
            return createApp({ render: () => h(App, props) })
                .use(plugin)
                .use(ZiggyVue)
                .use(createPinia())
                .component('icon', Icon)
                .mount(el);
        },
        progress: {
            color: '#4B5563',
        },
    });
// });
