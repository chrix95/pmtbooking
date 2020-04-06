<template>
    <div class="advanced-search color" id="booking">
        <div class="wrap">
            <form role="form">
                <!-- Row -->
                <div class="f-row">
                    <div class="form-group datepicker one-third">
                        <label>Departure date</label>
                        <input type="text" id="dep-date" />
                    </div>
                    <div class="form-group select one-third">
                        <label>Departure Station</label>
                        <select v-model="fields.dep_station" @change="setArrival(fields.dep_station)">
                            <option selected disabled value="">Select an Option</option>
                            <option
                                v-for="(option, index) in destination"
                                :key="index"
                                :value="option.depot"
                                >{{ option.depot.toUpperCase() }}</option
                            >
                        </select>
                    </div>
                    <div class="form-group select one-third">
                        <label>Arrival Station</label>
                        <select v-model="fields.dep_arrival_station">
                            <option selected disabled value="">Select an Option</option>
                            <option
                                v-for="(option, index) in arrival"
                                :key="index"
                                :value="option.depot"
                                >{{ option.depot.toUpperCase() }}</option
                            >
                        </select>
                    </div>
                </div>
                <!-- //Row -->

                <!-- Row -->
                <div class="f-row">
                    <div class="form-group datepicker one-third">
                        <label for="ret-date">Return date</label>
                        <input type="text" id="ret-date" />
                    </div>
                    <div class="form-group select one-third">
                        <label>Departure Station</label>
                        <select v-model="fields.return_station" @change="setArrivalAway(fields.return_station)">
                            <option selected disabled value="">Select an Option</option>
                            <option
                                v-for="(option, index) in destination_away"
                                :key="index"
                                :value="option.depot"
                                >{{ option.depot.toUpperCase() }}</option
                            >
                        </select>
                    </div>
                    <div class="form-group select one-third">
                        <label>Arrival Station</label>
                        <select v-model="fields.return_arrival_station">
                            <option selected disabled value="">Select an Option</option>
                            <option
                                v-for="(option, index) in arrival_away"
                                :key="index"
                                :value="option.depot"
                                >{{ option.depot.toUpperCase() }}</option
                            >
                        </select>
                    </div>
                </div>
                <!-- //Row -->
                <!-- Row -->
                <div class="f-row">
                    <div class="form-group spinner">
                        <label for="people"
                            >How many people
                            <small>(including children)</small>?</label
                        >
                        <input
                            type="number"
                            id="people"
                            min="1"
                            v-model.number="fields.no_of_passenger"
                        />
                    </div>
                    <div class="form-group radios">
                        <div>
                            <input
                                type="radio"
                                name="radio"
                                id="return"
                                value="return"
                                v-model="fields.ticket_type"
                            />
                            <label for="return">Return</label>
                        </div>
                        <div>
                            <input
                                type="radio"
                                name="radio"
                                id="oneway"
                                value="oneway"
                                v-model="fields.ticket_type"
                                checked
                            />
                            <label for="oneway">One way</label>
                        </div>
                    </div>
                    <div class="form-group right">
                        <button
                            type="button"
                            id="searchBtn"
                            @click="submit"
                            class="btn large black"
                        >
                            Search
                        </button>
                    </div>
                </div>
                <!--// Row -->
            </form>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {},
    data() {
        return {
            destination: [
                {
                    "id": 1,
                    depot: "ABA",
                    manager: "Aba Manager",
                    number: "08055091828",
                    address: "Aba"
                },
                {
                    "id": 2,
                    depot: "ABAKALIKI",
                    manager: "Abakaliki Manager",
                    number: "08055091816",
                    address: "Abakaliki"
                },
                {
                    "id": 3,
                    depot: "ABUJA, MARARABA",
                    manager: "Patience Ozuluigbo",
                    number: "08055091822",
                    address: "By last Bus stop, Keffi Road"
                },
                {
                    "id": 4,
                    depot: "ABUJA,BWARI",
                    manager: "Bwari Manager",
                    number: "08056697034",
                    address: "sahagari Road, Opposite Market"
                },
                {
                    "id": 5,
                    depot: "ABUJA,GWAGWALADA",
                    manager: "Akor james",
                    number: "08055091833",
                    address: "Opposite Brifina Hotel, Gwagwalada, Abuja"
                },
                {
                    "id": 6,
                    depot: "ABUJA,KUBWA",
                    manager: "Kubwa Manager",
                    number: "08055091830",
                    address: "Kubwa"
                },
                {
                    "id": 7,
                    depot: "ABUJA,KUJE",
                    manager: "Nweke Celestine",
                    number: "08055091858",
                    address:
                        "Gwagwalada Road, Near Secretariat Junction, Kuje, Abuja."
                },
                {
                    "id": 9,
                    depot: "ABUJA,UTAKO",
                    manager: "Ugwuaku chinelo",
                    number: "08055091829",
                    address: "39 Ajose Adeogun Street, Utako, Fct, Abuja"
                },
                {
                    "id": 10,
                    depot: "ABUJA,ZUBA",
                    manager: "Okpe Uchenna",
                    number: "08055091831",
                    address: "Zuba"
                },
                {
                    "id": 11,
                    depot: "AFIKPO",
                    manager: "Afikpo Manager",
                    number: "07055792617",
                    address: "Afikpo"
                },
                {
                    "id": 12,
                    depot: "AKURE",
                    manager: "Akure Manager",
                    number: "08056697069",
                    address: "Akure"
                },
                {
                    "id": 13,
                    depot: "BENIN",
                    manager: "Benin Manager",
                    number: "08059041620",
                    address:
                        "No.117, Akpakpava Road by 2nd Junction, Benin City"
                },
                {
                    "id": 14,
                    depot: "CALABAR",
                    manager: "Calabar Manager",
                    number: "08055091834",
                    address: "Calabar"
                },
                {
                    "id": 15,
                    depot: "ENUGU",
                    manager: "Defualt Name",
                    number: "2348012345678",
                    address: "Default Location"
                },
                {
                    "id": 16,
                    depot: "ENUGU,ABAKPA",
                    manager: "Abakpa Manager",
                    number: "08056697088",
                    address: "Abakpa "
                },
                {
                    "id": 17,
                    depot: "ENUGU,GARKI",
                    manager: "Gariki Supervisor",
                    number: "07055794026",
                    address: "Opposite Garki Market, Enugu"
                },
                {
                    "id": 18,
                    depot: "ENUGU-EZIKE",
                    manager: "Enugu-Ezike Manager",
                    number: "08055091832",
                    address: "Enugu-Ezike"
                },
                {
                    "id": 19,
                    depot: "IBADAN",
                    manager: "Ibadan Manager",
                    number: "08055091851",
                    address: "Ibadan"
                },
                {
                    "id": 20,
                    depot: "IKOM",
                    manager: "Ikom Manager",
                    number: "08150461825",
                    address: "Ikom"
                },
                {
                    "id": 21,
                    depot: "ILORIN",
                    manager: "Illorin Manager",
                    number: "08055091849",
                    address: "Illorin"
                },
                {
                    "id": 22,
                    depot: "JOS",
                    manager: "Jos Manager",
                    number: "08055091842",
                    address: ""
                },
                {
                    "id": 23,
                    depot: "KADUNA",
                    manager: "Asogwa Chinedu",
                    number: "09055997741",
                    address: "Kaduna"
                },
                {
                    "id": 24,
                    depot: "LAGOS,AJAH",
                    manager: "Ajah Manager",
                    number: "07055792630",
                    address: "Ajiwe, Opp. Michael & Solomon House, Lagos State"
                },
                {
                    "id": 25,
                    depot: "LAGOS,AJEGUNLE",
                    manager: "Ajegunle Manager",
                    number: "08056697070",
                    address: "No 6 Achakpo Street Ajegunle, lagos"
                },
                {
                    "id": 26,
                    depot: "LAGOS,DEMOROSE",
                    manager: "Okere Christian",
                    number: "2347055792627",
                    address: "106 old ojo road, Agboju, Amuwo odofin Lagos"
                },
                {
                    "id": 27,
                    depot: "LAGOS,EJIGBO",
                    manager: "Ejigbo Manager",
                    number: "2348056697005",
                    address: "106 Egbe Road, By Ilepo Bus stop, Ejigbo"
                },
                {
                    "id": 28,
                    depot: "LAGOS,IBAFO",
                    manager: "Ibafo Manager ",
                    number: "08056697049",
                    address: "Ibafo"
                },
                {
                    "id": 29,
                    depot: "LAGOS,IKORODU",
                    manager: "Ikorodu Manager",
                    number: "08056697002",
                    address: "9 Sagamu Road, Ikorodu"
                },
                {
                    "id": 30,
                    depot: "LAGOS,JIBOWU",
                    manager: "Ikechukwu Asogwa",
                    number: "08150461827",
                    address: "Jibowu"
                },
                {
                    "id": 31,
                    depot: "LAGOS,MAZA-MAZA",
                    manager: "Maza-Maza Manager",
                    number: "07055792627",
                    address: "23 bagegry expressway old ojo road, Mazamza"
                },
                {
                    "id": 32,
                    depot: "LAGOS,OJOTA",
                    manager: "Ojota Manager",
                    number: "2348150461820",
                    address:
                        "Flyover Bridge, Ketu Road, Beside Biode Garage, Ojota"
                },
                {
                    "id": 33,
                    depot: "LAGOS,OJUELEGBA",
                    manager: "Ojuelegba Manager",
                    number: "08055091827",
                    address: "Ojuelegba"
                },
                {
                    "id": 34,
                    depot: "LAGOS,ORILE IGANMU",
                    manager: "Orile Manager",
                    number: "2348055091826",
                    address: "Orile Iganmu"
                },
                {
                    "id": 35,
                    depot: "LAGOS,OSHODI",
                    manager: "Oshodi Manager",
                    number: "2348056697095",
                    address: "Opp Charity Bus Stop Oshodi"
                },
                {
                    "id": 36,
                    depot: "MINNA",
                    manager: "Odo Fimber",
                    number: "08056697027",
                    address:
                        "David Mark Road, Opposite INEC Office, Minna, Niger"
                },
                {
                    "id": 37,
                    depot: "NNEWI",
                    manager: "Nnewi Manager",
                    number: "08056697009",
                    address: "Opposite Kubwa village Market, Kubwa, Abuja"
                },
                {
                    "id": 38,
                    depot: "NSUKKA",
                    manager: "Nsukka Manager",
                    number: "08055091817",
                    address: "Nsukka"
                },
                {
                    "id": 39,
                    depot: "OBOLLO AFOR",
                    manager: "Obollo-Afor Manager",
                    number: "08055091819",
                    address: "Obollo Afor"
                },
                {
                    "id": 40,
                    depot: "ONITSHA",
                    manager: "Onitsha Supervisor",
                    number: "07055792622",
                    address: "Default Location"
                },
                {
                    "id": 41,
                    depot: "OWERRI",
                    manager: "Owerri Manager",
                    number: "08055091824",
                    address: ""
                },
                {
                    "id": 42,
                    depot: "PORTHARCOURT",
                    manager: "PortHarcourt Manager",
                    number: "08055091820",
                    address: "Port Harcourt"
                },
                {
                    "id": 43,
                    depot: "UMUAHIA",
                    manager: "Umuahia Manager",
                    number: "08055091821",
                    address: "Umuahia"
                },
                {
                    "id": 44,
                    depot: "UYO",
                    manager: "Uyo Manager",
                    number: "2348012345678",
                    address: "Uyo"
                },
                {
                    "id": 45,
                    depot: "YENEGOA",
                    manager: "Yenegoa Manager",
                    number: "08055091855",
                    address: "Yenegoa"
                }
            ],
            destination_away: [
                {
                    "id": 1,
                    depot: "ABA",
                    manager: "Aba Manager",
                    number: "08055091828",
                    address: "Aba"
                },
                {
                    "id": 2,
                    depot: "ABAKALIKI",
                    manager: "Abakaliki Manager",
                    number: "08055091816",
                    address: "Abakaliki"
                },
                {
                    "id": 3,
                    depot: "ABUJA, MARARABA",
                    manager: "Patience Ozuluigbo",
                    number: "08055091822",
                    address: "By last Bus stop, Keffi Road"
                },
                {
                    "id": 4,
                    depot: "ABUJA,BWARI",
                    manager: "Bwari Manager",
                    number: "08056697034",
                    address: "sahagari Road, Opposite Market"
                },
                {
                    "id": 5,
                    depot: "ABUJA,GWAGWALADA",
                    manager: "Akor james",
                    number: "08055091833",
                    address: "Opposite Brifina Hotel, Gwagwalada, Abuja"
                },
                {
                    "id": 6,
                    depot: "ABUJA,KUBWA",
                    manager: "Kubwa Manager",
                    number: "08055091830",
                    address: "Kubwa"
                },
                {
                    "id": 7,
                    depot: "ABUJA,KUJE",
                    manager: "Nweke Celestine",
                    number: "08055091858",
                    address:
                        "Gwagwalada Road, Near Secretariat Junction, Kuje, Abuja."
                },
                {
                    "id": 9,
                    depot: "ABUJA,UTAKO",
                    manager: "Ugwuaku chinelo",
                    number: "08055091829",
                    address: "39 Ajose Adeogun Street, Utako, Fct, Abuja"
                },
                {
                    "id": 10,
                    depot: "ABUJA,ZUBA",
                    manager: "Okpe Uchenna",
                    number: "08055091831",
                    address: "Zuba"
                },
                {
                    "id": 11,
                    depot: "AFIKPO",
                    manager: "Afikpo Manager",
                    number: "07055792617",
                    address: "Afikpo"
                },
                {
                    "id": 12,
                    depot: "AKURE",
                    manager: "Akure Manager",
                    number: "08056697069",
                    address: "Akure"
                },
                {
                    "id": 13,
                    depot: "BENIN",
                    manager: "Benin Manager",
                    number: "08059041620",
                    address:
                        "No.117, Akpakpava Road by 2nd Junction, Benin City"
                },
                {
                    "id": 14,
                    depot: "CALABAR",
                    manager: "Calabar Manager",
                    number: "08055091834",
                    address: "Calabar"
                },
                {
                    "id": 15,
                    depot: "ENUGU",
                    manager: "Defualt Name",
                    number: "2348012345678",
                    address: "Default Location"
                },
                {
                    "id": 16,
                    depot: "ENUGU,ABAKPA",
                    manager: "Abakpa Manager",
                    number: "08056697088",
                    address: "Abakpa "
                },
                {
                    "id": 17,
                    depot: "ENUGU,GARKI",
                    manager: "Gariki Supervisor",
                    number: "07055794026",
                    address: "Opposite Garki Market, Enugu"
                },
                {
                    "id": 18,
                    depot: "ENUGU-EZIKE",
                    manager: "Enugu-Ezike Manager",
                    number: "08055091832",
                    address: "Enugu-Ezike"
                },
                {
                    "id": 19,
                    depot: "IBADAN",
                    manager: "Ibadan Manager",
                    number: "08055091851",
                    address: "Ibadan"
                },
                {
                    "id": 20,
                    depot: "IKOM",
                    manager: "Ikom Manager",
                    number: "08150461825",
                    address: "Ikom"
                },
                {
                    "id": 21,
                    depot: "ILORIN",
                    manager: "Illorin Manager",
                    number: "08055091849",
                    address: "Illorin"
                },
                {
                    "id": 22,
                    depot: "JOS",
                    manager: "Jos Manager",
                    number: "08055091842",
                    address: ""
                },
                {
                    "id": 23,
                    depot: "KADUNA",
                    manager: "Asogwa Chinedu",
                    number: "09055997741",
                    address: "Kaduna"
                },
                {
                    "id": 24,
                    depot: "LAGOS,AJAH",
                    manager: "Ajah Manager",
                    number: "07055792630",
                    address: "Ajiwe, Opp. Michael & Solomon House, Lagos State"
                },
                {
                    "id": 25,
                    depot: "LAGOS,AJEGUNLE",
                    manager: "Ajegunle Manager",
                    number: "08056697070",
                    address: "No 6 Achakpo Street Ajegunle, lagos"
                },
                {
                    "id": 26,
                    depot: "LAGOS,DEMOROSE",
                    manager: "Okere Christian",
                    number: "2347055792627",
                    address: "106 old ojo road, Agboju, Amuwo odofin Lagos"
                },
                {
                    "id": 27,
                    depot: "LAGOS,EJIGBO",
                    manager: "Ejigbo Manager",
                    number: "2348056697005",
                    address: "106 Egbe Road, By Ilepo Bus stop, Ejigbo"
                },
                {
                    "id": 28,
                    depot: "LAGOS,IBAFO",
                    manager: "Ibafo Manager ",
                    number: "08056697049",
                    address: "Ibafo"
                },
                {
                    "id": 29,
                    depot: "LAGOS,IKORODU",
                    manager: "Ikorodu Manager",
                    number: "08056697002",
                    address: "9 Sagamu Road, Ikorodu"
                },
                {
                    "id": 30,
                    depot: "LAGOS,JIBOWU",
                    manager: "Ikechukwu Asogwa",
                    number: "08150461827",
                    address: "Jibowu"
                },
                {
                    "id": 31,
                    depot: "LAGOS,MAZA-MAZA",
                    manager: "Maza-Maza Manager",
                    number: "07055792627",
                    address: "23 bagegry expressway old ojo road, Mazamza"
                },
                {
                    "id": 32,
                    depot: "LAGOS,OJOTA",
                    manager: "Ojota Manager",
                    number: "2348150461820",
                    address:
                        "Flyover Bridge, Ketu Road, Beside Biode Garage, Ojota"
                },
                {
                    "id": 33,
                    depot: "LAGOS,OJUELEGBA",
                    manager: "Ojuelegba Manager",
                    number: "08055091827",
                    address: "Ojuelegba"
                },
                {
                    "id": 34,
                    depot: "LAGOS,ORILE IGANMU",
                    manager: "Orile Manager",
                    number: "2348055091826",
                    address: "Orile Iganmu"
                },
                {
                    "id": 35,
                    depot: "LAGOS,OSHODI",
                    manager: "Oshodi Manager",
                    number: "2348056697095",
                    address: "Opp Charity Bus Stop Oshodi"
                },
                {
                    "id": 36,
                    depot: "MINNA",
                    manager: "Odo Fimber",
                    number: "08056697027",
                    address:
                        "David Mark Road, Opposite INEC Office, Minna, Niger"
                },
                {
                    "id": 37,
                    depot: "NNEWI",
                    manager: "Nnewi Manager",
                    number: "08056697009",
                    address: "Opposite Kubwa village Market, Kubwa, Abuja"
                },
                {
                    "id": 38,
                    depot: "NSUKKA",
                    manager: "Nsukka Manager",
                    number: "08055091817",
                    address: "Nsukka"
                },
                {
                    "id": 39,
                    depot: "OBOLLO AFOR",
                    manager: "Obollo-Afor Manager",
                    number: "08055091819",
                    address: "Obollo Afor"
                },
                {
                    "id": 40,
                    depot: "ONITSHA",
                    manager: "Onitsha Supervisor",
                    number: "07055792622",
                    address: "Default Location"
                },
                {
                    "id": 41,
                    depot: "OWERRI",
                    manager: "Owerri Manager",
                    number: "08055091824",
                    address: ""
                },
                {
                    "id": 42,
                    depot: "PORTHARCOURT",
                    manager: "PortHarcourt Manager",
                    number: "08055091820",
                    address: "Port Harcourt"
                },
                {
                    "id": 43,
                    depot: "UMUAHIA",
                    manager: "Umuahia Manager",
                    number: "08055091821",
                    address: "Umuahia"
                },
                {
                    "id": 44,
                    depot: "UYO",
                    manager: "Uyo Manager",
                    number: "2348012345678",
                    address: "Uyo"
                },
                {
                    "id": 45,
                    depot: "YENEGOA",
                    manager: "Yenegoa Manager",
                    number: "08055091855",
                    address: "Yenegoa"
                }
            ],
            arrival: [],
            arrival_away: [],
            fields: {
                ticket_type: "oneway",
                dep_date: "",
                no_of_passenger: 1,
                dep_station: '',
                dep_arrival_station: '',
                return_station: '',
                return_arrival_station: ''
            }
        };
    },
    methods: {
        submit() {
            localStorage.setItem("search", JSON.stringify(this.fields));
            this.$emit("vehicle-option", this.fields.ticket_type);
            // if (this.validateData()) {
            // }
        },
        setArrival(val) {
            this.arrival = this.destination.filter(item => item.depot !== val)
        },
        setArrivalAway(val) {
            this.arrival_away = this.destination_away.filter(item => item.depot !== val)
        },
        validateData() {
            // if(this.fields.dep_date) {
            if (this.fields.dep_station) {
                if (this.fields.dep_arrival_station) {
                    if (this.fields.no_of_passenger) {
                        if (this.fields.ticket_type == "return") {
                            // if(this.fields.return_date) {
                            if (this.fields.return_station) {
                                if (this.fields.return_arrival_station) {
                                    return true;
                                } else {
                                    alert("Provide return arrival station");
                                }
                            } else {
                                alert("Provide return station");
                            }
                            // } else {
                            //     alert('Provide return date')
                            // }
                        } else {
                            // for one way trip only
                            return true;
                        }
                    } else {
                        alert("Provide no of passenger");
                    }
                } else {
                    alert("Provide departure arrival station");
                }
            } else {
                alert("Provide departure station");
            }
            // } else {
            //     alert('Provide departure date')
            // }
        }
    }
};
</script>
