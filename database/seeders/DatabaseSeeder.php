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
        //  \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Hannan Fh',
            'email' => '193040073@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Nura Nuraeni',
            'email' => '193040074@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);


        Category::create([
            'name' => 'Web Programing',
            'slug' => 'Web Programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis autem odit incidunt blanditiis',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis autem odit incidunt blanditiis. Sapiente dolores vero totam nisi accusamus eaque quos incidunt, perferendis repellendus deserunt iste accusantium architecto nihil illo modi? Deserunt itaque ex at autem nulla veniam culpa earum dignissimos illum sit, expedita vel magnam deleniti asperiores. Commodi provident saepe perferendis quibusdam unde quas dolorum officiis corrupti. Neque iste itaque quasi? Doloribus officiis laborum, laboriosam ipsam sequi rerum enim ullam totam eius dolor? Debitis eos aperiam quas! Magni ipsa repudiandae, voluptate, optio animi obcaecati rem ipsum tempora, ex harum veritatis. In repellendus, voluptatum ex obcaecati fugit est culpa fuga?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis autem odit incidunt blanditiis',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis autem odit incidunt blanditiis. Sapiente dolores vero totam nisi accusamus eaque quos incidunt, perferendis repellendus deserunt iste accusantium architecto nihil illo modi? Deserunt itaque ex at autem nulla veniam culpa earum dignissimos illum sit, expedita vel magnam deleniti asperiores. Commodi provident saepe perferendis quibusdam unde quas dolorum officiis corrupti. Neque iste itaque quasi? Doloribus officiis laborum, laboriosam ipsam sequi rerum enim ullam totam eius dolor? Debitis eos aperiam quas! Magni ipsa repudiandae, voluptate, optio animi obcaecati rem ipsum tempora, ex harum veritatis. In repellendus, voluptatum ex obcaecati fugit est culpa fuga?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis autem odit incidunt blanditiis',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis autem odit incidunt blanditiis. Sapiente dolores vero totam nisi accusamus eaque quos incidunt, perferendis repellendus deserunt iste accusantium architecto nihil illo modi? Deserunt itaque ex at autem nulla veniam culpa earum dignissimos illum sit, expedita vel magnam deleniti asperiores. Commodi provident saepe perferendis quibusdam unde quas dolorum officiis corrupti. Neque iste itaque quasi? Doloribus officiis laborum, laboriosam ipsam sequi rerum enim ullam totam eius dolor? Debitis eos aperiam quas! Magni ipsa repudiandae, voluptate, optio animi obcaecati rem ipsum tempora, ex harum veritatis. In repellendus, voluptatum ex obcaecati fugit est culpa fuga?',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis autem odit incidunt blanditiis',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis autem odit incidunt blanditiis. Sapiente dolores vero totam nisi accusamus eaque quos incidunt, perferendis repellendus deserunt iste accusantium architecto nihil illo modi? Deserunt itaque ex at autem nulla veniam culpa earum dignissimos illum sit, expedita vel magnam deleniti asperiores. Commodi provident saepe perferendis quibusdam unde quas dolorum officiis corrupti. Neque iste itaque quasi? Doloribus officiis laborum, laboriosam ipsam sequi rerum enim ullam totam eius dolor? Debitis eos aperiam quas! Magni ipsa repudiandae, voluptate, optio animi obcaecati rem ipsum tempora, ex harum veritatis. In repellendus, voluptatum ex obcaecati fugit est culpa fuga?',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
