<?php

namespace App\Models\Solusi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    use HasFactory;

    protected $table = "solusi";

    protected $guarded = [''];

    public function getKategoriSolusi()
    {
        return $this->belongsTo("App\Models\Solusi\KategoriSolusi", "id_kategori_solusi", "id");
    }
}
