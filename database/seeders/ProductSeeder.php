<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'LG mobile',
                "price"=>"200$",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://www.lg.com/in/images/mobile-phones/md07523391/gallery/LMK610IM-D-01.jpg",
            ],
            [
                'name'=>'oppo mobile',
                "price"=>"200$",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://image.oppo.com/content/dam/oppo/in/mkt/homepage/middle/f19s-middle-banner-mobile.jpg.thumb.webp",
            ],
            [
                'name'=>'sony tv',
                "price"=>"400$",
                "description"=>"A smart TV with internet and much more feature",
                "category"=>"tv",
                "gallery"=>"https://m.media-amazon.com/images/I/81lpllAGcBL._SL1500_.jpg",
            ],
            [
                'name'=>'Mi tv',
                "price"=>"400$",
                "description"=>"A smart mi tv with internet and much more feature",
                "category"=>"tv",
                "gallery"=>"https://i01.appmifile.com/webfile/globalimg/in/cms/1927F00B-489F-E318-E3B1-AF53E5265F9C.jpg",
            ],
         
        ]);
    }
}
