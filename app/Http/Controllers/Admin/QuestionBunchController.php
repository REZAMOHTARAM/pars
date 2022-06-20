<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Questionbunch;
use Illuminate\Http\Request;

class QuestionBunchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            $questionbunches = Questionbunch::where('subsetbunch_id', $request->all())->paginate(20);
            return view('admin.questionbunches.all', compact('questionbunches'));
        }
        $questionbunches = Questionbunch::where('subbunch_id', $request->all())->paginate(20);
        return view('admin.questionbunches.all', compact('questionbunches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questionbunches.create');
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
            'subsetbunch_id' => ['required', 'string', 'max:255'],
        ]);

        $questionbunch = Questionbunch::create([
            'name' => $data['name'],
            'subsetbunch_id' => $data['subsetbunch_id'],
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
    public function edit(Questionbunch $questionbunch)
    {
        return view('admin.questionbunches.edit', compact('questionbunch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Questionbunch $questionbunch)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $questionbunch->update($data);

        return redirect(route('admin.bunches.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Questionbunch $questionbunch)
    {
        $questionbunch->delete();
        return back();
    }
}
