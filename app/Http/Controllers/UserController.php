<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = DB::table('users')->get();

        return view('admins.user.index',['res'=>$res]);
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins/user/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $res = $request->except('_token');
         
    
        $data = DB::table('users')->insert($res);
        if($data){
            return redirect('/user');
        }else{
            return back();
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


      $res = DB::table('users')->where('id',$id)->first();

      return view('admins.user.users',['res'=>$res]);
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $res = DB::table('users')->where('id',$id)->first();
            return view('admins.user.edit',['res'=>$res]);
        
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
        var_dump($_POST);

        $res = $request->except('_token','_method');
        $data = DB::table('users')->where('id',$id)->update($res);

        if($data){
            return redirect('/user');
        }else{
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = DB::table('users')->where('id',$id)->delete();
        if($res){
            return redirect('/user');
        }else{
            return back();
        }
    }
}
