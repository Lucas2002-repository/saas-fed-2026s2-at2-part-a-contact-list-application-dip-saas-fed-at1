<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Database\Factories\TopicFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/** @use HasFactory<TopicFactory> */
class Topic extends Model
{
    /** @use HasFactory<TopicFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'available',
    ];
}
