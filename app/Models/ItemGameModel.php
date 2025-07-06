<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemGameModel extends Model
{
    use HasFactory;

    protected $table = 'item_game';

    protected $fillable = [
        'kategori_game_id',
        'nama_item',
        'tipe_item',
        'deskripsi',
    ];

    public function kategoriGame()
    {
        return $this->belongsTo(KategoriGameModel::class, 'kategori_game_id');
    }

    public function transaksi()
    {
        return $this->hasMany(TransaksiModel::class, 'item_game_id');
    }
}
