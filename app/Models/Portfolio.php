<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model

{
    use HasFactory;

    protected $fillable = [
        'title',
        'caption',
        'id_category',
        'id_images',
    ];

    public function category()
    {
        return $this->belongsTo(Ctgproject::class, 'id_category');
    }

    public function images()
    {
        return $this->belongsTo(Imgproject::class, 'id_images');
    }



}

// {
//     use HasFactory;
//     protected $fillable = ['category' , 'image' , 'title' , 'caption'];
// }
