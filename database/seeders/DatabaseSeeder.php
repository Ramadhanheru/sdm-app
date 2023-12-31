<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
       // \App\Models\User::factory(10)->create();
        //User::factory(5)->create();
    //    User::create([
    //         'name' => 'ramadhanheru',
    //         'email' => 'rheruuuu@example.com',
    //         'password' => bcrypt('12345')
    //     ]);
        User::create([
            'post_id' => 13,
            'username' => 'ramadhanheru',
            'email' => 'heruuuuu@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'post_id' => 16,
            'username' => 'satria',
            'email' => 'priyambodo_satria@gmail.com',
            'role' => 'personal',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'post_id' => 17,
            'username' => 'andre',
            'email' => 'aliandri@gmail.com',
            'role' => 'personal',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'post_id' => 20,
            'username' => 'pag',
            'email' => 'indahwina@gmail.com',
            'role' => 'plant',
            'password' => bcrypt('12345')
        ]);


        Category::create([
            'kode_unit' => 'FK01',
            'nama_unit' => 'KB BATANG HARI',
            'alias' => 'BATANG HARI',
            'nickname'=> 'BHR'
        ]);
        Category::create([
            'kode_unit' => 'FK02',
            'nama_unit' => 'KB BUKIT CERMIN',
            'alias' => 'BUKIT CERMIN',
            'nickname'=> 'BKC'
        ]);
        Category::create([
            'kode_unit' => 'FK03',
            'nama_unit' => 'KB BUNUT',
            'alias' => 'BUNUT',
            'nickname'=> 'BUN'
        ]);
        Category::create([
            'kode_unit' => 'FK04',
            'nama_unit' => 'KB DANAU KEMBAR',
            'alias' => 'DANAU KEMBAR',
            'nickname'=> 'DAR'
        ]);
        Category::create([
            'kode_unit' => 'FK05',
            'nama_unit' => 'KB DURIAN LUNCUK',
            'alias' => 'DURIAN LUNCUK',
            'nickname'=> 'DRL'
        ]);
        Category::create([
            'kode_unit' => 'FK06',
            'nama_unit' => 'KB KAYU ARO',
            'alias' => 'KAYU ARO',
            'nickname'=> 'ARO'
        ]);
        Category::create([
            'kode_unit' => 'FK07',
            'nama_unit' => 'KB OPHIR',
            'alias' => 'OPHIR',
            'nickname'=> 'OPH'
        ]);
        Category::create([
            'kode_unit' => 'FK08',
            'nama_unit' => 'KB PANGK 50 KOTA',
            'alias' => 'PANGK 50 KOTA',
            'nickname'=> 'PLK'
        ]);
        Category::create([
            'kode_unit' => 'FK09',
            'nama_unit' => 'KB RIM BUJANG 2',
            'alias' => 'RIM BUJANG 2',
            'nickname'=> 'RDU'
        ]);
        Category::create([
            'kode_unit' => 'FK10',
            'nama_unit' => 'KB RIM BUJANG 1',
            'alias' => 'RIM BUJANG 1',
            'nickname'=> 'RSA'
        ]);
        Category::create([
            'kode_unit' => 'FK11',
            'nama_unit' => 'KB SOLOK SEL',
            'alias' => 'SOLOK SEL',
            'nickname'=> 'SSL'
        ]);
        Category::create([
            'kode_unit' => 'FK12',
            'nama_unit' => 'KB TJ LEBAR',
            'alias' => 'TJ LEBAR',
            'nickname'=> 'TLB'
        ]);
        Category::create([
            'kode_unit' => 'FP01',
            'nama_unit' => 'PB AUR GADING',
            'alias' => 'AUR GADING',
            'nickname'=> 'PAG'
        ]);
        Category::create([
            'kode_unit' => 'FP02',
            'nama_unit' => 'PB PINANG TINGGI',
            'alias' => 'PINANG TINGGI',
            'nickname'=> 'PSB'
        ]);
        Category::create([
            'kode_unit' => 'FP03',
            'nama_unit' => 'PB BUNUT',
            'alias' => 'BUNUT',
            'nickname'=> 'PSB'
        ]);
        Category::create([
            'kode_unit' => 'FP04',
            'nama_unit' => 'PB TJ LEBAR',
            'alias' => 'TJ LEBAR',
            'nickname'=> 'TLB'
        ]);
        Category::create([
            'kode_unit' => 'FP05',
            'nama_unit' => 'PB RIM BUJANG 2',
            'alias' => 'RIM BUJANG 2',
            'nickname'=> 'RDU'
        ]);
        Category::create([
            'kode_unit' => 'FP06',
            'nama_unit' => 'PB SOLOK SEL',
            'alias' => 'SOLOK SEL',
            'nickname'=> 'SSL'
        ]);
        Category::create([
            'kode_unit' => 'FP07',
            'nama_unit' => 'PB OPHIR',
            'alias' => 'OPHIR',
            'nickname'=> 'OPH'
        ]);
        Category::create([
            'kode_unit' => 'FP08',
            'nama_unit' => 'PB KAYU ARO',
            'alias' => 'KAYU ARO',
            'nickname'=> 'ARO'
        ]);
        Category::create([
            'kode_unit' => 'FP09',
            'nama_unit' => 'PB DANAU KEMBAR',
            'alias' => 'DANAU KEMBAR',
            'nickname'=> 'DAR'
        ]);
        Category::create([
            'kode_unit' => 'FP11',
            'nama_unit' => 'PB PENGABUAN',
            'alias' => 'PENGABUAN',
            'nickname'=> 'PGB'
        ]);
        Category::create([
            'kode_unit' => 'FK15',
            'nama_unit' => 'KB LAGAN',
            'alias' => 'LAGAN',
            'nickname'=> 'LGN'
        ]);
        Category::create([
            'kode_unit' => 'FK14',
            'nama_unit' => 'KB BUKIT KAUSAR',
            'alias' => 'BUKIT KAUSAR',
            'nickname'=> 'BKK'
        ]);
        Category::create([
            'kode_unit' => 'FAP2',
            'nama_unit' => 'KB ALAM LESTARI NUSANTARA',
            'alias' => 'ALAM LESTARI NUSANTARA',
            'nickname'=> 'ALN'
        ]);
        Category::create([
            'kode_unit' => 'F000',
            'nama_unit' => 'KB KANTOR PUSAT',
            'alias' => 'KANTOR PUSAT',
            'nickname'=> 'KANPUS'
        ]);
        Category::create([
            'kode_unit' => 'F999',
            'nama_unit' => 'ADDITIONAL',
            'alias' => 'ADDITIONAL',
            'nickname'=> 'ADD'
        ]);
        Category::create([
            'kode_unit' => 'F888',
            'nama_unit' => 'IT3B',
            'alias' => 'IT3B',
            'nickname'=> 'IT3B'
        ]);


        Post::factory(20)->create();

         //User::factory(5)->create();

        // Post::create([
        //     'category_id' => '1',
        //     'user_id' => '1',
        //     'username' => 'Satria Nugraha',
        //     'role' => 'Plant',
        //     'slug' => 'satria_plant'
        // ]);
        // Post::create([
        //     'category_id' => '2',
        //     'user_id' => '1',
        //     'username' => 'Dikacis',
        //     'role' => 'Plant',
        //     'slug' => 'dikacis_plant'
        // ]);
        // Post::create([
        //     'category_id' => '2',
        //     'user_id' => '1',
        //     'username' => 'Heru Ramadhan',
        //     'role' => 'Admin',
        //     'slug' => 'heru_plant'
        // ]);
        // Post::create([
        //     'category_id' => '3',
        //     'user_id' => '1',
        //     'username' => 'Ahmad Yani',
        //     'role' => 'Plant',
        //     'slug' => 'ucok_plant'
        // ]);
        // Post::create([
        //     'category_id' => '3',
        //     'user_id' => '2',
        //     'username' => 'Sulha',
        //     'role' => 'Plant',
        //     'slug' => 'sulha_plant'
        // ]);
        // Post::create([
        //     'category_id' => '5',
        //     'user_id' => '2',
        //     'username' => 'Indraa warkop',
        //     'role' => 'Plant',
        //     'slug' => 'indra_plant'
        // ]);


    }
}
