<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    protected $table = 'rides';
    protected $fillable = ['nama_depan','nama_belakang','alamat_email','daerah_orderan','nomor_hp','tempat_lahir','tgl_lahir','status'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
