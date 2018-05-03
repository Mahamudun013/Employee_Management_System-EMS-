<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employer;

use DB;

class employerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home(){
    
       // $employers=Employer::all();
        $employers=Employer::paginate(3);
         
         return  view('home' , ['employers' => $employers ]);
        
     }



    public function index()
    {
        return view('create_emp');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $employer_id=$request->input('employer_id');
          $employer_name=$request->input('employer_name');
          $address=$request->input('address');
          $phone_number=$request->input('phone_number');
          $ref_name=$request->input('ref_name');
          $ref_phone_number=$request->input('ref_phone_number');
          $image=$request->input('image');

          $data=array('emp_id'=>$employer_id,'emp_name'=>$employer_name,'emp_address'=>$address,'emp_phn_number'=>
            $phone_number,'emp_pic'=>$image,'ref_name'=>$ref_name,'ref_phn_no'=>$ref_phone_number);

          DB::table("employers")->insert($data);


          return redirect('/home')->with('info','Successfully Registered!');


        
    }

      public function edit($id){


        $employers=Employer::find($id);
        
         return view('update' , ['employers' => $employers]); 

        

    }





    public function update(Request $request, $id)
    {      



        $data=array(
            'emp_id'=>$request->input('employer_id'),
            'emp_name'=>$request->input('employer_name'),
            'emp_address'=>$request->input('address'),
            'emp_phn_number'=>$request->input('phone_number'),
            'ref_name'=>$request->input('ref_name'),
            'ref_phn_no'=>$request->input('ref_phone_number')

        );
              
        DB::table('employers')->where('emp_id','=',$id)->update($data);

        return redirect('/home')->with('info','updated successfully !');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       

        DB::table('employers')->where('emp_id', '=' ,$id)->delete();

        return redirect('/home')->with('info','Deleted Successfully');
    }
}
