<template>
    <div class="wrap">
        <div class="row">
            <!--- Content -->
            <div class="full-width content">
                <div v-if="ticket_type == 'oneway' || ticket_type == 'return'">
                    <h2>Select DEPARTURE VEHICLE</h2>
                    <div class="results">
                        <!-- Item -->
                        <article class="result" v-for="(vehicle, index) in oneway_option" :key="index">
                            <div class="one-fourth heightfix"><img :src="getImage(vehicle.image)" alt="" /></div>
                            <div class="one-half heightfix">
                                <h3>{{ vehicle.title }} <a href="javascript:void(0)" class="trigger color" title="Read more">?</a></h3>
                                <ul>
                                    <li>
                                        <span class="icon icon-themeenergy_user-3"></span>
                                        <p>Max <strong>{{ vehicle.max_passenger }} people</strong> <br />per vehicle</p>
                                    </li>
                                    <li>
                                        <span class="icon icon-themeenergy_travel-bag"></span>
                                        <p>Departure time <br> <strong>{{ vehicle.departure_time }}</strong> <br /></p>
                                    </li>
                                    <li>
                                        <span class="icon icon-themeenergy_clock"></span>
                                        <p>Estimated Arrival time <br /><strong>{{ vehicle.estimated_time }}</strong></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="one-fourth heightfix">
                                <div>
                                    <div class="price">₦{{ formatNumber(vehicle.amount) }} <small></small></div>
                                    <span class="meta">per passenger</span>
                                    <a href="#" :class="selectedOneway == vehicle.id ? 'selected' : ''" class="btn grey large" @click.prevent="selectOneway(vehicle.id)">{{ selectedOneway == vehicle.id ? "selected" : "select" }}</a>
                                </div>
                            </div>
                            <!-- <div class="full-width information">
                                <a href="javascript:void(0)" class="close color" title="Close">x</a>
                                <p>{{ vehicle.description }}</p>
                            </div> -->
                        </article>
                        <!-- //Item -->
                    </div>
                </div>
                <div v-if="ticket_type == 'return'">
                    <h2>Select RETURN VEHICLE</h2>
                    <div class="results">
                        <!-- Item -->
                        <article class="result" v-for="(vehicle, index) in return_option" :key="index">
                            <div class="one-fourth heightfix"><img :src="getImage(vehicle.image)" alt="" /></div>
                            <div class="one-half heightfix">
                                <h3>{{ vehicle.title }} <a href="javascript:void(0)" class="trigger color" title="Read more">?</a></h3>
                                <ul>
                                    <li>
                                        <span class="icon icon-themeenergy_user-3"></span>
                                        <p>Max <strong>{{ vehicle.max_passenger }} people</strong> <br />per vehicle</p>
                                    </li>
                                    <li>
                                        <span class="icon icon-themeenergy_travel-bag"></span>
                                        <p>Departure time <br> <strong>{{ vehicle.departure_time }}</strong> <br /></p>
                                    </li>
                                    <li>
                                        <span class="icon icon-themeenergy_clock"></span>
                                        <p>Estimated Arrival time <br /><strong>{{ vehicle.estimated_time }}</strong></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="one-fourth heightfix">
                                <div>
                                    <div class="price">₦{{ formatNumber(vehicle.amount) }} <small></small></div>
                                    <span class="meta">per passenger</span>
                                    <a href="#" :class="selectedReturnway == vehicle.id ? 'selected' : 'select'" class="btn grey large" @click.prevent="selectReturnway(vehicle.id)">{{ selectedReturnway == vehicle.id ? "selected" : "select" }}</a>
                                </div>
                            </div>
                            <!-- <div class="full-width information">
                                <a href="javascript:void(0)" class="close color" title="Close">x</a>
                                <p>{{ vehicle.description }}</p>
                            </div> -->
                        </article>
                        <!-- //Item -->
                    </div>
                </div>
                <a href="#" class="btn grey large" @click.prevent="complete" v-if="ticket_type == 'oneway' && selectedOneway != '' || ticket_type == 'return' && selectedReturnway != ''">Continue</a>
            </div>
            <!--- //Content -->
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            ticket_type: { type: String, required: true }
        },
        mounted() {
        },
        data() {
            return {
                selectedOneway: '',
                selectedReturnway: '',
                oneway_option: [
                    {
                        id: 1,
                        image: "ui/images/uploads/car.jpg",
                        title: "Private car",
                        max_passenger: 7,
                        departure_time: "6:45am",
                        estimated_time: "4 hrs 45 mins",
                        amount: "8500",
                        description: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."
                    },
                    {
                        id: 2,
                        image: "ui/images/uploads/bus.jpg",
                        title: "Private shuttle",
                        max_passenger: 14,
                        departure_time: "7:00am",
                        estimated_time: "7 hrs 45 mins",
                        amount: "7500",
                        description: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."
                    },
                    {
                        id: 3,
                        image: "ui/images/uploads/mover.png",
                        title: "JET MOVER",
                        max_passenger: 10,
                        departure_time: "7:45am",
                        estimated_time: "3 hrs",
                        amount: "9850",
                        description: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."
                    }
                ],
                return_option: [
                    {
                        id: 1,
                        image: "ui/images/uploads/bus.jpg",
                        title: "Private shuttle",
                        max_passenger: 14,
                        departure_time: "7:00am",
                        estimated_time: "7 hrs 45 mins",
                        amount: "7500",
                        description: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."
                    },
                    {
                        id: 2,
                        image: "ui/images/uploads/car.jpg",
                        title: "Private car",
                        max_passenger: 6,
                        departure_time: "6:45am",
                        estimated_time: "4 hrs 45 mins",
                        amount: "8500",
                        description: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."
                    },
                ]
            }
        },
        methods: {
            getImage(name) {
                return name
            },
            selectOneway(id) {
                let that = this
                this.oneway_option.forEach(function(oneway, index){
                    if(oneway.id == id) {
                        localStorage.setItem('oneway_option', JSON.stringify(oneway))
                        that.selectedOneway = oneway.id
                    }
                })
            },
            selectReturnway(id) {
                let that = this
                this.return_option.forEach(function(returnway, index){
                    if(returnway.id == id) {
                        localStorage.setItem('return_option', JSON.stringify(returnway))
                        that.selectedReturnway = returnway.id
                    }
                })
            },
            formatNumber(num) {
                return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
            },
            complete() {
                localStorage.setItem('ticket_type', this.ticket_type)
                this.$emit('seat-option', true)
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
