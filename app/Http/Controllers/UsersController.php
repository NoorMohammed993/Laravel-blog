<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Profile;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index')->with('users',User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
        
       
        
         $this->validate($request,[
            
           'name'         => 'required',
           'email'        => 'required|email',
           'password'     => 'required',
           'admin'        => 'required'
            
        ]);
        
        
       
        $user=User::create([
          'name'     => $request->name,
          'email'    => $request->email,
          'password' => bcrypt($request->password)   
            
        ]);
        
        $profile =new Profile;
        
        if($request->hasFile('avatar')){
            
       
         $avatar= $request->avatar;
        
        $avatar_new_name=time() . $avatar->getClientOriginalName();
        
        $avatar->move('uploads/avatar',$avatar_new_name);  
            
        $profile->avatar='uploads/avatar/' .$avatar_new_name;    
     
        }
   
      else{
            
          $profile->avatar='uploads/avatar/default.png'; 
            
        }
      
      
        $profile->user_id=$user->id;
        $profile->about=$request->about;
        $profile->facebook=$request->facebook;
        $profile->youtube=$request->youtube;
        
        $profile->save();
        
        return redirect()->route('user.index');
        
    
        
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
