<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalasKomentar extends Model
{
    use HasFactory;

    protected $table = "balas_komentar";

    protected $guarded = [''];

    public function getUser()
    {
        return $this->belongsTo("App\Models\User", "id_user", "id");
    }
}
