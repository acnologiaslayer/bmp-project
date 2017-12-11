<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('homepage');
});

Route::get('/getinvolved', function () {
	return view('getinvolved');
});

Route::get('/faq', function () {
	return view('faq');
});

Route::get('/report', function () {
	return view('report');
});

Route::get('/sighting', function () {
	return view('sighting');
});

Route::get('/missing', function () {
	return view('missing');
});

Route::get('/missing/search', function () {
	$results = [];
	return view('search', compact('results'));
});

Route::get('/missing/list', function () {
	$people = \App\MissingPeople::all();
	return view('list', compact('people'));
});

Route::get('/missing/{id}', function ($id) {
	$person = \App\MissingPeople::find($id);
	return view('profile', compact('person'));
});

Route::get('/about', function () {
	return view('about');
});

Route::post('/reportMissing', function (Request $req) {
	// dd($req);
	$destinationPath = base_path() . "/public/images";
	File::makeDirectory($destinationPath, $mode = 0777, true, true);
        $fileName = $req->nid.'.' . $req->photo->extension(); // renameing image
        Input::file('photo')->move($destinationPath, $fileName); // uploading file to given path
        \App\MissingPeople::create([
        	'name' => $req->name,
            'nid' => $req->nid,
            'age' => $req->age,
            'gender' => $req->gender,
            'photo' => $fileName,
            'father' => $req->father,
            'mother' => $req->mother,
            'area' => $req->area,
            'missing_since' => $req->missing_since,
            'clothes' => $req->clothes,
            'description' => $req->description
        ]);
        return redirect('/');
    });

Route::post('/reportSighting', function (Request $req) {
	\App\SightedPeople::create($req->all());
	return redirect('/');
});

Route::post('/askQuestion', function (Request $req) {
	\App\Question::create($req->all());
	return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/missing/delete/{id}', 'HomeController@deleteMissing');
Route::get('/sighted/delete/{id}', 'HomeController@deleteSighted');
Route::post('/missing/search', 'HomeController@search');

