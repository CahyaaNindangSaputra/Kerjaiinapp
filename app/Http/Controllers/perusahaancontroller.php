<?php

namespace App\Http\Controllers;
use App\Models\perusahaan;
use Illuminate\Http\Request;

class perusahaancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $perusahaann = perusahaan::all();
        return view('perusahaan.index', compact('perusahaann'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perusahaann=perusahaan::all();
        return view('perusahaan.tambah', compact('perusahaann'));
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

        //   $file = $request->file('akta_pendiri_perusahaan');
        //   $file->storeAs('public/foto', $file->hasName());

        //   $file = $request->file('siup');
        //   $file->storeAs('public/foto', $file->hasName());

        //   $file = $request->file('tdp');
        //   $file->storeAs('public/foto', $file->hasName());

          $perusahaann = perusahaan::create([

//perusahaan
      'id_perusahaan'=>$request->id_perusahaan,
      'nama_perusahaan'=>$request->nama_perusahaan,
      'jenis_usaha'=>$request->jenis_usaha,
      'no_telp_perusahaan'=>$request->no_telp_perusahaan,
      'email'=>$request->email,
      'website'=>$request->website,
      'deskripsi_perusahaan'=>$request->deskripsi_perusahaan,


//lokasi perusahaan
      'alamat_perusahaan'=>$request->alamat_perusahaan,
      'provinsi'=>$request->provinsi,
      'kecamatan'=>$request->kecamatan,
      'kode_pos'=>$request->kode_pos,
      'nama_alamat'=>$request->nama_alamat,

//cpperusahaan
      'nama_cp'=>$request->nama_cp,
      'no_telp_cp'=>$request->no_telp_cp,
      'email_cp'=>$request->email_cp,
      'alamat_cp'=>$request->alamat_cp,
      'jabatan_cp'=>$request->jabatan_cp,


//legalitas
      'akta_pendiri_perusahaan'=>$request->akta_pendiri_perusahaan,
      'tanggal_penegasan'=>$request->tanggal_penegasan,
      'nama_notaris'=>$request->nama_notaris,
      'siup'=>$request->siup,
      'npwp'=>$request->npwp,
      'bentuk_penanaman_modal'=>$request->bentuk_penanaman_modal,
      'tdp'=>$request->tdp,
      'nib'=>$request->nib
          ]);

          return redirect()->route('perusahaann.index')
          ->with('success', 'ok');
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
        $perusahaann =perusahaan::oldest('id')->simplepaginate(1);
        return view('perusahaan.detail',compact('perusahaann'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_perusahaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perusahaann = perusahaan::where('id', $id)->first();
        return view('perusahaan.edit', compact('perusahaann'));
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


        $perusahaann = perusahaan::where('id', $id);


        $perusahaann->update($request->except('_token','_method'));
        return redirect()->route('perusahaann.index')
        ->with('success', ' Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_perusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perusahaann=perusahaan::where('id', $id);
        $perusahaann->delete();
        return redirect()->route('perusahaann.index')
        ->with('success', 'Delete');
    }
}
