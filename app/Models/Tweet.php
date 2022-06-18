<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    //今回は問題ないけど，テーブルと明示的に紐づけをする必要がある場合
    // protected $table = 'tweets';
}
