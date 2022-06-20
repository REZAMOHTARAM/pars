<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bunch;
use App\Models\Scoure;
use App\Models\Subbunche;
use App\Models\Subsetbunch;
use Illuminate\Http\Request;
use function view;

class ArzyabiControllerOld extends Controller
{

    public function index()
    {

        $bunches = Bunch::all();

        return view('admin.arzyabi.all', compact('bunches'));
    }


    public function create(Request $request, Bunch $bunch)
    {
        $bunche = Bunch::all();
        return view('admin.arzyabi.create', compact('bunche'));
    }


    public function store(Request $request, Scoure $scoure, Bunch $bunch)
    {

        dd($request->all());

        $data = $request->validate([
            'bunch_id' => ['required', 'array'],
            'subbunch_id' => ['required', 'array'],
            'subsetbunch_id' => ['required', 'array'],
            'questionbunch_id' => ['required', 'array'],
            'scoure' => ['required', 'array'],
        ]);

        $scoure = Scoure::create(serialize($data));


        if ($scoure instanceof Scoure)
            return redirect()->back()->with(['created.success' => 'عملیات با موفقیت انجام شد']);
        return redirect()->back()->with(['created.failed' => 'Inserting Error !']);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
