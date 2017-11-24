<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
      DB::table('articles')->truncate();
      factory(App\Article::class, 50)->create();
      $this->command->info('Articles table seeded!');
    }
}
