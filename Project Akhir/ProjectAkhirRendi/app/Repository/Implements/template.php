<?php 

    namespace App\Repository\Implements;
    use App\Repository\Task\TaskRepository;
    use Illuminate\Http\Request;

    class AdminRepository implements TaskRepository
    {
        public function createTask(Request $request){
            
        }
        public function updateTask(Request $request, string $id){

        }
        public function deleteTask(string $id){

        }
    }