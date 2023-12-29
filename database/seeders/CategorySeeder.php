<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Activity Books',   
        ]);
        Category::create([
            'name'=>'Science',
        ]);
        Category::create([
            'name'=>'Mathematics',
        ]);
        Category::create([
            'name'=>'Life Skills',
        ]);
        Category::create([
            'name'=>'Communication',
        ]);
        Category::create([
            'name'=>'Social Studies',
        ]);
        Category::create([
            'name'=>'ICT',
        ]);
        Category::create([
            'name'=>'Commerce, Business & Accounting',
        ]);
        Category::create([
            'name'=>'Song Books',
        ]);
        Category::create([
            'name'=>'Sinhala',
        ]);
        Category::create([
            'name'=>'French',
        ]);
        Category::create([
            'name'=>'Tamil',
        ]);
        Category::create([
            'name'=>'Other',
        ]);
    }
}
