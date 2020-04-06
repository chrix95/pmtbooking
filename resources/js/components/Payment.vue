<template>
    <!--- //Content -->
    <div class="three-fourth">
        <div v-if="paymentOption == 1">
            <h3>Pay via Bank Transfer</h3>
            <p>Make payment into the bank account displayed below: </p> <br>
            <strong>Bank:</strong> {{ bank_transfer.bank }} <br>
            <strong>Account Name:</strong> {{ bank_transfer.account_name }} <br>
            <strong>Account Number:</strong> {{ bank_transfer.account_number }} <br>
            <strong>Booking Ref:</strong> {{ booking_ref }}
        </div>
        <div v-if="paymentOption == 2">
            <h3>Pay via USSD</h3>
            <h4><strong>Booking Ref: {{ booking_ref }}</strong></h4>
            <br>
            <ul>
                <li v-for="code in ussd" :key="code.id">
                    {{ code.bank }} - {{ code.code + ussd_code }}#
                </li>
            </ul>
        </div>
        <div v-if="paymentOption == 3">
            <h3>Pay with Card</h3>
            Payment will be made using paystack. Successful payment will generate a receipt for the booking.
            <br>
            <strong>Booking Ref: {{ booking_ref }}</strong>
        </div>
        <div class="actions">
            <a href="#" @click.prevent="$parent.goBack()" class="btn medium back">Go back</a>
            <a href="#" @click.prevent="$parent.paystack(booking_ref)" class="btn medium color right" v-if="paymentOption == 3">Pay</a>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['paymentOption'],
        mounted() {
        },
        data() {
            return {
                bank_transfer: {
                    bank: "Providus Bank",
                    account_number: Math.ceil(Math.random() * 9000000000),
                    account_name: "Reserved Peace Mass Transit - " + Math.ceil(Math.random() * 10000000000)
                },
                ussd_code: Math.ceil(Math.random() * 10000),
                booking_ref: "PMT-" + Math.ceil(Math.random() * 100000000),
                ussd: [
                    {
                        "id": "1",
                        "bank": "GT Bank",
                        "code": "*737*33*618*"
                    },
                    {
                        "id": "2",
                        "bank": "Zenith Bank",
                        "code": "*966*000*"
                    },
                    {
                        "id": "3",
                        "bank": "UBA",
                        "code": "*919*000*"
                    },
                    {
                        "id": "4",
                        "bank": "Stanbic IBTC",
                        "code": "*909*000*"
                    },
                    {
                        "id": "5",
                        "bank": "Sterling Bank",
                        "code": "*822*000*"
                    },
                    {
                        "id": "6",
                        "bank": "Unity Bank",
                        "code": "*7799*000*"
                    },
                    {
                        "id": "7",
                        "bank": "Keystone Bank",
                        "code": "*7111*000*"
                    },
                    {
                        "id": "8",
                        "bank": "Fidelity Bank",
                        "code": "*770*000*"
                    },
                    {
                        "id": "9",
                        "bank": "Ecobank",
                        "code": "*326*000*"
                    },
                    {
                        "id": "10",
                        "bank": "Wema",
                        "code": "*945*000*"
                    },
                    {
                        "id": "11",
                        "bank": "Access Bank",
                        "code": "*901*000*"
                    },
                    {
                        "id": "12",
                        "bank": "Highstreet MFB",
                        "code": "*7797*000*"
                    },
                    {
                        "id": "13",
                        "bank": "First Bank",
                        "code": "*894*000*"
                    }
                ]
            }
        },
        methods: {
        }
    }
</script>
