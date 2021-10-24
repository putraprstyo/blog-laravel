<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        
        User::create([
                'name' => 'Sumanto',
                'username' => 'sumanto',
                'email' => 'sumanto@gmail.com',
                'password' => bcrypt('12345')
        ]);
        
        // User::create([
            //     'name' => 'Putra Praseto',
            //     'email' => 'putra@gmail.com',
            //     'password' => bcrypt('12345')
            // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Network Computer',
            'slug' => 'network-computer'
        ]);

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-dev'
        ]);

        Category::create([
            'name' => 'Cyber Security',
            'slug' => 'cyber-security'
        ]);

        Blog::factory(20)->create();

        // Blog::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, ea nobis veniam id reprehenderit suscipit aliquam, aperiam voluptatibus eveniet modi nulla numquam repellat tempora animi atque, doloribus consectetur ullam in!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto incidunt dolor porro deserunt voluptas consequatur est unde, iste sapiente minus exercitationem corporis voluptate, amet iure repellendus id veritatis itaque mollitia illo molestias vitae ipsa odio. Vero adipisci culpa repellendus enim dolor sequi vel quam incidunt animi nihil dicta velit, provident quaerat, quo qui non maiores sunt nulla quod distinctio. Ad, molestiae! Aspernatur inventore quis, quibusdam illum sunt sapiente. Alias hic quidem aliquid dolore consectetur assumenda doloribus velit numquam earum et officia, vel esse libero accusamus eligendi. Voluptas reiciendis magnam adipisci quia quos, vitae non est corrupti impedit. Nulla, eius. Nihil pariatur et voluptatem sit omnis error, incidunt neque similique aliquid quos quia quasi perferendis, cupiditate cumque iure repudiandae saepe consequatur! Optio omnis saepe iste odit at! Sit necessitatibus maiores quis optio sapiente doloribus autem minus odit pariatur aperiam, impedit corrupti ea numquam dolorem eaque in dicta libero! Quod, sit maiores.',
        //     'category_id' => 1,
        //     'user_id'=>1
        // ]);

        // Blog::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, ea nobis veniam id reprehenderit suscipit aliquam, aperiam voluptatibus eveniet modi nulla numquam repellat tempora animi atque, doloribus consectetur ullam in!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto incidunt dolor porro deserunt voluptas consequatur est unde, iste sapiente minus exercitationem corporis voluptate, amet iure repellendus id veritatis itaque mollitia illo molestias vitae ipsa odio. Vero adipisci culpa repellendus enim dolor sequi vel quam incidunt animi nihil dicta velit, provident quaerat, quo qui non maiores sunt nulla quod distinctio. Ad, molestiae! Aspernatur inventore quis, quibusdam illum sunt sapiente. Alias hic quidem aliquid dolore consectetur assumenda doloribus velit numquam earum et officia, vel esse libero accusamus eligendi. Voluptas reiciendis magnam adipisci quia quos, vitae non est corrupti impedit. Nulla, eius. Nihil pariatur et voluptatem sit omnis error, incidunt neque similique aliquid quos quia quasi perferendis, cupiditate cumque iure repudiandae saepe consequatur! Optio omnis saepe iste odit at! Sit necessitatibus maiores quis optio sapiente doloribus autem minus odit pariatur aperiam, impedit corrupti ea numquam dolorem eaque in dicta libero! Quod, sit maiores.',
        //     'category_id' => 1,
        //     'user_id'=>1
        // ]);

        // Blog::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, ea nobis veniam id reprehenderit suscipit aliquam, aperiam voluptatibus eveniet modi nulla numquam repellat tempora animi atque, doloribus consectetur ullam in!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto incidunt dolor porro deserunt voluptas consequatur est unde, iste sapiente minus exercitationem corporis voluptate, amet iure repellendus id veritatis itaque mollitia illo molestias vitae ipsa odio. Vero adipisci culpa repellendus enim dolor sequi vel quam incidunt animi nihil dicta velit, provident quaerat, quo qui non maiores sunt nulla quod distinctio. Ad, molestiae! Aspernatur inventore quis, quibusdam illum sunt sapiente. Alias hic quidem aliquid dolore consectetur assumenda doloribus velit numquam earum et officia, vel esse libero accusamus eligendi. Voluptas reiciendis magnam adipisci quia quos, vitae non est corrupti impedit. Nulla, eius. Nihil pariatur et voluptatem sit omnis error, incidunt neque similique aliquid quos quia quasi perferendis, cupiditate cumque iure repudiandae saepe consequatur! Optio omnis saepe iste odit at! Sit necessitatibus maiores quis optio sapiente doloribus autem minus odit pariatur aperiam, impedit corrupti ea numquam dolorem eaque in dicta libero! Quod, sit maiores.',
        //     'category_id' => 2,
        //     'user_id'=>1
        // ]);

        // Blog::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-kempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, ea nobis veniam id reprehenderit suscipit aliquam, aperiam voluptatibus eveniet modi nulla numquam repellat tempora animi atque, doloribus consectetur ullam in!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto incidunt dolor porro deserunt voluptas consequatur est unde, iste sapiente minus exercitationem corporis voluptate, amet iure repellendus id veritatis itaque mollitia illo molestias vitae ipsa odio. Vero adipisci culpa repellendus enim dolor sequi vel quam incidunt animi nihil dicta velit, provident quaerat, quo qui non maiores sunt nulla quod distinctio. Ad, molestiae! Aspernatur inventore quis, quibusdam illum sunt sapiente. Alias hic quidem aliquid dolore consectetur assumenda doloribus velit numquam earum et officia, vel esse libero accusamus eligendi. Voluptas reiciendis magnam adipisci quia quos, vitae non est corrupti impedit. Nulla, eius. Nihil pariatur et voluptatem sit omnis error, incidunt neque similique aliquid quos quia quasi perferendis, cupiditate cumque iure repudiandae saepe consequatur! Optio omnis saepe iste odit at! Sit necessitatibus maiores quis optio sapiente doloribus autem minus odit pariatur aperiam, impedit corrupti ea numquam dolorem eaque in dicta libero! Quod, sit maiores.',
        //     'category_id' => 2,
        //     'user_id'=>2
        // ]);

    }
}
