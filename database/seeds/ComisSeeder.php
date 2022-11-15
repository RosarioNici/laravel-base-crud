<?php

use Illuminate\Database\Seeder;
use App\Comis;

class ComisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Comis = config('data.Comis');

        foreach ($Comis as $model) {
            $Comis = new Comis();
            $Comis->title = $model['title'];
            $Comis->description = $model['description'];
            $Comis->thumb = $model['thumb'];
            $Comis->price = $model['price'];
            $Comis->series = $model['series'];
            $Comis->sale_date = $model['sale_date'];
            $Comis->type = $model['type'];
            $Comis->save();
        }
    }
}
