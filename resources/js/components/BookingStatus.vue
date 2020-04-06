<template>
    <div>
        <div class="" v-show="!loading">
            <div class="wrap">
                <form role="form">
                    <div class="f-row">
                        <div class="form-group datepicker one">
                            <label>Booking Reference</label>
                            <input type="text" v-model="reference" />
                        </div>
                        <div class="form-group select one-third">
                            <label></label>
                            <div class="form-group">
                                <button
                                    type="button"
                                    id="searchBtn"
                                    class="btn large black"
                                    @click.prevent="submit"
                                >
                                    Verify Booking
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <loader v-show="loading"></loader>
        <div class="wrap" v-if="details == 'found'">
            <div class="f-row">
                <div class="one">
                    <h4 class="bold">BOOKING DETAILS</h4>
                    <hr />
                </div>
            </div>

            <div class="f-row">
                <div class="one-fourth">
                    <div class="form-group">
                        <label><strong>Date of Booking</strong></label>
                        <p>
                            <span id="ContentPlaceHolder2_lbldate"
                                >Saturday, November 2, 2019</span
                            >
                        </p>
                    </div>
                </div>

                <div class="one-fourth">
                    <div class="form-group">
                        <label><strong>Booking Status</strong></label>
                        <p>
                            <span id="ContentPlaceHolder2_lblbookignstatus"
                                >Approved</span
                            >
                        </p>
                    </div>
                </div>

                <div class="one-fourth">
                    <div class="form-group">
                        <label><strong>No of Tickets</strong></label>
                        <p>
                            <span id="ContentPlaceHolder2_lbltickets">2</span>
                        </p>
                    </div>
                </div>
                <div class="one-fourth">
                    <div class="form-group">
                        <label><strong>Seat Status</strong></label>
                        <p>
                            <span id="ContentPlaceHolder2_lblSeat">1</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="f-row">
                <div class="two-third">
                    <div class="form-group">
                        <label><strong>Route</strong></label>
                        <p>
                            <span id="ContentPlaceHolder2_lblroute"
                                >Akwa Ibom (Uyo) ==&gt; FCT Abuja (Utako)</span
                            >
                        </p>
                    </div>
                </div>
                <div class="one-third">
                    <div class="form-group">
                        <label><strong>Amount</strong></label>
                        <p>
                            <span id="ContentPlaceHolder2_lblamount"
                                >15,300.00</span
                            >
                        </p>
                    </div>
                </div>
            </div>
            <div class="f-row">
                <div class="one">
                    <div class="f-row">
                        <div class="one-fourth">
                            <div class="form-group">
                                <label><strong>Departure Date</strong></label>
                                <p>
                                    <span id="ContentPlaceHolder2_lbldepartdate"
                                        >Monday, April 4, 2020 6:30 AM</span
                                    >
                                </p>
                            </div>
                        </div>
                        <div class="one-fourth">
                            <div class="form-group">
                                <label><strong>Name</strong></label>
                                <p>
                                    <span id="ContentPlaceHolder2_lblname"
                                        >Christopher Okokon Ntuk
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="one-fourth">
                            <div class="form-group">
                                <label><strong>RefCode</strong></label>
                                <p>
                                    <span id="ContentPlaceHolder2_lblrefcode"
                                        >OH-73E2E96495</span
                                    >
                                </p>
                            </div>
                        </div>

                        <div class="one-fourth">
                            <div class="form-group">
                                <label><strong>Seat Number</strong></label>
                                <p>
                                    <span id="ContentPlaceHolder2_lblseatno"
                                        >1</span
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="f-row">
                        <div class="one-third">
                            <div class="form-group">
                                <label><strong>Sex</strong></label>
                                <p>
                                    <span id="ContentPlaceHolder2_lblsex"
                                        >Male</span
                                    >
                                </p>
                            </div>
                        </div>

                        <div class="one-third">
                            <div class="form-group">
                                <label><strong>Vehicle Details:</strong></label>
                                <p>
                                    <span
                                        id="ContentPlaceHolder2_lblmainvdetails"
                                        >GRA 651 XA</span
                                    >
                                </p>
                            </div>
                        </div>
                        <div class="one-third">
                            <div class="form-group">
                                <label><strong>Phone:</strong></label>
                                <p>
                                    <span id="ContentPlaceHolder2_lblmainphone"
                                        >08183780409</span
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="f-row">
                <div class="one">
                    <hr />
                    <h3></h3>
                </div>
            </div>
        </div>
        <div class="wrap" v-else-if="details == 'notfound'">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Oops!, booking refernce not found</h4>
                <p>Booking reference <strong>{{reference }}</strong> was not found on our system. If you are sure about the reference, kindly contact support on the numbers below.<br><strong>Tel: </strong>+(234) 805 879 8980 or +(234) 907 900 0004<br><strong>Email: </strong>info@pmt.com</p>
                <hr>
                <p class="mb-0">Meanwhile, you can <a to="/booking">book</a> for another ticket while we verify the current issue.</p>
            </div>
        </div>
    </div>
</template>

<script>
import Loader from "./Loader";
export default {
    components: {
        Loader
    },
    mounted() {},
    data() {
        return {
            loading: false
        };
    },
    methods: {
        submit() {
            this.loading = true;
            var option = ""
            if (this.reference == "PMT-1234567890") {
                option = 'found'
            } else {
                option = 'notfound'
            }
            setTimeout(() => {
                this.loading = false;
                this.setDisplay(option)
            }, 3000);
        },
        setDisplay(val) {
            this.details = val
        }
    }
};
</script>
