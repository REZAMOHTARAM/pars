<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bunch;
use App\Models\Subbunche;
use http\Exception\BadConversionException;
use Illuminate\Http\Request;

class SubBunchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if ($request) {
    $subbunches = Subbunche::where('bunch_id', $request->all())->paginate(20);
    return view('admin.subbunches.all', compact('subbunches'));
        }
        $subbunches = Subbunche::where('bunch_id', $request->all())->paginate(20);
        return view('admin.subbunches.all', compact('subbunches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.subbunches.create' , compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector|void
     */
    public function store(Request $request , Subbunche $subbunche)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'bunch_id' => ['required', 'string', 'max:255'],
        ]);

        $subbunches = Subbunche::create([
            'name' => $data['name'],
            'bunch_id' => $data['bunch_id'],
        ]);

        return redirect(route('admin.subbunches.index'));
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
    public function edit(Subbunche $subbunch)
    {
        return view('admin.subbunches.edit' , compact('subbunch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function update(Request $request , Subbunche $subbunch)
    {

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $subbunch->update($data);

        return redirect(route('admin.bunches.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Subbunche $subbunch)
    {
        $subbunch->delete();
        return back();
    }

}
