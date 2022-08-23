<?php

namespace App\Models\Pengaturan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = "menu";

    protected $guarded = [''];

    public function getMenu()
    {
        return $this->belongsTo("App\Models\Pengaturan\Menu", "menu_id", "id");
    }
}
