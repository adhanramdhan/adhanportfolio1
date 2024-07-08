<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ctgproject extends Model
{
    use HasFactory;
    protected $fillable = ['category'];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'id_category');
    }
}
