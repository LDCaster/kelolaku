<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiModel extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'akun_roblox_id',
        'kategori_game_id',
        'item_game_id',
        'tipe_transaksi',
        'jumlah',
        'harga_satuan',
        'total',
        'keterangan',
        'tanggal',
    ];

    public function akunRoblox()
    {
        return $this->belongsTo(AkunRobloxModel::class, 'akun_roblox_id');
    }

    public function kategoriGame()
    {
        return $this->belongsTo(KategoriGameModel::class, 'kategori_game_id');
    }

    public function itemGame()
    {
        return $this->belongsTo(ItemGameModel::class, 'item_game_id');
    }
}
