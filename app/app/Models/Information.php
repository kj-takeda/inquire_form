<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    use SoftDeletes; //論理削除設定の為

    public function gender() {
        return $this->belongsTo('App\Models\Gender');
    }
}
