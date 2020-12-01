<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::createWithAttributes(['name' => 'alma']);
        Tag::createWithAttributes(['name' => 'korte']);
        Tag::createWithAttributes(['name' => 'szilva']);
        Tag::createWithAttributes(['name' => 'cseresznye']);
        Tag::createWithAttributes(['name' => 'dinnye']);
        Tag::createWithAttributes(['name' => 'dio']);
    }
}
