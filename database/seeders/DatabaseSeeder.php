<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Video;
use Database\Factories\CommentFactory;
use Database\Factories\PostFactory;
use Database\Factories\VideoFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);

        PostFactory::new()->times(20)->create();
        VideoFactory::new()->times(20)->create();

        CommentFactory::new()->create([
            'commentable_type' => Video::class,
            'commentable_id' => 1,
        ]);
        CommentFactory::new()->create([
            'commentable_type' => Video::class,
            'commentable_id' => 3,
        ]);

        CommentFactory::new()->create([
            'commentable_type' => Post::class,
            'commentable_id' => 3,
        ]);
    }
}
