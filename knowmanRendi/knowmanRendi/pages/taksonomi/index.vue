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
            <v-text-field
            solo
            outlined
            max-height="200"
            class="mt-4"
            placeholder="Search..."
            append-icon="mdi-magnify"
            height="75"
            style="border-radius: 20px;"
            >   
            </v-text-field> 
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
                        <v-img :src="require('~/assets/images/icon/a04a.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption">Kendaraan Khusus</p>
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
                    <div class="mx-auto">
                        <v-img :src="require('~/assets/images/icon/a04j.png')" max-width="250" max-height="250"></v-img>
                        <p class="grey--text text-center font-weight-bold caption" style="width: 100px;">Peralatan Fasilitas Pangkalan</p>
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
    }
</script>