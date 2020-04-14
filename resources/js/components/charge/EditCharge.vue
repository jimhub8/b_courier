<template>
<v-layout row justify-center>
    <v-dialog v-model="openAddRequest" persistent max-width="500px">
        <v-card v-if="openAddRequest">
            <v-card-title fixed>
                <span class="headline">Edit Charges</span>
                <v-spacer></v-spacer>
                <v-btn icon dark @click="close">
                    <v-icon color="black">close</v-icon>
                </v-btn>
            </v-card-title>
            <v-card-text>
                <v-container grid-list-md>
                    <v-layout wrap>
                        <v-form ref="form" @submit.prevent>
                            <v-container grid-list-xl fluid>
                                <v-layout wrap>
                                    <v-flex xs12 sm6>
                                        <!-- <v-select :items="AllTowns" v-model="charges.town_id" label="Select Town" single-line item-text="town_name" item-value="id" persistent-hint></v-select> -->
                                        <el-select v-model="charges.town_name" placeholder="Select town" filterable clearable>
                                            <el-option v-for="item in AllTowns" :key="item.id" :label="item.town_name" :value="item.town_name">
                                            </el-option>
                                        </el-select>
                                    </v-flex>
                                    <v-flex xs12 sm6>
                                        <v-text-field v-model="charges.charge" color="blue darken-2" label="Charges" required></v-text-field>
                                        <!-- <small class="has-text-danger" v-if="errors.charges">{{ errors.charges[0] }}</small> -->
                                    </v-flex>
                                    <v-flex xs12 sm6>
                                        <v-text-field disabled v-model="getVat" color="blue darken-2" label="VAT" required></v-text-field>
                                        <!-- <small class="has-text-danger" v-if="errors.vat">{{ errors.vat[0] }}</small> -->
                                    </v-flex>
                                    <v-flex xs12 sm6>
                                        <v-text-field disabled v-model="getTotal" color="blue darken-2" label="Total" required></v-text-field>
                                        <!-- <small class="has-text-danger" v-if="errors.total">{{ errors.total[0] }}</small> -->
                                    </v-flex>
                                </v-layout>
                            </v-container>
                            <v-card-actions>
                                <v-btn flat @click="close">Close</v-btn>
                                <v-spacer></v-spacer>
                                <v-btn :disabled="loading" :loading="loading" flat color="primary" @click="save">Submit</v-btn>
                            </v-card-actions>
                        </v-form>
                    </v-layout>
                </v-container>
            </v-card-text>
        </v-card>
    </v-dialog>
</v-layout>
</template>

<script>
export default {
    props: ['openAddRequest', 'charges'],
    components: {},
    data() {
        const defaultForm = Object.freeze({

        })
        return {
            errors: {},
            schedule: [],
            defaultForm,
            randomNumber: '',
            loading: false,
            form: Object.assign({}, defaultForm),
            AllTowns: [],
            rules: {
                name: [val => (val || '').length > 0 || 'This field is required']
            },
        }
    },
    methods: {
        save() {
            this.loading = true
            axios.patch(`/charges/${this.charges.id}`, this.charges).
            then((response) => {
                    this.loading = false
                    console.log(response);
                    // this.close();
                    // this.resetForm();
                    this.$emit('alertRequest');
                    Object.assign(this.$parent.AllCharges[this.$parent.editedIndex], this.$parent.editCharge)
                })
                .catch((error) => {
                    this.loading = false
                    this.errors = error.response.data.errors
                })
        },
        resetForm() {
            this.form = Object.assign({}, this.defaultForm)
            this.$refs.form.reset()
        },
        close() {
            this.$emit('closeRequest')
        },
    },
    mounted() {
        axios.get('/getTowns')
            .then((response) => {
                this.loader = false
                this.AllTowns = response.data
            })
            .catch((error) => {
                this.loader = false
                this.errors = error.response.data.errors
            })
    },
    computed: {
        getVat() {
            return parseInt(this.charges.charges) * parseFloat(0.16)
        },
        getTotal() {
            return parseFloat(this.getVat) + parseInt(this.charges.charges)
            // parseFloat
        }
    },
}
</script>
