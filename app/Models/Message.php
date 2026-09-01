<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\MessageFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    /** @use HasFactory<MessageFactory> */
    use HasFactory;

    protected $fillable = [
        'topic_id',
        'name',
        'email',
        'subject',
        'message',
        'read_at',
    ];

    protected function casts(): array
// {
//     return [
//         'read_at' => 'datetime',
//     ];
// }
}
