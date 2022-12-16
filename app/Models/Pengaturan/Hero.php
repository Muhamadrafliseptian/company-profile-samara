<?php

namespace App\Models\pengaturan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $table = "hero";

    protected $guarded = [''];
}
