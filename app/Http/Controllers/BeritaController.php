<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SubtopikModel;
use App\BeritaModel;

class BeritaController extends Controller
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
    public function post()
    {
        //
        $subtopik = SubtopikModel::get();
        $data['subtopik_opt'][''] ='';
        foreach($subtopik as $row){
          $data['subtopik_opt'][$row->id] = $row->nama_sub_topik;
        }
        return view('berita.post',$data);
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
    }

    public function posting(Request $request){
      $berita = new BeritaModel;
      $berita->judul = $request->judul;
      $berita->id_media = $request->media;
      $berita->id_sub_topik = $request->subtopik;
      // $berita->id_topik = $request->topik;
      $berita->id_narasumber1 = $request->narasumber1;
      $berita->id_narasumber2 = $request->narasumber2;
      $berita->id_narasumber3 = $request->narasumber3;
      $berita->id_narasumber4 = $request->narasumber4;
      $berita->halaman = 7;
      $berita->link_berita = "http://www.google.com";
      $berita->wartawan = "aduh wartawan";
      $berita->tone_berita = 1;
      $berita->tone_judul = 1;
      $berita->tone_kutipan = 1;
      $berita->ad_value = 100;
      $berita->news_value = 200;
      $berita->tgl_berita = date('Y-m-d');
      $berita->tgl_post = date('Y-m-d H:i:s');
      $berita->kutipan = "aku adalah kutipan";
      $berita->isi_berita ="ini isi berita";
      $berita->jenis_berita = "Kemenristekdikti";
      $berita->save();

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

    public function cari(Request $request){
      $data['tone_berita_opt'][''] = "";
      $data['tone_berita_opt']['1'] = "Positif";
      $data['tone_berita_opt']['0'] = "Netral";
      $data['tone_berita_opt']['-1'] = "Negatif";
      return view('berita.cari',$data);
    }
}
