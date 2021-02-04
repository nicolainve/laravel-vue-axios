<template>
    <div>
        <form @submit.prevent="updateCar">
                <label>Brand</label>
                <input type="text" v-model="car.brand">
                <label>Model</label>
                <input type="text" v-model="car.model">
            <button type="submit">Update Car</button>
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
        created() {
            this.axios
                .get(`http://localhost:8000/api/car/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.car = response.data;
                });
        },
        methods: {
            updateCar() {
                this.axios
                    .post(`http://localhost:8000/api/car/update/${this.$route.params.id}`, this.car)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>