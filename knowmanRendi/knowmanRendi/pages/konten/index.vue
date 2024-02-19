<template>
    <v-row class="px-5">
        <v-col
        cols="3"
        class="px-8 py-5"
        height="auto"
        style="border-radius: 20px;"
        >
            <h2 class="blue-grey--text font-weight-bold mb-3">Pencarian</h2>
            <v-list dense>
                <v-list-item-group
                    v-model="selectedItem"
                    color = "light-green darken-3"
                    background-color="light-green darken-3"
                >
                    <v-list-item
                        v-for="(item, i) in items"
                        :key="i"
                    >
                        <v-list-item-content>
                            <div class="d-flex">
                                <v-list-item-title v-text="item.text" class=" subtitle-2"></v-list-item-title>
                                <h5 v-text="item.no" class=" subtitle-2"></h5>
                            </div>
                        </v-list-item-content>
                    </v-list-item>
                </v-list-item-group>
            </v-list>
        </v-col>
        <v-col
        cols="9"
        class="px-5 py-8"
        >
           <v-row
           justify="center"
           >
                <v-col cols="12" >
                    <v-text-field
                    outlined
                    placeholder="Cari konten logistik..."
                    append-icon="mdi-magnify"
                    style="border-radius: 20px;"
                    >   
                    </v-text-field> 
                </v-col>
                <div class=""
                    v-for="(nav, n) in navigate"
                    :key="n"
                >
                    <div class="d-flex grey--text mx-4 caption">
                        <v-icon>{{ nav.icon }}</v-icon>
                        <h4 class="my-1 mx-1">{{ nav.text }}</h4>
                    </div>
                </div>
            </v-row>
           <div class="my-5"
            
           >
                <v-row
                >
                    <div class="d-flex">
                        <v-img :src="require('~/assets/images/icon/download.jpg')" alt="" class="rounded-xl" max-width="150" max-height="100"></v-img>
                        <v-col
                        cols="10"
                        >
                            <h3 class="blue-grey--text font-weight-bold">Lorem ipsum dolor sit amet.</h3>
                            <p class="subtitle-2 grey--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora perspiciatis culpa, sit maxime deleniti blanditiis?</p>
                            <div class="d-flex">
                                <p class="caption grey--text">Muhammad, 1 jam lalu</p>
                                <v-spacer />
                                <p class="caption grey--text mx-1"><v-icon>mdi-unfold-more-vertical</v-icon></p>
                                <p class="caption grey--text mx-1">1.500</p>
                                <p class="caption grey--text mx-1"><v-icon>mdi-chat</v-icon></p>
                                <p class="caption grey--text mx-1">10</p>
                            </div>
                        </v-col>
                    </div>
                    <div class="d-flex">
                        <v-img :src="require('~/assets/images/icon/download (1).jpg')" alt="" class="rounded-xl" max-width="150" max-height="100"></v-img>
                        <v-col
                        cols="10"
                        >
                            <h3 class="blue-grey--text font-weight-bold">Lorem ipsum dolor sit amet.</h3>
                            <p class="subtitle-2 grey--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora perspiciatis culpa, sit maxime deleniti blanditiis?</p>
                            <div class="d-flex">
                                <p class="caption grey--text">Muhammad, 1 jam lalu</p>
                                <v-spacer />
                                <p class="caption grey--text mx-1"><v-icon>mdi-unfold-more-vertical</v-icon></p>
                                <p class="caption grey--text mx-1">1.500</p>
                                <p class="caption grey--text mx-1"><v-icon>mdi-chat</v-icon></p>
                                <p class="caption grey--text mx-1">10</p>
                            </div>
                        </v-col>
                    </div>
                    <div class="d-flex">
                        <v-img :src="require('~/assets/images/icon/download (2).jpg')" alt="" class="rounded-xl" max-width="150" max-height="100"></v-img>
                        <v-col
                        cols="10"
                        >
                            <h3 class="blue-grey--text font-weight-bold">Lorem ipsum dolor sit amet.</h3>
                            <p class="subtitle-2 grey--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora perspiciatis culpa, sit maxime deleniti blanditiis?</p>
                            <div class="d-flex">
                                <p class="caption grey--text">Muhammad, 1 jam lalu</p>
                                <v-spacer />
                                <p class="caption grey--text mx-1"><v-icon>mdi-unfold-more-vertical</v-icon></p>
                                <p class="caption grey--text mx-1">1.500</p>
                                <p class="caption grey--text mx-1"><v-icon>mdi-chat</v-icon></p>
                                <p class="caption grey--text mx-1">10</p>
                            </div>
                        </v-col>
                    </div>
                    <div class="d-flex">
                        <v-img :src="require('~/assets/images/icon/download (3).jpg')" alt="" class="rounded-xl" max-width="150" max-height="100"></v-img>
                        <v-col
                        cols="10"
                        >
                            <h3 class="blue-grey--text font-weight-bold">Lorem ipsum dolor sit amet.</h3>
                            <p class="subtitle-2 grey--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora perspiciatis culpa, sit maxime deleniti blanditiis?</p>
                            <div class="d-flex">
                                <p class="caption grey--text">Muhammad, 1 jam lalu</p>
                                <v-spacer />
                                <p class="caption grey--text mx-1"><v-icon>mdi-unfold-more-vertical</v-icon></p>
                                <p class="caption grey--text mx-1">1.500</p>
                                <p class="caption grey--text mx-1"><v-icon>mdi-chat</v-icon></p>
                                <p class="caption grey--text mx-1">10</p>
                            </div>
                        </v-col>
                    </div>
                    <div class="d-flex">
                        <v-img :src="require('~/assets/images/icon/download (4).jpg')" alt="" class="rounded-xl" max-width="150" max-height="100"></v-img>
                        <v-col
                        cols="10"
                        >
                            <h3 class="blue-grey--text font-weight-bold">Lorem ipsum dolor sit amet.</h3>
                            <p class="subtitle-2 grey--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora perspiciatis culpa, sit maxime deleniti blanditiis?</p>
                            <div class="d-flex">
                                <p class="caption grey--text">Muhammad, 1 jam lalu</p>
                                <v-spacer />
                                <p class="caption grey--text mx-1"><v-icon>mdi-unfold-more-vertical</v-icon></p>
                                <p class="caption grey--text mx-1">1.500</p>
                                <p class="caption grey--text mx-1"><v-icon>mdi-chat</v-icon></p>
                                <p class="caption grey--text mx-1">10</p>
                            </div>
                        </v-col>
                    </div>
                    <div class="d-flex">
                        <v-img :src="require('~/assets/images/icon/download (5).jpg')" alt="" class="rounded-xl" max-width="150" max-height="100"></v-img>
                        <v-col
                        cols="10"
                        >
                            <h3 class="blue-grey--text font-weight-bold">Lorem ipsum dolor sit amet.</h3>
                            <p class="subtitle-2 grey--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora perspiciatis culpa, sit maxime deleniti blanditiis?</p>
                            <div class="d-flex">
                                <p class="caption grey--text">Muhammad, 1 jam lalu</p>
                                <v-spacer />
                                <p class="caption grey--text mx-1"><v-icon>mdi-unfold-more-vertical</v-icon></p>
                                <p class="caption grey--text mx-1">1.500</p>
                                <p class="caption grey--text mx-1"><v-icon>mdi-chat</v-icon></p>
                                <p class="caption grey--text mx-1">10</p>
                            </div>
                        </v-col>
                    </div>
                    <div class="d-flex">
                        <v-img :src="require('~/assets/images/icon/download (6).jpg')" alt="" class="rounded-xl" max-width="150" max-height="100"></v-img>
                        <v-col
                        cols="10"
                        >
                            <h3 class="blue-grey--text font-weight-bold">Lorem ipsum dolor sit amet.</h3>
                            <p class="subtitle-2 grey--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora perspiciatis culpa, sit maxime deleniti blanditiis?</p>
                            <div class="d-flex">
                                <p class="caption grey--text">Muhammad, 1 jam lalu</p>
                                <v-spacer />
                                <p class="caption grey--text mx-1"><v-icon>mdi-unfold-more-vertical</v-icon></p>
                                <p class="caption grey--text mx-1">1.500</p>
                                <p class="caption grey--text mx-1"><v-icon>mdi-chat</v-icon></p>
                                <p class="caption grey--text mx-1">10</p>
                            </div>
                        </v-col>
                    </div>
                </v-row>
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
    layout:'knowman3',
    data: () =>({
        selectedItem : 0,
        items:[
            {text: "Tank Kategori 1", no: "100"},
            {text: "Tank Kategori 2", no: "80"},
            {text: "Tank Kategori 3", no: "50"},
            {text: "Tank Kategori 4", no: "50"},
            {text: "Tank Kategori 5", no: "70"},
            {text: "Tank Kategori 6", no: "10"},
            {text: "Tank Kategori 7", no: "20"},
            {text: "Tank Kategori 8", no: "30"},
            {text: "Tank Kategori 9", no: "10"},
        ],
        navigate:[
            {text: "Semua 1000", icon : "mdi-dots-grid"},
            {text: "Artikel 100", icon : "mdi-message-fast"},
            {text: "Video 100", icon : "mdi-folder-play-outline"},
            {text: "Dokumen 100", icon : "mdi-file-document-outline"},
            {text: "Informasi 100", icon : "mdi-information-variant"},
            {text: "Case Study 100", icon : "mdi-dots-circle"},
        ],
        images:[
            {image:"~/assets/images/icon/download.jpg"},
            {image:"~/assets/images/icon/download (1).jpg"},
            {image:"~/assets/images/icon/download (2).jpg"},
            {image:"~/assets/images/icon/download (3).jpg"},
            {image:"~/assets/images/icon/download (4).jpg"},
            {image:"~/assets/images/icon/download (5).jpg"},
            {image:"~/assets/images/icon/download (6).jpg"},
        ]
    })
}
</script>