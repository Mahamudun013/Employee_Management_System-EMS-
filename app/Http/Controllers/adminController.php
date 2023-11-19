<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use DB;

class adminController extends Controller
{


    public function index(){
        

        return view('login');
    }


    
    public function login(Request $request)
    {

        $adminEmail=$request->get('email');
        $password=$request->get('password');

        $CheckLogin=DB::table('admin')->where(['email'=> $adminEmail,'pass'=>$password])->get();


        if(count($CheckLogin) > 0){

           session(['username'=>$adminEmail]);
           

         //  $notification=checkNotification();

           // public function checkNotification(){



           // }
           

            return redirect('/home');

        }

        else{
        
           return redirect('/')->with('info',"Sorry ! Wrong Email/Password.");

        }
         
    }



    public function logout(Request $request)
    {
        $request->session()->flush();


        return redirect('/');

    }







    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
