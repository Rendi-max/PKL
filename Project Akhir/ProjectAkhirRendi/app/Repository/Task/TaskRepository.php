<?php

    namespace App\Repository\Task;
    use Illuminate\Http\Request;

    interface TaskRepository
    {
        public function createTask(Request $request);
        public function updateTask(Request $request, string $id);
        public function deleteTask(string $id);
    }