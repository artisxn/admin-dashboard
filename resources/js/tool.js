import Dashboard from './components/Dashboard'
import Widget from './components/Widget'

Nova.booting((Vue, router, store) => {

    router.addRoutes([
        {
            name: 'admin-dashboard',
            path: '/admin-dashboard/:dashboardKey',
            component: Dashboard
        }
    ])

    Vue.component('widget', Widget)

})

