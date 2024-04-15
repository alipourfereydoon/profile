<?php

namespace App\Http\Controllers;

use App\Models\user;
// use app\Models\user;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=user::all();
        return view('post.index',compact('user'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       user::create($request->all());
    //    $message = new user();
    //    $message->name = $request->input('name');
    //    $message->email = $request->input('email');
    //    $message->password=$request->input('password');
    //    $message->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        return view('post.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('post.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        $user->delete();
        return redirect()->route('index')->with('success','record deleted seccessfully');
    }
}
