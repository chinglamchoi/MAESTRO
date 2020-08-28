<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Level;
use App\Submission;

class LevelsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $levels = Level::orderBy($request->input('order1', 'id'),$request->input('order2', 'asc'))->paginate(10);
        return view('levels.index')->with('levels', $levels);
    }

    public function show($id)
    {
        $level = Level::find($id);
        return view('levels.start')->with('level', $level);
    }

    public function start($id)
    {
        $level = Level::find($id);
        $user = auth()->user();
        $sub = new Submission;
        $sub->user_id = $user->id;
        $sub->level_id = $id;
        $sub->score = 0;
        $sub->save();
        return view('levels.tfjs')->with('sub', $sub);
    }

    public function done(Request $request)
    {
        $sub = Submission::find($request->input('sub'));
        if($sub->user_id != auth()->user()->id){
            return redirect('/levels')->with('error', 'Access Denied');
        }
        $sub->score = $request->input('score');
        $sub->save();
        return view('levels.done')->with('sub', $sub);
    }

    public function stats()
    {
        $user = auth()->user();
        $levels = Level::paginate(50);
        return view('levels.stats')->with('levels', $levels);
    }
}
