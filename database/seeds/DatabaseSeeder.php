<?php

use App\Models\Contact;
use App\User;
use Faker\Factory;
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
        $chars = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '.', '-', ];
        User::insert([
           'name' => 'Adrien',
            'last_name' => 'Bourgeois',
            'email' => 'adrienbourgeois4@gmail.com',
            'phone' => '0695328860',
            'password' => bcrypt('ab25081995'),
        ]);

        $faker = Factory::create();
        for ($i = 0; $i < 500; ++$i) {
            $phone = '0';
            $phone = $phone . $chars[rand(1, 9)];
            $found = false;
            do {
                if(rand(0, 1) == 1)
                    $phone = $phone . $chars[rand(10, 11)];
                $phone = $phone . $chars[rand(0, 9)];
                $phone = $phone . $chars[rand(0, 9)];
                preg_match("(0[1-9]([.-]?[0-9]{2}){4})", $phone, $found);
            } while(!$found);
            Contact::insert([
                'name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'phone' => $phone,
                'id_contact' => 1,
            ]);
        }
    }
}
