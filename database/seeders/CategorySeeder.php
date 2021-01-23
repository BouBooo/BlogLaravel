<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $categories = ['Sport', 'Informatique', 'Nutrition', 'Automobile', 'Sciences', 'Economie'];
        $icons = ['volleyball-ball', 'code', 'utensils', 'car', 'flask', 'money-bill-wave'];

        for($c = 0; $c < 6; $c++) {
            Category::create([
                'name' => $categories[$c],
                'icon' => $icons[$c]
            ]);
        }
    }
}
