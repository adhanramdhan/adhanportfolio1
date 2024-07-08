<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imgproject extends Model
{
    use HasFactory;
    protected $fillable = ['images'];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'id_images');
    }
}
