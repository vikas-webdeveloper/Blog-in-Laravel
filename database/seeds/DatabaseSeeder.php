<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run()
  {
   
    $this->call('PostTableSeeder');
  }

}

class PostTableSeeder extends Seeder
{
  public function run()
  {
    App\Post::truncate();

    factory(App\Post::class, 20)->create();
  }
}

/*class UserstableSeeder extends Seeder
{
	public function run()
	{
		App\User::truncate();
		factory(App\User::class, 5)->create();
	}
}*/