<?php

use Illuminate\Database\Seeder;
use App\Models\Useinfo;

class UseinfosTableSeeder extends Seeder
{
    public function run()
    {
        $useinfos = factory(Useinfo::class)->times(50)->make()->each(function ($useinfo, $index) {
            if ($index == 0) {
                // $useinfo->field = 'value';
            }
        });

        Useinfo::insert($useinfos->toArray());
    }

}

