<?php

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
      DB::table('category')->truncate();
      factory(App\Category::class, 50)->create();
      $this->command->info('Category table seeded!');
    }
}
