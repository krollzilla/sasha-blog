<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'post_id' => 1,
            'user_id' => -1,
            'content' => 'Great post!',
            'created_at' => NOW()

        ]);

        DB::table('comments')->insert([
            'post_id' => 1,
            'user_id' => -1,
            'content' => 'Bad post!',
            'created_at' => NOW()

        ]);

        DB::table('comments')->insert([
            'post_id' => 1,
            'user_id' => -1,
            'content' => 'Cool post!',
            'created_at' => NOW()

        ]);

    }
}
