<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'detail_description',
        'images',
        'is_active'
    ];

    protected $table = "case_studies";

    protected $casts = [
        'is_active' => 'boolean',
        'images' => 'array',
    ];
}
