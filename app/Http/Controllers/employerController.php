<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employer;

use DB;

class employerController extends Controller
{
    
    public function home(){
    

        $employers=Employer::paginate(3);
         
         return  view('home' , ['employers' => $employers ]);
        
     }



    public function index()
    {
        return view('create_emp');
    }

    

   
   
    public function store(Request $request)
    {
              
          $this->validate($request,[
            'upload_image' =>'required|image|mimes:jpg,png,jpeg,gif|max:2048'
          ]);
          
          
          $employer_id=$request->input('employer_id');

          $checkID=$employer_id;

          $findUser=Employer::find($checkID);

          // if(count($findUser)> 0){

        
          // return redirect('/create')->with('checkInfo','Sorry ! This user ID is already used.Try Another one.');

          // }

          $employer_name=$request->input('employer_name');
          $address=$request->input('address');
          $phone_number=$request->input('phone_number');
          $ref_name=$request->input('ref_name');
          $ref_phone_number=$request->input('ref_phone_number');
          
          $image=$request->file('upload_image');          
         // $newName=$employer_id.'.'.$image->getClientOriginalExtension();
          $newName=rand().'.'.$image->getClientOriginalExtension();
          $image->move(public_path("images"),$newName);
          $image_path="images/".$newName;

          $data=array('emp_id'=>$employer_id,'emp_name'=>$employer_name,'emp_address'=>$address,'emp_phn_number'=>
            $phone_number,'emp_pic'=>$image_path,'ref_name'=>$ref_name,'ref_phn_no'=>$ref_phone_number);


          DB::table("employers")->insert($data);


          return redirect('/home')->with('info','Successfully Registered!');
        
    }



     public function details($id)
    {

      $employee=Employer::find($id);



     return view('emp_details'  ,['employee' => $employee]);
        
    }



    public function emp_search(Request $request)
    {
      $empSearch=$request->input('empSearchId');

      $employers=Employer::where('emp_id','=',$empSearch)->get();

       // return $employee;

      return view('search_employee',['employers'=>$employers]);

    }


      public function edit($id){


        $employers=Employer::find($id);
        
        return view('update' , ['employers' => $employers]); 

       }





    public function update(Request $request, $id)
    {      

          $employers=Employer::find($id);

          $delPath=$employers->emp_pic;
               
         // unlink($delPath);
           

        // $this->validate($request,['upload_image' =>'required|image|mimes:jpg,png,jpeg,gif|max:2048']);
          
          $employer_id=$request->input('employer_id');
          $employer_name=$request->input('employer_name');
          $address=$request->input('address');
          $phone_number=$request->input('phone_number');
          $ref_name=$request->input('ref_name');
          $ref_phone_number=$request->input('ref_phone_number');
          
         // $image=$request->file('upload_image');   

         //##### $newName=$employer_id.'.'.$image->getClientOriginalExtension();

           //$newName=rand().'.'.$image->getClientOriginalExtension();

         // $image->move(public_path("images"),$newName);
        //  $image_path="images/".$newName;  'emp_pic'=>$image_path

      $data=array('emp_id'=>$employer_id,'emp_name'=>$employer_name,'emp_address'=>$address,'emp_phn_number'=> $phone_number,'ref_name'=>$ref_name,'ref_phn_no'=>$ref_phone_number);

              
         DB::table('employers')->where('emp_id','=',$id)->update($data);


          return redirect('/home')->with('info','updated successfully !');

        
    }

   


    public function delete($id)
    {
        

        DB::table('employers')->where('emp_id', '=' ,$id)->delete();


        return redirect('/home')->with('delinfo','Deleted Successfully');

    }

}
