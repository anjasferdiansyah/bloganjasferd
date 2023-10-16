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


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Mohammad Anjas F',
            'username' => 'mohammadanjas',
            'email' => 'mohammadanjas82@gmail.com',
            'password' => bcrypt('password'),
        ]);


        User::factory(3)->create();
        // User::create([
        //     'name' => 'Nira Kania Putri',
        //     'email' => 'nira@gmail.com',
        //     'password' => bcrypt('password'),
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Life Style',
            'slug' => 'life-style',
        ]);
        Category::create([
            'name' => 'Health',
            'slug' => 'health',
        ]);

        Category::create([
            'name' => 'Travel',
            'slug' => 'travel',
        ]);

        Category::create([
            'name' => 'Self Improvement',
            'slug' => 'self-improvement',
        ]);
        Category::create([
            'name' => 'Religion',
            'slug' => 'religion',
        ]);

        // Post::create(
        //     [
        //         'title' => 'Kelebihan Menggunakan Bahasa Pemrograman Python',
        //         'slug' => 'kelebihan-menggunakan-bahasa-pemrograman-python',
        //         'excerpt' => 'Algoritma adalah langkah-langkah yang terstruktur untuk menyelesaikan masalah. Dalam pemrograman, pemahaman yang baik tentang algoritma sangat penting karena algoritma yang efisien dapat mengoptimalkan kinerja program Anda.',
        //         'body' => 'Python adalah bahasa pemrograman yang populer karena sintaksisnya yang mudah dipahami dan beragamnya penggunaan. Kelebihan Python mencakup ekosistemnya yang besar, komunitas yang ramah, dan banyaknya pustaka yang tersedia. Python dapat digunakan dalam berbagai proyek, mulai dari pengembangan web hingga kecerdasan buatan.
        //         Kelebihan besar Python adalah kemampuannya untuk membantu pemrogram dalam menyelesaikan tugas-tugas dengan cepat dan efisien. Bahasa ini juga mendukung paradigma pemrograman berbagai, sehingga Anda dapat menggunakan gaya pemrograman yang sesuai dengan kebutuhan Anda. Dengan adanya Python, Anda dapat dengan mudah memulai proyek pemrograman dan mengembangkannya dengan cepat.',
        //         'category_id' => 1,
        //         'user_id' => 1
        //     ]
        // );

        // Post::create([
        //     'title' => 'Cara Mencapai Keseimbangan Kehidupan Kerja dan Kehidupan Pribadi',
        //     'slug' => 'cara-mencapai-keseimbangan-kehidupan-kerja-dan-kehidupan-pribadi',
        //     'excerpt' => 'Kehidupan kerja dan kehidupan pribadi adalah kehidupan yang berkelanjutan. Kehidupan kerja dan kehidupan pribadi harus terus berjalan sesuai dengan kehidupan hidup yang kita lakukan.',
        //     'body' => 'Mencapai keseimbangan antara kehidupan kerja dan kehidupan pribadi adalah tantangan yang sering dihadapi oleh banyak orang. Keseimbangan ini penting untuk menjaga kesejahteraan fisik dan mental Anda. Salah satu cara untuk mencapai keseimbangan ini adalah dengan mengatur jadwal yang baik. Pertama, identifikasi prioritas Anda dan alokasikan waktu yang cukup untuk keluarga, teman, dan aktivitas rekreasi. Selanjutnya, coba tetapkan batasan untuk pekerjaan Anda, seperti tidak membawa pekerjaan ke rumah atau menentukan waktu yang khusus untuk menangani tugas pekerjaan. Ini akan membantu Anda mendapatkan waktu berkualitas dengan orang-orang yang Anda cintai dan menjaga stres dalam batas yang sehat. Selain itu, penting untuk merawat diri Anda. Ini termasuk olahraga, meditasi, tidur yang cukup, dan pola makan sehat. Dengan menjaga tubuh dan pikiran Anda dalam kondisi baik, Anda akan lebih mampu menghadapi tantangan dalam pekerjaan dan kehidupan pribadi Anda.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Kehidupan kerja dan kehidupan pribadi adalah kehidupan yang berkelanjutan. Kehidupan kerja dan kehidupan pribadi harus terus berjalan sesuai dengan kehidupan hidup yang kita lakukan.',
        //     'body' => 'Mencapai keseimbangan antara kehidupan kerja dan kehidupan pribadi adalah tantangan yang sering dihadapi oleh banyak orang. Keseimbangan ini penting untuk menjaga kesejahteraan fisik dan mental Anda. Salah satu cara untuk mencapai keseimbangan ini adalah dengan mengatur jadwal yang baik. Pertama, identifikasi prioritas Anda dan alokasikan waktu yang cukup untuk keluarga, teman, dan aktivitas rekreasi. Selanjutnya, coba tetapkan batasan untuk pekerjaan Anda, seperti tidak membawa pekerjaan ke rumah atau menentukan waktu yang khusus untuk menangani tugas pekerjaan. Ini akan membantu Anda mendapatkan waktu berkualitas dengan orang-orang yang Anda cintai dan menjaga stres dalam batas yang sehat. Selain itu, penting untuk merawat diri Anda. Ini termasuk olahraga, meditasi, tidur yang cukup, dan pola makan sehat. Dengan menjaga tubuh dan pikiran Anda dalam kondisi baik, Anda akan lebih mampu menghadapi tantangan dalam pekerjaan dan kehidupan pribadi Anda.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        Post::factory(24)->create();
    }
}
