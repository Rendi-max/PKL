<template>
    <v-app>
        <v-img :src="require('~/assets/a01b.png')">
            <v-app-bar
            class="transparent mb-16"
            elevation ="0"
            
            >
                    <NuxtLink to="knowman">
                        <v-img :src="require('~/assets/00c.png')" max-height="60"
                        max-width="130"> </v-img>
                    </NuxtLink>
                    <v-spacer />
                    <nuxt-link to="/taksonomi" class="grey--text font-weight-bold text-decoration-none">Taksonomi</nuxt-link>
                    <nuxt-link to="/forum" class="grey--text mx-4 font-weight-bold text-decoration-none">Forum</nuxt-link>
                    <nuxt-link to="/faq" class="grey--text me-4 font-weight-bold text-decoration-none">FAQ</nuxt-link>
                    <nuxt-link to="/login" >
                        <v-btn
                        elevation="2"
                        outlined
                        class="orange white--text"
                        >Login</v-btn>
                    </nuxt-link>
            </v-app-bar>
            <v-main>
                <Nuxt />
            </v-main>
        </v-img>
    </v-app>
</template>
<script>
    export default {
        name:'knowman2',
        
    }
   
</script>
<style>

    .nuxt-link-exact-active {
    border-bottom: 10px;
    border-color: gray;
    }

</style>