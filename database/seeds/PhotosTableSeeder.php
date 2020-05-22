<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 
use App\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 25; $i++) { 
            $photo = new Photo;
            $photo->title = $faker->sentence(6, true);
            $photo->description = $faker->text(200);
            $photo->path = 'https://picsum.photos/200/300';
            $photo->save();
        }
    }
}
