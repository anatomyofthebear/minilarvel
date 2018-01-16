<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Records;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index() {

    	$records = Records::paginate(5);
    	/*dump($records);*/
    	return view("records")->with(['records'=>$records]);
    }

    public function my_records() {

    	$id = Auth::id();

    	$records = Records::where('user_id', $id)->paginate(5);
    	return view("my_records")->with(['records'=>$records]);
    }

    public function update($id) {
    	$record = Records::find($id);
    	return view("update")->with(['record'=>$record]);
    }

    public function update_base(Request $request) {

    	$this->validate($request, [
    		'title'=>'required', 
    		'singer'=>'required', 
    		'count_songs'=>'required|numeric', 
    		'genre'=>'required', 
    		'year'=>'required|numeric'
    	]);
    	$data = [
    		'title'=>$request->title, 
    		'singer'=>$request->singer, 
    		'count_songs'=>$request->count_songs, 
    		'genre'=>$request->genre, 
    		'year'=>$request->year
    	];
    	Records::where('id', $request->id)->update($data);

    	return redirect('/my_records');
    	
    }

    public function delete($id) {
    	$record = Records::find($id);
    	$record->delete();

    	return redirect('/my_records');
    }

    public function add_base(Request $request){
    	$this->validate($request, [
    		'title'=>'required', 
    		'singer'=>'required', 
    		'count_songs'=>'required|numeric', 
    		'genre'=>'required', 
    		'year'=>'required|numeric'
    	]);
    	$record = new Records;
    	$data = [
    		'title'=>$request->title, 
    		'singer'=>$request->singer, 
    		'count_songs'=>$request->count_songs, 
    		'genre'=>$request->genre, 
    		'year'=>$request->year
    	];
    	$record->fill($data);
    	$record->user_id = Auth::id();
    	$record->save();

    	return redirect('/my_records');
    }
}

