<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Song;

use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory
{
    protected $model = Song::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'cover' => fake()->image(),
            'lyrics' => 'lyrics...',
            'youtube_embed_script' => '',
            'description' => 'write your description here...',
        ];
    }
}
