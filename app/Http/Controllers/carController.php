<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\VehicleReg;
use DB;


class carController extends Controller
{   
  

    public function index()
    {
        return view('create_car_reg');  //form
    }

    public function view(){
        $vehicles=VehicleReg::paginate(3);       //view page
         
         return  view('vehicle_reg_view' , ['vehicles' => $vehicles ]);   
    }

    public function c_insert(Request $request)
    {   
      $no_car=$request->input('no_car');
      $rp=$request->input('rp');
      $fc=$request->input('fc');
      $tt=$request->input('tt');
      $ic=$request->input('ic');


      $c=DB::table('vehicle_reg')->where('no_car','=',$no_car)->get();

        if(count($c) > 0 ){

          return redirect('/vehicle_reg_view')->with('delinfo',"Sorry ! You have already registered the vehicle.");

        }

      $data=array('no_car'=>$no_car,'rp_due'=>$rp,'fc_due'=>$fc,'tt_due'=>$tt ,'ic_due'=>$ic); 

      DB::table("vehicle_reg")->insert($data);

      return redirect('/vehicle_reg_view')->with('info','Successfully Added!');
         
    }

    public function edit($id)
    {
       // $vehicles=DB::table('vehicle_reg')->where('no_car','=',$id)->get();
        $vehicles=VehicleReg::find($id);       //view page
        
        return view('update_v' , ['vehicles' => $vehicles]); 
    
    }

   public function update(Request $request, $id)
    {   
      
      $rp=$request->input('rp');
      $tt=$request->input('tt');
      $ic=$request->input('ic');

        $data=array(
            'rp_due'=>$request->input('rp'),
            'tt_due'=>$request->input('tt'),
            'ic_due'=>$request->input('ic'),
        );
              
        DB::table('vehicle_reg')->where('v_id','=',$id)->update($data);

        return redirect('/vehicle_reg_view')->with('info','updated successfully !');

    }

    public function delete($id)
    {
       
        DB::table('vehicle_reg')->where('v_id', '=' ,$id)->delete();

        return redirect('/vehicle_reg_view')->with('info','Deleted Successfully');
    }


     public function check()
    { 
       $vehicles=VehicleReg::all();

       $item=array();

       $date=date('Y-m-d');
       $now =Carbon::parse($date);

      
        
      if(count($vehicles) > 0){
         $count=0; 
        foreach($vehicles as $vehicle){

          $car_number=$vehicle->no_car;
          
         $rp=Carbon::parse($vehicle->rp_due); 
         $rp_due=$now->diffInDays($rp); 

         $fc=Carbon::parse($vehicle->fc_due); 
         $fc_due=$now->diffInDays($fc); 

         $tt=Carbon::parse($vehicle->tt_due); 
         $tt_due=$now->diffInDays($tt); 

         $ic=Carbon::parse($vehicle->ic_due); 
         $ic_due=$now->diffInDays($ic); 
       

         if($rp_due <=30){

           $rp_date=$rp_due;

          }
          else
          {

            $rp_date="";

          }

         if($fc_due <=30){

            $fc_date=$fc_due;

          }
          else{
            $fc_date="";

          }

        if($tt_due <=30){

           $tt_date=$tt_due;
        }
        else{
          $tt_date="";
        }

        if($ic_due <=30){

          $ic_date=$ic_due;
         }
         else{
          $ic_date="";
         }
             

             $item[$count++]=array('car_num'=>$car_number,'rp_due' =>$rp_date,'fc_due'=>$fc_date,'tt_due'=>$tt_date,'ic_due'=>$ic_date);
  
      

       }

     }

       //return $item;

        return view('notification')->with('item', $item);
        
      
  
      
    }

}
