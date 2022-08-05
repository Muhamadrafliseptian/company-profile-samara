<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "post";

    protected $guarded = [''];

    public function getKategori()
    {
        return $this->belongsTo("App\Models\Blog\Kategori", "id_kategori", "id");
    }

    public function getUser()
    {
        return $this->belongsTo("App\Models\User", "id_user", "id");
    }
}
