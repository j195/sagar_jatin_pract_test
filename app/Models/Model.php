<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Models extends Model
{
    use SoftDeletes;
    protected $table = 'models';
    protected $primaryKey = 'id';



    protected $fillable = [
        'name',
        'brand_id',
        'image',
        'manufacturing_year'
    ];

}
