<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posteo extends Model
{
    use HasFactory;

    protected $fillable = [
        'posteo',
    ];

     public function Posteos()
    {
        return $this->HasMany(User::class);
    }
}
