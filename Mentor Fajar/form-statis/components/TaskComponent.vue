<template>
    <v-row :class="`my-1 rounded-xl ${task.done ? 'blue darken-4' : 'purple darken-3'}`">
        <v-col cols="10">
            <div :class="`${task.done ? 'text-decoration-line-through' : ''}`">
                <h3 class="text-center">{{ task.content }}</h3>
            </div>
        </v-col>
        <v-col cols="2" class="d-flex justify-end">
            <v-btn class="green mr-2" @click="toggleDone">{{ task.done ? 'Undo' : 'Done' }}</v-btn>
            <v-btn class="red" @click="toggleDelete">Delete</v-btn>
        </v-col>
    </v-row>
</template>

<script>
export default {
    name:'TaskComponent',
    props:['task'],
    methods:{
        toggleDone(task){
            this.$store.commit('TOGGLE_TASK', this.task)
        },
        toggleDelete(task){
            this.$store.commit('REMOVE_TASK', this.task)
        },
    }
}
</script>

<style>

</style>