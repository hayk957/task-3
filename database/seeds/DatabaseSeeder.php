<?php

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

        DB::table('companies')->insert([
            'name' => 'Brain Fors',
            'logo' => 'brainfors_logo.png',
        ]);

        DB::table('companies')->insert([
            'name' => 'IT Space',
            'logo' => 'itspace_logo.png',
        ]);

        DB::table('companies')->insert([
            'name' => 'Volo',
            'logo' => 'volo_logo.png',
        ]);

        DB::table('companies')->insert([
            'name' => 'Resal Soft',
            'logo' => 'resal_logo.png',
        ]);

        DB::table('companies')->insert([
            'name' => 'Digital Pomergranate',
            'logo' => 'digitalpomergranate_logo.png',
        ]);

        DB::table('departments')->insert([
            'name' => 'Sales',
        ]);

        DB::table('departments')->insert([
            'name' => 'Development',
        ]);

        DB::table('departments')->insert([
            'name' => 'Financial',
        ]);

        DB::table('departments')->insert([
            'name' => 'HR',
        ]);

        DB::table('skills')->insert([
            'name' => 'Php',
            'class' => 'fab fa-php'
        ]);

        DB::table('skills')->insert([
            'name' => 'Python',
            'class' => 'fab fa-python'
        ]);

        DB::table('skills')->insert([
            'name' => 'Laravel',
            'class' => 'fab fa-laravel'
        ]);

        DB::table('skills')->insert([
            'name' => 'Yii 2',
            'class' => 'fab fa-php'

        ]);

        DB::table('skills')->insert([
            'name' => 'HTML5',
            'class' => 'fab fa-html5'
        ]);

        DB::table('skills')->insert([
            'name' => 'CSS3',
            'class' => 'fab fa-css3'
        ]);

        DB::table('skills')->insert([
            'name' => 'Java Script',
            'class' => 'fab fa-js'
        ]);

        DB::table('skills')->insert([
            'name' => 'React JS',
            'class' => 'fab fa-react'
        ]);

        DB::table('skills')->insert([
            'name' => 'Angular JS',
            'class' => 'fab fa-angular'
        ]);

        DB::table('skills')->insert([
            'name' => 'Vue JS',
            'class' => 'fab fa-vuejs'
        ]);
//
        DB::table('skills')->insert([
            'name' => 'Wordpress',
            'class' => 'fab fa-wordpress'
        ]);

        DB::table('skills')->insert([
            'name' => 'Node JS',
            'class' => 'fab fa-node-js'
        ]);
    }
}
