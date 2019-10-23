<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Models\User;
use Alert;
use Session;
use Validator;


class LoginController extends Controller
{
   public function login(Request $request) {
	   
                  $em = $request->input('email');
				     
					$pass = $request->input('password');  
               
            
			$n = DB::table('tb_user')
			->where('tb_user.email', '=', $em)
			->where('tb_user.password', '=', $pass)
			->first();
            $count = count($sel_user);
			
            if ($count > 0) {
		
            return view('dashboard');
	}
	else
	{
		return redirect('sign_in')->with('failed', 'Please Try Again Later..');
	}
}

   public function sign_up(Request $request) {
	   
                echo "fdfd";
				die();
			$data['sel_country']=DB::table('countries')
			->get();
           
            return view('sign_up',$data);
	
}

    	public function do_ajax(Request $request) {
			
         $em=$request->input('country');
		 $res=$sel_user = DB::table('states')
		                       ->where('states.country_id', '=', $em)
			              ->get();
						 //$ans= '<option>'.$res.'</option>';
		foreach($res as $t) 
		{
            $tmark[] = $t->sname;	
			
        }
		
          echo json_encode($tmark);
        
        }

}
