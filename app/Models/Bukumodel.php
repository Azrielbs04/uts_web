<?php

namespace App\Models;
use CodeIgniter\Model;

class Bukumodel extends Model{

    protected $table ='Buku';
    protected $allowedFields = ['nomor','nama','deskripsi','stok','penerbit'];
}