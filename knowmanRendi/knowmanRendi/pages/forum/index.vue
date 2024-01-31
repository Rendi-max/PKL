<template>
    <v-row class="px-5 py-8">
        <v-col
        cols="3"
        class="px-8 py-8"
        height="auto"
        style="border-radius: 20px;"
        >
            <h2 class="blue-grey--text font-weight-bold">Diskusi</h2>
            <p class="grey--text subtitle-2 my-4">Fitur diskusi berfungsi untuk mempermudah pengguna dalam memahami informasi</p>
            <v-btn
            depressed
            color="green"
            style="border-radius: 10px;"
            block
            >
            <p class="white--text my-auto caption">Buat Diskusi Baru</p>
            </v-btn>
        </v-col>
        <v-col
        cols="9"
        class="px-5 py-8"
        >
           <v-row>
                <v-col cols="4 my-4">
                    <div class="d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                        </svg>
                        <p class="grey--text ms-4">Urutkan Berdasarkan</p>
                    </div>
                </v-col>
                <v-col cols="8" >
                    <v-text-field
                    outlined
                    placeholder="Ketikan Sesuatu..."
                    append-icon="mdi-magnify"
                    style="border-radius: 20px;"
                    >   
                    </v-text-field> 
                </v-col>
           </v-row>
           <div class="">
                <h3 class="blue-grey--text font-weight-bold">Dokumen Tidak Muncul</h3>
                <p class="subtitle-2 grey--text">Bagaimana cara memunculkan dokumen?</p>
                <div class="d-flex">
                    <p class="caption grey--text">Muhammad, 1 jam lalu</p>
                    <v-spacer />
                    <p class="caption grey--text mx-1"><v-icon>mdi-unfold-more-vertical</v-icon></p>
                    <p class="caption grey--text mx-1">1.500</p>
                    <p class="caption grey--text mx-1"><v-icon>mdi-chat</v-icon></p>
                    <p class="caption grey--text mx-1">10</p>
                </div>
           </div>
           <div class="">
                <h3 class="blue-grey--text font-weight-bold">Lorem ipsum dolor, sit amet consectetur</h3>
                <p class="subtitle-2 grey--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat expedita laboriosam at, dolore optio quas!</p>
                <div class="d-flex">
                    <p class="caption grey--text">Lina, 1 jam lalu</p>
                    <v-spacer />
                    <p class="caption grey--text mx-1"><v-icon>mdi-unfold-more-vertical</v-icon></p>
                    <p class="caption grey--text mx-1">2.000</p>
                    <p class="caption grey--text mx-1"><v-icon>mdi-chat</v-icon></p>
                    <p class="caption grey--text mx-1">3</p>
                </div>
           </div>
           <div class="">
                <h3 class="blue-grey--text font-weight-bold">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, porro.</h3>
                <p class="subtitle-2 grey--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur recusandae, at fugit minus ab accusamus nemo doloribus saepe corporis quibusdam.</p>
                <div class="d-flex">
                    <p class="caption grey--text">Frina, 1 jam lalu</p>
                    <v-spacer />
                    <p class="caption grey--text mx-1"><v-icon>mdi-unfold-more-vertical</v-icon></p>
                    <p class="caption grey--text mx-1">2.500</p>
                    <p class="caption grey--text mx-1"><v-icon>mdi-chat</v-icon></p>
                    <p class="caption grey--text mx-1">30</p>
                </div>
           </div>
           <div class="">
                <h3 class="blue-grey--text font-weight-bold">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, porro.</h3>
                <p class="subtitle-2 grey--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint veniam fuga sequi? Cupiditate ullam nam explicabo cumque! Illo.</p>
                <div class="d-flex">
                    <p class="caption grey--text">Faisal, 3 jam lalu</p>
                    <v-spacer />
                    <p class="caption grey--text mx-1"><v-icon>mdi-unfold-more-vertical</v-icon></p>
                    <p class="caption grey--text mx-1">500</p>
                    <p class="caption grey--text mx-1"><v-icon>mdi-chat</v-icon></p>
                    <p class="caption grey--text mx-1">999</p>
                </div>
           </div>
           <div class="">
                <h3 class="blue-grey--text font-weight-bold">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, porro.</h3>
                <p class="subtitle-2 grey--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint veniam fuga sequi? Cupiditate ullam nam explicabo cumque! Illo.</p>
                <div class="d-flex">
                    <p class="caption grey--text">Arya, 1 jam lalu</p>
                    <v-spacer />
                    <p class="caption grey--text mx-1"><v-icon>mdi-unfold-more-vertical</v-icon></p>
                    <p class="caption grey--text mx-1">2.500</p>
                    <p class="caption grey--text mx-1"><v-icon>mdi-chat</v-icon></p>
                    <p class="caption grey--text mx-1">30</p>
                </div>
           </div>
           <div class="d-flex mt-4">
            <v-icon>mdi-chevron-left</v-icon>
            <v-btn color="blue-grey mx-2" small dark>1</v-btn>
            <v-btn color=" mx-2" small>2</v-btn>
            <v-btn color=" mx-2" small>3</v-btn>
            <v-btn color=" mx-2" small>4</v-btn>
            <v-btn color=" mx-2" small>5</v-btn>
            <v-icon>mdi-chevron-right</v-icon>
           </div>

        </v-col>
    </v-row>
</template>
<script>
export default {
    layout:'knowman3'
}
</script>