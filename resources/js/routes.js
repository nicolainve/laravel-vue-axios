import Cars from './components/Cars.vue';
import AddCar from './components/AddCar.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Cars
    },
    {
        name: 'add',
        path: '/add',
        component: AddCar
    },
];