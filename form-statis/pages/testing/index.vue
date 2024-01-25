<template>
    <v-row>
        <v-card
        elevation="2"
        class="mx-auto my-16 pa-10"
        width="70%"
        height="500"
        >
        <v-form
        ref="form"
        v-model="valid"
        lazy-validation
        >
            <h class="text-h5 font-weight-bold text-decoration-underline">Form Input Data Siswa</h>
            <v-row>
                <v-col
                cols="6"
                >
                    <div class="mt-2">
                        <label for="">Nis Siswa<span class="red--text">*</span></label>
                        <v-text-field
                        v-model="Nis"
                        :rules="nisRules"
                        outlined
                        required
                        type="number"
                        name="NIS"
                        >
                        </v-text-field>
                    </div>
                    <div class="">
                        <label for="">Nama Siswa<span class="red--text">*</span></label>
                        <v-text-field
                        v-model="Name"
                        :rules="nameRules"
                        outlined
                        required
                        name="Name"
                        >
                        </v-text-field>
                    </div>
                    <div class="">
                        <label for="">Kelas Siswa<span class="red--text">*</span></label>
                        <v-autocomplete
                        required
                        :rules="classRules"
                        outlined
                        v-model="Class"
                        :items="items"
                        name="Class"
                        >
                            
                        </v-autocomplete>
                    </div>
                </v-col>
                <v-col cols="6">
                    <div class="mt-2">
                        <label for="">Alamat Siswa<span class="red--text">*</span></label>
                        <v-textarea
                        v-model="Address"
                        :rules="addressRules"
                        outlined
                        required
                        height="165"
                        name="Address"
                        >

                        </v-textarea>
                    </div>
                    <div class="">
                        <label for="">No. Telp Siswa<span class="red--text">*</span></label>
                        <v-text-field
                        v-model="Phone"
                        :rules="phoneRules"
                        outlined
                        required
                        type="number"
                        name="Phone"
                        >
                        </v-text-field>
                    </div>
                </v-col>
            </v-row>
            <div class="d-flex justify-center">
                <v-btn
                elevation="2"
                class="red white--text"
                name="Reset"
                :disabled="resetDisable"
                @click="reset"
                
                >
                Reset
                </v-btn>
                <v-btn
                elevation="2"
                class="orange ms-2 white--text"
                name="Submit"
                :disabled="!valid"
                @click="submit"
                >
                Submit
                </v-btn>
            </div>
        </v-form>
        </v-card>

        <v-card elevation="2"
        class="mx-auto my-16 pa-10 px-16"
        width="70%"
        height="400"
        v-if="submits"
        >
        <h class="text-h5 font-weight-bold text-decoration-underline">Berhasil Menginput Data Siswa</h>
        <v-row>
            <v-col cols="4 mt-3">
                <p class="grey--text font-weight-bold">Nis Siswa</p>
                <p class="grey--text font-weight-bold">Nama Siswa</p>
                <p class="grey--text font-weight-bold">Kelas Siswa</p>
                <p class="grey--text font-weight-bold">Alamat Siswa</p>
                <p class="grey--text font-weight-bold">No. Telp Siswa</p>
               
            </v-col>
            <v-col cols="6 mt-3">
                <p class="font-weight-bold">{{ student.nis }}</p>
                <p class="font-weight-bold">{{ student.name }}</p>
                <p class="font-weight-bold">{{ student.class }}</p>
                <p class="font-weight-bold">{{ student.address }}</p>
                <p class="font-weight-bold">{{ student.phone }}</p>
            </v-col>
        </v-row>
        </v-card>
    </v-row>
</template>
<script>
export default {
    name:"testingIndex",
    layout:'staticForm',
    data:() =>({
        valid:true,
        items: ['X PPLG 1', 'X PPLG 2', 'XI PPLG 1', 'XI PPLG 2', 'XII PPLG 1', 'XII PPLG 2'],
        submits:false,
        Nis:'',
        nisRules:[
            v => !!v || "Mohon isi NIS terlebih dahulu",
        ],
        Class:null,
        classRules:[
            v => !!v || "Mohon pilih Kelas yang sesuai terlebih dahulu",
        ],
        Name:'',
        nameRules:[
            v => !!v || "Mohon isi Nama terlebih dahulu",
            v => (v && v.length <= 10) || "Nama maksimal 10 huruf"
        ],
        Address:'',
        addressRules:[
            v => !!v || "Mohon isi Alamat terlebih dahulu",
        ],
        Phone:'',
        phoneRules:[
            v => !!v || "Mohon isi Nomor Telephone terlebih dahulu",
        ],
        resetDisable : true,
        student:{
            nis : null,
            name : '',
            class : null,
            address : '',
            phone : ''
        }
    }),
    methods:{
        submit(){
            this.submits = true;
            this.resetDisable = false;
            this.student.nis = this.Nis;
            this.student.name = this.Name;
            this.student.class = this.Class;
            this.student.address = this.Address;
            this.student.phone = this.Phone;
            alert("Jadi Njir")
        },
        reset(){
            this.$refs.form.reset();
            this.Nis = "";
            this.Class= null;
            this.Name="";
            this.Address="";
            this.Phone="";
            this.submits = false;
            this.resetDisable = true;
            setTimeout(() => {
                alert('Alamak Kehapus')
            }, 2000);
        }
    }
}
</script>