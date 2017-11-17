<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
//        factory(App\User::class, 10)->create();
//        factory(App\Image::class, 2)->create();

        $faker = \Faker\Factory::create();
        $annonces = \App\Annonce::OrderBy('id', 'desc')->get();

        foreach ($annonces as $annonce) {
            for ($i=0; $i<4; $i++){
                \App\Image::create([
                    'name' => $faker->randomElement(['1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','10.jpg','11.jpg','12.jpg','13.jpg','14.jpg','15.jpg','16.jpg','17.jpg','18.jpg','19.jpg','20.jpg','21.jpg',]),
                    'annonce_id' => $annonce->id,
                ]);
            }
        }

    }
}
