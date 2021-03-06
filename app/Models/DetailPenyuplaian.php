<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenyuplaian extends Model
{
    use HasFactory;

    protected $table ="detail_penyuplaian";
    public $primaryKey ="id_detail_penyuplaian";
    public $keyType = "string";

    protected $fillable = [
        'id_detail_penyuplaian',
        'id_penyuplaian',
        'id_bahan_baku',
        'harga_beli',
        'kuantitas'
    ];

    public function penyuplaian()
    {
        return $this->belongsTo(Penyuplaian::class, 'id_penyuplaian', 'id_penyuplaian');
    }

    public function bahan_baku()
    {
        return $this->belongsTo(BahanBaku::class, 'id_bahan_baku', 'id_bahan_baku');
    }
}
