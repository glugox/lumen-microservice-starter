<?php

/*
 * This file is part of Glugox.
 *
 * (c) Glugox <glugox@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;


/**
 * Description of UserTableSeeder
 *
 * @author Ervin
 */
class UserTableSeeder extends Seeder {
    
  
    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() 
    {
         
        $faker = \Faker\Factory::create();
        User::unguard();
        
        $user = User::create([
                'email' => 'glugox@gmail.com',
                'password' => app('hash')->make('demo123')
            ]); 

        User::reguard();
    }
    
}
    