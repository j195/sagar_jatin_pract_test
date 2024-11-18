<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Brand extends Model
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    protected $table = 'brands';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'logo',
    ];

    public function CarModels()
    {
        return $this->hasManyThrough(CarModel::class,Brand::class,
            'id', //Foreign Key of brands table
            //'id',  // Local Key of mechanic table
            'brand_id' // Local Key of cars table
        );
    }
}
