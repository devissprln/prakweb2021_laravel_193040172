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

        // User::create([
        //     'name' => 'Devis Suparlan',
        //     'email' => 'devissuparlan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Syahna Zahra',
        //     'email' => 'syahnazhra@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum sapiente ullam adipisci commodi
        //         sint repudiandae rerum quasi dolores, officiis, aliquid quisquam aliquam provident vel harum. Ducimus obcaecati vel 
        //         perspiciatis accusamus natus debitis unde veniam magni amet repellat. Eos ducimus eaque pariatur at labore blanditiis optio 
        //         expedita dolorem itaque maiores velit voluptate, incidunt quae, quod cupiditate temporibus exercitationem, voluptates vitae totam.
        //         n corporis vel adipisci soluta facilis cumque qui animi optio ab dignissimos quidem ipsa doloribus accusamus repellendus, quasi ullam,
        //         perspiciatis sint vero quas molestias. Cum, ducimus dolore suscipit cupiditate magnam reprehenderit enim dolorem omnis debitis,',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum sapiente ullam adipisci commodi
        //         sint repudiandae rerum quasi dolores, officiis, aliquid quisquam aliquam provident vel harum. Ducimus obcaecati vel 
        //         perspiciatis accusamus natus debitis unde veniam magni amet repellat. Eos ducimus eaque pariatur at labore blanditiis optio 
        //         expedita dolorem itaque maiores velit voluptate, incidunt quae, quod cupiditate temporibus exercitationem, voluptates vitae totam.
        //         n corporis vel adipisci soluta facilis cumque qui animi optio ab dignissimos quidem ipsa doloribus accusamus repellendus, quasi ullam,
        //         perspiciatis sint vero quas molestias. Cum, ducimus dolore suscipit cupiditate magnam reprehenderit enim dolorem omnis debitis,',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-Tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum sapiente ullam adipisci commodi
        //         sint repudiandae rerum quasi dolores, officiis, aliquid quisquam aliquam provident vel harum. Ducimus obcaecati vel 
        //         perspiciatis accusamus natus debitis unde veniam magni amet repellat. Eos ducimus eaque pariatur at labore blanditiis optio 
        //         expedita dolorem itaque maiores velit voluptate, incidunt quae, quod cupiditate temporibus exercitationem, voluptates vitae totam.
        //         n corporis vel adipisci soluta facilis cumque qui animi optio ab dignissimos quidem ipsa doloribus accusamus repellendus, quasi ullam,
        //         perspiciatis sint vero quas molestias. Cum, ducimus dolore suscipit cupiditate magnam reprehenderit enim dolorem omnis debitis,',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-Empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum sapiente ullam adipisci commodi
        //         sint repudiandae rerum quasi dolores, officiis, aliquid quisquam aliquam provident vel harum. Ducimus obcaecati vel 
        //         perspiciatis accusamus natus debitis unde veniam magni amet repellat. Eos ducimus eaque pariatur at labore blanditiis optio 
        //         expedita dolorem itaque maiores velit voluptate, incidunt quae, quod cupiditate temporibus exercitationem, voluptates vitae totam.
        //         n corporis vel adipisci soluta facilis cumque qui animi optio ab dignissimos quidem ipsa doloribus accusamus repellendus, quasi ullam,
        //         perspiciatis sint vero quas molestias. Cum, ducimus dolore suscipit cupiditate magnam reprehenderit enim dolorem omnis debitis,',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
