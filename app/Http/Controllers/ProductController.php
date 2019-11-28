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

    public function proyeksayadetail(Pengajuanpetani $pengajuanpetani)
    {
      $pengajuanpetani = Pengajuanpetani::findOrFail($pengajuanpetani->id);
      return view('user.petani.product.detail', compact('pengajuanpetani'));
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
        'alamat' => 'required',
        'surattanah' => 'required',
        'NPWP' => 'required',
        'gambar1' => 'required',
        'gambar2' => 'required',
        'gambar3' => 'required',
      ]);

      $file1 = $request->file('surattanah');
      $nama_file1 = time()."_".$file1->getClientOriginalName();
      $tujuan_upload1 = 'imgupl/surattanah';
      $file1->move($tujuan_upload1,$nama_file1);

      $file2 = $request->file('NPWP');
      $nama_file2 = time()."_".$file2->getClientOriginalName();
      $tujuan_upload2 = 'imgupl/NPWP';
      $file2->move($tujuan_upload2,$nama_file2);

      $file3 = $request->file('gambar1');
      $nama_file3 = time()."_".$file3->getClientOriginalName();
      $tujuan_upload3 = 'imgupl/gambar1';
      $file3->move($tujuan_upload3,$nama_file3);

      $file4 = $request->file('gambar2');
      $nama_file4 = time()."_".$file4->getClientOriginalName();
      $tujuan_upload4 = 'imgupl/gambar2';
      $file4->move($tujuan_upload4,$nama_file4);

      $file5 = $request->file('gambar3');
      $nama_file5 = time()."_".$file5->getClientOriginalName();
      $tujuan_upload5 = 'imgupl/gambar3';
      $file5->move($tujuan_upload5,$nama_file5);

      $pengajuanpetani = new Pengajuanpetani;
      $pengajuanpetani->namaproyek = $request->namaproyek;
      $pengajuanpetani->luaslahan = $request->luaslahan;
      $pengajuanpetani->satuan = $request->satuan;
      $pengajuanpetani->jenistanaman = $request->jenistanaman;
      $pengajuanpetani->jangkawaktu = $request->jangkawaktu;
      $pengajuanpetani->alamat = $request->alamat;
      $pengajuanpetani->surattanah = $nama_file1;
      $pengajuanpetani->NPWP = $nama_file2;
      $pengajuanpetani->gambar1 = $nama_file3;
      $pengajuanpetani->gambar2 = $nama_file4;
      $pengajuanpetani->gambar3 = $nama_file5;
      Auth::user()->pengajuanpetani()->save($pengajuanpetani);
      return redirect('home/product');
    }

// Surveyor
    public function rencanaproyek()
    {
      $pengajuanpetani = Pengajuanpetani::all();
      return view('user.surveyor.proyek.datarencana', compact('pengajuanpetani'));
    }

    public function detailproyek(Pengajuanpetani $pengajuanpetani)
    {
      $pengajuanpetani = Pengajuanpetani::findOrFail($pengajuanpetani->id);
      return view('user.surveyor.proyek.detail', compact('pengajuanpetani'));
    }

    public function biayaoperasional(Pengajuanpetani $pengajuanpetani)
    {
      $pengajuanpetani = Pengajuanpetani::findOrFail($pengajuanpetani->id);
      return view('user.surveyor.proyek.biayaoperasional', compact('pengajuanpetani'));
    }

    public function upbiayaoperasional(Request $request, Pengajuanpetani $pengajuanpetani)
    {
      

      Pengajuanpetani::where('id', $pengajuanpetani->id)
            ->update([
            'check' => 1,
            'aberatpupuk' => $request -> beratpupuk,
            'asatuanpupuk' => $request -> satuanpupuk,
            'atotalpupuk' => $request -> beratpupuk * $request -> satuanpupuk,
            'aberatbibit' => $request -> beratbibit,
            'asatuanbibit' => $request -> satuanbibit,
            'atotalbibit' => $request -> beratbibit * $request -> satuanbibit,
            'atotaloperasional' => $request -> totaloperasional,
            'ajumlahkaryawan' => $request -> jumlahkaryawan,
            'asatuankaryawan' => $request -> satuankaryawan,
            'atotalkaryawan' => $request -> jumlahkaryawan * $request -> satuankaryawan,
            'asewalahan' => $request -> sewalahan,
            'atotalperalatan' => $request -> totalperalatan,
            'atotalsemua' => $request -> totalperalatan + $request -> sewalahan + $request -> beratpupuk * $request -> satuanpupuk + $request -> beratbibit * $request -> satuanbibit + $request -> totaloperasional + $request -> jumlahkaryawan * $request -> satuankaryawan,
          ]);

          return redirect()->route('profile', [$user]);
    }
// End Surveyor

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
