<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('comments')->truncate();
      factory(App\Comments::class, 50)->create();
      $this->command->info('Comments table seeded!');
    }
}
