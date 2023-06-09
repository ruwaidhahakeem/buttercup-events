<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Events extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
//name, date,info, time, location, host

protected $fillable =[
    'category_id',
    'name',
    'info',
    'date',
    'time',
    'location',
    'host',
];

}
