<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'features',
        'short_description', // Agregar esta línea
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            $project->slug = Str::slug($project->name);
        });

        static::updating(function ($project) {
            $project->slug = Str::slug($project->name);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
