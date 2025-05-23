<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    /** @use HasFactory<\Database\Factories\SampleFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        'due_date',
    ];
}
