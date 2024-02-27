import { defineStore } from "pinia";
export const useTodosStore = defineStore('todos', {
    state:() => ({
        todos: []
    }),
    actions:{
        async fetchTodos(){
           const { data } = await useFetch("https://newsapi.org/v2/everything?q=tesla&from=2024-01-12&sortBy=publishedAt&apiKey=a3ce61ca73334a0986f4f0cbdcca4adb",{
           })
           if (data.value) {
                this.todos = data.value;
           }
        },
    }
});