<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Information extends Model
{
    use HasFactory;
    use SoftDeletes; //論理削除設定の為

    // 参照させたいSQLのテーブル名を指定
    protected $table = 'informations';

    public function gender() {
        return $this->belongsTo('App\Models\Gender');
    }
}
