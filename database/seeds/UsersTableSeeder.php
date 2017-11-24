<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Schema::enableForeignKeyConstraints();
      Schema::disableForeignKeyConstraints();
      DB::table('users')->truncate();
      
      $this->command->info('User table truncate!');

      DB::table('users')->insert([
           'firstname' => "admin",
           'lastname' => "admin",
           'name' => "admin",
           'email' => "admin@admin.com",
           'password' => bcrypt('0000'),
           'status' => 1,
      ]);
      $this->command->info('User admin created with password 0000');

      factory(App\User::class, 50)->create();
      $this->command->info('User table seeded!');
    }
}
