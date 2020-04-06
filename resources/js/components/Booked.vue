<template>
    <div>
        <!-- Page info -->
        <header class="site-title color">
            <div class="wrap">
                <div class="container">
                    <h1>Thank you. Your booking is now confirmed.</h1>
                </div>
            </div>
        </header>
        <!-- //Page info -->

        <div class="wrap">
            <div class="row">
                <div class="three-fourth">
                    <form class="box readonly">
                        <h3>Passenger details</h3>
                        <div class="f-row">
                            <div class="one-fourth">
                                <strong>Full Name</strong>
                            </div>
                            <div class="three-fourth">{{ user.name }}</div>
                        </div>
                        <div class="f-row">
                            <div class="one-fourth">
                                <strong>Mobile Number</strong>
                            </div>
                            <div class="three-fourth">{{ user.phone }}</div>
                        </div>
                        <div class="f-row">
                            <div class="one-fourth">
                                <strong>Email address</strong>
                            </div>
                            <div class="three-fourth">{{ user.email }}</div>
                        </div>
                        <div class="f-row">
                            <div class="one-fourth">
                                <strong>Address</strong>
                            </div>
                            <div class="three-fourth">{{ user.address }}</div>
                        </div>
                        <div class="f-row">
                            <div class="one-fourth">
                                <strong>No of passenger</strong>
                            </div>
                            <div class="one-fourth">
                                {{ searchParams.no_of_passenger }}
                            </div>
                            <div class="one-fourth">
                                <strong>Booking Reference</strong>
                            </div>
                            <div class="one-fourth">
                                <strong>{{ booking_ref }}</strong>
                            </div>
                        </div>
                        <div class="f-row">
                            <div class="one-fourth">
                                <strong>Selected Seat(s)</strong>
                            </div>
                            <div class="three-fourth">
                                <ul>
                                    <li
                                        v-for="(seat, index) in selectedSeat"
                                        :key="index"
                                    >
                                        {{ seat }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h3>Departure Transfer details</h3>
                        <div class="f-row">
                            <div class="one-fourth"><strong>Date</strong></div>
                            <div class="three-fourth">
                                28.08.2014 {{ oneway_option.departure_time }}
                            </div>
                        </div>
                        <div class="f-row">
                            <div class="one-fourth"><strong>From</strong></div>
                            <div class="three-fourth">
                                {{ searchParams.dep_station }}
                            </div>
                        </div>
                        <div class="f-row">
                            <div class="one-fourth"><strong>To</strong></div>
                            <div class="three-fourth">
                                {{ searchParams.dep_arrival_station }}
                            </div>
                        </div>
                        <div class="f-row">
                            <div class="one-fourth">
                                <strong>Vehicle</strong>
                            </div>
                            <div class="three-fourth">
                                {{ oneway_option.title }}
                            </div>
                        </div>

                        <h3 v-if="ticket_type == 'return'">
                            Return Transfer details
                        </h3>
                        <div v-if="ticket_type == 'return'">
                            <div class="f-row">
                                <div class="one-fourth">
                                    <strong>Date</strong>
                                </div>
                                <div class="three-fourth">
                                    02.09.2014
                                    {{ return_option.departure_time }}
                                </div>
                            </div>
                            <div class="f-row">
                                <div class="one-fourth">
                                    <strong>From</strong>
                                </div>
                                <div class="three-fourth">
                                    {{ searchParams.return_station }}
                                </div>
                            </div>
                            <div class="f-row">
                                <div class="one-fourth">
                                    <strong>To</strong>
                                </div>
                                <div class="three-fourth">
                                    {{ searchParams.return_arrival_station }}
                                </div>
                            </div>
                            <div class="f-row">
                                <div class="one-fourth">
                                    <strong>Vehicle</strong>
                                </div>
                                <div class="three-fourth">
                                    {{ return_option.title }}
                                </div>
                            </div>
                        </div>

                        <h3>
                            <strong
                                >TOTAL: ₦{{ formatNumber(totalAmount) }}</strong
                            >
                            <a
                                href="#"
                                class="btn small back pull-right"
                                id="printBtn"
                                @click.prevent="print"
                                >Print</a
                            >
                        </h3>
                    </form>
                </div>

                <!--- Sidebar -->
                <aside class="one-fourth sidebar right">
                    <!-- Widget -->
                    <div class="widget">
                        <h4>Need help booking?</h4>
                        <div class="textwidget">
                            <p>
                                Call our customer services team on the number
                                below to speak to one of our advisors who will
                                help you with all of your needs.
                            </p>
                            <p class="contact-data">
                                <span
                                    class="icon icon-themeenergy_call black"
                                ></span>
                                +1 555 555 555
                            </p>
                        </div>
                    </div>
                    <!-- //Widget -->

                    <!-- Widget -->
                    <div class="widget">
                        <h4>Advertisment</h4>
                        <a href="#"
                            ><img
                                src="ui/images/uploads/advertisment.jpg"
                                alt=""
                        /></a>
                    </div>
                    <!-- //Widget -->
                </aside>
                <!--- //Sidebar -->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        if (localStorage.getItem("ticket_type") !== null) {
            this.ticket_type = localStorage.getItem("ticket_type");
        }
        if (localStorage.getItem("search")) {
            this.searchParams = JSON.parse(localStorage.getItem("search"));
        }
        if (localStorage.getItem("oneway_option") !== null) {
            this.oneway_option = JSON.parse(
                localStorage.getItem("oneway_option")
            );
        }
        if (localStorage.getItem("return_option") !== null) {
            this.return_option = JSON.parse(
                localStorage.getItem("return_option")
            );
        }
        this.totalAmount = localStorage.getItem("totalAmount");
        this.user = JSON.parse(localStorage.getItem("user"));
        this.selectedSeat = JSON.parse(localStorage.getItem("selectedSeat"));
        this.booking_ref = localStorage.getItem("booking_ref");
    },
    data() {
        return {
            ticket_type: "",
            searchParams: {},
            oneway_option: {},
            return_option: {},
            totalAmount: 0,
            user: {},
            payment: false,
            booking_ref: "",
            selectedSeat: []
        };
    },
    methods: {
        formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
        },
        print() {
            document.getElementById("printBtn").style.display = "none";
            setTimeout(() => {
                document.getElementById("printBtn").style.display = "block";
            }, 2000);
            window.print();
        }
    }
};
</script>

<style scoped>
.selected {
    background: #F36713 !important;
    color: #fff !important;
}
ul > li {
	list-style: none;
	position: relative;
	display: inline-block;
	margin-right: 32px;
	font-size: 18px;
}
ul > li:before {
	content: "";
	font-size: 30px;
	color: #DBBC94;
	position: fixed;
	top: -10px;
	left: 0;
}
</style>
