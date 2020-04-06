<template>
    <div>
        <search-component @vehicle-option="validateTrip" v-show="!displaySeat && !displayInfo && !loading && !booked"></search-component>
        <loader v-show="loading"></loader>
        <select-vehicle-component v-if="displayVehicle" :ticket_type="ticket_type" @seat-option="stage2"></select-vehicle-component>
        <select-seat-component v-if="displaySeat"></select-seat-component>
        <customer-component v-if="displayInfo" @booking-completed="bookingCompleted"></customer-component>
        <booked v-if="booked"></booked>
    </div>
</template>

<script>
    import SearchComponent from './SearchComponent'
    import Loader from './Loader'
    import SelectVehicleComponent from './SelectVehicleComponent'
    import SelectSeatComponent from './SelectSeatComponent'
    import CustomerComponent from './CustomerComponent'
    import Booked from './Booked'
    export default {
        components: {
            SearchComponent,
            Loader,
            SelectVehicleComponent,
            SelectSeatComponent,
            CustomerComponent,
            Booked
        },
        mounted() {
            var stage = localStorage.getItem('stage')
            // if (stage == 1) {
            //     this.stage1()
            // } else if (stage == 2) {
            //     this.stage2()
            // } else if (stage == 3) {
            //     this.stage3()
            // } else if (stage == 4) {
            //     this.bookingCompleted()
            // } else if (stage == 0) {
            //     this.validateTrip(true)
            // }
        },
        data() {
            return {
                loading: false,
                displayVehicle: false,
                displaySeat: false,
                displayInfo: false,
                ticket_type: '',
                user: null,
                appkey_test: "pk_test_ad8895a4fe6b5f196b62a1a34a6c044addddbae1",
                appkey_live: "pk_live_7ecc08b231a67b9c3d521f97ee9d94756f8831a2",
                mode: 1,
                booked: false
            }
        },
        methods: {
            validateTrip(option) {
                this.loading = true
                this.displayVehicle = false
                setTimeout(() => {
                    this.ticket_type = option
                    this.displayVehicle = true
                    localStorage.setItem('stage', 0)
                    this.loading = false
                }, 1500);
            },
            bookingCompleted () {
                this.loading = true
                this.displayInfo = false
                setTimeout(() => {
                    this.booked = true
                    localStorage.setItem('stage', 4)
                    this.loading = false
                }, 5000);
            },
            stage3() {
                this.loading = true
                this.displaySeat = false
                setTimeout(() => {
                    this.displayInfo = true
                    localStorage.setItem('stage', 3)
                    this.loading = false
                }, 1500);
            },
            stage2(option) {
                this.loading = true
                this.displayVehicle = false
                this.displayInfo = false
                setTimeout(() => {
                    this.displaySeat = true
                    localStorage.setItem('stage', 2)
                    this.loading = false
                }, 1500);
            },
            stage1() {
                this.loading = true
                this.displaySeat = false
                localStorage.removeItem('ticket_type')
                localStorage.removeItem('oneway_option')
                localStorage.removeItem('return_option')
                setTimeout(() => {
                    localStorage.setItem('stage', 1)
                    this.displayVehicle = true
                    this.loading = false
                }, 1000);
            }
        }
    }
</script>
