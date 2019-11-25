<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function daftar(){
      return view('user.create');
    }

    public function bio(){
      $datauser = User::all();
      return view('user.createbiodata', ['datauser' => $datauser]);
    }

    public function uploadphoto(Request $request){
      $this->validate($request, [
  			'photo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
  		]);

      $file = $request->file('photo');
      $nama_file = time()."_".$file->getClientOriginalName();

      $tujuan_upload = 'imgupl/photoprofile';
      $file->move($tujuan_upload,$nama_file);

      User::where('id', Auth::user()->id)
            ->update([
            'photo' => $nama_file,
          ]);

      return redirect('home/bio');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.all.read');
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
    public function store(Request $request)
    {
      $this->validate($request, [
        'nama' => 'required|max:255',
        'tanggallahir' => 'required|max:255',
        'jeniskelamin' => 'required|max:255',
        'status' => 'required|max:255',
        'username' => 'required|max:255|unique:users,username',
        'kontak' => 'required|max:255',
        'ktp' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        'perusahaan' => 'required|max:255',
      ]);

      $file = $request->file('ktp');
      $nama_file = time()."_".$file->getClientOriginalName();

      $tujuan_upload = 'imgupl/ktp';
      $file->move($tujuan_upload,$nama_file);

      User::where('id', Auth::user()->id)
            ->update([
            'nama' => $request['nama'],
            'tanggallahir' => $request['tanggallahir'],
            'jeniskelamin' => $request['jeniskelamin'],
            'status' => $request['status'],
            'username' => $request['username'],
            'kontak' => $request['kontak'],
            'ktp' => $nama_file,
            'perusahaan' => $request['perusahaan'],
          ]);

      return redirect('home');
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
    public function edit()
    {
        return view('user.all.update');
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
        'nama' => 'required|max:255',
        'tanggallahir' => 'required|max:255',
        'jeniskelamin' => 'required|max:255',
        'status' => 'required|max:255',
        'username' => 'required|max:255|unique:users,username',
        'kontak' => 'required|max:255',
      ]);

      User::where('id', Auth::user()->id)
            ->update([
            'nama' => $request['nama'],
            'tanggallahir' => $request['tanggallahir'],
            'jeniskelamin' => $request['jeniskelamin'],
            'status' => $request['status'],
            'username' => $request['username'],
            'kontak' => $request['kontak']
          ]);

      return redirect('home');
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
