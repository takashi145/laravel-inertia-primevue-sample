import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import PrimeVue from 'primevue/config';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

createInertiaApp({
  resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)
      .use(PrimeVue)
      .mount(el)
  },
})