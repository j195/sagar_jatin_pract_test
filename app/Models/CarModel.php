<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarModel extends Model
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    protected $table = 'models';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];



    protected $fillable = [
        'name',
        'brand_id',
        'image',
        'manufacturing_year',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }

}
