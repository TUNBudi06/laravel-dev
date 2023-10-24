<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(string $id)
 * @method static find()
 */
class komentar extends Model
{
    use HasFactory;

    protected $fillable = [
        "name","email","message"
    ];
}
