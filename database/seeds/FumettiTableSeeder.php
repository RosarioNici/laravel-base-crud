<?php

use Illuminate\Database\Seeder;
use App\fumetto;

class FumettiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fumettos = config('data.fumetti');
        foreach ($fumettos as $item);
        $fumetto = new fumetto();
        $fumetto->title = $item['title'];
        $fumetto->description = $item['description'];
        $fumetto->thumb = $item['thumb'];
        $fumetto->price = $item['price'];
        $fumetto->series = $item['series'];
        $fumetto->sale_date = $item['sale_date'];
        $fumetto->type = $item['type'];
        $fumetto->save();
    }
}
