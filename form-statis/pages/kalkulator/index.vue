<template>
    <div class="">
        <v-card
        elevation="2"
        class="mx-auto my-16 pa-10"
        width="50%"
        height="500"
        >
            <v-text-field
            v-model="result"
            label="Bilangan"
            outlined
            disabled
            value=" "
            type="number"
            >
            
            </v-text-field>
            <v-row
            justify="space-between"
            >
                <v-col 
                cols="4">
                    <v-text-field
                        v-model="angka1"
                        outlined
                        disabled
                        type="number"
                        label="Angka 1"
                    >
                    </v-text-field>
                </v-col>
                <v-col
                cols=3>
                    <v-text-field
                    v-model="operator"
                    outlined 
                    disabled
                    label="Operator"
                    >

                    </v-text-field>
                </v-col>
                <v-col
                cols="4">
                    <v-text-field
                        v-model="angka2"
                        outlined
                        disabled
                        type="number"
                        label="Angka 2"
                    >

                    </v-text-field>
                </v-col>
            </v-row>
            <div class="d-flex justify-end">
                <v-btn
                @click="reset()"
                >
                    Reset
                </v-btn>
            </div>
            <div class="d-flex justify-center my-2">
                <v-btn
                class="mx-2"
                @click="result += '1'"
                >
                    1
                </v-btn>
                <v-btn
                class="mx-2"
                @click="result += '2'"
                >
                    2
                </v-btn>
                <v-btn
                class="mx-2"
                @click="result += '3'"
                >
                    3
                </v-btn>
                <v-btn
                class="mx-2"
                @click="operatorKali"
                >
                    X
                </v-btn>
            </div>
            <div class="d-flex justify-center my-2">
                <v-btn
                class="mx-2"
                @click="result += '4'"
                >
                    4
                </v-btn>
                <v-btn
                class="mx-2"
                @click="result += '5'"
                >
                    5
                </v-btn>
                <v-btn
                class="mx-2"
                @click="result += '6'"
                >
                    6
                </v-btn>
                <v-btn
                class="mx-2"
                @click="operatorKurang"
                >
                    -
                </v-btn>
            </div>
            <div class="d-flex justify-center my-2">
                <v-btn
                class="mx-2"
                @click="result += '7'"
                >
                    7
                </v-btn>
                <v-btn
                class="mx-2"
                @click="result += '8'"
                >
                    8
                </v-btn>
                <v-btn
                class="mx-2"
                @click="result += '9'"
                >
                    9
                </v-btn>
                <v-btn
                class="mx-2"
                @click="operatorTambah"
                >
                    +
                </v-btn>
            </div>
            <div class="d-flex justify-center my-2">
                <v-btn
                class="mx-2"
                @click="operatorBagi"
                >
                    %
                </v-btn>
                <v-btn
                class="mx-2"
                @click="result += '0'"
                >
                    0
                </v-btn>
                <v-btn
                class="mx-2"
                @click="btnKoma"
                >
                    ,
                </v-btn>
                <v-btn
                class="mx-2"
                @click="operatorHasil"
                >
                    =
                </v-btn>
            </div>
            <div class="d-flex justify-center">Hasil : {{ hasil }} </div>
        </v-card>
    </div>
</template>

<script>
    export default {
        name:"Kalkulator",
        layout:'KalkulatorLayout',
        data: () =>({
            angka1:0,
            angka2:0,
            operator:null,
            result:0,
            hasil:""
        }),
        methods:{
            reset(){
                this.angka1 = 0;
                this.angka2 = 0;
                this.operator = null;
                this.result = "";
                this.hasil = null;
            },
            operatorKali(){
                this.angka1 = parseInt(this.result);
                this.result = 0;
                this.operator = "kali";
            },
            operatorTambah(){
                this.angka1 = parseInt(this.result);
                this.result = 0;
                this.operator = "tambah";
            },
            operatorKurang(){
                this.angka1 = parseInt(this.result);
                this.result = 0;
                this.operator = "kurang";
            },
            operatorBagi(){
                this.angka1 = parseInt(this.result);
                this.result = 0;
                this.operator = "bagi";
            },
            operatorHasil(){
                this.angka2 = parseInt(this.result);
                this.result = 0;
                if (this.operator === "kali") {
                    this.hasil = parseInt(this.angka1) * parseInt(this.angka2);
                }
                if (this.operator === "tambah") {
                    this.hasil = parseInt(this.angka1) + parseInt(this.angka2);
                }
                if (this.operator === "kurang") {
                    this.hasil = parseInt(this.angka1) - parseInt(this.angka2);
                }
                if (this.operator === "bagi") {
                    this.hasil = parseInt(this.angka1) / parseInt(this.angka2);
                }
            }
        }
    }
</script>