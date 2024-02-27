<template>
    <div class="">
        <v-navigation-drawer
          permanent
          height="700"
          class="purple darken-4"
        >
          <v-list>
            <v-list-item link>
              <v-img :src="require('~/assets/image/user.png')" class="mr-2" max-height="45" max-width="45"></v-img>
              <v-list-item-content>
                <v-list-item-title class="text-h6">
                  Rendi Firman Syah
                </v-list-item-title>
                <v-list-item-subtitle>antihack696@gmail.com</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-list>
  
          <v-divider></v-divider>
  
          <v-list
            nav
            dense
          >
                <v-list-item-group
                    v-model="selectedItem"
                    color="purple lighten-1"  
                >
                    <v-list-item
                    v-for="(item, i) in items"
                    :key="i"
                    >
                        <v-icon>{{ item.icon }}</v-icon>
                        <v-item-content class="ml-2" >{{ item.title }}</v-item-content>
                    </v-list-item>
                </v-list-item-group>
          </v-list>
        </v-navigation-drawer>
    </div>
  </template>
<script>
export default {
    name:'SideComponent',
    data () {
      return {
        selectedItem : 0,
        items: [
          { title: 'Task', icon: 'mdi-checkbox-marked-circle-plus-outline' },
          { title: 'Dashboard', icon: 'mdi-view-dashboard' },
          { title: 'Photos', icon: 'mdi-image' },
          { title: 'About', icon: 'mdi-help-box' },
        ],
      }
    },
}
</script>