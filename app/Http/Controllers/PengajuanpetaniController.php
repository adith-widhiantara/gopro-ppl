<?php

namespace App\Http\Controllers;

use Auth;
use App\Pengajuanpetani;
use App\Investasi;
use Illuminate\Http\Request;

class PengajuanpetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pengajuanpetani $pengajuanpetani)
    {
      $investasi = new Investasi;
      $investasi-> pengajuanpetani_id = $request-> pengajuanpetani_id;
      Auth::user()->investasi()->save($investasi);

      return redirect()->route('buktitf', $pengajuanpetani->id);
    }

    public function buktitf(Pengajuanpetani $pengajuanpetani)
    {
      return view('user.investor.buktitf');
    }

    public function upbuktitf(Request $request, Pengajuanpetani $pengajuanpetani)
    {
      $file1 = $request->file('buktitf1');
      $nama_file1 = time()."_".$file1->getClientOriginalName();
      $tujuan_upload1 = 'imgupl/buktitf1';
      $file1->move($tujuan_upload1,$nama_file1);

      Investasi::where('pengajuanpetani_id', $pengajuanpetani->id)
          ->update([
            'buktitf1' => $nama_file1,
          ]);

      Pengajuanpetani::where('id', $pengajuanpetani->id)
          ->update([
            'check' => 3,
          ]);
    }

    public function transfer()
    {
      $investasi = Investasi::all();
      return view('user.petani.tf', compact('investasi'));
    }

    public function detailtransfer(Investasi $investasi)
    {
      $investasi = Investasi::findOrFail($investasi->id);
      return view('user.petani.tfdetail', compact('investasi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengajuanpetani  $pengajuanpetani
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajuanpetani $pengajuanpetani)
    {
        $pengajuanpetani = Pengajuanpetani::findOrFail($pengajuanpetani -> id);
        return view('user.investor.detailproyek', compact('pengajuanpetani'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengajuanpetani  $pengajuanpetani
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengajuanpetani $pengajuanpetani)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengajuanpetani  $pengajuanpetani
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengajuanpetani $pengajuanpetani)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengajuanpetani  $pengajuanpetani
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengajuanpetani $pengajuanpetani)
    {
        //
    }
}
