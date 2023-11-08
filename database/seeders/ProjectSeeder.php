<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $project = new Project();

            $project->title = $faker->realText(20);
            $project->description = $faker->realText();
            $project->slug = Str::slug($project->title, '-');
            $project->cover_image = 'cover_images/' . $faker->image('storage/app/public/cover_images', fullPath: true);

            $project->save();
        }
    }
}
