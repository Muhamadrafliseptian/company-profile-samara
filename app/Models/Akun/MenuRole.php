<?php

namespace App\Models\Akun;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuRole extends Model
{
    use HasFactory;

    protected $table = "menu_role";

    protected $guarded = [''];
}
