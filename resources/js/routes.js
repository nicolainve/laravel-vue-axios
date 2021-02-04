import Cars from './components/Cars.vue';
import AddCar from './components/AddCar.vue';
import EditCar from './components/EditCar.vue';

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
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditCar
    }
];