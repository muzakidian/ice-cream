<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesan;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pesan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'namadepan' => 'required',
            'namabelakang' => 'required',
            'pesan' => 'required',
            'email' => 'required',
            'nohp' => 'required'
        ]);
        $pesan = new Pesan;
        $pesan->nama_depan = $request->namadepan;
        $pesan->nama_belakang = $request->namabelakang;
        $pesan->pesan = $request->pesan;
        $pesan->email = $request->email;
        $pesan->nohp = $request->nohp;
        $pesan->save();
        return redirect(route('makasih'))->with('successMsg','Pesanan Telah ditambah!');
    }
    public function makasih(){
        return view('makasih');
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
