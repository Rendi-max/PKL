<template>
    <v-app light>
        <v-img :src="require('~/assets/image/background1.png')" max-height="638" max-width="1320">
            <v-main>
                
                <Nuxt />
            </v-main>
        </v-img>
    </v-app>
</template>
<script>
export default {
    name:'TodoLayout',
    component:[
        
    ]
}
</script>