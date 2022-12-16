<?php

namespace App\Models\pengaturan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $table = "projects";

    protected $guarded = [''];
}
