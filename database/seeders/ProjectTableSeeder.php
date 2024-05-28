<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Functions\Helper as Help;
use Faker\Generator as Faker;
use App\Models\Type;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<15; $i++){
            $new_project = new Project();
            $new_project->title = $faker->words(4, true);
            $new_project->slug = Help::generateSlug($new_project->title, Project::class);
            $new_project->description = $faker->paragraphs(2, true);
            $new_project->date_of_creation = $faker->date();
            $new_project->author = $faker->name(1,true);
            $new_project->save();
        }
        }
    }

