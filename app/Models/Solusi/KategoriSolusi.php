<?php

namespace App\Models\Solusi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriSolusi extends Model
{
    use HasFactory;

    protected $table = "kategori_solusi";

    protected $guarded = [''];
}
