<?php
// app/database/seeds/DatabaseSeeder.php
use Illuminate\Database\Seeder;
//use Illuminate\Database\seeds\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        //Eloquent::unguard();

        $this->call(UserTableSeeder::class);
    }
}