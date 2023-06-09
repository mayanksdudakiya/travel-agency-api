<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Travel extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'travels';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'number_of_days',
        'is_public',
        'created_by',
        'updated_by',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
