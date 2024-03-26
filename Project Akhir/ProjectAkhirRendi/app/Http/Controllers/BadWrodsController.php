<?php

namespace App\Http\Controllers;

use App\Helper\CreateLog;
use App\Models\TextNotAllowed;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BadWrodsController extends Controller
{

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
        return view('Admin.Index.IndexBadwords', [
            'links'     => 'data',
            'user'      => $this->_auth(),
            'badWords'  => TextNotAllowed::latest()->paginate(20) 
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
        $request->validate(['text' => 'required|unique:text_not_alloweds|regex:/^\S*$/u'], ['text' => 'word already exist or text contains space!']);
        $badWords = new TextNotAllowed;
        $badWords->text = $request->text;
        $badWords->save();
        CreateLog::createLogActivity("Add Disabled words ".'"'.$request->text.'"');
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $badWords = TextNotAllowed::find($id);
        $badWords->delete();
        CreateLog::createLogActivity("Deleted words ".'"'.$badWords->text.'"'." from Disabled words");
        return back();
    }
}
