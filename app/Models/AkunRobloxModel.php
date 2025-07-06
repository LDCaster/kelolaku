<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunRobloxModel extends Model
{
    use HasFactory;

    protected $table = 'akun_roblox';

    protected $fillable = [
        'nama_akun',
        'email',
        'password_hash',
        'catatan',
    ];

    public function transaksi()
    {
        return $this->hasMany(TransaksiModel::class, 'akun_roblox_id');
    }
}
