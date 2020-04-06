<template>
    <!--- Sidebar -->
    <aside class="one-fourth sidebar right">
        <!-- Widget -->
        <div class="widget">
            <h4>Booking summary</h4>
            <div class="summary">
                <div>
                    <h5>DEPARTURE</h5>
                    <dl>
                        <dt>Date</dt>
                        <dd>28.08.2014 {{ $parent.oneway_option.departure_time }}</dd>
                        <dt>From</dt>
                        <dd>{{ $parent.searchParams.dep_station }}</dd>
                        <dt>To</dt>
                        <dd>{{ $parent.searchParams.dep_arrival_station }}</dd>
                        <dt>Vehicle</dt>
                        <dd>{{ $parent.oneway_option.title }}</dd>
                    </dl>
                </div>

                <div v-show="$parent.ticket_type == 'return'">
                    <h5>RETURN</h5>
                    <dl>
                        <dt>Date</dt>
                        <dd>02.09.2014 {{ $parent.return_option.departure_time }}</dd>
                        <dt>From</dt>
                        <dd>{{ $parent.searchParams.return_station }}</dd>
                        <dt>To</dt>
                        <dd>{{ $parent.searchParams.return_arrival_station }}</dd>
                        <dt>Vehicle</dt>
                        <dd>{{ $parent.return_option.title }}</dd>
                    </dl>
                </div>

                <dl class="total">
                    <dt>Total</dt>
                    <dd v-if="$parent.ticket_type == 'return'">₦{{ $parent.formatNumber($parent.totalAmount) }}</dd>
                    <dd v-else>₦{{ $parent.formatNumber($parent.totalAmount) }}</dd>
                </dl>
            </div>
        </div>
        <!-- //Widget -->
    </aside>
    <!--- //Sidebar -->
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
<style scoped>
.summary dd {
    text-align: right;
}
.summary dt {
    text-align: left;
}
</style>