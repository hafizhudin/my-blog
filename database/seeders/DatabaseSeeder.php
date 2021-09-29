<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Work;
use App\Models\Year;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Muhammad Hafizhuddin',
            'username' => 'hafizhuddin',
            'email' => 'didin@example.com',
            'password' => bcrypt('password')
        ]);

        User::factory(2)->create();
        Post::factory(20)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        // User::create([
        //     'name' => 'Harry Styles',
        //     'email' => 'harry@example.com',
        //     'password' => bcrypt('harry')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'date' => '2019-02-4',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit in laborum perferendis aliquam provident non est deserunt temporibus ut, fugit nostrum quae voluptates eos earum.',
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit in laborum perferendis aliquam provident non est deserunt temporibus ut, fugit nostrum quae voluptates eos earum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque doloribus repellendus iste quibusdam expedita nesciunt deleniti optio eligendi aliquid reiciendis.</p> <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam odio minus saepe optio facilis modi quo itaque fugiat aut. Ut voluptas, atque non deserunt rerum, tempore beatae aspernatur nemo maxime fugit harum error id autem excepturi? Sint numquam nulla blanditiis dolore reiciendis fugit dicta commodi consequatur, necessitatibus quae, excepturi suscipit?</p>",
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit in laborum perferendis aliquam provident non est deserunt temporibus ut, fugit nostrum quae voluptates eos earum.',
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit in laborum perferendis aliquam provident non est deserunt temporibus ut, fugit nostrum quae voluptates eos earum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque doloribus repellendus iste quibusdam expedita nesciunt deleniti optio eligendi aliquid reiciendis.</p> <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam odio minus saepe optio facilis modi quo itaque fugiat aut. Ut voluptas, atque non deserunt rerum, tempore beatae aspernatur nemo maxime fugit harum error id autem excepturi? Sint numquam nulla blanditiis dolore reiciendis fugit dicta commodi consequatur, necessitatibus quae, excepturi suscipit?</p>",
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
