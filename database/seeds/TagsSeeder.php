<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->truncate();
        factory(App\Tags::class, 50)->create();
        $this->command->info('Tags table seeded!');
    }
}
