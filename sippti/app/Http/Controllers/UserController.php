<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tampilUser = User::all();
        return view('user', compact('tampilUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createUser');
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
        $request->validate([
            'name'=>'required | max: 30',
            'email'=>'required | email',
            'password'=>'required'
        ]);

        $simpan=User::firstOrCreate([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ]);

        $simpan->save();
        return redirect('/createUser')->with('success','data berhasil disimpan');
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
        $user=User::find($id);
        return view('userEdit', compact('user'));
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
        $request->validate([
            'name'=>'required | max: 30',
            'email'=>'required | email',
            'password'=>'required'
        ]);

        $user=User::find($id);
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->email_verified_at=$request->get('email_verified_at');
        $user->password=$request->get('password');
        $user->remember_token=$request->get('remember_token');
        $user->created_at=$request->get('created_at');
        $user->updated_at=$request->get('updated_at');

        $user->save();
        return redirect('/user')->with('success', 'Data berhasil diupdate');
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
        $del = User::find($id);
        $del->delete();

        return redirect()->back()->with('success','Data berhasil dihapus');
    }

    public function detail($id)
    {
        $user = User::find($id);
        return response()->json([
            'data'=>$user
        ]);
    }
}