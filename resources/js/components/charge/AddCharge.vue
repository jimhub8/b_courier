<template>
<v-layout row justify-center>
    <v-dialog v-model="openAddRequest" persistent max-width="500px">
        <v-card>
            <v-card-title fixed>
                <span class="headline">Add Charges</span>
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
                                        <!-- <v-select :items="AllTowns" v-model="schedule" label="Select Town" single-line item-text="town_name" item-value="id" return-object persistent-hint></v-select> -->
                                        <el-select v-model="form.town_name" placeholder="Select town" filterable clearable>
                                            <el-option v-for="item in AllTowns" :key="item.id" :label="item.town_name" :value="item.town_name">
                                            </el-option>
                                        </el-select>
                                    </v-flex>
                                    <v-flex xs12 sm6>
                                        <v-text-field v-model="form.charges" color="blue darken-2" label="Charges" required></v-text-field>
                                        <small class="has-text-danger" v-if="errors.charges">{{ errors.charges[0] }}</small>
                                    </v-flex>
                                    <v-flex xs12 sm6>
                                        <v-text-field v-model="getVat" :disabled="disabled" color="blue darken-2" label="VAT" required></v-text-field>
                                        <!-- <small class="has-text-danger" v-if="errors.vat">{{ errors.vat[0] }}</small> -->
                                    </v-flex>
                                    <v-flex xs12 sm6>
                                        <v-text-field v-model="getTotal" :disabled="disabled" color="blue darken-2" label="Total" required></v-text-field>
                                        <!-- <small class="has-text-danger" v-if="errors.total">{{ errors.total[0] }}</small> -->
                                    </v-flex>
                                </v-layout>
                            </v-container>
                            <v-card-actions>
                                <v-btn flat @click="resetForm">reset</v-btn>
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
    props: ['openAddRequest'],
    components: {},
    data() {
        const defaultForm = Object.freeze({
            charges: '',
            vat: '',
            total: '',
        })
        return {
            errors: {},
            schedule: [],
            defaultForm,
            randomNumber: '',
            loading: false,
            disabled: true,
            form: Object.assign({}, defaultForm),
            rules: {
                name: [val => (val || '').length > 0 || 'This field is required']
            },
            AllTowns: [],
        }
    },
    methods: {
        save() {
            this.loading = true
            axios.post('/charges', this.$data.form).
            then((response) => {
                    this.loading = false
                    console.log(response);
                    // this.close;
                    // this.resetForm();
                    this.$emit('alertRequest');
                    eventBus.$emit('RefChargeEvent')
                    this.$parent.AllCharges.push(response.data)
                })
                .catch((error) => {
                    this.loading = false
                    // this.errors = error.response.data.errors
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
    computed: {
        getVat() {
            return parseInt(this.form.charges) * parseFloat(0.16)
        },
        getTotal() {
            return parseFloat(this.getVat) + parseInt(this.form.charges)
            // parseFloat
        }
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
}
</script>
