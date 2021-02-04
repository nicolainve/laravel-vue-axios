<template>
    <ul>
        <li v-for="car in cars" :key="car.id">
            <h2>{{ car.brand }}</h2>
            <h3>{{ car.model }}</h3>
            <div role="group">
                <router-link :to="{name: 'edit', params: { id: car.id }}">Edit</router-link>
                <button @click="deleteCar(car.id)">Delete</button>
            </div>
        </li>
    </ul>
</template>

<script>
    export default {
        data() {
            return {
                cars: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/cars')
                .then(response => {
                    this.cars = response.data;
                });
        },
        methods: {
            deleteCar(id) {
                this.axios
                    .delete(`http://localhost:8000/api/car/delete/${id}`)
                    .then(response => {
                        let i = this.cars.map(item => item.id).indexOf(id); // find index of your object
                        this.cars.splice(i, 1)
                    });
            }
        }
    }
</script>