<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

// This functiton insures If You aren't logged in you cannot access these methods
    public function __construct(){
       $this->middleware('auth');
        $this->middleware('isAdmin');

    }

    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request,[
            'name' => 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required',
            //'admin'=> 'required'

        ]);

        User::create(['name'=>$request->name,'email'=>$request->email,'password'=>Hash::make($request->password),'admin'=>(int)$request->optradio]);
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
        $user = User::findOrFail($id);
        return view('users.update',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //-------------* Auto Generated*-------------//
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.update');
    }
//// -----------------------**I created It**--------------------//
//    public function edits()
//    {
//        return view('users.update');
//    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$users= auth::all();
        $this->validate($request,[
            //problem: same email wont work for same user
            'name' => 'required',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required',


        ]);
        $user = User::findOrFail($id);

        $user->update(['name'=>$request->name,'email'=>$request->email,'password'=>Hash::make($request->password),'admin'=>(int)$request->optradio,]);
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
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/users');
    }
}
