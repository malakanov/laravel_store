<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            DB::table('products')->insert([
                'title' => 'Product ' . $i,
                'price' => rand(200, 1500),
                'in_stock' => 1,
                'description' => 'Laravel includes a simple method of seeding your database with test data using seed classes. All seed classes are stored in the database/seeders directory. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.',
            ]);
        }

    }
}
