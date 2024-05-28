<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologyTableSeeder extends Seeder
{
public function run(): void
    {
        $technologies = [ 'HTML','CSS','JavaScript','React.js','Angular','Vue.js','Node.js','Laravel'];

    foreach($technologies as $technology){
        $new_technology = new Technology();
        $new_technology->name = $technology;
        $new_technology->save();
    }
}
}
