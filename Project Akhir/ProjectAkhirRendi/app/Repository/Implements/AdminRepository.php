<?php 

    namespace App\Repository\Implements;

use App\Helper\CreateLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Repository\Task\TaskRepository;

    class AdminRepository implements TaskRepository
    {
        public function createTask(Request $request){
            $user = new User;
            $user->name     = $request->name;
            $user->email    = $request->email;
            $user->password = Hash::make($request->password);
            $user->isAdmin  = 1;
            $user->save();

            CreateLog::createLogActivity("Created user ".$request->email);
            return;
            
        }
        public function updateTask(Request $request, string $id){

                $checkEmail = User::where('id', $id)->value('email');
                $user = User::find($id);
                if($request->email == $checkEmail){
                    $user->name     = $request->name;
                    $user->email    = $request->email;
                    $user->password = ($request->password != null) ? Hash::make($request->password) : $user->password;
                    $user->isAdmin  = 1;
                    $user->save();
                    
                    CreateLog::createLogActivity("Updated user ".$user->email." data");
                    return;
                }else
                {
                    return "Email already taken!";
                }
            
        }
        
        public function deleteTask(string $id){
            $user = User::find($id);
            $user->delete();
            CreateLog::createLogActivity("Deleted user ".$user->email);
            return;
        }
    }