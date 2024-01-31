<template>
    <v-app>
        <v-app-bar
        class="white mb-16"
        elevation ="0"
        >
                <v-img :src="require('~/assets/00b.png')" max-height="60"
                    max-width="130"> </v-img>
                <v-spacer />
                <nuxt-link to="/taksonomi" class="grey--text font-weight-bold text-decoration-none">Taksonomi</nuxt-link>
                <nuxt-link to="/forum" class="grey--text mx-4 font-weight-bold text-decoration-none">Forum</nuxt-link>
                <nuxt-link to="/faq" class="grey--text me-4 font-weight-bold text-decoration-none">FAQ</nuxt-link>
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
