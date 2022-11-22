<?php

namespace App\Http\Controllers;
use App\Models\lokasi;
use Illuminate\Http\Request;

class lokasicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasii = lokasi::all();
        return view('lokasi.index', compact('lokasii'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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

//perusahaan
      'id_perusahaan'=>'',
      'nama_perusahaan'=>'',
      'jenis_usaha'=>'',
      'no_telp_perusahaan'=>'',
      'email'=>'',
      'website'=>'',
      'deskripsi_perusahaan'=>'',


//lokasi perusahaan
      'alamat_perusahaan'=>'',
      'provinsi'=>'',
      'kecamatan'=>'',
      'kode_pos'=>'',
      'nama_alamat'=>'',

//cpperusahaan
      'nama_cp'=>'',
      'no_telp_cp'=>'',
      'email_cp'=>'',
      'alamat_cp'=>'',
      'jabatan_cp'=>'',


//legalitas
      'akta_pendiri_perusahaan'=>'',
      'tanggal_penegasan'=>'',
      'nama_notaris'=>'',
      'siup'=>'',
      'npwp'=>'',
      'bentuk_penanaman_modal'=>'',
      'tdp'=>'',
      'nib'=>'',
          ]);

          $cp = perusahaan::create([


//lokasi perusahaan
      'alamat_perusahaan'=>$request->alamat_perusahaan,
      'provinsi'=>$request->provinsi,
      'kecamatan'=>$request->kecamatan,
      'kode_pos'=>$request->kode_pos,
      'nama_alamat'=>$request->nama_alamat,


          ]);

          return redirect()->route('lokasiperusahaann.index')
          ->with('success', 'ok');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_perusahaan
     * @return \Illuminate\Http\Response
     */
    public function show($id_perusahaan)
    {
        $lokasii =lokasi::oldest('id_perusahaan')->simplepaginate(1);
        return view('lokasi.detail',compact('lokasii'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_perusahaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id_perusahaan)
    {
        $lokasii = lokasi::where('id_perusahaan', $id_perusahaan)->first();
        return view('lokasi.edit', compact('lokasii'));
    }

  /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_perusahaan)
    {
        $this->validate($request, [
            //perusahaan
      'id_perusahaan'=>'',
      'nama_perusahaan'=>'',
      'jenis_usaha'=>'',
      'no_telp_perusahaan'=>'',
      'email'=>'',
      'website'=>'',
      'deskripsi_perusahaan'=>'',


//lokasi perusahaan
      'alamat_perusahaan'=>'',
      'provinsi'=>'',
      'kecamatan'=>'',
      'kode_pos'=>'',
      'nama_alamat'=>'',

//cpperusahaan
      'nama_cp'=>'',
      'no_telp_cp'=>'',
      'email_cp'=>'',
      'alamat_cp'=>'',
      'jabatan_cp'=>'',


//legalitas
      'akta_pendiri_perusahaan'=>'',
      'tanggal_penegasan'=>'',
      'nama_notaris'=>'',
      'siup'=>'',
      'npwp'=>'',
      'bentuk_penanaman_modal'=>'',
      'tdp'=>'',
      'nib'=>''
        ]);


        $lokasii = lokasi::where('id_perusahaan', $id_perusahaan);


        $lokasii->update($request->except('_token','_method'));
        return redirect()->route('lokasiperusahaann.index')
        ->with('success', ' Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_perusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_perusahaan)
    {
        $lokasii=lokasi::where('id_perusahaan', $id_perusahaann);
        $lokasii->delete();
        return redirect()->route('lokasiperusahaann.index')
        ->with('success', 'Delete');
    }
}
