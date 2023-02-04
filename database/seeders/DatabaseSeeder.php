<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\PostTranslation;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            $post = Post::factory()->create();
            
            PostTranslation::factory()->create([
                'post_id' => $post->id,
                'locale' => 'id',
            ]);
            PostTranslation::factory()->create([
                'post_id' => $post->id,
                'locale' => 'en',
            ]);
        }

        // \App\Models\PostTranslation::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
