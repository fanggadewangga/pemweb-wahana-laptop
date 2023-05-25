<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $filltable = ['id_barang', 'jenis_barang', 'merk_barang', 'tipe_barang', 'spesifikasi', 'tanggal_masuk_gudang', 'foto_barang', 'garansi', 'stok', 'harga_satuan', 'kelengkapan'];
};
