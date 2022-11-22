<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class registercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register = User::all();
        return view('auth.register', compact('register'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $register=User::all();
        return view('auth.tambah', compact('register'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $this->validate($request, [

// pelamar

       'name'=>'required',
       'email'=>'required',
       'password'=>'required',
       'role'=>'required',



          ]);

          $register =  User::create([

 // pelamar


       'name'=>$request->name,
       'email'=>$request->email,
       'password'=>bcrypt($request->password),
       'role'=>$request->role,

          ]);

        //   $registercoba = $request->only('name','email','password','role');

        //   if(Auth::attempt($registercoba)){
        //     $user = Auth::user();
        //     if($user->role == 'admin'){
        //         return redirect()->intended('adminn');
        //     }elseif($user->role == 'perusahaan'){
        //         return redirect()->intended('registerperusahan');
        //     }elseif($user->role == 'pelamar'){
        //         return redirect()->intended('registerpelamar');
        //     }
        //     return redirect()->intended('/register');
        // }
        // Session::flash('error', 'errorr');
        // return redirect('register');
        // if ($user = Auth::user()){
        //     if($user->role == 'admin'){
        //         return redirect()->intended('adminn');
        //     }elseif($user->role == 'perusahan'){
        //         return redirect()->intended('registerperusahan');
        //     }elseif($user->role == 'pelamar'){
        //         return redirect()->intended('registerpelamar');
        //     }
        // }
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
        // $register =User::oldest('id')->simplepaginate(1);
        // return view('register.detai',compact('register'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $register = User::where('id', $id)->first();
        // return view('register.edit', compact('register'));
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
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $register = User::where('id', $id);


        $register->update($request->except('_token','_method'));
        return redirect()->route('home')
        ->with('success', 'pelamar Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $register=User::where('id', $id);
        $register->delete();
        return redirect()->route('home')
        ->with('success', 'Delete');
    }
}
