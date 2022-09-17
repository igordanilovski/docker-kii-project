<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportedPlaces extends Model
{
    use HasFactory;

    protected $table = 'reported_places';
    protected $fillable = ['place_id'];
    public $timestamps = false;

    public function __construct()
    {

    }
}
