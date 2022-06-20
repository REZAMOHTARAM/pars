<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Subsetbunch;
use Illuminate\Http\Request;

class SubSetBunchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            $subsetbunches = Subsetbunch::where('subbunch_id', $request->all())->paginate(20);
            return view('admin.subsetbunches.all', compact('subsetbunches'));
        }
        $subsetbunches = Subsetbunch::where('subbunch_id', $request->all())->paginate(20);
        return view('admin.subsetbunches.all', compact('subsetbunches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.subsetbunches.create' , compact('request'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'subbunch_id' => ['required', 'string', 'max:255'],
        ]);

        $subsetbunches = Subsetbunch::create([
            'name' => $data['name'],
            'subbunch_id' => $data['subbunch_id'],
        ]);

        return redirect(route('admin.bunches.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Subsetbunch $subsetbunch)
    {
        return view('admin.subsetbunches.edit' , compact('subsetbunch'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Subsetbunch $subsetbunch)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $subsetbunch->update($data);

        return redirect(route('admin.bunches.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Subsetbunch $subsetbunch)
    {
        $subsetbunch->delete();
        return back();
    }
}
