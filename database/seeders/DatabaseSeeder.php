<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
           'name' => 'Doni Irawan',
           'username' => 'doniirawan',
           'email' => 'doniciber@gmail.com',
           'password' => bcrypt('password')
        ]);

        //User::create([
            //'name' => 'Wawan Suherlan',
            //'email' => 'wanwan@gmail.com',
            //'password' => bcrypt('12345')
         //]);
         User::factory(3)->create();

        Category::create([
           'name' => 'Gaming',
           'slug' => 'gaming'
        ]);

        Category::create([
            'name' => 'Streaming',
            'slug' => 'streaming'
         ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
         ]);

         Post::factory(20)->create();
        //  Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quia animi a eum necessitatibus iste quidem quas nostrum ducimus nihil numquam accusamus illo
        //     natus nisi illum perspiciatis',
        //     'body' => '
        //     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quia animi a eum necessitatibus iste quidem quas nostrum ducimus nihil numquam accusamus illo
        //     natus nisi illum perspiciatis, libero labore corporis eius? Odio magni, molestiae odit repellendus at hic perferendis laborum nulla sapiente consectetur doloremque
        //     corporis consequatur accusantium fuga quisquam iure! Aspernatur, est dicta ducimus laboriosam ad ex explicabo repudiandae quos rerum doloremque, officia odio fugit
        //     quidem odit voluptatibus impedit exercitationem. Quidem placeat veritatis cum, sunt architecto sequi fugit, sint ex est mollitia amet! Accusamus, voluptatum.
        //     Perspiciatis molestias, iste cumque non quam nostrum consequatur laborum impedit eos, reiciendis culpa dolor dolore.',
        //     'category_id' => 1,
        //     'user_id' => 1
        //  ]);

        //  Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quia animi a eum necessitatibus iste quidem quas nostrum ducimus nihil numquam accusamus illo
        //     natus nisi illum perspiciatis',
        //     'body' => '
        //     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quia animi a eum necessitatibus iste quidem quas nostrum ducimus nihil numquam accusamus illo
        //     natus nisi illum perspiciatis, libero labore corporis eius? Odio magni, molestiae odit repellendus at hic perferendis laborum nulla sapiente consectetur doloremque
        //     corporis consequatur accusantium fuga quisquam iure! Aspernatur, est dicta ducimus laboriosam ad ex explicabo repudiandae quos rerum doloremque, officia odio fugit
        //     quidem odit voluptatibus impedit exercitationem. Quidem placeat veritatis cum, sunt architecto sequi fugit, sint ex est mollitia amet! Accusamus, voluptatum.
        //     Perspiciatis molestias, iste cumque non quam nostrum consequatur laborum impedit eos, reiciendis culpa dolor dolore.',
        //     'category_id' => 1,
        //     'user_id' => 1
        //  ]);

        //  Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quia animi a eum necessitatibus iste quidem quas nostrum ducimus nihil numquam accusamus illo
        //     natus nisi illum perspiciatis',
        //     'body' => '
        //     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quia animi a eum necessitatibus iste quidem quas nostrum ducimus nihil numquam accusamus illo
        //     natus nisi illum perspiciatis, libero labore corporis eius? Odio magni, molestiae odit repellendus at hic perferendis laborum nulla sapiente consectetur doloremque
        //     corporis consequatur accusantium fuga quisquam iure! Aspernatur, est dicta ducimus laboriosam ad ex explicabo repudiandae quos rerum doloremque, officia odio fugit
        //     quidem odit voluptatibus impedit exercitationem. Quidem placeat veritatis cum, sunt architecto sequi fugit, sint ex est mollitia amet! Accusamus, voluptatum.
        //     Perspiciatis molestias, iste cumque non quam nostrum consequatur laborum impedit eos, reiciendis culpa dolor dolore.',
        //     'category_id' => 2,
        //     'user_id' => 2
        //  ]);
    }
}
