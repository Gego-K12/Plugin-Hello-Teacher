<?php

namespace Gegok12\HelloTeacher\Models;

use Illuminate\Database\Eloquent\Model;

class MotivationalQuote extends Model
{
    protected $table = 'motivational_quotes';

    protected $fillable = [
        'quote',
        'author',
        'category',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public static function getRandomQuote()
    {
        return self::where('is_active', true)->inRandomOrder()->first();
    }

    public static function getRandomByCategory($category)
    {
        return self::where('is_active', true)
            ->where('category', $category)
            ->inRandomOrder()
            ->first();
    }
}
