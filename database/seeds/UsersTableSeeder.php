<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->delete();

		App\User::create(array(
			'name'     => 'Admin',
			'username' => 'admin',
			'email' => 'admin@example.com',
			'password' => bcrypt('admin123'),
		));

		/*for($i = 1; $i <= 5; $i++){
			$posts  = new App\Product([
	        	'title'=>'Product 1',
	            'user_id'=>'http://placehold.it/300x200',
	        	'content'=>'asdfsadfwesdhkl;asdfkl;fj',
	        	'slug'=>'14'
	        ]);
	        $posts->save();
		}*/
    }
}
