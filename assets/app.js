import './styles/app.css';

import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'

createInertiaApp({
    resolve: name => require(`./vue/Pages/${name}`),
    setup({ el, app, props }) {
        new Vue({
            render: h => h(app, props),
        }).$mount(el)
    },
})