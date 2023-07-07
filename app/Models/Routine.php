<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'details',
        'image',
    ];

    protected $casts = [
        'image' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
