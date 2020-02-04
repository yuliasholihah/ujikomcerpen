<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cerpen extends Model
{
    protected $fillable = [
        'judul','gambar','konten',
        'konten','id_kategori','id_penulis'
    ];
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo('App\Kategori','id_kategori');
    }

    public function penulis()
    {
        return $this->belongsTo('App\Penulis','id_penulis');
    }

}
