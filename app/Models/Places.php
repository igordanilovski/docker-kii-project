<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    use HasFactory;

    protected $table = 'places';
    protected $fillable = ['amenity', 'name_mk', 'name_en', 'name', 'website'];
    public $timestamps = false;

    public function __construct()
    {

    }
}
