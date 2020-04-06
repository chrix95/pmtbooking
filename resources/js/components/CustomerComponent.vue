<template>
    <div>
        <seat-top-component></seat-top-component>
        <div class="wrap">
			<div class="row">
                <!--- Content -->
                <div class="full-width content" v-if="!payment">
                    <h2>Passenger details</h2>
                    <p>
                        Please ensure all of the required fields are completed at the time of booking. This information is
                        imperative to ensure a smooth journey.<br />All fields are required.
                    </p>
                </div>
                <customer-form v-if="!payment"></customer-form>
                <!--- Content -->
                <div class="full-width content" v-if="payment">
                    <h2>Make Payment</h2>
                    <p>
                        <strong>NOTE: </strong> After Successful payment, you will receive an SMS and Email to confirm your booking which will include your booking reference.
                    </p>
                </div>
				<payment v-if="payment" :paymentOption="fields.payment"></payment>
                <sidebar></sidebar>
			</div>
		</div>
    </div>
</template>

<script>
    import SeatTopComponent from './SeatTopComponent'
    import Sidebar from './Sidebar'
    import CustomerForm from './CustomerForm'
    import Payment from './Payment'
    export default {
        components: {
            SeatTopComponent,
            Sidebar,
            CustomerForm,
            Payment
        },
        mounted() {
            if(localStorage.getItem('ticket_type') !== null) {
                this.ticket_type = localStorage.getItem('ticket_type')
            }
            if(localStorage.getItem('search')) {
                this.searchParams = JSON.parse(localStorage.getItem('search'))
            }
            if(localStorage.getItem('oneway_option') !== null) {
                this.oneway_option = JSON.parse(localStorage.getItem('oneway_option'))
                this.totalAmount = Number(this.searchParams.no_of_passenger) * Number(this.oneway_option.amount)
                localStorage.setItem('totalAmount', this.totalAmount)
            }
            if(localStorage.getItem('return_option') !== null) {
                this.return_option = JSON.parse(localStorage.getItem('return_option'))
                this.totalAmount = Number(this.searchParams.no_of_passenger) * ((Number(this.oneway_option.amount) + Number(this.return_option.amount)))
                localStorage.setItem('totalAmount', this.totalAmount)
            }
        },
        data() {
            return {
                ticket_type: '',
                searchParams: {},
                oneway_option: {},
                return_option: {},
                totalAmount: 0,
                fields: {},
                payment: false
            }
        },
        methods: {
            formatNumber(num) {
                return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
            },
            proceedPayment() {
                let data = {
                    name: this.fields.name,
                    phone: this.fields.phone,
                    email: this.fields.email,
                    address: this.fields.address,
                }
                localStorage.setItem('payment_mode', this.fields.payment)
                localStorage.setItem('user', JSON.stringify(data))
                this.payment = true
            },
            goBack() {
                this.payment = false
            },
            paystack(bookingRef) {
                const that = this
                localStorage.setItem('booking_ref', bookingRef)
                var value = this.totalAmount * 100
                let appkey = this.$parent.appkey_test
                if (this.mode == 2) {
                    appkey = this.$parent.appkey_live
                }
                var handler = PaystackPop.setup({
                    key: appkey,
                    email: this.fields.email == '' ? 'info@pmt.com' : this.fields.email,
                    amount: value,
                    metadata: {
                    custom_fields: [
                        {
                            customer_phone: this.fields.phone,
                            customer_email: this.fields.email == '' ? 'info@pmt.com' : this.fields.email,
                            booking_ref: bookingRef,
                        }
                    ]
                    },
                    callback: function(response) {
                        let status = response.status,
                            message = response.message
                        localStorage.setItem('paystack', JSON.stringify(response))
                        if (status == 'success' && message == 'Approved') {
                            // payment was successful
                            that.complete()
                        } else {
                            // payment not successful
                            alert('Payment was not successful')
                        }
                    },
                    onClose: function() {
                    }
                })
                handler.openIframe()
            },
            complete() {
                localStorage.setItem('ticket_type', this.ticket_type)
                this.$emit('booking-completed')
            }
        }
    }
</script>

<style scoped>
    .selected {
        background: #F36713 !important;
        color: #fff !important;
    }
</style>
