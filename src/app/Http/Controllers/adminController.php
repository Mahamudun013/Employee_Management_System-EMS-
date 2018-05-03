<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use DB;

class adminController extends Controller
{
    
    public function login(Request $request)
    {

        $adminEmail=$request->input('email');
        $password=$request->input('password');

        $CheckLogin=DB::table('admin')->where(['email'=> $adminEmail,'pass'=>$password])->get();


        if(count($CheckLogin) > 0){

             return redirect('/home');
        }
        else{
        

           return redirect('/')->with('info',"Sorry ! Wrong Email/Password.");
        }

        
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
