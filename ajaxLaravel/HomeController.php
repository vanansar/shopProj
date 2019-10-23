<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   public function myform()
    {
    	return view('myform');
    }


    /**
     * Display a listing of the myformPost.
     *
     * @return \Illuminate\Http\Response
     */
  
public function sign_in(Request $request) 
{
$data['sel_country']=DB::table('countries')
			->get();
           
            return view('sign_in',$data);
	
}

    	public function do_ajax(Request $request) {
			
         $em=$request->input('country');
		 $res = DB::table('states')
		                     ->where('states.country_id', '=', $em)
			                 ->get();
						  
						 
						 //$ans= '<option>'.$res.'</option>';
		foreach($res as $t) 
		{
            $tmark = '<option>'.$t->sname.'</option>';	
			 echo($tmark);
         
        }
		
         
        
        }
    
}
