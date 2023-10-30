<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    protected $table ="cities";
    protected $fillable =["state_id" , "city_name" ,"status"];
    use HasFactory;
}
