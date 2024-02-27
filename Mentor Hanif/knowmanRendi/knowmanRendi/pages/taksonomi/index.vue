<template>
    <div
    >
        <v-row
        justify="center"
        >
        <v-col
        cols="8"
        >
            <h3 class="grey--text font-weight-black text-center">Ingin mencari informasi apa hari ini?</h3>
            <NuxtLink class="mt-4 text-decoration-none" to="konten">
                <v-text-field
                solo
                outlined
                max-height="200"
                class="rounded-lg"
                placeholder="Search..."
                append-icon="mdi-magnify"
                height="75"
                
                >   
                </v-text-field> 
            </NuxtLink>
        </v-col>
        </v-row>

        <v-row
        justify="center"
        >
            <v-col
            cols="11"
            >
                <h4 class="grey--text font-wight-bold">Alat Utama</h4>
                <div class="d-flex flex-wrap justify-space-between">
                    <div class="">
                        <v-dialog
                        transition="dialog-bottom-transition"
                        max-width="750"
                        class=""
                        max-height="auto"
                        >
                            <template v-slot:activator = "{on, attrs}">
                                <v-btn
                                    class="my-10"
                                    v-bind="attrs"
                                    v-on="on"
                                    elevation="0"
                                    outlined
                                    style="border:0px"
                                >
                                <div class="">
                                    <v-img :src="require('~/assets/images/icon/a04a.png')" max-width="200" max-height="200"></v-img>
                                    <p class="grey--text text-center font-weight-bold caption">Kendaraan Khusus</p>
                                </div>
                                </v-btn>
                            </template>
                            <template v-slot:default="dialog">
                                <v-card class="">
                                    <div class="d-flex">
                                        <v-img :src="require('~/assets/images/icon/a04a.png')" max-width="150" max-height="150"></v-img>
                                        <div class="my-auto">
                                            <p class="green--text font-weight-bold caption my-0">Kendaraan Khusus</p>
                                            <h2 class="blue-grey--text  font-weight-bold">Kendaraan Khusus</h2>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-space-between flex-wrap px-5 my-0 pb-5">
                                        <v-col cols="6"
                                        v-for="(item, i) in items"
                                        :key="i"
                                        >
                                        <div class="d-flex my-1 light-green lighten-5 rounded-xl"
                                        >
                                            <v-img :src="require('~/assets/images/icon/'+ item.icon)" max-width="60" max-height="40"></v-img>
                                            <h5 class="grey--text text-center subtitle-2 py-3">{{ item.text }}</h5>
                                        </div>
                                        </v-col>
                                    </div>
                                </v-card>
                            </template>
                        </v-dialog>
                    </div>
                    <div class="">
                        <v-img :src="require('~/assets/images/icon/a04b.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption">Senjata</p>
                    </div>
                    <div class="">
                        <v-img :src="require('~/assets/images/icon/a04c.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption">Amunisi</p>
                    </div>
                    <div class="">
                        <v-img :src="require('~/assets/images/icon/a04d.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption">Pesawat Terbang</p>
                    </div>
                    <div class="">
                        <v-img :src="require('~/assets/images/icon/a04e.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption">Alat Berat Khusus</p>
                    </div>
                    <div class="">
                        <v-img :src="require('~/assets/images/icon/a04f.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption" style="width: 100px;">Penjinak Bahan Peledak</p>
                    </div>
                    <div class="">
                        <v-img :src="require('~/assets/images/icon/a04g.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption" style="width: 100px;">Perlengkapan Tempur Perorangan</p>
                    </div>
                    <div class="">
                        <v-img :src="require('~/assets/images/icon/a04h.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption">Radar</p>
                    </div>
                    <div class="">
                        <v-img :src="require('~/assets/images/icon/a04i.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption">Kapal</p>
                    </div>
                </div>
            </v-col>
        </v-row>
        <v-row 
        justify="center"
        >
            <v-col
            cols="11"
            >
            <h4 class="grey--text font-wight-bold">Alat Pendukung</h4>
                <div class="d-flex flex-wrap">
                    <div class="">
                        <v-dialog
                        transition="dialog-bottom-transition"
                        max-width="750"
                        class=""
                        max-height="auto"
                        >
                            <template v-slot:activator = "{on, attrs}">
                                <v-btn
                                    class="my-10"
                                    v-bind="attrs"
                                    v-on="on"
                                    elevation="0"
                                    outlined
                                    style="border:0px"
                                >
                                <div class="mx-auto">
                                    <v-img :src="require('~/assets/images/icon/a04j.png')" max-width="250" max-height="250"></v-img>
                                    <p class="grey--text text-center font-weight-bold caption" style="width: 100px;">Peralatan Fasilitas Pangkalan</p>
                                </div>
                                </v-btn>
                            </template>
                            <template v-slot:default="dialog">
                                <v-card class="">
                                    <div class="d-flex">
                                        <v-img :src="require('~/assets/images/icon/a04j.png')" max-width="150" max-height="150"></v-img>
                                        <div class="my-auto">
                                            <p class="green--text font-weight-bold caption my-0">Alat Pendukung</p>
                                            <h2 class="blue-grey--text  font-weight-bold">Peralatan Fasilitas Pangkalan</h2>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-space-between flex-wrap px-5 my-0 pb-5">
                                        <v-col cols="6"
                                        v-for="(item, i) in item2"
                                        :key="i"
                                        >
                                        <div class="d-flex my-1 light-green lighten-5 rounded-xl"
                                        >
                                            <v-img :src="require('~/assets/images/icon/'+ item.icon)" max-width="60" max-height="40"></v-img>
                                            <h5 class="grey--text text-center subtitle-2 py-3">{{ item.text }}</h5>
                                        </div>
                                        </v-col>
                                    </div>
                                </v-card>
                            </template>
                        </v-dialog>
                    </div>
                    <div class="mx-auto">
                        <v-img :src="require('~/assets/images/icon/a04k.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption" style="width: 100px;">Komunikasi & Navigasi</p>
                    </div>
                    <div class="mx-auto">
                        <v-img :src="require('~/assets/images/icon/a04l.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption" style="width: 100px;">Peratalan Survey & Pemetaan</p>
                    </div>
                    <div class="mx-auto">
                        <v-img :src="require('~/assets/images/icon/a04m.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption" style="width: 100px;">Peralatan Kesehatan Militer</p>
                    </div>
                    <div class="mx-auto">
                        <v-img :src="require('~/assets/images/icon/a04n.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption" style="width: 100px;">Peralatan Laboratorium</p>
                    </div>
                    <div class="mx-auto">
                        <v-img :src="require('~/assets/images/icon/a04o.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption" style="width: 100px;">Peralatan Pendidikan</p>
                    </div>
                    <div class="mx-auto">
                        <v-img :src="require('~/assets/images/icon/a04p.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption" style="width: 100px;">Peralatan Publikasi</p>
                    </div>
                    <div class="mx-auto">
                        <v-img :src="require('~/assets/images/icon/a04q.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption" style="width: 100px;">Kendaraan Atas Air</p>
                    </div>
                </div>
            </v-col>
        </v-row>
    </div>    
    
</template>
<script>
    export default {
        layout:'knowman2',
        name:'taksonomi',
        data: () => ({
            selectedItem:0,
            items:[
                {icon:"c191.svg", text:"Tank"},
                {icon:"c192.svg", text:"Panser"},
                {icon:"c193.svg", text:"Kendaraan Angkut Tank"},
                {icon:"c194.svg", text:"Kendaraan Penarik Meriam"},
                {icon:"c195.svg", text:"Kendaraan Patroli Khusus"},
                {icon:"c196.svg", text:"Truk/ Bagian Dari Truk Tempur"},
                {icon:"c197.svg", text:"Truk/ Bagian Dari Truk Angkut Pasukan"},
                {icon:"c198.svg", text:"Truk/ Bagian Angkut Logistik"},
                {icon:"c199.svg", text:"Truk/ Bagian Ankut Hewan"},
                {icon:"c200.svg", text:"Kendaraan Patroli Beroda Dua"},
                {icon:"c201.svg", text:"Kendaraan Taktis (Rantis)"},
                {icon:"c202.svg", text:"Kendaraan Patroli Beroda Dua"},
                {icon:"c203.svg", text:"Kendaraan Penarik Peluru Kendali"},
                {icon:"c204.svg", text:"Senjata Infanteri Ringan"},
            ],
            item2:[
                {icon:"c205.svg", text:"Peralatan Dock Kapal"},
                {icon:"c206.svg", text:"Peralatan Refuilling Unit"},
                {icon:"c207.svg", text:"Peralatan Flower Meter"},
                {icon:"c208.svg", text:"Peralatan Tambat"},
                {icon:"c209.svg", text:"Peralatan Suport Equipment"},
                {icon:"c210.svg", text:"Runaway Sweeper"},
                {icon:"c211.svg", text:"Peralatan Mateorologi dan Lalu Lintas Udara"},
                {icon:"c212.svg", text:"Flood Light"},
                {icon:"c213.svg", text:"Arresting Barrier"},
                {icon:"c214.svg", text:"Pump"},
                {icon:"c215.svg", text:"Peralatan SAR Militer"},
            ]
        })
    }
</script>