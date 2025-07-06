<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriGameModel extends Model
{
    use HasFactory;

    protected $table = 'kategori_game';

    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];

    public function itemGame()
    {
        return $this->hasMany(ItemGameModel::class, 'kategori_game_id');
    }

    public function transaksi()
    {
        return $this->hasMany(TransaksiModel::class, 'kategori_game_id');
    }
}
