<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $missing = \App\MissingPeople::all();
        $seen = \App\SightedPeople::all();
        $questions = \App\Question::all();
        return view('home', compact('missing', 'seen', 'questions'));
    }

    function deleteMissing($id){
        \App\MissingPeople::destroy($id);
        return redirect('/home');
    }

    function deleteSighted($id){
        \App\SightedPeople::destroy($id);
        return redirect('/home');
    }

    function search(Request $request){
        $query = $request->term;
        // dd($request);
        $results = \App\MissingPeople::where('name', 'LIKE', '%' . $query . '%')
                                    ->orWhere('age', 'LIKE', '%' . $query . '%')
                                    ->orWhere('gender', 'LIKE', '%' . $query . '%')
                                    ->orWhere('nid', 'LIKE', '%' . $query . '%')
                                    ->orWhere('father', 'LIKE', '%' . $query . '%')
                                    ->orWhere('mother', 'LIKE', '%' . $query . '%')
                                    ->orWhere('area', 'LIKE', '%' . $query . '%')
                                    ->orWhere('clothes', 'LIKE', '%' . $query . '%')
                                    ->orWhere('description', 'LIKE', '%' . $query . '%')
                                    ->get();
        return view('search', compact('results'));
    }
}
