<?php
namespace App\Http\Controllers;
use App\Http\Requests\PostStoreRequest;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use App\models\post;


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
    public function store(PostStoreRequest $request)
    {
    //    user::create($request->all());
    //    $message = new user();
    //    $message->name = $request->input('name');
    //    $message->email = $request->input('email');
    //    $message->password=$request->input('password');
    //    $message->save();
    // $filename=time().'.'.$request->image->Extension();
    // $request->image->move(public_path('uploads'),$filename);


    // post::create($request->all());
    return redirect()->route('main')->with('success','record create seccessfully');
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
