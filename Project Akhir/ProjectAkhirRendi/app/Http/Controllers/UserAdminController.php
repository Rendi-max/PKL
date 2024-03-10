<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repository\Implements\AdminRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserAdminController extends Controller
{
    public $adminRepository;

    public function __construct(AdminRepository $adminRepository)
    {
        return $this->adminRepository = $adminRepository;
    }

    private function _auth()
    {
        $userId = Auth::id();
        $user = User::find($userId);
        return $user;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.CRUD.createUser', [
            'links'     => 'user',
            'user'      => $this->_auth(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|min:5',
            'email'     => 'required|unique:users|email',
            'password'  => 'required|min:8',
        ],
        [
            'name'                  => "The field name length must be min 5!",
            'email'                 => "The email address already taken!",
            'password'              => "The field password length must be min 8!",
        ]
    );

        $process = $this->adminRepository->createTask($request);
        if ($process == "") {
            return redirect('usersData');
        }else
        {
            return back("error", $process);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Admin.CRUD.updateUser', [
            'links'     => 'user',
            'user'      => $this->_auth(),
            'data'      => User::where('email', $id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->password != null) {
            $request->validate([
                'name'      => 'required|min:5',
                'email'     => 'required|email',
                'password'  => 'required|min:8',
            ],
            [
                'name'                  => "The field name length must be min 5!",
                'email'                 => "The email address already taken!",
                'password'              => "The field password length must be min 8!",
            ]
        );
        }else{
            $request->validate([
                'name'      => 'required|min:5',
                'email'     => 'required|email',
            ]);
        }
        
        $process = $this->adminRepository->updateTask($request, $id);
        if ($process == "") {
            return redirect('usersData');
        }else
        {
            return back()->with("error", $process);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->adminRepository->deleteTask($id);
        return back()->with('succes', "Data succesfuly deleted :D");
    }
}
