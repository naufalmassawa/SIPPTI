<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Server;

class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewServer=Server::all();
        return view('server', compact('viewServer'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createServer');
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
        $request->validate([
            'sub_unit'=>'required',
            'ip_address'=>'required',
            'merk'=>'required',
            'type'=>'required',
            'processor'=>'required',
            'ram'=>'required',
            'storage'=>'required',
            'database'=>'required',
            'konektivitas'=>'required',
            'pemanfaatan_server'=>'required',
            'operating_system'=>'required',
            'lisensi_os'=>'required',
            'join_domain'=>'required',
        ]);
        $simpan=Server::firstOrCreate([
            'sub_unit'=>$request->get('sub_unit'),
            'ip_address'=>$request ->get('ip_address'),
            'merk'=>$request ->get('merk'),
            'type'=>$request->get('type'),
            'processor'=>$request->get('processor'),
            'ram'=>$request->get('ram'),
            'storage'=>$request->get('storage'),
            'database'=>$request->get('database'),
            'konektivitas'=>$request->get('konektivitas'),
            'pemanfaatan_server'=>$request->get('pemanfaatan_server'),
            'operating_system'=>$request->get('operating_system'),
            'lisensi_os'=>$request->get('lisensi_os'),
            'join_domain'=>$request->get('join_domain'),
        ]);
        $simpan->save();
        return redirect('/serverCreate')->with('success', 'Data berhasil disimpan');
        //
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
        $server = Server::find($id);
        return view('serverEdit', compact('server'));
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
        $request->validate([
            'sub_unit'=>'required',
            'ip_address'=>'required',
            'merk'=>'required',
            'type'=>'required',
            'processor'=>'required',
            'ram'=>'required',
            'storage'=>'required',
            'database'=>'required',
            'konektivitas'=>'required',
            'pemanfaatan_server'=>'required',
            'operating_system'=>'required',
            'lisensi_os'=>'required',
            'join_domain'=>'required',
        ]);
        $server=Server::find($id);
            $server->sub_unit= $request->get('sub_unit');
            $server->ip_address= $request ->get('ip_address');
            $server->merk= $request ->get('merk');
            $server->type= $request->get('type');
            $server->processor= $request->get('processor');
            $server->ram= $request->get('ram');
            $server->storage= $request->get('storage');
            $server->database= $request->get('database');
            $server->konektivitas= $request->get('konektivitas');
            $server->pemanfaatan_server= $request->get('pemanfaatan_server');
            $server->operating_system= $request->get('operating_system');
            $server->lisensi_os= $request->get('lisensi_os');
            $server->join_domain= $request->get('join_domain');

        $server->save();
        return redirect('/server')->with('success', 'Data berhasil diupdate');
        //
    }

    public function detail($id)
    {
        $server = Server::find($id);
        return response()-> json([
            'data' =>$server
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Server::find($id);
        $del->delete();

        return redirect()->back()->with('success','Data berhasil dihapus');
        //
    }
}
