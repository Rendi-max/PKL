<template>
    <div class="">
        <div class="mx-auto mb-8" style="width: 400px; margin-top: 175px;">
            <v-img :src="require('~/assets/00a.png')" max-width="400">

            </v-img>
        </div>
        <v-row
        justify="center"
        >
            <div class="col-12">
                <v-col cols="4" class="mx-auto">
                <v-text-field solo outlined color="white" placeholder="Nama Pengguna..." class="rounded-lg rounded-b-0">
                    
                </v-text-field>
                </v-col>
                <v-col cols="4" class="mx-auto" style="margin-top: -55px;">
                <v-text-field solo outlined color="white" placeholder="Sandi..." class="rounded-lg rounded-t-0">
                    
                </v-text-field>
                </v-col>
                <v-col cols="4" class="mx-auto ">
                    <v-btn color="orange" height="50" class="mx-auto rounded-xxl" block dark>Login</v-btn>
                </v-col>
            </div>
        </v-row>
    </div>
</template>
<script>
export default {
    layout:'layoutLogin'
}
</script>