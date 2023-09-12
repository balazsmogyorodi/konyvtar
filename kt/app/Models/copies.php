<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class copies extends Model
{
    use HasFactory;
    public $timestamp = false;

    protected $primaryKey = 'copy_id';

    protected $fillable = [
        'copy_id',
        'book_id',
        'user_id',
    ];
}
