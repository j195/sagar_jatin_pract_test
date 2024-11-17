<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarModel extends Model
{
    use SoftDeletes,HasFactory;
    protected $table = 'models';
    protected $primaryKey = 'id';



    protected $fillable = [
        'name',
        'brand_id',
        'image',
        'manufacturing_year',
    ];

}
