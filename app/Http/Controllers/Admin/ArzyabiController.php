<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bunch;
use App\Models\Scoure;
use App\Models\Subbunche;
use App\Models\Subsetbunch;
use App\Models\User;
use Illuminate\Http\Request;
use function view;

class ArzyabiController extends Controller
{

    public function index()
    {
        $scoures = Scoure::paginate(20)->unique('user_id', 'bunch_id', 'subbunch_id', 'subsetbunch_id', 'questionbunch_id');

        return view('admin.arzyabi.all', compact('scoures'));
    }

    public function create()
    {

        //$user = auth()->user()->id;
        $user = User::find(1);

//        $bunches = Bunch::query()->select('id')->whereNotIn('id' ,
//            Scoure::query()->select('id')->where('user_id' ,1)->get()->toArray())->get();

//        $bunches = Bunch::with(['subbunches' => function ($query) use ($user) {
//            $query->with('subsetBunches')->whereHas('subsetBunches', function ($query) use ($user) {
//                $query->whereHas('questions', function ($query) use ($user) {
//                    $query->whereHas('scoures', function ($query) use ($user) {
//                        $query->where('user_id','<>',$user->id);
//                    });
//                });
//            });
//        }])->get();

        $bunches = Bunch::all();

        return view('admin.arzyabi.create', compact('bunches'));
    }

    public function store(Request $request)
    {
        // validation nemikonam hartor khodetoon khastin anjam bedin
        # validation request todo


        $data = [
            'user_id' => auth()->user()->id,
            'bunch_id' => $request->input('bunch_id'),
            'subbunch_id' => $request->input('subbunch_id'),
            'subsetbunch_id' => $request->input('subsetbunch_id'),
        ];

        foreach ($request->input('question_ids') as $key => $question_id) {
            $data['questionbunch_id'] = $question_id;
            $data['scoure'] = $request->input('scoures')[$key];


            $scoure = Scoure::create($data);

//            if($scoure instanceof Scoure)
//                continue;   ( ziad lazem nis mahze ehtiat inaro mizaran  )


        }

        return redirect()->back();

    }

    public function edit(User $user, Bunch $bunch, Scoure $scoure)
    {
        $bunches = Bunch::all();
        return view('admin.arzyabi.edit', compact('bunches'));
    }


}
