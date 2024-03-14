<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        


        User::create([
            'name' =>'Gistya Devi',
            'username' => 'gistyadevi',
            'email' => 'gistyadevi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' =>'Gistya Devi Sulistyawati',
        //     'email' => 'gistya@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        
        // Post::create([
        //     'title' =>'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, laboriosam! Quam reprehenderit quas dolor molestias cum dicta nisi voluptatem autem possimus dolorem. Dolor, distinctio nulla quaerat, minus earum rerum, eius reprehenderit dolore illum at voluptatibus! Quod, debitis! Beatae illum repellat fuga impedit eligendi necessitatibus praesentium cumque dignissimos, nobis quaerat velit, dicta distinctio quod exercitationem commodi doloremque libero adipisci vero sequi, expedita laudantium soluta! Dolorum, quisquam beatae magnam iste doloremque illum corrupti assumenda explicabo nulla, commodi repudiandae fugiat ex distinctio maxime, expedita quae? Nemo cumque sapiente saepe mollitia aliquid maxime! Inventore accusantium deleniti officiis minus vero. Soluta minus ipsum deleniti quia?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' =>'JudulKedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, laboriosam! Quam reprehenderit quas dolor molestias cum dicta nisi voluptatem autem possimus dolorem. Dolor, distinctio nulla quaerat, minus earum rerum, eius reprehenderit dolore illum at voluptatibus! Quod, debitis! Beatae illum repellat fuga impedit eligendi necessitatibus praesentium cumque dignissimos, nobis quaerat velit, dicta distinctio quod exercitationem commodi doloremque libero adipisci vero sequi, expedita laudantium soluta! Dolorum, quisquam beatae magnam iste doloremque illum corrupti assumenda explicabo nulla, commodi repudiandae fugiat ex distinctio maxime, expedita quae? Nemo cumque sapiente saepe mollitia aliquid maxime! Inventore accusantium deleniti officiis minus vero. Soluta minus ipsum deleniti quia?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' =>'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, laboriosam! Quam reprehenderit quas dolor molestias cum dicta nisi voluptatem autem possimus dolorem. Dolor, distinctio nulla quaerat, minus earum rerum, eius reprehenderit dolore illum at voluptatibus! Quod, debitis! Beatae illum repellat fuga impedit eligendi necessitatibus praesentium cumque dignissimos, nobis quaerat velit, dicta distinctio quod exercitationem commodi doloremque libero adipisci vero sequi, expedita laudantium soluta! Dolorum, quisquam beatae magnam iste doloremque illum corrupti assumenda explicabo nulla, commodi repudiandae fugiat ex distinctio maxime, expedita quae? Nemo cumque sapiente saepe mollitia aliquid maxime! Inventore accusantium deleniti officiis minus vero. Soluta minus ipsum deleniti quia?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' =>'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, laboriosam! Quam reprehenderit quas dolor molestias cum dicta nisi voluptatem autem possimus dolorem. Dolor, distinctio nulla quaerat, minus earum rerum, eius reprehenderit dolore illum at voluptatibus! Quod, debitis! Beatae illum repellat fuga impedit eligendi necessitatibus praesentium cumque dignissimos, nobis quaerat velit, dicta distinctio quod exercitationem commodi doloremque libero adipisci vero sequi, expedita laudantium soluta! Dolorum, quisquam beatae magnam iste doloremque illum corrupti assumenda explicabo nulla, commodi repudiandae fugiat ex distinctio maxime, expedita quae? Nemo cumque sapiente saepe mollitia aliquid maxime! Inventore accusantium deleniti officiis minus vero. Soluta minus ipsum deleniti quia?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
