<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'datas';
    protected $fillable = [
        'sample',
        'lampu',
        'tt',
        'jd',
        'jaccard',
        'cosine_distance',
        'manhattan'
    ];
}
