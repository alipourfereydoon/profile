<?php

namespace App\Http\Controllers;

use app\Models\article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use App\Models\address;

class homecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users=User::find(2);
        // $user=User::find(3);
        // dd($user);
        // $users=DB::select('select * from users where id=?',[1]);
        // dd($users);
        // $users=Db::insert('insert into users(name,email,password)values(?,?,?)',['ali','pourfereydoon','123']);
        // $test=collect(['ali','hasan','javad']);
        // $users=DB::table('users')->select('email')->get();
        // $users=DB::table('users')->whereBetween('id',[1,10])->get();
        // $users=DB::table('users')->whereNotBetween('id',[1,5])->get();
        // $users=DB::table('articles')->get();
        // $users=DB::table('users')->take(5)->get();
        // $result=true;
        // $users=DB::table('users')->when($result,function($query){
        //     return $query->where('id',1);
        // })->get();
        // $users=DB::table('users')->first();


        // $users=DB::table('users')->first()->name;
        // $users=DB::table('users')->insert([
        //     'name'=>'ali','email'=>'ali@yahoo.com','password'=>'123'
        // ]);
        // DB::table('users')->where('id',1)->update(['name'=>'ali']);

        // DB::table('users')->where('id',1)->delete();
        // dd($users);



        // $users=User::all();
        // dd($users);
        // return view('welcome');

    //     try {
    //         $users=user::find(40);
    //     } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $th) {
    //         return $th;
    //     }
    //     return view('welcome',compact('users'));
    // }

    // $article=new user;
    // $article->name='jack';
    // $article->email='jack@yahoo.com';
    // $article->password='999';
    // $article->save();
    // foreach (user::where('created_at', '<' ,now())->cursor() as $value) {
    //    dd($value);
    // }
    // return view('welcome');



    // $user=new User;
    // $user->name='mahsa';
    // $user->password='8563259';
    // $user->email='mahsa@yahoo.com';
    // $user->save();

    // $user=user::find(1);
    // $user->name='shiva';
    // $user->save();

    // user::where('id',1)->update([
    //     'name'=>'leila'
    // ]);

    // $user=user::firstOrCreate([
    //     'name'=>'hasan',
    //     'email'=>'hasan@yahoo.com',
    //     'password'=>'14578',
    //     'id'=>'30'
    // ]);

    // $user=user::find(1);
    // $user->delete();



    // $user=new user([
    //     'name'=>'nima',
    //     'password'=>'1452',
    //     'email'=>'nima@yahoo.com'

    // ]);
    // $user->save();

    // $user=user::make([
    //     'name'=>'abtin',
    //     'email'=>'abtin@yahoo.com',
    //     'password'=>'147'
    // ]);
    // $user->save();

    // $user=user::find(4);
    // $user->delete();


    // user::destroy(3);
    // user::where('id',5)->delete();
    // user::create(['name'=>'ali','email'=>'ali@yahoo.com','passwprd'=>'123']);

    // $user=User::where('id',6);
    // dd($user->email);
    // $address=address::find(1);
    // $user=user::find(1);
    // dd($address->address);
    // dd($user->address);





    // $messages=[
    //     'errors'=>['something went wrong'],
    //     'messages'=>['creat seccessfully']
    // ];

    // $messagebag=new \Illuminate\Support\MessageBag($messages);
    // if ($messagebag->has('errors')) {
    //     dd($messagebag->get('errors'));
    // }
    // return view('welcome');


    // $messages=[
    //     'errors'=>['something wrong'],
    //     'messages'=>['connected seccecfully']
    // ];

    // $messagebag=new \Illuminate\Support\MessageBag($messages);
    // return view('welcome')->withErrors($messagebag);

    return view('welcome')->witherrors(['errors'=>'something wrong' , 'messages'=>'connected']);





    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
    // public function showuser($id){
    //     $user=User::find($id);
    //     dd($user);
    // }
}

