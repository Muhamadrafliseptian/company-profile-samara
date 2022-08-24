<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyCase extends Model
{
    use HasFactory;

    protected $table = "study_case";

    protected $guarded = [''];

    public function getUser()
    {
        return $this->belongsTo("App\Models\User", "id_user", "id");
    }
}
