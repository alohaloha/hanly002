<?php

namespace App\Models\Eloquents;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;
    // 実際のテーブルがクラス名の複数形＆スネークケースであれば不要、自信がなければ書いてもOK
    protected $table = 'friends';
    // Eloquentを通して更新や登録が可能なフィールドを定義
    // ここで定義されてないフィールドに登録・更新しようとしても無視される
    protected $fillable = [
        'nickname', 'email', 'password', 'image_path'
    ];
}
