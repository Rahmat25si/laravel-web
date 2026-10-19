<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'pelanggan';

    // Primary key custom (karena bukan id bawaan)
    protected $primaryKey = 'pelanggan_id';

    // Kolom yang boleh diisi secara massal (Mass Assignment)
    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'email',
        'phone',
    ];
}
