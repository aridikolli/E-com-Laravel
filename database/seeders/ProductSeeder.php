<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('products')->insert([

            [
                'name'=>'Oppo Mobile',
                'price'=>'300',
                'description'=>"A smart mobile with 8gb ram and other features",
                'category' => 'mobile',
                'gallery'=>'2wCEAAkGBxISERUQEhAVFRAVEBUVFhYVDxAPFREPFhUWFhYVFRUYHSggGBolGxYVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGxAQGi0fHyYtKy8rLS0tLS0tLS0tLS0tLy0tLS0tLS0tLS8tLy0tLS0tLS0tLS0tLS0tLS0vLS0tLf'

            ],
            [
                'name'=>'Panasonic TV',
                'price'=>'400',
                'description'=>"A smart TV with much featuers",
                'category' => 'TV',
                'gallery'=>'https://media.currys.biz/i/currysprod/10251849_001?$l-large$&fmt=auto'

            ],
            [
                'name'=>'Sony TV',
                'price'=>'800',
                'description'=>"A smart TV 120 HZ AND 6K",
                'category' => 'tv',
                'gallery'=>'https://www.suryaelectronics.in/CommonImageHandler/ImageHandler.ashx?imagepath=~/img/Product/Main/SONYHomeEntertainmentTelevision147.jpg&width=1080'

            ],

            [
                'name'=>'LG Fridge',
                'price'=>'200',
                'description'=>"A fridge with lot of featues",
                'category' => 'fridge',
                'gallery'=>'https://www.lg.com/ae/images/microsite/refrigerator/H%26A-CoreTech-Micopage-REF-02-1-Seals-in-Farm-M.jpg'

            ]

        ]);



    }
}
