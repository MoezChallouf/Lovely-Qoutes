<?php

namespace Database\Seeders;

use App\Models\Idea;
use Illuminate\Database\Seeder;

class IdeasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()



    {
        Idea::create([
            'content' => 'Sample idea 1',
            'likes' => 10,
        ]);

        Idea::create([
            'content' => 'Sample idea 2',
            'likes' => 5,
        ]);

        // Add more sample ideas if needed...
    }

}
