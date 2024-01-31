<template>
    <v-app>
        <v-img :src="require('~/assets/a02a.png')" max-height="70">
            <v-app-bar
        class="transparent"
        elevation ="0"
        
        >
                <v-img :src="require('~/assets/00c.png')" max-height="60"
                    max-width="130"> </v-img>
                <v-spacer />
                <NuxtLink to="/taksonomi" class="grey--text font-weight-bold text-decoration-none">Taksonomi</NuxtLink>
                <NuxtLink to="/forum" class="grey--text mx-4 font-weight-bold text-decoration-none">Forum</NuxtLink>
                <NuxtLink to="/faq" class="grey--text me-4 font-weight-bold text-decoration-none">FAQ</NuxtLink>
    
                <v-btn
                elevation="2"
                outlined
                text
                class="orange white--text"
                >Login</v-btn>
            </v-app-bar>
        </v-img>
        <v-main>
            <Nuxt />
        </v-main>
    </v-app>
</template>
<script>
export default {
    name:'knowman3'
}
</script>