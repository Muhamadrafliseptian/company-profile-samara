<?php

namespace App\Models\IndexHome;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogHome extends Model
{
    use HasFactory;
    protected $table = 'blog_homes';
    protected $guarded = [];
}
