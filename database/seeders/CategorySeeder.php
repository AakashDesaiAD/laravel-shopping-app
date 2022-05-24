<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            'title'=>'Electronics',
            'is_child'=> false,
            'parent_id'=> null,
        ];
        
        Category::create($category);
    }
}
