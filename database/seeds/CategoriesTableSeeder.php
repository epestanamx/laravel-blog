<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new App\Category();
        $category->name = "Sin categoría";
        $category->save();

        $category = new App\Category();
        $category->name = "Categoria 1";
        $category->save();

        $category = new App\Category();
        $category->name = "Categoria 2";
        $category->save();

        $category = new App\Category();
        $category->name = "Categoria 3";
        $category->save();
    }
}
