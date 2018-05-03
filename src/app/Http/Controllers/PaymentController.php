<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Payment;
use DB;


class PaymentController extends Controller
{		
	public function home(){
    
        $payment=Payment::paginate(3); // payment model r shb  function call 
        
         return  view('payment_view' , ['payments' => $payment ]); 
    }

    public function index()
    {
        return view('create_pay');
    }

    public function view()
    {
        return view('update_pay');
    }


    public function pay(Request $request)
    {	$total_amount=0;
    	$employer_id=$request->input('employer_id');
      	$no_car=$request->input('no_car');
      	$amount=$request->input('amount');
      	$remaining=$request->input('remaining');
      	$total_amount=$amount+$remaining;

      	$data=array('emp_id'=>$employer_id,'no_car'=>$no_car,'amount'=>$amount,'remaining'=>$remaining ,'total_amount'=>$total_amount,'date' =>NOW()); 

      	DB::table("payment")->insert($data);

      	$payments=Payment::all();

     	return redirect('/pay_view')->with('info','Successfully Added!');
         
    }

    public function edit($id){


        $payments=Payment::find($id);
        
         return view('update_pay' , ['payments' => $payments]); 
    

    }

   public function update(Request $request, $id)
    {   
    	
    	
        $data=array(
            'emp_id'=>$request->input('employer_id'),
            'no_car'=>$request->input('no_car'),
            'amount'=>$request->input('amount'),
            'remaining'=>$request->input('remaining'),
            'total_amount'=>$request->input('total_amount'),
            'date'=>NOW()
            
        );
              
        DB::table('payment')->where('pay_id','=',$id)->update($data);

        return redirect('/pay_view')->with('info','updated successfully !');

    }

    public function delete($id)
    {
       
        DB::table('payment')->where('pay_id', '=' ,$id)->delete();

        return redirect('/pay_view')->with('info','Deleted Successfully');
    }

}
