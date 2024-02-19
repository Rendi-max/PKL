<template>
    <v-app>
        <v-img :src="require('~/assets/a02a.png')" max-height="70">
            <v-app-bar
        class="transparent"
        elevation ="0"
        
        >
                <NuxtLink to="knowman">
                    <v-img :src="require('~/assets/00c.png')" max-height="60"
                    max-width="130"> </v-img>
                </NuxtLink>
                <v-spacer />
                <nuxt-link active-class="black--text" to="/taksonomi" class="grey--text font-weight-bold text-decoration-none">Taksonomi</nuxt-link>
                <nuxt-link active-class="black--text" to="/forum" class="grey--text mx-4 font-weight-bold text-decoration-none">Forum</nuxt-link>
                <nuxt-link active-class="black--text" to="/faq" class="grey--text me-4 font-weight-bold text-decoration-none">FAQ</nuxt-link>
                <nuxt-link active-class="black--text" to="/login" >
                    <v-btn
                    elevation="2"
                    outlined
                    class="orange white--text"
                    >Login</v-btn>
                </nuxt-link>
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