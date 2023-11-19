<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Payment;
use DB;


class PaymentController extends Controller
{   
  public function home(){
      $total_amount=0;
      $date=date('Y-m-d');

      $total_amount = DB::table('payment')
      ->where('date','=',$date)
      ->sum('payment.amount');

      $payments=DB::table('payment')
      ->where('date','=',$date)
      ->paginate(3);
      
     
      return  view('payment_view' , ['payments' => $payments,'total_amount' => $total_amount])->with('no', 1);
    }

    public function index()
    {
        return view('create_pay');
    }

    public function pay(Request $request)
    {   
        
      $payment=Payment::first();
      $fixed_am=$payment->fixed_amount;

      $remaining=0;
      $paying_owed_amount=0;
      $total_paying_owed_am=0;

      $employer_id=$request->input('employer_id');
      $no_car=$request->input('no_car');
      $amount=$request->input('amount');
      $date=date('Y-m-d');


       $emp=DB::table('payment')->where('emp_id','=',$employer_id)->where('date','=',$date)->get();

        if(count($emp) > 0 ){

         return redirect('/pay_view')->with('delinfo',"Sorry ! Today's entry already added.");

        }

      if($amount<=$fixed_am){
        $remaining=$fixed_am-$amount;
      }

      if($amount>$fixed_am){
        $paying_owed_amount=$amount-$fixed_am;
      }

      $p_o_a = DB::table('payment')
      ->where('emp_id','=',$employer_id)
      ->where('date','<>',$date)
      ->sum('payment.remaining');

      $total_paying_owed_am=$p_o_a-$paying_owed_amount;

      $data=array('emp_id'=>$employer_id,'no_car'=>$no_car,'amount'=>$amount,'remaining'=>$remaining ,'paying_owed_amount'=>$paying_owed_amount,'total_paying_owed_am'=>$total_paying_owed_am,'date' =>NOW()); 

      DB::table("payment")->insert($data);

      return redirect('/pay_view')->with('info','Successfully Added!');
         
    }

    public function edit($id)
    {
        $payments=Payment::find($id);
        
         return view('update_pay' , ['payments' => $payments]); 
    
    }

   public function update(Request $request, $id)
    {   
      $payment=Payment::first();
      $fixed_am=$payment->fixed_amount;     

      $remaining=0;
      $paying_owed_amount=0;
      $total_paying_owed_am=0;

      $employer_id=$request->input('employer_id');
      $no_car=$request->input('no_car');
      $amount=$request->input('amount');
      $date=date('Y-m-d');

      if($amount<=$fixed_am){
        $remaining=$fixed_am-$amount;
      }

      if($amount>$fixed_am){
        $paying_owed_amount=$amount-$fixed_am;
      }

      $p_o_a = DB::table('payment')
      ->where('emp_id','=',$employer_id)
      ->where('date','<>',$date)
      ->sum('payment.remaining');

      $total_paying_owed_am=$p_o_a-$paying_owed_amount;

        $data=array(
            'emp_id'=>$request->input('employer_id'),
            'no_car'=>$request->input('no_car'),
            'amount'=>$request->input('amount'),
            'remaining'=> $remaining,
            'paying_owed_amount'=> $paying_owed_amount,
            'total_paying_owed_am'=> $total_paying_owed_am,
            'date'=>NOW()
            
        );
              
        DB::table('payment')->where('pay_id','=',$id)->update($data);

        return redirect('/pay_view')->with('info','updated successfully !');

    }

    public function search_pay_details(Request $request){  

      $search= $request->input('search');
      
      $total_amount = DB::table('payment')
      ->where('date','=',$search)
      ->sum('payment.amount');


      $payments=DB::table('payment')
      ->where('date','=', $search)
      ->get();

      
      return  view('search_pay_details' , ['payments' => $payments,
        'total_amount' => $total_amount])->with('no', 1);
    }


    public function delete($id)
    {
       
        DB::table('payment')->where('pay_id', '=' ,$id)->delete();

        return redirect('/pay_view')->with('info','Deleted Successfully');
    }

}
