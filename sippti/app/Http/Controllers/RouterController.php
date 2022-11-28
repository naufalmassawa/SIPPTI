<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Router;

class RouterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $viewRouter = Router::all();
        return view('router', compact('viewRouter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createRouter');
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
            'unit'=>'required',
            'isp'=>'required',
            'service_type'=>'required',
            'sid'=>'required',
            'bandwith'=>'required',
            'ip_lan'=>'required',
            'ip_gateway'=>'required',
            'ip_wan'=>'required',
            'merk'=>'required',
            'serial_number'=>'required',
            'model'=>'required',
            'security'=>'required',
            'backup'=>'required',
            'keterangan'=>'required',
            'tahun_pengadaan'=>'required',
            'status'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'status_har_lan'=>'required',
            'tahun_har_lan'=>'required',
            'user_mikrotik0'=>'required',
            'pass_mikrotik0'=>'required',
            'user_mikrotik1'=>'required',
            'pass_mikrotik1'=>'required',
            'security_mikrotik'=>'required',
            'firewall'=>'required',
        ]);

        $simpan=Router::create([
            'unit'=>$request->get('unit'),
            'isp'=>$request->get('isp'),
            'service_type'=>$request->get('service_type'),
            'sId'=>$request->get('sid'),
            'bandwith'=>$request->get('bandwith'),
            'ip_lan'=>$request->get('ip_lan'),
            'ip_gateway'=>$request->get('ip_gateway'),
            'ip_wan'=>$request->get('ip_wan'),
            'merk'=>$request->get('merk'),
            'serial_number'=>$request->get('serial_number'),
            'model'=>$request->get('model'),
            'security'=>$request->get('security'),
            'backup'=>$request->get('backup'),
            'keterangan'=>$request->get('keterangan'),
            'tahun_pengadaan'=>$request->get('tahun_pengadaan'),
            'status'=>$request->get('status'),
            'latitude'=>$request->get('latitude'),
            'longitude'=>$request->get('longitude'),
            'status_har_lan'=>$request->get('status_har_lan'),
            'tahun_har_lan'=>$request->get('tahun_har_lan'),
            'user_mikrotik0'=>$request->get('user_mikrotik0'),
            'pass_mikrotik0'=>$request->get('pass_mikrotik0'),
            'user_mikrotik1'=>$request->get('user_mikrotik1'),
            'pass_mikrotik1'=>$request->get('pass_mikrotik1'),
            'security_mikrotik'=>$request->get('security_mikrotik'),
            'firewall'=>$request->get('firewall')
        ]);

        $simpan->save();
        return redirect('/router')->with('success','Data berhasil disimpan');
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
        $router = Router::find($id);
        return view('routerEdit', compact('router'));
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
            'unit'=>'required',
            'isp'=>'required',
            'service_type'=>'required',
            'sid'=>'required',
            'bandwith'=>'required',
            'ip_lan'=>'required',
            'ip_gateway'=>'required',
            'ip_wan'=>'required',
            'merk'=>'required',
            'serial_number'=>'required',
            'model'=>'required',
            'security'=>'required',
            'backup'=>'required',
            'keterangan'=>'required',
            'tahun_pengadaan'=>'required',
            'status'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'status_har_lan'=>'required',
            'tahun_har_lan'=>'required',
            'user_mikrotik0'=>'required',
            'pass_mikrotik0'=>'required',
            'user_mikrotik1'=>'required',
            'pass_mikrotik1'=>'required',
            'security_mikrotik'=>'required',
            'firewall'=>'required',
        ]);

        $router=Router::find($id);
        $router->unit=$request->get('unit');
        $router->isp=$request->get('isp');
        $router->service_type=$request->get('service_type');
        $router->sId=$request->get('sid');
        $router->bandwith=$request->get('bandwith');
        $router->ip_lan=$request->get('ip_lan');
        $router->ip_gateway=$request->get('ip_gateway');
        $router->ip_wan=$request->get('ip_wan');
        $router->merk=$request->get('merk');
        $router->serial_number=$request->get('serial_number');
        $router->model=$request->get('model');
        $router->security=$request->get('security');
        $router->backup=$request->get('backup');
        $router->keterangan=$request->get('keterangan');
        $router->tahun_pengadaan=$request->get('tahun_pengadaan');
        $router->status=$request->get('status');
        $router->latitude=$request->get('latitude');
        $router->longitude=$request->get('longitude');
        $router->status_har_lan=$request->get('status_har_lan');
        $router->tahun_har_lan=$request->get('tahun_har_lan');
        $router->user_mikrotik0=$request->get('user_mikrotik0');
        $router->pass_mikrotik0=$request->get('pass_mikrotik0');
        $router->user_mikrotik1=$request->get('user_mikrotik1');
        $router->pass_mikrotik1=$request->get('pass_mikrotik1');
        $router->security_mikrotik=$request->get('security_mikrotik');
        $router->firewall=$request->get('firewall');
        
        $router->save();
        return redirect('/router')->with('success', 'Data berhasil diupdate');
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
        $del = Router::find($id);
        $del->delete();
        return redirect()->back()->with('success','Data berhasil dihapus');
    }

    public function detail($id)
    {
        $router = Router::find($id);
        return response()->json([
            'data'=>$router
        ]);
    }
}