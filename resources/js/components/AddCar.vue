<template>
    <div>
        <form @submit.prevent="addCar">
            <label>Brand</label>
            <input type="text" v-model="car.brand">
            <label>Model</label>
            <input type="text" v-model="car.model">
            <button type="submit">Add Car</button>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                car: {}
            }
        },
        methods: {
            addCar() {
                this.axios.post('http://localhost:8000/api/car/add', this.car)
                    .then(response => (
                        this.$router.push({name: 'home'})
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>