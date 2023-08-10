<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    use SoftDeletes; //論理削除設定の為

    public function informations() {
        return $this->hasMany('App\Models\Information');
    }
}
