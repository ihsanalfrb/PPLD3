<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UserSeeder::class);
        $this->call(BatikTableSeeder::class);
        $this->call(TagBatikTableSeeder::class);
        $this->call(ForumThreadsSeeder::class);
        $this->call(CommentsSeeder::class);
    }
}
