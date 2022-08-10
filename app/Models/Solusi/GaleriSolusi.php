<?php

namespace App\Models\Solusi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriSolusi extends Model
{
    use HasFactory;

    protected $table = "galeri_solusi";

    protected $guarded = [''];

    public function getSolusi()
    {
        return $this->belongsTo("App\Models\Solusi\Solusi", "id_solusi", "id");
    }
}
