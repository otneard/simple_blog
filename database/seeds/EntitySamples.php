<?php

use Illuminate\Database\Seeder;
use App\Post;

class EntitySamples extends Seeder
{
    /**
     * Run the database seeds.
     * Insert sample data into entity tables
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->author = 1;
        $post->title = 'This is a sample post';
        $post->content = 'This is the first sample post. Feel free to update or delete this.';
        $post->save();
    }
}
