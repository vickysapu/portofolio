<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sosmed extends Model
{
    use HasFactory;
    protected $fillable = ['facebook','whatsapp','instagram','github'];
}