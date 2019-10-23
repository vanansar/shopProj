<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use DB;
use App\Models\User;
use App\Models\Questions;
use Alert;
use Session;

class RegController extends Controller
{
	public function register(Request $request) {
	$data = array(
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
					'password' => $request->input('password'),
                    //'type_industries'         => $request->input('industry'),
                    //'type_levels'        => $request->input('level'),
                    'phone' => $request->input('phone')
                );

		$lastInsertedId = DB::table('tb_user')->insertGetId($data);
		
 //$data['view_ques'] = DB::table('tb_questions')->select('*')->get();

            return redirect('sign_in')->with('success', 'Successfully Registered..');
			//return view('survey', $data);
		
	}
	
	public function survey(Request $request) {
	$data = array(
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
					'password' => $request->input('password'),
                    //'type_industries'         => $request->input('industry'),
                    //'type_levels'        => $request->input('level'),
                    'phone' => $request->input('phone')
                );

		$lastInsertedId = DB::table('tb_user')->insertGetId($data);

            //return redirect('sign_in')->with('success', 'Successfully Registered..');
			return redirect('survey');
	}
    //
}
