<?php

namespace App\Http\Controllers;

use Auth;
use App\Product;
use App\Pengajuanpetani;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pengajuanpetani = Pengajuanpetani::all();
      return view('user.petani.product.index', compact('pengajuanpetani'));
    }

    public function proyeksaya()
    {
      $pengajuanpetani = Pengajuanpetani::where('user_id', Auth::User()->id)->get();
      return view('user.petani.product.proyeksaya', compact('pengajuanpetani'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.petani.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'namaproyek' => 'required',
        'luaslahan' => 'required',
        'satuan' => 'required',
        'jenistanaman' => 'required',
        'jangkawaktu' => 'required',
        'surattanah' => 'required',
        'NPWP' => 'required',
      ]);

      $file1 = $request->file('surattanah');
      $nama_file1 = time()."_".$file1->getClientOriginalName();
      $tujuan_upload1 = 'imgupl/surattanah';
      $file1->move($tujuan_upload1,$nama_file1);

      $file2 = $request->file('NPWP');
      $nama_file2 = time()."_".$file2->getClientOriginalName();
      $tujuan_upload2 = 'imgupl/NPWP';
      $file2->move($tujuan_upload2,$nama_file2);

      $pengajuanpetani = new Pengajuanpetani;
      $pengajuanpetani->namaproyek = $request->namaproyek;
      $pengajuanpetani->luaslahan = $request->luaslahan;
      $pengajuanpetani->satuan = $request->satuan;
      $pengajuanpetani->jenistanaman = $request->jenistanaman;
      $pengajuanpetani->jangkawaktu = $request->jangkawaktu;
      $pengajuanpetani->surattanah = $nama_file1;
      $pengajuanpetani->NPWP = $nama_file2;
      Auth::user()->pengajuanpetani()->save($pengajuanpetani);
      return redirect('home/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
