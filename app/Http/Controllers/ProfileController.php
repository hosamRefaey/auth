<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
class ProfileController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retreive the currently authenticated users..
        $user= Auth::user();
        //retreive the currently authenticated user id..
        $id= Auth::id();
        return view('profile')->with('user',$user);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profile $profile)
    {
        //valiodating the data coming from the request
        $validated= $request->validate([
            'name'=>'required',
            'country'=>'required',
            'gender'=>'required',
            'job'=>'required',
        ]);

        //retreiving user data from the users table
        // $user=Auth::user();
        // $id= Auth::id();
        return print_r($request);
        // $user->profile->name=$request->name;
        // $user->profile->country=$request->country;
        // $user->profile->job=$request->job;
        // $user->profile->gender=$request->gender;
        // $user->profile->facebook=$request->facebook;
        // $user->profile->twitter=$request->twitter;
        // $user->profile->save();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(profile $profile)
    {
        //
    }
}
