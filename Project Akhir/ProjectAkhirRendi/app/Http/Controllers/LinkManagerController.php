<?php

namespace App\Http\Controllers;

use App\Helper\CreateLog;
use App\Models\Link;
use App\Repository\Implements\LinkRepository;
use Illuminate\Http\Request;

class LinkManagerController extends Controller
{
    public $linkRepository;

    public function __construct(LinkRepository $linkRepository)
    {
        $this->linkRepository = $linkRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Users.CRUD.CreateLink',
        [
            'links'     => 'Links',
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
        $request->validate(['original_link' => 'required|url'], ['original_link' => 'Original link must be in correctly format!']);
        if ($request->password != null) $request->validate(['password' => 'required|min:4'], ['password' => 'Minimum length for password is 4']);
        if ($request->short_link != null) $request->validate(['short_link' => 'required|min:5|regex:/^\S*$/u'], ['short_link' => 'Minimum length for short link is 5 and space not allowed or short link already exist!']);

        $procces = $this->linkRepository->createTask($request);
        if ($procces == null) {
            return redirect('/links');
        }
        else
        {
            return back()->with('error', $procces);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $links = Link::whereRaw('BINARY short_link = ?', [$id])->get();;
        return view('Users.CRUD.UpdateLink',
        [
            'links'     => 'Links',
            'dataLink'  => $links
        ]);
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
        $request->validate(['original_link' => 'required|url'], ['original_link' => 'Original link must be in correctly format!']);
        if ($request->password != null) $request->validate(['password' => 'required|min:4'], ['password' => 'Minimum length for password is 4']);
        if ($request->short_link != null) $request->validate(['short_link' => 'required|min:5|regex:/^\S*$/u'], ['short_link' => 'Minimum length for short link is 5 and space not allowed or short link already exist!']);

        $procces = $this->linkRepository->updateTask($request, $id);
        if ($procces == null) {
            return redirect('/links');
        }
        else
        {
            return back()->with('error', $procces);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $link = Link::find($id);
        $this->linkRepository->deleteTask($link->id);
        CreateLog::createLogActivity("Deleted short link ".url('/l='). $link->short_link);
        return back();
    }
}
