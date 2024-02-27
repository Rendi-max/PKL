<template>
    <div >
        <div class="d-flex">
            <div class="">
                <SideComponent />
            </div>
            <div class="">
                <v-app-bar
                elevation="4"
                width="1060"
                class="purple darken-4"
                ></v-app-bar>

                <div class=" pa-10">
                    <v-card
                    class="purple darken-4 py-4 px-10"
                    height="500"
                    >
                    <h2 class="mb-2">My Activity</h2>
                        <form action="">
                            <v-text-field
                            v-model="newTask"
                            class="white--text"
                            outlined
                            placeholder="Add a new task"
                            >
                            </v-text-field>
                            <div class="d-flex justify-end">
                                <v-btn class="purple accent-2" @click="addTask">Add Task</v-btn>
                            </div>
                        </form>
                        
                        <v-divider class="my-2"></v-divider>
                        <TaskComponent 
                        v-for="(task, i) in $store.state.tasks"
                        :key="i"
                        :task="task"
                        />
                    </v-card>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import SideComponent from '~/components/SideComponent.vue'

export default {
    layout:'TodoLayout',
    component:[
        SideComponent,
    ],
    data:() => ({
        newTask : ''
    }),
    methods:{
        addTask(){
            if(this.newTask){
                this.$store.commit('ADD_TASK', this.newTask)
                this.newTask = ''
            }
        }
    }
}
</script>