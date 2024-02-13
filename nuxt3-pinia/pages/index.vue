<template>
    <div>
    <div v-for="todo in todos.articles" style="border-bottom: 2px solid black;">
        <p>Source name : {{ todo.source.name }}</p>
        <p>Author : {{ todo.author }}</p>
        <p>Title : {{ todo.title }}</p>
        <p>Description : {{ todo.description }}</p>
        <p>Url : <a :href="todo.url">{{ todo.url }}</a></p>
        <img :src="todo.urlToImage" alt="" style="width: 600px; height: 400px;">
        <p>Published At : {{ todo.publishedAt }}</p>
        <p>Content : {{ todo.content }}</p>
    </div>
  </div>
</template>

<script lang="ts" setup>
    import { storeToRefs } from "pinia";
    import { useTodosStore } from '~/store/todo';

    const store = useTodosStore();
    const { fetchTodos } = store;
    const { todos } = storeToRefs(store);

    await fetchTodos();

    
</script>