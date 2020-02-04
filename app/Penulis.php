<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
protected $table="penulis";
protected $primaryKey="id";
protected $fillable=['nm_penulis','alamat','no_telp'];
public $timestamps = false;
}
