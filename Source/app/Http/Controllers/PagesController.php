<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function tfjs(){
        return view('pages.tfjs');
    }

    public function user($id){
        if(!auth()->user()){
            return redirect('/')->with('error', 'Access Denied');
        }else{
            $user = User::find($id);
            if(!$user){
                return redirect('/'.auth()->user()->id);
            }
            return view('pages.user')->with('user', $user);
        }
    }
    
    public function userabout(Request $request){
        if(!auth()->user()){
            return redirect('/')->with('error', 'Access Denied');
        }else{
            $user = User::find(auth()->user()->id);
            $user->about = $request->input('about');
            $user->save();
            return redirect('/users/'.auth()->user()->id)->with('success', 'About Saved');
        }
    }
}
