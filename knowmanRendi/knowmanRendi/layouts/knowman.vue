<template>
    <v-app>
        <v-app-bar
        class="white mb-16"
        elevation ="0"
        >
                <v-img :src="require('~/assets/00b.png')" max-height="60"
                    max-width="100"> </v-img>
                <v-spacer />
                <a href="" class="grey--text font-weight-bold text-decoration-none">Taksonomi</a>
                <a href="" class="grey--text font-weight-bold text-decoration-none mx-4">Forum</a>
                <a href="" class="grey--text font-weight-bold text-decoration-none me-4">FAQ</a>
                <v-btn
                elevation="2"
                outlined
                text
                class="orange white--text"
                >Login</v-btn>
        </v-app-bar>
        <v-img :src="require('~/assets/a01.png')" >
            <v-main>
                <Nuxt />
            </v-main>
        </v-img>
    </v-app>
</template>
<script>
    export default{
        name : "knowman"
    }
</script>
