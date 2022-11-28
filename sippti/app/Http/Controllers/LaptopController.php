<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewLaptop=Laptop::all();
        return view('laptop', compact('viewLaptop'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createLaptop');
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
            'nip'=>'required',
            'nama'=>'required',
            'jabatan'=>'required',
            'no_seri'=>'required',
            'merk'=>'required',
            'tipe'=>'required',
            'ram'=>'required',
            'storage'=>'required',
            'standart_alat'=>'required',
            'fungsi'=>'required',
            'spesifikasi'=>'required'
        ]);
        $simpan=Laptop::firstOrCreate([
            'nip'=>$request->get('nip'),
            'nama'=>$request ->get('nama'),
            'jabatan'=>$request ->get('jabatan'),
            'no_seri'=>$request->get('no_seri'),
            'merk'=>$request->get('merk'),
            'tipe'=>$request->get('tipe'),
            'ram'=>$request->get('ram'),
            'storage'=>$request->get('storage'),
            'standart_alat'=>$request->get('standart_alat'),
            'fungsi'=>$request->get('fungsi'),
            'spesifikasi'=>$request->get('spesifikasi'),
        ]);
        $simpan->save();
        return redirect('/laptop')->with('success', 'Data berhasil disimpan');
        //
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
        $laptop = Laptop::find($id);
        return view('LaptopEdit', compact('laptop'));
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
            'nip'=>'required',
            'nama'=>'required',
            'jabatan'=>'required',
            'no_seri'=>'required',
            'merk'=>'required',
            'tipe'=>'required',
            'ram'=>'required',
            'storage'=>'required',
            'standart_alat'=>'required',
            'fungsi'=>'required',
            'spesifikasi'=>'required'
        ]);
        $laptop=Laptop::find($id);
            $laptop->nip= $request->get('nip');
            $laptop->nama= $request ->get('nama');
            $laptop->jabatan= $request ->get('jabatan');
            $laptop->no_seri= $request->get('no_seri');
            $laptop->merk= $request->get('merk');
            $laptop->tipe= $request->get('tipe');
            $laptop->ram= $request->get('ram');
            $laptop->storage= $request->get('storage');
            $laptop->standart_alat= $request->get('standart_alat');
            $laptop->fungsi= $request->get('fungsi');
            $laptop->spesifikasi= $request->get('spesifikasi');

        $laptop->save();
        return redirect('/laptop')->with('success', 'Data berhasil diupdate');
        //
    }
    
    public function detail($id)
    {
        $laptop = Laptop::find($id);
        return response()-> json([
            'data' =>$laptop
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
        $del = Laptop::find($id);
        $del->delete();

        return redirect()->back()->with('success','Data berhasil dihapus');
        //
    }
}
