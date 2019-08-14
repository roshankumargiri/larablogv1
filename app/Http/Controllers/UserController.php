<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Gate;
use Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        if(!Gate::allows('isAdmin')){
    abort(404,"Sorry, You cannot do this action");
}
       $users = User::all();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if(!Gate::allows('isAdmin')){
    abort(404,"Sorry, You cannot do this action");
}
        $user = new User;
        

        $user->name = $request->name;
        $user->email =$request->email;
        $user->role =$request->role;
        $data = "12345";
        $password = Hash::make($data);
        $user->password = $password;

        
        $user->save();

        return redirect('/users');
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
        if(!Gate::allows('isAdmin')){
    abort(404,"Sorry, You cannot do this action");
}
        $user = User::find($id);
        return view('user.edit',compact('user'));
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
       if(!Gate::allows('isAdmin')){
    abort(404,"Sorry, You cannot do this action");
}
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        $user->save();
         return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Gate::allows('isAdmin')){
    abort(404,"Sorry, You cannot do this action");
}

$user = User::find($id);
$user->delete();
  return redirect('/users');
    }
}
