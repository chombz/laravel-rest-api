<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory; // 👈 Add this to enable factory support

    protected $fillable =
    [
        'first_name',
        'last_name',
        'email',
    ];
}
