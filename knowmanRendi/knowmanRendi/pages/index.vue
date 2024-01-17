<template>
  <div class="">           
                <v-img :src="require('~/assets/00a.png')" max-height="200" max-width="400" class="mx-auto"></v-img>
                
      
                <v-row
                    justify="center"
                >
                <v-col cols="8" >
                    <v-text-field
                    solo
                    max-height="200"
                    class="mt-4"
                    placeholder="Search..."
                    append-icon="mdi-magnify"
                    >   
                    </v-text-field> 
                </v-col>
                </v-row>
          
                <v-row
                   justify="center" 
                   class="justify-evenly"         
                >
                    <p class="grey--text font-weight-bold mx-2 ">Topik Popular</p>
                    <p class="green--text font-weight-bold mx-2 ">Lorem, ipsum.</p>
                    <p class="green--text font-weight-bold mx-2 ">Lorem, ipsum.</p>
                    <p class="green--text font-weight-bold mx-2 ">Lorem, ipsum.</p>        
                </v-row>

            
                <h5 class="grey--text text-center mt-12 mb-4 font-weight-bold">Cari Informasi Sesuai Topik</h5>

                
                <div class="d-flex justify-lg-center " style="justify-content: space;">
                    <v-img :src="require('~/assets/a03a.png')" max-height="100" max-width="100" class="mx-2"></v-img>
                    <v-img :src="require('~/assets/a03b.png')" max-height="100" max-width="100" class="mx-2"></v-img>
                    <v-img :src="require('~/assets/a03c.png')" max-height="100" max-width="100" class="mx-2"></v-img>
                    <v-img :src="require('~/assets/a03d.png')" max-height="100" max-width="100" class="mx-2"></v-img>
                    <v-img :src="require('~/assets/a03e.png')" max-height="100" max-width="100" class="mx-2"></v-img>
                </div>
  </div>
</template>

<script>
export default {
  name: 'IndexPage',
}
</script>
