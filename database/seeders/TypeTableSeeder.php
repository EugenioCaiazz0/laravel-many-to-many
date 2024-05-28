<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeTableSeeder extends Seeder
{
    public function run(): void
    {
        $data=[
            'front-end','back-end'
        ];

        foreach($data as $type){
            $new_type = new Type();
            $new_type->name = $type;
            $new_type->save();
        }
    }
}
