<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;

    public function detail_diagnosis(){
        return $this->hasMany(detail_diagnosis::class);
    }
}
