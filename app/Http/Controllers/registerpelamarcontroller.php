<?php

namespace App\Http\Controllers;
use App\Models\pelamar;
use Illuminate\Http\Request;

class registerpelamarcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelamarr = pelamar::all();
        return view('auth.registerpelamar', compact('pelamarr'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelamrr= pelamar::all;

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
       'id_pelamar'=>'',
       'nama_depan'=>'',
       'nama_belakang'=>'',
       'no_hp'=>'',
       'alamat'=>'',
       'email'=>'',
       'gender'=>'',
       'berat_badan'=>'',
       'tinggi_badan'=>'',

// pendidikan
       'tingkat_pendidikan'=>'',
       'nama_sekolah'=>'',
       'lokasi_pendidikan'=>'',
       'alamat_pendidikan'=>'',
       'gelar'=>'',
       'bidang_studi'=>'',
       'tanggal_mulai'=>'',
       'tanggal_lulus'=>'',
       'ipk'=>'',
       'no_ijazah'=>'',
       'tanggal_ijazah'=>'',
       'nama_pejabat_ttd'=>'',
       'ijazah'=>'',
       'penjabat_pengasah'=>'',
       'sertifikat'=>'',

// nonformal
       'nama_kursus'=>'',
       'mulai_nonformal'=>'',
       'lulus_nonformal'=>'',
       'tempat_nonformal'=>'',
       'sertifikat_nonformal'=>'',


//prestasi
       'nama_prestasi'=>'',
       'tingkat'=>'',
       'skor_tes'=>'',
       'organisasi'=>'',

//pengalaman
       'pengalaman'=>'',
       'jenis_pekerjaan'=>'',
       'nama_perusahaan'=>'',
       'lokasi_pengalaman'=>'',
       'ttg_mulai_pengalaman'=>'',
       'ttg_akhir_pengalaman'=>'',
       'penghargaan'=>'',
          ]);

          $pelamarr =  pelamar::create([

 // pelamar
       'id_pelamar'=>$request->id_pelamar,
       'nama_depan'=>$request->nama_depan,
       'nama_belakang'=>$request->nama_belakang,
       'no_hp'=>$request->no_hp,
       'alamat'=>$request->alamat,
       'email'=>$request->email,
       'gender'=>$request->gender,
       'berat_badan'=>$request->berat_badan,
       'tinggi_badan'=>$request->tinggi_badan,

// pendidikan
       'tingkat_pendidikan'=>$request->tingkat_pendidikan,
       'nama_sekolah'=>$request->nama_sekolah,
       'lokasi_pendidikan'=>$request->lokasi_pendidikan,
       'alamat_pendidikan'=>$request->alamat_pendidikan,
       'gelar'=>$request->gelar,
       'bidang_studi'=>$request->bidang_studi,
       'tanggal_mulai'=>$request->tanggal_mulai,
       'tanggal_lulus'=>$request->tanggal_lulus,
       'ipk'=>$request->ipk,
       'no_ijazah'=>$request->no_ijazah,
       'tanggal_ijazah'=>$request->tanggal_ijazah,
       'nama_pejabat_ttd'=>$request->nama_pejabat_ttd,
       'ijazah'=>$request->ijazah,
       'penjabat_pengasah'=>$request->penjabat_pengasah,
       'sertifikat'=>$request->sertifikat,

// nonformal
       'nama_kursus'=>$request->nama_kursus,
       'mulai_nonformal'=>$request->mulai_nonformal,
       'lulus_nonformal'=>$request->lulus_nonformal,
       'tempat_nonformal'=>$request->tempat_nonformal,
       'sertifikat_nonformal'=>$request->sertifikat_nonformal,


//prestasi
       'nama_prestasi'=>$request->nama_prestasi,
       'tingkat'=>$request->tingkat,
       'skor_tes'=>$request->skor_tes,
       'organisasi'=>$request->organisasi,

//pengalaman
       'pengalaman'=>$request->pengalaman,
       'jenis_pekerjaan'=>$request->jenis_pekerjaan,
       'nama_perusahaan'=>$request->nama_perusahaan,
       'lokasi_pengalaman'=>$request->lokasi_pengalaman,
       'ttg_mulai_pengalaman'=>$request->ttg_mulai_pengalaman,
       'ttg_akhir_pengalaman'=>$request->ttg_akhir_pengalaman,
       'penghargaan'=>$request->penghargaan


          ]);

          return redirect()->route('listing.index')
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
        // $pelamarr = pelamar::where('id_pelamar', $id_pelamar)->first();
        // return view('pelamar.edit', compact('pelamarr'));
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
