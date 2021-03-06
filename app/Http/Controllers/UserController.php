<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::all();
        //$users = User::all(['name', 'email']);
        // $users = User::find();
        // $users = [$users];
        // $users = User::find([1, 2, 3, 4]);
        // $users = User::findOrFail(12654984);
        // if(!$users) abort(404);
        // $users = [$users];
        // $users = User::where('email', 'randi07@example.org')->firstOrFail();
        // $users = [$users];
        //$users = User::where('email', 'randi07@example.org')->get();
        //$users = User::whereId('49')->get();
        //$users = User::whereTime('created_at', '04:39:20')->get();

        //$users = User::whereCreatedAt('2019-02-28 03:39:20')->get();

        //$users = User::all()->sortBy('days_activate');

        // $users = User::select(DB::raw('id, name, email, created_at, DATEDIFF(updated_at, created_at) as days_activate'))
        //     //->get();
        //     ->toSql();

        //     dd($users);
            
        // $users = User::selectRaw('id, name, email, created_at, DATEDIFF(updated_at, created_at) as days_activate')
        //     ->get();    
            //->toSql();

            //dd($users);

        // $users = User::select(DB::raw('id, name, email, created_at, DATEDIFF(updated_at, created_at) as days_activate'))
        //     ->whereRaw('DATEDIFF(updated_at, created_at) > 300')
        //     //->get();  
        //     ->toSql();

        //     dd($users);
            
        // $users = User::select(DB::raw('id, name, email, created_at, DATEDIFF(updated_at, created_at) as days_activate'))
        //     ->orderByRaw('DATEDIFF(updated_at, created_at) desc')
        //     ->get();    
            //->toSql();

            //dd($users);

        //$users = User::select(['name', 'id'])->get()->shuffle()->chunk(10);
        //dd($users);
        // $users = User::select(['name', 'id'])->get()->random();
        // dd($users);
        // $users = User::all()->each(function($user){
        //     if($user->password == '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'){
        //         info('Хэрэглэгч ' . $user->email . ' нууц үгээ өөрчлөөгүй байна. ');
        //     }
        // });

        // $names = User::all()->map(function($user){
        //     return strlen($user->name);
        // });

        // print_r($names);
        // echo $names->avg();
        // $names = User::all()->reject(function($user){
        //     return strlen($user->name) > 20;
        // });
        // dd($names);

        $users = User::select(['name', 'id'])
            ->take(10)
            ->get()
            ->shuffle()
            ->tap(function($users){
                Log::info($users->first());
            })
            ->chunk(3)
            //->dd();
            ->dump();
            echo 'Results';

            //dd($users);
        
        //return view('users.index', compact('users'));
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
        User::create($request->all());
        return redirect()->route('users.index');
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
