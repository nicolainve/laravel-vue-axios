<template>
    <ul>
        <li v-for="car in cars" :key="car.id">
            <h2>{{ car.brand }}</h2>
            <h3>{{ car.model }}</h3>
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
    }
</script>