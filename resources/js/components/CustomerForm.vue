<template>
    <!--- //Content -->
    <div class="three-fourth">
        <form>
            <div class="f-row">
                <div class="one">
                    <label for="name">Full name</label>
                    <input type="text" id="name" v-model="$parent.fields.name"/>
                </div>
            </div>
            <div class="f-row">
                <div class="one-half">
                    <label for="number">Mobile number</label>
                    <input type="number" id="number" v-model="$parent.fields.phone"/>
                </div>
                <div class="one-half">
                    <label for="email">Email address</label>
                    <input type="email" id="email" v-model="$parent.fields.email"/>
                </div>
            </div>
            <div class="f-row">
                <div class="one">
                    <label for="address">Address</label>
                    <textarea id="address" cols="30" rows="5" v-model="$parent.fields.address"></textarea>
                    <!-- <input type="text" id="address" /> -->
                </div>
            </div>
            <div class="f-row">
                <div class="one">
                    <label for="payment">Select payment type</label>
                    <select id="payment" v-model="$parent.fields.payment">
                        <option value="" disabled selected>Select an option</option>
                        <option value="1">Pay with Bank Transfer</option>
                        <option value="2">Pay with USSD</option>
                        <option value="3">Pay with Card</option>
                    </select>
                </div>
            </div>

            <div class="actions">
                <a href="#" @click.prevent="$parent.$parent.stage2" class="btn medium back">Go back</a>
                <a href="#" @click.prevent="$parent.proceedPayment" class="btn medium color right">Continue</a>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
        },
        data() {
            return {
            }
        },
        methods: {
        }
    }
</script>
