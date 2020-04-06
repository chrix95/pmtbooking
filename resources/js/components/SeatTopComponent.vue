<template>
    <!-- Search -->
    <div class="output color twoway">
        <div class="wrap">
            <div>
                <p>28.03.2020 <small>at</small> {{ $parent.oneway_option.departure_time }}</p>
                <p>{{ $parent.searchParams.dep_station }} <small>to</small> {{ $parent.searchParams.dep_arrival_station }}</p>
            </div>

            <div v-show="$parent.ticket_type == 'return'">
                <p>02.03.2020 <small>at</small> {{ $parent.return_option.departure_time }}</p>
                <p>{{ $parent.searchParams.return_station }} <small>to</small> {{ $parent.searchParams.return_arrival_station }}</p>
            </div>
        </div>
    </div>
    <!-- //Search -->
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
