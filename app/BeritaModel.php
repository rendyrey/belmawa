<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeritaModel extends Model
{
    //
    protected $table = 'isi_berita';
    protected $fillable = ['id_media','id_narasumber1','id_narasumber2','id_narasumber3','id_narasumber4',
  'id_sub_topik','judul','jenis_berita','isi_berita','wartawan','link_berita','halaman','gambar','kutipan','tone_berita','tone_judul',
'tone_judul','tone_kutipan','ad_value','news_value','tgl_berita','tgl_post'];
}
