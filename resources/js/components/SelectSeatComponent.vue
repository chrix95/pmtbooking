<template>
    <div>
        <seat-top-component></seat-top-component>
        <div class="wrap">
            <div class="row">
                <!--- Content -->
                <div class="full-width content">
                    <h2>Select prefered available seat</h2>
                </div>
                <!--- //Content -->
                <div class="three-fourth">
                    <!-- Select Seat Functionality -->
                        <div class="container">
                            <div class="row" id="row1">
                                <div class="column c1">	
                                    <img src="ui/images/steering.png" class="driver">
                                </div>
                                <div class="column c2">
                                    <a class="seats1" @click="bookSeat(1)">
                                        <img src="ui/images/available.svg" class="seatsimg">
                                    </a>
                                </div>
                            </div>
                            <div class="row" id="row1">
                                <div class="column c1">	
                                    <a class="seats2" @click="bookSeat(2)">
                                        <img src="ui/images/available.svg" class="seatsimg">
                                    </a>
                                    <a class="seats3" @click="bookSeat(3)">
                                        <img src="ui/images/available.svg" class="seatsimg">
                                    </a>
                                    <a class="seats4" @click="bookSeat(4)">
                                        <img src="ui/images/available.svg" class="seatsimg">
                                    </a>
                                </div>
                                <div class="column c2">
                                    <img src="ui/images/exit.png" class="driver">
                                    <!-- <a class="exit"><p>Exit</p></a> -->
                                </div>
                            </div>
                            <div class="row" id="row1">
                                <div class="column c1">	
                                    <a class="seats5" @click="bookSeat(5)">
                                        <img src="ui/images/available.svg" class="seatsimg">
                                    </a>
                                    <a class="seats6" @click="bookSeat(6)">
                                        <img src="ui/images/available.svg" class="seatsimg">
                                    </a>
                                </div>
                                <div class="column c2">
                                    <a class="seats7" @click="bookSeat(7)">
                                        <img src="ui/images/available.svg" class="seatsimg">
                                    </a>
                                </div>
                            </div>
                            <div class="row" id="row1">
                                <div class="column c1">	
                                    <a class="seats8" @click="bookSeat(8)">
                                        <img src="ui/images/available.svg" class="seatsimg">
                                    </a>
                                    <a class="seats9" @click="bookSeat(9)">
                                        <img src="ui/images/available.svg" class="seatsimg">
                                    </a>
                                </div>
                                <div class="column c2">
                                    <a class="seats10" @click="bookSeat(10)">
                                        <img src="ui/images/available.svg" class="seatsimg">
                                    </a>
                                </div>
                            </div>
                            <div class="row" id="row1">
                                <div class="column c1">	
                                    <a class="seats11" @click="bookSeat(11)">
                                        <img src="ui/images/available.svg" class="seatsimg">
                                    </a>
                                    <a class="seats12" @click="bookSeat(12)">
                                        <img src="ui/images/available.svg" class="seatsimg">
                                    </a>
                                    <a class="seats13" style="cursor: not-allowed">
                                        <img src="ui/images/red.svg" class="seatsimg">
                                    </a>
                                </div>
                                <div class="column c2">
                                    <a class="seats14" @click="bookSeat(14)">
                                        <img src="ui/images/available.svg" class="seatsimg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    <!-- Select Seat Functionality -->
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div style="padding: 15px">
                                        <img src="ui/images/available.svg" class="sample">
                                    </div>
                                    Available
                                </div>
                                <div class="col-md-4">
                                    <div style="background-color: green; padding: 15px">
                                        <img src="ui/images/available.svg" class="sample">
                                    </div>
                                    Selected
                                </div>
                                <div class="col-md-4">
                                    <div style="padding: 15px">
                                        <img src="ui/images/red.svg" class="sample">
                                    </div>
                                    Booked
                                </div>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="actions">
                            <a
                                href="#"
                                @click.prevent="$parent.stage1"
                                class="btn medium back left"
                                >Go back</a
                            >
                            <a
                                href="#"
                                @click.prevent="complete()"
                                class="btn medium color right"
                                :class="[ !proceed ? 'disabled' : '' ]"
                                >Continue</a
                            >
                        </div>
                    </form>
                </div>
                <sidebar></sidebar>
            </div>
        </div>
    </div>
</template>

<script>
import SeatTopComponent from "./SeatTopComponent";
import Sidebar from "./Sidebar";
export default {
    components: {
        SeatTopComponent,
        Sidebar
    },
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
            this.totalAmount =
                Number(this.searchParams.no_of_passenger) *
                Number(this.oneway_option.amount);
            localStorage.setItem("totalAmount", this.totalAmount);
        }
        if (localStorage.getItem("return_option") !== null) {
            this.return_option = JSON.parse(
                localStorage.getItem("return_option")
            );
            this.totalAmount =
                Number(this.searchParams.no_of_passenger) *
                (Number(this.oneway_option.amount) +
                    Number(this.return_option.amount));
            localStorage.setItem("totalAmount", this.totalAmount);
        }
    },
    data() {
        return {
            ticket_type: "",
            searchParams: {},
            oneway_option: {},
            return_option: {},
            totalAmount: 0,
            seatBooked: 0,
            selectedSeat: [],
            booked: false,
            proceed: false
        };
    },
    methods: {
        formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
        },
        bookSeat(value) {
            if (this.selectedSeat.filter(p => p == value) != value) {
                if (Number(this.searchParams.no_of_passenger) == Number(this.seatBooked)) {
                    if (this.selectedSeat.filter(p => p == value) != value) {
                        alert(`Can't book more than ` + this.searchParams.no_of_passenger + ` seat(s)`)
                    } else {
                        const valueToremove = [value]
                        this.selectedSeat = this.selectedSeat.filter(item => !valueToremove.includes(item))
                        $(".seats" + value).removeClass("booked")
                        this.seatBooked--
                    }
                } else {
                    this.selectedSeat = [...this.selectedSeat, value]
                    $(".seats" + value).addClass("booked")
                    this.seatBooked++
                }
            } else {
                if (Number(this.searchParams.no_of_passenger) == Number(this.seatBooked)) {
                    if (this.selectedSeat.filter(p => p == value) != value) {
                        alert(`Can't book more than ` + this.searchParams.no_of_passenger + ` seat(s)`)
                    } else {
                        const valueToremove = [value]
                        this.selectedSeat = this.selectedSeat.filter(item => !valueToremove.includes(item))
                        $(".seats" + value).removeClass("booked")
                        this.seatBooked--
                    }
                } else {
                    const valueToremove = [value]
                    this.selectedSeat = this.selectedSeat.filter(item => !valueToremove.includes(item))
                    $(".seats" + value).removeClass("booked")
                    this.seatBooked--
                }
            }
        },
        complete() {
            localStorage.setItem('selectedSeat', JSON.stringify(this.selectedSeat))
            this.$parent.stage3()
        }
    },
    watch: {
        seatBooked: function (val) {
            if (val == this.searchParams.no_of_passenger) {
                this.proceed = true
            } else {
                this.proceed = false
            }
        },
    }
};
</script>
<style scoped>
img.seatsimg {
    width: 45%;
}
img.driver {
    width: 20%;
    margin-left: 20px;
}
.selected {
    background: #F36713 !important;
    color: #fff !important;
}
@import 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300';
*, *:after, *:before {box-sizing: border-box;}
body {
	font-family: "Open Sans",sans-serif;
  color: inherit;
  padding: 10vh 0 0 0;
}

.container {
  width: 100%;
  margin: 0 auto;
  padding: 0em 0em 1em 8em;
}

.row {
	width: 100%; 
	text-align: center;
}
.column {
	width: 49.5%; 
	display: flex;
}
.column a {
	width: 25%; 
	display: inline-block; 
	text-align: center; 
	padding: 15px 0; 
	margin: 0px 15px; 
	cursor: pointer;
}
.column a p {
	display: block; 
	text-align: center; 
	transition: ease .35s;
	opacity: 1;;
}
.column a span {
	display: block;
	text-align: center;
	transition: ease .35s;
	opacity: 0;
}
.booked {
	background: green !important; 
}
</style>
